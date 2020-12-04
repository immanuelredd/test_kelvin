  <?php if (count($errors) > 0) : ?>
      <?php foreach ($errors as $error) : ?>
          <div>
              <small class="msg error"> <?php echo $error; ?></small>
          </div>
      <?php endforeach; ?>
  <?php endif; ?>