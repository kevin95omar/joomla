/* 
Counter Up
*/
jQuery(function($){
    $('.counter').counterUp({
        delay: 100,
        time: 800
    });
});

/*
WOW plugin triggers animate.css on scroll
*/
var wow = new WOW(
        {
            boxClass: 'wow', // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset: 100, // distance to the element when triggering the animation (default is 0)
            mobile: false        // trigger animations on mobile devices (true is default)
        }
);
wow.init();

jQuery(function($) {
$(document).ready(function(){
    $(".sp-megamenu-parent >.sp-menu-item").hover(function() {
         $(".sp-dropdown-inner").addClass("sp-dropdown-inner2");
         }, function() {
       $(".sp-dropdown-inner").removeClass("sp-dropdown-inner2");
       });
});
});


jQuery(function($) {
$(document).ready(function(){
    $(".hikashop_product").hover(function() {
         $("form").addClass("lightSpeedIn");
         }, function() {
       $("form").removeClass("lightSpeedIn");
       });
});
});
