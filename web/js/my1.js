$(function(){
    $('.slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1
});
    $('.slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
        console.log(nextSlide);
    });
});