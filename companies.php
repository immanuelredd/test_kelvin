<?php require_once('app/config/config.php'); ?>
<?php define('TITLE', 'Companies | Kelvin Akparanta'); ?>
<?php require_once(APPROOT . '/includes/head_section.php'); ?>
<link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/style.css">
</head>

<body>
    <div class="wrapper">
        <header class="business">
            <?php include(APPROOT . '/includes/header.php'); ?>
            <main class="business_main">
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
                        <img src="<?php echo URLROOT; ?>/public/images/KelvinAkparanta-box411.png" alt="">
                    </div>
                    <div class="box__card">
                        <h2>Box411</h2>
                        <small>Executive Director</small>
                        <a href="https://box411.com.ng/" id="btn">Visit Website</a>
                    </div>
                </div>
                <div class="active">
                    <div class="active__logo">
                        <img src="<?php echo URLROOT; ?>/public/images/KelvinAkparanta-ActiveCode.png" alt="">
                    </div>
                    <div class="active__card">
                        <h2>activecode</h2>
                        <small>Director/CMO</small>
                        <a href="https://activecodehub.com/" id="btn">Visit Website</a>
                    </div>
                </div>
            </div>
        </section>
        <?php include(APPROOT . '/includes/footer.php'); ?>