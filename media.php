 <?php define('TITLE', 'Media | Kelvin Akparanta'); ?>
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
                 <p>Memories last forever</p>
                 <h1>
                     Gallery
                 </h1>
             </main>
         </header>
         <section class="content media_content">
             <div class="image-gallery">
                 <div class="box"></div>
                 <div class="box"></div>
                 <div class="box"></div>
                 <div class="box"></div>
                 <div class="box"></div>
                 <div class="box"></div>
                 <div class="box"></div>
                 <div class="box"></div>
             </div>
         </section>
         <?php include(ROOT_PATH . "/includes/footer.php"); ?>