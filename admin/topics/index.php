<?php require_once('../../app/config/config.php'); ?>
<?php define('TITLE', 'Admin Section - Manage Topics'); ?>
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
        <h1>Manage Topics</h1>

        <?php include(APPROOT . '/includes/messages.php') ?>

        <table>
          <thead>
            <th>S/N</th>
            <th>Title</th>
            <th colspan="2">Action</th>
          </thead>
          <tbody>
            <?php foreach ($topics as $key => $topic) : ?>
              <tr>
                <td><?php echo $key + 1; ?></td>
                <td><?php echo $topic['name']; ?></td>
                <td><a href="edit.php?id=<?php echo $topic['id']; ?>" class="edit">edit</a></td>
                <td><a href="index.php?del_id=<?php echo $topic['id']; ?>" class="delete">delete</a></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
  <script src="<?php echo URLROOT; ?>/public/js/admin.js"></script>
</body>

</html>