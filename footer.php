
        <?php get_template_part('partials/fixed-footer'); ?>
        <?php get_template_part('partials/social-media-bar'); ?>


        <script src="<?php echo get_stylesheet_directory_uri(); ?>/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/bower_components/jquery.stellar/jquery.stellar.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/bower_components/Scrollify/jquery.scrollify.min.js"></script>
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




        <script>

          $(document).ready(function() {
            $("#carousel-home-brands").on("slid", function() {
              
              var to_slide;
              to_slide = $("#carousel-home-brands >.item.active").attr("data-slide-to");
              
              $(".carousel-brand-indicator.active").removeClass("active");
              $(".carousel-brand-indicator li[data-slide-to=" + to_slide + "]").addClass("active");
            });
            
            $(".carousel-brand-indicator").on("click", function() {
              $(this).preventDefault();
              $("#carousel-home-brands").carousel(parseInt($(this).attr("data-slide-to")));
              $(".carousel-brand-indicator.active").removeClass("active");
              $(this).addClass("active");
            });
            
          });
          
          var $carousel = $('#carousel-home-brands');
          $carousel.carousel();
          var handled=false;//global variable

          $carousel.bind('slide.bs.carousel', function (e) {
            
              var current=$(e.target).find('.item.active');
              var indx=$(current).index();
              
              /*current.find('.carousel-pouch').removeClass('show-pouch');
            
              $(e.relatedTarget).find('.carousel-pouch').addClass('show-pouch');*/
            
              if((indx+2)>$('.carousel-indicators li').length)
                  indx=-1
               if(!handled)
               {
                  $('.carousel-brand-indicator').removeClass('active')
                  $('.carousel-brand-indicator:nth-child('+(indx+2)+')').addClass('active');
               }
               else
               {
                  handled=!handled;//if handled=true make it back to false to work normally.
               }
          });

          $(".carousel-brand-indicator").on('click',function(){
             //Click event for indicators
             $(this).addClass('active').siblings().removeClass('active');
             //remove siblings active class and add it to current clicked item
             handled=true; //set global variable to true to identify whether indicator changing was handled or not.
          });

        </script>

        <?php if(!is_category()): ?>

        <script>
          
              if($(window).innerWidth() > 480){
                
                $(function() {
					$.scrollify({
						section : ".scrollify-section",
					});
				});
                
                $.stellar();
                
              }
          
        </script>

        <?php endif; ?>

        <script>

          $(document).ready(function() {

            /* Every time the window is scrolled ... */
            $(window).scroll( function(){

                /* Check the location of each desired element */
                $('.off-Screen').each( function(i){

                    var bottom_of_object = $(this).offset().top + $(this).outerHeight();
                    var bottom_of_window = $(window).scrollTop() + $(window).height();

                    /* If the object is completely visible in the window, fade it it */
                    if( bottom_of_window > bottom_of_object ){

                        $(this).removeClass('off-Screen');
                        $(this).addClass('animate slideInRight');

                    }
                }); 

            });

        });


        </script>


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

   var angle = 0;
    function galleryspin(sign) { 
    spinner = document.querySelector("#spinner");
    if (!sign) { angle = angle + 45; } else { angle = angle - 45; }
    spinner.setAttribute("style","-webkit-transform: rotateY("+ angle +"deg); -moz-transform: rotateY("+ angle +"deg); transform: rotateY("+ angle +"deg);");
    }

</script>

	<script type="text/javascript">	

		var slider = new MasterSlider();
		slider.setup('masterslider' , {
			loop:true,
			width:150,
			height:400,
			speed:20,
			view:'flow',
			preload:0,
			space:0,
			wheel:true,
            preload: 'all',
            keyboard: true
		});
		slider.control('arrows');
		slider.control('slideinfo',{insertTo:'#staff-info'});
		
	</script>


    <script type="text/javascript">       
 
      var slider2 = new MasterSlider();

          slider2.control('arrows');   
          slider2.control('circletimer' , {color:"#FFFFFF" , stroke:9});
          slider2.control('thumblist' , {autohide:false ,dir:'h', type:'tabs',width:80,height:120, align:'bottom', space:0 , margin:-12, hideUnder:400});

          slider2.setup('masterslider2' , {
              width:960,
              height:400,
              space:0,
              preload:'all',
              view:'basic',
              loop: true,
              wheel: true,
              keyboard: true,
              view: 'fade'
          });

    </script>

    <script>
        
      $('.ms-slide').click(function(){
        
        var slideNumber = $(this).attr('data-slide-number');
        slider2.api.gotoSlide( slideNumber - 1 ); 
        
      });
      
    </script>


        <?php wp_footer(); ?>

    </body>
</html>