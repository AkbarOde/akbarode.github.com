<?php

session_start();
// $_SESSION = [];
$_SESSION['out'] = 'Are You Sure';
header("Location: login.php");
session_unset();
session_destroy();


?>
