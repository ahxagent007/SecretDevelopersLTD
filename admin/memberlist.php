<?php include "../includes/adminHEADER.inc.php"?>



<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table id="t01">
              <tr>
                <th>User ID</th>
                <th>Name</th> 
                <th>Email</th>                
                <th>Address</th>
                <th>User Name</th> 
                <th>Profile Pic</th> 
              </tr>
              
                <?php 
                    if(isset($_SESSION['uid']) && $_SESSION['uid'] == 'admin'){
                        displayMembers();
                    }else{
                        echo'<div class="pleaselogin">
                        <img src="../img/pleaselogin.jpg">
                    </div>';
                    }
                ?>
                                
            </table>
        </div>
    </div>
</div>


<?php
  
    
function displayMembers(){
    include "../includes/dbh.inc.php";

    $qry = "SELECT * FROM users";
    $result = mysqli_query($conn,$qry);
    while($row = mysqli_fetch_array($result)){
        echo '
            <tr>
                <td>'.$row[0].'</td>
                <td>'.$row[1].' '.$row[2].'</td> 
                <td>'.$row[3].'</td>
                <td>'.$row[6].'</td>
                <td>'.$row[4].'</td> 
                <td><img src="data:image;base64,'.$row[7].'" width="50px"></td>
              </tr>
        
        '; 
    }
}
    
?>


<?php include "../includes/footer.inc.php" ?>