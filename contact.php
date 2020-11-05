<?php define('TITLE', 'Contact | Kelvin Akparanta'); ?>
<?php define('PAGE', 'Home'); ?>
<?php require_once("config.php"); ?>
<?php require_once(ROOT_PATH . '/includes/head_section.php');  ?>
<?php include(ROOT_PATH . '/includes/array.php'); ?>
<title><?php echo TITLE; ?></title>
<link rel="stylesheet" href="static/css/style.css">
</head>

<body>

    <div class="wrapper">
        <header class="header contact">
            <?php include(ROOT_PATH . '/includes/header.php'); ?>


            <main class="contact_main">
                <div>
                    <h1>
                        contact me
                    </h1>
                    <p>I will like to hear from you</p>
                </div>
            </main>



        </header>
        <section class="content contact_content">
            <div class="contain">
                <div class="form">
                    <form action="" class="form">
                        <label for="name">Your Name</label>
                        <input type="text" name="" id="name">

                        <label for="mail">Email</label>
                        <input type="email" name="" id="email">

                        <label for="subject">Subject</label>
                        <input type="text" name="" id="subject">

                        <label for="message">Your Message</label>
                        <textarea name="" id="message" cols="30" rows="10"></textarea>

                        <input type="button" value="send">
                    </form>
                </div>

                <div class="address">
                    <h2>Kelvin Akparanta</h2>
                    <ul>
                        <li> <span>Email:</span> kelvinakparanta1@gmail.com </li>
                        <li> <span>Address:</span> Activecode Business Hub E143 Road 3 Ikota Shopping Complex VGC Lekki Lagos, Nigeria. </li>
                    </ul>
                </div>


                <!-- <div class="social-media">
                    <div class="instagram">

                        <blockquote class="instagram-media" data-instgrm-version="7">
                            <a href="https://www.instagram.com/p/CEttQSEpOYu/"></a>
                        </blockquote>

                        <script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
                    </div>
                    <div class="twitter"></div>
                </div>-->
            </div>



        </section>
        <?php include(ROOT_PATH . '/includes/footer.php'); ?>