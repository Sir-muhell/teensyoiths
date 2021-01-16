<?php
include("functions/init.php");

if (!isset($_SESSION['Username']) || !isset($_SESSION['user'])) {
    
    redirect("./signup");
} else {

session_destroy();
header("location: ./");
}

// redirect("login.php");
?>