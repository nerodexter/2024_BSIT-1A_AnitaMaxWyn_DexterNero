<?php
    if(isset($_POST['product_name'])){
        include_once("../database/database.php");

        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_color = $_POST['product_color'];
        $product_sizes = $_POST['product_sizes'];
        $shoe_type = $_POST["shoe_type"];
        $shoe_brand = $_POST["shoe_brand"];
        $stocks = $_POST["stocks"];
        $arrival = $_POST["arrival"];

        
        $targetDirectory = "../img/"; 
        $targetFile = $targetDirectory . basename($_FILES["product_image"]["name"]); // Full path to the uploaded file
    
        
        if (move_uploaded_file($_FILES["product_image"]["tmp_name"], $targetFile)) {
            echo "The file ". basename( $_FILES["product_image"]["name"]). " has been uploaded.";


        $sql_insert_product = "INSERT INTO products (product_name, product_price, color, size, shoe_type, shoe_brand, stocks, image_path, arrival) 
                    VALUES ('$product_name', '$product_price', '$product_color', '$product_sizes', '$shoe_type', '$shoe_brand', '$stocks' , '$targetFile', '$arrival')";

        if (mysqli_query($conn, $sql_insert_product)) {
        header("location: admin.php");
        } else {
        echo "Error: " . $sql_insert_product . "<br>" . mysqli_error($conn);
        }
    }
        else {
            echo "Sorry, there was an error uploading your file.";
        }

        mysqli_close($conn);
    }


?>
