(function($) {
    $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
            loop: true,
            autoPlay: 100,
            autoplaySpeed:500,
            navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
            nav: true,

            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000:{
                    items: 4
                }
            }
        });

    });
});
