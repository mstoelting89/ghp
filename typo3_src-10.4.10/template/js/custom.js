$(document).ready(function () {

    /* Navbar scroll function */
   if($(window).width() > 992) {
       $(window).scroll(function() {
           if($(this).scrollTop() > 40) {
               $('.navbar').addClass('fixed-top');
           } else {
               $('.navbar').removeClass('fixed-top');
           }
       })
   }

   $('.mini-blog-article').click(function() {
       $('.blog-overlay').addClass('show');
       $('.blog-detail').addClass('show');
   });

   $('.blog-detail-closing').click(function() {
       console.log("Hallo");
        $('.blog-overlay').removeClass('show');
        $('.blog-detail').removeClass('show');
   });

   $('.sidebar-title').click(function() {
       $(this).parent().toggleClass('active');
   })
});