<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-23">
    <div class="container">
        <div class="row">
            <div class="post-content">
                <div class="col-md-2">
                    <div class="information">
                        <div class="img1">
                            <a href="#"><img id="author-icon" src="./images/bcd2f176be070efa08d033b3819a0477_1.jpeg"></a>
                        </div>
                        <a href="#">Maria Keller</a>
                        <span>in</span>
                        <div class="infor-post">
                            <a id="ux" href="#">UX Design</a>
                            
                        </div>
                        <div class="border"></div>
                        <div class="blog-share">
                            <a href="#">
                                <i class="fa fa-share-alt"></i>
                                
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-7">
                    <div class="post-hoder">
                        <h2>
                            <a  href="#" class="title-post">The man who use his skill to see how much he can give for a dollar, instead of how little he can give for a dollar, is bound to succeed. </a>
                        </h2>
                        <span class="horly">Henry Ford </span>
                    </div>
                    <div class="post-mast">
                        
                        <span class="iconfor"><i class="fa fa-quote-right"></i></span>
                    </div>
                    
                </div>
                <div class="col-md-3"></div>
            </div>
            
        </div>
    </div>
</div>
