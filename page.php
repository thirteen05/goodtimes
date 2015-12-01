<?php get_header(); ?>

<?php if( have_posts() ): ?>

  <?php while(have_posts()): ?>

    <?php the_post(); ?>



<?php
  $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>




<div id="int-page-wrapper" data-stellar-background-ratio="0.8">

  <div class="jumbotron" id="int-page-jumbotron" style="min-height: 30vh; background-image: url(<?php echo $feat_image; ?>);">

    <div class="container">
    
      <h1 class="font-yellow text-shadow" id="int-page-title"><?php the_title(); ?></h1>
    
    </div>

  </div>


  <div class="container" id="int-page-content-wrapper">
    <div class="row">
      <div class="col-md-8" id="int-page-body">
        <?php the_content(); ?>
      </div>
      
      
      <?php get_template_part('partials/brand-sidebar'); ?>
      
      
    </div>

  </div>

</div>


  <?php endwhile; ?>

<?php endif; ?>




<?php get_footer(); ?>