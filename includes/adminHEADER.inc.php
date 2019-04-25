<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
	<head>
        <title>Secret Developers LTD</title>
		
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- BOOTSTRAP 4 -->
		<link rel="stylesheet" href="../css/bootstrap.min.css" />     
        <link rel="stylesheet" a href="../font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/style.css" />	
	</head>
	<body>
        <div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">
                <a class="navbar-brand" href="#"><img src="../img/secretDevLogoBlack.png" alt="Secret Dev" height="100"></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="../admin/addpost.php">ADD POST</a>
                          </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../admin/memberlist.php">Member List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../admin/messages.php">Messages</a>
                        </li>
                          <!--<li class="nav-item">
                            <button class="btn btn-md btn-danger" type="submit" name="login">Log-out</button>
                          </li>-->
                    </ul>
              </div>
                                
            </nav>
             
        </div>
        
        <div class="container">
            <div class="singinsungup">
                <?php 
                if(isset($_SESSION['uid']) && $_SESSION['uid'] == 'admin'){
                    echo '<div>
                            <form class="form-inline" action="../includes/adminlogout.inc.php" method="POST">
                                <h6 class="col-md-12 text-right">You are logged in as, ADMIN <button class="btn btn-md btn-success" type="submit" name="adminlogout">Logout</button></h6>
                                </form>
                        </div>';
                }else{
                    echo '<form class="form-inline" action="../includes/adminlogin.inc.php" method="POST">

                            <input class="col-md-3" type="text" name="uid" placeholder="Username/e-mail">
                            <input class="col-md-3" type="password" name="pwd" placeholder="password">
                            <button class="btn btn-md btn-success col-md-2" type="submit" name="adminlogin">Sign-in</button>
                            <h5 class="col-md-2" style="text-align: center">

                        </form>
                        ';                            
                }
            ?>  
            </div>
                            
                    
         </div>   