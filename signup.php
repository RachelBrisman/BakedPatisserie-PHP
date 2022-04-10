<?php include "header.php"; ?>
<section>    
<table style="margin-left: auto; margin-right: auto;">
        <tr style="text-align: center;">
            <td colspan="2"><h1>Sign Up</h1></td>
        </tr>
        <form action="signup.inc.php" method="post">
            <tr>
                <td><label for="name">Name:</label></td>
                <td><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
                <td><label for="username">Username:</label></td>
                <td><input type="text" name="username" id="username"></td>
            </tr>
            <tr>
                <td><label for="password">Password:</label></td>
                <td><input type="password" name="password" id="password"></td>
            </tr>
            <tr>
                <td><label for="password2">Repeat Password:</label></td>
                <td><input type="password" name="password2" id="password2"></td>
            </tr>
            <tr style="text-align: center;">
                <td colspan="2"><input type="submit" name="submit" value="Sign Up"></td>
            </tr>
        </form>
     
    </table>
    <?php
    if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            echo "<p>All fields must be filled in.</p>";
        }else if($_GET["error"] == "invalidusername"){
            echo "<p>Invalid Username.</p>";
        }else if($_GET["error"] == "invalidemail"){
            echo "<p>Invalid Email.</p>";
        }else if($_GET["error"] == "passwordmatch"){
            echo "<p>The passwords don't match.</p>";
        }else if($_GET["error"] == "userexists"){
            echo "<p>This user already exists.</p>";
        }else if($_GET["error"] == "stmtfailed"){
            echo "<p>Something went wrong.</p>";
        }else if($_GET["error"] == "none"){
            echo "<p>Signup successful!</p>";
        }
    }
?>
</br>
</section>

<?php include "footer.php"; ?>