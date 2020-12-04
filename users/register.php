<?php require_once('../app/config/config.php'); ?>
<?php define('TITLE', 'Register | Kelvin Akparanta'); ?>
<?php include(APPROOT . '/controller/users.php'); ?>
<?php require_once(APPROOT . '/includes/head_section.php'); ?>


<link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/login.css">
</head>

<body>
    <form action="<?php echo URLROOT; ?>/users/register.php" method="post" class="register_form" name="form">
        <div class="image-item column">
            <div class="inner_image">
                <img src="<?php echo URLROOT; ?>/public/images/KelvinAkparanta-Logo.png" alt="Avatar" class="avatar">
            </div>
        </div>
        <div class="form-item column">
            <div class="inner_form">
                <h1>Register</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>
                <?php include(APPROOT . '/helpers/formErrors.php'); ?>
                <div class="uname">
                    <label for="username"><b>Username</b></label><br>
                    <input type="text" placeholder="Enter Username" name="username" id="username" value="<?php echo $name; ?>">
                    <small class="error" id="unerror">
                    </small>
                </div>
                <div class="email">
                    <label for="email"><b>Email</b></label><br>
                    <input type="text" placeholder="Enter Email" name="email" id="email" value="<?php echo $mail; ?>">
                    <small class="error" id="emerror"></small>
                </div>

                <div class="psw">
                    <label for="psw"><b>Password</b></label><br>
                    <input type="password" placeholder="Enter Password" name="password" id="password" value="<?php echo $pass; ?>">
                    <small class="error" id="pserror"></small>
                </div>

                <div class="rpassword">
                    <label for="psw-repeat"><b>Repeat Password</b></label><br>
                    <input type="password" placeholder="Repeat Password" name="rpassword" id="rpassword">
                    <small class="error" id="rperror"></small>
                </div>

                <hr>
                <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

                <button type="submit" name="register" value="Submit">Register</button>

                <div class="container signin">
                    <p>Already have an account ? <a href="<?php echo URLROOT; ?>/users/login.php">Sign in</a>.</p>
                </div>
            </div>
        </div>

    </form>
    <script src="<?php echo URLROOT; ?>/public/js/validation.js"></script>
</body>

</html>