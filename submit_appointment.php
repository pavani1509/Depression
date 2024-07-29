<?php
header('Content-Type: application/json');

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "health_db";

// Create connection
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
    $response = array("status" => "error", "message" => "Connection failed: " . $conn->connect_error);
    echo json_encode($response);
    exit();
}

// Prepare data for insertion (sanitize if necessary)
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$appointment_date = $_POST['appointment_date'];
$description = $_POST['description'];

// Prepare SQL statement with placeholders
$sql = "INSERT INTO appointments (name, age, gender, contact, email, appointment_date, description)
        VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    $response = array("status" => "error", "message" => "Prepare failed: (" . $conn->errno . ") " . $conn->error);
    echo json_encode($response);
    exit();
}

// Bind parameters to the statement
$stmt->bind_param("sisssss", $name, $age, $gender, $contact, $email, $appointment_date, $description);

// Execute the statement
if ($stmt->execute()) {
    $response = array("status" => "success", "message" => "New appointment booked successfully");
    echo json_encode($response);
} else {
    $response = array("status" => "error", "message" => "Error: " . $sql . "<br>" . $conn->error);
    echo json_encode($response);
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
