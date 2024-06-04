<?php
include('./database/database.php');

session_start();

if (!isset($_SESSION['user_info_id'])) {
    echo  "<p>You're not yet Logged in, <a href='../signin/signin.php'> Go to Login</a></p>";
    exit();
}

$user_id = $_SESSION['user_info_id'];

if (isset($_POST['cancel_order'])) {
  $tracking_number_to_cancel = $_POST['tracking_number'];
  $cancel_sql = "UPDATE checkouts SET order_status = 'C' WHERE user_id = '$user_id' AND tracking_number = '$tracking_number_to_cancel'";
  if (mysqli_query($conn, $cancel_sql)) {
      echo "Order with tracking number $tracking_number_to_cancel has been cancelled.";
  } else {
      echo "Error cancelling order: " . mysqli_error($conn);
  }
}
?>

<?php
  if(isset($_GET['logout'])){
    session_destroy();
    header("location: signin/signin.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="my_orders.css">
  <title>My Orders</title>
</head>
<body>
<header>
  <?php include("header.php"); ?>
</header>

<main>
  <h1>My Orders</h1>
  <div class="container">
    <?php
    // checkouts data
    $sql = "SELECT * FROM checkouts WHERE user_id = '$user_id' ORDER BY tracking_number";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        $current_tracking_number = '';
        $order_status = ''; 
        $total_amount = 0; 

        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['tracking_number'] != $current_tracking_number) {
                if ($current_tracking_number != '') {
                    //total amount for the previous group
                    echo "<p><strong>Total Amount:</strong> ₱" . number_format($total_amount, 2) . "</p>";
                    if ($order_status != 'C' && $order_status != 'G') {
                        echo '<form action="" method="post">';
                        echo '<input type="hidden" name="tracking_number" value="' . htmlspecialchars($current_tracking_number) . '">';
                        echo '<button type="submit" name="cancel_order" class="cancel-button">Cancel Order</button>';
                        echo '</form>';
                    } elseif ($order_status == 'G') {
                        echo "<p style=\"color: green;\">Your order is confirmed.</p>";
                    }
                    echo '</div>';
                }
                //new group
                $current_tracking_number = $row['tracking_number'];
                $order_status = $row['order_status'];
                $total_amount = 0; 
                echo "<div class='order-group'>";
                echo "<p><strong>Tracking Number:</strong> " . htmlspecialchars($row['tracking_number']) . "</p>";
                // Check if the order is cancelled
                if ($row['order_status'] == 'C') {
                    echo "<p style=\"color: red;\">Your order is cancelled.</p>";
                }
            }
            echo "<div class='order-card'>";
            echo "<p><strong>Product:</strong> " . htmlspecialchars($row['product']) . "</p>";
            echo "<p><strong>Price:</strong> ₱" . number_format($row['price'], 2) . "</p>";
            echo "<p><strong>Quantity:</strong> " . number_format($row['quantity']) . "</p>";
            $total_amount += $row['total_amount'];
            echo "<p><strong>Payment Method:</strong> " . htmlspecialchars($row['payment_method']) . "</p>";
            echo "<p><strong>Order Date:</strong> " . htmlspecialchars($row['date_ordered']) . "</p>";
            echo "<p><strong>Courier:</strong> " . htmlspecialchars($row['courier']) . "</p>";
            echo "</div>";
        }
        // Display the total amount for the last group
        echo "<p><strong>Total Amount:</strong> ₱" . number_format($total_amount, 2) . "</p>";
        if ($order_status != 'C' && $order_status != 'G') {
            echo '<form action="" method="post">';
            echo '<input type="hidden" name="tracking_number" value="' . htmlspecialchars($current_tracking_number) . '">';
            echo '<button type="submit" name="cancel_order" class="cancel-button">Cancel Order</button>';
            echo '</form>';
        } elseif ($order_status == 'G') {
            echo "<p style=\"color: green;\">Your order is confirmed.</p>";
        }
        echo '</div>';
    } else {
        echo "<p>No orders found.</p>";
    }
    ?>
    <?php
        $sql = "SELECT order_status FROM checkouts";
        $result = mysqli_query($conn, $sql);
        if($result) {
            while($row = mysqli_fetch_assoc($result)) {
                $order_status = $row['order_status'];

                if($order_status == 'G'){
                    $alert = "<script>alert('Your order is confirmed!');</script>";
                    echo $alert;
                    mysqli_close($conn);
                    die();
                }
                }
        }
    ?>
  </div>
</main>
<footer>
  <?php include("footer.php"); ?>
</footer>
</body>
</html>
