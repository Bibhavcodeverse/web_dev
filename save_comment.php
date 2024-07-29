<?php
session_start();

// Check if the user is logged in by verifying if a session variable is set
if (!isset($_SESSION['username'])) {
    // If the user is not logged in, redirect to the login page
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the message from the form
    $message = $_POST['message'];

    // Validate and sanitize the input
    $message = filter_var($message, FILTER_SANITIZE_STRING);

    // Get the username from the session
    $username = $_SESSION['username'];

    // Database connection details
    $servername = "localhost";
    $usernameDB = "root";
    $passwordDB = "";
    $dbname = "user";

    // Create connection
    $conn = new mysqli($servername, $usernameDB, $passwordDB, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert the message into the comment table
    $sql = "INSERT INTO comment (username, message) VALUES (?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $message);

    if ($stmt->execute()) {
        header("Location: blog.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
