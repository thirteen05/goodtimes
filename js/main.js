$(window).scroll(function(){
  
  var top = $(window).scrollTop();
  
  if(top > 0){
    $('#goodtimes-navbar').css('background-color','rgba(0,0,0,0.8)');
  } else{
    $('#goodtimes-navbar').css('background-color','rgba(0,0,0,0)');
  }
  
});