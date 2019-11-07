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
            <div class="footers">
                <div class="footer-home">
                    <div class="col-md-4">
                        <div class="backgroud-foter">
                            <div class="img-footer">
                                <img src="../7/images/footer-top-img-1-1.png">
                                <div class="text-footer">
                                    <h2 class="mkd-banner-title">Call Center </h2>
                                    <a href="#">
                                        <span>(734) 555.1212</span>
                                    </a>
                                </div>
                            </div>

                        </div>

                    </div>


                    <div class="col-md-4">
                        <div class="backgroud-foter">
                            <div class="img-footer">
                                <img src="../7/images/footer-top-img-2.png">
                                <div class="text-footer">
                                    <h2 class="mkd-banner-title">Free Delivery </h2>
                                    <p >Free delivery on over $100 </p>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="col-md-4">
                        <div class="backgroud-foter">
                            <div class="img-footer">
                                <img src="../7/images/footer-top-img-3.png">
                                <div class="text-footer">
                                    <h2 class="mkd-banner-title">Gift Cards </h2>
                                    <a href="#">
                                        <span>Save up to 20%</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>



                </div>
                <div class="footer-home1">
                    <div class="col-md-3">
                        <div class="footer-title">
                            <h4 class="mkd-widget-title">Get to Know Us</h4>
                        </div>
                        <div class="footer-list">
                            <ul>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">Stores</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Order Tracking</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="footer-title">
                            <h4 class="mkd-widget-title">Get to Know Us</h4>
                        </div>
                        <div class="footer-list">
                            <ul>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">Stores</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Order Tracking</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="footer-title">
                            <h4 class="mkd-widget-title">Get to Know Us</h4>
                        </div>
                        <div class="footer-list">
                            <ul>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">Stores</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Order Tracking</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="footer-title">
                            <h4 class="mkd-widget-title">Get to Know Us</h4>
                            <div class="form">
                                <input type="email" name="email" value="" size="40" maxlength="100" class="wpcf7-form-controla" aria-required="true" aria-invalid="false" placeholder="Your Email Address...">
                                <input type="submit" value="♂" class="wpcf7-form-control wpcf7-submit">
                            </div>
                            <div class="text-footer1">
                                            
                            <p >Stay up to date with all the actions that we are saved for all our customers. </p>
                            </div>
                            <div class="footer-icon">
                                <span><a href="#"><i class="fa fa-facebook-f"></i></a></span>
                                <span><a href="#"><i class="fa fa-instagram"></i></a></span>
                                <span><a href="#"><i class="fa fa-twitter"></i></a></span>
                                <span><a href="#"><i class="fa fa-google"></i></a></span>
                                <span><a href="#"><i class="fa fa-pinterest"></i></a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-home2">
                    <div class="footer-row">
                        <div class="col-md-6">
                            <div class="text-33">
                                <p>
                                    <a href="#">
                                        <span>Copyright©2017Mikado-Themes</span>
                                        
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-33-1">
                                <p>
                                    <img src="../7/images/footer-bottom-logo-1.png">
                                    <img src="../7/images/footer-bottom-logo-2.png">
                                    <img src="../7/images/footer-bottom-logo-3.png">
                                    <img src="../7/images/footer-bottom-logo-4.png">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
