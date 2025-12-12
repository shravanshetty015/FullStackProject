<?php
session_start();
include("database.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    if (!empty($email) && !empty($password)) {
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_assoc($result);
            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['name'];
                header("Location: index.html");
                exit();
            } else {
                $error = "Wrong password.";
            }
        } else {
            $error = "User not registered.";
        }
    } else {
        $error = "Please fill all fields.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign In</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php if (isset($error)) echo "<script>alert('$error');</script>"; ?>

<div class="container">
    <h2>Sign In</h2>

    <form method="POST" action="">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Sign In</button>
    </form>

    <p>Don't have an account? <a href="register.php">Register here</a></p>
</div>

</body>
</html>
