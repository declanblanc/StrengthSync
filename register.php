<?php
    include_once 'header.php';
?>

<div class='forms'>
    <div class='form-title'>
        <h2>Register Now!</h2>
    </div>
    <form action="actions/signup_action.php" method="post">
        <div>
            <label for="fName">Enter Your Name</label><br>
            <input type="text" id="fName" name="fName" placeholder="Alex"  maxlength="30">
        </div>

        <div>
            <label for="email">Enter Your Email</label><br>
            <input type="text" id="email" name="email" placeholder="AlexSmith@gmail.com"  maxlength="60">
        </div>

        <div>
            <label for="username">Choose Your Username</label><br>
            <input type="text" id="username" name="username" placeholder="thelegend27"  maxlength="30">
        </div>

        <div>
            <label for="password">Choose Your Password</label><br>
            <input type="password" id="password" name="password" placeholder="Password"  maxlength="16">
        </div>

        <div>
            <label for="password">Confirm Your Password</label><br>
            <input type="password" id="passwordrepeat" name="passwordrepeat" placeholder="Password"  maxlength="16">
        </div>

        <div>
            <input type="submit" name = "submit" value="Submit">
        </div>
    </form>
</div>
    <?php
      if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput") {
            echo "<p>Please fill in all fields!</p>";
        }
        else if($_GET["error"] == "invalidUid") {
            echo "<p>Invalid Username!</p>";
        }
        else if($_GET["error"] == "invalidEmail") {
            echo "<p>Invalid Email!</p>";
        }
        else if($_GET["error"] == "passwordsdontmatch") {
            echo "<p>Make sure the passwords match!</p>";
        }
        else if($_GET["error"] == "usernametaken") {
            echo "<p>Sorry, this username is already taken!</p>";
        }
        else if($_GET["error"] == "stmtfailed") {
            echo "<p>Sorry, something went wrong!</p>";
        }
      }
    ?>

<?php
    include_once 'footer.php';
?>