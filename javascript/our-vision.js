// Check if it's time to start the animation.
// takes jQuery(element) a.k.a. $('element')
function onScreen(element) {
    // window bottom edge
    var windowBottomEdge = $(window).scrollTop() + $(window).height();

    // element top edge
    var elementTopEdge = element.offset().top;
    var offset = 100;

    // if element is between window's top and bottom edges
    return elementTopEdge + offset <= windowBottomEdge;
  }

//add animation when scrolled down to that section
function checkAnimation() {
    var $schoolProd = $('.project-block-one');

    if(onScreen($schoolProd)){
        $schoolProd.addClass('vov fade-in-up slower');
    }
}
$(window).on('scroll', function() {
    checkAnimation();
});