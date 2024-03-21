<?php
    include_once 'header.php';
?>

<div class='forms'>
    <form action="actions/login_action.php" method="POST">
        <div class='form-title'>
                <h1>Enter your login information</h1>
        </div>
        <div>
            <label for="username">Enter Your Username or Email</label><br>
            <input type="text" id="username" name="username" placeholder="thelegend27"  maxlength="30">
        </div>
        
        <div>
            <label for="password">Enter Your Password</label><br>
            <input type="password" id="password" name="password" placeholder="Password"  maxlength="16">
        </div>

        <div>
            <input type="submit" name = "submit" value="Submit">
        </div>

    </form>
</div>    
    <?php
      if(isset($_GET["error"])){
        if($_GET["error"] == "invaliduser") {
            echo "<p>This username or email does not exist!</p>";
        }
        else if($_GET["error"] == "incorrectpassword") {
            echo "<p>Incorrect Password!</p>";
        }
        else if($_GET["error"] == "emptyinput") {
            echo "<p>Please fill out all fields!</p>";
        }
        else if($_GET["error"] == "stmtfailed") {
            echo "<p>Sorry, something went wrong!</p>";
        }
      }
    ?>



<?php
    include_once 'footer.php';
?>