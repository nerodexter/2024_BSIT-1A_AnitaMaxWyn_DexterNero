<?php
include('../database/database.php');

$sql = "SELECT product, SUM(quantity) AS total_orders
        FROM checkouts
        GROUP BY product
        ORDER BY total_orders DESC
        LIMIT 5";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Top 5 Most Ordered Products</title>

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
      flex-direction: row;
      flex-wrap: nowrap;
      justify-content: center;
      align-items: stretch;
      gap: 20px;
      width: 100%;
      max-width: 1300px;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
    } 
    
    .container1 {

      gap: 20px;
      width: 1180px;
      max-width: 1500px;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
    }

    .card {
      background-color: var(--color-lightcoral);
      color: white;
      border-radius: 8px;
      margin: 10px;
      padding: 20px;
      flex: 1;
      box-sizing: border-box;
      text-align: center;
      transition: background-color 0.3s ease;
      max-width: 200px;
    }

    .card h3 {
      margin: 0;
      font-size: 1.5em;
    }

    .card p {
      margin: 10px 0 0;
      font-size: 1em;
    }

    .card:hover {
      background-color: var(--color-rufus);
    }

    @media (max-width: 768px) {
      .container {
        flex-direction: column;
      }

      .card {
        max-width: none;
        width: 100%;
      }
    }


    .body1 {
  min-height: calc(90vh - 40px);
  width: 70vw;
  margin-top: 6%;
  padding: 10px;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.wrapper {
  width: 100%;
  max-width: 1200px;
  margin-top: 20px;
}

.reports {
  width: 100%;
}

.cards {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 20px;
}

.card {
  background-color: var(--color-lightcoral);
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  text-align: center;
  flex: 1;
  max-width: 250px;
}

table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
}

table, th, td {
  border: 1px solid #ddd;
}

th, td {
  padding: 8px;
  text-align: left;
}

th {
  background-color: #f2f2f2;
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

  <main>
    <h1>5 Most Popular Items </h1>
    <div class="container">

        <?php
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<div class='card'>";
                echo "<h3>" . $row["product"] . "</h3>";
                echo "<p>Total Orders: " . $row["total_orders"] . "</p>";
                echo "</div>";
            }
        } else {
            echo "0 results";
        }
       
        ?>
    </div>





    <div class="body1">
  <div class="wrapper">
    <div class="container1">
      <h1>Reports Dashboard</h1>
      <div id="reports" class="reports">
        <?php
        $sales_today = 0;
        $sales_yesterday = 72940;
        $sales_this_year = 220469;
        $sales_last_year = 0;

        function fetchQueryResult($conn, $query) {
            $result = mysqli_query($conn, $query);
            if (!$result) {
                echo "Error: " . mysqli_error($conn) . "<br>";
                return null;
            }
            return mysqli_fetch_assoc($result);
        }

        try {
          // Sales Today
          $sales_today_row = fetchQueryResult($conn, "SELECT SUM(total_amount) AS sales_today FROM checkouts WHERE DATE(date_ordered) = CURDATE() AND order_status = 'G'");
          if ($sales_today_row) {
              $sales_today = $sales_today_row['sales_today'] ?? 0;
          }

          // Sales Yesterday
          $sales_yesterday_row = fetchQueryResult($conn, "SELECT SUM(total_amount) AS sales_yesterday FROM checkouts WHERE DATE(date_ordered) = CURDATE() - INTERVAL 1 DAY AND order_status = 'G'");
          if ($sales_yesterday_row) {
              $sales_yesterday = $sales_yesterday_row['sales_yesterday'] ?? 0;
          }

          // Sales This Year
          $sales_this_year_row = fetchQueryResult($conn, "SELECT SUM(total_amount) AS sales_this_year FROM checkouts WHERE YEAR(date_ordered) = YEAR(CURDATE()) AND order_status = 'G'");
          if ($sales_this_year_row) {
              $sales_this_year = $sales_this_year_row['sales_this_year'] ?? 0;
          }

          // Sales Last Year
          $sales_last_year_row = fetchQueryResult($conn, "SELECT SUM(total_amount) AS sales_last_year FROM checkouts WHERE YEAR(date_ordered) = YEAR(CURDATE()) - 1 AND order_status = 'G'");
          if ($sales_last_year_row) {
              $sales_last_year = $sales_last_year_row['sales_last_year'] ?? 0;
          }

          //table with current date
          $current_date = date('Y-m-d H:i:s',);
          $insert_sales_query = "INSERT INTO sales (sales_today, sales_yesterday, sales_this_year, sales_last_year, date) VALUES ($sales_today, $sales_yesterday, $sales_this_year, $sales_last_year, '$current_date')";
          if (!mysqli_query($conn, $insert_sales_query)) {
              echo "Error: " . mysqli_error($conn) . "<br>";
          }

          // Inventory
          $inventory_report_query = "SELECT product_name, stocks, stocks_history FROM products";
          $inventory_report_result = mysqli_query($conn, $inventory_report_query);
          if (!$inventory_report_result) {
            echo "Error: " . mysqli_error($conn) . "<br>";
          }

        } catch (mysqli_sql_exception $e) {
          echo "Error: " . $e->getMessage();
        }
        ?>

        <div class="cards">
          <div class="card">
            <h2>Sales Today</h2>
            <p>₱<?php echo number_format($sales_today, 2); ?></p>
          </div>
          <div class="card">
            <h2>Sales Yesterday</h2>
            <p>₱<?php echo number_format($sales_yesterday, 2); ?></p>
          </div>
          <div class="card">
            <h2>Sales This Year</h2>
            <p>₱<?php echo number_format($sales_this_year, 2); ?></p>
          </div>
          <div class="card">
            <h2>Sales Last Year</h2>
            <p>₱<?php echo number_format($sales_last_year, 2); ?></p>
          </div>
        </div>
        <h3>Inventory Report</h3>
        <table>
          <tr>
            <th>Product Name</th>
            <th>Stocks</th>

          </tr>
          <?php
          if ($inventory_report_result) {
            while($row = mysqli_fetch_assoc($inventory_report_result)) {
          ?>
            <tr>
              <td><?php echo $row['product_name']; ?></td>
              <td><?php echo $row['stocks']; ?></td>
              
            </tr>
          <?php
            }
          }
          ?>
        </table>

      </div>
    </div>
  </div>
</div>
<div class="stocks_history">
  <h1>Stock History</h1>
  <?php
    $sql = "SELECT * FROM stock_history";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Product ID</th>
                    <th>Stock</th>
                    <th>Date</th>
                </tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['product_id'] . "</td>";
            echo "<td>" . $row['stock'] . "</td>";
            echo "<td>" . $row['date'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No stock history found.";
    }
  ?>
</div>

</main>
</body>
</html