<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $servername = "localhost";
    $username = "root"; // Default username for XAMPP
    $password = ""; // Default password for XAMPP (empty by default)
    $dbname = "user";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve username and password from form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Query to check if user exists
    $sql = "SELECT * FROM registrations WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // User found, set session variables
        $_SESSION["username"] = $username;

        // Redirect to dashboard or home page
        header("Location: index.php");
        exit();
    } else {
        // User not found, redirect back to login page with error message
        header("Location: index.php?error=Invalid credentials");
        exit();
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <div class="container">
        <h2>Login</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" required><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
