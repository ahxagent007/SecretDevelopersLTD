<?php session_start();?>

<?php
    if(isset($_POST['send'])){
        
        if(empty($_POST['topic']) || empty($_POST['msg'])){
            echo "Field is empty!";
        }else{
            
            $topic = $_POST['topic'];
            $body = $_POST['msg'];
            $user_id = $_SESSION['uid'];
            $user_name = $_SESSION['first']." ".$_SESSION['last'];
            $user_email = $_SESSION['email'];
            sendMessage($user_id,$user_name,$user_email,$topic,$body);
            
            
        }
        
    }

    function sendMessage($user_id,$user_name,$user_email,$topic,$body){
        
        include 'dbh.inc.php';
        
        $query = "INSERT INTO usermessage (uid,uname,uemail,topic,message) VALUES('$user_id','$user_name','$user_email','$topic','$body')";
        $result = mysqli_query($conn,$query);
        if($result){
            echo "<br/>MESSAGE SEND!";
        }else{
            echo "<br/>MESSAGE NOT SEND";
        }
        
    }
    
    
?>