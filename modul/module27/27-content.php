<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-26">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-ms-6">
                <div class="ts-inner">
                    <h4 class="ts-title">
                        Hot New Releases </h4>
                </div>
                <div class="bodd"></div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="imgg">
                            <a href="#"><img src="./images/cam1.jpg" alt="cam1"></a>
                        </div>
                    </div>
                    <div class="col-d-9 ">
                        <div class="tex-pay">
                            <h5><a href="#">Apple VIP Membership</a></h5>
                        </div>
                        <span class="payy">$259</span>
                        <span class="pay-dow">$599</span>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="imgg">
                            <a href="#"><img src="./images/cam2.jpg" alt="cam1"></a>
                        </div>
                    </div>
                    <div class="col-d-9">
                        <div class="tex-pay">
                            <h5><a href="#">Apple iPad 9.7 128GB WiFi</a></h5>
                        </div>
                        <span class="payy">$999</span>
                        <span class="pay-dow">$1,199</span>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="imgg">
                            <a href="#"><img src="./images/cam3.jpg" alt="cam1"></a>
                        </div>
                    </div>
                    <div class="col-d-9">
                        <div class="tex-pay">
                            <h5><a href="#">Apple MacBook Pro</a></h5>
                        </div>
                        <span class="payy">$999</span>
                        <span class="pay-dow">$1,259</span>
                    </div>

                </div>
            </div>
            <div class="col-md-4 col-ms-6 ">
                <div class="ts-inner">
                    <h4 class="ts-title">
                        Top Selling Products </h4>
                </div>
                <div class="bodd"></div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="imgg">
                            <a href="#"><img src="./images/cam4.jpg" alt="cam1"></a>
                        </div>
                    </div>
                    <div class="col-d-9">
                        <div class="tex-pay">
                            <h5><a href="#">Apple MacBook Pro With Touch Bar MF841DSN/A 13″</a></h5>
                        </div>
                        <span class="pay">$999</span>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="imgg">
                            <a href="#"><img src="./images/cam5.jpg" alt="cam1"></a>
                        </div>
                    </div>
                    <div class="col-d-9">
                        <div class="tex-pay">
                            <h5><a href="#">Ultra Wireless S50 Headphones with Bluetooth</a></h5>
                        </div>
                        <span class="pay">$349</span>

                    </div>

                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="imgg">
                            <a href="#"><img src="./images/cam6.jpg" alt="cam1"></a>
                        </div>
                    </div>
                    <div class="col-d-9">
                        <div class="tex-pay">
                            <h5><a href="#">Apple VIP Membership</a></h5>
                        </div>
                        <span class="pay">$359</span>

                    </div>

                </div>
            </div>
            <div class="col-md-4 col-ms-6">
                <div class="ts-inner">
                    <h4 class="ts-title">
                        Featured Products </h4>
                </div>
                <div class="bodd"></div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="imgg">
                            <a href="#"><img src="./images/cam7.jpg" alt="cam1"></a>
                        </div>
                    </div>
                    <div class="col-d-9">
                        <div class="tex-pay">
                            <h5><a href="#">Apple iPhone 6 4.7-Inch Black 128GB</a></h5>
                        </div>
                        <span class="pay">$399</span>

                    </div>

                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="imgg">
                            <a href="#"><img src="./images/cam8.jpg" alt="cam1"></a>
                        </div>
                    </div>
                    <div class="col-d-9">
                        <div class="tex-pay">
                            <h5><a href="#">ES62-T Steam Iron with Nonstick Soleplate</a></h5>
                        </div>
                        <span class="pay">$59</span>

                    </div>

                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="imgg">
                            <a href="#"><img src="./images/cam9.jpg" alt="cam1"></a>
                        </div>
                    </div>
                    <div class="col-d-9">
                        <div class="tex-pay">
                            <h5><a href="#">Apple iPhone 5s 4.7-Inch White Silver 16GB</a></h5>
                        </div>
                        <span class="pay">$419</span>

                    </div>

                </div>
            </div>
        </div>
    </div>





</div>