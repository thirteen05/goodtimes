<section id="section-category-top">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">

          <div class="text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/images/Carousel-Brand-Strip.png" height="100" />
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
			        	<h3><?php echo $post->post_title; ?></h3>
			        	<h4>COMPANY CEO</h4>
			        	<p class="email">E-Mail: <a href="#">juliab@jourrapide.com</a></p>
			        	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
			        </div>     
                    <!-- Button trigger modal -->
			    </div>
              
              
              <?php endforeach; ?>
              
			</div>
			<!-- end of masterslider -->
			<div class="ms-staff-info" id="staff-info"> </div>
		</div>
		<!-- end of template -->
        
        
        
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
          Launch demo modal
        </button>

        <!-- Modal -->
        <div class="modal modal-lg fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header text-center">
              
                <img width="200" src="<?php echo get_category_logo(); ?>" />
              
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
                                  
                                  <h4>Description</h4>
                                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                                  
                                  <h4>Flavor Profile</h4>
                                  <p><?php echo $post->post_content; ?></p>
                                  
                                  <img width="200" src="<?php echo get_template_directory_uri(); ?>/images/Good-Times-Logo.svg" />
                                  
                                </div>
                                <div class="col-md-4">
                                  <h4>Wrapper</h4>
                                  <p>Natural Leaf Connecticut Shade</p>
                                  
                                  <h4>Ring Gauge</h4>
                                  <p>27.8 X 4.25"</p>
                                  
                                  <h4>Pouch Count</h4>
                                  <p>Natural Leaf Connecticut Shade</p>
                                  
                                  <h4>Available in 9 Good Times Flavors</h4>
                                  <p>Natural Leaf Connecticut Shade</p>
                                
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
</section>