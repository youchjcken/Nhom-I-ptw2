<?php
    $url_host = 'http://' . $_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-30">
    <div class="container">
        <div class="pox">
            <div class="rok">
                <div class="mox">
                    <p>Buttons</p>
                </div>


                <div class="nox">
                    <a href="#">Home /</a>
                    <a href="#">Elements /</a>
                    <a href="#">Buttons</a>
                </div>
            </div>
        </div>
        <div class="rox">
            <div class="row">
                <div class="col-md-3">
                    <div class="cls1">
                        <h4>Collection of Elements</h4>
                        <hr>
                        <div class="gach"></div>
                        <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna ali
                        </h5>
                        <br>
                        <div id="sidebar" class="sidebar sidebar-default open" role="navigation">

                            <!-- Sidebar header -->
                            <ul class="nav sidebar-nav">
                                <li class="dropdown">
                                    <a class="ripple-effect dropdown-toggle" href="#" data-toggle="dropdown">
                                        Shop Shortcodes
                                        <b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#" tabindex="-1">
                                                Banner
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" tabindex="-1">
                                                Product List
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" tabindex="-1">
                                                Product List Simple
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" tabindex="-1">
                                                Product List Advanced
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" tabindex="-1">
                                                Product List Carousel
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" tabindex="-1">
                                                Product List Slider
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" tabindex="-1">
                                                Product Value Deal
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" tabindex="-1">
                                                Product Value Deal Slider
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="nav sidebar-nav">
                                <li class="dropdown">
                                    <a class="ripple-effect dropdown-toggle" href="#" data-toggle="dropdown">
                                        Classic
                                        <b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#" tabindex="-1">
                                                Accordions & Toggles
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" tabindex="-1">
                                                Blockquote
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" tabindex="-1">
                                                Buttons
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" tabindex="-1">
                                                Contact Form
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" tabindex="-1">
                                                Google Map
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" tabindex="-1">
                                                Separators
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" tabindex="-1">
                                                Tabs
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" tabindex="-1">
                                                Typography
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                            <ul class="nav sidebar-nav">
                                <li class="dropdown">
                                    <a class="ripple-effect dropdown-toggle" href="#" data-toggle="dropdown">
                                        Infographic
                                        <b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#" tabindex="-1">
                                                Comparison Pricing Tables
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" tabindex="-1">
                                                Countdown
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" tabindex="-1">
                                                Counters
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" tabindex="-1">
                                                Pie Charts
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" tabindex="-1">
                                                Process
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" tabindex="-1">
                                                Progress Bar
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" tabindex="-1">
                                                Pricing Item
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" tabindex="-1">
                                                Pricing Tables
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                            <ul class="nav sidebar-nav">
                                <li class="dropdown">
                                    <a class="ripple-effect dropdown-toggle" href="#" data-toggle="dropdown">
                                        Presentation
                                        <b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#" tabindex="-1">
                                                Clients
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" tabindex="-1">
                                                Blog List
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" tabindex="-1">
                                                Image Gallery
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" tabindex="-1">
                                                Hover Image with Text
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" tabindex="-1">
                                                Image Carousel Simple
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" tabindex="-1">
                                                Team
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" tabindex="-1">
                                                Testimonials
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" tabindex="-1">
                                                Video Button
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cls2">
                        <div class="chu">
                            <h3>Simple</h3>
                        </div>
                        <p>Lorem ipsum dolor sit amet,
                            rutrum aliquet taciti vel,
                            nunc sed nec neque eleifend sed tellus,
                            sociis consectetuer donec.
                        </p>
                        <div class="box">
                            <a href="#">Read more</a>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="cls2">
                        <div class="chu">
                            <h3>Simple</h3>
                        </div>
                        <p>Lorem ipsum dolor sit amet,
                            rutrum aliquet taciti vel,
                            nunc sed nec neque eleifend sed tellus,
                            sociis consectetuer donec.
                        </p>
                        <div class="btn">
                            <button class="btn btn-grad">Read more</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cls2">
                        <div class="chu">
                            <h3>Gradient</h3>
                        </div>
                        <p>Lorem ipsum dolor sit amet,
                            rutrum aliquet taciti vel,
                            nunc sed nec neque eleifend sed tellus,
                            sociis consectetuer donec.
                        </p>

                        <div class="btn">
                            <button class="btn btn-grad">Read more</button>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="cls2">
                        <div class="chu">
                            <h3>Small</h3>
                        </div>
                        <p>Lorem ipsum dolor sit amet,
                            rutrum aliquet taciti vel,
                            nunc sed nec neque eleifend sed tellus,
                            sociis consectetuer donec.
                        </p>

                        <div class="btn">
                            <button class="btn btn-grad">Read more</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cls2">
                        <div class="chu">
                            <h3>Medium</h3>
                        </div>
                        <p>Lorem ipsum dolor sit amet,
                            rutrum aliquet taciti vel,
                            nunc sed nec neque eleifend sed tellus,
                            sociis consectetuer donec.
                        </p>

                        <div class="btn">
                            <button class="btn btn-grad">Read more</button>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="cls2">
                        <div class="chu">
                            <h3>Large</h3>
                        </div>
                        <p>Lorem ipsum dolor sit amet,
                            rutrum aliquet taciti vel,
                            nunc sed nec neque eleifend sed tellus,
                            sociis consectetuer donec.
                        </p>

                        <div class="btn">
                            <button class="btn btn-grad">Read more</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>