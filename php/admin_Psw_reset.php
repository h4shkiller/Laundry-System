<!DOCTYPE html>
<html>

        <head>
            <link href="../css/hf.css" type="text/css" rel="stylesheet">
            <title>Reset Password</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
            
            <link rel="stylesheet" href="../css/AdPwReset.css">
        </head>

        <body>
            <div class="header">
                <img src = "../images/logo.png" class = "logo" >
                <a href="shopping_cart.php"><img src="../images/basket.png" class="basket"></a>
                <a href="userprofile.php"><img src="../images/avatar.png" class="user"></a>

            </div>
            <!--- Navigation Bar -->
            <div class="navbar">
                <ul class="nav">
                    <li><a href="../html/index.html">Home</a></li>
                    <li><a href="howitworks.php">How it Works</a></li>
                    <li><a href="selectItem.php">Order Now</a></li>
                    <li><a href="Final_contact.php">Contact Us</a></li>
                    <li><a href="finalAboutUs.php">About Us</a></li>
                    <li><a href="loginpage.php">Login</a></li>
                    <li><a href="register.php">Signup</a></li>
                </ul>
            </div>
        </div>
        <br>
        
<?php

    $pageTitle = "Admin Password Reset Form";

?>

<center>
<div class="pwForm">

<h5>Reset admin password</h5>

        <div class="box">
            
            
                <form method="POST" action="adminPwResetCode.php">
                    
                    <input  type="password" name="OldAdPw" placeholder="Current Admin Password">
                    <br>
                    <input  type="password" name="NewAdPw" placeholder="New Admin Password">
                    <br>
                    <input  type="password" name="ConPw" placeholder="Confirm new admin password">
                    <br>
                    <button type="submit" name="submit">Submit</button>
                </form>
            
        </div>


</div>
</center>

<!--footer-->
<footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col0">
                        <h4>Follow Us</h4>
                        <div class="social-links">
                            <a href=""><i class = "fab fa-facebook"></i></a>
                            <a href=""><i class = "fab fa-twitter"></i></a>
                            <a href=""><i class = "fab fa-instagram"></i></a>
                            <a href=""><i class = "fab fa-google"></i></a>
                        </div>
                    </div>
                    <div class="footer-col1">
                        <div class="downloadApp">
                            <a href = "#" ><img class = "googleplay" src = "../images/google-play-badge.png"> </a>
                            <a href = "#" ><img class = "applestore" src = "../images/apple-store.png" > </a>
                        </div>
                    </div>
                    <div class="footer-col">
                        <h4>Payment Methods</h4>
                        <div class="payment">
                            <img class = "paymethods" src = "../images/cards.png" >
                        </div>
                    </div>
                    <div class="footerterms">
                        
                        <ul>
                            <li><a href="../html/terms.html">Terms & Conditions</a></li>
                            <li><a href = "../html/privacypolicy.php" >Privacy Policy</a></li>
                        </ul>
                        
                    </div>
                </div>
            </div>
            </div>
            
        </footer>
        <div class = "base" >
            
            <center> <span class = "copyrights" >© 2022 Ceylaundry</span>
                </center>
        </div>



</body>




</html>
