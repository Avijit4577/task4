<?php
session_start();

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

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['username'] = $username;
    header('Location: secured_page.php');
} else {
    echo "Invalid username or password. Please try again.";
}
$conn->close();
?>
