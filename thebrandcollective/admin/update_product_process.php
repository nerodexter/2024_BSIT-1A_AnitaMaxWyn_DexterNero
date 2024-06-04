<?php
include("../database/database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $color = $_POST['color'];
    $size = $_POST['size'];
    $shoe_type = $_POST['shoe_type'];
    $shoe_brand = $_POST['shoe_brand'];
    $stocks = $_POST['stocks'];
    $product_status = $_POST['product_status'];

    $sql = "UPDATE products SET product_name=?, product_price=?, color=?, size=?, shoe_type=?, shoe_brand=?, stocks=?, product_status=? WHERE product_id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sissssisi", $product_name, $product_price, $color, $size, $shoe_type, $shoe_brand, $stocks, $product_status, $product_id);

    if ($stmt->execute()) {
        header("Location: products.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
