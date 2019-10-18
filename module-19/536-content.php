<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-536">
    <div class="container mod">
        <div class="row">
            <div class="content">
                <div class="mosthot">
                    <div class=" vc_col-sm-4">
                        <div class="sidebar">
                            <div class="search">
                                <input type="search" value="" name="s" class="email" 
                                 placeholder="Search..." required="">
                                 <span class="icon"><i class="fa fa-search"></i></span>
                            </div>
                            <div class="category">
                                <div class="categories">
                                    <div class="s">
                                        <div class="border">
                                            <h4>Categories</h4>
                                        </div>
                                    </div>
                                    
                                </div>
                                <ul>
                                    <li class="a">
                                        <a href="#">Business</a>(5)
                                    </li>
                                    <li class="b">
                                        <a href="#">Design Trends</a>(1)
                                    </li>
                                    <li class="c">
                                        <a href="#">Lifestyle</a>(1)
                                    </li>
                                    <li class="d">
                                        <a href="#">Technology</a>(24)
                                    </li>
                                    <li class="e">
                                        <a href="#">UX Design</a>(2)
                                    </li>
                                </ul>
                                <div class="categories">
                                    <div class="s">
                                         <div class="border">
                                            <h4>Latest News</h4>
                                        </div>
                                    </div>
                                   
                                    <div  class="post-list">
                                            <div class="odd">
                                                <div class="item-avatar">
                                                    <a href="#" title="Green Food">
                                                        <img src="images/h1.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="item">
                                                    <div><a href="#">Don’t think big, think giant. </a></div>
                                                    <div>
                                                        <span>
                                                            <a href="">1 August, 2017 </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div  class="post-list2">
                                            <div class="odd">
                                                <div class="item-avatar2">
                                                    <a href="#" title="Green Food">
                                                        <img src="images/h2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="item2">
                                                    <div><a href="#">Details create the big picture. </a></div>
                                                    <div>
                                                        <span>
                                                            <a href="">2 August, 2017 </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div  class="post-list3">
                                            <div class="odd">
                                                <div class="item-avatar3">
                                                    <a href="#" title="Green Food">
                                                        <img src="images/h3.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="item3">
                                                    <div><a href="#">Together everyone achieves more. </a></div>
                                                    <div>
                                                        <span>
                                                            <a href="">
                                                                3 August, 2017 
                                                            </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>