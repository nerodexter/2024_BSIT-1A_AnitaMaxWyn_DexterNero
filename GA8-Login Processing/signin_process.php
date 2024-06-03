<?php
  include("../database/database.php");
  session_start();
?>
<?php
if(isset($_POST['username'])){
    $username = $_POST['username'];
    $pword = $_POST['password'];
    
    $sql_check_user_info = "SELECT *
                            FROM `user_acc`
                            WHERE `username` = '$username'
                            AND `user_pass` = '$pword'
                            ";
    $sql_result = mysqli_query($conn,$sql_check_user_info);
    $count_result = mysqli_num_rows($sql_result);
    
    if($count_result == 1){
        //existing user
        $row = mysqli_fetch_assoc($sql_result);
        
        //create session variables
        $_SESSION['user_info_id'] = $row['user_id'];
        $_SESSION['user_info_username'] = $row['username'];
        $_SESSION['user_info_password'] = $row['user_pass'];
        $_SESSION['user_info_fullname'] = $row['fullname'];
        $_SESSION['user_info_address'] = $row['address'];
        $_SESSION['user_info_contact_no'] = $row['contact_number'];
        $_SESSION['user_info_gender'] = $row['gender'];
        $_SESSION['user_info_user_type'] = $row['user_type'];
       
        if($row['user_type'] == 'A'){
            //admin
            header("location: ../admin/admin.php");
        }
        else if($row['user_type'] == 'C'){
            //common user
            header("location: ../home.php");
        }
        else{
            header("location: index.php?error=user_not_found");
        }
    }
    else{
        //username and password does not exist
       
        ;$alert = "<script>alert('You dont have an Account!');</script>";
        
        echo $alert;
    //    header("location: registration.php?error=user_not_exist");
    }     

   
}

mysqli_close($conn);

?>
<?php 

?>