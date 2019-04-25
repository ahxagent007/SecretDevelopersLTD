<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
	<head>
        <!--<title>Secret Developers LTD</title>-->
		
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- BOOTSTRAP 4 -->
		<link rel="stylesheet" href="../../css/bootstrap.min.css" />     
        <link rel="stylesheet" a href="font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../css/style.css" />	
        <link rel="stylesheet" href="styles/css/main.css">
      <title>What We Do</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
        <div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">
                <a class="navbar-brand" href="#"><img src="../../img/secretDevLogoBlack.png" alt="Secret Dev" height="100"></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"> <!--active-->
                            <a class="nav-link" href="../../index.php">Home</a> <!-- <span class="sr-only">(current)</span> -->
                          </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../aboutus.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../ashik/main/whatwedo.php">Our Works</a>
                        </li>
                          <li class="nav-item">
                            <a class="nav-link" href="../../news.php">News</a>
                          </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
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
                                <h6 class="col-md-12 text-right">You are logged in as, '.$_SESSION['first'].' <button class="btn btn-md btn-success" type="submit" name="logout">Logout</button></h6>                         </form>
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
        
    
  <!-- Our Offered Services -->

    
  <div class="container-fluid" id="layer1">
      <div style="height: 200px;"></div>
      <h1 style="text-align: center;"><b>Our Offered Services</b></h1>
      <h5 style="text-align: center;">We offer the following services</h5>
      <div style="height: 100px;"></div>
      
      <div class="container" style="width: 100%;">
          <div style="text-align: center">
             <div class="theme-table-image col-sm-3">
                    <img src="images/2.png" class="img-rounded" height="95%" width="95%" style="background-color: #e9e9f1"><br>
                    <h4>Android and ios app development</h4>
             </div>
             <div class="theme-table-image col-sm-3">
                    <img src="images/2.png" height="95%" class="img-rounded" width="95%" style="background-color: #e9e9f1"><br>
                    <h4>Web development</h4>
             </div>
             <div class="theme-table-image col-sm-3">
                    <img src="images/2.png" height="95%" class="img-rounded" width="95%" style="background-color: #e9e9f1"><br>
                    <h4>3D modeling</h4>
             </div>
             <div class="theme-table-image col-sm-3">
                    <img src="images/2.png" height="95%" class="img-rounded" width="95%" style="background-color: #e9e9f1"><br>
                    <h4>3D Animation</h4>
             </div>
          </div>
      </div>
      
    
  </div>
    
  
  <!-- Some Features that Made us Unique -->    
    
  <div class="container-fluid" id="layer2">
          <div style="height: 200px;"></div>
            <h2 style="text-align: center;"><b>Things that Made us Unique</b></h2><br><br><br>
              <div class="container" style="width: 100%;">
                  <div style="text-align: center">

                     <div class="theme-table-image col-sm-4">
                            <img src="images/2.png" height="50%" class="img-circle" width="50%" style="background-color: white"><br>
                            <h4>Technical Skills</h4>
                     </div>
                     <div class="theme-table-image col-sm-4">
                            <img src="images/2.png" height="50%" class="img-circle" width="50%" style="background-color: white"><br>
                            <h4>Professionalism</h4>
                     </div>
                     <div class="theme-table-image col-sm-4">
                            <img src="images/2.png" height="50%" class="img-circle" width="50%" style="background-color: white"><br>
                            <h4>Friendly customer service</h4>
                     </div>

                     <div class="theme-table-image col-sm-4">
                            <img src="images/2.png" height="50%" class="img-circle" width="50%" style="background-color: white"><br>
                            <h4>Punctuality</h4>
                     </div>
                     <div class="theme-table-image col-sm-4">
                            <img src="images/2.png" height="50%" class="img-circle" width="50%" style="background-color: white"><br>
                            <h4>Competitive fee</h4>
                     </div>
                     <div class="theme-table-image col-sm-4">
                            <img src="images/2.png" height="50%" class="img-circle"  width="50%" style="background-color: white"><br>
                            <h4>Customer satisfaction</h4>
                     </div>

                  </div>
                  
                  
          </div>
    
          <div style="height: 190px;"></div>
    
  </div>

         
        
         <footer class="x-footer">
            <h7>&copy; Secret Developers LTD 2018</h7>            
        </footer>
                   
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
    </body>
    
</html>



                     