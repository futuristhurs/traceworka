<?php
session_start();
include "includes/connection.php";

if (isset($_POST["logins"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validate input fields
    // if (empty($email) || empty($password)) {
    //     $_SESSION["error"] = "Please enter your email and password.";
    //     header("Location: login.php");
    //     exit();
    // }

    // Query the database
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        // Login successful
        $_SESSION["email"] = $email;
        header("Location: my-account.php");
        exit();
    } else {
        // Login failed
        $_SESSION["error"] = "Invalid email or password.";
        header("Location: login.php");
        exit();
    }
}
?>
