<?php include "../includes/adminHEADER.inc.php"?>

<?php 
    if(isset($_SESSION['uid']) && $_SESSION['uid'] == 'admin'){
    echo'

<div>
    <div class="head-tag">
        <h1>Add Post</h1>
    </div>
    <div class="row">
        <div class="col-md-5 post-details">
            <ul>
                <li>By adding post it will directly shown to members</li>                
                <li>Please do not use any vulger words</li>
                <li>Thank you</li>
            </ul>
            
        </div>
        <div class="col-md-7">
            <form method="POST" action="addpost.php" enctype="multipart/form-data">
                <div class="col-md-12 x-input">
                    <input type="text" name="headtext" placeholder="Head of the post"/>
                </div>
                <div class="col-md-12 x-input">
                    <textarea name="posttext" rows="10" cols="40" placeholder="Details text here....."></textarea>
                </div>
                <div class="col-md-12 x-input">
                    <h5>Select Picture</h5>
                    <input type="file" name="image" id="image">
                </div>
                <div class="col-md-12 x-input">
                    <button class="btn btn-primary" type="submit" name="done">Add Post</button>
                </div>
        
            </form>
        </div>
    </div>

</div>
';

}else{
        echo'<div class="container">
        <div class="pleaselogin">
                <img src="../img/pleaselogin.jpg">
            </div></div>';
    }


?>


<?php include "../includes/footer.inc.php" ?>


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