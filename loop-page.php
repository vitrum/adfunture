<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
  <?php roots_post_before(); ?>
    <?php roots_post_inside_before(); ?>
      <div class="postbox gzwall gzwall-white">
        <div class="sglist">
          <div class="child-thumb">
            <?php 
             if ( has_post_thumbnail()) {
               $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
               echo '<a class="img" href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >';
               the_post_thumbnail('thumbnail');
               echo '</a>';
             }
            ?>
          </div>
          <div class="content">
            <a class="link" href="<?php the_permalink();?>"><?php the_title(); ?></a>
            <?php roots_entry_meta(); ?>
            <div class="sglistcontent"><?php the_excerpt(); ?></div>
          </div>
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