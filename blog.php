<?php require_once('app/config/config.php'); ?>
<?php include(APPROOT . '/controller/topics.php'); ?>
<?php define('TITLE', 'Blog | Kelvin Akparanta'); ?>
<?php require_once(APPROOT . '/includes/head_section.php'); ?>
<link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/style.css">
</head>

<body>

    <div class="wrapper">
        <header class="blog">
            <?php include(APPROOT . '/includes/header.php'); ?>
            <?php include(APPROOT . '/includes/messages.php') ?>
            <main class="blog_main">
                <div class="text">
                    <h1>
                        kelvinkul and his activecode family at the #calabargopinkday 2020 origanised by pink africa foundation.
                    </h1>
                </div>
                <div class="login_register">
                    <?php if (isset($_SESSION['id'])) : ?>
                        <div class="header">
                            <h2>Welcome <?php echo $_SESSION['username']; ?></h2>
                        </div>
                        <div class="buttons">
                            <?php if (($_SESSION['admin'])) : ?>
                                <a href="<?php echo URLROOT; ?>/admin/dashboard.php">Dashboard</a>
                            <?php endif; ?>
                            <a href="<?php echo URLROOT; ?>/users/logout.php">Logout</a>
                        <?php else : ?>
                            <a href="<?php echo URLROOT; ?>/users/register.php">Register</a>
                            <a href="<?php echo URLROOT; ?>/users/login.php">Login</a>
                        </div>
                    <?php endif; ?>
                </div>
            </main>

        </header>
        <section class="content blog_content">
            <div class="blog_article">
                <div class="main_content">
                    <h2 class="recent_post_title">Recent Posts</h2>
                    <div class="blog_post">
                        <div class="inner">
                            <img src="<?php echo URLROOT; ?>/public/images/KelvinAkparanta (1).jpg" alt="" class="post_img">
                            <div class="post_preview">
                                <h3>
                                    <a href="#">Raving act, internationalboy and kelvinkul spotted at summer slam 2020, live in calabar</a>
                                </h3>
                                <div class="author_date">
                                    <i class="far fa-user">
                                        <span>Kelvin Akparanta</span>
                                    </i>
                                    <i class="far fa-calendar">
                                        <span><?php echo date("d M Y") ?></span>
                                    </i>
                                </div>
                                <p class="preview_text">
                                    the city of calabar stood up at the just concluded #summer-slam2020 rave. The whitehouse Lounge and De-sauce collaborative part saw d creme la cream in calabar trooping in their.
                                </p>
                                <a href="single.php" class="btn">Read More</a>
                            </div>

                        </div>
                        <div class="inner">
                            <img src="<?php echo URLROOT; ?>/public/images/KelvinAkparanta (1).jpg" alt="" class="post_img">
                            <div class="post_preview">
                                <h3>
                                    <a href="#">Raving act, internationalboy and kelvinkul spotted at summer slam 2020, live in calabar</a>
                                </h3>
                                <div class="author_date">
                                    <i class="far fa-user">
                                        <span>Kelvin Akparanta</span>
                                    </i>
                                    <i class="far fa-calendar">
                                        <span><?php echo date("d M Y") ?></span>
                                    </i>
                                </div>
                                <p class="preview_text">
                                    the city of calabar stood up at the just concluded #summer-slam2020 rave. The whitehouse Lounge and De-sauce collaborative part saw d creme la cream in calabar trooping in their.
                                </p>
                                <a href="single.php" class="btn">Read More</a>
                            </div>

                        </div>
                        <div class="inner">
                            <img src="<?php echo URLROOT; ?>/public/images/KelvinAkparanta (1).jpg" alt="" class="post_img">
                            <div class="post_preview">
                                <h3>
                                    <a href="#">Raving act, internationalboy and kelvinkul spotted at summer slam 2020, live in calabar</a>
                                </h3>
                                <div class="author_date">
                                    <i class="far fa-user">
                                        <span>Kelvin Akparanta</span>
                                    </i>
                                    <i class="far fa-calendar">
                                        <span><?php echo date("d M Y") ?></span>
                                    </i>
                                </div>
                                <p class="preview_text">
                                    the city of calabar stood up at the just concluded #summer-slam2020 rave. The whitehouse Lounge and De-sauce collaborative part saw d creme la cream in calabar trooping in their.
                                </p>
                                <a href="single.php" class="btn">Read More</a>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="side-bar">
                    <div class="search section">
                        <h2 class="search_title">Search</h2>
                        <form action="blog.php" method="post" class="search">
                            <input type="text" class="search-input" placeholder="Search for Post">
                        </form>
                    </div>
                    <div class="topic section">
                        <h2 class="topic_title">Topics</h2>
                        <div class="topics">
                            <select name="topics" id="topics">
                                <option value="0" class="select_title"><strong>Choose A Topic</strong> :</option>
                                <?php foreach ($topics as $key => $topic) : ?>
                                    <option value="<?php echo $key + 1; ?>">
                                        <?php echo $topic['name']; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <?php include(APPROOT . '/includes/footer.php'); ?>