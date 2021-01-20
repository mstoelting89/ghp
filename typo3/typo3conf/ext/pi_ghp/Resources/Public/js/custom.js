$(document).ready(function () {

    /* Navbar scroll function */
   //if($(window).width() > 992) {
       $(window).on({
           'scroll': function (e) {
               if ($(this).scrollTop() > 40) {
                 $('.navbar-brand').show();
                 $('.navbar').addClass('fixed-top navbar-ghp');
               } else {
                 $('.navbar-brand').hide();
                 $('.navbar').removeClass('fixed-top navbar-ghp');
               }
             }
       })
   //}

   $('.mini-blog-article').click(function() {
       $('.blog-overlay').addClass('show');
       $('.blog-detail').addClass('show');
   });

   $('.blog-detail-closing').click(function() {
        $('.blog-overlay').removeClass('show');
        $('.blog-detail').removeClass('show');
   });

   $('.sidebar-title').click(function() {
       //$(this).parent().toggleClass('active');

       //$('div[class^="sidebar-item"]:not(.active)').

       $(this).next().toggleClass('active');
       $(this).next().toggleClass('fade-in');

       if ($(this).parent().next().children().hasClass('active')) {
         $(this).parent().next().children('.sidebar-content').removeClass('active');
         $(this).parent().next().children('.sidebar-content').removeClass('fade-in');
       }

       if ($(this).parent().prev().children().hasClass('active')) {
         $(this).parent().prev().children('.sidebar-content').removeClass('active');
         $(this).parent().prev().children('.sidebar-content').removeClass('fade-in');
       }
   });

   $('.firstWord').each(function () {
     var title = $(this).text().split(' ');
     $(this).html('<span class="word-highlight">' + title.shift() + ' </span>' + title.join(' '));
   })
});
