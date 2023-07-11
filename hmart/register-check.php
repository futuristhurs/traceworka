<?php 
session_start();
include "includes/connection.php";

if(isset($_POST["register"])){
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["user-email"];
    $password = $_POST["password"];
    $repassword = $_POST["repassword"];


    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;

    if (empty($name) || empty($phone) || empty($email) || empty($password) || empty($repassword)) {
        $_SESSION["error"] = "Please fill in all the fields.";
    } elseif ($password !== $repassword) {
        // Check if password and re-password match
        $_SESSION["error"] = "Passwords do not match.";
    } else {
        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        }

        $sql = "INSERT INTO `users` (`Name`, `phone`, `email`, `password`, `created_at`) VALUES ('$name', '$phone', '$email', '$password', now())";
        $execute = mysqli_query($conn, $sql);

    if($execute){
        $_SESSION["success"] = "Registration successfull ";

        header("Location: my-account.php");
        exit();
    }else{
        $_SESSION["error"] = "Registration Failed: " . mysqli_error_($conn);

        header("Location: login.php#lg2");
        exit();
    }
}

