<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-2">
    <div class="container">
<div class="row">
    <div class="col-md-4 col-sm-6">
    <div class="baner">
            <h2>Mobiles &amp;
                <br>
                Tablets
            </h2>
            <div class="shopnow"><span class="mkd-btn-text"><a href="#">Shop Now</a></span></div>
            <img src="./images/backgroud1.jpg" alt="background1">

        </div>
    </div>
    <div class="col-md-4 col-sm-6">
    <div class="baner">
            <h2>Gadgets &amp;
                <br>
                Accessories
            </h2>
            <div class="shopnow"><span class="mkd-btn-text"><a href="#">Shop Now</a></span></div>
            <img src="./images/backgroud2.jpg" alt="background1">

        </div>
    </div>
    <div class="col-md-4 col-sm-6">
    <div class="baner">
            <h2>Computer &amp;
                <br>
                Laptops
            </h2>
            <div class="shopnow"><span class="mkd-btn-text"><a href="#">Shop Now</a></span></div>
            <img src="./images/backgroud3.jpg" alt="background1">

        </div>
    </div>
</div>
       
    
    
    </div>
</div>
</div>