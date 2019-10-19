<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-14">
    <div class="container">
        <div class="item-iner">
            <div class="bracket"></div>
            <h1 class="st-title">Happy Customers</h1>
            <p class="doc-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna <br> aliquim ad minim veniam, quis nostrud</p>
        </div>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <p class="title-14">“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. ”</p>
                    <div class="icon-14"></div>
                    <div>
                        <div class="img-us">
                            <img src="./images/us-1.png" alt="">
                        </div>
                        <span class="your-name">
                            <div class="name">Benjamin Bennett</div>
                            <div class="job">Sales Manager</div>
                        </span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <p class="title-14">“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. ”</p>
                    <div class="icon-14"></div>
                    <div>
                        <div class="img-us">
                            <img src="./images/us-2.png" alt="">
                        </div>
                        <span class="your-name">
                            <div class="name">Luis Marshall</div>
                            <div class="job">Sales Consultant</div>
                        </span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <p class="title-14">“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. ”</p>
                    <div class="icon-14"></div>
                    <div>
                        <div class="img-us">
                            <img src="./images/us-3.png" alt="">
                        </div>
                        <span class="your-name">
                            <div class="name">Jack Gilbert</div>
                            <div class="job">Store Manager</div>
                        </span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <p class="title-14">“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. ”</p>
                    <div class="icon-14"></div>
                    <div>
                        <div class="img-us">
                            <img src="./images/us-1.png" alt="">
                        </div>
                        <span class="your-name">
                            <div class="name">Jack Gilbert</div>
                            <div class="job">Store Manager</div>
                        </span>
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>
<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 3,
        spaceBetween: 30,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
</script>