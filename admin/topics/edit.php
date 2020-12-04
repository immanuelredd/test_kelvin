<?php require_once('../../app/config/config.php'); ?>
<?php define('TITLE', 'Admin Section - Edit Topic'); ?>
<?php include(APPROOT . '/controller/topics.php'); ?>
<?php require_once(APPROOT . '/includes/admin_head_section.php'); ?>

</head>

<body>
    <div class="admin">
        <?php require_once(APPROOT . '/includes/admin_header.php'); ?>
        <?php require_once(APPROOT . '/includes/admin_nav.php'); ?>
        <main class="admin__main">
            <div class="button-group">
                <a href="<?php echo URLROOT; ?>/admin/topics/create.php" class="abtn">Add Topic</a>
                <a href="<?php echo URLROOT; ?>/admin/topics/index.php" class="abtn">Manage Topics</a>
            </div>
            <div class="content">
                <h1>Edit Topic</h1>
                <?php include(APPROOT . '/helpers/formErrors.php'); ?>
                <form action="" method="post">
                    <input type="hidden" value="<?php echo $id; ?>" name="id" />
                    <label for="name">Name</label>
                    <input type="text" class="name" value="<?php echo $name; ?>" name="name" />

                    <label for="description">Description</label>
                    <textarea name="description" value="<?php echo $description; ?>" id="description"></textarea>

                    <button type="submit" name="update_topic">Update Topic</button>
                </form>
            </div>
        </main>
    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>
    <script src="<?php echo URLROOT; ?>/admin/public/js/script.js"></script>
    <script src="<?php echo URLROOT; ?>/admin/public/js/admin.js"></script>
</body>

</html>