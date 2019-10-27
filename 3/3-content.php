<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3">
     <div class="container">
        <div class="custom">
            <div class="container">
                <div class="col-sm-12">
                    <div class="column-inner">
                        <div class="column">
                            <div class="item-content">
                                <h2 class="custom-font">Save Up to 40% Off</h2>
                                <h2 class="custom-font-2">On All Apple Products</h2>
                                <div class="space">
                                    <span class="empty-space"></span>
                                </div>
                                <a href="#"class="btn">
                                    <span class="btn-text">Shop Now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>