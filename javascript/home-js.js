// main carousel animation code begins
var lastImage = 1;
setInterval(() =>{
    $('.image-' + lastImage).removeClass('fade-in');
    $('.image-' + lastImage).addClass('fade-out');
    setTimeout(() => {
        $('.image-' + lastImage).removeClass('fade-out slow vov');
        $('.image-' + lastImage).addClass('hidden');
        lastImage++;
        if(lastImage > 4)
        {
            lastImage = 1;
        }
        $('.image-' + lastImage).removeClass('hidden');
        $('.image-' + lastImage).addClass('vov slow fade-in');
    },0);
},5*1000);

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
    var $visionCol = $('.vision-col');
    var $visionRead = $('.vision-read-more');
    var $visionImg = $('.vision-img');
    var $serviceHead = $('.title-box');
    var $service = $('.inner-box');
    var $schoolProd = $('.project-block');

    if (onScreen($visionCol)) {
        // Start the animation
        $visionCol.addClass('vov fade-in-left slower');
    } 

    if(onScreen($visionRead)){
        $visionRead.addClass('vov fade-in-up slower');
    }

    if(onScreen($visionImg)){
        $visionImg.addClass('vov fade-in-right slower');
    }
    
    if(onScreen($service) || onScreen($serviceHead)){
        $service.addClass('vov blur-in slow');
    }

    if(onScreen($schoolProd)){
        $schoolProd.addClass('vov fade-in-up slower');
    }
}
$(window).on('scroll', function() {
    checkAnimation();
});

//work tab js
if($('.work-tab').length){
    $('.work-tab .product-tab-btns .p-tab-btn').on('click', function(e) {
        e.preventDefault();
        var target = $($(this).attr('data-tab'));
        
        if ($(target).hasClass('actve-tab')){
            return false;
        }
        else{
            $('.work-tab .product-tab-btns .p-tab-btn').removeClass('active-btn');
            $(this).addClass('active-btn');
            $('.work-tab .p-tabs-content .p-tab').removeClass('active-tab');
            $(target).addClass('active-tab');
        }
    });
}

$('.single-item .row').mouseenter(function(){
    $('.explore-imgs').addClass('work-image')
})
$('.single-item .row').mouseleave(function(){
    $('.explore-imgs').removeClass('work-image');
})
// $('.carousel-control-prev, .carousel-control-next').on('click', function 
// () {
//     var id = $('.carousel-inner').find('carousel-item:active').attr('id');
//     alert(id);

// });
// main carousel animation code ends

