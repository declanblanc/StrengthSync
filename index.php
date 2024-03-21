<?php
    include_once 'header.php';
?>

   
    <h2 class='sad'>There's nothing here yet!</h2>

    <script src="script.js"></script>

    <?php
      if(isset($_GET["error"])){
        if($_GET["error"] == "none")
        echo "<p>Account created!</p>";
      }
    ?>

<?php
    include_once 'footer.php';
?>