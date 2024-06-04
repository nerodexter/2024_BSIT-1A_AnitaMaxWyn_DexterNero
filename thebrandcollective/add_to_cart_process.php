<?php 
  include("./database/database.php");
  session_start();
?>
<?php 
  if(isset($_POST["submit"])){
    $size = $_POST["size"];
    $color = $_POST["color"];
    $product = $_POST["product"];
    $price = $_POST["price"];
    $brand = $_POST["brand"];
    $shoe_type = $_POST["shoe_type"];
    $user_id =  $_SESSION['user_info_id'];
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];


    $sql_add_to_cart = "INSERT INTO cart(user_id,product,product_id, price, color, brand, shoe_type, size, quantity)
                        VALUES ('$user_id','$product' , '$product_id', '$price', '$color' , '$brand' , '$shoe_type', '$size' , '$quantity')";
    $execute = mysqli_query($conn, $sql_add_to_cart);

    if($execute == True){
      header("location: cart.php");
    }
  }
?>


