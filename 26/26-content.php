<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-26">
    <div class="container collas">
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- BRAND -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#alignment-example" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- COLLAPSIBLE NAVBAR -->
                <div class="collapse navbar-collapse" id="alignment-example">

                    <!-- Links -->
                    <ul class="nav navbar-nav">
                        <li> <a href="#" id="des">Hot Releases</a></li>
                        <li> <a href="#" id="rev">Featured</a></li>
                        <li> <a href="#" id="ship">Popular</a></li>
                    </ul>
                </div>
            </div>
            <div class="border"></div>
        </nav>

        <!-- description -->

        <div id="footwear" class="style-all">
            <div class="product-item ">
                <!-- product1 -->
                <div class="row ">
                    <div class="col-md-3 col-sm-6">

                        <div class="thumbnail">
                            <div class="comporter">
                                <div class="category">
                                    <a href="#">Laptop & Tablet</a>
                                </div>
                                <div class="compare">
                                    <a href="#"><i class="fa fa-list"></i></a>
                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                            <div class="hinh">
                                <a href="#">
                                    <img src="../1108/images/h1-product-1-800x600.jpg">
                                </a>
                            </div>
                            <div class="price-cmt">
                                <i id="star" class="fa fa-star"></i>
                                <h5>
                                        <a href="#">Apple MacBook Pro With Touch Bar MF841DSN/A 13?</a>
                                    </h5>
                                <div class="price">
                                    <span class="gia">$999</span>
                                    <a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">

                            <div class="comporter">
                                <div class="category">
                                    <a href="#">Laptop & Tablet</a>
                                </div>
                                <div class="compare">
                                    <a href="#"><i class="fa fa-list"></i></a>
                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                            <div class="hinh">
                                <a href="#"> <img src="../1108/images/h1-product-2-800x600.jpg"></a>
                            </div>
                            <div class="price-cmt">
                                <i id="star" class="fa fa-star"></i>
                                <h5>
                                        <a href="#">Apple MacBook Pro With Touch Bar MF841DSN/A 13?</a>
                                    </h5>
                                <div class="price">
                                    <span class="gia">$999</span>
                                    <a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">

                            <div class="comporter">
                                <div class="category">
                                    <a href="#">Laptop & Tablet</a>
                                </div>
                                <div class="compare">
                                    <a href="#"><i class="fa fa-list"></i></a>
                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                            <div class="hinh">
                                <a href="#"> <img src="../1108/images/h1-product-3-800x600.jpg"></a>

                            </div>
                            <div class="price-cmt">
                                <i id="star" class="fa fa-star"></i>
                                <h5>
                                        <a href="#">Apple MacBook Pro With Touch Bar MF841DSN/A 13?</a>
                                    </h5>
                                <div class="price">
                                    <span class="gia">$999</span>
                                    <a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="border-none">
                            <div class="thumbnail">

                                <div class="comporter">
                                    <div class="category">
                                        <a href="#">Laptop & Tablet</a>
                                    </div>
                                    <div class="compare">
                                        <a href="#"><i class="fa fa-list"></i></a>
                                        <a href="#"><i class="fa fa-heart-o"></i></a>
                                    </div>
                                </div>
                                <div class="hinh">
                                    <a href="#"><img src="../1108/images/h1-product-4-800x600.jpg"></a>
                                </div>
                                <div class="price-cmt">
                                    <i id="star" class="fa fa-star"></i>
                                    <h5>
                                                <a href="#">Apple MacBook Pro With Touch Bar MF841DSN/A 13?</a>
                                            </h5>
                                    <div class="price">
                                        <span class="gia">$999</span>
                                        <a href="#"> <i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product2 -->
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">

                            <div class="comporter">
                                <div class="category">
                                    <a href="#">Laptop & Tablet</a>
                                </div>
                                <div class="compare">
                                    <a href="#"><i class="fa fa-list"></i></a>
                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                            <div class="hinh">
                                <a href="#"> <img src="../1108/images/h1-product-5-800x600.jpg"></a>
                            </div>
                            <div class="price-cmt">
                                <i id="star" class="fa fa-star"></i>
                                <h5>
                                        <a href="#">Apple MacBook Pro With Touch Bar MF841DSN/A 13?</a>
                                    </h5>
                                <div class="price">
                                    <span class="gia">$999</span>
                                    <a href="#"> <i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">

                            <div class="comporter">
                                <div class="category">
                                    <a href="#">Laptop & Tablet</a>
                                </div>
                                <div class="compare">
                                    <a href="#"><i class="fa fa-list"></i></a>
                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                            <div class="hinh">
                                <a href="#"> <img src="../1108/images/h1-product-6-800x600.jpg"></a>
                            </div>
                            <div class="price">
                                <i id="star" class="fa fa-star"></i>
                                <h5>
                                        <a href="#">Apple MacBook Pro With Touch Bar MF841DSN/A 13?</a>
                                    </h5>
                                <div class="price">
                                    <span class="gia">$999</span>
                                    <a href="#"> <i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">

                            <div class="comporter">
                                <div class="category">
                                    <a href="#">Laptop & Tablet</a>
                                </div>
                                <div class="compare">
                                    <a href="#"><i class="fa fa-list"></i></a>
                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                            <div class="hinh">
                                <a href="#"> <img src="../1108/images/h1-product-7-800x600.jpg"></a>
                            </div>
                            <div class="price">
                                <i id="star" class="fa fa-star"></i>
                                <h5>
                                        <a href="#">Apple MacBook Pro With Touch Bar MF841DSN/A 13?</a>
                                    </h5>
                                <div class="price">
                                    <span class="gia">$999</span>
                                    <a href="#"> <i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="border-none">
                            <div class="thumbnail">

                                <div class="comporter">
                                    <div class="category">
                                        <a href="#">Laptop & Tablet</a>
                                    </div>
                                    <div class="compare">
                                        <a href="#"><i class="fa fa-list"></i></a>
                                        <a href="#"><i class="fa fa-heart-o"></i></a>
                                    </div>
                                </div>
                                <div class="hinh">
                                    <a href="#"><img src="../1108/images/h1-product-4-800x600.jpg"></a>
                                </div>
                                <div class="price-cmt">
                                    <i id="star" class="fa fa-star"></i>
                                    <h5>
                                                <a href="#">Apple MacBook Pro With Touch Bar MF841DSN/A 13?</a>
                                            </h5>
                                    <div class="price">
                                        <span class="gia">$999</span>
                                        <a href="#"> <i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- reviews -->

        <div id="review" class="style-rev">
            <div class="product-item under">
                <!-- product-1-2 -->
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <div class="comporter">
                                <div class="category">
                                    <a href="#">Laptop & Tablet</a>
                                </div>
                                <div class="compare">
                                    <a href="#"><i class="fa fa-list"></i></a>
                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                            <div class="hinh">
                                <a href="#">
                                    <img src="../1108/images/h1-product-1-800x600.jpg">
                                </a>
                            </div>
                            <div class="price-cmt">
                                <i id="star" class="fa fa-star"></i>
                                <h5>
                                        <a href="#">Apple MacBook Pro With Touch Bar MF841DSN/A 13?</a>
                                    </h5>
                                <div class="price">
                                    <span class="gia">$999</span>
                                    <a href="#"> <i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">

                            <div class="comporter">
                                <div class="category">
                                    <a href="#">Laptop & Tablet</a>
                                </div>
                                <div class="compare">
                                    <a href="#"><i class="fa fa-list"></i></a>
                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                            <div class="hinh">
                                <a href="#"> <img src="../1108/images/h1-product-1-800x600.jpg"></a>
                            </div>
                            <div class="price-cmt">
                                <i id="star" class="fa fa-star"></i>
                                <h5>
                                        <a href="#">Apple MacBook Pro With Touch Bar MF841DSN/A 13?</a>
                                    </h5>
                                <div class="price">
                                    <span class="gia">$999</span>
                                    <a href="#"> <i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">

                            <div class="comporter">
                                <div class="category">
                                    <a href="#">Laptop & Tablet</a>
                                </div>
                                <div class="compare">
                                    <a href="#"><i class="fa fa-list"></i></a>
                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                            <div class="hinh">
                                <a href="#"> <img src="../1108/images/h1-product-1-800x600.jpg"></a>

                            </div>
                            <div class="price-cmt">
                                <i id="star" class="fa fa-star"></i>
                                <h5>
                                        <a href="#">Apple MacBook Pro With Touch Bar MF841DSN/A 13?</a>
                                    </h5>
                                <div class="price">
                                    <span class="gia">$999</span>
                                    <a href="#" class="icon"> <i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="border-none">
                            <div class="thumbnail">

                                <div class="comporter">
                                    <div class="category">
                                        <a href="#">Laptop & Tablet</a>
                                    </div>
                                    <div class="compare">
                                        <a href="#"><i class="fa fa-list"></i></a>
                                        <a href="#"><i class="fa fa-heart-o"></i></a>
                                    </div>
                                </div>
                                <div class="hinh">
                                    <a href="#"><img src="../1108/images/h1-product-4-800x600.jpg"></a>
                                </div>
                                <div class="price-cmt">
                                    <i id="star" class="fa fa-star"></i>
                                    <h5>
                                                <a href="#">Apple MacBook Pro With Touch Bar MF841DSN/A 13?</a>
                                            </h5>
                                    <div class="price">
                                        <span class="gia">$999</span>
                                        <a href="#"> <i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product-2-2 -->
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">

                            <div class="comporter">
                                <div class="category">
                                    <a href="#">Laptop & Tablet</a>
                                </div>
                                <div class="compare">
                                    <a href="#"><i class="fa fa-list"></i></a>
                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                            <div class="hinh">
                                <a href="#"> <img src="../1108/images/h1-product-1-800x600.jpg"></a>
                            </div>
                            <div class="price-cmt">
                                <i id="star" class="fa fa-star"></i>
                                <h5>
                                        <a href="#">Apple MacBook Pro With Touch Bar MF841DSN/A 13?</a>
                                    </h5>
                                <div class="price">
                                    <span class="gia">$999</span>
                                    <a href="#"> <i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">

                            <div class="comporter">
                                <div class="category">
                                    <a href="#">Laptop & Tablet</a>
                                </div>
                                <div class="compare">
                                    <a href="#"><i class="fa fa-list"></i></a>
                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                            <div class="hinh">
                                <a href="#"> <img src="../1108/images/h1-product-6-800x600.jpg"></a>
                            </div>
                            <div class="price">
                                <i id="star" class="fa fa-star"></i>
                                <h5>
                                        <a href="#">Apple MacBook Pro With Touch Bar MF841DSN/A 13?</a>
                                    </h5>
                                <div class="price">
                                    <span class="gia">$999</span>
                                    <a href="#"> <i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">

                            <div class="comporter">
                                <div class="category">
                                    <a href="#">Laptop & Tablet</a>
                                </div>
                                <div class="compare">
                                    <a href="#"><i class="fa fa-list"></i></a>
                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                            <div class="hinh">
                                <a href="#"> <img src="../1108/images/h1-product-7-800x600.jpg"></a>
                            </div>
                            <div class="price">
                                <i id="star" class="fa fa-star"></i>
                                <h5>
                                        <a href="#">Apple MacBook Pro With Touch Bar MF841DSN/A 13?</a>
                                    </h5>
                                <div class="price">
                                    <span class="gia">$999</span>
                                    <a href="#"> <i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="border-none">
                            <div class="thumbnail">

                                <div class="comporter">
                                    <div class="category">
                                        <a href="#">Laptop & Tablet</a>
                                    </div>
                                    <div class="compare">
                                        <a href="#"><i class="fa fa-list"></i></a>
                                        <a href="#"><i class="fa fa-heart-o"></i></a>
                                    </div>
                                </div>
                                <div class="hinh">
                                    <a href="#"><img src="../1108/images/h1-product-4-800x600.jpg"></a>
                                </div>
                                <div class="price-cmt">
                                    <i id="star" class="fa fa-star"></i>
                                    <h5>
                                                <a href="#">Apple MacBook Pro With Touch Bar MF841DSN/A 13?</a>
                                            </h5>
                                    <div class="price">
                                        <span class="gia">$999</span>
                                        <a href="#"> <i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- shipping -->
        <div id="deliver" class="style-ship">
            <div class="product-item">
                <!-- product-1-3 -->
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <div class="comporter">
                                <div class="category">
                                    <a href="#">Laptop & Tablet</a>
                                </div>
                                <div class="compare">
                                    <a href="#"><i class="fa fa-list"></i></a>
                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                            <div class="hinh">
                                <a href="#">
                                    <img src="../1108/images/h1-product-1-800x600.jpg">
                                </a>
                            </div>
                            <div class="price-cmt">
                                <i id="star" class="fa fa-star"></i>
                                <h5>
                                        <a href="#">Apple MacBook Pro With Touch Bar MF841DSN/A 13?</a>
                                    </h5>
                                <div class="price">
                                    <span class="gia">$999</span>
                                    <a href="#" class="icon"><i id="cart" class="fa fa-shopping-cart"></i></a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">

                            <div class="comporter">
                                <div class="category">
                                    <a href="#">Laptop & Tablet</a>
                                </div>
                                <div class="compare">
                                    <a href="#"><i class="fa fa-list"></i></a>
                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                            <div class="hinh">
                                <a href="#"> <img src="../1108/images/h1-product-2-800x600.jpg"></a>
                            </div>
                            <div class="price-cmt">
                                <i id="star" class="fa fa-star"></i>
                                <h5>
                                        <a href="#">Apple MacBook Pro With Touch Bar MF841DSN/A 13?</a>
                                    </h5>
                                <div class="price">
                                    <span class="gia">$999</span>
                                    <a href="#" class="icon"><i id="cart" class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">

                            <div class="comporter">
                                <div class="category">
                                    <a href="#">Laptop & Tablet</a>
                                </div>
                                <div class="compare">
                                    <a href="#"><i class="fa fa-list"></i></a>
                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                            <div class="hinh">
                                <a href="#"> <img src="../1108/images/h1-product-3-800x600.jpg"></a>

                            </div>
                            <div class="price-cmt">
                                <i id="star" class="fa fa-star"></i>
                                <h5>
                                        <a href="#">Apple MacBook Pro With Touch Bar MF841DSN/A 13?</a>
                                    </h5>
                                <div class="price">
                                    <span class="gia">$999</span>
                                    <a href="#" class="icon"><i id="cart" class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="border-none">
                            <div class="thumbnail">

                                <div class="comporter">
                                    <div class="category">
                                        <a href="#">Laptop & Tablet</a>
                                    </div>
                                    <div class="compare">
                                        <a href="#"><i class="fa fa-list"></i></a>
                                        <a href="#"><i class="fa fa-heart-o"></i></a>
                                    </div>
                                </div>
                                <div class="hinh">
                                    <a href="#"><img src="../1108/images/h1-product-4-800x600.jpg"></a>
                                </div>
                                <div class="price-cmt">
                                    <i id="star" class="fa fa-star"></i>
                                    <h5>
                                                <a href="#">Apple MacBook Pro With Touch Bar MF841DSN/A 13?</a>
                                            </h5>
                                    <div class="price">
                                        <span class="gia">$999</span>
                                        <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product-2-3 -->
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">

                            <div class="comporter">
                                <div class="category">
                                    <a href="#">Laptop & Tablet</a>
                                </div>
                                <div class="compare">
                                    <a href="#"><i class="fa fa-list"></i></a>
                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                            <div class="hinh">
                                <a href="#"> <img src="../1108/images/h1-product-5-800x600.jpg"></a>
                            </div>
                            <div class="price-cmt">
                                <i id="star" class="fa fa-star"></i>
                                <h5>
                                        <a href="#">Apple MacBook Pro With Touch Bar MF841DSN/A 13?</a>
                                    </h5>
                                <div class="price">
                                    <span class="gia">$999</span>
                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">

                            <div class="comporter">
                                <div class="category">
                                    <a href="#">Laptop & Tablet</a>
                                </div>
                                <div class="compare">
                                    <a href="#"><i class="fa fa-list"></i></a>
                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                            <div class="hinh">
                                <a href="#"> <img src="../1108/images/h1-product-6-800x600.jpg"></a>
                            </div>
                            <div class="price">
                                <i id="star" class="fa fa-star"></i>
                                <h5>
                                        <a href="#">Apple MacBook Pro With Touch Bar MF841DSN/A 13?</a>
                                    </h5>
                                <div class="price">
                                    <span class="gia">$999</span>
                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">

                            <div class="comporter">
                                <div class="category">
                                    <a href="#">Laptop & Tablet</a>
                                </div>
                                <div class="compare">
                                    <a href="#"><i class="fa fa-list"></i></a>
                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                            <div class="hinh">
                                <a href="#"> <img src="../1108/images/h1-product-7-800x600.jpg"></a>
                            </div>
                            <div class="price">
                                <i id="star" class="fa fa-star"></i>
                                <h5>
                                        <a href="#">Apple MacBook Pro With Touch Bar MF841DSN/A 13?</a>
                                    </h5>
                                <div class="price">
                                    <span class="gia">$999</span>
                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="border-none">
                            <div class="thumbnail">

                                <div class="comporter">
                                    <div class="category">
                                        <a href="#">Laptop & Tablet</a>
                                    </div>
                                    <div class="compare">
                                        <a href="#"><i class="fa fa-list"></i></a>
                                        <a href="#"><i class="fa fa-heart-o"></i></a>
                                    </div>
                                </div>
                                <div class="hinh">
                                    <a href="#"><img src="../1108/images/h1-product-4-800x600.jpg"></a>
                                </div>
                                <div class="price-cmt">
                                    <i id="star" class="fa fa-star"></i>
                                    <h5>
                                                <a href="#">Apple MacBook Pro With Touch Bar MF841DSN/A 13?</a>
                                            </h5>
                                    <div class="price">
                                        <span class="gia">$999</span>
                                        <a href="#"><i class="fa fa-shopping-cart"></i></a>
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