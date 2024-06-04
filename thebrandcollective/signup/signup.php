<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="signup.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <title>Create Account</title>
</head>
<body>

  <div class="body1">
    <div class="container">

      <div class="grid1" style="background-image: url(../img/maksim-larin-NOpsC3nWTzY-unsplash.jpg)"></div>

      <div class="grid2">
        <h1 style="text-align: center; line-height: 0.9; font-weight: 300; font-size: 26px;">WELCOME TO<br> <span style="font-weight: 900; color:#E19191;">THE BRAND COLLECTIVE</span></h1>
        <p style="text-align: center; margin-bottom: 10px; font-size: 14px;">Elevating Identities, Crafting Legacies: The Brand Collective – Where Your Story Becomes a Brand.</p>
        <h2 style="text-align: center; font-size: 20px;">Create Account</h2>

        <form action="signup_process.php" method="post">
          <p class="align">Username</p>
          <div class="input-box">
            <input type="text" placeholder="Username" name="username" required>
          </div>
          <p class="align">Email</p>
          <div class="input-box">
            <input type="email" placeholder="Email" name="email" required>
          </div>
          <p class="align">Password</p>
          <div class="input-box">
            <input type="password" placeholder="Password" name="password" required>
          </div>
          <p class="align">Contact Number</p>
          <div class="input-box">
            <input type="text" placeholder="Contact Number" name="contact_number" required>
          </div>
          <p class="align">Address</p>
          <div class="input-box">
            <input type="text" placeholder="Address" name="address" required>
          </div>
          <div>
            <button type="submit" class="btn1">Create Account</button>
          </div>
        </form>

        <p id="error-message" style="color: red; text-align: center; font-size: 14px;">
          <?php if(isset($_GET['error'])) { echo htmlspecialchars($_GET['error']); } ?>
        </p>

        <p style="text-align: center; font-size: 12px;">Already have an account? <a href="../signin/signin.php" style="color: #E19191;">Login</a></p>
      </div>
    </div>
  </div>

</body>
</html>
