<?php
session_start();
include 'includes/conn.php';

if (isset($_POST['logins'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate input fields
    if (empty($email) || empty($password)) {
        $_SESSION['error'] = "Please enter your email and password.";
        header("Location: admin-login.php");
        exit();
    }

    try {
        $conn = $pdo->open();

        $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE email = :email AND type = 1");
        $stmt->execute(['email' => $email]);
        $row = $stmt->fetch();

        if ($row['numrows'] === 1 && password_verify($password, $row['password'])) {
            // Login successful
            $_SESSION['admin'] = $row['id'];
            header("Location: admin/home.php"); // Redirect to admin dashboard
            exit();
        } else {
            // Login failed
            $_SESSION['error'] = "Invalid email or password.";
            header("Location: admin-login.php");
            exit();
        }

    } catch (PDOException $e) {
        echo "There is some problem in connection: " . $e->getMessage();
    } finally {
        $pdo->close();
    }
} else {
    $_SESSION['error'] = 'Input login credentials first';
    header("Location: admin-login.php");
    exit();
}
?>
