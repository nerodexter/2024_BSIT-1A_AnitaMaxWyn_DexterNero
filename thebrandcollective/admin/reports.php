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


    .flex {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
  }

  .card {
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    width: calc(33.33% - 20px); /* Adjust the width as needed */
    margin-bottom: 20px;
  }

  .card h2 {
    margin-bottom: 10px;
    font-size: 18px;
  }

  .card p {
    margin-bottom: 5px;
    font-size: 14px;
    color: #333333;
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
<?php
include("../database/database.php");

// Fetch suggestions grouped by user ID
$sql = "SELECT user_id, suggestion, suggestion_date FROM suggestion GROUP BY user_id";
$result = mysqli_query($conn, $sql);

// Check if there are any suggestions
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $userId = $row['user_id'];
        $suggestion = $row['suggestion'];
        $suggestionDate = $row['suggestion_date'];

        // Output the suggestions in a card layout
        echo '<div class="card">';
        echo '<h2>User ID: ' . $userId . '</h2>';
        echo '<p>Suggestion: ' . $suggestion . '</p>';
        echo '<p>Date: ' . $suggestionDate . '</p>';
        echo '</div>';
    }
} else {
    echo "No suggestions found.";
}

mysqli_close($conn);
?>


</main>

<footer></footer>

</body>
</html>
