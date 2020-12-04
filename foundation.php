<?php require_once('app/config/config.php'); ?>
<?php define('TITLE', 'Companies | Kelvin Akparanta'); ?>
<?php require_once(APPROOT . '/includes/head_section.php'); ?>
<link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/style.css">
</head>

<body>
    <div class="wrapper">
        <header class="foundation">
            <?php include(APPROOT . '/includes/header.php'); ?>
            <main class="foundation_main">
                <h1>
                    <span> Amber Kelvin Foundation </span> is a non-profit organization dedicated to his daughter, Amber Kelvin. It aims at improving the lives of less privileged children.
                </h1>
            </main>
        </header>
        <section class="content companies_content">
            <div class="companies">
                <div class="box">
                    <div class="box__logo">
                        <img src="<?php echo URLROOT; ?>/public/images/KelvinAkparanta-AmberKelvin.png" alt="">
                    </div>
                    <div class="box__card">
                        <h2>amber kelvin</h2>
                        <small>founder</small>
                        <a href="https://www.amberkelvinfoundation.com" id="btn">Visit Website</a>
                    </div>
                </div>
            </div>
        </section>
        <?php include(APPROOT . '/includes/footer.php'); ?>