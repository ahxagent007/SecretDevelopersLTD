<?php
session_start();

    include 'clearTEXT.inc.php';

    if(isset($_POST['adminlogin'])){

        $uid = clean_text($_POST['uid']);
        $pwd = clean_text($_POST['pwd']);

        if(empty($uid) || empty($pwd)){
            header("Location: ../admin/index.php?login=empty");
            exit();
        }else{
            if($uid == 'admin' & $pwd == 'admin'){
                    $_SESSION['uid'] = 'admin';
                        $_SESSION['first'] ='admin';
                        $_SESSION['last'] = 'admin';
                        $_SESSION['pwd'] = 'admin';
                        $_SESSION['email'] = 'admin';
                        header("Location: ../admin/addpost.php");
                        exit();
            }else{
                header("Location: ../admin/index.php?login=empty");
                exit();
            }
        }
    }else{
        header("Location: ../index.php?login=error");
        exit();
    }  

?>
