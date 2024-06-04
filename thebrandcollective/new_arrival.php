<?php 
  include("./database/database.php");


  $pageTitle = 'NewArrivals - My Website';
  $activePage = 'newarrival';

  session_start();
  if (!isset($_SESSION['user_info_id'])) {
    echo  "<p>You're not yet Logged in, <a href='../signin/signin.php'> Go to Login</a></p>";
    exit();
}
  
  $user_id =  $_SESSION['user_info_id'];

  $sql = "SELECT * FROM products where arrival = 'N' ORDER BY product_id DESC";
  $result = mysqli_query($conn, $sql);
?>

<?php
  if(isset($_GET['logout'])){
    session_destroy();
    header("location: signin/signin.php");
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="newarrival.css">
  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <title>Document</title>
</head>
<body>

  <header>

  <?php
  include('header.php');
 ?>

  </header>


  <main>

 
        <div class="container">
          <h1 style="text-align: center;">NEW RELEASES</h1>
            <div class="flex">
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="card-sizing">
                        <img  style="width: 250px; height: 250px;" src="img/<?php echo $row['image_path']; ?>" alt="display image">
                        <p  style="font-size: 18px; font-weight: bold; margin-top: 5px;"><?php echo $row['product_name']; ?></p>
                        <p style="font-size: 16px; color: #B02E0C; font-weight: bold;"><?php echo "PHP " . $row['product_price']; ?></p>
                        <p style="font-size: 16px;"><?php echo "" . $row['shoe_brand']; ?></p>
                        <p style="font-size: 16px;"><?php echo "" . $row['shoe_type']; ?></p>

                        
                        <?php 

                        $sizes = explode(",", $row['size']);
                        $colors = explode(",", $row['color']);
                        
                        ?>
                        <form action="add_to_cart_process.php" method="post">

                          <strong>  <label for="size_select">Size: </label> </strong>
                            <select name="size" id="size_select">
                                <?php foreach ($sizes as $size) { ?>
                                    <option value="<?php echo $size; ?>"><?php echo $size; ?></option>
                                <?php } ?>
                            </select><br>

                            <div style="margin-top: 5px;">
                          <strong>  <label for="color_select">Color: </label> </strong>
                          </div>

                            <select name="color" id="color_select">
                                <?php foreach ($colors as $color) { ?>
                                    <option value="<?php echo $color; ?>"><?php echo $color; ?></option>
                                <?php } ?>
                            </select><br>
                            <input type="hidden" name="product_id" value="<?php echo  $row['product_id'];?>">
                            <input type="hidden" name="product" value="<?php echo $row['product_name']; ?>">
                            <input type="hidden" name="price" value="<?php echo $row['product_price']; ?>">
                            

                            <input type="hidden" name="brand" value="<?php echo $row['shoe_brand']; ?>">
                            <input type="hidden" name="shoe_type" value="<?php echo $row['shoe_type']; ?>">
                            <input type="hidden" name="category" value="<?php echo $row['shoe_type']; ?>">
                            
                          <?php
                          $stock = $row['stocks'];
                          ?>  
                          <h4 style="margin-bottom: 2px; margin-top: 5px; color: #f1f1f1;">Quantity</h4>

                            <div class="quantity">
                            <input type="number" id="quantity" name="quantity" min="1" max="<?php echo $stock; ?>" value="1" class="quantityinput">
                            <p style="font-size: 16px; color: #f1f1f1"> <?php echo "Stocks: " . $row['stocks']; ?></p>
                          </div><!-- #region -->



                          <?php if ($stock > 0): ?>
                    <button type="submit" name="submit">Add to Cart</button>
                  <?php else: ?>
                    <button type="submit" name="submit" disabled>Out of Stock</button>
                  <?php endif; ?>

                        </form>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>

    <footer>
        <?php include('footer.php'); ?>
    </footer>

    <script>
        document.getElementById('quantity').addEventListener('keydown', function(event) {
            event.preventDefault(); 
        });
    </script>
</body>
</html>