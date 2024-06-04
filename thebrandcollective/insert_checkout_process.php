<?php
include('./database/database.php');
session_start();

if (!isset($_SESSION['user_info_id'])) {
    die("User not logged in");
}

$user_id = $_SESSION['user_info_id'];

if (isset($_POST['submit'])) {
    $products = $_POST['products'];
    $prices = $_POST['prices'];
    $product_ids = $_POST['product_id'];
    $quantities = $_POST['quantities'];
    $total_price = $_POST['total_price'];
    $payment_method = $_POST['payment_method'];
    $shipping_fee = $_POST['shipping_fee'];
    $randomString = isset($_POST['randomString']) ? $_POST['randomString'] : '';

    $total_amount = $total_price + $shipping_fee;

    mysqli_begin_transaction($conn);

    try {
        $stmt = $conn->prepare("INSERT INTO checkouts (user_id, product, quantity, price, total_amount, payment_method, tracking_number, shipping_fee) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("issssssi", $user_id, $product, $quantity, $price, $total_amount, $payment_method, $randomString, $shipping_fee);

        foreach ($products as $index => $product) {
            $price = $prices[$index];
            $quantity = $quantities[$index];
            $stmt->execute();
        }

        $stmt->close();

        $update_stock_stmt = $conn->prepare("UPDATE products SET stocks = stocks - ? WHERE product_id = ?");
        $update_stock_stmt->bind_param("ii", $quantity, $product_id);

        foreach ($product_ids as $index => $product_id) {
            $quantity = $quantities[$index];
            $update_stock_stmt->execute();
        }

        $update_stock_stmt->close();

        $delete_cart_stmt = $conn->prepare("DELETE FROM cart WHERE user_id = ? AND product_id = ?");
        $delete_cart_stmt->bind_param("ii", $user_id, $product_id);

        foreach ($product_ids as $product_id) {
            $delete_cart_stmt->execute();
        }

        $delete_cart_stmt->close();

        mysqli_commit($conn);

        echo "Order placed successfully!";
    } catch (Exception $e) {
        mysqli_rollback($conn);
        echo "Failed to place order: " . $e->getMessage();
    }

    $conn->close();
}
?>
