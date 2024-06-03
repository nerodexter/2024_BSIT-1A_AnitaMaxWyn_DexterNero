<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="footer.css"> -->

  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <title>footer</title>

  <style>

:root{
  --color-lightcoral: #E19191 !important;
  --color-slategray: ##738290 !important;
  --color-babypowder: ##FFFCF7 !important; 
  --text-babypowder: #FFFCF7 !important; 
  --color-dark: #222222 !important;
  }

/* *{
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: "Montserrat", sans-serif;
  
} */


/* body{
  height: 40vh;
  width: 100vw;
  background-color: #1C1919;
  color: #e3e3e3;

} */

footer{
  height: 50vh;
  background-color: var(--color-dark);
  color: #FFFCF7;

  overflow: hidden;
}

.footer{
  color: #858585;
  
}

 li{
  color: #858585;
}

ul li{
  padding: 5px 5px 5px 5px;

}
.footergrid{
  padding: 10px;

  display: grid;
  grid-template-columns: repeat(6, 1fr);
  grid-auto-rows: minmax(100px, auto);
  grid-gap: 10px;
}

.footgrid1{
  grid-column: 1/4;
  grid-row: 1/3;

  /* border: #e3e3e3 1px solid; */


  display: flex;
    justify-content: flex-start;
    flex-direction: column;
    align-items: flex-start;
    padding: 30px 10%;
}

.footgrid2{
  grid-column: 4/5;
  grid-row: 1/3;

  /* border: #e3e3e3 1px solid; */

  display: flex;
  flex-direction: column;
    justify-content: flex-start;
    align-items: flex-start;
    padding: 30px 10%;

    ul{
      list-style: none !important;
    }

}
.footgrid3{
  grid-column: 5/6;
  grid-row: 1/3;

  /* border: #e3e3e3 1px solid; */

  display: flex;
  flex-direction: column;
    justify-content: flex-start;
    align-items: flex-start;
    padding: 30px 10%;

    ul{
      list-style: none !important;
    }
}

.footgrid4{
  grid-column: 6/7;
  grid-row: 1/3;

  /* border: #e3e3e3 1px solid; */

  display: flex;
  flex-direction: column;
    justify-content: flex-start;
    align-items: flex-start;
    padding: 30px 10%;

    ul{
      list-style: none !important;
    }
}
  </style>
</head>
<body>
    <div class="footergrid">
      <div class="footgrid1">
        <img src="../img/1.png" alt="logo" style="width: 50%;">
        <p style="margin-left: 23px">Elevating Identities, Crafting Legacies: The Brand Collective.
Where Your Story Becomes a Brand.</p>
      </div>

      <div class="footgrid2">
        <h1>Links</h1>
        <ul>
          <li><a href="../home.php" class="footer">Home</a></li>
          <li><a href="../Men.php" class="footer"> Men </a></li>
          <li><a href="../women.php" class="footer"> Women </a></li>
          <li><a href="../new_arrival.php" class="footer"> New Arrivals </a></li>
          <li><a href="" class="footer"> About Us </a></li>
        </ul>
      </div>
      <div class="footgrid3">
        <h1>Products</h1>
        <ul>
          <li>Nike</li>
          <li>New Balance</li>
          <li>Adidas</li>
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

    <p style="margin: 25px 40px 25px 40px; text-align: center; font-size: 10px; width:85%; margin-inline: auto;">Artwork produce by 
          <b>Dexter Nero</b>,
            <b>Kyan Kurt Rañada</b>, 
             <b>Jeremy Rellama</b>, 
               <b>Marc Elijah Riofrio</b>
              and 
              <b>Mark Andrei Rivero</b> . 
        Any form of reproduction, distribution, or public display without the explicit written consent of <b>ANITA MAX WYN</b> is strictly prohibited. 
        Produce on 2024. <b>All Rights Reserved</b>.</p>
    
</body>
</html>