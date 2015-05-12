//change window replace to correct url
$('#recruiters').click(function(){
  window.location.replace("http://dmatcovschi.github.io/#/recruiters")
  $('html, body').animate({scrollTop:$(document).height()}, 'slow');
    return false;
});

$('#recruiters1').click(function(){
  window.location.replace("http://dmatcovschi.github.io/#/companies")
  $('html, body').animate({scrollTop:$(document).height()}, 'slow');
    return false;
});

 // Activates the Carousel
  $('.carousel').carousel({
    interval: 5000
  });
$('#recruiters').ready(function(){
    $('.img-zoom').hover(function() {
        $(this).addClass('transition');
 
    }, function() {
        $(this).removeClass('transition');
    });
  });
   
   //Used to enlarge images
   $('#recruiters').click(function showImage(imgName) {
                document.getElementById('largeImg').src = imgName;
                showLargeImagePanel();
                unselectAll();
            })
            $('#recruiters').click(function showLargeImagePanel() {
                document.getElementById('largeImgPanel').style.visibility = 'visible';
            })
            $('#recruiters').click(function unselectAll() {
                if(document.selection) document.selection.empty();
                if(window.getSelection) window.getSelection().removeAllRanges();
            })
            $('#recruiters').click(function hideMe(obj) {
                obj.style.visibility = 'hidden';
            })
