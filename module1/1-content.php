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
        <div id="mySidepanel" class="sidepanel">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <a href="#">Home</a>
            <a href="#">Pages</a>
            <a href="#">Shop</a>
            <a href="#">Departments</a>
            <a href="#">blog</a>
        </div>
        <button class="openbtn" onclick="openNav()">☰ </button>
        <div class="form-seach">
            <div id="flip">All categories <i class="fa fa-caret-down"></i></div>
            <div id="panel">
                <div>Phone1</div>
                <div>Phone2</div>
                <div>Phone3</div>
                <div>Phone4</div>
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

<script>
    $(document).ready(function() {
        $("#flip").click(function() {
            $("#panel").slideToggle("slow");
        });
    });
</script>
<script>
function openNav() {
  document.getElementById("mySidepanel").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
}
</script>