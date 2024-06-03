<?php 
  include("database/database.php");


  $pageTitle = 'Home - My Website';
  $activePage = 'home';

  session_start();

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
  <link rel="stylesheet" href="home.css">

  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  
  <title>Home</title>
</head>
<body>
  <header>
    <!-- <img class="logo" src="./img/1.png" alt="logo" style="height: 12%; width: 12%;">
  <nav>
    <ul class= "navbar">
      <li><a href="">Home</a></li>
      <li><a href="">Man</a></li>
      <li><a href="">Woman</a></li>
      <li><a href="">Kids</a></li>
      <li><a href="">Featured</a></li>
      <li><a href="" style="margin-left: 50px; color: #E19191;">Create an account</a></li>
      <input class="search" type="searchbar" placeholder="Search" name="searchbar">
    </ul>
  </nav> -->

  <?php

  include('./partials/header.php');
 ?>
</header>
<main>


<!-- body1 -->
<div class="body1 section">
  <div class="container">
    <div class="body1grid1">
      <h1 style="font-size: 46px;">Make A <span> Good </span>  <br> Journey With a Shoes</h1>
      <p style="font-size: 14px; text-align: justify;;">Embark on a great journey with the perfect pair of shoes! 
      Whether you're strolling through the park or hiking up a mountain, having the right footwear can make all the difference. 
      From comfy sneakers to sturdy boots, find the shoes that fit your adventure and stride with confidence towards new horizons.</p>
      <form action="">
        <button class="animation">Explore Now</button>
      </form>
    </div>
    <div class="body1grid2">
      <img src="./img/brandcollective.png" alt="" style="width: 60%; height: 100%; object-position:  center; object-fit: contain;">
    </div>

  </div>
</div> 


<div class="infobody">
  <div class="infocontainer">
    <div class="infogrid1">
      
    </div>
    <div class="infogrid2">
      <h1>We Provide You <span> High Quality </span> Shoes</h1>
      <p>At THE BRAND COLLECTIVE, we take pride in delivering shoes of superlative quality. 
        Our commitment to excellence is evident in every pair we offer. 
        Each shoe is meticulously crafted with precision and infused with the passion to create footwear 
        that not only meets but exceeds your expectations.</p>
      <br>
      <p>Our dedication to superior craftsmanship and attention to detail ensures that every step you take is a step toward unrivaled comfort and style. 
        Explore our exquisite collection, where each shoe is a testament to  our unwavering pursuit of excellence. </p>
    </div>

