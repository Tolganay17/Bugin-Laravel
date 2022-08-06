/*поиск в header*/
$('.search-btn').click(function (){
    if ($('.search input').val()==""){
        $('.search').toggleClass('search-uncover');
        $('.header-bottom').toggleClass('null-opacity');
    }

});

/*поиск в header*/
$(document).mouseup(function (e){
    var div = $(".search");  //класс элемента вне которого
    if (!div.is(e.target) && div.has(e.target).length === 0) {
        div.removeClass('search-uncover');
        $('.header-bottom').removeClass('null-opacity');
    }
});

/*header menu для мобильников*/
$('.menu-open-btn').click(function (){
    $('.header-top-wrapper').addClass('menu-open');
    $('body').addClass('scroll-locked');
});

$('.menu-close-btn').click(function (){
    $('.header-top-wrapper').removeClass('menu-open');
    $('body').removeClass('scroll-locked');
});

/*слайдер на footer*/
$('.footer-nav').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 12,
    slidesToScroll: 1,
    variableWidth: true,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 6,
                slidesToScroll: 1,
                infinite: true,
                dots: false
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        },
    ]
});






