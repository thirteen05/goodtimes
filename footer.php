
        <?php get_template_part('partials/fixed-footer'); ?>
        <?php get_template_part('partials/social-media-bar'); ?>


        <script src="<?php echo get_stylesheet_directory_uri(); ?>/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/bower_components/jquery.stellar/jquery.stellar.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/bower_components/Scrollify/jquery.scrollify.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/bower_components/jquery-selectric/public/jquery.selectric.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/masterslider/masterslider.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/plugins.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/doorman.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>

        <?php if(is_home() || is_page('Our Values')): ?>

        <script>
          
              if($(window).innerWidth() > 1024){
                
                $(function() {
					$.scrollify({
						section : ".scrollify-section",
                        //scrollbars: false
					});
                  
				});
                
                $.stellar();
                
              }
          
        </script>

        <?php endif; ?>


        <script>
      
          $(window).load(function(){
            
            setTimeout(function(){
              $('#loading').addClass('hide-load');
            }, 500);
                        
            if(sessionStorage.age){
              
              if(sessionStorage.age > 18){
                
                $('#age-verify-wrapper').fadeOut();
                $('html').removeClass('scroll-lock');
                
              } else{
                
              }
            }
            
          });
          
        </script>

        <script>
          
          $('#brand-category-select').change(function(){
            var selection = $(this).find('option:selected').val();
            
            switch(selection) {
                case 'good-times':
                    window.location.assign('<?php echo get_home_url(); ?>/category/good-times');
                    break;
                case 'hd':
                     window.location.assign('<?php echo get_home_url(); ?>/category/hd');
                    break;
                case '4k':
                     window.location.assign('<?php echo get_home_url(); ?>/category/4k');
                    break;
                case 'flat-wrap':
                     window.location.assign('<?php echo get_home_url(); ?>/category/flat-wrap');
                    break;
                case 'sweet-woods':
                     window.location.assign('<?php echo get_home_url(); ?>/category/sweet-woods');
                    break;
                case 'little-wild':
                     window.location.assign('<?php echo get_home_url(); ?>/category/little-wild');
                    break;
                case 'double-7':
                     window.location.assign('<?php echo get_home_url(); ?>/category/double-7s');
                    break;
                case 'remington':
                     window.location.assign('<?php echo get_home_url(); ?>/category/remington');
                    break;
                case 'mini':
                     window.location.assign('<?php echo get_home_url(); ?>/category/mini');
                    break;
                default:
                    //default code block
            }
            
          });
          
          $(function(){
            $('#brand-category-select').selectric();
          });
          
        </script>


        <?php wp_footer(); ?>

    </body>
</html>