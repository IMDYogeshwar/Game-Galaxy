<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="designe.css"></link>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my first web development project</title>
    <!-- <script defer src="validation.js"></script> -->
</head>
<body>
    <nav class="navbar">
    
        <img src="img/bg1.jpg" width="40%">
    
        <ul class="menu">
            <li><a href="index.html">Home</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="contact.hmtl">Contact</a></li>
            <li><a href="about.html">About</a></li>
        </ul>
    </nav>


    <section class="sec b"> 
        <div class="paradiv">
          
            <h1 class="heading">Online <span >Gaming</span> Website</h1>
            <a href="signup.php">  
                <button class="btn"> Sing Up Now</button></a>
            <form class="box" method="POST" autocomplete="off" >
                <h1>LOGIN</h1>
                <input type="text" name="user_email" placeholder="email" required/>
                <input type="password" name="user_pass" placeholder="Password" required/>
                <input type="submit" name="sign_in" value="Login"/>
                
             <?php 
             include("signin_user.php");
             ?>
            </form>
           
        </div>
          
    </section>
        
</body>
</html>