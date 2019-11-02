var swiper = new Swiper('.swiper-container', {
    effect: 'fade',
    loop: true,
    speed: 1000,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    autoplay: {
        delay: 10000,
        disableOnInteraction: false
    },
});
swiper.on('slideChange', function () {
    $('.content').css('left', '36%');
    setTimeout(function () {
        $('.content').css('left', '34%');
    }, 1000);
});