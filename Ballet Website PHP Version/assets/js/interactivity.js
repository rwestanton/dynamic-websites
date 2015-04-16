/*---------- Navigation Bar ----------*/

//Dropdown Menu dropdown function for screen above 768px
/*
UPDATE: There is actually an easier way by adding display:block to dropdown-menu on dropdown:hover for media above width 767px. 
Search for .dropdown:hover to find line
*/

/*$(document).ready(function () {
     $(window).resize(function () {
         if ($(window).width() > 768) {
             $('.dropdown').on('mouseenter', function () {
                 $(this).addClass('open');
             }).on('mouseleave', function () {
                 $(this).removeClass('open');
             });
         } else {
             $('.dropdown').off('mouseenter mouseleave');
         }
     }).resize(); //to initialize the value
 });*/