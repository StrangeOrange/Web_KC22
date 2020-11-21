<?php
session_start();
require_once 'db.php'; //підключення скрипту
$p=$_POST['password'];
$l=$_POST['login'];
$f=$_POST['first_name'];
$last=$_POST['Last_name'];
$sql = "INSERT INTO users (first_name, last_name, password, login) VALUES ('$f', '$last', '$p','$l')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
      header('Location: login.php');
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>