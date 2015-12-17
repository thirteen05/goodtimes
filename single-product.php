<?php get_header(); ?>

<section id="section-single-product">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        
        <img src="<?php echo get_category_logo(); ?>" />
        <?php the_post_thumbnail(); ?>
        
      </div>
      <div class="col-md-6">
        
        <h1 id="single-product-title"><?php the_title(); ?></h1>
        
        <?php if(rwmb_meta('brand_description')): ?>
                                  
          <h4>Description</h4>
          <p><?php echo rwmb_meta('brand_description'); ?></p>

        <?php endif; ?>

        <?php if(rwmb_meta('flavor_profile')): ?>

          <h4>Flavor Profile</h4>
          <p><?php echo rwmb_meta('flavor_profile'); ?></p>

        <?php endif; ?>

        <?php if(rwmb_meta('product_type')): ?>
                                  
          <h4>Product Type</h4>
          <p><?php echo get_product_type(); ?></p>

        <?php endif; ?>

        <?php if(rwmb_meta('ring_gauge')): ?>

          <h4>Ring Gauge</h4>
          <p><?php echo get_ring_gauge(); ?></p>

        <?php endif; ?>

        <?php if(rwmb_meta('single_product_qty')): ?>

          <h4>Single Product Count</h4>
          <p><?php echo get_single_unit_qty(); ?></p>

        <?php endif; ?>
      
    </div>
  </div>
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <a href="<?php echo get_single_product_cat_link(); ?>">
          <button id="btn-similar-products" class="btn btn-primary btn-lg btn-block">View Similar Products</button>
        </a>
      </div>
    </div>
</section>

<?php get_footer(); ?>