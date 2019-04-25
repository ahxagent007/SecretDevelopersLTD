<?php

if(isset($_POST['adminlogout'])){
    session_start();
    session_unset();
    session_destroy();
    header("Location: ../index.php");
    exit();
}
