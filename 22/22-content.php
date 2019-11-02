<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1107">
    
    <div class="container">
        <div class="row" style="background-image: url(../22/images/1.jpg);">
            <div class="thumnail">
                <img src="../22/images/1.jpg" >
            </div>
            <div class="thumnail">

                <div class="textsidebar">
                    <div class="text1">
                        <h1 class="tieude">Banner</h1>
                    </div>
                    <div class="text2">
                        <a class="mkd-current">Home</a>
                        <span class="mkd-delimiter">&nbsp; / &nbsp;</span>
                        <a class="mkd-current">Elements</a>
                        <span class="mkd-delimiter">&nbsp; / &nbsp;</span>
                        <span class="mkd-current">Banner</span>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
</div>

