<?php include "header.php";
    
    if(isset($_POST["submit"])){
        $_SESSION['LoggedIn'] = 0;

        $username = $_POST["username"];
        $password = $_POST["password"];
    
        require_once 'databaseconnection.php';

        
        $sql = "SELECT * FROM authorizedusers WHERE username = '".$username."'AND password = '".$password."'"; 
       
        if($result = mysqli_query($conn, $sql)){
            $row = mysqli_num_rows($result);
            if($row > 0){
                //set session to valid
                $_SESSION['LoggedIn'] = 1;
                //set to cookie to username
                setcookie("Username", $_POST["username"], time() + 3600);
                echo "<p><a href='contentPage.php'>Login Successful! Click here to continue.</a></p>";
            }
        }

    }
    if($_SESSION["LoggedIn"] == 0){
        echo "<p>Oops! Login was incorrect. <a href='login.php'><b>Click Here to Retry! </b></a></p>";
    }
include "footer.php";