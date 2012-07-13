<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
  <?php roots_post_before(); ?>
    <?php roots_post_inside_before(); ?>
      <div class="postbox gzwall gzwall-white">
        <div class="listfull">
        <?php
          if($post->post_parent)
          $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
          else
          $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
          if ($children) { ?>
          <ul>
          <?php echo $children; ?>
          </ul>
          <?php } ?>
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