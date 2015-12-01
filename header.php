<!doctype html>
<html class="no-js scroll-lock" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
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
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/modernizr-2.8.3.min.js"></script>
      
        
      <?php if(!is_category('4K')): ?>
      
        <script> //window.location.href = "/~dev/goodtimes/category/4k/"</script>
      
      <?php endif; ?>
      
      
      <?php wp_head(); ?>
  </head>
  
    <body <?php body_class(); ?>>
      
      <div id="loading">
        <div id="spinner-wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/images/Good-Times-Logo.svg" width="200" />
          <i class="fa fa-spinner fa-3x font-yellow rotating"></i>
        </div>
      </div>
      
      <?php get_template_part('navbar'); ?>
      <?php get_template_part('age-verify'); ?>