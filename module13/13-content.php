<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-13">
    <div class="container">
        <div class="about">
            <div class="row">
                <div class="col-md-4">
                    <div class="about-13"><img src="./images/about-1.jpg" alt="about1"></div>
                    <div class="iner">
                        <h2>Our Vision</h2>
                        <p class="in-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore magna aliqua consectetur adipisicing.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="about-13"><img src="./images/about-2.jpg" alt="about1"></div>
                    <div class="iner">
                        <h2>What We Do</h2>
                        <p class="in-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore magna aliqua consectetur adipisicing.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="about-13"><img src="./images/about-3.jpg" alt="about1"></div>
                    <div class="iner">
                        <h2>Company History</h2>
                        <p class="in-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore magna aliqua consectetur adipisicing.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>