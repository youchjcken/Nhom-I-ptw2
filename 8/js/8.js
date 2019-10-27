 $('#loading').css("position", "absolute");
            $('.nav-item').click(function () {
                $('#loading').addClass("active");
                $('#loading').addClass("in");
                $('#loading').css('opacity', '1');
                $('#loading').css("position", "unset");
                $('.fade').css("position", "absolute");
                $('.fade').css("visibility", "hidden");
                setTimeout(function(){
                    $('#loading').css('opacity', '0');
                    $('#loading').removeClass("active");
                    $('#loading').removeClass("in");
                    $('#loading').css("position", "absolute");
                    $('.fade').css("position", "unset");
                    $('.fade').css("visibility", "visible");
                    $('.line-one').css('-webkit-line-clamp', '1');
                    setTimeout(function(){
                        $('.line-one').css('-webkit-line-clamp', '2');
                    }, 100);
                }, 2000);
            });