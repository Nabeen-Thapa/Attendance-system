<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>

    <form id="loginForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <?php
        // Check if the form has been submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Validate input (you should also add server-side validation for security)
            $username = $_POST["username"];
            $password = $_POST["password"];

            // Example: Check if username and password match a stored value
            if ($username === "example_username" && $password === "example_password") {
                // Successful login, redirect to the dashboard or another page
                header("Location: dashboard.php");
                exit();
            } else {
                // Invalid login, display JavaScript alert
                echo "<script>alert('Invalid username or password. Please try again.');</script>";
            }
        }
        ?>

        <button type="submit">Login</button>
    </form>
</body>
</html>
