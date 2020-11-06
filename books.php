<?php define('TITLE', 'Books | Kelvin Akparanta'); ?>
<?php define('PAGE', 'Media'); ?>
<?php require_once("config.php") ?>
<?php include(ROOT_PATH . "/includes/array.php"); ?>
<?php require_once(ROOT_PATH . '/includes/head_section.php');  ?>
<title><?php echo TITLE; ?></title>
<link rel="stylesheet" href="static/css/style.css">
</head>

<body>
    <div class="wrapper">
        <header class="books">
            <?php include(ROOT_PATH . "/includes/header.php"); ?>
            <main class="books_main">
                <h1>
                    Resource Center
                </h1>
            </main>
        </header>
        <section class="content books_content">
            <div class="content_header">
                <h2>personal branding <br> & digital marketing</h2>
                <hr>
            </div>
            <div class="contain">
                <div class="book-image">
                    <img src="/static/images/ka_book.png" alt="">
                </div>
                <div class="book-text">
                    <p>
                        The perfect resource for beginner-to-advanced
                        profesionals and digital marketers looking to learn new skills or hone existing ones.
                    </p>
                    <br>
                    <p>
                        Personal Branding and Digitial Marketing is full of insights and strategy for business owners marketing professionals, students, and anyone else looking to hone their current skills and get up to speed on the latest in digital marketing.
                    </p>
                    <br>
                    <p>
                        Read it now to build or refine your digital marketing plan without
                        the false starts and missteps that come with doing it alone.
                    </p>
                    <br>
                    <div class="reference">
                        <p>
                            <span>genre: </span> Reference, Educative
                            <br>
                            <span>release:</span> 2020, december, 12
                            <br>
                            <span>language: </span> English
                            <br>
                            <span>length: </span> 323 pages
                            <br>
                            <span>publisher: </span> kelvin Akparanta
                        </p>
                    </div>

                </div>
            </div>
            <div class="buy">
                <div class="buy__one">
                    <a href="">buy on apple books</a>
                    <a href="">buy on okadabooks</a>
                    <a href="">buy on amazon</a>
                    <a href="">buy on smashwords</a>
                    <a href="">buy on lulu paperhack</a>
                </div>
                <div class="buy__two">

                    <a href="">buy on barne's & noble</a>
                    <a href="">buy on BOL</a>
                    <a href="">buy on booktopia</a>
                </div>
            </div>

        </section>
        <?php include(ROOT_PATH . "/includes/footer.php") ?>