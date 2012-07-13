<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
  <?php roots_post_before(); ?>
    <?php roots_post_inside_before(); ?>
      <div class="postbox gzwall gzwall-white">
        <div class="listfull">
          <?php
          $child_pages = $wpdb->get_results("SELECT *    FROM $wpdb->posts WHERE post_parent = ".$post->ID."    AND post_type = 'page' ORDER BY menu_order", 'OBJECT');    ?>
          <?php if ( $child_pages ) : foreach ( $child_pages as $pageChild ) : setup_postdata( $pageChild ); ?>
          <div class="child-thumb">
           <a href="<?php echo  get_permalink($pageChild->ID); ?>" rel="bookmark" title="<?php echo $pageChild->post_title; ?>"><?php echo get_the_post_thumbnail($pageChild->ID, 'thumbnail'); ?><span class="title"><?php echo $pageChild->post_title; ?></span><span class=content""><?php the_content(); ?></span></a>
          </div>
          <?php endforeach; endif;
          ?>
        </div>
  	  </div>
      <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
    <?php roots_post_inside_after(); ?>
  <?php roots_post_after(); ?>
<?php endwhile; /* End loop */ ?>
<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if ($wp_query->max_num_pages > 1) { ?>
  <nav id="post-nav" class="pager">
    <div class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></div>
    <div class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></div>
  </nav>
<?php } ?>