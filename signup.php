<!DOCTYPE html>
<html>
    <head>
         <title> Login Form in HTML5 and CSS3</title>
         <link rel="stylesheet" a href="css/signup.css">
         <link rel="stylesheet" a href="font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" a href="css/bootstrap.min.css">
    </head>
    <body>
         <div class="container">
             <img src="img/secretDevLogoBlack.png"/>
             <form action="includes/signup.inc.php" method="POST">
                 <div class="form-input">
                    <input type="text" name="first" placeholder="Firstname"/>                     
                 </div>
                 
                 <div class="form-input">
                    <input type="text" name="last" placeholder="Lastname"/>                     
                 </div>
                 
                 <div class="form-input">
                    <input type="text" name="email" placeholder="E-mail"/>                    
                 </div>
                 
                 <div class="form-input">
                    <input type="text" name="uid" placeholder="Username"/>                    
                 </div>                 
                 
                 <div class="form-input">
                     <input type="password" name="pwd" placeholder="Password"/>                    
                 </div>
         
                 <button type="submit" name="signup" class="btn btn-md btn-success">REGISTER</button>
             </form>
         </div>
    </body>
</html>