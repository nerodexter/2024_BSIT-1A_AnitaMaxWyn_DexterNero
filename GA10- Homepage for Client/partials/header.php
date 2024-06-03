<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php echo isset($pageTitle) ? $pageTitle : 'Header'; ?></title>
  
  <title>Document</title>

  <style>

:root{
  --color-lightcoral: #E19191 !important;
  --color-slategray: ##738290 !important;
  --color-babypowder: ##FFFCF7 !important; 
  --text-babypowder: #FFFCF7 !important; 
  --color-dark: #222222 !important;
  --color-rufous: #B02E0C;
  }

    *{
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-family: "Montserrat", sans-serif;
  scroll-behavior: smooth;
}


  /* body{

    min-height: calc(100vh - 40px);
    width: 100vw;
    background-color:  #e3e3e3;

    overflow-x: hidden;
  } */

/* navbar and searchbar settings */
li, a, .search {
    font-family: "Montserrat", sans-serif;
    font-weight: 500;
    font-size: 16px;
    color: #222222;
    text-decoration: none;
  }
  
  /* searchbar codes */
  input{
    margin-left: 60px;
    width: 200px;
  
    padding: 10px 10px 10px 10px;
    /* background: rgba( 255, 255, 255, 0.3 ); */
    /* box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 ); */
    backdrop-filter: blur( 8px );
    -webkit-backdrop-filter: blur( 8px );
    border-radius: 42px;
    border: 1px solid rgb(31, 30, 30);
  }
  
  .search{
    width: auto;
    height: 20%;
    background: var(--color-babypowder);
    border: 1px solid var(--color-lightcoral);
    outline: none;
    color: #222222;

    border-radius: 24px;
    font-size: 12px;
    padding: 10px 10px 10px 10px;
  
    box-shadow: 10px 22px 20px 10px rgba(253, 253, 253, 0.79) inset;
  -webkit-box-shadow: 10px 22px 94px -55px rgba(255, 255, 255, 0.79) inset;
  -moz-box-shadow: 10px 22px 94px 10px rgba(255, 251, 251, 0.79) inset;
  }
  
  ::placeholder {
    color: rgb(233, 80, 15);
  }
  
  
  /* navigationbar codes */
  header{
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 5% 0px 2%;
  }
  
  .logo{
    cursor: pointer;
  }
  
  .navbar{
  list-style: none !important;
  }
  
  .navbar li {
    display: inline-block;
    padding: 0 16px;

  } 

  .cart{
    position: relative;
    top: 10px;
    left: 40px;
    fill: #E19191;

    transition: 0.5s;
  }

  .cart:hover{
    scale: 1.30;

    fill:  #B02E0C;
  }

  li a:hover{
    color: #E19191;
  }

  .order{
    position: relative;
    top: 10px;
    left: 50px;
    fill: #E19191;

    transition: 0.5s;
  }

  .order:hover{
    scale: 1.30;

    fill: #B02E0C;

    transition: 0.5s;
  }

  .logout{
    position: relative;
    top: 10px;
    left: 60px;
    fill: #E19191;

    transition: 0.5s;
  }

  .logout:hover{
    scale: 1.30;
    fill: #B02E0C;

    transition: 0.5s;
  }
  
  </style>

</head>

<body>
  <header>
  <img class="logo" src="./partials/1.png" alt="logo" style="height: 12%; width: 12%;">
  <nav>
    <ul class= "navbar">
    <li><a href="./home.php" class="<?php echo isset($activePage) && $activePage == 'home' ? 'active' : ''; ?>">Home</a></li>
      <li><a href="./Men.php" class="<?php echo isset($activePage) && $activePage == 'men' ? 'active' : ''; ?>" >Men</a></li>
      <li><a href="./Women.php"  class="<?php echo isset($activePage) && $activePage == 'women' ? 'active' : ''; ?>">Women</a></li>
      <li><a href="./new_arrival.php" class="<?php echo isset($activePage) && $activePage == 'newarrival' ? 'active' : ''; ?>">New Arrivals</a></li>
      <li><a href="">About Us</a></li>
      
      <!-- <li><a href="" style="margin-left: 50px; color: #E19191;">Create an account</a></li> -->
      <input class="search" type="searchbar" placeholder="Search" name="searchbar">

      <a href="./cart/cart.php"><svg xmlns="http://www.w3.org/2000/svg" width="1.8em" height="1.8em" viewBox="0 0 24 24" class="cart"><g fill="" stroke="#2d2c2c" stroke-width="1.0"><path stroke-linecap="round" d="M3.864 16.455c.546 2.183.819 3.274 1.632 3.91C6.31 21 7.435 21 9.685 21h4.63c2.25 0 3.375 0 4.19-.635c.813-.636 1.086-1.727 1.631-3.91c.858-3.432 1.287-5.147.387-6.301C19.622 9 17.853 9 14.316 9H9.685c-3.538 0-5.306 0-6.207 1.154c-.529.677-.6 1.548-.394 2.846"/><path d="m19.5 9.5l-.71-2.605c-.274-1.005-.411-1.507-.692-1.886A2.5 2.5 0 0 0 17 4.172C16.56 4 16.04 4 15 4M4.5 9.5l.71-2.605c.274-1.005.411-1.507.692-1.886A2.5 2.5 0 0 1 7 4.172C7.44 4 7.96 4 9 4"/><path d="M9 4a1 1 0 0 1 1-1h4a1 1 0 1 1 0 2h-4a1 1 0 0 1-1-1Z"/></g></svg></a>

      <a href="../myorders/my_orders.php"><svg xmlns="http://www.w3.org/2000/svg" class="order" stroke="#2d2c2c" stroke-width="1.0" width="1.8rem" height="1.8rem" viewBox="0 0 24 24"><path fill="" d="M4 18V7.1L2.45 3.75q-.175-.375-.025-.763t.525-.562t.763-.037t.562.512L6.2 7.05h11.6l1.925-4.15q.175-.375.563-.525t.762.05q.375.175.525.563t-.025.762L20 7.1V18q0 .825-.587 1.413T18 20H6q-.825 0-1.412-.587T4 18m6-5h4q.425 0 .713-.288T15 12t-.288-.712T14 11h-4q-.425 0-.712.288T9 12t.288.713T10 13"/></svg></a>

      <!-- logout -->
   <a href="?logout"><svg xmlns="http://www.w3.org/2000/svg" class="logout" stroke="#2d2c2c" stroke-width="1.0" width="1.8rem" height="1.8rem" viewBox="0 0 24 24"><path fill="" fill-rule="evenodd" d="M6 2a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V5a3 3 0 0 0-3-3zm10.293 5.293a1 1 0 0 1 1.414 0l4 4a1 1 0 0 1 0 1.414l-4 4a1 1 0 0 1-1.414-1.414L18.586 13H10a1 1 0 1 1 0-2h8.586l-2.293-2.293a1 1 0 0 1 0-1.414" clip-rule="evenodd"/></svg></a>
    </ul>
  </nav>
  
  <?php if (isset($identifier)) { echo "<p>$identifier</p>"; } ?>

</header>
</body>
</html>