<!-- infocontainer -->
  </div>

  <div class="infocontainer2">

    <div class="infowrapper1">
    <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 24 24"><path fill="" d="M20 2H10a3 3 0 0 0-3 3v7a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V5a3 3 0 0 0-3-3m1 10a1 1 0 0 1-1 1H10a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1Zm-3.5-4a1.49 1.49 0 0 0-1 .39a1.5 1.5 0 1 0 0 2.22a1.5 1.5 0 1 0 1-2.61M16 17a1 1 0 0 0-1 1v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-4h1a1 1 0 0 0 0-2H3v-1a1 1 0 0 1 1-1a1 1 0 0 0 0-2a3 3 0 0 0-3 3v7a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3v-1a1 1 0 0 0-1-1M6 18h1a1 1 0 0 0 0-2H6a1 1 0 0 0 0 2"/></svg>
      <h3>Easy Transaction</h3>
      <p>Streamlined Shopping Experience with Ironclad  Security for Smooth and Worry-Free Transactions Every Time You Shop.</p>
    </div>

    <div class="infowrapper2">
    <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 640 512"><path fill="" d="M624 352h-16V243.9c0-12.7-5.1-24.9-14.1-33.9L494 110.1c-9-9-21.2-14.1-33.9-14.1H416V48c0-26.5-21.5-48-48-48H112C85.5 0 64 21.5 64 48v48H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h272c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H40c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h208c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h208c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H64v128c0 53 43 96 96 96s96-43 96-96h128c0 53 43 96 96 96s96-43 96-96h48c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16M160 464c-26.5 0-48-21.5-48-48s21.5-48 48-48s48 21.5 48 48s-21.5 48-48 48m320 0c-26.5 0-48-21.5-48-48s21.5-48 48-48s48 21.5 48 48s-21.5 48-48 48m80-208H416V144h44.1l99.9 99.9z"/></svg>
    <h3>Fast Shipping</h3>
      <p>Streamlined Shopping Experience with Ironclad  Security for Smooth and Worry-Free Transactions Every Time You Shop.</p>
    </div>

    <div class="infowrapper3">
    <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 24 24"><path fill="" d="m11.005 2l7.298 2.28a1 1 0 0 1 .702.955V7h2a1 1 0 0 1 1 1v2h-13V8a1 1 0 0 1 1-1h7V5.97l-6-1.876l-6 1.876v7.404a4 4 0 0 0 1.558 3.169l.189.136l4.253 2.9L14.787 17h-4.782a1 1 0 0 1-1-1v-4h13v4a1 1 0 0 1-1 1l-3.22.001c-.387.51-.857.96-1.4 1.33L11.005 22l-5.38-3.668a6 6 0 0 1-2.62-4.958V5.235a1 1 0 0 1 .702-.954z"/></svg>
    <h3>Secure Payments</h3>
      <p>Streamlined Shopping Experience with Ironclad  Security for Smooth and Worry-Free Transactions Every Time You Shop.</p>
    </div>

    <div class="infowrapper4">
    <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 256 256"><path fill="" d="M230.33 141.06a24.34 24.34 0 0 0-18.61-4.77C230.5 117.33 240 98.48 240 80c0-26.47-21.29-48-47.46-48A47.58 47.58 0 0 0 156 48.75A47.58 47.58 0 0 0 119.46 32C93.29 32 72 53.53 72 80c0 11 3.24 21.69 10.06 33a31.87 31.87 0 0 0-14.75 8.4L44.69 144H16a16 16 0 0 0-16 16v40a16 16 0 0 0 16 16h104a8 8 0 0 0 1.94-.24l64-16a7 7 0 0 0 1.19-.4L226 182.82l.44-.2a24.6 24.6 0 0 0 3.93-41.56Zm-10.9 27.15l-38 16.18L119 200H56v-44.69l22.63-22.62A15.86 15.86 0 0 1 89.94 128H140a12 12 0 0 1 0 24h-28a8 8 0 0 0 0 16h32a8.3 8.3 0 0 0 1.79-.2l67-15.41l.31-.08a8.6 8.6 0 0 1 6.3 15.9Z"/></svg>
    <h3>Eager to Assists</h3>
      <p>Streamlined Shopping Experience with Ironclad  Security for Smooth and Worry-Free Transactions Every Time You Shop.</p>
    </div>

    <!-- infocontainer2 -->
  </div>

</div>


<!-- filler -->
<div class="filler section">
<div class="containerfiller">
<div class="wrapper">
  <div class="wrapper-holder">
    <div id="slider-img-1"></div>
    <div id="slider-img-2"></div>
    <div id="slider-img-3"></div>
    <div id="slider-img-4"></div>
  </div>
</div>
</div>
</div>

<div class="brands section">
  <h1 style="text-align: center; font-weight: 800; font-size: 38px; color: #E19191;margin-top:85px;">OUR AVAILABLE BRANDS</h1>
  <div class="flexbrand">
  
