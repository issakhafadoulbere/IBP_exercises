<?php
// Database connection
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

$conn = new mysqli('localhost', 'root', '', 'student_registration');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Form data retrieval
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$gender = $_POST['gender'];

// SQL query to insert data into the students table
$sql = "INSERT INTO students (full_name, email, gender) VALUES ('$fullname', '$email', '$gender')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
