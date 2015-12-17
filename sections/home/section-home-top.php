<section id="section-home-top" class="scrollify-section">
  <div class="jumbotron">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="font-white text-shadow animated pulse">
            We Are the Nation's<br>
            <span class="font-yellow">Fastest-Growing</span><br>
            Tobacco Brand
          </h1>
          <a href="about-us">
            <button class="btn btn-primary btn-lg">Learn About Us</button>
          </a>
        </div>
        <div class="col-md-6"></div>
      </div>
    </div>
  </div>
  
  <?php get_template_part('partials/home-brands-carousel'); ?>
  
  <div class="container-fluid hidden-xs" id="home-top-testimonial-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
          <h2 class="font-white text-shadow">
            
            <?php 
              
              $testimonials = get_testimonials();
              
              //var_dump($testimonials);
            
            ?>
            </h2>
            <!-- masterslider -->
            <div class="master-slider ms-skin-default" id="masterslider-testimonials">
              
              <?php foreach($testimonials as $testimonial): ?>

                <div class="ms-slide">
                  <p class="font-slab font-white">
                    <?php echo $testimonial['body']; ?>
                  </p>
                </div>
              
              <?php endforeach; ?>

            </div>
            <!-- end of masterslider -->
        </div>
      </div>
    </div>
  </div>
  
  <div class="container-fluid hidden-sm hidden-md hidden-lg" id="home-top-testimonial-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
          <h2 class="font-yellow text-center text-shadow" style="margin-bottom: 15px; font-size: 24px;">Testimonials</h2>
            
            <?php 
              
              $testimonials = get_testimonials();
              
              //var_dump($testimonials);
            
            ?>
            
              <?php foreach($testimonials as $testimonial): ?>

                  <p class="font-white">
                    <?php echo $testimonial['body']; ?>
                  </p>
          
              <?php endforeach; ?>

        </div>
      </div>
    </div>
  </div>
  
</section>