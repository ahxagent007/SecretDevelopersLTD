<?php include "includes/head.inc.php"?>



    <div class="container plain-text-post-container">
        <div class="plain-text-post">
            <h3>Welcome to Message center of Secret Developers LTD</h3>
            <p> Sed a quam mauris. Ut sit amet tincidunt ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris tempor ligula nec erat venenatis, eu viverra sem tincidunt. Sed vestibulum accumsan ante quis porta. Quisque a augue vel justo accumsan suscipit at vitae odio. Ut aliquet nibh arcu, non consequat sapien varius ut.<br/>

            Suspendisse faucibus mollis tristique. Cras a commodo libero. Ut venenatis, sem ac vulputate dignissim, purus lacus rutrum dolor, vitae consectetur eros est et ex. Donec tempus urna in tempor interdum. Etiam augue diam, fermentum et arcu a, auctor bibendum velit. Vestibulum varius, lacus vitae rhoncus scelerisque, velit ipsum venenatis ex, eu mattis sapien nibh eget leo. Donec iaculis ultrices sapien, ac tincidunt justo mollis quis. Cras vel commodo turpis. Nunc cursus, elit feugiat sodales lacinia, ipsum ligula commodo nisi, non auctor est ex vel enim. </p>
        
        </div>
        
        <div class="row">
            <div class="col-md-4 message-post-img">
                <img src="img/secretDevLogoWhite.png">
            </div>
            <div class="col-md-8">
                <form method="POST" action="includes/sendmessagetoadmin.inc.php">
                   <div class="col-md-12 x-input" >
                        <input type="text" name="topic" placeholder="Enter your topic" style="text-align:center;"/>
                    </div>
                    <div class="col-md-12 x-input">
                        <textarea name="msg" rows="10" cols="40" placeholder="Your Message here....." style="text-align:center;"></textarea>
                    </div>
                    <div class="col-md-12 x-input">
                        <button class="btn btn-primary" type="submit" name="send">Send</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>



<?php include "includes/footer.inc.php" ?>