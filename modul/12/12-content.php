<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-12">
    <div class="mkd-content-inner">
        <img src="./images/background.jpg" alt="background">
        <div class="page-title">
            <div class="mkd-title-info">
                <h1 class="page-title">About us</h1>
            </div>
            <div class="url-info">
               <a href="#"> Home </a>
               <span>/ About us</span>

            </div>
        </div>
    </div>
</div>