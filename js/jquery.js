//change window replace to correct url
$('#recruiters').click(function(){
  window.location.replace("http://dmatcovschi.github.io/#/recruiters")
  $('html, body').animate({scrollTop:$(document).height()}, 'slow');
    return false;
});

$('#recruiters1').click(function(){
  window.location.replace("http://dmatcovschi.github.io/#/recruiters")
  $('html, body').animate({scrollTop:$(document).height()}, 'slow');
    return false;
});

$('#feedbackform').click(function(){
  window.location.replace("http://dmatcovschi.github.io/#/feedbackdisplay2")
});

 // Activates the Carousel
  $('.carousel').carousel({
    interval: 5000
  });
