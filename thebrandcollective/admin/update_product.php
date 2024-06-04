<?php
include("../database/database.php");

$product_id = $_GET['product_id'];

$sql = "SELECT * FROM products WHERE product_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $product_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $product = $result->fetch_assoc();
} else {
    echo "Product not found.";
    exit;
}

$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Product</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

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


    body {

      display: flex;
      justify-content: center;
      align-items: center;
      min-height: calc(100vh - 40px);
        background-color: #f7f7f7;
      font-family: 'Poppins', sans-serif;

      height: 90%;
      margin-inline: auto;
    }
    
    .card {
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 20px;
      max-width: 500px;
      width: 100%;
      margin: 40px 20px;
      box-sizing: border-box;
    }

    .card h1 {
      text-align: center;
      color: #333;
      margin-bottom: 20px;
    }

    .card label {
      display: block;
      margin: 10px 0 5px;
      color: #333;
    }

    .card input[type="text"],
    .card input[type="number"] {
      width: calc(100% - 20px);
      padding: 10px;
      margin: 5px 0 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .card button {
      display: block;
      width: 100%;
      padding: 10px;
      border: none;
      background-color: var(--color-lightcoral);
      color: white;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
      margin-top: 10px;
    }

    .card button:hover {
      background-color: var(--color-rufus);
    }
  </style>
</head>
<body>
  <div class="card">
    <h1>Update Product</h1>
    <form action="update_product_process.php" method="post">
      <input type="hidden" name="product_id" value="<?php echo $product['product_id']; ?>">

      <label for="product_name">Product Name:</label>
      <input type="text" id="product_name" name="product_name" value="<?php echo $product['product_name']; ?>" required>

      <label for="product_price">Price:</label>
      <input type="number" id="product_price" name="product_price" value="<?php echo $product['product_price']; ?>" required>

      <label for="color">Color:</label>
      <input type="text" id="color" name="color" value="<?php echo $product['color']; ?>" required>

      <label for="size">Size:</label>
      <input type="text" id="size" name="size" value="<?php echo $product['size']; ?>" required>

      <label for="shoe_type">Shoe Type:</label>
      <input type="text" id="shoe_type" name="shoe_type" value="<?php echo $product['shoe_type']; ?>" required>

      <label for="shoe_brand">Shoe Brand:</label>
      <input type="text" id="shoe_brand" name="shoe_brand" value="<?php echo $product['shoe_brand']; ?>" required>

      <label for="stocks">Stocks:</label>
      <input type="number" id="stocks" name="stocks" value="<?php echo $product['stocks']; ?>" required>

      <label for="product_status">Product Status:</label>
      <input type="text" id="product_status" name="product_status" value="<?php echo $product['product_status']; ?>" required>

      <button type="submit">Update Product</button>
    </form>
  </div>
</body>
</html>
