var $hamburgerButton = $(".header__menu-button");
var $firstImg = $(".img-o");
var $secondImg = $(".img-t");

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