/**
* Fades navbar in/out on Home Page
*/


$(window).scroll(function(){
  
  var top = $(window).scrollTop();
  
  if(top > 0){
    $('#goodtimes-navbar').css('background-color','rgba(0,0,0,0.8)');
  } else{
    $('#goodtimes-navbar').css('background-color','rgba(0,0,0,0)');
  }
  
});

/**
* Changes the Text for the 5 CORE VALUES carousel on Home Page
*/

$('#carousel-values').on('slide.bs.carousel',function(){

  var activeSlide = $(this).find('.item.active');
  var slideNumber = activeSlide.attr('data-slide-number');

  if(slideNumber == 1){

    $('#core-value-span').fadeOut('slow',function(){
      $('#core-value-span').text('FRESHNESS');
    });

    $('#core-value-span').fadeIn();

  }

  if(slideNumber == 2){

    $('#core-value-span').fadeOut('slow',function(){
      $('#core-value-span').text('QUALITY');
    });

    $('#core-value-span').fadeIn();

  }

  if(slideNumber == 3){

    $('#core-value-span').fadeOut('slow',function(){
      $('#core-value-span').text('INNOVATION');
    });

    $('#core-value-span').fadeIn();

  }

  if(slideNumber == 4){

    $('#core-value-span').fadeOut('slow',function(){
      $('#core-value-span').text('VALUE');
    });

    $('#core-value-span').fadeIn();

  }

  if(slideNumber == 5){

    $('#core-value-span').fadeOut('slow',function(){
      $('#core-value-span').text('FLAVOR');
    });

    $('#core-value-span').fadeIn();

  }

});

/**
* Dropdowns show on hover for desktop
*/


$('.menu-item').hover(function(){
  
  if( $(this).hasClass('menu-item-has-children') ){
    
    $(this).find('.dropdown-menu').fadeToggle();
    
  }
  
});

/**
* Mobile Navigation
*/
  
$('#mobile-nav-toggle, #mobile-nav-close').click(function(){
  $('#mobile-nav, #mobile-nav-toggle').fadeToggle();
});
  
$('#mobile-nav #menu-main-nav li a').click(function(e){
  
  if($(this).parent().hasClass('menu-item-has-children')){
      e.preventDefault();
      $(this).parent().find('.sub-menu').slideToggle();

  }
  
});

/**
* Instagram Overlays
*/

$('.instagram-pic-wrapper').hover(function(){
  
  $(this).find('.instagram-overlay').stop().fadeToggle('fast');
  
});


$('#myModal').on('show.bs.modal', function (e) {
  
  var image = e.relatedTarget;
  
  if($(window).innerWidth() < 1024 ) {
    e.preventDefault();
  }
  
});