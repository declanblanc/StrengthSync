<?php

if (isset($_POST["submit"])) {

    $fName = $_POST['fName'];
    $email = $_POST['email'];
    $uName = $_POST['username'];
    $pass = $_POST['password'];
    $passrepeat = $_POST['passwordrepeat'];

    require_once 'dbh_action.php';
    require_once 'functions_action.php';

    if (emptyInputSignup($fName, $email, $uName, $pass, $passrepeat) !== false) {
        header("location: ../register.php?error=emptyinput");
        exit();
    }
    if (invalidUid($uName) !== false) {
        header("location: ../register.php?error=invaliduid");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ../register.php?error=invalidemail");
        exit();
    }
    if (pwdMatch($pass, $passrepeat) !== false) {
        header("location: ../register.php?error=passwordsdontmatch");
        exit();
    }
    if (uidExists($uName, $conn, $email) !== false) {
        header("location: ../register.php?error=usernametaken");
        exit();
    }

    createUser($conn, $fName, $email, $uName, $pass);
} 
else {
    header("location: ../register.php");
    exit();
}