 
    $(document).ready(function() {

        $(".tabs-list li a").click(function(e) {
            e.preventDefault();
        });

        $(".tabs-list li").click(function() {
            var tabid = $(this).find("a").attr("href");
            $(".tabs-list li,.tabs div.tab").removeClass("active"); // removing active class from tab

            $(".tab").hide(); // hiding open tab
            $(tabid).show(); // show tab
            $(this).addClass("active"); //  adding active class to clicked tab

        });

        $(".tabs-list2 li a").click(function(e) {
            e.preventDefault();
        });

        $(".tabs-list2 li").click(function() {
            var tabid = $(this).find("a").attr("href");
            $(".tabs-list2 li,.tabss div.tab2").removeClass("active2"); // removing active class from tab

            $(".tab2").hide(); // hiding open tab
            $(tabid).show(); // show tab
            $(this).addClass("active2"); //  adding active class to clicked tab

        });

    });
   
