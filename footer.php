
  </div><!-- /#wrap -->

  <?php roots_footer_before(); ?>
  <footer id="content-info" class="<?php echo WRAP_CLASSES; ?>" role="contentinfo">
    <div class="footerbox gzwall">
      <?php roots_footer_inside(); ?>
      <?php dynamic_sidebar('sidebar-footer'); ?>
      <p class="copy">COPYRIGHT&copy; 2010-<?php echo date('Y'); ?> <?php bloginfo('name'); ?> ALL RIGHTS RESERVED.</p>
    </div>
  </footer>
  <?php roots_footer_after(); ?>

  <?php wp_footer(); ?>
  <?php roots_footer(); ?>


</body>
</html>