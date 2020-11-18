<?php
    session_start();
?>
<!doctype html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Phoenix Cernica Club</title>
     <!-- Font CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
     <!-- Scroll CDN -->
     <script src="https://unpkg.com/scrollreveal"></script>
     <link rel="stylesheet" href="restaurant.css">
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
                         <a href="restaurant.php" class="nav-link active">Restaurant</a>
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

                    <li class="nav-item">
                        <a href="login.php" class="nav-link">Rezervari</a>
                    </li>
             </nav>
        </div>
     </header>
     <!-- Header Ends -->
     
     <!-- To go on top of the page -->

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
                     <h5>Dining</h5>
                     <!-- Multipple Buttons that share the same sty;e -->
                     <a href="#" class="btn cta-btn">Explore</a>
                 </div>
             </div>
         </div>
     </section>
     <!-- Hero Ends -->
     <!-- First Scroll to DISCOVER SECTION -->
     <section class="discover-our-story">
         <div class="container">
             <div class="complex-info">
                 <div class="complex-description padding-right animate-left">
                     <div class="global-headline">
                        <h2 class="sub-headline">
                            <span class="first-letter">D</span>iscover
                        </h2>
                        <h1 class="headline headline-dark">Our Story </h1>
                        <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                     </div>
                     <p>
                     Restaurantul Phoenix Cernica își îmbie oaspeții cu o selecție de preparate din bucătăria românească, pregătite din ingrediente autohtone, proaspete și gustoase. Meniul generos este conceput pentru a satisface si cele mai rafinate gusturi si a raspunde nevoilor nutritionale ale oaspeților indiferent de dieta pe care o urmeaza.
                     </p>
                     <a href="#" class="btn body-btn">About us</a>
                 </div>
                 <div class="complex-info-img animate-right">
                     <img src="phoenixnight1.jpg" alt="">
                 </div>
             </div>
         </div>
     </section>
     <!-- DISCOVER OUR STORY ENDS -->
     <!-- pana aici am pus pe toate paginile -->

    <section class="tasteful-recipes between">
        <div class="container">
            <div class="global-headline">
                <div class="animate-top">
                    <h2 class="sub-headline">
                    <span class="first-letter">L</span>ocations
                    </h2>
                </div>
                <div class="animate-bottom">
                    <h1 class="headline headline-dark">*****</h1>
                </div>
             </div>
        </div>
    </section>
    <!-- TASTEFUL RECIPES ENDS -->
    <!-- vreau sa pun si un buton pe care sa apas sa ma duca la un pdf, cum fac asta? -->

    <sction class="discover-our-menu">
        <div class="container">
            <div class="complex-info">
                <div class="image-group padding-right animate-left">
                    <img src="restaurant1.jpeg" alt="">
                    <img src="restaurant2.jpeg" alt="">
                    <img src="restaurant3.jpeg" alt="">
                    <img src="restaurant.jpeg" alt="">
                </div>
                <div class="restaurant-description animate-right">
                    <div class="global-headline">
                        <h2 class="sub-headline">
                            <span class="first-letter">D</span>iscover
                        </h2>
                        <h1 class="headline headline-dark">Our Locations</h1>
                        <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                     </div>
                     <p>
                    <br>Bucătarie: Romanească<br>
                    <br>Potrivit pentru: Mic-dejun / Pranz / Cina / Evenimente Private<br>
                    <br>Program: Luni-Duminică 11:00 – 22:00<br><br><br><br><br>
                     </p>
                     <!-- AICI O SA PUN MENIUL/ LISTA DE PRETURI PT PARC -->
                    <a href="meniuphoenix.pdf" class="btn body-btn">View the full menu</a>
                    <br><br>
                </div>
            </div>
        </div>
    </sction>

    <!-- Discover our menu ends -->

    <section class="perfect-blend between">
        <div class="container">
            <div class="global-headline">
                <div class="animate-top">
                    <h2 class="sub-headline">
                    <span class="first-letter">I</span>n the middle of
                    </h2>
                </div>
                <div class="animate-bottom">
                    <h1 class="headline headline-dark">nature</h1>
                </div>
             </div>
        </div>
    </section>
<!-- perfect blend ends -->
    <section class="culinary-delight">
        <div class="container">
            <div class="complex-info">
                <div class="complex-description padding-right animate-left">
                    <div class="global-headline">
                       <h2 class="sub-headline">
                           <span class="first-letter">G</span>ood food
                       </h2>
                       <h1 class="headline headline-dark">& good mood </h1>
                       <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                    </div>
                    <p>
                        Desi meniul nostru difera in functie de locatie si este conceput pentru a satisface pana orice placere culinara, 
                    privelistea incantantoare este aceeasi, indiferent de locatia pe care o alegeti.
                    </p>
                    <a href="login.php" class="btn body-btn">Make a reservation</a>
                </div>
                <div class="image-group ">
                    <img class="animate-top" src="mancarephoenix2.jpeg" alt="">
                    <img class="animate-bottom" src="mancarephoenix3.jpeg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- culinary delights ends -->
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
                    <br>PHOENIX CERNICA COMPLEX- Str. STRANDULUI, CERNICA, PANTELIMON, 077145
                        0720.001.440 / 0720.001.449 / 0724.001.441  office@phoenixcernica.ro<br><br>
                    <!-- Potrivit pentru: Mic-dejun / Pranz / Cina / Evenimente Private<br>

                    Program: Luni-Duminică 11:00 – 22:00 -->
                    
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
 <script src="main.js"></script>
 </body>
 </html>
