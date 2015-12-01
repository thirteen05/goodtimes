  
<?php
  if(!is_home()):
    $navbar_class = 'navbar-dark';
  endif;
?>
<div id="mobile-nav-toggle">
  <i class="fa fa-bars fa-2x font-yellow"></i>
</div>

<?php

$mobile_nav_args = array(
	'theme_location'  => '',
	'menu'            => '',
	'container'       => 'div',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => 'menu',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 0,
	'walker'          => ''
);

?>




<div id="mobile-nav">
  <?php wp_nav_menu($mobile_nav_args); ?>
  <div id="mobile-nav-close">
    Close
  </div>
</div>

<nav class="navbar navbar-inverse navbar-fixed-top <?php echo $navbar_class; ?>" id="goodtimes-navbar" role="navigation">
  <?php 
    // Fix menu overlap bug..
    if ( is_admin_bar_showing() ) echo '<div style="min-height: 32px;"></div>'; 
  ?>
  
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/images/Good-Times-Logo.svg" width="200" />
      </a>
    </div>

      <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>

  </div>
</nav>