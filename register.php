<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include("database.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    $name = trim(mysqli_real_escape_string($conn, $_POST['name']));
    $email = trim(mysqli_real_escape_string($conn, $_POST['email']));
    $raw_password = $_POST['password'];

    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email format. Please enter a valid email.'); window.history.back();</script>";
        exit;
    }

    
    if (!empty($name) && !empty($email) && !empty($raw_password)) {
        
        $password = password_hash($raw_password, PASSWORD_BCRYPT);

       
        $check_user = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
        if (mysqli_num_rows($check_user) > 0) {
            echo "<script>alert('User already registered with this email. Please sign in.'); window.location.href = 'signin.php';</script>";
        } else {
            
            $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
            if (mysqli_query($conn, $sql)) {
                echo "<script>alert('Registration successful! Redirecting to sign-in...'); window.location.href = 'signin.php';</script>";
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }
    } else {
        echo "<script>alert('All fields are required.'); window.history.back();</script>";
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
    <h2>Register</h2>
    <form method="POST" action="">
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" minlength="8" required>

        <button type="submit">Register</button>
    </form>
    <p>Already have an account? <a href="signin.php">Sign in here</a></p>
</div>
</body>
</html>
