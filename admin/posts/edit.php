<?php require_once('../../app/config/config.php'); ?>
<?php define('TITLE', 'Admin Section - Edit Post'); ?>
<?php require_once(APPROOT . '/includes/admin_head_section.php'); ?>

</head>

<body>
    <div class="admin">
        <?php require_once(APPROOT . '/includes/admin_header.php'); ?>
        <?php require_once(APPROOT . '/includes/admin_nav.php'); ?>
        <main class="admin__main">
            <div class="button-group">
                <a href="<?php echo URLROOT; ?>/admin/posts/create.php" class="abtn">Add Post</a>
                <a href="<?php echo URLROOT; ?>/admin/posts/index.php" class="abtn">Manage Post</a>
            </div>
            <div class="content">
                <h1>Edit Post</h1>
                <form action="" method="post">
                    <label for="title">title</label>
                    <input type="text" class="title" name="title" />

                    <label for="body">Body</label>
                    <textarea name="body" id="body"></textarea>

                    <label for="topic">topic</label>
                    <select name="topics" id="topic">
                        <option value="poetry">Poetry</option>
                        <option value="life">Love</option>
                        <option value="health">Wealth</option>
                    </select>

                    <label for="image">Image</label>
                    <input type="file" name="image" />

                    <button type="submit">Update post</button>
                </form>
            </div>
        </main>
    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>
    <script src="<?php echo URLROOT; ?>/admin/public/js/script.js"></script>
    <script src="<?php echo URLROOT; ?>/admin/public/js/admin.js"></script>
</body>

</html>