<?php include "header.php"; ?>
<section>    
<table style="margin-left: auto; margin-right: auto;">
        <tr style="text-align: center;">
            <td colspan="2"><h1>Login</h1></td>
        </tr>
        <form action="response.php" method="post">
            <tr>
                <td><label for="username">Username:</label></td>
                <td><input type="text" name="username" id="username"></td>
            </tr>
            <tr>
                <td><label for="password">Password:</label></td>
                <td><input type="password" name="password" id="password"></td>
            </tr>
            <tr style="text-align: center;">
                <td colspan="2"><input type="submit" name="submit" value="Login"></td>
            </tr>
        </form>
    </table>
    <?php
    if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            echo "<p>All fields must be filled in.</p>";
        }else if($_GET["error"] == "wronglogin"){
            echo "<p>The login information is incorrect.</p>";
        }
    }
?>
</section>
<?php include "footer.php"; ?>


