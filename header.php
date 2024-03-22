<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Declan's Website!</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <header class="site_header">
        <div class="site-title">
            <a href="index.php"><h1>Strength Sync</h1></a>
        </div>
        <nav>
            <ul class="header-buttons">
                <a href="index.php" class="pagelink sarabun-regular">Home</a>
                <a href="about.php" class='pagelink'>What is this?</a>
                <?php
                    if(isset($_SESSION["useruid"])) {
                        echo "<a href='profile.php' class='pagelink'>My Account</a>";
                        echo "<a href='actions/logout_action.php' class='pagelink'>Log Out</a>";
                    }
                    else {
                        echo "<a href='login.php' class='pagelink'>Log In</a>";
                        echo "<a href='register.php' class='pagelink'>Sign Up</a>";
                    }
                ?>
            </ul> 
        </nav>
       
    </header>
    
