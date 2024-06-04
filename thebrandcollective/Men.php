<?php

$pageTitle = 'Men - My Website';
$activePage = 'men';

session_start();

?>


<?php
  if(isset($_GET['logout'])){
    session_destroy();
    header("location: signin/signin.php");
  }

  
?>
<?php
  if (!isset($_SESSION['user_info_id'])) {
    echo  "<p>You're not yet Logged in, <a href='../signin/signin.php'> Go to Login</a></p>";
    exit();
}
?>

<?php
 $user_id =  $_SESSION['user_info_id'];
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
  <link rel="stylesheet" type="text/css" href="Men.css">
  <title>Document</title>
</head>
<body>
  <header>
    <?php
    include("header.php");
    ?>
  </header>


<main>

  <div class="filler">
    <div class="fillercontainer">
      <div class="fillergrid1 darken-overlay" style="background-image: url(./img/men.png);">
    <!-- <h1>MENS</h1> -->
    </div>
    </div>
  </div>





  <div class="body1">

  <!-- nike -->

    <h1 style="text-align: center;"><svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24"><path fill="" d="M24 7.8L6.442 15.276q-2.184.925-3.668.925q-1.68 0-2.437-1.177q-.475-.756-.28-1.918q.196-1.162 1.036-2.478q.7-1.065 2.297-2.8a6.1 6.1 0 0 0-.784 1.848q-.42 1.792.756 2.632q.56.392 1.54.392q.783 0 1.764-.252z"/></svg></h1>

    <div class="container">
      <div class="grid1">
        <div class="imagesize" style="background-image: url(https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/d01ef37b-c14a-4edd-8787-534f5732294c/dunk-low-retro-shoe-66RGqF.png);"></div>
        <div class="text">
        <h3 style="margin-bottom: 5px;">Nike Dunk Low Retro</h3>
        <p>Men's Shoes</p>
        <p>1 Colours</p>
        <p class="price">₱6,495</p>
        <a href="Nike Dunk Retro.php"><button>View Product</button></a>
      </div>

      </div>

      <div class="grid2">
        <div class="imagesize" style="background-image: url(https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/c1661989-40b0-44dc-8afc-b4799c8f044f/zoom-vomero-5-shoes-8m9brL.png);"></div>
        <div class="text">
        <h3 style="margin-bottom: 5px;">Nike Zoom Vomero 5</h3>
        <p>Men's Shoes</p>
        <p>1 Colours</p>
        <p class="price">₱8,895</p>
      <a href="Nike Zoom Vomero 5.php"><button>View Product</button></a>
      </div>
      </div>

      <div class="grid3">
        <div class="imagesize" style="background-image: url(https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/91886090-edd6-4468-b59b-fca498da0a0d/air-max-plus-3-shoes-HtMt7V.png);"></div>
        <div class="text">
        <h3 style="margin-bottom: 5px;">Nike Air Max Plus 3</h3>
        <p>Men's Shoes</p>
        <p>1 Colours</p>
        <p class="price">₱5,495</p>
      <a href="Nike Air Max Plus 3.php"><button>View Product</button></a>
      </div>
      </div>

      <div class="grid4">
        <div class="imagesize"style="background-image: url(https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/e3cc2305-65bb-4824-b4bd-9474386f6656/p-6000-shoes-5qgkXp.png);"></div>
        <div class="text">
        <h3 style="margin-bottom: 5px;">Nike P-6000</h3>
        <p>Men's Shoes</p>
        <p>2 Colours</p>
        <p class="price">₱6,195</p>
        <a href="Nike P-6000.php"><button>View Product</button></a>
      </div>
      </div>
      
    </div>


    <!-- newbalance -->
    
    <h1 style="text-align: center;"><svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24"><path fill="" d="m12.169 10.306l1.111-1.937l3.774-.242l.132-.236l-3.488-.242l.82-1.414h6.47c1.99 0 3.46.715 2.887 2.8c-.17.638-.979 2.233-3.356 2.899c.507.06 1.76.616 1.54 2.057c-.384 2.558-3.69 3.774-5.533 3.774l-7.641.006l-.38-1.48l4.005-.28l.137-.237l-4.346-.264l-.467-1.755l6.178-.363l.137-.231l-11.096-.693l.534-.925l11.948-.775l.138-.231zm5 .385l1.1-.006c.738-.005 1.502-.34 1.783-1.018c.259-.632-.088-1.171-.55-1.166h-1.067zm-1.27 2.195l-1.326 2.305h1.265c.589 0 1.64-.292 1.964-1.128c.302-.781-.253-1.177-.638-1.177zM6.26 16.445l-.77 1.315l-5.49.01l.534-.923zm.385-10.216l4.417.006l.336 1.248l-5.276-.33zm5 2.245l.484 1.832l-7.542-.495l.528-.92zm-3.84 5.281l-.957 1.661l-5.32-.302l.534-.924z"/></svg></h1>

    <div class="container2">

      <div class="grid1">
        <div class="imagesize" style="background-image: url(https://nb.scene7.com/is/image/NB/m1906rgr_nb_03_i?$pdpflexf2$&qlt=80&fmt=webp&wid=440&hei=440);"></div>
        <div class="text">
        <h3 style="margin-bottom: 5px;">NB 1906R Grey Days</h3>
        <p>Men's Shoes</p>
        <p>1 Colours</p>
        <p class="price">P10,959</p>
       <a href="1906R Grey Days.php"> <button>View Product</button> </a>
      </div>
      </div>

      <div class="grid2">
        <div class="imagesize" style="background-image: url(https://nb.scene7.com/is/image/NB/mr530ra_nb_03_i?$pdpflexf2$&qlt=80&fmt=webp&wid=440&hei=440);"></div>
        <div class="text">
        <h3 style="margin-bottom: 5px;">NB 530</h3>
        <p>Men's Shoes</p>
        <p>2 Colours</p>
        <p class="price">P5,756</p>
       <a href="NB 530.php"> <button>View Product</button> </a>
      </div>
      </div>

      <div class="grid3">
        <div class="imagesize" style="background-image: url(https://nb.scene7.com/is/image/NB/nm508ony_nb_03_i?$pdpflexf2$&qlt=80&fmt=webp&wid=440&hei=440);"></div>
        <div class="text">
        <h3 style="margin-bottom: 5px; font-size: 15px;">Numeric Brandon Westgate 508</h3>
        <p>Men's Shoes</p>
        <p>2 Colours</p>
        <p class="price">P4,900</p>
        <a href="Numeric Brandon Westgate 508.php"><button>View Product</button></a>
      </div>
      </div>

      <div class="grid4"><div class="imagesize" style="background-image: url(https://nb.scene7.com/is/image/NB/u990tn6_nb_09_i?$pdpflexf2$&qlt=80&fmt=webp&wid=440&hei=440);"></div>
        <div class="text">
        <h3 style="margin-bottom: 5px;">NB USA 990v6</h3>
        <p>Men's Shoes</p>
        <p>2 Colours</p>
        <p class="price">P11,455</p>
      <a href="NB USA 990v6.php">  <button>View Product</button> </a>
      </div>
    </div>

    </div>

    <!-- ADIDAS -->

    <h1 style="text-align: center;"><svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24"><path fill="" d="M11.936 17.952c0-.644.517-1.16 1.162-1.16s1.16.516 1.16 1.16a1.157 1.157 0 0 1-1.16 1.161a1.157 1.157 0 0 1-1.162-1.16m4.724 0c0-.645.517-1.162 1.161-1.162s1.161.517 1.161 1.161s-.517 1.161-1.16 1.161a1.157 1.157 0 0 1-1.162-1.16m-10.95 0c0-.645.517-1.162 1.161-1.162s1.16.517 1.16 1.161s-.516 1.161-1.16 1.161a1.157 1.157 0 0 1-1.161-1.16m-4.724 0c0-.645.517-1.162 1.161-1.162s1.161.517 1.161 1.161a1.157 1.157 0 0 1-1.161 1.161a1.157 1.157 0 0 1-1.16-1.16m9.55-2.052h-1.01v4.063h1.01zM3.3 19.964h1.01v-4.063H3.3v.326a2.1 2.1 0 0 0-1.2-.374c-1.162 0-2.1.938-2.1 2.1c0 1.168.938 2.099 2.1 2.099c.445 0 .858-.135 1.2-.374zm15.674 0h1.01v-4.063h-1.01v.326a2.1 2.1 0 0 0-1.2-.374c-1.162 0-2.1.938-2.1 2.1a2.09 2.09 0 0 0 2.1 2.099c.445 0 .858-.135 1.2-.374zm1.384-1.32c.032.82.732 1.4 1.9 1.4c.955 0 1.742-.414 1.742-1.328c0-.636-.358-1.01-1.185-1.17l-.644-.126c-.414-.08-.7-.16-.7-.406c0-.27.278-.39.628-.39c.51 0 .716.255.732.557h1.018c-.056-.795-.692-1.328-1.718-1.328c-1.057 0-1.686.58-1.686 1.336c0 .922.748 1.073 1.392 1.193l.533.095c.382.072.549.183.549.406c0 .199-.191.397-.645.397c-.66 0-.874-.342-.882-.636zM8.024 14.517v1.71a2.1 2.1 0 0 0-1.2-.374c-1.162 0-2.1.938-2.1 2.1c0 1.168.938 2.099 2.1 2.099c.444 0 .858-.135 1.2-.374v.286h1.01v-5.447zm6.226 0v1.71a2.1 2.1 0 0 0-1.2-.374c-1.161 0-2.1.938-2.1 2.1a2.09 2.09 0 0 0 2.1 2.099c.445 0 .858-.135 1.2-.374v.286h1.01v-5.447zm-11.626-1.2l.684 1.2h4.716l-1.869-3.229l-3.53 2.028zm7.913 2.21v-1.01h3.713l-3.96-6.855L6.751 9.69l2.776 4.827v1.01zm5.217-1.01h4.723L14.37 3.948l-3.531 2.036z"/></svg></h1>

    <div class="container3">
      <div class="grid1"><div class="imagesize" style="background-image: url(https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/7ebe3e43c4bd441bbc314d8e12b2bf68_9366/Bad_Bunny_Last_Campus_Shoes_Brown_ID2534_06_standard.jpg);"></div>
        <div class="text">
        <h3 style="margin-bottom: 5px;">Bad Bunny Last Campus</h3>
        <p>Men's Shoes</p>
        <p>1 Colours</p>
        <p class="price">₱9,500</p>
       <a href="Bad Bunny Last Campus.php"> <button>View Products</button></a>
      </div>
    </div>

      <div class="grid2"><div class="imagesize" style="background-image: url(https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/7aa0c6a53daa45ffb311ed58c14da54f_9366/Adiease_Shoes_Black_IE3156_06_standard.jpg);"></div>
      <div class="text">
      <h3 style="margin-bottom: 5px;">Adiese</h3>
      <p>Men's Shoes</p>
      <p>1 Colours</p>
      <p class="price">₱4,700</p>
      <a href="Adiese.php"><button>View Product</button></a>
    </div>
  </div>

      <div class="grid3">
        <div class="imagesize" style="background-image: url(https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/023b9a9efda4420fa8bbb036007f0a04_9366/Centennial_85_Low_Shoes_Brown_IE3053_06_standard.jpg);"></div>
        <div class="text">
        <h3 style="margin-bottom: 5px;">CENTENNIAL 85 LOW</h3>
        <p>Men's Shoes</p>
        <p>1 Colours</p>
        <p class="price">₱9,440</p>
      <a href="CENTENNIAL 85 LOW.php">  <button>View Product</button></a>
      </div>
      </div>

      <div class="grid4">
        <div class="imagesize" style="background-image: url(https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/6c8c02e4ecc243f6a7353c858d1cf9d5_9366/Response_CL_Shoes_White_IG6226_06_standard.jpg);"></div>
        <div class="text">
        <h3 style="margin-bottom: 5px;">RESPONSE CL</h3>
        <p>Men's Shoes</p>
        <p>1 Colours</p>
        <p class="price">₱9,500</p>
       <a href="RESPONESE CL.php"> <button>View Product</button></a>
      </div>
      </div>

    </div>
  </div>

  <div class="filler">
    <div class="fillercontainer">
      <div class="fillergrid1" style="background-image: url(https://images.unsplash.com/photo-1637844528612-064026615fcd?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D;"></div>
    </div>
  </div>
  

</main>
  <footer>
    <?php
    include("footer.php")
    ?>
  </footer>
</body>
</html>