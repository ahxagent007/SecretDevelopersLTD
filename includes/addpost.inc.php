
<?php
    if(isset($_POST['done'])){
        
        if(getimagesize($_FILES['image']['tmp_name']) == FALSE || empty($_POST['headtext']) || empty($_POST['posttext'])){
            echo "PLEASE SELECT AND IMAGE";
        }else{
            
            $image = addslashes($_FILES['image']['tmp_name']);
            #$name = addcslashes($_FILES['image']['name']);
            $image = file_get_contents($image);
            $image = base64_encode($image);
            $head = $_POST['headtext'];
            $body = $_POST['posttext'];
            saveImage($head,$body,$image);
            
            
        }
        
    }

    function saveImage($head,$body,$pic){
        
        include '../includes/dbh.inc.php';
        
        $query = "INSERT INTO post (post_head,post_body,post_pic) VALUES('$head','$body','$pic')";
        $result = mysqli_query($conn,$query);
        if($result){
            echo "<br/>Image Uploaded!";
        }else{
            echo "<br/>Image not uploaded.";
        }
        
    }
    
    
?>