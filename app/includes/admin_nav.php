<nav class="admin__nav">
    <ul class="menu">
        <?php if (isset($_SESSION['id']) && $_SESSION['admin']) : ?>
            <li class='menu__items dashboard'>
                <a class='menu__links' href='<?php echo URLROOT; ?>/admin/dashboard.php'>Dashboard</a>
            <?php endif; ?>
            </li>

            <?php
            foreach ($adminItems as $navItem) {
                echo "<li  class='menu__items'>
           <a class='menu__links' href='$url[url]$navItem[slug]'>$navItem[title]</a>
          </li>";
            }
            ?>
    </ul>
</nav>