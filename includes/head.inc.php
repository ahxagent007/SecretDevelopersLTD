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
		<link rel="stylesheet" href="css/bootstrap.min.css" />     
        <link rel="stylesheet" a href="font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css" />	
	</head>
	<body>
        <div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">
                <a class="navbar-brand" href="#"><img src="img/secretDevLogoBlack.png" alt="Secret Dev" height="100"></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"> <!--active-->
                            <a class="nav-link" href="index.php">Home</a> <!-- <span class="sr-only">(current)</span> -->
                          </li>
                        <li class="nav-item">
                            <a class="nav-link" href="aboutus.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="whatwedo.php">Our Works</a>
                        </li>
                          <li class="nav-item">
                            <a class="nav-link" href="news.php">News</a>
                          </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contactus.php">Contact Us</a>
                        </li>
                    </ul>
              </div>
                                
            </nav>
             
        </div>
        
        <div class="container">
            <div class="singinsungup">
                <?php 
                if(isset($_SESSION['uid'])){
                    echo '<div>
                            <form class="form-inline" action="includes/logout.inc.php" method="POST">
                                <h6 class="col-md-12 text-right">You are logged in as, '.$_SESSION['first'].' <button class="btn btn-md btn-success" type="submit" name="logout">Logout</button> <button class="btn btn-primary" type="submit" name="profile">Account</button></h6>                         </form>
                        </div>';
                }else{
                    echo '<form class="form-inline" action="includes/login.inc.php" method="POST">

                            <input class="col-md-3" type="text" name="uid" placeholder="Username/e-mail">
                            <input class="col-md-3" type="password" name="pwd" placeholder="password">
                            <button class="btn btn-md btn-success col-md-2" type="submit" name="login">Sign-in</button>
                            <h5 class="col-md-2" style="text-align: center">OR</h5>
                            <a class="btn btn-bg btn-success col-md-2" href="signup.php">Sign up</a> 

                        </form>
                        ';                            
                }
            ?>  
            </div>
                            
                    
         </div>   
        