<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "university";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Prepare the SQL statement
$sql = "INSERT INTO contacts (name, email, subject, message) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt) {
    // Bind the form data to the SQL statement
    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    // Execute the query
    if ($stmt->execute()) {
        // Success message
        echo "Your message has been sent and saved. Thank you!";
    } else {
        // Error if execution failed
        echo "Error executing query: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
} else {
    // Error if SQL preparation failed
    echo "Error preparing the statement: " . $conn->error;
}

// Close the database connection
$conn->close();
?>
