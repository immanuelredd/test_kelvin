 <?php define('TITLE', 'Media | Kelvin Akparanta'); ?>
 <?php define('PAGE', 'Contact'); ?>
 <?php require_once("config.php") ?>
 <?php include(ROOT_PATH . "/includes/array.php"); ?>
 <?php require_once(ROOT_PATH . '/includes/head_section.php');  ?>
 <title><?php echo TITLE; ?></title>
 <link rel="stylesheet" href="static/css/style.css">
 </head>

 <body>
     <div class="wrapper">
         <header class="media">
             <?php include(ROOT_PATH . "/includes/header.php"); ?>
             <main class="gallery_main">
                 <div>
                     <p>Memories last forever</p>
                     <h1>
                         Gallery
                     </h1>
                 </div>
             </main>
         </header>
         <section class="content media_content">
             <div class="gallery">
                 <figure class="gallery__item gallery__item--1">
                     <img src="/static/images/amber_ka.jpg" alt="">
                 </figure>
                 <figure class="gallery__item gallery__item--2">
                     <img src="/static/images/box2.jpg" alt="">
                 </figure>
                 <figure class="gallery__item gallery__item--3">
                     <img src="/static/images/box3.jpg" alt="">
                 </figure>
                 <figure class="gallery__item gallery__item--4">
                     <img src="/static/images/book_ka.jpg" alt="">
                 </figure>
                 <figure class="gallery__item gallery__item--5">
                     <img src="/static/images/box5.jpg" alt="">
                 </figure>
                 <figure class="gallery__item gallery__item--6">
                     <img src="/static/images/box6.jpg" alt="">
                 </figure>
                 <figure class="gallery__item gallery__item--7">
                     <img src="/static/images/box7.jpg" alt="">
                 </figure>
                 <figure class="gallery__item gallery__item--8">
                     <img src="/static/images/box8.jpg" alt="">
                 </figure>
                 <figure class="gallery__item gallery__item--9">
                     <img src="/static/images/home_ka.jpg" alt="">
                 </figure>
                 <figure class="gallery__item gallery__item--10">
                     <img src="/static/images/blog.jpeg" alt="">
                 </figure>
                 <figure class="gallery__item gallery__item--11">
                     <img src="/static/images/company_ka.jpg" alt="">
                 </figure>
                 <figure class="gallery__item gallery__item--12">
                     <img src="/static/images/contact_ka.jpg" alt="">
                 </figure>
             </div>
         </section>
         <?php include(ROOT_PATH . "/includes/footer.php"); ?>