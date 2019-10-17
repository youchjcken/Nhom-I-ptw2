<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-e-601">

    <div class="container rescure">
        <div class="row">
            <div class="col-md-12 list-items">
                <div class="nav1 rescure1">
                    <!--TAB-->
                    <ul class="nav nav-tabs">
                        <li><a data-toggle="tab" href="#menu1">All</a></li>
                        <li><a data-toggle="tab" href="#menu2">Smartphone</a></li>
                        <li><a data-toggle="tab" href="#menu3">Android</a></li>
                        <li><a data-toggle="tab" href="#menu4">Iphone</a></li>
                    </ul>
                    <!--/TAB-->
                    <!--ITEMS-->
                    <div class="tab-content">
                        <!--All-->
                        <div id="menu1" class="tab-pane fade in active">
                            <div class="related">
                                <div class="row products">
                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                         <div class="product-list-item">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="product-name">
                                                            <p><a href="#">Android</a></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">

                                                    </div>
                                                    <div class="row"></div>
                                                </div>
                                                <!--IMG-->
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="<?php echo $url_path ?>/images/h2.jpg" alt="" >
                                                    </a>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="end-product">
                                                            <h5>
                                                                <a href="#">LG K10 LTE Silver 16GB Contact Free Smartphone</a>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                   <div class="col-md-4">

                                                   </div>
                                                </div>
                                                
                                                <div class="end-price">
                                                    <span class="m-price">
                                                        $345
                                                    </span>
                                                </div>
                                                
                                            </div>
                                    </div>
                                    <!--/ITEM-->
                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                        <!-- ITEM-O-MID -->
                                        <div class="product-list-item-on-mid">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <!--IMG-->
                                                        <div class="image">
                                                            <a href="#">
                                                                <img src="<?php echo $url_path ?>/images/h3.jpg" alt="" >
                                                            </a>
                                                        </div>
                                                        <!--/IMG-->
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="row">
                                                            <div class="col-md-7">
                                                                <div class="product-name-1">
                                                                    <p><a href="#">IPhone</a></p>
                                                                </div>
                                                                <h5>
                                                                    <a href="#">Apple iPhone 6 4.7-Inch Black 128GB</a>
                                                                </h5> 
                                                                <span>$399</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <!-- /ITEM-ON-MID -->
                                            <!-- ITEM-UNDER-MID -->
                                            <div class="product-list-item-under-mid">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <!--IMG-->
                                                        <div class="image">
                                                            <a href="#">
                                                            <img src="<?php echo $url_path ?>/images/h5.jpg" alt="" >
                                                            </a>
                                                        </div>
                                                        <!--/IMG-->
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="row">
                                                            <div class="col-md-7">
                                                                <div class="new">
                                                                    <span>New</span>
                                                                </div>
                                                                <div class="product-name-1">
                                                                    <p><a href="#">IPhone</a></p>
                                                                </div>
                                                                <h5>
                                                                    <a href="#">Samsung Galaxy S8+ Black 64GB</a>
                                                                </h5> 
                                                                <span>$449</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                            <!-- ITEAM-UNDER-MID -->
                                    </div>
                                    <!--/ITEM-->
                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                        <!-- ITEM-ON-MID -->
                                        <div class="product-list-item-on-mid">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <!--IMG-->
                                                        <div class="image">
                                                            <a href="#">
                                                                <img src="<?php echo $url_path ?>/images/h4.jpg" alt="" >
                                                            </a>
                                                        </div>
                                                        <!--/IMG-->
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="row">
                                                            <div class="col-md-7">
                                                                <div class="product-name-1">
                                                                    <p><a href="#">IPhone</a></p>
                                                                </div>
                                                                <h5>
                                                                    <a href="#">Apple iPhone 6s 4.7-Inch Gold 64GB</a>
                                                                </h5> 
                                                                <span class="new">$449</span>
                                                                <h3>$499</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <!-- /ITEM-ON-MID -->
                                            <!-- ITEM-UNDER-MID -->
                                            <div class="product-list-item-under-mid">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <!--IMG-->
                                                        <div class="image">
                                                            <a href="#">
                                                            <img src="<?php echo $url_path ?>/images/h6.jpg" alt="" >
                                                            </a>
                                                        </div>
                                                        <!--/IMG-->
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="row">
                                                            <div class="col-md-7">
                                                                <div class="product-name-1">
                                                                    <p><a href="#">IPhone</a></p>
                                                                </div>
                                                                <h5>
                                                                    <a href="#">Apple iPhone 6 4.7-Inch Rose Gold 16GB</a>
                                                                </h5> 
                                                                <span>$349</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                            <!-- ITEAM-UNDER-MID -->
                                    </div>
                                    <!--/ITEM-->
                                </div>
                            </div>
                        </div>
                        <!--/ALL-->

                        <!--SMARTPHONE-->
                       <div id="menu2" class="tab-pane fade">
                            <div class="related">
                                <div class="row products">
                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                         <div class="product-list-item">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="product-name">
                                                            <p><a href="#">Android</a></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">

                                                    </div>
                                                    <div class="row"></div>
                                                </div>
                                                <!--IMG-->
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="<?php echo $url_path ?>/images/h2.jpg" alt="" >
                                                    </a>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="end-product">
                                                            <h5>
                                                                <a href="#">LG K10 LTE Silver 16GB Contact Free Smartphone</a>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                   <div class="col-md-4">

                                                   </div>
                                                </div>
                                                
                                                <div class="end-price">
                                                    <span class="m-price">
                                                        $345
                                                    </span>
                                                </div>
                                                
                                            </div>
                                    </div>
                                    <!--/ITEM-->
                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                        <!-- ITEM-O-MID -->
                                        <div class="product-list-item-on-mid">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <!--IMG-->
                                                        <div class="image">
                                                            <a href="#">
                                                                <img src="<?php echo $url_path ?>/images/h3.jpg" alt="" >
                                                            </a>
                                                        </div>
                                                        <!--/IMG-->
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="row">
                                                            <div class="col-md-7">
                                                                <div class="product-name-1">
                                                                    <p><a href="#">IPhone</a></p>
                                                                </div>
                                                                <h5>
                                                                    <a href="#">Apple iPhone 6 4.7-Inch Black 128GB</a>
                                                                </h5> 
                                                                <span>$399</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <!-- /ITEM-ON-MID -->
                                            <!-- ITEM-UNDER-MID -->
                                            <div class="product-list-item-under-mid">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <!--IMG-->
                                                        <div class="image">
                                                            <a href="#">
                                                            <img src="<?php echo $url_path ?>/images/h5.jpg" alt="" >
                                                            </a>
                                                        </div>
                                                        <!--/IMG-->
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="row">
                                                            <div class="col-md-7">
                                                                <div class="new">
                                                                    <span>New</span>
                                                                </div>
                                                                <div class="product-name-1">
                                                                    <p><a href="#">IPhone</a></p>
                                                                </div>
                                                                <h5>
                                                                    <a href="#">Samsung Galaxy S8+ Black 64GB</a>
                                                                </h5> 
                                                                <span>$449</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                            <!-- ITEAM-UNDER-MID -->
                                    </div>
                                    <!--/ITEM-->
                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                        <!-- ITEM-O-MID -->
                                        <div class="product-list-item-on-mid">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <!--IMG-->
                                                        <div class="image">
                                                            <a href="#">
                                                                <img src="<?php echo $url_path ?>/images/h4.jpg" alt="" >
                                                            </a>
                                                        </div>
                                                        <!--/IMG-->
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="row">
                                                            <div class="col-md-7">
                                                                <div class="product-name-1">
                                                                    <p><a href="#">IPhone</a></p>
                                                                </div>
                                                                <h5>
                                                                    <a href="#">Apple iPhone 6s 4.7-Inch Gold 64GB</a>
                                                                </h5> 
                                                                <span class="new">$449</span>
                                                                <h3>$499</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <!-- /ITEM-ON-MID -->
                                            <!-- ITEM-UNDER-MID -->
                                            <div class="product-list-item-under-mid">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <!--IMG-->
                                                        <div class="image">
                                                            <a href="#">
                                                            <img src="<?php echo $url_path ?>/images/h6.jpg" alt="" >
                                                            </a>
                                                        </div>
                                                        <!--/IMG-->
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="row">
                                                            <div class="col-md-7">
                                                                <div class="product-name-1">
                                                                    <p><a href="#">IPhone</a></p>
                                                                </div>
                                                                <h5>
                                                                    <a href="#">Apple iPhone 6 4.7-Inch Rose Gold 16GB</a>
                                                                </h5> 
                                                                <span>$349</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                            <!-- ITEAM-UNDER-MID -->
                                    </div>
                                    <!--/ITEM-->
                                </div>
                            </div>
                        </div>
                        <!--/SMARTPHONE-->

                        <!--ANDROID-->
                       <div id="menu3" class="tab-pane fade">
                            <div class="related">
                                <div class="row products">
                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                         <div class="product-list-item">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="product-name">
                                                            <p><a href="#">Android</a></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">

                                                    </div>
                                                    <div class="row"></div>
                                                </div>
                                                <!--IMG-->
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="<?php echo $url_path ?>/images/h2.jpg" alt="" >
                                                    </a>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="end-product">
                                                            <h5>
                                                                <a href="#">LG K10 LTE Silver 16GB Contact Free Smartphone</a>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                   <div class="col-md-4">

                                                   </div>
                                                </div>
                                                
                                                <div class="end-price">
                                                    <span class="m-price">
                                                        $345
                                                    </span>
                                                </div>
                                                
                                            </div>
                                    </div>
                                    <!--/ITEM-->
                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                        <!-- ITEM-O-MID -->
                                        <div class="product-list-item-on-mid">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <!--IMG-->
                                                        <div class="image">
                                                            <a href="#">
                                                                <img src="<?php echo $url_path ?>/images/h3.jpg" alt="" >
                                                            </a>
                                                        </div>
                                                        <!--/IMG-->
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="row">
                                                            <div class="col-md-7">
                                                                <div class="product-name-1">
                                                                    <p><a href="#">IPhone</a></p>
                                                                </div>
                                                                <h5>
                                                                    <a href="#">Apple iPhone 6 4.7-Inch Black 128GB</a>
                                                                </h5> 
                                                                <span>$399</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <!-- /ITEM-ON-MID -->
                                    </div>
                                    <!--/ITEM-->
                                </div>
                            </div>
                        </div>
                        <!--/ANDROID-->

                        <!--IPHONE-->
                       <div id="menu4" class="tab-pane fade">
                            <div class="related">
                                <div class="row products">
                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                    <div class="product-list-item-on-mid">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <!--IMG-->
                                                        <div class="image">
                                                            <a href="#">
                                                                <img src="<?php echo $url_path ?>/images/h3.jpg" alt="" >
                                                            </a>
                                                        </div>
                                                        <!--/IMG-->
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="row">
                                                            <div class="col-md-7">
                                                                <div class="product-name-1">
                                                                    <p><a href="#">IPhone</a></p>
                                                                </div>
                                                                <h5>
                                                                    <a href="#">Apple iPhone 6 4.7-Inch Black 128GB</a>
                                                                </h5> 
                                                                <span>$399</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <!--/ITEM-->
                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                        <!-- ITEM-O-MID -->
                                        <div class="product-list-item-on-mid">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <!--IMG-->
                                                        <div class="image">
                                                            <a href="#">
                                                                <img src="<?php echo $url_path ?>/images/h3.jpg" alt="" >
                                                            </a>
                                                        </div>
                                                        <!--/IMG-->
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="row">
                                                            <div class="col-md-7">
                                                                <div class="product-name-1">
                                                                    <p><a href="#">IPhone</a></p>
                                                                </div>
                                                                <h5>
                                                                    <a href="#">Apple iPhone 6 4.7-Inch Black 128GB</a>
                                                                </h5> 
                                                                <span>$399</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <!-- /ITEM-ON-MID -->
                                    </div>
                                    <!--/ITEM-->
                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                        <!-- ITEM-O-MID -->
                                        <div class="product-list-item-on-mid">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <!--IMG-->
                                                        <div class="image">
                                                            <a href="#">
                                                                <img src="<?php echo $url_path ?>/images/h4.jpg" alt="" >
                                                            </a>
                                                        </div>
                                                        <!--/IMG-->
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="row">
                                                            <div class="col-md-7">
                                                                <div class="product-name-1">
                                                                    <p><a href="#">IPhone</a></p>
                                                                </div>
                                                                <h5>
                                                                    <a href="#">Apple iPhone 6s 4.7-Inch Gold 64GB</a>
                                                                </h5> 
                                                                <span class="new">$449</span>
                                                                <h3>$499</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <!-- /ITEM-ON-MID -->
                                    </div>
                                    <!--/ITEM-->
                                </div>
                            </div>
                        </div> 
                    </div>
                    <!--/ITEMS-->
                </div>
            </div>
            <!--/END COL-MD-12-->
        </div>
        <!--/END ROW-->
    </div>
    <!--/END CONTAINER-->
</div>
