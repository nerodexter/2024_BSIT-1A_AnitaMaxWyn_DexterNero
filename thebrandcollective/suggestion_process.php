<?php
session_start();

include("./database/database.php");


if(isset($_SESSION['user_info_id'])){
  $user_id = $_SESSION['user_info_id'];

  if(isset($_POST["submit"])){
    $suggestion = $_POST["suggestion"];

    $sql_suggestion = "INSERT INTO suggestion(user_id,suggestion) VALUES('$user_id','$suggestion')";
    mysqli_query($conn,$sql_suggestion);
    header("location: home.php");
  }

} else {
  header("Location: login.php");
  exit; 
}

mysqli_close($conn);
?>
