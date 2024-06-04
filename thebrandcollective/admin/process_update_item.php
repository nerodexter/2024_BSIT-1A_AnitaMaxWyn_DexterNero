<?php
  include("../database/database.php");
?>
<?php
  if(isset($_POST['u_product_name'])){
    $product_id = $_POST["u_product_id"];
    $product_name = $_POST["u_product_name"];
    $product_price = $_POST["u_product_price"];
    $product_color = $_POST["u_product_color"];
    $product_size = $_POST["u_product_sizes"];
    $shoe_type = $_POST["u_shoe_type"];
    $shoe_brand = $_POST["u_shoe_brand"];
    $stocks = $_POST["u_stocks"];

        $targetDirectory = "../img/"; 
        $targetFile = $targetDirectory . basename($_FILES["u_product_image"]["name"]);
    
      
        if (move_uploaded_file($_FILES["u_product_image"]["tmp_name"], $targetFile)) {
            echo "The file ". basename( $_FILES["u_product_image"]["name"]). " has been uploaded.";
        
          $sql = "UPDATE  products SET image_path = '$targetFile',
                                        product_name = '$product_name',
                                        product_price = '$product_price',
                                        color = '$product_color',
                                        size = '$product_size',
                                        shoe_type = '$shoe_type',
                                        shoe_brand = '$shoe_brand',
                                        stocks = '$stocks'
                                    WHERE product_id = '$product_id'";
          if(mysqli_query($conn, $sql)){
          header("location: ../admin/admin.php");

          }
          else{
            echo "Error updating product: " . mysqli_error($conn);
          }
                                    
  } 
  mysqli_close($conn);
}
?>