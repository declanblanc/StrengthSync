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
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <header class="site_header">
        <div class="site_header">
            <img 
            src="https://media.discordapp.net/attachments/368594215485308929/1220700137601503273/image.png?ex=660fe498&is=65fd6f98&hm=51af7edeec8f4e29e1a54c4f72007d701b1275e5e26e0d61f172f18c50e0c49f&=&format=webp&quality=lossless" 
            style="width: 200px; height:57px; object-fit: cover;"
            alt="StrengthSync Logo">
            <!-- <a href="index.php"><h1 class=>Strength Sync</h1></a> -->
        </div>
        <nav>
            <ul class="header-buttons">
                <a href="index.php" class="pagelink">Home</a>
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
    