<div><svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px" viewBox="0 0 24 24"><path fill="currentColor" d="M24 7.8L6.442 15.276q-2.184.925-3.668.925q-1.68 0-2.437-1.177q-.475-.756-.28-1.918q.196-1.162 1.036-2.478q.7-1.065 2.297-2.8a6.1 6.1 0 0 0-.784 1.848q-.42 1.792.756 2.632q.56.392 1.54.392q.783 0 1.764-.252z"/></svg></div>


 <div><svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px" viewBox="0 0 24 24"><path fill="currentColor" d="m12.169 10.306l1.111-1.937l3.774-.242l.132-.236l-3.488-.242l.82-1.414h6.47c1.99 0 3.46.715 2.887 2.8c-.17.638-.979 2.233-3.356 2.899c.507.06 1.76.616 1.54 2.057c-.384 2.558-3.69 3.774-5.533 3.774l-7.641.006l-.38-1.48l4.005-.28l.137-.237l-4.346-.264l-.467-1.755l6.178-.363l.137-.231l-11.096-.693l.534-.925l11.948-.775l.138-.231zm5 .385l1.1-.006c.738-.005 1.502-.34 1.783-1.018c.259-.632-.088-1.171-.55-1.166h-1.067zm-1.27 2.195l-1.326 2.305h1.265c.589 0 1.64-.292 1.964-1.128c.302-.781-.253-1.177-.638-1.177zM6.26 16.445l-.77 1.315l-5.49.01l.534-.923zm.385-10.216l4.417.006l.336 1.248l-5.276-.33zm5 2.245l.484 1.832l-7.542-.495l.528-.92zm-3.84 5.281l-.957 1.661l-5.32-.302l.534-.924z"/></svg></div>

<div><svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px" viewBox="0 0 24 24"><path fill="currentColor" d="M11.936 17.952c0-.644.517-1.16 1.162-1.16s1.16.516 1.16 1.16a1.157 1.157 0 0 1-1.16 1.161a1.157 1.157 0 0 1-1.162-1.16m4.724 0c0-.645.517-1.162 1.161-1.162s1.161.517 1.161 1.161s-.517 1.161-1.16 1.161a1.157 1.157 0 0 1-1.162-1.16m-10.95 0c0-.645.517-1.162 1.161-1.162s1.16.517 1.16 1.161s-.516 1.161-1.16 1.161a1.157 1.157 0 0 1-1.161-1.16m-4.724 0c0-.645.517-1.162 1.161-1.162s1.161.517 1.161 1.161a1.157 1.157 0 0 1-1.161 1.161a1.157 1.157 0 0 1-1.16-1.16m9.55-2.052h-1.01v4.063h1.01zM3.3 19.964h1.01v-4.063H3.3v.326a2.1 2.1 0 0 0-1.2-.374c-1.162 0-2.1.938-2.1 2.1c0 1.168.938 2.099 2.1 2.099c.445 0 .858-.135 1.2-.374zm15.674 0h1.01v-4.063h-1.01v.326a2.1 2.1 0 0 0-1.2-.374c-1.162 0-2.1.938-2.1 2.1a2.09 2.09 0 0 0 2.1 2.099c.445 0 .858-.135 1.2-.374zm1.384-1.32c.032.82.732 1.4 1.9 1.4c.955 0 1.742-.414 1.742-1.328c0-.636-.358-1.01-1.185-1.17l-.644-.126c-.414-.08-.7-.16-.7-.406c0-.27.278-.39.628-.39c.51 0 .716.255.732.557h1.018c-.056-.795-.692-1.328-1.718-1.328c-1.057 0-1.686.58-1.686 1.336c0 .922.748 1.073 1.392 1.193l.533.095c.382.072.549.183.549.406c0 .199-.191.397-.645.397c-.66 0-.874-.342-.882-.636zM8.024 14.517v1.71a2.1 2.1 0 0 0-1.2-.374c-1.162 0-2.1.938-2.1 2.1c0 1.168.938 2.099 2.1 2.099c.444 0 .858-.135 1.2-.374v.286h1.01v-5.447zm6.226 0v1.71a2.1 2.1 0 0 0-1.2-.374c-1.161 0-2.1.938-2.1 2.1a2.09 2.09 0 0 0 2.1 2.099c.445 0 .858-.135 1.2-.374v.286h1.01v-5.447zm-11.626-1.2l.684 1.2h4.716l-1.869-3.229l-3.53 2.028zm7.913 2.21v-1.01h3.713l-3.96-6.855L6.751 9.69l2.776 4.827v1.01zm5.217-1.01h4.723L14.37 3.948l-3.531 2.036z"/></svg></div>
  </div>
</div>


