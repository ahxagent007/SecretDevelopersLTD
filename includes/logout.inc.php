<?php

if(isset($_POST['logout'])){
    session_start();
    session_unset();
    session_destroy();
    header("Location: ../index.php");
    exit();
}


if(isset($_POST['profile'])){
    header("Location: ../userProfile.php");
}