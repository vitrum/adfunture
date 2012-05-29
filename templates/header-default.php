<header id="banner" role="banner">
  <?php roots_header_inside(); ?>
  <div class="<?php echo WRAP_CLASSES; ?>">
    <a class="brand" href="<?php echo home_url(); ?>/">
      <?php bloginfo('name'); ?>
    </a>
    <nav id="nav-main" role="navigation">
      <?php wp_nav_menu(array('theme_location' => 'primary_navigation')); ?>
    </nav>
  </div>
</header>