<!-- body2 -->
<div class="body2 section">
  
<div class="container1">
<div class="grid1">
  <div class="imagesize" style="background-image: url(https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/d01ef37b-c14a-4edd-8787-534f5732294c/dunk-low-retro-shoe-66RGqF.png)"></div>
  <div class="text">
  <h3 style="margin-bottom: 5px">Nike Dunk Low Retro</h3>
  <p>Men's Shoes</p>
  <p>1 Colours</p>
  <p style="font-weight: bold" class="price">₱5,495</p>
 <a href="./shoes/Nike Dunk Retro.php"><button >View Product</button> </a>
</div>
</div>

<div class="grid2">
  <div class="imagesize" style="background-image: url(https://nb.scene7.com/is/image/NB/mr530ra_nb_03_i?$pdpflexf2$&qlt=80&fmt=webp&wid=440&hei=440);"></div>
  <div class="text">
  <h3 style="margin-bottom: 5px">NB 530</h3>
  <p>Men's Shoes</p>
  <p>2 Colours</p>
  <p style="font-weight: bold" class="price">₱5,599</p>
 <a href="./shoes/NB 530.php"> <button>View Product</button> </a>
</div>
</div>

<div class="grid3">
  <div class="imagesize" style="background-image: url(https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/d9bd7264-7323-4fa9-922d-fdcb72cd7e74/air-max-plus-shoes-gPHkkf.png);"></div>
  <div class="text">
  <h3 style="margin-bottom: 0px">Nike Air Max Plus</h3>
  <p>Women's Shoes</p>
  <p>1 Colours</p>
  <p style="font-weight: bold" class="price">₱9,895</p>
 <a href="./shoes/Nike Air Max Plus.php"> <button>View Product</button> </a>
</div>
</div>

<div class="grid4">
  <div class="imagesize" style="background-image: url(https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/632c99d7af3f4d47b4743174c4c59aed_9366/Falcon_Galaxy_Shoes_Blue_IG5680_06_standard.jpg);"></div>
  <div class="text">
  <h3 style="margin-bottom: 5px">Falcon Galaxy Shoes</h3>
  <p>Women's Shoes</p>
  <p>1 Colours</p>
  <p style="font-weight: bold" class="price">₱5,500</p>
  <a href="./shoes/FALCON GALAXY SHOES.php"> <button>View Product</button> </a>
</div>
</div>

<div class="grid5">
  <div class="imagesize2" style="background-image: url(./img/nike\ dunk\ low\ retro.png)"></div>
  <div class="text2">
    <h2 style="margin-bottom: 5px; margin-top: 15px;" >Preview: Nike Dunk Low Retro</h2>
    <p  style="margin-bottom: px;">Created for the hardwood but taken to the streets, the Nike Dunk Low Retro returns with crisp overlays and original team colours. This basketball icon channels '80s vibes with premium leather in the upper that looks good and breaks in even better. Modern footwear technology helps bring the comfort into the 21st century.</p>
    <a href="./shoes/Nike Dunk Retro.php"> <button>Get now</button> </a>
  </div>
</div>

<div class="grid6">
  <div class="imagesize2" style="background-image: url(./img/nike\ zoom\ vomero\ 5.png)"></div>
  <div class="text2">
    <h2 style="margin-bottom: 5px; margin-top: 15px;">Preview: Nike Zoom Vomero 5</h2>
    <p style="margin-bottom: 5px;">Carve out a new lane for yourself in the Zoom Vomero 5. A richly layered design pairs airy textiles with synthetic leather and plastic accents to create a complex upper that's easy to style. And check out the insole, which celebrates iconic running coach and Nike co-founder Bill Bowerman.</p>
   <a href="./shoes/Nike Zoom Vomero 5.php"> <button>Get now</button> </a>
  </div>
</div>

