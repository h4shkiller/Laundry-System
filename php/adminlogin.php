<!DOCTYPE html>
<html>

        <head>
            <link href="../css/hf.css" type="text/css" rel="stylesheet">
            <title>Admin Login</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
            <link rel="Stylesheet" href="../css/adminlogin.css">
            
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




        <!--Admin login form-->
        <div class="admindiv">
            <form action="adlogin.php" method="POST">
                <h2>Admin Login</h2>

                <input type="text" name="aname" placeholder="Username">

                <input type="password" name="apassword" placeholder="Password"><br>

                <button type="submit">Login</button>

            </form>
        </div>


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
                            <li><a href = "../html/privacypolicy.html" >Privacy Policy</a></li>
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
