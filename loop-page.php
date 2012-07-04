<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
  <?php roots_post_before(); ?>
    <?php roots_post_inside_before(); ?>
      <div class="postbox gzwall gzwall-white">
	      <div class="page-header">
	      	<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
          <?php roots_entry_meta(); ?>
	      </div>

          <?php the_content(); ?>
  	  </div>
      <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
    <?php roots_post_inside_after(); ?>
  <?php roots_post_after(); ?>
<?php endwhile; /* End loop */ ?>