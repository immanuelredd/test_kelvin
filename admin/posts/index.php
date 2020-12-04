<?php require_once('../../app/config/config.php'); ?>
<?php define('TITLE', 'Admin Section - Manage Posts'); ?>
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
        <h1>Manage Post</h1>
        <table>
          <thead>
            <th>S/N</th>
            <th>Title</th>
            <th>Author</th>
            <th colspan="3">Action</th>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Red</td>
              <td>Love</td>
              <td><a href="" class="edit">edit</a></td>
              <td><a href="" class="delete">delete</a></td>
              <td><a href="" class="publish">Publish</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>
  <script src="<?php echo URLROOT; ?>/admin/public/js/admin.js"></script>
</body>

</html>