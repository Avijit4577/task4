<?php

$host="localhost";
$user="root";
$password="";
$db="your_database";

$conn=new mysqli($host,$user,$password,$db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful. Please <a href='index.php'>login</a>.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
