<header id="topbrandbanner" class="navbar" role="banner">
	<?php roots_header_inside(); ?>
	<div class="topheader ">
		<?php roots_header_inside(); ?>
	  <?php dynamic_sidebar('Header Top Sidebar'); ?>
	</div>
</header>
<div class="gzline"></div>
<div class="topsliderbanner">
  <?php dynamic_sidebar('Header banner Sidebar'); ?>
</div>
<div class="gzline"></div>
<div class="toplogobanner gzwall">
  <div class="toplogosbox">
    <?php dynamic_sidebar('Header logo Sidebar'); ?>
  </div>
  <div class="toptoolsbox">
  	<div class="links">
  	  <ul>
        <li><?php dynamic_sidebar('Top tools Sidebar'); ?></li>
  	  	<li><a href="/feeds" class="gz_btn gz_btn_black">RSS</a></li>
  	  </ul>
      <div class="clearfix"></div>
  	</div>
  	<div class="searchbox">
  		<form action="/" class="form-search " id="searchform" method="get" role="search">
		  <input type="text" placeholder="Search" class="search-query" id="s" name="s" value="">
		  <input type="submit" class="btn" value="Search" id="searchsubmit">
		</form>
  	</div>
  </div>
</div>