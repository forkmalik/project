var $hamburgerButton = $(".header__menu-button");
var $firstImg = $(".img-o");
var $secondImg = $(".img-t");
var $bookingButton = $(".header__button");
var $firstScreen = $(".main");
var $secondScreen = $(".classtype");
var $backButton = $(".back-button");

$hamburgerButton.hover(function(event){
    event.preventDefault();
    $(this).css('cursor', 'pointer');
    $secondImg.css('display', 'initial');
    $firstImg.css('display', 'none');
    },
    function(event){
       event.preventDefault();
    $(this).css('cursor', 'auto');
    $secondImg.css('display', 'none');
    $firstImg.css('display', 'initial');
    
});

$bookingButton.click(function(event){
    event.preventDefault();
    if(!$secondScreen || $secondScreen.css('display', 'none')){
        $firstScreen.css('display', 'none');
        $secondScreen.css('display', 'flex');
    }
});
$backButton.click(function(event){
    event.preventDefault();
    if(!$firstScreen || $firstScreen.css('display', 'none')){
        $secondScreen.css('display', 'none');
        $firstScreen.css('display', 'initial');
    }
});

 $( document ).ready(function() {
  $('.owl-carousel').owlCarousel({
    margin:10,
    nav:true,
    navClass: ['slider__nav--left', 'slider__nav--right'],
    responsive:{
        0:{
            items:1
        },
        700:{
            items:2
        },
        900:{
            items:3
        },
        1200:{
            items: 4
        }
    }
});
});

 var $lectureButton = $(".lecture-button");
 var $thirdScreen = $('.auditoies');
 var $backButtonLecture = $('.back-button__lecture');
 
 $lectureButton.click(function(event){
    event.preventDefault();
    if(!$thirdScreen || $thirdScreen.css('display', 'none')){
        $secondScreen.css('display', 'none');
        $thirdScreen.css('display', 'flex');
    }
});
$backButtonLecture.click(function(event){
    event.preventDefault();
    if(!$secondScreen || $secondScreen.css('display', 'none')){
        $thirdScreen.css('display', 'none');
        $secondScreen.css('display', 'flex');
    }
});
 
 
