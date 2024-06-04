<?php
include("../database/database.php");

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
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <style>
    :root {
      --color-lightcoral: #E19191 !important;
      --color-slategray: ##738290 !important;
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
      width: 80vw;
      margin-left: 18%;
      background-color: var(--color-babypowder);
      color: var(--color-dark);
      padding: 20px 10px 10px 20px;
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
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    table {
      margin: 5px;
      padding: 5px;
    }

    th, td {
      margin: 5px 10px;
      padding: 5px;
    }

    button {
      background-color: var(--color-lightcoral);
      outline: none;
      border: none;
      color: var(--color-babypowder);
      height: 30px;
      width: 60px;
      border-radius: 4px;
    }

    button:hover {
      background-color: var(--color-rufus);
      color: var(--text-babypowder);
      scale: 1.05;
      transition: 0.3s;
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
  <h1>PRODUCTS</h1>

  <?php
  // Fetch data from database
  $sql = "SELECT * FROM products";
  $result = $conn->query($sql);

  // Check if there are any products
  if ($result->num_rows > 0) {
      // Output table header
      echo "<table border='1'>
              <tr>
                  <th>Product Name</th>
                  <th>Price</th>
                  <th>Color</th>
                  <th>Size</th>
                  <th>Shoe Type</th>
                  <th>Shoe Brand</th>
                  <th>Stocks</th>
                  <th>Product Status</th>
                  <th>Actions</th>
              </tr>";

      // Output data of each row
      while($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . $row["product_name"] . "</td>";
          echo "<td>" . $row["product_price"] . "</td>";
          echo "<td>" . $row["color"] . "</td>";
          echo "<td>" . $row["size"] . "</td>";
          echo "<td>" . $row["shoe_type"] . "</td>";
          echo "<td>" . $row["shoe_brand"] . "</td>";
          echo "<td>" . $row["stocks"] . "</td>";
          echo "<td>" . $row["product_status"] . "</td>";
          echo "<td>
                  <form action='remove_product_process.php' method='post' style='margin-bottom: 3px;'>
                      <input type='hidden' name='product_id' value='" . $row["product_id"] . "'>
                      <button type='submit'>Remove</button>
                  </form>
                  <form action='update_product.php' method='get' style=';'>
                      <input type='hidden' name='product_id' value='" . $row["product_id"] . "'>
                      <button type='submit'>Update</button>
                  </form>
                </td>";
          echo "</tr>";
      }

      echo "</table>";
  } else {
      echo "No products found.";
  }

  // Close connection
  $conn->close();
  ?>

</main>

<footer></footer>
  
</body>
</html>
