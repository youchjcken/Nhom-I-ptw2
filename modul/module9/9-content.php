<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-module3">
    <div class="container">
        <div class="title-3">
            <h4>Music, Movies & Video Games</h4>
            <span class="aa"><a href="#">See All Products ></a> </span>
            <div class="seee"></div>
        </div>
        <div class="row">
            <div class="sanpham">
                <div class="col-md-4 rd">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="./images/book1.jpg" alt="b1">
                        </div>
                        <div class="col-md-6 center-3">
                            <div class="book3-1">
                                <a href="#"> Movies,Music&Videos</a>
                            </div>
                            <div class="book3-2">
                                <a href="#">Children’s Movie Part 3, Documentary</a>
                            </div>
                            <div class="pay">$19</div>
                        </div>
                        <div class="col-md-3">
                            <div class="icon-3"><a href="#"></a></div>
                            <div class="icon-4"> <a href="#"></a></div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 rd">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="./images/book2.jpg" alt="b1">
                        </div>
                        <div class="col-md-6 center-3">
                            <div class="book3-1">
                                <a href="#"> Movies,Music&Videos</a>
                            </div>
                            <div class="book3-2">
                                <a href="#">Animated Movie, Foreign Language</a>
                            </div>
                            <div class="pay">$14</div>
                        </div>
                        <div class="col-md-3">
                            <div class="icon-3"><a href="#"></a></div>
                            <div class="icon-4"> <a href="#"></a></div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 rdd">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="./images/book3.jpg" alt="b1">
                        </div>
                        <div class="col-md-6 center-4">
                            <div class="book3-1">
                                <a href="#"> Movies</a>
                            </div>
                            <div class="book3-2">
                                <a href="#">New Action Movie, Cinematography</a>
                            </div>
                            <div class="pay">$22</div>
                        </div>
                        <div class="col-md-3">
                            <div class="icon-3"><a href="#"></a></div>

                            <div class="icon-4"> <a href="#"></a></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="sanpham">
                <div class="col-md-4 rd">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="./images/book4.jpg" alt="b1">
                        </div>
                        <div class="col-md-6 center-3">
                            <div class="book3-1">
                                <a href="#"> Movies</a>
                            </div>
                            <div class="book3-2">
                                <a href="#">Comedy Movie Part 2, Film Editing</a>
                            </div>
                            <div class="pay">$9</div>
                        </div>
                        <div class="col-md-3">
                            <div class="icon-3"><a href="#"></a></div>
                            <div class="icon-4"> <a href="#"></a></div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 rd">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="./images/book5.jpg" alt="b1">
                        </div>
                        <div class="col-md-6 center-3">
                            <div class="book3-1">
                                <a href="#"> Movies</a>
                            </div>
                            <div class="book3-2">
                                <a href="#">Drama Movie (Short Subject)</a>
                            </div>
                            <div class="pay">$16</div>
                        </div>
                        <div class="col-md-3">
                            <div class="icon-3"><a href="#"></a></div>
                            <div class="icon-4"> <a href="#"></a></div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 rdd">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="./images/book6.jpg" alt="b1">
                        </div>
                        <div class="col-md-6 center-4">
                            <div class="book3-1">
                                <a href="#"> Movies</a>
                            </div>
                            <div class="book3-2">
                                <a href="#">Mystery Movie, Documentary</a>
                            </div>
                            <div class="pay">$10</div>
                        </div>
                        <div class="col-md-3">
                            <div class="icon-3"><a href="#"></a></div>

                            <div class="icon-4"> <a href="#"></a></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>