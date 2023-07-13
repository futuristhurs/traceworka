<?php 
        
    
session_start();
include "includes/connection.php";

if (isset($_POST["register"])) {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $repassword = $_POST["repassword"];

    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;

    if (empty($name) || empty($phone) || empty($email) || empty($password) || empty($repassword)) {
        $_SESSION["error"] = "Please fill in all the fields.";
        header("Location: register.php");
        exit;
    }

    if ($password !== $repassword) {
        $_SESSION["error"] = "Passwords do not match.";
        header("Location: register.php");
        exit;
    }

    $checkQuery = "SELECT * FROM users WHERE phone = ? OR email = ?";
    $stmt = $conn->prepare($checkQuery);
    $stmt->bind_param("ss", $phone, $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['error'] = "Phone number or email already exists. Please try again.";
        header("Location: register.php");
        exit;
    } else {
        $insertQuery = "INSERT INTO `users` (`Name`, `phone`, `email`, `password`, `created_at`) VALUES (?, ?, ?, ?, now())";
        $stmt = $conn->prepare($insertQuery);
        $stmt->bind_param("ssss", $name, $phone, $email, $password);
        if ($stmt->execute()) {
            $_SESSION['success'] = "Registration successful!";
            $_SESSION['name'] = $name; // Assuming $name contains the user's name
            header("Location: my-account.php");
            exit();
        } else {
            $_SESSION['error'] = "Error: " . $stmt->error;
            header("Location: register.php");
            exit;
        }
    }

    $stmt->close();
    $conn->close();
}
?>

        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
//         $sql = "INSERT INTO `users` (`Name`, `phone`, `email`, `password`, `created_at`) VALUES ('$name', '$phone', '$email', '$password', now())";
//         $execute = mysqli_query($conn, $sql);

//     if($execute){
//         $_SESSION["success"] = "Registration successfull ";

//         header("Location: my-account.php");
//         exit();
//     }else{
//         $_SESSION["error"] = "Registration Failed: " . mysqli_error_($conn);

//         header("Location: login.php#lg2");
//         exit();
//     }
// }

