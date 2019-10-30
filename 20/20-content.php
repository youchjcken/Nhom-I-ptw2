<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-3">
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
                    <div class="mory-magin">
                    <div class="mort">
                        <div class="data">
                            <a href="#">
                                <div class="date-day1">9 </div>
                                <div class="date-month1">Aug </div>
                            </a>
                        </div>
                    <div class="post-images">
                        <a href="#">
                            <img id="hinh2" src="./images/blog-post-2.jpg">
                        </a>
                    </div>
                    </div>
                    <div class="post-mast">
                        <h2>
                            <a class="po-ti" href="#">Every accomplishment starts with a decision to try. </a>
                        </h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisciium, placeraLorem ipsum dolor sit amet, consectetur adipiscing elit. nec vel mauris pretium, placerarci ipsum, feugiat eung elit. Nullam sed libero vel nisl pulvinar scelerisque. Donec vel mauris pretium, placerat Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed libero vel nisl pulvinar scelerisque. Donec vel mauris pretium, placera Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed libero vel nisl pulvinar scelerisque. Donec vel mauris pretium, placera Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed libero vel nisl pulvinar scelerisqueLorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed libero vel nisl pulvinar scelerisque. Donec vel mauris pretium, placeraLorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed libero vel nisl pulvinar scelerisque. Donec vel mauris pretium, placerarci ipsum, feugiat eu </p>
                        <span class="getdate"><i class="fa fa-calendar"><a href="#">9 August, 2017  </a></i></span>
                        
                        <a class="month" href="#">
                            
                            <span><i class="fa fa-heart"> 0 </i> </span>
                        </a>
                        <a class="year" href="#">
                            <span>
                                <i class="fa fa-comment" aria-hidden="true"> 3</i>
                            </span>
                            <span></span>
                        </a>
                    </div>
                </div>
                    
                </div>
                <div class="col-md-3">
                    <div class="more-img">
                                        <div class="sidebar-image">
                        <img id="backgourd" src="./images/pages-sidebar-banner.jpg">
                             <h2 class="size">Impossible is nothing.</h2>
                        <a href="#">Learn More</a>
                    </div>
                    <div class="tag-blog">
                        <div class="tag1">
                            <h4>Tag</h4>
                        </div>
                        <div class="tag2">
                            <a href="#" class="tag-cloud1" >Branding</a>
                            <a href="#" class="tag-cloud2" >Business</a>
                            <a href="#" class="tag-cloud3" >Gadgets</a>
                            <a href="#" class="tag-cloud4" >Goals</a>
                            <a href="#" class="tag-cloud5" >Modern</a>
                            <a href="#" class="tag-cloud6" >Music &amp; Sound</a>
                            <a href="#" class="tag-cloud7" >New</a>
                            <a href="#" class="tag-cloud8" >Time Management</a>
                            <a href="#" class="tag-cloud9" >Video</a></div>
                        </div>
                                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
