// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.

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

      var slider3 = new MasterSlider();

		slider3.setup('home-mobile-brand-slider' , {
			loop:true,
			width:200,
			height:200,
			speed:20,
			view:'flow',
			preload:0,
			space:0,
            autoplay: true,
            wheel: false
		});
		slider3.control('arrows');

		$('#myTab a').click(function (e) {
		  e.preventDefault()
		  $(this).tab('show')
		});


      $('#masterslider .ms-slide').click(function(){
        
        var slideNumber = $(this).attr('data-slide-number');
        slider2.api.gotoSlide( slideNumber - 1 ); 
        
      });

      var sliderTestimonials = new MasterSlider();

		sliderTestimonials.setup('masterslider-testimonials' , {
			loop:true,
			width:750,
            height: 100,
			speed:20,
			view:'basic',
			preload:0,
			space:0,
            autoplay: true,
            wheel: false,
            autoheight: true
		});
		sliderTestimonials.control('bullets');

		$('#myTab a').click(function (e) {
		  e.preventDefault()
		  $(this).tab('show')
		});