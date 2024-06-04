<?php

include('../database/database.php');


// Check if product ID is provided
if(isset($_POST['product_id'])) {
  // Get product ID from the form
  $product_id = $_POST['product_id'];

  // Delete the product from the database
  $sql = "DELETE FROM products WHERE product_id = '$product_id'";

  if ($conn->query($sql) === TRUE) {
      echo "Product removed successfully";
  } else {
      echo "Error removing product: " . $conn->error;
  }
} else {
  echo "Product ID not provided.";
}

// Close connection
$conn->close();

?>