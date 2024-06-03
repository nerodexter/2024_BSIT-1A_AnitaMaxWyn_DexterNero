<?php
include('./database.database.php');

 $username = filter_input(INPUT_POST,"username", FILTER_SANITIZE_SPECIAL_CHARS);
 $email = filter_input(INPUT_POST,"email", FILTER_SANITIZE_SPECIAL_CHARS);
 $password = filter_input(INPUT_POST,"password", FILTER_SANITIZE_SPECIAL_CHARS);
 $contact_num = filter_input(INPUT_POST,"contact_number", FILTER_SANITIZE_SPECIAL_CHARS);
 $address = filter_input(INPUT_POST,"address", FILTER_SANITIZE_SPECIAL_CHARS);



 $sql = "INSERT INTO user_acc (username, email, user_pass, address, contact_number) 
 VALUES                       ('$username', '$email', '$password', '$address', '$contact_num')";

 mysqli_query($conn, $sql);

//  include('../home2.php');

mysqli_close($conn);
?>