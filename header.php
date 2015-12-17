<!doctype html>
<html class="no-js scroll-lock" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php wp_title(''); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bower_components/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bower_components/animate.css/animate.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/masterslider/style/masterslider.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/masterslider/skins/default/style.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/custom.css">
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/modernizr-2.8.3.min.js"></script>
      <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:700|Lato:400,300' rel='stylesheet' type='text/css'>
        
        <?php if(is_home()): ?>
        <meta title="Good Times Tobacco USA">
            <meta name="description" content="At Good Times Tobacco, we've been dedicated to quality and improving the smoking experience since 2008." >
        
        <?php endif; ?>
      
        
      <?php if(!is_category('4K')): ?>
      
        <script> //window.location.href = "/~dev/goodtimes/category/4k/"</script>
      
      <?php endif; ?>
      
      
      <script src='https://www.google.com/recaptcha/api.js'></script>
      
      <?php wp_head(); ?>
  </head>
  
    <body <?php body_class(); ?>>
      <!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-K5PQ74"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K5PQ74');</script>
<!-- End Google Tag Manager -->
      <div id="loading">
        <div id="spinner-wrapper">
          
          <img src="<?php echo get_template_directory_uri(); ?>/images/Good-Times-Logo.svg" width="200" />
          <i class="fa fa-spinner fa-3x font-yellow rotating"></i>
          
        </div>
      </div>
      
      <?php get_template_part('navbar'); ?>
      <?php get_template_part('age-verify'); ?>