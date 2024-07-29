<?php
// Start session (if not already started)
session_start();

// Check if full name is set in session
if(isset($_SESSION['username'])) {
    // Get the full name from session
    $fullname = $_SESSION['username'];

    // Establish connection to MySQL database
    $servername = "localhost";
    $username = "root";
    $password = ""; // If you have set a password, enter it here
    $dbname = "user";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve other form data
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Insert data into 'contacts' table
    $sql = "INSERT INTO contacts (fullname, email, subject, message) VALUES ('$fullname', '$email', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: contact.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    // Redirect to login page if session is not active
    header("Location: login.php");
    exit();
}
?>
