<?php
  include("../database/database.php");
  session_start();
  $admin = $_SESSION['user_info_username'];
?>
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
  <link rel="stylesheet" href="admin.css">
  <title>Document</title>

  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>

<header>
  <div class="sidebar">
  <p><?php echo "Welcome " . $admin ?></p>
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


  <body>


    <div class="body1">
      <div class="wrapper">

        <div class="grid1">

          <div class="container">

          <h1  style="margin-bottom: 20px;">Manage Inventory</h1>
          

          <div class="new_item">

          <?php
            if(isset($_GET['deactivate_item'])){
                $product_id = $_GET['deactivate_item'];
                $sql_deactivate_item = "UPDATE products SET product_status = 'I' WHERE product_id = '$product_id'";
                mysqli_query($conn, $sql_deactivate_item);
            }    
 
        if(isset($_GET['update_item'])){
            $product_id = $_GET['update_item'];
            $sql_update_item = "SELECT * FROM products WHERE product_id = '$product_id'";
            $result = mysqli_query($conn, $sql_update_item);
            $data_row = mysqli_fetch_assoc($result); ?>

            <h1>Update Item</h1>
            <form action="process_update_item.php" method="post" enctype="multipart/form-data">
                <label for="product_id"> Product ID</label>
                <input value="<?php echo $data_row['product_id'];?>" type="text" name="u_product_id" readonly><br>

                <label for="product_image">Product Image:</label>
                <input value = "<?php echo $data_row['image_path'];?>" type="file" id="product_image" name="u_product_image" accept="image/*" required><br>

                <label for="product_name">Product Name:</label>
                <input value="<?php echo $data_row['product_name'];?>" type="text" id="product_name" name="u_product_name" required><br>
                
                <label for="product_price">Product Price:</label>
                <input value="<?php echo $data_row['product_price'];?>" type="text" id="product_price" name="u_product_price" required><br>
                
                <label for="product_sizes">Available Color</label>
                <input value="<?php echo $data_row['color'];?>" type="text" id="product_color" name="u_product_color" placeholder="Comma-separated color" required><br>
                
                <label for="product_sizes">Available Sizes:</label>
                <input value="<?php echo $data_row['size'];?>" type="text" id="product_sizes" name="u_product_sizes" placeholder="Comma-separated sizes" required><br>

                <label for="shoe_type">Shoe Type</label>
                <input value="<?php echo $data_row['shoe_type'];?>" type="text" id="shoe_type" name="u_shoe_type" required><br>
                
                <label for="shoe_brand">Shoe Brand</label>
                <input value="<?php echo $data_row['shoe_brand'];?>" type="text" id="shoe_brand" name="u_shoe_brand" required><br>
                
                <label for="stocks">Stocks</label>
                <input value="<?php echo $data_row['stocks'];?>" type="text" id="stocks" name="u_stocks" required><br>


                <input type="submit" value="Update Product">
            </form>
            
      <?php      
        }
    ?>

            <!-- <h1 style="margin-bottom: 20px;">Add New Product</h1> -->
            
        <div class="align"><form action="process_new_product.php" method="post" enctype="multipart/form-data">

        <label for="product_image">Product Image:</label>
        <div class="align"><input type="file" id="product_image" name="product_image" accept="image/*"  required></div>

        <label for="product_name">Product Name:</label>
        <div  class="align">
        <input type="text" placeholder="e.g. Nike Air Low" id="product_name" name="product_name" required></div>

        <label for="product_price">Product Price:</label>
        <div  class="align"> 
        <input type="text" placeholder="e.g. ₱17,000" id="product_price" name="product_price" required></div>

        <label for="product_sizes">Available Color</label>
        <div  class="align"> 
        <input type="text" id="product_color" name="product_color" placeholder="Comma-separated color" required></div>

        <label for="product_sizes">Available Sizes:</label>
        <div  class="align"> 
        <input type="text" id="product_sizes" name="product_sizes" placeholder="Comma-separated sizes" required></div>

        <label for="shoe_type">Shoe Type</label>
        <div  class="align"> 
        <input type="text" id="shoe_type" name="shoe_type" required></div>

        <label for="shoe_brand">Shoe Brand</label>
        <div  class="align"> 
        <input type="text" id="shoe_brand" name="shoe_brand" required></div>

        <label for="stocks">Stocks</label>
        <div  class="align"> 
        <input type="number" id="stocks" name="stocks" required></div>
        <label for="arrival">Arrival</label>
        <input type="text" id="arrival" name="arrival">
      <!-- <button><input type="submit" value="Add Product"></button> -->
      <button type="submit" class="btn1" value="Add Product">Add Product</button>

      </form>
      
        </div>
        </div>
        </div>
      
      </div>
      

      <div class="grid2">
        <div class="container">

          <h1>Products</h1>

   <?php
            $sql_get_item = "SELECT * FROM products WHERE product_status = 'A' order by product_id DESC";
            $get_result = mysqli_query($conn, $sql_get_item);  ?> 

            

            <table class="display_table">
            <?php
                while($row = mysqli_fetch_assoc($get_result)){ ?>
                <tr>
                    <th>
                        
                    </th>
                    <td> <?php echo '<img src="' . $row['image_path'] .'">';?></td>

                    <td><?php echo $row['product_name']?></td>
                    <td><?php echo $row['product_price']?></td>
                    <td><?php echo $row['color'] ?></td>
                    <td><?php echo $row['size']?></td>
                    <td><?php echo $row['shoe_type']?></td>
                    <td><?php echo $row['shoe_brand']?></td>
                    <td><?php echo $row['stocks']?></td>
                    <td><a href="admin.php?update_item=<?php echo $row['product_id'];?>">Update</a></td>
                    <td><a href="admin.php?deactivate_item=<?php echo $row['product_id'];?>">Deactivate</a></td>
                </tr>
                
              <?php } ?>
            </table>
          
        </div>
    </div>
    

    <!-- body1 -->
    </div>


  </body>

  <footer></footer>
  
</body>
</html>