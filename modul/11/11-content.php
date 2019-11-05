<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-13">
    <div class="container">
        <div class="content">
            <div class="page-title"> 
                <div class="page-title-innner flex-row">
                    <div class="flex-col flex-grow">
                        <h1 class="entry-title uppercase mb-0">Portfolio</h1>
                    </div>
                </div>    
            </div>    
            <div class="col-6 col-xs-6 col-sm-6 col-md-6 col-lg-6 div-nav">
                <nav class="navbar navbar-default" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->          
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active" id="all"><a href="#" data-filter="[data-id]"><span>Hot Releases</span></a></li>
                            <li><a href="#  " data-filter="[data-id*='Design']"><span>Featured</span></a></li>
                            <li><a href="#" data-filter="[data-id*='Lookbook']"><span>Popular</span></a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>
            </div>
            <div class="row grids">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 grid-col" data-id="Lookbook">
                    <div class="thumbnail">                   
                        <div class="comporter">
                            <div class="category">
                                <a href="#">Laptop & Tablet</a>
                            </div>
                            <div class="compare">
                                <a href="#"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="hinh">
                            <img src="./images/h1-product-1-800x600.jpg">
                        </div>
                        <div class="price">
                            <i id="star" class="fa fa-star"></i>
                            <h5>
                                <a href="#">Apple MacBook Pro With Touch Bar MF841DSN/A 13″</a>
                            </h5>
                            <div class="price">
                                <span class="gia">$999</span>
                                <a href="#"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 grid-col" data-id="Design">
                    <div class="thumbnail">                   
                        <div class="comporter">
                            <div class="category">
                                <a href="#">Laptop & Tablet</a>
                            </div>
                            <div class="compare">
                                <a href="#"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="hinh">
                            <img src="./images/h1-product-2-800x600.jpg">
                        </div>
                        <div class="price">
                            <i id="star" class="fa fa-star"></i>
                            <h5>
                                <a href="#">Apple MacBook Pro With Touch Bar MF841DSN/A 13″</a>
                            </h5>
                            <div class="price">
                                <span class="gia">$999</span>
                                <a href="#"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 grid-col" data-id="Design">
                    <div class="thumbnail">                   
                        <div class="comporter">
                            <div class="category">
                                <a href="#">Laptop & Tablet</a>
                            </div>
                            <div class="compare">
                                <a href="#"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="hinh">
                            <img src="./images/h1-product-3-800x600.jpg">
                        </div>
                        <div class="price">
                            <i id="star" class="fa fa-star"></i>
                            <h5>
                                <a href="#">Apple MacBook Pro With Touch Bar MF841DSN/A 13″</a>
                            </h5>
                            <div class="price">
                                <span class="gia">$999</span>
                                <a href="#"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 grid-col" data-id="Design">
                    <div class="thumbnail">                   
                        <div class="comporter">
                            <div class="category">
                                <a href="#">Laptop & Tablet</a>
                            </div>
                            <div class="compare">
                                <a href="#"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="hinh">
                            <img src="./images/h1-product-4-800x600.jpg">
                        </div>
                        <div class="price">
                            <i id="star" class="fa fa-star"></i>
                            <h5>
                                <a href="#">Apple MacBook Pro With Touch Bar MF841DSN/A 13″</a>
                            </h5>
                            <div class="price">
                                <span class="gia">$999</span>
                                <a href="#"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 grid-col" data-id="Design">
                    <div class="thumbnail">                   
                        <div class="comporter">
                            <div class="category">
                                <a href="#">Laptop & Tablet</a>
                            </div>
                            <div class="compare">
                                <a href="#"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="hinh">
                            <img src="./images/h1-product-5-800x600.jpg">
                        </div>
                        <div class="price">
                            <i id="star" class="fa fa-star"></i>
                            <h5>
                                <a href="#">Apple MacBook Pro With Touch Bar MF841DSN/A 13″</a>
                            </h5>
                            <div class="price">
                                <span class="gia">$999</span>
                                <a href="#"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 grid-col" data-id="Design">
                    <div class="thumbnail">                   
                        <div class="comporter">
                            <div class="category">
                                <a href="#">Laptop & Tablet</a>
                            </div>
                            <div class="compare">
                                <a href="#"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="hinh">
                            <img src="./images/h1-product-6-800x600.jpg">
                        </div>
                        <div class="price">
                            <i id="star" class="fa fa-star"></i>
                            <h5>
                                <a href="#">Apple MacBook Pro With Touch Bar MF841DSN/A 13″</a>
                            </h5>
                            <div class="price">
                                <span class="gia">$999</span>
                                <a href="#"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                            
                        </div>
                    </div>  
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 grid-col" data-id="Design">
                    <div class="thumbnail">                   
                        <div class="comporter">
                            <div class="category">
                                <a href="#">Laptop & Tablet</a>
                            </div>
                            <div class="compare">
                                <a href="#"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="hinh">
                            <img src="./images/h1-product-7-800x600.jpg">
                        </div>
                        <div class="price">
                            <i id="star" class="fa fa-star"></i>
                            <h5>
                                <a href="#">Apple MacBook Pro With Touch Bar MF841DSN/A 13″</a>
                            </h5>
                            <div class="price">
                                <span class="gia">$999</span>
                                <a href="#"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 grid-col" data-id="Lookbook">
                    <div class="thumbnail">                   
                        <div class="comporter">
                            <div class="category">
                                <a href="#">Laptop & Tablet</a>
                            </div>
                            <div class="compare">
                                <a href="#"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="hinh">
                            <img src="./images/h1-product-8-800x600.jpg">
                        </div>
                        <div class="price">
                            <i id="star" class="fa fa-star"></i>
                            <h5>
                                <a href="#">Apple MacBook Pro With Touch Bar MF841DSN/A 13″</a>
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


