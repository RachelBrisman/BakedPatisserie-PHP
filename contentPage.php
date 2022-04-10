<?php include "header.php"; ?>
    <?php
        if($_SESSION["LoggedIn"] == 1){
            echo "<p>Hello ". $_COOKIE["Username"]."!</p>
                    <p>Now that you are logged in, you will be able to place orders.</p>";
        }
    ?>
<?php include "footer.php"; ?>