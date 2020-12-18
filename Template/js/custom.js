$(document).ready(function () {
   if($(window).width() > 992) {
       $(window).scroll(function() {
           if($(this).scrollTop() > 40) {
               $('.navbar').addClass('fixed-top');
           } else {
               $('.navbar').removeClass('fixed-top');
           }
       })
   }
});