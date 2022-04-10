<?php include "header.php"; 
require_once 'databaseconnection.php';

$result = $conn->query("select day, prBaked from daysbaked");
$result2 = $conn->query("select prAmount, prName, prPrice, prID, prKey from products");
?>

<section>    
<table>
<?php
    if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            echo "<h1 style='color:red;'>**All fields must be filled in**</h1>";
        }else if($_GET["error"] == "invalidemail"){
            echo "<h1 style='color:red;'>**Invalid Email**</h1>";
        }else if($_GET["error"] == "invalidphone"){
            echo "<h1 style='color:red;'>**Invalid Phone Number**</h1>";
        }else if($_GET["error"] == "stmtfailed"){
            echo "<h1 style='color:red;'>**Something went wrong**</h1>";
        }else if($_GET["error"] == "none"){
            echo "<h1 style='color:#f54eb8;'>Signup successful!</h1>";
        }
    }
?>
        <tr>
            <td colspan="2"><h1>Place an Order</h1></td>
        </tr>
        <form action="orderProcess.php" method="post">
            <tr>
                <td><label for="days">Day Each Item is Baked</label></td>
                <?php
                    echo "<td><select id='days'>";
                    while ($row = $result->fetch_assoc()) {
                        $day = $row['day'];
                        $pBaked = $row['prBaked']; 
                        echo '<option>'.$day.'  &nbsp-&nbsp  '. $pBaked.'</option>';  
                    }
                    echo "</select></td></tr>";
                    echo "<tr><td colspan='2' style='text-align:center;'><b>Products</b></td></tr>";

                    while ($row2 = $result2->fetch_assoc()) {
                        $pAmount = $row2['prAmount'];
                        $pName = $row2['prName']; 
                        $pPrice = $row2['prPrice']; 
                        $pID = $row2['prID']; 
                        $pKey = $row2['prKey']; 
                        echo '<tr><td><input type="checkbox" id="'. $pID .'" value="check" name= "' . $pID . '">';
                        echo '<label for="'. $pID .'">'.$pAmount . ' ' . $pName . ' ' . $pPrice.'</label></td>';
                        echo '<td><label for=amount>Number of Orders: </label><input type="text" name="' . $pKey . '" id="amount" size="2"></td>';
                    }
                    
                ?>
            </tr>
            <tr>
                <td><label for="name">Name:</label></td>
                <td><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
                <td><label for="phone">Phone:</label></td>
                <td><input type="tel" name="phone" id="phone"></td>
            </tr>
            <tr>
                <td><label for="email">Email:</label></td>
                <td><input type="text" name="email" id="email"></td>
            </tr>
            <tr style="text-align: center;">
                <td colspan="2"><label>*Payment Upon Pickup*</label></td>
            </tr>
            <tr style="text-align: center;">
                <td colspan="2"><input type="submit" name="submit" value="Place My Order!"></td>
            </tr>
        </form>
    </table>
    
</br>
</section>

<?php include "footer.php"; ?>