<?php
include("../database/database.php");
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    $sql_check_user_info = "SELECT * FROM `user_acc` WHERE `username` = ?";
    $stmt_check_user_info = mysqli_prepare($conn, $sql_check_user_info);
    mysqli_stmt_bind_param($stmt_check_user_info, "s", $username);
    mysqli_stmt_execute($stmt_check_user_info);
    $result_check_user_info = mysqli_stmt_get_result($stmt_check_user_info);
    $count_result = mysqli_num_rows($result_check_user_info);

    if ($count_result == 1) {
        $row = mysqli_fetch_assoc($result_check_user_info);
        if ($password == $row['user_pass']) { 
            $_SESSION['user_info_id'] = $row['user_id'];
            $_SESSION['user_info_username'] = $row['username'];
            $_SESSION['user_info_password'] = $row['user_pass'];
            $_SESSION['user_info_fullname'] = $row['fullname'];
            $_SESSION['user_info_address'] = $row['address'];
            $_SESSION['user_info_contact_no'] = $row['contact_number'];
            $_SESSION['user_info_gender'] = $row['gender'];
            $_SESSION['user_info_user_type'] = $row['user_type'];

            if ($row['user_type'] == 'A') {
                header("Location: ../admin/admin.php");
                exit();
            } else if ($row['user_type'] == 'C') {
                header("Location: ../home.php");
                exit();
            } else {
                header("Location: index.php?error=user_not_found");
                exit();
            }
        } else {
            header("Location: signin.php?error=Invalid username or password");
            exit();
        }
    } else {
        header("Location: signin.php?error=Invalid username or password");
        exit();
    }
} else {
    header("Location: signin.php");
    exit();
}
?>
