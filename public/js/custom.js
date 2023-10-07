/*
|--------------------------------------------------------------------------
| // Animation on Scroll.
|--------------------------------------------------------------------------
*/
function scrollAnimation() {
    const shouldAnimate = $("body").data("scroll-animation");
    if (true === shouldAnimate) {
        new WOW().init();
    }
}
scrollAnimation();


/*
|--------------------------------------------------------------------------
| Mobile Menu
|--------------------------------------------------------------------------
*/
$(document).ready(function(){
    $(".hamburger").click(function(){
        $(".mobile-menu").addClass("mobile-menu-active");
    });
    $(".mobile-menu-close").click(function(){
        $(".mobile-menu").removeClass("mobile-menu-active");
    });
});