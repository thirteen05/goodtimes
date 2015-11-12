<div class="container-fluid bg-charcoal hidden-xs" id="home-top-brands-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <ol class="carousel-indicators">
            <li class="carousel-brand-indicator active" data-target="#carousel-home-brands" data-slide-to="0" class="active">
              <?php
                $templateURI = get_template_directory_uri();
                echo file_get_contents("$templateURI/images/Brands-Good-Times.svg"); 
              ?>
            </li>
            <li class="carousel-brand-indicator" data-target="#carousel-home-brands" data-slide-to="1">
              <?php
                $templateURI = get_template_directory_uri();
                echo file_get_contents("$templateURI/images/Brands-Little-Wild.svg"); 
              ?>
            </li>
            <li class="carousel-brand-indicator" data-target="#carousel-home-brands" data-slide-to="2">
              <?php
                $templateURI = get_template_directory_uri();
                echo file_get_contents("$templateURI/images/Brands-Sweet-Woods.svg"); 
              ?>
            </li>
            <li class="carousel-brand-indicator" data-target="#carousel-home-brands" data-slide-to="3">
              <?php
                $templateURI = get_template_directory_uri();
                echo file_get_contents("$templateURI/images/Brands-HD.svg"); 
              ?>
            </li>
          </ol>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid" id="home-brands-carousel-wrapper" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <img id="mobile-pouch" src="<?php echo get_template_directory_uri(); ?>/images/Home-Brand-Carousel-Pouch-Good-Times.png" class="hidden-sm hidden-md hidden-lg" height="200" />
          <div id="carousel-home-brands" class="carousel slide hidden-xs" data-ride="carousel">
              <!-- Indicators -->
              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <div class="col-md-6">TEST TEST TEST</div>
                  <div class="col-md-6">
                    <img class="carousel-pouch" src="<?php echo get_template_directory_uri(); ?>/images/Home-Brand-Carousel-Pouch-Good-Times.png" />
                  </div>
                </div>
                <div class="item">
                  <div class="col-md-6">SLide 2 Slide 2 Slide 2</div>
                  <div class="col-md-6"></div>
                </div>
                <div class="item">
                  <div class="col-md-6">Slide 3 Slide 3 Slide 3</div>
                  <div class="col-md-6"></div>
                </div>
                <div class="item">
                  <div class="col-md-6">Slide 4 Slide 4 Slide 4</div>
                  <div class="col-md-6"></div>
                </div>
              </div>

              <!-- Controls -->
  <!--            <a class="left carousel-control" href="#carousel-home-brands" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-home-brands" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>-->
            </div>
        </div>
      </div>
    </div>
  </div>