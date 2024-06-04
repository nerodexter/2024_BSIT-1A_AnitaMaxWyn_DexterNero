<?php

$pageTitle = 'About Us';
$activePage = 'aboutus';

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="aboutus.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <title>Document</title>
</head>


<header>
  <?php
  include('header.php');
 ?>
</header>


<main>
<body>

    <h1  style="font-weight:200; font-size: 32px; margin-top: 40px;">CREATORS OF <br> 
     <span style="font-weight: 900;"> THE BRAND COLLECTIVE </span></h1>
     <p style="text-align: center; margin-bottom: 18px;">Elevating Identities, Crafting Legacies: The Brand Collective – Where Your Story Becomes a Brand.</p>


  <div class="body1">



    <div class="container">
      <div class="grid1">
      <div class="imagesize" style="background-image: url('./img/dexter.jpeg');"></div>

        <h3>Dexter Nero</h3>
        <p>Backend Developer</p>
      </div>






      <div class="grid2">
        <div class="imagesize"  style="background-image: url('./img/kyan.jpeg');"></div>

        <h3>Kyan Kurt Ranada</h3>
        <p>Backend Developer</p>
      </div>





      <div class="grid3">
        <div class="imagesize"  style="background-image: url('./img/jeremy.JPG');"></div>

        <h3>Jeremy Rellama</h3>
        <p>Backend Developer</p>

      </div>




      <div class="grid4">

        <div class="imagesize"  style="background-image: url('./img/elijah.jpeg');"></div>

        <h3>Marc Elijah Riofrio</h3>
        <p>Backend Developer</p>

      </div>





      <div class="grid5">

        <div class="imagesize"  style="background-image: url('./img/mark.jpeg');"></div>

        <h3>Mark Andrei Rivero</h3>
        <p>Backend Developer</p>
      </div>
    </div>
  </div>




  </main>


  <footer>
    <?php
    include('footer.php');
   ?>

  </footer>

</body>
</html>