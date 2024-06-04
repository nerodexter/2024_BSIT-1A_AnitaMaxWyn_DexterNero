<?php
include("./database/database.php");

if(isset($_POST['id'])) {
  $itemId = $_POST['id'];

  $sql = "DELETE FROM cart WHERE cart_id = '$itemId'";

  if ($conn->query($sql) === TRUE) {
      echo "Item removed successfully";
  } else {
      echo "Error removing item: " . $conn->error;
  }
} else {
  echo "Item ID not provided.";
}

?>