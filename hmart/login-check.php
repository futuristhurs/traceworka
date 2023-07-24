<?php
// i have not gotten everything i want from this page 
session_start();
include "includes/conn.php";

if (isset($_POST["logins"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validate input fields
    if (empty($email) || empty($password)) {
        $_SESSION["error"] = "Please enter your email and password.";
        header("Location: login.php");
        exit();
    }

    // Query the database using PDO
    $stmt = $pdo->open()->prepare("SELECT * FROM users WHERE email = :email AND password = :password");
    $stmt->execute(['email' => $email, 'password' => $password]);
    $row = $stmt->fetch();

    if ($row) {
        // Login successful
        $_SESSION['name'] = $row['name']; // Assuming the name column is 'Name'
        header("Location: my-account.php");
        exit();
    } else {
        // Login failed
        $_SESSION["error"] = "Invalid email or password.";
        header("Location: login.php");
        exit();
    }

    $pdo->close(); // Close the connection after using it
}
?>
