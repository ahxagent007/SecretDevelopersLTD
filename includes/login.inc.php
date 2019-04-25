<?php

session_start();

include 'clearTEXT.inc.php';

if(isset($_POST['login'])){
    
    include 'dbh.inc.php';
    
    $uid = clean_text($_POST['uid']);
    $pwd = clean_text($_POST['pwd']);
    
    if(empty($uid) || empty($pwd)){
        header("Location: ../index.php?login=empty");
        exit();
    }else{
        $sql = "SELECT * FROM users WHERE user_uid = '$uid';";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        
        if($resultCheck < 1){
            header("Location: ../index.php?login=noSQL");
            exit();
        }else{
            if($row = mysqli_fetch_assoc($result)){
                //echo $row['user_uid'];
                $hashedPWD = md5($pwd);
                
                if($hashedPWD = $row['user_pwd']){
                    //echo "PASSORD MATCHED";
                    $_SESSION['uid'] = $row['user_id'];
                    $_SESSION['first'] = $row['user_first'];
                    $_SESSION['last'] = $row['user_last'];
                    $_SESSION['pwd'] = $row['user_pwd'];
                    $_SESSION['email'] = $row['user_email'];
                    header("Location: ../index.php?login=success");
                    exit();
                }
            }
        }
    }
}else{
    header("Location: ../index.php?login=error");
    exit();
}