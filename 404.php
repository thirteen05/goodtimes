<?php get_header(); ?>




<div id="int-page-wrapper" data-stellar-background-ratio="0.8">

  <div class="jumbotron" id="int-page-jumbotron" style="min-height: 30vh; background-image: url(<?php echo get_template_directory_uri(); ?>/images/asfalt.png);">

    <div class="container">
    
      <h2 class="font-yellow text-shadow" id="int-page-title">
        Whoa! That page does not exist...
      </h2>
    
    </div>

  </div>


  <div class="container" id="int-page-content-wrapper">
    <div class="row">
      <div class="col-md-8" id="int-page-body">
        <h3 class="font-bevan">
          It seems that link was broken, or this page no longer exists. We apologize for the mess up!
        </h3>
      </div>
      
      <?php get_template_part('partials/brand-sidebar'); ?>
      
    </div>

  </div>

</div>

<?php get_footer(); ?>