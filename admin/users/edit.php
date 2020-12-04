<?php require_once('../../app/config/config.php'); ?>
<?php define('TITLE', 'Admin Section - Edit User'); ?>
<?php require_once(APPROOT . '/includes/admin_head_section.php'); ?>

</head>

<body>
    <div class="admin">
        <?php require_once(APPROOT . '/includes/admin_header.php'); ?>
        <?php require_once(APPROOT . '/includes/admin_nav.php'); ?>
        <main class="admin__main">
            <div class="button-group">
                <a href="<?php echo URLROOT; ?>/admin/users/create.php" class="abtn">Add User</a>
                <a href="<?php echo URLROOT; ?>/admin/users/index.php" class="abtn">Manage Users</a>
            </div>
            <div class="content">
                <h1>Edit User</h1>
                <form action="" method="post">
                    <label for="username"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="username" id="username" value="" />

                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="email" id="email" value="" />

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" id="password" value="" />

                    <label for="psw-repeat"><b>Repeat Password</b></label>
                    <input type="password" placeholder="Repeat Password" name="rpassword" id="rpassword" />
                    <label for="role">Role</label>
                    <select name="roles" id="role">
                        <option value="author">Author</option>
                        <option value="admin">Admin</option>
                    </select>

                    <button type="submit">Update User</button>
                </form>
            </div>
        </main>
    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>
    <script src="<?php echo URLROOT; ?>/public/js/script.js"></script>
    <script src="<?php echo URLROOT; ?>/public/js/admin.js"></script>
</body>

</html>