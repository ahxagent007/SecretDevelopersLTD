<?php include "../includes/adminHEADER.inc.php"?>





<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table id="t01">
              <tr>
                <th>User ID</th>
                <th>Name</th> 
                <th>Email</th>
                <th>Topic</th> 
                <th>Message</th>
                <th>Time</th> 
              </tr>
                <?php 
                        if(isset($_SESSION['uid']) && $_SESSION['uid'] == 'admin'){
                            displayMessages();
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


<?php include "../includes/footer.inc.php" ?>

<?php
  
    
function displayMessages(){
    include "../includes/dbh.inc.php";

    $qry = "SELECT * FROM usermessage";
    $result = mysqli_query($conn,$qry);
    while($row = mysqli_fetch_array($result)){
        echo '
            <tr>
                <td>'.$row[0].'</td>
                <td>'.$row[1].'</td> 
                <td>'.$row[2].'</td>
                <td>'.$row[3].'</td>
                <td>'.$row[4].'</td> 
                <td>'.$row[5].'</td>
              </tr>
        
        '; 
    }
}
    
?>