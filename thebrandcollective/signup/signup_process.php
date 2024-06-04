<?php
include("../database/database.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
    $contact_num = filter_input(INPUT_POST, "contact_number", FILTER_SANITIZE_SPECIAL_CHARS);
    $address = filter_input(INPUT_POST, "address", FILTER_SANITIZE_SPECIAL_CHARS);

    // Check if email already exists
    $sql_check_email = "SELECT * FROM `user_acc` WHERE `email` = ?";
    $stmt_check_email = mysqli_prepare($conn, $sql_check_email);
    mysqli_stmt_bind_param($stmt_check_email, "s", $email);
    mysqli_stmt_execute($stmt_check_email);
    $result_check_email = mysqli_stmt_get_result($stmt_check_email);
    $count_email = mysqli_num_rows($result_check_email);

    // Check if contact number already exists
    $sql_check_contact = "SELECT * FROM `user_acc` WHERE `contact_number` = ?";
    $stmt_check_contact = mysqli_prepare($conn, $sql_check_contact);
    mysqli_stmt_bind_param($stmt_check_contact, "s", $contact_num);
    mysqli_stmt_execute($stmt_check_contact);
    $result_check_contact = mysqli_stmt_get_result($stmt_check_contact);
    $count_contact = mysqli_num_rows($result_check_contact);

    if ($count_email > 0) {
        header("Location: signup.php?error=Email already has an account");
        exit();
    } elseif ($count_contact > 0) {
        header("Location: signup.php?error=Contact number already has an account");
        exit();
    } else {
        // $hash = password_hash($password, PASSWORD_DEFAULT);

        $sql_insert_user = "INSERT INTO `user_acc` (username, email, user_pass, address, contact_number) 
                            VALUES (?, ?, ?, ?, ?)";
        $stmt_insert_user = mysqli_prepare($conn, $sql_insert_user);
        mysqli_stmt_bind_param($stmt_insert_user, "sssss", $username, $email, $password, $address, $contact_num);

        if (mysqli_stmt_execute($stmt_insert_user)) {
            header("Location: ../signin/signin.php?success=Account created successfully");
            exit();
        } else {
            header("Location: signup.php?error=Failed to create account");
            exit();
        }
    }

    mysqli_close($conn);
} else {
    header("Location: signup.php");
    exit();
}
?>
