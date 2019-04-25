<?php include "includes/head.inc.php"?>

<div>

    <div class="container">
        
        
        <div class="row">            
            <div class="col-md-4">
                <div id="propic">
                    <?php
                        
                        include "includes/dbh.inc.php";
                        $uid00 = $_SESSION['uid'];
                        $qry = "SELECT * FROM users WHERE user_id = '$uid00'; ";
                        $result = mysqli_query($conn,$qry); 
                        $row = mysqli_fetch_array($result);
                            echo '<img src="data:image;base64,'.$row[7].'">';
    
                        ?>
                    
                </div>
                <div class="user-nav-bar">
                    <h3><?php
                        
                        include "includes/dbh.inc.php";
                        $uid00 = $_SESSION['uid'];
                        $qry = "SELECT * FROM users WHERE user_id = '$uid00'; ";
                        $result = mysqli_query($conn,$qry); 
                        $row = mysqli_fetch_array($result);
                            echo $row[1].' '.$row[2];
    
                        ?></h3>
                    <form method="POST" action="userProfile.php">
                        <button class="btn" type="submit" name="userinfo">User Information</button><br>
                        <button class="btn" type="submit" name="change">Change Information</button><br>
                        <button class="btn" type="submit" name="picpic">Upload Profile Picture</button>
                    </form>                                      
                </div>
            </div>    
            <div class="col-md-8 change-info-div">  
                
                <?php
                    
                
                    if(isset($_POST['change'])){
                        
                        echo'
                            <div class="change-info">
                                <form method="POST" action="userProfile.php">                        
                                        <input type="text" name="ufirst" placeholder="firsname"/><br>
                                        <input type="text" name="ulast" placeholder="Lastname"/><br>
                                        <input type="text" name="uemail" placeholder="E-mail"/><br>                    
                                        <input type="text" name="uaddress" placeholder="House Address"/><br> 
                                        <input type="password" name="upwd1" placeholder="Password"/><br> 
                                        <input type="password" name="upwd2" placeholder="Re-enter Password"/> <br>
                                        <div class="change-info-btn"><button type="submit" name="done" class="btn btn-md btn-primary">SAVE</button></div>                        
                                </form>               
                            </div>
                        ';
                    }elseif(isset($_POST['userinfo'])){
                        include "includes/dbh.inc.php";
                        $uid00 = $_SESSION['uid'];
                        $qry = "SELECT * FROM users WHERE user_id = '$uid00'; ";
                        $result = mysqli_query($conn,$qry); 
                        $row = mysqli_fetch_array($result);
                       
                        echo'
                            <div class="user-info">
                                <h3>First Name : '.$row[1].'</h3><br>
                                <h3>Last Name : '.$row[2].'</h3><br>
                                <h3>Email Address : '.$row[3].'</h3><br>
                                <h3>User-name : '.$row[4].'</h3><br>
                            </div>
                        
                        ';
                    }elseif(isset($_POST['picpic'])){
                        echo '
                        
                        <form method="POST" action="userProfile.php" enctype="multipart/form-data">
                            <div class="col-md-12 x-input">
                                    <h5>Select Picture</h5>
                                    <input type="file" name="image00" id="image00">
                                </div>
                                <div class="col-md-12 x-input">
                                    <button class="btn btn-primary" type="submit" name="picdone">SAVE</button>
                                </div>
                        </form>                           
                        
                        ';
                    }
                ?>
                
                
                
                
            </div>
        </div>  
        
    </div>
</div>


<?php include "includes/footer.inc.php" ?>

<?php
    include "includes/clearTEXT.inc.php";
    
    if(isset($_POST['done'])){
        if(!empty($_POST['ufirst']) || !empty($_POST['ulast']) || !empty($_POST['uemail']) || !empty($_POST['uaddress']) || !empty($_POST['upwd1']) || !empty($_POST['upwd2'])){
            $uid = $_SESSION['uid'];
            $first = clean_text($_POST['ufirst']);
            $last = clean_text($_POST['ulast']);
            $email = clean_text($_POST['uemail']);
            $address = clean_text($_POST['uaddress']);
            $p1 = $_POST['upwd1'];
            $p2 = $_POST['upwd2'];
            echo $uid.' '.$first.' '.$last.' '.$email.' '.$address.' '.$p1;
            if($p1 == $p2){
                updateUser($uid, $first, $last, $email, $address, $p1);
            }else{
                echo 'PASSWORD DOESN"T MATCH';
            }
        }else{
            echo '<br><h5>EMPTY FIELDS</h5>';
        }
    }else if(isset($_POST['picdone'])){
        
        if(getimagesize($_FILES['image00']['tmp_name']) == FALSE){
            echo "PLEASE SELECT AND IMAGE";
        }else{
            
            $image = addslashes($_FILES['image00']['tmp_name']);
            $image = file_get_contents($image);
            $image = base64_encode($image);
            saveProPIC($image);           
            
        }
        
    }

    
    function updateUser($uid, $first, $last, $email, $address, $pass){
        include 'includes/dbh.inc.php';
       
        $query = "UPDATE users SET user_first = '".$first."', user_last = '".$last."', user_email = '".$email."',address = '".$address."' WHERE user_id = ".$uid.";";
        $result = mysqli_query($conn,$query);
        if($result){
            echo "<br/>INFORMATION UPDATED";
        }else{
            echo "<br/>IMFORMATION NOT UPDATED";
        }
    
    }
     
    function saveProPIC($pic){
        
        include 'includes/dbh.inc.php';
        $uiduid = $_SESSION['uid'];
        $query = "UPDATE users SET propic = '$pic' WHERE user_id = '$uiduid';";
        $result = mysqli_query($conn,$query);
        if($result){
            echo "<br/>Image SAVED!";
        }else{
            echo "<br/>Image not SAVED.";
        }
        
    }


?>