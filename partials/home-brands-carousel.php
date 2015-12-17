<div class="container-fluid bg-charcoal" id="home-top-brands-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2 class="font-white text-shadow">
            Enjoy the Entire <span class="font-yellow">Good Times Tobacco</span> Line:
          </h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid" id="home-brands-wrapper">
    
    
    <div class="container hidden-xs hidden-sm">
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-3 text-center" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/Good-Times-Home-Brands-Good-Times.png);">
              <a href="<?php $cat_id = get_cat_ID('Good Times'); $link = get_category_link($cat_id); echo $link; ?>">
                <div class="home-brand-overlay">
                  <h5 class="text-shadow">View<br>Good Times<br>Products</h5>
                </div>
              </a>
            </div>
            <div class="col-md-3 text-center" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/Good-Times-Home-Brands-4K.png);">
              <a href="<?php $cat_id = get_cat_ID('4K'); $link = get_category_link($cat_id); echo $link; ?>">
                <div class="home-brand-overlay">
                  <h5 class="text-shadow">View<br>4K's<br>Products</h5>
                </div>
              </a>
            </div>
            <div class="col-md-3 text-center" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/Good-Times-Home-Brands-HD.png);">
              <a href="<?php $cat_id = get_cat_ID('HD'); $link = get_category_link($cat_id); echo $link; ?>">
                <div class="home-brand-overlay">
                  <h5 class="text-shadow">View<br>#HD<br>Products</h5>
                </div>
              </a>
            </div>
            <div class="col-md-3 text-center" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/Good-Times-Home-Brands-Little-Wild.png);">
              <a href="<?php $cat_id = get_cat_ID('Little &amp; Wild'); $link = get_category_link($cat_id); echo $link; ?>">
                <div class="home-brand-overlay">
                  <h5 class="text-shadow">View<br>Little 'N Wild<br>Products</h5>
                </div>
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 text-center" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/Good-Times-Home-Brands-Sweet-Woods.png);">
              <a href="<?php $cat_id = get_cat_ID('Sweet Woods'); $link = get_category_link($cat_id); echo $link; ?>">
                <div class="home-brand-overlay">
                  <h5 class="text-shadow">View<br>Sweet Woods<br>Products</h5>
                </div>
              </a>
            </div>
            <div class="col-md-3 text-center" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/Good-Times-Home-Brands-Flat-Wrap.png);">
              <a href="<?php $cat_id = get_cat_ID('Flat Wrap'); $link = get_category_link($cat_id); echo $link; ?>">
                <div class="home-brand-overlay">
                  <h5 class="text-shadow">View<br>Flat Wrap<br>Products</h5>
                </div>
              </a>
            </div>
            <div class="col-md-3 text-center" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/Good-Times-Home-Brands-Double-7s.png);">
              <a href="<?php $cat_id = get_cat_ID("Double 7's"); $link = get_category_link($cat_id); echo $link; ?>">
                <div class="home-brand-overlay">
                  <h5 class="text-shadow">View<br>Double 7's<br>Products</h5>
                </div>
              </a>
            </div>
            <div class="col-md-3 text-center" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/Good-Times-Home-Brands-Remington.png);">
              <a href="<?php $cat_id = get_cat_ID('Remington'); $link = get_category_link($cat_id); echo $link; ?>">
                <div class="home-brand-overlay">
                  <h5 class="text-shadow">View<br>Remington<br>Products</h5>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6" id="home-top-pouch-background-wrapper">
          
        </div>
    </div>
  </div>
    
    <?php get_template_part('partials/home-mobile-brand-slider'); ?>
    
</div>