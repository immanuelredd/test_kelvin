 <header class="admin__header">
     <div class="logo">
         <a href="<?php echo URLROOT; ?>/index.php">
             <img src="<?php echo URLROOT; ?>/public/images/KelvinAkparanta-Logo.png" alt="" class="logo__img" />
         </a>

     </div>

     <ul class="links">
         <?php if (isset($_SESSION['id'])) : ?>
             <li>
                 <a href="">Welcome<?php echo $_SESSION['username']; ?></a>
             </li>
         <?php else : ?>
             <li>
                 <a href="">Login</a>
             </li>
         <?php endif; ?>
     </ul>

     <div class="mobile">
         <div class="mobile__toggle"></div>
     </div>
 </header>