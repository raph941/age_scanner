//Lazy loading Slider
$(".carouselzz").slick({
    // To use lazy loading, set a src attribute
    // on your img tags and leave off the src
    slidesToShow: 3,
    slidesToScroll: 1,
    accesibility: true,
    adaptiveHeight: false,
    arrows: true,
    variableWidth: false,
    nextArrow: $('.nextArrow'),
    prevArrow: $('.prevArrow'),
    dots: true,
    appendDots: $('.dot__nav'),
    dotsClass: 'dot__wrapper',
    infinite: true,
    customPaging : function(slider, i) {
        return '<a class="dot__nav"><img src="./images/screens/dot.svg"/></a>';
    },
  });