<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-5">
	<div class="navbar navbar-default yamm">
		<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse-2"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
		<div class="container-fluid">

			<div class="navbar-header">
				<a class="navbar-brand" href="#">All Departments</a>
				<div class="left-menu-custom">
					<ul class="list-menu">
						<li>
							<span class="icon-left"><i class="fa fa-star"></i></span><a href="#" class="menu-item">Today’s Value Deals</a>
						</li>
						<li>
							<p><strong>></strong></p>
							<span class="icon-left"><i class="fa fa-desktop"></i></span><a href="#" class="menu-item">Mobile Phones</a>
							<div class="menu-to-right">
								<div class="row">
									<div class="br"></div>
									<div class="col-md-6">
										<ul>
											<li class="name">Product Types</li>
											<li><a class="cool-link" href="#">Smartphones</a></li>
											<li><a class="cool-link" href="#">Android Phones</a></li>
											<li><a class="cool-link" href="#">iPhones</a></li>
											<li><a class="cool-link" href="#">Windows Mobiles</a></li>
											<li><a class="cool-link" href="#">Refurbished Mobiles</a></li>
											<li><a class="cool-link" href="#">Pre Owned Mobiles</a></li>
											<br>
											<br>
											<li><a class="limit">Limited Offer up to <strong>50%</strong> off</a></li>
											<li><a class="shop" href="#">Shop now</a></li>
										</ul>

									</div>
									<div class="col-md-6">
										<ul>
											<li class="name">Mobile Accessories</li>
											<li><a class="cool-link" href="#">All Mobile Accessories</a></li>
											<li><a class="cool-link" href="#">Cases & Covers</a></li>
											<li><a class="cool-link" href="#">Screen Protectors</a></li>
											<li><a class="cool-link" href="#">Power Banks</a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li>

							<p><strong>></strong></p>
							<span class="icon-left"><i class="fa fa-desktop"></i></span><a href="#" class="menu-item">Computers</a>
							<div class="computers">
								<div class="row">
									<div class="br"></div>
									<div class="col-md-6">
										<ul>
											<li class="name">Computers & Accessories</li>
											<li><a class="cool-link" href="#">All Computers</a></li>
											<li><a class="cool-link" href="#">Hard Drives</a></li>
											<li><a class="cool-link" href="#">Memory Cards</a></li>
											<li><a class="cool-link" href="#">Software</a></li>
											<li><a class="cool-link" href="#">Network Systems</a></li>
											<li><a class="cool-link" href="#">Components</a></li>
											<br>
											<br>
											<li><a class="limit">Limited Offer up to <strong>50%</strong> off</a></li>
											<li><a class="shop" href="#">Shop now</a></li>
										</ul>

									</div>
									<div class="col-md-6">
										<ul>
											<li class="name">Office & Stationery</li>
											<li><a class="cool-link" href="#">Accessories</a></li>
											<li><a class="cool-link" href="#">Pens & Writing</a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li>
							<span class="icon-left"><i class="fa fa-lightbulb"></i></span><a href="#" class="menu-item">Accessories</a>
						</li>
						<li>
							<span class="icon-left"><i class="fa fa-camera"></i></span><a href="#" class="menu-item">Cameras & Video</a>
						</li>
						<li>
							<p><strong>></strong></p>
							<span class="icon-left"><i class="fa fa-adjust"></i></span><a href="#" class="menu-item">Headphones</a>
							<div class="headphones">
								<div class="row">
									<div class="br"></div>
									<div class="col-md-6">
										<ul>
											<li class="name">Computers & Accessories</li>
											<li><a class="cool-link" href="#">All Computers</a></li>
											<li><a class="cool-link" href="#">Hard Drives</a></li>
											<li><a class="cool-link" href="#">Memory Cards</a></li>
											<li><a class="cool-link" href="#">Software</a></li>
											<li><a class="cool-link" href="#">Network Systems</a></li>
											<li><a class="cool-link" href="#">Components</a></li>
											<br>
											<br>
											<li><a class="limit">Limited Offer up to <strong>50%</strong> off</a></li>
											<li><a class="shop" href="#">Shop now</a></li>
										</ul>

									</div>
									<div class="col-md-6">
										<ul>
											<li class="name">Office & Stationery</li>
											<li><a class="cool-link" href="#">Accessories</a></li>
											<li><a class="cool-link" href="#">Pens & Writing</a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li>
							<span class="icon-left"><i class="fa fa-book"></i></span><a href="#" class="menu-item">Books & Audible</a>
						</li>
						<li>
							<span class="icon-left"><i class="fa fa-print"></i></span><a href="#" class="menu-item">Office</a>
						</li>
						<li>
							<p><strong>></strong></p>
							<span class="icon-left"><i class="fa fa-print"></i></span><a href="#" class="menu-item">Laptops & Tablets</a>
							<div class="laptops">
								<div class="row">
									<div class="br"></div>
									<div class="col-md-6">
										<ul>
											<li class="name">Computers & Accessories</li>
											<li><a class="cool-link" href="#">All Computers</a></li>
											<li><a class="cool-link" href="#">Hard Drives</a></li>
											<li><a class="cool-link" href="#">Memory Cards</a></li>
											<li><a class="cool-link" href="#">Software</a></li>
											<li><a class="cool-link" href="#">Network Systems</a></li>
											<li><a class="cool-link" href="#">Components</a></li>
											<br>
											<br>
											<li><a class="limit">Limited Offer up to <strong>50%</strong> off</a></li>
											<li><a class="shop" href="#">Shop now</a></li>
										</ul>

									</div>
									<div class="col-md-6">
										<ul>
											<li class="name">Office & Stationery</li>
											<li><a class="cool-link" href="#">Accessories</a></li>
											<li><a class="cool-link" href="#">Pens & Writing</a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li>
							<p><strong>></strong></p>
							<span class="icon-left"><i class="fa fa-power-off"></i></span><a href="#" class="menu-item">Home Appliances</a>
							<div class="home">
								<div class="row">
									<div class="br"></div>
									<div class="col-md-6">
										<ul>
											<li class="name">Computers & Accessories</li>
											<li><a class="cool-link" href="#">All Computers</a></li>
											<li><a class="cool-link" href="#">Hard Drives</a></li>
											<li><a class="cool-link" href="#">Memory Cards</a></li>
											<li><a class="cool-link" href="#">Software</a></li>
											<li><a class="cool-link" href="#">Network Systems</a></li>
											<li><a class="cool-link" href="#">Components</a></li>
											<br>
											<br>
											<li><a class="limit">Limited Offer up to <strong>50%</strong> off</a></li>
											<li><a class="shop" href="#">Shop now</a></li>
										</ul>

									</div>
									<div class="col-md-6">
										<ul>
											<li class="name">Office & Stationery</li>
											<li><a class="cool-link" href="#">Accessories</a></li>
											<li><a class="cool-link" href="#">Pens & Writing</a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<a class="navbar-brand" id="nav-brand-2" href="#"><img class="img-responsive" src="images/logo.png" style="height: 26px;"></a>
			<div class="navbar-collapse collapse" id="navbar-collapse-2">
				<ul class="nav navbar-nav">
					<!-- Home -->
					<li class="dropdown yamm-fullwidth">
						<a class="active dropdown-toggle" href="#">Home</a>
					</li>

					<li class="dropdown yamm-fullwidth"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Pages<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a class="cool-link" href="#">About us</a></li>
							<li><a class="cool-link" href="#">Our Team</a></li>
							<li><a class="cool-link" href="#">Our Services</a></li>
							<li><a class="cool-link" href="#">Pricing Plans</a></li>
							<li><a class="cool-link" href="#">Store Locator</a></li>
							<li><a class="cool-link" href="#">Contact Us</a></li>
							<li><a class="cool-link" href="#">Terms & Conditions</a></li>
							<li><a class="cool-link" href="#">Coming Soon</a></li>
							<li><a class="cool-link" href="#">FAQ</a></li>
							<li><a class="cool-link" href="#">404 Error Page</a></li>
						</ul>
					</li>

					<li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Shop<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li>
								<div class="yamm-content">
									<div class="row">
										<div class="col-sm-3">
											<ul>
												<li class="name">Product Types</li>
												<li><a class="cool-link" href="#">Standard</a></li>
												<li><a class="cool-link" href="#">Variable</a></li>
												<li><a class="cool-link" href="#">Grouped</a></li>
												<li><a class="cool-link" href="#">External</a></li>
												<li><a class="cool-link" href="#">Downloadable</a></li>
												<li><a class="cool-link" href="#">Virtual</a></li>
												<li><a class="cool-link" href="#">New Product</a></li>
												<li><a class="cool-link" href="#">Out Of Stock</a></li>
												<li><a class="cool-link" href="#">On Sale Product</a></li>
											</ul>
										</div>
										<div class="col-sm-3">
											<ul>
												<li class=" name">Product Types</li>
												<li><a class="cool-link" href="#">Left Filter</a></li>
												<li><a class="cool-link" href="#">Top Filter</a></li>
												<li><a class="cool-link" href="#">With Sidebar</a></li>
												<li><a class="cool-link" href="#">Without Sidebar</a></li>
												<li><a class="cool-link" href="#">Masonry</a></li>
												<li><a class="cool-link" href="#">Carousel</a></li>
												<li><a class="cool-link" href="#">Shop Blocks</a></li>
												<li><a class="cool-link" href="#">Categories</a></li>
												<li><a class="cool-link" href="#">Single Category</a></li>
											</ul>
										</div>
										<div class="col-sm-3">
											<ul>
												<li class=" name">Product Types</li>
												<li><a class="cool-link" href="#">My account</a></li>
												<li><a class="cool-link" href="#">Cart</a></li>
												<li><a class="cool-link" href="#">Checkout</a></li>
												<li><a class="cool-link" href="#">Orders</a></li>
												<li><a class="cool-link" href="#">Order Tracking</a></li>
												<li><a class="cool-link" href="#">Wishlist</a></li>
											</ul>
										</div>
										<div class="col-sm-3">
											<ul>
												<li class="name">Product Types</li>
												<li><a class="cool-link" href="#">Two Columns Grid</a></li>
												<li><a class="cool-link" href="#">Three Columns Grid</a></li>
												<li><a class="cool-link" href="#">Four Columns Grid</a></li>
												<li><a class="cool-link" href="#">Four Columns Wide</a></li>
												<li><a class="cool-link" href="#">Five Columns Wide</a></li>
												<li><a class="cool-link" href="#">Six Columns Wide</a></li>
											</ul>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</li>
					<li class="dropdown yamm-fullwidth"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Blog<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a class="cool-link" href="#">Masonry List</a></li>
							<li><a class="cool-link" href="#">Standard List</a></li>
							<li><a class="cool-link" href="#">Post Types</a></li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Elements<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li>
								<div class="yamm-content">
									<div class="row">
										<div class="col-sm-3">
											<ul>
												<li class="name">Shop Shortcodes</li>
												<li><a class="cool-link" href="#">Banner</a></li>
												<li><a class="cool-link" href="#">Product List</a></li>
												<li><a class="cool-link" href="#">Simple List</a></li>
												<li><a class="cool-link" href="#">Advanced List</a></li>
												<li><a class="cool-link" href="#">Product Carousel</a></li>
												<li><a class="cool-link" href="#">Product Slider</a></li>
												<li><a class="cool-link" href="#">Value Deal</a></li>
												<li><a class="cool-link" href="#">Value Deal Slider</a></li>
											</ul>
										</div>
										<div class="col-sm-3">
											<ul>
												<li class=" name">Classis</li>
												<li><a class="cool-link" href="#">Accordions</a></li>
												<li><a class="cool-link" href="#">Blockquote</a></li>
												<li><a class="cool-link" href="#">Buttons</a></li>
												<li><a class="cool-link" href="#">Contact Form</a></li>
												<li><a class="cool-link" href="#">Google Map</a></li>
												<li><a class="cool-link" href="#">Separators</a></li>
												<li><a class="cool-link" href="#">Tabs</a></li>
												<li><a class="cool-link" href="#">Typography</a></li>
											</ul>
										</div>
										<div class="col-sm-3">
											<ul>
												<li class=" name">Infographic</li>
												<li><a class="cool-link" href="#">Comparison Tables</a></li>
												<li><a class="cool-link" href="#">Countdown</a></li>
												<li><a class="cool-link" href="#">Counters</a></li>
												<li><a class="cool-link" href="#">Pie Charts</a></li>
												<li><a class="cool-link" href="#">Process</a></li>
												<li><a class="cool-link" href="#">Progress Bar</a></li>
												<li><a class="cool-link" href="#">Pricing Item</a></li>
												<li><a class="cool-link" href="#">Pricing Tables</a></li>
											</ul>
										</div>
										<div class="col-sm-3">
											<ul>
												<li class="name">Presentation</li>
												<li><a class="cool-link" href="#">Clients</a></li>
												<li><a class="cool-link" href="#">Blog List</a></li>
												<li><a class="cool-link" href="#">Image Gallery</a></li>
												<li><a class="cool-link" href="#">Hover Image with Text</a></li>
												<li><a class="cool-link" href="#">Team</a></li>
												<li><a class="cool-link" href="#">Testimonials</a></li>
												<li><a class="cool-link" href="#">Video Button</a></li>
											</ul>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">

					<li class="end">
						<a>Call us toll free: <span>(+1)866-540-3229</span></a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="swiper-container">
		<div class="swiper-wrapper">
			<div class="swiper-slide" style="background: url(images/md-1.jpg) 70%/ cover;">
				<div class="content">
					<div class="title">We Carry the Latest <strong>Equipment</strong> </div>
					<div class="caption">
						<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
					</div>
					<div class="nut">
						<button class="btn btn-grad">Shop Now</button>
					</div>
				</div>
			</div>
			<div class="swiper-slide" style="background: url(images/md-2.jpg) 70%/ cover;">
				<div class="content">
					<div class="title">Smartphones up to <strong>-30%</strong> off</div>
					<div class="caption">
						<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
					</div>
					<div class="nut">
						<button class="btn btn-grad">Shop Now</button>
					</div>
				</div>
			</div>
			<div class="swiper-slide" style="background: url(images/md-3.jpg) 70%/ cover;">
				<div class="content">
					<div class="title">Check Out Our Upcoming <strong>Offers</strong></div>
					<div class="caption">
						<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
					</div>
					<div class="nut">
						<button class="btn btn-grad">Shop Now</button>
					</div>
				</div>
			</div>

		</div>
		<!-- Add Arrows -->
		<div class="swiper-button-next"></div>
		<div class="swiper-button-prev"></div>
	</div>
</div>