<?php

    $usernamelogin = 'admin';
    $passwordlogin = 'password123';


    session_start();


    $username = $_POST['username'];
    $password = $_POST['password'];


    if ($username == $usernamelogin && $password == $passwordlogin) {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: app.php");
    } 
    else {
        header("Location: login.php");
   }
?>