<?php get_header(); ?>
  <?php roots_content_before(); ?>
    <div class="instagramoutbox">
      <div id="content" class="<?php echo CONTAINER_CLASSES; ?>">
      <?php roots_main_before(); ?>
        <div id="main" class="<?php echo MAIN_CLASSES; ?>" role="main">
          <div class="postbox gzwall gzwall-white">
            <div class="page-header">
              <h1><?php _e('Search Results for', 'roots'); ?> <?php echo get_search_query(); ?></h1>
            </div>
          </div>
          <?php roots_loop_before(); ?>
          <?php get_template_part('loop', 'search'); ?>
          <?php roots_loop_after(); ?>
        </div><!-- /#main -->
      <?php roots_main_after(); ?>
      <?php roots_sidebar_before(); ?>
        <aside id="sidebar" class="<?php echo SIDEBAR_CLASSES; ?>" role="complementary">
        <?php roots_sidebar_inside_before(); ?>
          <?php get_sidebar(); ?>
        <?php roots_sidebar_inside_after(); ?>
        </aside><!-- /#sidebar -->
      <?php roots_sidebar_after(); ?>
      </div><!-- /#content -->
    </div><!-- /.instagramoutbox -->
  <?php roots_content_after(); ?>
<?php get_footer(); ?>