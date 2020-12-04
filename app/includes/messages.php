<?php if (isset($_SESSION['message'])) : ?>
    <div class="msg <?php echo $_SESSION['type']; ?>">
        <small><?php echo $_SESSION['message']; ?></small>
        <?php
        unset($_SESSION['message']);
        unset($_SESSION['type']);
        ?>
    </div>
<?php endif; ?>