<?php 
  if(isset($_GET['logout'])){
    session_destroy();
    header("location:../signin/signin.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">

  <style>
    :root {
      --color-lightcoral: #E19191 !important;
      --color-slategray: #738290 !important;
      --color-babypowder: #FFFCF7 !important;
      --text-babypowder: #FFFCF7 !important;
      --color-dark: #222222 !important;
      --color-rufus: #B02E0C;
    }

    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    input:focus {
      outline: var(--color-rufus) solid 1px;
    }

    body {
      min-height: calc(100vh - 40px);
      width: 100%;
      background-color: var(--color-babypowder);
      color: var(--color-dark);
      padding: 20px;
    }

    .imagesize, img {
      width: 100px;
      height: 100px;
      object-fit: cover;

      border-radius: 50%;
    }

    .sidebar {
      position: fixed;
      top: 0;
      left: 0;
      height: 100vh;
      width: 250px;
      background-color: var(--color-lightcoral);
      padding: 20px;

      display: flex;
  justify-content: flex-start;
  flex-direction: column;
  align-items: center;

  text-align: center;

    }

    .sidebar ul {
      list-style-type: none;
      padding: 0;
    }

    .sidebar ul li a {
      display: block;
      padding: 10px;
      border-radius: 8px;
      text-decoration: none;
      color: var(--color-dark);
    }

    .sidebar ul li a:hover {
      background-color: var(--color-rufus);
      color: var(--text-babypowder);
      transition: 0.5s;
    }

    main {
      margin-left: 250px;
      padding: 20px;
    }

    .container {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }

    .card {
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      padding: 20px;
      width: calc(33.333% - 20px);
      box-sizing: border-box;
    }

    .card p {
      margin: 5px 0;
    }

    .card strong {
      font-weight: bold;
    }

    .button-container {
      margin-top: 10px;
    }

    .button-container form {
      display: inline-block;
    }

    .button-container button {
      padding: 5px 10px;
      border: none;
      border-radius: 5px;
      background-color: var(--color-rufus);
      color: #fff;
      cursor: pointer;
    }
    
    .button-container .cancel-button {
      background-color: #555; /* Grey color for cancel button */
    }
  </style>
</head>
<body>

<header>
  <div class="sidebar">
    <div class="imagesize"><img src="../img/admin_prodile.jpeg" alt=""></div>
    <h1>Admin</h1>
    <ul>
      <li><a href="admin.php">Home</a></li>
      <li><a href="products.php">Products</a></li>
      <li><a href="order.php">Orders</a></li>
      <li><a href="dashboard.php">Dashboard</a></li>
      <li><a href="reports.php">Reports</a></li>
      <li><a href="?logout">Logout</a></li>
    </ul>
  </div>
</header>

<main>
  <div class="container">
  <?php
include("../database/database.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  date_default_timezone_set('Asia/Manila'); // Set the default time zone to PHT

  if (isset($_POST['confirm_order'])) {
      $tracking_number = $_POST['tracking_number'];
      $confirmation_date = date('Y-m-d H:i:s'); // Get the current date and time in PHT
      // Update the order status to 'G' and set the confirmation date in the database
      $update_sql = "UPDATE checkouts SET order_status = 'G', confirmation_date = '$confirmation_date' WHERE tracking_number = '$tracking_number'";
      mysqli_query($conn, $update_sql);
  } elseif (isset($_POST['cancel_order'])) {
      $tracking_number = $_POST['tracking_number'];
      // Update the order status to 'C' in the database
      $update_sql = "UPDATE checkouts SET order_status = 'C' WHERE tracking_number = '$tracking_number'";
      mysqli_query($conn, $update_sql);
  }
}

// Fetch the checkouts data grouped by user_id and tracking_number
$sql = "SELECT * FROM checkouts ORDER BY user_id, tracking_number";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    $current_user_id = '';
    $current_tracking_number = '';

    while ($row = mysqli_fetch_assoc($result)) {
        if ($row['user_id'] != $current_user_id || $row['tracking_number'] != $current_tracking_number) {
            if ($current_tracking_number != '') {
                // Add the confirm and cancel buttons for the previous group
                if ($order_status != 'C' && $order_status != 'G') {
                    echo '<div class="button-container">';
                    echo '<form action="" method="post">';
                    echo '<input type="hidden" name="tracking_number" value="' . htmlspecialchars($current_tracking_number) . '">';
                    echo '<button type="submit" name="confirm_order" class="confirm-button" style="margin-right: 10px; background-color: green;">Confirm Order</button>';
                    echo '<button type="submit" name="cancel_order" class="cancel-button"  style="margin-right: 10px; background-color: #B02E0C;">Cancel Order</button>';
                    echo '</form>';
                    echo '</div>';
                }
                echo '</div>'; // Close card
            }
            // Start a new user and tracking number group
            $current_user_id = $row['user_id'];
            $current_tracking_number = $row['tracking_number'];
            $order_status = $row['order_status'];
            echo "<div class='card'>";
            echo "<p><strong>User ID:</strong> " . htmlspecialchars($row['user_id']) . "</p>";
            echo "<p><strong>Tracking Number:</strong> " . htmlspecialchars($row['tracking_number']) . "</p>";
            // Check if the order is cancelled
            if ($row['order_status'] == 'C') {
                echo "<p style=\"color: #B02E0C; font-weight: bold; font-size: 16px;\">The order cancelled.</p>";
            } elseif ($row['order_status'] == 'G') {
                echo "<p style=\"color: green; font-weight: bold; font-size: 16px;\">The order is confirmed.</p>";
            }
            echo "<p><strong>Total Amount:</strong> ₱" . number_format($row['total_amount'], 2) . "</p>";
            echo "<p><strong>Payment Method:</strong> " . htmlspecialchars($row['payment_method']) . "</p>";
            echo "<p><strong>Order Date:</strong> " . htmlspecialchars($row['date_ordered']) . "</p>";
            echo "<p><strong>Courier:</strong> " . htmlspecialchars($row['courier']) . "</p>";
            
            echo "<p style=\"margin: 20px 0 0 0; font-size: 20px; color: grey; font-weight: light;\">Summary:</p>";
        }

        echo "<p><strong>Product:</strong> " . htmlspecialchars($row['product']) . "</p>"; 
        echo "<p><strong>Quantity:</strong> " . number_format($row['quantity']) . "</p>";
        echo "<p><strong>Price:</strong> ₱" . number_format($row['price'], 2) . "</p>";
       

      //  add here the color, size and brand
        
        echo "<br>";
    }

    // Close the last tracking number group and add the confirm and cancel buttons
    if ($order_status != 'C' && $order_status != 'G') {
        echo '<div class="button-container">';
        echo '<form action="" method="post">';
        echo '<input type="hidden" name="tracking_number" value="' . htmlspecialchars($current_tracking_number) . '">';
        echo '<button type="submit" name="confirm_order" class="confirm-button" style="margin-right: 20px; background-color: green;">Confirm Order</button>';
        echo '<button type="submit" name="cancel_order" class="cancel-button" style="margin-right: 20px; background-color: #B02E0C;">Cancel Order</button>';
        echo '</form>';
        echo '</div>';
    }
    echo '</div>'; // Close the last card
} else {
    echo "<p>No orders found.</p>";
}

// Close connection
mysqli_close($conn);
?>

  </div>
</main>

<footer></footer>

</body>
</html>
