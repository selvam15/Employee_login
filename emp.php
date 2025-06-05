<?php
$host = "localhost";
$user = "root";
$password = "kakashi15@";
$dbname = "employee_db";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$department = $_POST['department'];
$joining_date = $_POST['joining_date'];


$sql = "INSERT INTO employees (name, email, phone, department, joining_date)
        VALUES ('$name', '$email', '$phone', '$department', '$joining_date')";

if ($conn->query($sql) === TRUE) {
    echo "Employee added successfully.";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
