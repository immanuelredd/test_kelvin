<?php require_once('../../app/config/config.php'); ?>
<?php define('TITLE', 'Admin Section - Add Topic'); ?>
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
        <h1>Add Topic</h1>
        <?php include(APPROOT . '/helpers/formErrors.php'); ?>
        <form action="<?php echo URLROOT; ?>/admin/topics/create.php" method="post">
          <label for="name">Name</label>
          <input type="text" class="name" <?php echo $name; ?> name="name" />

          <label for="description">Description</label>
          <textarea name="description" <?php echo $description; ?> id="description"></textarea>

          <button type="submit" name="add_topic">Add Topic</button>
        </form>
      </div>
    </main>
  </div>
  <script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>
  <script src="<?php echo URLROOT; ?>/admin/public/js/script.js"></script>
  <script src="<?php echo URLROOT; ?>/admin/public/js/admin.js"></script>
</body>

</html>