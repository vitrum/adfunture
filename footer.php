
  </div><!-- /#wrap -->

  <?php roots_footer_before(); ?>
  <footer id="content-info" class="<?php echo WRAP_CLASSES; ?>" role="contentinfo">
    <?php roots_footer_inside(); ?>
    <?php dynamic_sidebar('sidebar-footer'); ?>
    <p class="copy"><small>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></small></p>
    <a data-toggle="modal" href="#myEditer" class="btn btn-primary btn-large">Launch demo modal</a>
<div class="modal hide fade" id="myEditer">
      <div class="modal-header">
      <a class="close" data-dismiss="modal">×</a>
      </div>
      <div class="modal-body">
      <p>请选择调试的接口…</p>
      </div>
    </div>
  </footer>
  <?php roots_footer_after(); ?>

  <?php wp_footer(); ?>
  <?php roots_footer(); ?>


</body>
</html>