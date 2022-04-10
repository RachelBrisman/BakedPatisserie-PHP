<?php
include "header.php"; 
require_once 'databaseconnection.php';
require_once 'functions.inc.php';
$result2 = $conn->query("select prAmount, prName, prPrice, prID, prKey from products");

if(isset($_POST["submit"])){
    
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    if(emptyInputSignup($name, $phone, $email) !== false){
        header("location: order.php?error=emptyinput");
        exit();
    }

    if(invalidEmail($email) !== false){
        header("location: order.php?error=invalidemail");
        exit();
    }

    if(invalidTel($phone) !== false){
        header("location: order.php?error=invalidphone");
        exit();
    }

    while ($row2 = $result2->fetch_assoc()) {
        $pID = $row2['prID']; 
        $pKey = $row2['prKey'];
        if(isset($_POST[$pID])){
            if(!empty($_POST[$pKey])){
                ${$pKey. 'Am'} = $_POST[$pKey];
            }else{
                header("location: order.php?error=missingamount");
                exit();
            }
        }else{
            ${$pKey. 'Am'} = 0;
        }
    }

    $sql = "INSERT INTO orderinfo (custname, phone, email, Chocolate_Chip_Cookies, Chocolate_Cupcakes, Vanilla_Cupcakes, Chocolate_Babka, Cinnamon_Babka, Vanilla_Babka, Assorted_Rugelach, Peanut_Butter_Cookies) VALUES (?,?,?,?,?,?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: order.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sisiiiiiiii", $name, $phone, $email, $cccAm, $ccAm, $vcAm, $cbAm, $cnbAm, $vbAm, $arAm, $pbcAm);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    $lastID = mysqli_insert_id($conn);
    echo "<h1>Thank You For Your Order!</h1>";
    echo '<table cellspacing="5" cellpadding="8">

    <tr>
    <th align="center">Name</th>
    <th align="center">Phone</th>
    <th align="center">Email</th>
    <th align="center">Chocolate Chip Cookies</th>
    <th align="center">Chocolate Cupcakes</th>
    <th align="center">Vanilla Cupcakes</th>
    <th align="center">Chocolate Babka</th>
    <th align="center">Cinnamon Babka</th>
    <th align="center">Vanilla Babka</th>
    <th align="center">Assorted Rugelach</th>
    <th align="center">Peanut Butter Cookies</th>
    </tr>';
    echo '<tr>
    <td align="center">' . $name . '</td>
    <td align="center">' . $phone . '</td>
    <td align="center">' . $email . '</td>
    <td align="center">' . $cccAm . '</td>
    <td align="center">' . $ccAm . '</td>
    <td align="center">' . $vcAm . '</td>
    <td align="center">' . $cbAm . '</td>
    <td align="center">' . $cnbAm . '</td>
    <td align="center">' . $vbAm . '</td>
    <td align="center">' . $arAm . '</td>
    <td align="center">' . $pbcAm . '</td>
    </tr></table>';
}else{
    header("location: signup.php");
    exit();
}
include "footer.php"; 