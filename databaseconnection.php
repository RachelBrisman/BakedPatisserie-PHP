<?php

$serverName = "localhost";
$DBuserName = "root";
$DBpassword = "";
$DBName = "358project";

$conn = mysqli_connect($serverName, $DBuserName, $DBpassword, $DBName);

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}