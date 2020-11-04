 <?php include("includes/array.php"); ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Home</title>
     <link rel="stylesheet" href="static/css/index.css">
 </head>

 <body>
     <div class="wrapper">
         <header>
             <div class="overlay">
                 <ul class="mobile_links" id="mobLinks"> <?php include("includes/nav.php"); ?> </ul>
                 </ul>
             </div>
             <nav>
                 <div class="log">
                     <a href="#">
                         <img src="/static/images/ka_logo2.png" alt="">
                     </a>
                 </div>
                 <div class="toggle">
                     <div class="toggle__harmburg"></div>
                 </div>
                 <ul class="links">
                     <?php include("includes/nav.php"); ?>
                 </ul>
             </nav>
             <main>
                 <h1> Kelvin Akparanta is a Nigerian business executive, Media Personality, Brand strategist, Arts
                     enthusiast, and Philanthropist with over 9 years of professional experience across industries.
                 </h1>
             </main>
         </header>
         <footer>
             <div class="footer-inner">
                 <ul class="foot__social_links">
                     <li>
                         <a href="https://web.facebook.com/kelvinkul001?_rdc=1&_rdr">
                             <img src="static/icons/facebook.png" alt="facebook" />
                         </a>
                     </li>
                     <li>
                         <a href="https://www.instagram.com/bigbrokelvin/">
                             <img src="static/icons/instagram.png" alt="instagram" />
                         </a>
                     </li>
                     <li>
                         <a href="https://www.linkedin.com/in/kelvin-akparanta-955299197">
                             <img src="static/icons/linkedin.png" alt="linkedin" />
                         </a>
                     </li>
                     <li>
                         <a href="https://twitter.com/Iamkelvinkul">
                             <img src="static/icons/twitter.png" alt="twitter" /></a>
                     </li>
                     <li>
                         <a href="https://www.youtube.com/results?search_query=kelvinakparanta">
                             <img src="static/icons/youtube.png" alt="youtube" />
                         </a>
                     </li>
                 </ul>

                 <div class="foot__copyright">
                     <p>
                         &copy; Copyright <?php echo date('Y'); ?>
                         Kelvin Akparanta All rights reserved.
                     </p>
                 </div>
             </div>

         </footer>
     </div>
     <script src="/static/js/custom.js"></script>
 </body>

 </html>