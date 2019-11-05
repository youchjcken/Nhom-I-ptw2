<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-18">
     <div class="container">
        <div class="row">
            <div class="post-content1">
                <div class="col-md-2">
                    <div class="information">
                        <div class="img1">
                            <a href="#"><img id="author-icon" src="./images/19.1.jpeg"></a>
                        </div>
                        <a href="#">Maria Keller</a>
                        <span>in</span>
                        <div class="infor-post">
                            <a id="ux" href="#">UX Design</a>
                        </div>
                        <div class="border"></div>
                        <div class="blog-share">
                            <div class="menu-button"><i class="fa fa-share-alt"></i>
                                <a href="#"><i class="fa fa-facebook-f"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                            <div class="share">
         
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-7">
                    <div class="mort">
                        <div class="data">
                        
                        </div>
                    <div class="post-images">
                        <a href="#">
                            <img id="hinh2" src="./images/19.2.jpg">
                        </a>
                    </div>
                    </div>
                    <div class="post-mast">
                        <h2>
                            <a class="po-ti" href="#">Every accomplishment starts with a decision to try. </a>
                        </h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed libero vel nisl pulvinar scelerisque. Donec vel mauris pretium, placerat sapien nec, vestibulum sapien. Nam interdum pellentesque augue id sollicitudin. Fusce eget mauris tellus. Vestibulum orci ipsum, feugiat eu </p>
                        <span class="getdate"><i class="fa fa-calendar"><a href="#"> 9 August, 2017  </a></i></span>
                        
                        <a class="month" href="#">
                            
                            <span><i class="fa fa-heart"> 0 </i> </span>
                        </a>
                        <a class="year" href="#">
                           <span><i class="fa fa-comment"> 3 </i></span>
                            <span></span>
                        </a>
                    </div>   
                </div>
            </div>
        </div>
    </div>
</div>