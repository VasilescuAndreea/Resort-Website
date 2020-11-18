<!doctype html>
 <html lang="en">
 <head>
     <!-- <meta charset="UTF-8"> -->
     <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <script src="/Proiect/main.js"></script>
     <title>Phoenix Cernica Club</title>
     <!-- Font CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
     <!-- Scroll CDN -->
     <script src="https://unpkg.com/scrollreveal"></script>
     <script>
         <script>
         document.getElementById("signupbutton").onclick = function() {
             document.getElementById("signupform").submit()
         }
     </script>
     <link rel="stylesheet" href="signup.css">
 </head>
 <body>
     <header>
        <div class="container">
             <nav class="nav">
                 <div class="menu-toggle">
                     <i class="fas fa-bars"></i>
                     <i class="fas fa-times"></i>
                 </div>
                 <a href="index.php" class="logo"><img src="logo-phoenix.png" alt=""></a>
                 <ul class="nav-list">
                     <li class="nav-item">
                         <a href="index.php" class="nav-link">Home</a>
                     </li>
                     <!-- Navigation on the front bar -->
                     <li class="nav-item">
                         <a href="restaurant.php" class="nav-link">Restaurant</a>
                     </li>

                     <li class="nav-item">
                        <a href="piscina.php" class="nav-link">Piscina</a>
                    </li>

                    <li class="nav-item">
                        <a href="grecesc.php" class="nav-link">Grecesc</a>
                    </li>

                    <li class="nav-item">
                        <a href="parc.php" class="nav-link">Aventura</a>
                    </li>

                    <!-- <li class="nav-item">
                        <a href="login.php" class="nav-link active">Rezervari</a>
                    </li> -->

                    <?php
                        if (isset($_SESSION["useruid"])){
                            echo "<li class=\"nav-item\"><a href=\"profile.php\" class=\"nav-link active\">Profile Page</a></li>";
                            echo "<li class=\"nav-item\"><a href=\"logout.inc.php\" class=\"nav-link\">Logout</a></li>";
                        }
                        else {
                            echo "<li class=\"nav-item\"><a href=\"signup.php\" class=\"nav-link active\"> Sign up</a></li>";
                            echo "<li class=\"nav-item\"><a href=\"logout.php\" class=\"nav-link\">Log in</a></li>";
                        }
                    ?>

             </nav>
        </div>
     </header>

    <!-- LOGIN SI SIGN UP -->
    <section class="hero" id="hero">
         <div class="container">
             <h2 class="sub-headline">
                 <span class="first-letter">Welcome</span>
             </h2>
             <h1 class="headline">Phoenix </h1>
             <div class="headline-description">
                 <div class="separator">
                     <div class="line line-left"></div>
                     <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                     <div class="line line-right"></div>
                 </div>
                 <div class="single-animation">
                     <h5>Sign Up</h5>

                     <section class="signup-form">
                        <!-- <h2>Sign Up</h2> -->
                        <form action="signup.inc.php" method="post" id="signupform">
                            <input type="text" name="name" placeholder="Full name..."><br> <br>
                            <input type="text" name="email" placeholder="Email.."><br> <br>
                            <input type="text" name="uid" placeholder="Username..."><br> <br>
                            <input type="password" name="pwd" placeholder="Password..."><br> <br>
                            <input type="password" name="pwdrepeat" placeholder="Repeat password..."><br> <br> <br>

                            <!-- <a href="signup.php" class="btn cta-btn">Submit</a> -->
                            <button type="submit" name="submit">Sign Up</button>
                        </form>
                        <?php
                            if(isset($_GET["error"])) {
                                if($_GET["error"] == "emptyinput" ) {
                                    echo "<p>Fill in all fields!</p>";
                                }

                                else if ($_GET["error"] == "invaliduid") {
                                    echo "<p>Choose a proper username!</p>";
                                }

                                else if ($_GET["error"] == "invalidemail") {
                                    echo "<p>Choose a proper email!</p>";
                                }

                                else if ($_GET["error"] == "passwordsdontmatch") {
                                    echo "<p>Passwords doesn't match!</p>";
                                }

                                else if ($_GET["error"] == "stmfailed") {
                                    echo "<p>Something went wrong, try again!</p>";
                                }

                                else if ($_GET["error"] == "usernametaken") {
                                    echo "<p>Username is already taken!</p>";
                                }

                                else if ($_GET["error"] == "none") {
                                    echo "<p>You have signed up!</p>";
                                }
                            }
                        ?>
                    </section>
                 </div>
             </div>
         </div>
     </section> 


    <!-- <section class="signup-form">
        <h2>Sign Up</h2>
        <input type="text" name="name" placeholder="Full name...">
        <input type="text" name="email" placeholder="Email..">
        <input type="text" name="uid" placeholder="Username...">
        <input type="text" name="password" placeholder="Password...">
        <input type="text" name="pwdrepeat" placeholder="Repeat password...">
        <form action="signup.inc.php" method="post">

        <a href="signup.php" class="btn cta-btn">Submit</a>

        </form>
    </section> -->


    <!-- FOOTER -->

    <!-- ERROR MESSAGES -->



    <footer>
        <div class="container">
            <div class="back-to-top">
                <a href="#hero"><i class="fas fa-chevron-up"></i></a>
            </div>
            <div class="footer-content">
                <div class="footer-content-about animate-top">
                    <h4>About Phoenix</h4>
                    <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                    <p>
                        Desi meniul nostru difera in functie de locatie si este conceput pentru a satisface pana orice placere culinara, 
privelistea incantantoare este aceeasi, indiferent de locatia pe care o aleget.
                    </p>
                </div>
                <div class="footer-content-devider animate-bottom">
                    <div class="social-media">

                        <h4>Follow Along</h4>
                        <ul class="social-icons">
                            <li>
                                <a href="https://www.facebook.com/ExtremeParkCernica"><i class="fab fa-facebook-square"></i></a>
                            </li>

                            <li>
                                <a href="https://www.facebook.com/PhoenixCernica/"><i class="fab fa-facebook-square"></i></a>
                            </li>

                            <li>
                                <a href="https://www.instagram.com/pheonixgreektaverna/"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="https://www.tripadvisor.com/Restaurant_Review-g3187894-d4272074-Reviews-Phoenix_Cernica_Club-Cernica_Ilfov_County_Southern_Romania.html"><i class="fab fa-tripadvisor"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="newsletter-container">
                        <h4>Newsletter</h4>
                        <form action="" class="newsletter-form">
                            <input type="text" class="newsletter-input" placeholder="Your email adress...">
                            <button class="newsletter-btn" type="submit">
                                <i class="fas fa-envelope"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>

 </body>
 </html>
