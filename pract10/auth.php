<?php
session_start();
require_once 'db.php'; //підключення скрипту
$l=$_POST['login'];
$p=$_POST['password'];
    if (count($_POST)>0) {
        //potential sql injection, 
        $res = mysqli_query ($conn, "SELECT * FROM `users` WHERE login = '$l' AND password = '$p' ");
        $row = mysqli_fetch_array($res);
        if (is_array($row)){
            $_SESSION['id'] = $row['id'];
            $_SESSION['login'] = $row['login'];
            header('Location: restricted.php');
} else {
    echo 'Invalid password';
   }
}
?>