<div class="grid7">
  <div class="imagesize2" style="background-image: url(./img/nike\ air\ max\ 90.png)"></div>
  <div class="text2">
    <h2 style="margin-bottom: 5px; margin-top: 15px;">Preview: Nike Air Max 90</h2>
    <p style="margin-bottom: 5px;">Nothing as fly, nothing as comfortable, nothing as proven—the Nike Air Max 90 stays true to its roots with the iconic Waffle sole, stitched overlays and classic TPU accents. Fresh details give a modern look while Max Air cushioning adds comfort to your journey.</p>
   <a href="./shoes/Nike Air Max 90.php "> <button>Get now</button> </a>
  </div>
</div>

</div>
</div>

<!-- body3 -->
<div class="body3">
  <div class="container3">

  </div>
</div>


<!-- comments -->
<div class="comments">
<h1 style="text-align: center; margin-top:30px;">What our <span style="color: #E19191;">Customer</span> Say</h1>
<p style="text-align: center;">Discover the Voice of Our Valued Customers - Their Experiences, Satisfaction, and <br> Stories of Finding Perfect Footwear at THE BRAND COLLECTIVE.</p>
  <div class="customercontainer">
    <div class="customergrid1">
      <h2>ANITA ONE</h2>
      <p style="text-align: center; font-size: 14px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
      Perferendis voluptatum beatae ea, nemo minus inventore repudiandae voluptas incidunt nesciunt laboriosam totam provident adipisci doloribus quos cum impedit numquam? Asperiores, pariatur!</p>
    </div>
    <div class="customergrid2">
      <h2>ANITA TWO</h2>
      <p style="text-align: center; font-size: 14px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
      Perferendis voluptatum beatae ea, nemo minus inventore repudiandae voluptas incidunt nesciunt laboriosam totam provident adipisci doloribus quos cum impedit numquam? Asperiores, pariatur!</p>
    </div>
    <div class="customergrid3">
      <h2>ANITA THREE</h2>
      <p style="text-align: center; font-size: 14px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
      Perferendis voluptatum beatae ea, nemo minus inventore repudiandae voluptas incidunt nesciunt laboriosam totam provident adipisci doloribus quos cum impedit numquam? Asperiores, pariatur!</p>
    </div>
  </div>
</div>


<!-- suggestions -->

<div class="suggestionbody" >
<div class="suggestion">

  <div class="suggestiongrid1">
  <h1 style="margin-bottom: 5px; text-align: center;"> Notice to Costumers</h1>
    <p style="margin:10px 30px 5px 30px; text-align: center; font-weight: 3px; text-align: justify; font-size: 20px;"> 
    👟 Attention, valued customers! Step into style and comfort with our latest shoe collection. 
    Whether you're seeking sleek sneakers or classy heels, we've got you covered.
     Our friendly staff is here to assist you in finding the perfect fit for every occasion. 
     Browse and let your feet do the talking. Welcome to a world of endless possibilities in footwear! 👠</p>
    
   
  </div>
  <!-- grid1 -->

  <div class="suggestiongrid2">

  <h1 style="margin-bottom: 15px; text-align: center;">If You Have A <span style="color:#222222; "> Suggestion </span>  <br> Put it Here</h1>
    

  <form action="suggestion_process.php" method="post">
    
    <input type="text" name="suggestion" Value="" class="suggestion">

    <button type="submit" name="submit" class="suggestionbutton" >Submit</button>
  </form>
  </div>

</div>

</div>

</main>
  <footer>
     <?php
    include ('./partials/footer.php');
    ?> 

    <!-- <div class="footergrid">
      <div class="footgrid1">
        <img src="" alt="logo">
      </div>
      <div class="footgrid2">
        <h1>Links</h1>
        <ul>
          <li>Home</li>
          <li>Home</li>
          <li>Home</li>
          <li>Home</li>
          <li>Home</li>
        </ul>
      </div>
      <div class="footgrid3">
        <h1>Products</h1>
        <ul>
          <li>Nike</li>
          <li>Nike</li>
          <li>Nike</li>
          <li>Nike</li>
        </ul>
      </div>
      <div class="footgrid4">
        <h1>Company</h1>
        <ul>
          <li>Terms and Service</li>
          <li>Private Policy</li>
        </ul>
      </div>
    </div>
  </footer> -->
</body>
</html>