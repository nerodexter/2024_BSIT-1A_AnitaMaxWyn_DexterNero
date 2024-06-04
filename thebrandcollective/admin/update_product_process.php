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

    // Start a transaction
    $conn->begin_transaction();

    try {
       
        $sql = "UPDATE products SET product_name=?, product_price=?, color=?, size=?, shoe_type=?, shoe_brand=?, stocks=?, product_status=? WHERE product_id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sissssisi", $product_name, $product_price, $color, $size, $shoe_type, $shoe_brand, $stocks, $product_status, $product_id);

        if ($stmt->execute()) {
            // eto po yung sa pag record nung stocks
            $sql_history = "INSERT INTO stock_history (product_id, stock, date) VALUES (?, ?, NOW())";
            $stmt_history = $conn->prepare($sql_history);
            if (!$stmt_history) {
                throw new Exception("Prepare failed: " . $conn->error);
            }
            $stmt_history->bind_param("ii", $product_id, $stocks);

            if ($stmt_history->execute()) {
                
                $conn->commit();
                header("Location: products.php");
                exit();
            } else {
                throw new Exception("Error recording stock history: " . $stmt_history->error);
            }
        } else {
            throw new Exception("Error updating product: " . $stmt->error);
        }
    } catch (Exception $e) {
        // Rollback the transaction on error
        $conn->rollback();
        echo $e->getMessage();
    }

    $stmt->close();
    if (isset($stmt_history)) {
        $stmt_history->close();
    }
    $conn->close();
}
?>
