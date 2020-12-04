<?php require_once('../app/config/config.php'); ?>
<?php define('TITLE', 'login | Kelvin Akparanta'); ?>
<?php include(APPROOT . '/controller/users.php'); ?>
<?php require_once(APPROOT . '/includes/head_section.php'); ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/login.css">
</head>

<body>
    <form action="<?php echo URLROOT; ?>/users/login.php" method="post" class="login_form" name="form">
        <div class="image-item column">
            <div class="inner_image">
                <img src="<?php echo URLROOT; ?>/public/images/KelvinAkparanta-Logo.png" alt="Avatar" class="avatar">
            </div>
        </div>

        <div class="form-item column">
            <div class="inner_form">
                <h1>Login</h1>
                <p>Please fill in to signIn to you account</p>
                <hr>
                <?php include(APPROOT . '/helpers/formErrors.php'); ?>
                <div class="uname">
                    <label for="username"><b>Username</b></label><br>
                    <input type="text" placeholder="Enter Username" name="username" id="username" value="<?php echo $name; ?>">
                </div>
                <div class="psw">
                    <label for="password"><b>Password</b></label><br>
                    <input type="password" placeholder="Enter Password" name="password" id="password">
                </div>

                <button type="submit" name="login" value="Submit">Login</button>

                <div class="container">
                    <p>Don't have an Account ? <a href="<?php echo URLROOT; ?>/users/register.php">register</a>
                    </p>
                    <span class="fpsw">Forgot <a href="#">password ?</a></span>
                </div>

            </div>
        </div>
    </form>
    <script src="<?php echo URLROOT; ?>/public/js/validation.js"></script>
</body>

</html>