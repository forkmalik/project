var $hamburgerButton = $(".header__menu-button");
var $firstImg = $(".img-o");
var $secondImg = $(".img-t");
var $bookingButton = $(".header__button");
var $firstScreen = $(".main");
var $secondScreen = $(".classtype");
var $backButton = $(".back-button");
var touchedBtn = "";


window.location.hash = '#main';
localStorage.setItem("ActiveTabID", "main");

$hamburgerButton.hover(function(event) {
        event.preventDefault();
        $(this).css('cursor', 'pointer');
        $secondImg.css('display', 'initial');
        $firstImg.css('display', 'none');
    },
    function(event) {
        event.preventDefault();
        $(this).css('cursor', 'auto');
        $secondImg.css('display', 'none');
        $firstImg.css('display', 'initial');

    });
$hamburgerButton.click(function(event) {
    event.preventDefault();
    if (!$('.hamburger-menu') || $('.hamburger-menu').css('display', 'none')) {
        $('.hamburger-menu').show('slow');

    }
});
$('.closemenu-btn').click(function(event) {
    event.preventDefault();
    if ($('.hamburger-menu') || $('.hamburger-menu').css('display', 'initial')) {
        $('.hamburger-menu').hide('slow');
    }
});
$bookingButton.click(function(event) {
    event.preventDefault();
    if (!$secondScreen || $secondScreen.css('display', 'none')) {
        $firstScreen.css('display', 'none');
        $secondScreen.css('display', 'flex');
    }
    document.cookie = "hash = classtype";
    window.location.hash = '#classtype';
});
$backButton.click(function(event) {
    event.preventDefault();
    if (!$firstScreen || $firstScreen.css('display', 'none')) {
        $secondScreen.css('display', 'none');
        $firstScreen.css('display', 'initial');
    }
    window.location.hash = '#main';
});

$(document).ready(function() {
    $('.owl-carousel').owlCarousel({
        margin: 10,
        nav: true,
        navClass: ['slider__nav--left', 'slider__nav--right'],
        responsive: {
            0: {
                items: 1
            },
            700: {
                items: 2
            },
            900: {
                items: 3
            },
            1200: {
                items: 4
            }
        }
    });
});

var $lectureButton = $(".lecture-button");
var $thirdScreen = $('.auditoies');
var $backButtonLecture = $('.back-button__lecture');

$lectureButton.click(function(event) {
    event.preventDefault();
    if (!$thirdScreen || $thirdScreen.css('display', 'none')) {
        $secondScreen.css('display', 'none');
        $thirdScreen.css('display', 'flex');
        touchedBtn = "lecture";
    }
    window.location.hash = '#lecture';
    document.cookie = "hash = lecture";
});
$backButtonLecture.click(function(event) {
    event.preventDefault();
    if (!$secondScreen || $secondScreen.css('display', 'none')) {
        $thirdScreen.css('display', 'none');
        $secondScreen.css('display', 'flex');

    }
    window.location.hash = '#classtype';
});

var $practiceButton = $('.practice-button');
var $fourthScreen = $('.practice-auditories');
var $backButtonPractice = $('.back-button__practice');

$practiceButton.click(function(event) {
    event.preventDefault();
    if (!$fourthScreen || $fourthScreen.css('display', 'none')) {
        $secondScreen.css('display', 'none');
        $fourthScreen.css('display', 'flex');
        touchedBtn = "practice";
    }
    window.location.hash = '#practice';
    document.cookie = "hash = practice";
});
$backButtonPractice.click(function(event) {
    event.preventDefault();
    if (!$secondScreen || $secondScreen.css('display', 'none')) {
        $fourthScreen.css('display', 'none');
        $secondScreen.css('display', 'flex');
    }
    window.location.hash = '#classtype';
});

$(document).ready(function() {
    //Скрыть PopUp при загрузке страницы    
    PopUpHide();
});
//Функция отображения PopUp
function PopUpShow() {
    $("#popup1").show();
}
//Функция скрытия PopUp
function PopUpHide() {
    $("#popup1").hide();
}

$(".classtype__button-choise").click(function(event) {
    event.preventDefault();
    PopUpShow();
});

$('.popup__submit-btn').click(function(event) {
    event.preventDefault();
    PopUpHide();
    if (!$(".confirm") || $(".confirm").css('display', 'none') && $thirdScreen.css('display', 'flex')) {
        $(".confirm").css('display', 'initial');
        $thirdScreen.css('display', 'none');
        window.location.hash = '#confirm';
        document.cookie = "hash = confirm";
    }
    if (!$(".confirm") || $(".confirm").css('display', 'none') && $fourthScreen.css('display', 'flex')) {
        $(".confirm").css('display', 'initial');
        $fourthScreen.css('display', 'none');
        window.location.hash = '#confirm';
        document.cookie = "hash = confirm";

    }
});
$('.confirm__back-button').click(function(event) {
    event.preventDefault();
    if (!$thirdScreen || $thirdScreen.css('display', 'none') && touchedBtn === "lecture") {
        $('.confirm').css('display', 'none');
        $thirdScreen.css('display', 'flex');
        window.location.hash = '#lecture';
    }
    if (!$fourthScreen || $fourthScreen.css('display', 'none') && touchedBtn === "practice") {
        $('.confirm').css('display', 'none');
        $fourthScreen.css('display', 'flex');
        window.location.hash = '#practice';
    }
});
$('.confirm__btn').click(function(event){
    event.preventDefault();
    if(!$firstScreen || $firstScreen.css('display', 'none')){
        $('.confirm').css('display', 'none');
        $firstScreen.css('display', 'initial');
    }
});