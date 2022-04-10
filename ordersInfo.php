<?php
require_once('databaseconnection.php');

$query = "SELECT custname, phone, email, Chocolate_Chip_Cookies, Chocolate_Cupcakes, Vanilla_Cupcakes, Chocolate_Babka, Cinnamon_Babka, Vanilla_Babka, Assorted_Rugelach, Peanut_Butter_Cookies FROM orderinfo";

$response = @mysqli_query($conn, $query);

if($response){

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

    while($row = mysqli_fetch_array($response)){

        echo '<tr><td align="center">' . 
        $row['custname'] . '</td><td align="center">' . 
        $row['phone'] . '</td><td align="center">' . 
        $row['email'] . '</td><td align="center">' .
        $row['Chocolate_Chip_Cookies'] . '</td><td align="center">' . 
        $row['Chocolate_Cupcakes'] . '</td><td align="center">' .
        $row['Vanilla_Cupcakes'] . '</td><td align="center">' . 
        $row['Chocolate_Babka'] . '</td><td align="center">' .
        $row['Cinnamon_Babka'] . '</td><td align="center">' . 
        $row['Vanilla_Babka'] . '</td><td align="center">' .
        $row['Assorted_Rugelach'] . '</td><td align="center">' . 
        $row['Peanut_Butter_Cookies'] . '</td><td align="center">';

        echo '</tr>';
    }

    echo '</table>';

} else {

    echo "Couldn't issue database query<br />";

    echo mysqli_error($conn);

}


