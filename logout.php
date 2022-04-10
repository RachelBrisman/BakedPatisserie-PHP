<?php

session_start();
$_SESSION['LoggedIn'] = 0;

header("location: index.php");
exit();