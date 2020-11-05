<?php define('TITLE', 'Companies | Kelvin Akparanta'); ?>
<?php define('PAGE', 'Books'); ?>
<?php require_once("config.php") ?>
<?php include(ROOT_PATH . "/includes/array.php"); ?>
<?php require_once(ROOT_PATH . '/includes/head_section.php');  ?>
<title><?php echo TITLE; ?></title>
<link rel="stylesheet" href="static/css/style.css">
</head>

<body>
    <div class="wrapper">
        <header class="foundation">
            <?php include(ROOT_PATH . "/includes/header.php"); ?>
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
                        <img src="static/images/amber_founder.png" alt="">
                    </div>
                    <div class="box__card">
                        <h2>amber kelvin</h2>
                        <small>founder</small>
                        <a href="https://www.amberkelvinfoundation.com" id="btn">Visit Website</a>
                    </div>
                </div>
            </div>
        </section>
        <?php include(ROOT_PATH . "/includes/footer.php") ?>