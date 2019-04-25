<?php

include 'clearTEXT.inc.php';

if(isset($_POST['signup'])){
    
    include_once 'dbh.inc.php';
    
    $first = clean_text($_POST['first']);
    $last = clean_text($_POST['last']);
    $email = clean_text($_POST['email']);
    $uid = clean_text($_POST['uid']);
    $pass = clean_text($_POST['pwd']);
    
    
    if(empty($first)){
        header("Location: ../signup.php?signup=empty");
        exit();
    }else{
       if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
           
       }else{
           $sql = "SELECT * FROM users WHERE user_uid = '$uid';";
           $result = mysqli_query($conn,$sql);
           $resultCheck = mysqli_num_rows($result);
           
           if($resultCheck > 0){
               header("Location: ../signup.php?signup=usertaken");
                exit();
           }else{
               //HASHING
               $hashedPWD = md5($pass);
               //INSERT database
               $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first', '$last', '$email', '$uid', '$hashedPWD');";
               mysqli_query($conn,$sql);
               
               header("Location: ../signup.php?signup=success");
               exit();
               
           }
       }
    }
    
}else{
    header("Location: ../signup.php");
    exit();
}
?>