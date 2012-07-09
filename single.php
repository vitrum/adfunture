<?php
  $post = $wp_query->post;
  if (in_category('new')) {
      include(TEMPLATEPATH.'/single_new.php');
  } 
  else{
      include(TEMPLATEPATH.'/single_default.php');
  }
?>