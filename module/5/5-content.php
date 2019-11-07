<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-5">
    <div class="container">
        <div class="tong">
            <div class="row">
                <div class="col-md-6">
                    <div class="box">
                    <i class="fa-shopping-cart"></i>
                        <div class="row">
                            <div class="col-md-5">

                                <div class="mot">
                                    <div class="image">
                                        <img src="./images/1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="hai">
                                    <div class="text">
                                        <a href="#">Gadgets</a>
                                        <a>,</a>
                                        <a href="#">Headphones</a>
                                    </div>
                                    <h4 class="denon"><a href="#">Denon AH-D7100 Music Maniac Headphones</a></h4>
                                    <div class="money">
                                        <span>$900</span>
                                    </div>
                                    <br>
                                    <h5>Hurry up! Offer ends in:</h5>
                                    <div class="times">
                                        <span class="time">00</span>
                                        <span>:</span>
                                        <span class="time">00</span>
                                        <span>:</span>
                                        <span class="time">00</span>
                                    </div>
                                    <p class="chu">
                                        <a class="chu1">HOUR</a>
                                        <a class="chu2">MINS</a>
                                        <a class="chu3">SECS</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="test">
                        <div class="hinh">
                            <img src="./images/2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>