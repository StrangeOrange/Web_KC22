<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "users"; //повинна бути створена в субд

// Встановлення з'єднання 
$conn = mysqli_connect($servername, $username, $password, $database);
// Перевірка з'єднання
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

