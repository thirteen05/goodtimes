<section id="section-category-top">
  <div class="container">
    <div class="row">
      
      <div class="col-md-12 hidden-md hidden-lg" style="padding-top: 75px;">
        <select id="brand-category-select" class="form-control">
          <option value="select" selected>View by Brand...</option>
          <option value="good-times">Good Times</option>
          <option value="4k">4K's</option>
          <option value="hd">#HD</option>
          <option value="flat-wrap">Flat Wrap</option>
          <option value="little-wild">Little & Wild</option>
          <option value="double-7">Double 7's</option>
          <option value="sweet-woods">Sweet Woods</option>
          <option value="remington">Remington</option>
        </select>
      </div>
      
      <div class="col-md-10 col-md-offset-1">

          <div class="text-center hidden-xs">
            <?php get_template_part('partials/category-brand-select'); ?>
          </div>
        
        <?php $cat_name = single_cat_title('',false); ?>
        
        <?php $args = array(
            'posts_per_page'   => -1,
            'offset'           => 0,
            'category'         => '',
            'category_name'    => $cat_name,
            'orderby'          => 'date',
            'order'            => 'DESC',
            'include'          => '',
            'exclude'          => '',
            'meta_key'         => '',
            'meta_value'       => '',
            'post_type'        => 'product',
            'post_mime_type'   => '',
            'post_parent'      => '',
            'author'	   => '',
            'post_status'      => 'publish',
            'suppress_filters' => true 
        );
        $posts_array = get_posts( $args ); ?>
        
          		<!-- template -->
		<div class="ms-staff-carousel">
			<!-- masterslider -->
			<div class="master-slider" id="masterslider">
              
              <?php $slide_count = 0; ?>
              
              <?php foreach($posts_array as $post): ?>
              
              <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
              
              <?php $slide_count++; ?>
              
			    <div class="ms-slide" data-slide-number="<?php echo $slide_count; ?>">
			        <img data-toggle="modal" data-target="#myModal" src="../masterslider/style/blank.gif" data-src="<?php echo $image[0]; ?>" alt="lorem ipsum dolor sit"/>  
			        <div class="ms-info">
                      <h3 class="product-title"><?php echo $post->post_title; ?></h3>
                      
                      <?php if(rwmb_meta('flavor_profile')): ?>
                        <p><?php echo rwmb_meta('flavor_profile'); ?></p>
                      <?php endif; ?>
                      
                        <table class="table hidden-sm hidden-md hidden-lg" id="mobile-product-table">
                          <tbody>
                            
                            <tr>
                              <td class="table-left">Product Type:</td>
                              <td><?php echo get_product_type(); ?></td>
                            </tr>
                            
                            <tr>
                              <td class="table-left">Description:</td>
                              <td><?php echo rwmb_meta('brand_description'); ?></td>
                            </tr>
                            
                              <?php if(rwmb_meta('ring_gauge')): ?>
                                <tr>
                                  <td class="table-left">Ring Gauge:</td>
                                  <td><?php echo get_ring_gauge(); ?></td>
                                </tr>
                            <?php endif; ?>
                            
                          </tbody>
                        </table>
			        </div>     
                    <!-- Button trigger modal -->
			    </div>
              
              
              <?php endforeach; ?>
              
			</div>
			<!-- end of masterslider -->
			<div class="ms-staff-info" id="staff-info"> </div>
		</div>
		<!-- end of template -->

        <!-- Modal -->
        <div class="modal modal-lg fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header text-center">
              
                <img width="200" src="<?php echo get_category_logo_modal(); ?>" />
                <img width="40" type="button" data-dismiss="modal" aria-label="Close" src="<?php echo get_template_directory_uri(); ?>/images/Modal-Close-Button.svg" style="position: absolute; top: 15px; right: 15px; cursor: pointer" />
              
              </div>
              <div class="modal-body">
                
                  <!-- template -->
                  <div class="ms-tabs-template">
                      <!-- masterslider -->
                      <div class="master-slider ms-skin-black-1" id="masterslider2">

                        <?php foreach($posts_array as $post): ?>

                        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

                          <div class="ms-slide">
                            <div class="container-fluid">
                              <div class="row">
                                <div class="col-md-4 text-center">
                                  <img class="slider-pouch-image" src="<?php echo $image[0]; ?>" />
                                </div>
                                <div class="col-md-4">
                                  
                                  <?php if(rwmb_meta('brand_description')): ?>
                                  
                                  <h4>Description</h4>
                                  <p><?php echo rwmb_meta('brand_description'); ?></p>
                                  
                                  <?php endif; ?>
                                  
                                  
                                  <?php if(rwmb_meta('flavor_profile')): ?>
                                  
                                  <h4>Flavor Profile</h4>
                                  <p><?php echo rwmb_meta('flavor_profile'); ?></p>
                                  
                                  <?php endif; ?>
                                  
                                  
                                </div>
                                <div class="col-md-4">
                                  
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
                            </div>
                              <div class="ms-thumb text-center">
                                  <img src="<?php echo $image[0]; ?>" />
                              </div>

                          </div>

                        <?php endforeach; ?>

                      </div>
                      <!-- end of masterslider -->
                    </div>
                    <!-- end of template -->     
                  <!--<div style="clear:both;">&nbsp;</div>      -->
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center" style="padding-bottom: 80px;">
        <h4 class="font-bevan font-white text-shadow">Web Design by <a class="font-yellow" href="http://www.thirteen05.com" target="_blank">thirteen05 creative</a></h4>
      </div>
    </div>
  </div>
</section>
  
  
