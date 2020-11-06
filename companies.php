<?php define('TITLE', 'Companies | Kelvin Akparanta'); ?>
<?php define('PAGE', 'Blog'); ?>
<?php require_once("config.php") ?>
<?php include(ROOT_PATH . "/includes/array.php"); ?>
<?php require_once(ROOT_PATH . '/includes/head_section.php');  ?>
<title><?php echo TITLE; ?></title>
<link rel="stylesheet" href="static/css/style.css">
</head>

<body>
    <div class="wrapper">
        <header class="business">
            <?php include(ROOT_PATH . "/includes/header.php"); ?>
            <main class="kelvin_main">
                <h1>
                    in 2015, he started Box411, where he currently provides strategic leadership as the executive
                    director of africa's aspiring no1 agency in branding and digigtal marketing operation in nigeria.
                </h1>
            </main>
        </header>
        <section class="content companies_content">
            <div class="companies">
                <div class="box">
                    <div class="box__logo">
                        <img src="/static/images/box411.png" alt="">
                    </div>
                    <div class="box__card">
                        <h2>Box411</h2>
                        <small>Executive Director</small>
                        <a href="https://box411.com.ng/" id="btn">Visit Website</a>
                    </div>
                </div>
                <div class="active">
                    <div class="active__logo">
                        <img src="/static/images/ac.png" alt="">
                    </div>
                    <div class="active__card">
                        <h2>activecode</h2>
                        <small>Director/CMO</small>
                        <a href="https://activecodehub.com/" id="btn">Visit Website</a>
                    </div>
                </div>
            </div>
        </section>
        <?php include(ROOT_PATH . "/includes/footer.php") ?>