<?php 
session_start();
include "connection.php";

if(isset($_POST["register"])){
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["user-email"];
    $password = $_POST["user-password"];
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
}

