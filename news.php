<?php include "includes/head.inc.php"?>


<div class="container">
    

    <?php 
        if(isset($_SESSION['uid'])){
            displayImage();
        }else{
            echo'<div class="pleaselogin">
                <img src="img/pleaselogin.jpg">
            </div>';
        }
     ?>
    
</div>
<?php include "includes/footer.inc.php" ?>
    

<?php
  
    
function displayImage(){
    include "includes/dbh.inc.php";

    $qry = "SELECT * FROM post";
    $result = mysqli_query($conn,$qry);
    while($row = mysqli_fetch_array($result)){
        #src=""
        echo '
            <div class="row post">
                <div class="col-md-4 post-image">
                    <img src="data:image;base64,'.$row[3].'">
                </div>
                <div class="col-md-8">
                    <div class="post-head">
                        <h3>'.$row[1].'</h3>
                    </div>
                    <div class="post-message">
                        <p>'.$row[2].'</p>

                    </div>
                </div>
            </div>        
        
        '; 
    }
}
    
?>