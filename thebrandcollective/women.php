<?php
$pageTitle = 'Women - My Website';
$activePage = 'women';
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
  <link rel="stylesheet" type="text/css" href="women.css">
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
      <div class="fillergrid1 darken-overlay" style="background-image: url(./img/womenscover.png);">
    <!-- <h1>MENS</h1> -->
    </div>
    </div>
  </div>





  <div class="body1">

  <!-- nike -->

    <h1 style="text-align: center;"><svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24"><path fill="" d="M24 7.8L6.442 15.276q-2.184.925-3.668.925q-1.68 0-2.437-1.177q-.475-.756-.28-1.918q.196-1.162 1.036-2.478q.7-1.065 2.297-2.8a6.1 6.1 0 0 0-.784 1.848q-.42 1.792.756 2.632q.56.392 1.54.392q.783 0 1.764-.252z"/></svg></h1>

    <div class="container">
      <div class="grid1">
        <div class="imagesize" style="background-image: url(https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/841f15c3-9cfb-4ff1-8c03-85dc5a0d39bd/initiator-shoes-4wMBsb.png);"></div>
        <div class="text">
        <h3 style="margin-bottom: 5px;">Nike Initiator</h3>
        <p>Women's Shoes</p>
        <p>1 Colours</p>
        <p class="price">₱4,695</p>
        <a href="Nike Inititiator.php"><button>View Product</button></a>
      </div>

      </div>

      <div class="grid2">
        <div class="imagesize" style="background-image: url(https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/d37da77f-07fb-4580-8b50-d68962e59043/air-max-90-shoes-K0mczj.png);"></div>
        <div class="text">
        <h3 style="margin-bottom: 5px;">Nike Air Max 90</h3>
        <p>Women's Shoes</p>
        <p>1 Colours</p>
        <p class="price">₱4,695</p>
      <a href="Nike Air Max 90.php"><button>View Product</button></a>
      </div>
      </div>

      <div class="grid3">
        <div class="imagesize" style="background-image: url(https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/d9bd7264-7323-4fa9-922d-fdcb72cd7e74/air-max-plus-shoes-gPHkkf.png);"></div>
        <div class="text">
        <h3 style="margin-bottom: 5px;">Nike Air Max Plus</h3>
        <p>Women's Shoes</p>
        <p>1 Colours</p>
        <p class="price">₱9,895</p>
      <a href="Nike Air Max Plus.php"><button>View Product</button></a>
      </div>
      </div>

      <div class="grid4">
        <div class="imagesize"style="background-image: url(https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/329ea607-4f52-4412-a3bb-4f1b3b767a80/metcon-9-easyon-workout-shoes-zTjxJZ.png);"></div>
        <div class="text">
        <h3 style="margin-bottom: 5px;">Nike Metcon 9 EasyOn</h3>
        <p>Women's Shoes</p>
        <p>2 Colours</p>
        <p class="price">₱7,895</p>
        <a href="Nike Metcon 9 EasyOn.php"><button>View Product</button></a>
      </div>
      </div>
      
    </div>


    <!-- newbalance -->
    
    <h1 style="text-align: center;"><svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24"><path fill="" d="m12.169 10.306l1.111-1.937l3.774-.242l.132-.236l-3.488-.242l.82-1.414h6.47c1.99 0 3.46.715 2.887 2.8c-.17.638-.979 2.233-3.356 2.899c.507.06 1.76.616 1.54 2.057c-.384 2.558-3.69 3.774-5.533 3.774l-7.641.006l-.38-1.48l4.005-.28l.137-.237l-4.346-.264l-.467-1.755l6.178-.363l.137-.231l-11.096-.693l.534-.925l11.948-.775l.138-.231zm5 .385l1.1-.006c.738-.005 1.502-.34 1.783-1.018c.259-.632-.088-1.171-.55-1.166h-1.067zm-1.27 2.195l-1.326 2.305h1.265c.589 0 1.64-.292 1.964-1.128c.302-.781-.253-1.177-.638-1.177zM6.26 16.445l-.77 1.315l-5.49.01l.534-.923zm.385-10.216l4.417.006l.336 1.248l-5.276-.33zm5 2.245l.484 1.832l-7.542-.495l.528-.92zm-3.84 5.281l-.957 1.661l-5.32-.302l.534-.924z"/></svg></h1>

    <div class="container2">

      <div class="grid1">
        <div class="imagesize" style="background-image: url(https://nb.scene7.com/is/image/NB/w860l14_nb_03_i?$pdpflexf2$&qlt=80&fmt=webp&wid=440&hei=440);"></div>
        <div class="text">
        <h3 style="margin-bottom: 5px;">NB Fresh Foam X 860v14</h3>
        <p>Women's Shoes</p>
        <p>1 Colours</p>
        <p class="price">P10,500</p>
       <a href="Fresh Foam X 860v14.php"> <button>View Product</button> </a>
      </div>
      </div>

      <div class="grid2">
        <div class="imagesize" style="background-image: url(https://nb.scene7.com/is/image/NB/bbw550rb_nb_03_i?$pdpflexf2$&qlt=80&fmt=webp&wid=440&hei=440);"></div>
        <div class="text">
        <h3 style="margin-bottom: 5px;">NB 550</h3>
        <p>Women's Shoes</p>
        <p>2 Colours</p>
        <p class="price">P9,500</p>
       <a href="NB 550.php"> <button>View Product</button> </a>
      </div>
      </div>

      <div class="grid3">
        <div class="imagesize" style="background-image: url(https://nb.scene7.com/is/image/NB/wfcxla4_nb_03_i?$pdpflexf2$&qlt=80&fmt=webp&wid=440&hei=440);"></div>
        <div class="text">
        <h3 style="margin-bottom: 5px; font-size: 15px;">FuelCell Rebel v4</h3>
        <p>Women's Shoes</p>
        <p>2 Colours</p>
        <p class="price">P10,500</p>
        <a href="FuelCell Rebel v4.php"><button>View Product</button></a>
      </div>
      </div>

      <div class="grid4"><div class="imagesize" style="background-image: url(https://nb.scene7.com/is/image/NB/wl574evm_nb_03_i?$pdpflexf2$&qlt=80&fmt=webp&wid=440&hei=440);"></div>
        <div class="text">
        <h3 style="margin-bottom: 5px;">NB 574 Core</h3>
        <p>Women's Shoes</p>
        <p>2 Colours</p>
        <p class="price">P9,500</p>
      <a href="574 Core.php">  <button>View Product</button> </a>
      </div>
    </div>

    </div>

    <!-- ADIDAS -->

    <h1 style="text-align: center;"><svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24"><path fill="" d="M11.936 17.952c0-.644.517-1.16 1.162-1.16s1.16.516 1.16 1.16a1.157 1.157 0 0 1-1.16 1.161a1.157 1.157 0 0 1-1.162-1.16m4.724 0c0-.645.517-1.162 1.161-1.162s1.161.517 1.161 1.161s-.517 1.161-1.16 1.161a1.157 1.157 0 0 1-1.162-1.16m-10.95 0c0-.645.517-1.162 1.161-1.162s1.16.517 1.16 1.161s-.516 1.161-1.16 1.161a1.157 1.157 0 0 1-1.161-1.16m-4.724 0c0-.645.517-1.162 1.161-1.162s1.161.517 1.161 1.161a1.157 1.157 0 0 1-1.161 1.161a1.157 1.157 0 0 1-1.16-1.16m9.55-2.052h-1.01v4.063h1.01zM3.3 19.964h1.01v-4.063H3.3v.326a2.1 2.1 0 0 0-1.2-.374c-1.162 0-2.1.938-2.1 2.1c0 1.168.938 2.099 2.1 2.099c.445 0 .858-.135 1.2-.374zm15.674 0h1.01v-4.063h-1.01v.326a2.1 2.1 0 0 0-1.2-.374c-1.162 0-2.1.938-2.1 2.1a2.09 2.09 0 0 0 2.1 2.099c.445 0 .858-.135 1.2-.374zm1.384-1.32c.032.82.732 1.4 1.9 1.4c.955 0 1.742-.414 1.742-1.328c0-.636-.358-1.01-1.185-1.17l-.644-.126c-.414-.08-.7-.16-.7-.406c0-.27.278-.39.628-.39c.51 0 .716.255.732.557h1.018c-.056-.795-.692-1.328-1.718-1.328c-1.057 0-1.686.58-1.686 1.336c0 .922.748 1.073 1.392 1.193l.533.095c.382.072.549.183.549.406c0 .199-.191.397-.645.397c-.66 0-.874-.342-.882-.636zM8.024 14.517v1.71a2.1 2.1 0 0 0-1.2-.374c-1.162 0-2.1.938-2.1 2.1c0 1.168.938 2.099 2.1 2.099c.444 0 .858-.135 1.2-.374v.286h1.01v-5.447zm6.226 0v1.71a2.1 2.1 0 0 0-1.2-.374c-1.161 0-2.1.938-2.1 2.1a2.09 2.09 0 0 0 2.1 2.099c.445 0 .858-.135 1.2-.374v.286h1.01v-5.447zm-11.626-1.2l.684 1.2h4.716l-1.869-3.229l-3.53 2.028zm7.913 2.21v-1.01h3.713l-3.96-6.855L6.751 9.69l2.776 4.827v1.01zm5.217-1.01h4.723L14.37 3.948l-3.531 2.036z"/></svg></h1>

    <div class="container3">
      <div class="grid1"><div class="imagesize" style="background-image: url(https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/dd0f1a5604144addb8b8df7419df0cf4_9366/Astir_Shoes_White_IE9887_06_standard.jpg);"></div>
        <div class="text">
        <h3 style="margin-bottom: 5px;">ASTIR SHOES</h3>
        <p>Women's Shoes</p>
        <p>1 Colours</p>
        <p class="price">₱5,800</p>
       <a href="ASTIR SHOES.php"> <button>View Products</button></a>
      </div>
    </div>

      <div class="grid2"><div class="imagesize" style="background-image: url(https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/076f755a37a14e118ab50553f695611d_9366/Superstar_XLG_Shoes_White_IE2974_06_standard.jpg);"></div>
      <div class="text">
      <h3 style="margin-bottom: 5px;">SUPERSTAR XLG SHOES</h3>
      <p>Women's Shoes</p>
      <p>1 Colours</p>
      <p class="price">₱6,500</p>
      <a href="SUPERSTAR XLG SHOES.php"><button>View Product</button></a>
    </div>
  </div>

      <div class="grid3">
        <div class="imagesize" style="background-image: url(https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/632c99d7af3f4d47b4743174c4c59aed_9366/Falcon_Galaxy_Shoes_Blue_IG5680_06_standard.jpg);"></div>
        <div class="text">
        <h3 style="margin-bottom: 5px;">FALCON GALAXY SHOES</h3>
        <p>Women's Shoes</p>
        <p>1 Colours</p>
        <p class="price">₱5,500</p>
      <a href="FALCON GALAXY SHOES.php">  <button>View Product</button></a>
      </div>
      </div>

      <div class="grid4">
        <div class="imagesize" style="background-image: url(https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/e799fb2ef9904f119c8de38deb449213_9366/Stan_Smith_CS_Shoes_Red_IE0446_06_standard.jpg);"></div>
        <div class="text">
        <h3 style="margin-bottom: 5px;">STAN SMITH CS SHOES</h3>
        <p>Women's Shoes</p>
        <p>1 Colours</p>
        <p class="price">₱5,300</p>
       <a href="STAN SMITH CS SHOES.php"> <button>View Product</button></a>
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