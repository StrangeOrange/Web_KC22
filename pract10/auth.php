<?php
session_start();
require_once 'connection.php'; //підключення скрипту
    if (count($_POST)>0) {
        //potential sql injection, 
        $res = mysqli_query ($conn, “select * from users where login=”.$_POST[‘login’].” and password=”.$_POST[‘password’].”;”);
        $row = mysqli_fetch_array($res);
        if (is_array($row)){
            $_SESSION[‘id’] = $row[‘id’];
            $_SESSION[‘login’] = $row[‘email’];
} else {
    echo ‘Invalid password’;
   }
}
