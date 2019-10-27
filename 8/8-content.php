<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-8">
    <div class="container"> <!-- start container -->
       <div class="products">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item active">
                  <a class="nav-link" id="tab-all" data-toggle="tab"
                     href="#content-all"
                     role="tab" aria-controls="content-all" aria-selected="true">All
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" id="tab-javascript" data-toggle="tab"
                     href="#content-javascript"
                     role="tab" aria-controls="content-javascript" aria-selected="false">
                    Smartphone
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" id="tab-css" data-toggle="tab"
                     href="#content-css"
                     role="tab" aria-controls="content-css" aria-selected="false">
                  Android
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link active" id="tab-bootstrap" data-toggle="tab"
                     href="#content-bootstrap"
                     role="tab" aria-controls="content-bootstrap" aria-selected="true">
                  iPhone
                  </a>
               </li>
               <!-- <li class="nav-border">
               </li> -->
            </ul>
                                 
            <div class="tab-content" id="myTabContent">
                <!-- All product -->
                <div class="tab-pane fade active in" id="content-all"
                  role="tabpanel" aria-labelledby="tab-all">
                  <div class="row product-content">
                      <div class="col-md-4 mobile-left">
                          <div class="left-product">
                            <div class="line-menu">
                              <a href="#">Android</a>
                              <div class="a-group">
                              <a href="#"><i class="fa fa-list"></i></a>
                              <a href="#"><i class="fa fa-heart-o"></i></a>
                              </div>
                            </div>
                            <img src="images/iphone-x-1.jpg" width="100%" class="img-responsive" alt="">
                            <h5 class="title-product line-one">
                                <a href="#">LG K10 LTE Silver 16GB Contact Free Smartphone</a>
                            </h5>
                            <div class="price">
                              <span>$345</span>
                              <a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                            </div>
                          </div>
                  
                      </div>
                      <div class="col-md-4 mobile-right">
                          <div class="right-product">
                            <div class="line-menu">
                              <a href="#">Android</a>
                              <div class="a-group">
                              <a href="#"><i class="fa fa-list"></i></a>
                              <a href="#"><i class="fa fa-heart-o"></i></a>
                              </div>
                            </div>
                            <div class="img-right">
                              <img src="images/samsung-china.jpg"  class="img-responsive">
                            </div>
                            <div class="info-product">
                              <a href="#">IPhone</a>
                              <span class="line-one">
                                <a href="#">Apple iPhone 6 4.7-Inch Black 128GB</a>
                              </span>
                              <br/><br/>
                              <div class="price">
                              <span>$345</span>
                              <a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                            </div>
                            </div>

                          </div>
                          <div class="right-product">
                            <div class="line-menu">
                              <a href="#">Android</a>
                              <div class="a-group">
                              <a href="#"><i class="fa fa-list"></i></a>
                              <a href="#"><i class="fa fa-heart-o"></i></a>
                              </div>
                            </div>
                            <div class="img-right">
                              <img src="images/motorona-china.jpg"  class="img-responsive">
                            </div>
                            <div class="info-product">
                              <a href="#">IPhone</a>
                              <span class="line-one">
                                <a href="#">Apple iPhone 6 4.7-Inch Black 128GB</a>
                              </span>
                              <br/><br/>
                              <div class="price">
                              <span>$345</span>
                              <a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                            </div>
                            </div>

                          </div>
                      </div>
                      <div class="col-md-4 mobile-right reset-pd">
                        <div class="right-product">
                            <div class="line-menu">
                              <a href="#">Android</a>
                              <div class="a-group">
                              <a href="#"><i class="fa fa-list"></i></a>
                              <a href="#"><i class="fa fa-heart-o"></i></a>
                              </div>
                            </div>
                            <div class="img-right">
                              <img src="images/iphone-6.jpg"  class="img-responsive">
                            </div>
                            <div class="info-product">
                              <a href="#">IPhone</a>
                              <span class="line-one">
                                <a href="#">Apple iPhone 6 4.7-Inch Black 128GB</a>
                              </span>
                              <br/><br/>
                              <div class="price">
                              <span>$345</span>
                              <a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                            </div>
                            </div>

                          </div>
                          <div class="right-product">
                            <div class="line-menu">
                              <a href="#">Android</a>
                              <div class="a-group">
                              <a href="#"><i class="fa fa-list"></i></a>
                              <a href="#"><i class="fa fa-heart-o"></i></a>
                              </div>
                            </div>
                            <div class="img-right">
                              <img src="images/ab-china.jpg"  class="img-responsive">
                            </div>
                            <div class="info-product">
                              <a href="#">IPhone</a>
                              <span class="line-one">
                                <a href="#">Apple iPhone 6 4.7-Inch Black 128GB</a>
                              </span>
                              <br/><br/>
                              <div class="price">
                              <span>$345</span>
                              <a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                            </div>
                            </div>

                          </div>
                      </div>
                    </div>
                </div>
                <!-- All product -->
                <div class="tab-pane fade" id="content-javascript"
                  role="tabpanel" aria-labelledby="tab-javascript">
                  <div class="row product-content">
                      <div class="col-md-4 mobile-left">
                          <div class="left-product">
                            <div class="line-menu">
                              <a href="#">Android</a>
                              <div class="a-group">
                              <a href="#"><i class="fa fa-list"></i></a>
                              <a href="#"><i class="fa fa-heart-o"></i></a>
                              </div>
                            </div>
                            <img src="images/iphone-x-1.jpg" width="100%" class="img-responsive" alt="">
                            <h5 class="title-product line-one">
                                <a href="#">LG K10 LTE Silver 16GB Contact Free Smartphone</a>
                            </h5>
                            <div class="price">
                              <span>$345</span>
                              <a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                            </div>
                          </div>
                  
                      </div>
                      <div class="col-md-4 mobile-right">
                          <div class="right-product">
                            <div class="line-menu">
                              <a href="#">Android</a>
                              <div class="a-group">
                              <a href="#"><i class="fa fa-list"></i></a>
                              <a href="#"><i class="fa fa-heart-o"></i></a>
                              </div>
                            </div>
                            <div class="img-right">
                              <img src="images/samsung-china.jpg"  class="img-responsive">
                            </div>
                            <div class="info-product">
                              <a href="#">IPhone</a>
                              <span class="line-one">
                                <a href="#">Apple iPhone 6 4.7-Inch Black 128GB</a>
                              </span>
                              <br/><br/>
                              <div class="price">
                              <span>$345</span>
                              <a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                            </div>
                            </div>

                          </div>
                          <div class="right-product">
                            <div class="line-menu">
                              <a href="#">Android</a>
                              <div class="a-group">
                              <a href="#"><i class="fa fa-list"></i></a>
                              <a href="#"><i class="fa fa-heart-o"></i></a>
                              </div>
                            </div>
                            <div class="img-right">
                              <img src="images/motorona-china.jpg"  class="img-responsive">
                            </div>
                            <div class="info-product">
                              <a href="#">IPhone</a>
                              <span class="line-one">
                                <a href="#">Apple iPhone 6 4.7-Inch Black 128GB</a>
                              </span>
                              <br/><br/>
                              <div class="price">
                              <span>$345</span>
                              <a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                            </div>
                            </div>

                          </div>
                      </div>
                      <div class="col-md-4 mobile-right reset-pd">
                        <div class="right-product">
                            <div class="line-menu">
                              <a href="#">Android</a>
                              <div class="a-group">
                              <a href="#"><i class="fa fa-list"></i></a>
                              <a href="#"><i class="fa fa-heart-o"></i></a>
                              </div>
                            </div>
                            <div class="img-right">
                              <img src="images/iphone-6.jpg"  class="img-responsive">
                            </div>
                            <div class="info-product">
                              <a href="#">IPhone</a>
                              <span class="line-one">
                                <a href="#">Apple iPhone 6 4.7-Inch Black 128GB</a>
                              </span>
                              <br/><br/>
                              <div class="price">
                              <span>$345</span>
                              <a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                            </div>
                            </div>

                          </div>
                          <div class="right-product">
                            <div class="line-menu">
                              <a href="#">Android</a>
                              <div class="a-group">
                              <a href="#"><i class="fa fa-list"></i></a>
                              <a href="#"><i class="fa fa-heart-o"></i></a>
                              </div>
                            </div>
                            <div class="img-right">
                              <img src="images/ab-china.jpg"  class="img-responsive">
                            </div>
                            <div class="info-product">
                              <a href="#">IPhone</a>
                              <span class="line-one">
                                <a href="#">Apple iPhone 6 4.7-Inch Black 128GB</a>
                              </span>
                              <br/><br/>
                              <div class="price">
                              <span>$345</span>
                              <a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                            </div>
                            </div>

                          </div>
                      </div>
                    </div>
                </div>
                <!-- All product -->
                <div class="tab-pane fade" id="content-css"
                  role="tabpanel" aria-labelledby="tab-css">
                  <div class="row product-content">
                      <div class="col-md-4 mobile-left">
                          <div class="left-product">
                            <div class="line-menu">
                              <a href="#">Android</a>
                              <div class="a-group">
                              <a href="#"><i class="fa fa-list"></i></a>
                              <a href="#"><i class="fa fa-heart-o"></i></a>
                              </div>
                            </div>
                            <img src="images/iphone-x-1.jpg" width="100%" class="img-responsive" alt="">
                            <h5 class="title-product line-one">
                                <a href="#">LG K10 LTE Silver 16GB Contact Free Smartphone</a>
                            </h5>
                            <div class="price">
                              <span>$345</span>
                              <a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                            </div>
                          </div>
                  
                      </div>
                      <div class="col-md-4 mobile-right">
                          <div class="right-product">
                            <div class="line-menu">
                              <a href="#">Android</a>
                              <div class="a-group">
                              <a href="#"><i class="fa fa-list"></i></a>
                              <a href="#"><i class="fa fa-heart-o"></i></a>
                              </div>
                            </div>
                            <div class="img-right">
                              <img src="images/samsung-china.jpg"  class="img-responsive">
                            </div>
                            <div class="info-product">
                              <a href="#">IPhone</a>
                              <span class="line-one">
                                <a href="#">Apple iPhone 6 4.7-Inch Black 128GB</a>
                              </span>
                              <br/><br/>
                              <div class="price">
                              <span>$345</span>
                              <a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                            </div>
                            </div>

                          </div>
                      </div>
                      <div class="col-md-4 mobile-right reset-pd">
                        <!-- products -->
                      </div>
                    </div>
                </div>
                <!-- All product -->
                <div class="tab-pane fade" id="content-bootstrap"
                  role="tabpanel" aria-labelledby="tab-bootstrap">
                  <div class="row product-content">
                      <div class="col-md-4 mobile-right">
                          <div class="right-product">
                            <div class="line-menu">
                              <a href="#">Android</a>
                              <div class="a-group">
                              <a href="#"><i class="fa fa-list"></i></a>
                              <a href="#"><i class="fa fa-heart-o"></i></a>
                              </div>
                            </div>
                            <div class="img-right">
                              <img src="images/samsung-china.jpg"  class="img-responsive">
                            </div>
                            <div class="info-product">
                              <a href="#">IPhone</a>
                              <span class="line-one">
                                <a href="#">Apple iPhone 6 4.7-Inch Black 128GB</a>
                              </span>
                              <br/><br/>
                              <div class="price">
                              <span>$345</span>
                              <a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                            </div>
                            </div>

                          </div>
                      </div>
                      <div class="col-md-4 mobile-right">
                          <div class="right-product">
                            <div class="line-menu">
                              <a href="#">Android</a>
                              <div class="a-group">
                              <a href="#"><i class="fa fa-list"></i></a>
                              <a href="#"><i class="fa fa-heart-o"></i></a>
                              </div>
                            </div>
                            <div class="img-right">
                              <img src="images/samsung-china.jpg"  class="img-responsive">
                            </div>
                            <div class="info-product">
                              <a href="#">IPhone</a>
                              <span class="line-one">
                                <a href="#">Apple iPhone 6 4.7-Inch Black 128GB</a>
                              </span>
                              <br/><br/>
                              <div class="price">
                              <span>$345</span>
                              <a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                            </div>
                            </div>

                          </div>
                      </div>
                      <div class="col-md-4 mobile-right">
                          <div class="right-product">
                            <div class="line-menu">
                              <a href="#">Android</a>
                              <div class="a-group">
                              <a href="#"><i class="fa fa-list"></i></a>
                              <a href="#"><i class="fa fa-heart-o"></i></a>
                              </div>
                            </div>
                            <div class="img-right">
                              <img src="images/samsung-china.jpg"  class="img-responsive">
                            </div>
                            <div class="info-product">
                              <a href="#">IPhone</a>
                              <span class="line-one">
                                <a href="#">Apple iPhone 6 4.7-Inch Black 128GB</a>
                              </span>
                              <br/><br/>
                              <div class="price">
                              <span>$345</span>
                              <a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                            </div>
                            </div>

                          </div>
                      </div>
                    </div>
                </div>

                <!-- animation -->
                <div class="tab-pane show loading-animation" id="loading">
                  <div class="circles">
                    <span></span>
                    <span></span>
                    <span></span>
                  </div>
                </div>
            </div>
       </div>
    </div><!-- End container -->
</div>