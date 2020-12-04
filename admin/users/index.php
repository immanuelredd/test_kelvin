<?php require_once('../../app/config/config.php'); ?>
<?php define('TITLE', 'Admin Section - Manage Users'); ?>
<?php require_once(APPROOT . '/includes/admin_head_section.php'); ?>

</head>

<body>
  <div class="admin">
    <?php require_once(APPROOT . '/includes/admin_header.php'); ?>
    <?php require_once(APPROOT . '/includes/admin_nav.php'); ?>
    <main class="admin__main">
      <div class="button-group">
        <a href="<?php echo URLROOT; ?>/admin/users/create.php" class="abtn">Add User</a>
        <a href="<?php echo URLROOT; ?>/admin/posts/index.php" class="abtn">Manage Users</a>
      </div>
      <div class="content">
        <h1>Manage Users</h1>
        <table>
          <thead>
            <th>S/N</th>
            <th>Username</th>
            <th>Role</th>
            <th colspan="2">Action</th>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Red</td>
              <td>admin</td>
              <td><a href="" class="edit">edit</a></td>
              <td><a href="" class="delete">delete</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>
  <script src="<?php echo URLROOT; ?>/public/js/admin.js"></script>
</body>

</html>