<?php
include('./database/database.php');

// Check if the product with product_id = 1 exists
$sql = "SELECT COUNT(*) as count FROM products WHERE product_id = 6";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$product_exists = $row['count'] > 0;

if ($product_exists) {
    // Fetch the stock for product_id 1
    $sql = "SELECT stocks FROM products WHERE product_id = 6";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $stock = $row['stocks'];
    } else {
        $stock = 0;
    }
} else {
    $stock = 0;
}

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


  <link rel="stylesheet" href="shoes.css">

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

    <div class="body1">
      <div class="container">
        <div class="grid1">
          <div class="wrapper1" style="background-image: url(https://nb.scene7.com/is/image/NB/mr530ra_nb_04_i?$pdpflexf2$&qlt=80&fmt=webp&wid=440&hei=440);"></div>
    
          <div class="wrapper2" style="background-image: url(https://nb.scene7.com/is/image/NB/mr530ra_nb_05_i?$pdpflexf2$&qlt=80&fmt=webp&wid=440&hei=440);"></div>
    
          <div class="wrapper3" style="background-image: url(https://nb.scene7.com/is/image/NB/mr530ra_nb_06_i?$pdpflexf2$&qlt=80&fmt=webp&wid=440&hei=440);"></div>
    
          <div class="wrapper4" style="background-image: url(https://nb.scene7.com/is/image/NB/mr530ra_nb_02_i?$pdpflexf2$&qlt=80&fmt=webp&wid=440&hei=440);"></div>
        </div>
    
        <div class="grid2">
                  <!-- form -->
                  
        <form action="add_to_cart_process.php" method="post">

          <div class="flex">

       <input type="hidden"  name="product" value="NB 530"> <p style="font-size: 24px; font-weight: 600;">NB 530</p>

        <input type="hidden" name="price" value="5756">  <p style="font-size: 24px; font-weight: 600;">₱5,756</p>

        </div>
        <p>Mens Shoe</p>
        <p style="font-size: 12px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, cum itaque, minima molestiae porro, ducimus tenetur distinctio quis maxime ipsa nostrum dolorum quibusdam voluptatibus fuga placeat! Magni libero expedita rerum.</p>
        <div class="star-wrapper">
          <p>Rating: </p>
        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"><path fill="currentColor" d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z"/></svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"><path fill="currentColor" d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z"/></svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"><path fill="currentColor" d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z"/></svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"><path fill="currentColor" d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z"/></svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"><path fill="currentColor" d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z"/></svg>
        </div>

        <div class="stocks">
              <?php
              include('./database/database.php');
              // Fetch the stock for product_id 20
              $sql = "SELECT stocks FROM products WHERE product_id = 6";
              $result = mysqli_query($conn, $sql);

              if ($result && mysqli_num_rows($result) > 0) {
                  $row = mysqli_fetch_assoc($result);
                  $stock = $row['stocks'];
                  echo "<p> <strong>Stock Available:  </strong>" . htmlspecialchars($row['stocks']) . "</p>";
              } else {
                  echo "<p>Stock information is not available.</p>";
              }
              ?>
            </div>

            <br>



          <div class="color">
        <h4>Color: </h4>
        <input type="radio" name="color" id="black" value="Black" required>
        <label for="black">Black</label>

        <input type="radio" name="color" id="white" value="White" required>
        <label for="white">White</label>
    </div>

        <div class="flex">
          <p>Select Size</p>
          <p>Size Guide</p>
        </div>
        
        <div class="sizewrapper">
          <div class="size1">
            <input type="radio" name="size" id="US7" value="US7" required>
            <label for="US7">US7</label>
          </div>
    
          <div class="size2">
            <input type="radio" name="size" id="US7.5" value="US7.5" required>
            <label for="US7.5">US7.5</label>
          </div>
          <div class="size3">
            <input type="radio" name="size" id="US8" value="US8" required>
            <label for="US8">US8</label>
          </div>
          <div class="size4">
            <input type="radio" name="size" id="US8.5" value="US8.5" required>
            <label for="US8.5">US8.5</label>
          </div>
          <div class="size5">
            <input type="radio" name="size" id="US9" value="US9" required>
            <label for="US9">US9</label>
          </div>
          <div class="size6">
            <input type="radio" name="size" id="US9.5" value="US9.5" required>
            <label for="US9.5">US9.5</label>
          </div>
          <div class="size7">
            <input type="radio" name="size" id="US10" value="US10" required>
            <label for="US10">US10</label>
          </div>
          <div class="size8">
            <input type="radio" name="size" id="US10.5" value="US10.5" required>
            <label for="US10.5">US10.5</label>
          </div>
          <div class="size9">
            <input type="radio" name="size" id="US11" value="US11" required>
            <label for="US11">US11</label>
          </div>
          <div class="size10">
            <input type="radio" name="size" id="US11.5" value="US11.5" required>
            <label for="US11.5">US11.5</label>
          </div>
          <div class="size11">
            <input type="radio" name="size" id="US12" value="US12" required>
            <label for="US12">US12</label>
          </div>
          <div class="size12">
            <input type="radio" name="size" id="US12.5" value="US12.5" required>
            <label for="US12.5">US12.5</label>
          </div>
          
          <!-- <input type="hidden" name="amount" value="5756"> -->
          <input type="hidden" name="brand" value="NewBalance">
          <input type="hidden" name="shoe_type" value="Mens">
          <input type="hidden" name="product_id" value="6">

        </div>

     
        <div class="quantity">
              <h4 style="margin-bottom: 5px;">Quantity</h4>
              <input type="number" id="quantity" name="quantity" min="1" max="<?php echo $stock; ?>" value="1" class="quantityinput">
            </div>

            <?php if ($stock > 0): ?>
              <button type="submit" name="submit">Add to Cart</button>
            <?php else: ?>
              <button type="submit" name="submit" disabled>Not Available</button>
            <?php endif; ?>

          </form>
        </div>
      </div>
    </div>
  </main>

  <footer>
    <?php include('footer.php'); ?>
  </footer>

  <script>
        document.getElementById('quantity').addEventListener('keydown', function(event) {
            event.preventDefault(); // This will prevent keyboard input
        });
    </script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const quantityInput = document.getElementById("quantity");
      const addToCartButton = document.getElementById("addToCartButton");
      const maxStock = <?php echo $stock; ?>;

      quantityInput.addEventListener("input", function() {
        if (parseInt(quantityInput.value) > maxStock || parseInt(quantityInput.value) < 1) {
          addToCartButton.disabled = true;
        } else {
          addToCartButton.disabled = false;
        }
      });
    });
  </script>
</body>
</html>