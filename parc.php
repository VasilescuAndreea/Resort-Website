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
     <link rel="stylesheet" href="parc.css">
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
                         <a href="index.php" class="nav-link ">Home</a>
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
                        <a href="parc.php" class="nav-link active">Aventura</a>
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
                     <h5>Adventure</h5>
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
                        Extreme Park Cernica is the ideal destination if you are looking for a fun and diverse adventure park. It is located within the Phoenix Cernica Complex, just 15 km outside of Bucharest, surrounded by the Cernica Forest.
                        Extreme Park Cernica will help you escape the confinements of your daily stress and monotony.
                        We offer you a wide range of unique adventures, carried out in complete safety. Our goal is to create unique, memorable and rewarding experiences, designed with passion and energy by our team of professionals, to open your appetite for adventure. The adrenaline rush given by the park’s adventure courses, the peace and freshness of nature are the perfect ingredients for a special weekend.
                     </p>
                     <a href="#" class="btn body-btn">About us</a>
                 </div>
                 <div class="complex-info-img animate-right">
                     <img src="parcdrona.jpeg" alt="">
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
                    <span class="first-letter">F</span>orest adventure
                    </h2>
                </div>
                <div class="animate-bottom">
                    <h1 class="headline headline-dark"> </h1>
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
                    <img src="extremeapus.jpg" alt="">
                    <img src="extremeparkk.jpg" alt="">
                    <img src="extremeparkkk.jpg" alt="">
                    <img src="extremediscover.jpeg" alt="">
                </div>
                <div class="restaurant-description animate-right">
                    <div class="global-headline">
                        <h2 class="sub-headline">
                            <span class="first-letter">D</span>iscover
                        </h2>
                        <h1 class="headline headline-dark">Activities</h1>
                        <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                     </div>
                     <p>Zip-lining
                        Archery
                        Sport Fishing
                        Picnic area
                        Paintball
                        Kids’ Playground
                        9 Forest adventure courses:
                        2 yellow trails for children over 6 years and adults;
                        1 orange route for children over 8 years and adults;
                        3 green trails up to 4 meters high for children over 8-10 years and adults;
                        2 blue routes with a height of 6-7 m, for children over 10-14 years and adults;
                        One red route, requiring a good physical condition and a lot of energy, for those over 16 years;

                     </p>
                     <!-- AICI O SA PUN MENIUL/ LISTA DE PRETURI PT PARC -->
                    <a href="Preturi_Parc.pdf" class="btn body-btn">Price List</a>
                    <br><br><br><br><br><br>
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
                           <span class="first-letter">A</span>dventure
                       </h2>
                       <h1 class="headline headline-dark">& fun</h1>
                       <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                    </div>
                    <p>
                        Whether you choose an outing with your family or friends, Extreme Park Cernica is one of the most exciting entertainment areas within the surroundings of Bucharest. It offers a unique and magical experience, with activities for all ages, in a wonderful setting for a day full of adventures.
The park is also the ideal location for corporate events such as team buildings for companies. The wide range of activities available can be personalized according to the needs and requirements of the group, considering the available budget .


                    </p>
                    <a href="login.php" class="btn body-btn">Make a reservation</a>
                </div>
                <div class="image-group ">
                    <img class="animate-top" src="extremetiroliana.jpg" alt="">
                    <img class="animate-bottom" src="tiroliana2.jpg" alt="">
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
                    <p>PHOENIX CERNICA COMPLEX - STR. STRANDULUI, CERNICA, PANTELIMON, 077145 / +4 0731 131 131 / contact@extremepark.ro</p>
                    <p></p>
                    <p>Availability of reservations is as follows:</p>
                    <p>Monday to Friday from 12:00 - 24:00, on weekends or on days with legal holidays only until 12:00</p>
                    <p>Extreme Park Cernica recommends that all reservations be made at least 24 hours before arrival. All reservations are confirmed by phone or email by the park team.</p>
                    <p>* Depending on the availability of the park, Extreme Park Cernica reserves the right to refuse potential requests.</p>
                </div>
                <div class="footer-content-devider animate-bottom">
                    <div class="social-media">

                        <h4>Follow Along</h4>
                        <ul class="social-icons">
                            <li>
                                <a href="https://www.facebook.com/ExtremeParkCernica"><i class="fab fa-facebook-square"></i></a>
                            </li>

                            <li>
                                <a href="https://www.instagram.com/extremeparkcernica/"><i class="fab fa-instagram"></i></a>
                            </li>

                            <li>
                                <a href="https://www.tripadvisor.com/Attraction_Review-g7890669-d7942548-Reviews-Extreme_Park_Cernica-Pantelimon_Ilfov_County_Southern_Romania.html"><i class="fab fa-tripadvisor"></i></a>
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
    <?php
  echo "<script type='text/javascript' src='main.js'></script>"
  ?>
 </body>
 </html>
