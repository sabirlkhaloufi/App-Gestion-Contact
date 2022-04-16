<?php
    include_once('./db.php');
    include_once('./user.php');
    include_once('./contact.php');

    session_start();
    if(isset($_POST['submitSign'])){
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['pass'];
        $user = new user();
        $user->Register($_SESSION['username'],$_SESSION['password']);
    }
    if(isset($_POST['submitLogin'])){
        $user = new user();
        $user->login($_POST['username'],$_POST['pass']);   
    }
?>