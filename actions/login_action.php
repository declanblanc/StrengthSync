<?php 

if(isset($_POST["submit"])) {

    $username = $_POST["username"];
    $pwd = $_POST["password"];

    require_once 'dbh_action.php';
    require_once 'functions_action.php';


    if (emptyInputLogin($username, $pwd) !== false) {
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $username, $pwd);
} else {
    header("location: ../login.php");
    exit();
}