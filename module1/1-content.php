<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-module1">
    <div class="title1">
        <div class="mkd-position-left-inner">
            <span><a href="#">SUPER DEALS</a></span>
            <span><a href="#">FEAUTURED BRANDS</a></span>
            <span><a href="#">TRENDING STYLES</a></span>
            <span><a href="#">GIFT CARDS</a></span>
        </div>
        <div class="mkd-position-right-inner">
            <span class="aaa1"><a href="#">STORE LOCATOR</a></span>
            <span class="aaa2"><a href="#">TRACK YOUR ORDER</a></span>
            <span class="aaa3"><a href="#">TRACK YOUR ORDER</a></span>
        </div>
    </div>
    <br>
    <div class="logo">
        <div class="logo-shop"> <a href="#"><img src="./images/logo.jpg" alt="logo"></a></div>


        <div class="form-seach">
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn">All Categories <i class="fa fa-caret-down"></i> </button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="#home">Home</a>
                    <a href="#about">About</a>
                    <a href="#contact">Contact</a>

                </div>
            </div>
            <input type="text" placeholder="Search for Product...">
            <span class="search-sp">
                <button class="search-submit">
                    <a href="#"></a>
                </button>
            </span>
            <div class="wiget">
                <span class="bbb1"><a href="#"></a></span>
                <span class="bbb2"><a href="#"></a></span>
                <span class="bbb3"><a href="#">(0)</a></span>
            </div>



        </div>
    </div>



</div>

<!-- <script>
    $(document).ready(function() {
        $("#flip").click(function() {
            $("#panel").slideToggle("slow");
        });
    });
</script> -->
<script>
    /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>