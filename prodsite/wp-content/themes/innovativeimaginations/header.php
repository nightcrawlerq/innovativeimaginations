<!doctype html>
<html lang="en-us">
<head>
    <?php wp_head(); ?>
</head>

<body>

	<div class="wrapper" id="top">
		<!-- Index file main container -->
		<!-- Header section -->
		<header class="header-placement">
			<div class="content">

				<div class="header-fixed header-down">
					<div class="container waypoint" data-animate-down="header-up" data-animate-up="header-down">
						<!--  Logo  -->
						<a class="logo" href="index.html">
						   	<!-- Remove comments to choose image and add comment to h1 -->
						   	<!--<img src="<?php bloginfo('template_url'); ?>/images/logo-full.png" alt="">-->  
						   	<svg class="logo__svg" width="32" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
									<g>
										<path class="logo__svg-path" d="m18.8,14c-1.2,-0.2 -2.3,0.1 -3.2,0.6c-0.8,0.5 -1.8,0.2 -2.4,-0.7c-0.4,-0.8 -0.2,-1.8 0.7,-2.3c1.4,-0.7 3,-1.2 4.7,-1.1c-0.2,-0.1 -0.4,-0.2 -0.6,-0.4c-0.8,-0.7 -1.8,-1.3 -3,-1.4c-2.6,-0.3 -5.1,1.5 -5.4,4s1.6,4.9 4.2,5.2c1.2,0.1 2.3,-0.1 3.2,-0.6c0.8,-0.5 1.8,-0.2 2.4,0.7c0.4,0.8 0.2,1.8 -0.7,2.3c-1.3,0.7 -3,1.2 -4.7,1.1c0.2,0.1 0.4,0.2 0.6,0.4c0.8,0.7 1.8,1.3 3,1.4c2.6,0.3 5.1,-1.5 5.4,-4c0.4,-2.4 -1.5,-4.8 -4.2,-5.2zm-2.8,-14c-8.8,0 -16,7.2 -16,16s7.2,16 16,16c8.8,0 16,-7.2 16,-16s-7.2,-16 -16,-16zm10.5,19.7c-0.6,4.5 -4.8,7.5 -9.4,7c-2,-0.3 -3.7,-1.2 -4.9,-2.4c-0.7,-0.7 -0.7,-1.8 0,-2.4c0.3,-0.3 0.7,-0.4 1,-0.5c-4.4,-0.6 -7.6,-4.7 -7.1,-9c0.6,-4.5 4.8,-7.5 9.3,-7c2,0.2 3.7,1.2 5,2.4c0.7,0.7 0.7,1.8 0,2.4c-0.3,0.3 -0.7,0.4 -1,0.5c4.5,0.6 7.7,4.6 7.1,9z" fill="#ffffff">
									</g>
								</svg>
								<h1 class="logo__text">Allec</h1>     		 
						</a>
						<!-- End Logo -->

						<!-- Navigation section -->
						<nav class="z-nav">
					    	<!-- Toggle for menu mobile view -->
					        <a href="#" class="z-nav__toggle">
					        	<span class="menu-icon"></span>
					        	<span class="menu-text">navigation</span>
					        	<div class="menu-head"></div>
					        </a>

					        <div class="z-nav-inner">
					        <ul class="z-nav__list">
					        	<li class="z-nav__item">
					        		<!-- Subsidiary menu toogle button -->
					            	<span class="z-nav__toggle-sub plus"><i class="fa fa-plus"></i><i class="fa fa-minus"></i></span>
					        		<a class="z-nav__link z-nav__link--active" href="index.html">Home</a>
					        		<!-- Subsidiary menu list-->
					                <ul class="z-nav__list-secondary">
					                    <li class="z-nav__item"><a class="z-nav__link" href="index1.html">Homepage version 1 (Revolution slider)</a></li>
					                    <li class="z-nav__item"><a class="z-nav__link" href="index2.html">Homepage version 2 (Royal slider)</a></li>
					                    <li class="z-nav__item"><a class="z-nav__link" href="index3.html">Homepage version 3 (FlexSlider)</a></li>
					                    <li class="z-nav__item"><a class="z-nav__link" href="index4.html">Homepage version 4 (Original scrolling)</a></li>
					                    <li class="z-nav__item"><a class="z-nav__link" href="index5.html">Homepage version 5 (Bubble canvas animation)</a></li>
					                    <li class="z-nav__item"><a class="z-nav__link" href="index-host.html">Hosting homepage</a></li>
					                    <li class="z-nav__item"><a class="z-nav__link" href="index-animation.html">Homepage with canvas animation</a></li>
					                    <li class="z-nav__item"><a class="z-nav__link" href="index.html">Hero header version (Video)</a></li>
					                    <li class="z-nav__item"><a class="z-nav__link" href="onepage-layout.html">Onepage version</a></li>
					                    <li class="z-nav__item"><a class="z-nav__link" href="index-christmas.html">Christmas landing page</a></li>
					                </ul>
					                <!-- end subsidiary menu list-->
					        	</li>

					        	<li class="z-nav__item">
					        		<!-- Subsidiary menu toogle button -->
					            	<span class="z-nav__toggle-sub plus"><i class="fa fa-plus"></i><i class="fa fa-minus"></i></span>
					        		<a class="z-nav__link" href="about.html">About</a>
					        		<!-- Subsidiary menu list-->
					                <ul class="z-nav__list-secondary">
					                    <li class="z-nav__item"><a class="z-nav__link" href="about.html">About</a></li>
					                    <li class="z-nav__item"><a class="z-nav__link" href="single-employee.html">Single employee</a></li>
					                    <li class="z-nav__item"><a class="z-nav__link" href="careers.html">Careers</a></li>
					                    <li class="z-nav__item"><a class="z-nav__link" href="testimonials.html">Testimonials</a></li>
					                    <li class="z-nav__item"><a class="z-nav__link" href="contact1.html">Contact version 1</a></li>
					                    <li class="z-nav__item"><a class="z-nav__link" href="contact2.html">Contact version 2</a></li>
					                    <li class="z-nav__item"><a class="z-nav__link" href="contact3.html">Contact version 3</a></li>
			                    		<li class="z-nav__item"><a class="z-nav__link" href="contact4.html">Contact version 4</a></li>
					                </ul>
					                <!-- end subsidiary menu list-->
					        	</li>
					            
					            <li class="z-nav__item">
					                <!-- Subsidiary menu toogle button -->
					            	<span class="z-nav__toggle-sub plus"><i class="fa fa-plus"></i><i class="fa fa-minus"></i></span>
					            	<a class="z-nav__link" href="services.html">Services</a>
					                <!-- Subsidiary menu list-->
					                <ul class="z-nav__list-secondary">
					                    <li class="z-nav__item"><a class="z-nav__link" href="services.html">Services version 1</a></li>
					                    <li class="z-nav__item"><a class="z-nav__link" href="services2.html">Services version 2</a></li>
					                    <li class="z-nav__item"><a class="z-nav__link" href="services3.html">Services version 3</a></li>
					                    <li class="z-nav__item"><a class="z-nav__link" href="single-service.html">Single service</a></li>
					                    <li class="z-nav__item"><a class="z-nav__link" href="pricing-tables.html">Pricing</a></li>
					                    <li class="z-nav__item"><a class="z-nav__link" href="support.html">Support</a></li>
					                    <li class="z-nav__item"><a class="z-nav__link" href="dashboard.html">Dashboard</a></li>
					                </ul>
					                <!-- end subsidiary menu list-->
					            </li>
					            
					            
					            <li class="z-nav__item">
					                <!-- Subsidiary menu toogle button -->
					            	<span class="z-nav__toggle-sub plus"><i class="fa fa-plus"></i><i class="fa fa-minus"></i></span>
					            	<a class="z-nav__link" href="gallery-3col.html">Portfolio</a>
					                <!-- Subsidiary menu list-->
					                <ul class="z-nav__list-secondary">
					                   	<li class="z-nav__item"><a class="z-nav__link" href="gallery-2col.html">Portfolio 2 columns</a></li>
					                    <li class="z-nav__item"><a class="z-nav__link" href="gallery-3col.html">Portfolio 3 columns</a></li>
					                    <li class="z-nav__item"><a class="z-nav__link" href="gallery-4col.html">Portfolio 4 columns</a></li>
					                    <li class="z-nav__item"><a class="z-nav__link" href="gallery-full.html">Portfolio fullwidth</a></li>
					                    <li class="z-nav__item"><a class="z-nav__link" href="case-study.html">Case study</a></li>
					                </ul>
					                <!-- end subsidiary menu list-->
					            </li>
					            
					            <li class="z-nav__item">
					                <!-- Subsidiary menu toogle button -->
					            	<span class="z-nav__toggle-sub plus"><i class="fa fa-plus"></i><i class="fa fa-minus"></i></span>
					            	<a class="z-nav__link" href="index-commerce.html">Shop</a>
					                <!-- Subsidiary menu list-->
					                <ul class="z-nav__list-secondary">
					        						<li class="z-nav__item"><a class="z-nav__link" href="shop-ecwid.html">Ecwid E-commerce</a></li>
					                    <li class="z-nav__item"><a class="z-nav__link" href="index-commerce.html">Homepage</a></li>
					                    <li class="z-nav__item"><a class="z-nav__link" href="shop-grid-full.html">Catalog fullwidth grid</a></li>
					                    <li class="z-nav__item"><a class="z-nav__link" href="shop-list-full.html">Catalog fullwidth list</a></li>
					                    <li class="z-nav__item"><a class="z-nav__link" href="shop-grid.html">Catalog grid with sidebar</a></li>
					                    <li class="z-nav__item"><a class="z-nav__link" href="shop-list.html">Catalog list with sidebar</a></li>
					                    <li class="z-nav__item"><a class="z-nav__link" href="single-product.html">Single product with sidebar</a></li>
					                    <li class="z-nav__item"><a class="z-nav__link" href="single-product-full.html">Single product fullwidth</a></li>
					                    <li class="z-nav__item"><a class="z-nav__link" href="wishlist.html">Wishlist</a></li>
					                    <li class="z-nav__item"><a class="z-nav__link" href="orders.html">My orders</a></li>
					                    <li class="z-nav__item"><a class="z-nav__link" href="checkout.html">Checkout</a></li>
					                    <li class="z-nav__item"><a class="z-nav__link" href="shopping-cart.html">Shopping cart</a></li>
					                </ul>
					                <!-- end subsidiary menu list-->
					            </li>

					            <li class="z-nav__item">
					                <!-- Subsidiary menu toogle button -->
					            	<span class="z-nav__toggle-sub plus"><i class="fa fa-plus"></i><i class="fa fa-minus"></i></span>
					            	<a class="z-nav__link" href="blog.html">Blog</a>
					                <!-- Subsidiary menu list-->
					                <ul class="z-nav__list-secondary">
					                    <li class="z-nav__item"><a class="z-nav__link" href="blog.html">Blog with sidebar</a></li>
					                    <li class="z-nav__item"><a class="z-nav__link" href="blog-full.html">Blog fullwidth</a></li>
					                    <li class="z-nav__item"><a class="z-nav__link" href="blog-masonry.html">Blog masonry</a></li>
					                    <li class="z-nav__item"><a class="z-nav__link" href="blog-timeline.html">Blog timeline</a></li>
					                    <li class="z-nav__item"><a class="z-nav__link" href="single-post.html">Single post with sidebar</a></li>
					                    <li class="z-nav__item"><a class="z-nav__link" href="single-post-full.html">Single post fullwidth</a></li>
					                    <li class="z-nav__item"><a class="z-nav__link" href="single-post-disqus.html">Single post with Disqus (with sidebar)</a></li>
					                    <li class="z-nav__item"><a class="z-nav__link" href="single-post-full-disqus.html">Single post with Disqus (fullwidth)</a></li>
					                    <li class="z-nav__item"><a class="z-nav__link" href="blog-audio.html">Blog audio</a></li>
					                    <li class="z-nav__item"><a class="z-nav__link" href="blog-video.html">Blog video</a></li>
					                    <li class="z-nav__item"><a class="z-nav__link" href="blog-author.html">Post author</a></li>
					                </ul>
					                <!-- end subsidiary menu list-->
					            </li>

					            <li class="z-nav__item">
			                <!-- Subsidiary menu toogle button -->
			            	<span class="z-nav__toggle-sub plus"><i class="fa fa-plus"></i><i class="fa fa-minus"></i></span>
			            	<a class="z-nav__link" href="site-map.html">Pages</a>
			                <!-- Subsidiary menu list-->
			                <ul class="z-nav__list-secondary">
			                    <li class="z-nav__item"><a class="z-nav__link" href="index-rtl.html"> RTL version</a></li>
													<li class="z-nav__item"><a class="z-nav__link" href="index2-boxed.html"> Boxed version</a></li>
			                    <li class="z-nav__item"><a class="z-nav__link" href="site-map.html"> Sitemap</a></li>
				                <li class="z-nav__item"><a class="z-nav__link" href="404.html">404 error</a></li>
				                <li class="z-nav__item"><a class="z-nav__link" href="comming-soon.html">Coming soon</a></li>
				                <li class="z-nav__item"><a class="z-nav__link" href="login.html">Login/registration</a></li>
			                    <li class="z-nav__item"><a class="z-nav__link" href="forum.html">Forum page</a></li>
			                    <li class="z-nav__item"><a class="z-nav__link" href="forum-thread.html">Forum thread</a></li>
			                    <li class="z-nav__item">
											<span class="z-nav__toggle-sub plus"><i class="fa fa-plus"></i><i class="fa fa-minus"></i></span>
					                    	<a class="z-nav__link" href="#">Dark headers</a>
					                    	<ul class="z-nav__list-secondary z-nav_nested">
					                    		<li class="z-nav__item"><a class="z-nav__link" href="header-1.html">Default header</a>
					                    		<li class="z-nav__item"><a class="z-nav__link" href="header-2.html">Header with social icons</a>
					                    		<li class="z-nav__item"><a class="z-nav__link" href="header-3.html">Header with centred logo</a>
					                    		<li class="z-nav__item"><a class="z-nav__link" href="header-4.html">Two-row Header</a>
					                    		<li class="z-nav__item"><a class="z-nav__link" href="header-5.html">Simplified header</a>
					                    		<li class="z-nav__item"><a class="z-nav__link" href="header-6.html">E-commerce header</a>
					                    	</ul>
					                    </li>
					                    <li class="z-nav__item">
											<span class="z-nav__toggle-sub plus"><i class="fa fa-plus"></i><i class="fa fa-minus"></i></span>
					                    	<a class="z-nav__link" href="#">Light headers</a>
											<ul class="z-nav__list-secondary z-nav_nested">
					                    		<li class="z-nav__item"><a class="z-nav__link" href="header-1-light.html">Default header</a>
					                    		<li class="z-nav__item"><a class="z-nav__link" href="header-2-light.html">Header with social icons</a>
					                    		<li class="z-nav__item"><a class="z-nav__link" href="header-3-light.html">Header with centred logo</a>
					                    		<li class="z-nav__item"><a class="z-nav__link" href="header-4-light.html">Two-row Header</a>
					                    		<li class="z-nav__item"><a class="z-nav__link" href="header-5-light.html">Simplified header</a>
					                    		<li class="z-nav__item"><a class="z-nav__link" href="header-6-light.html">E-commerce header</a>
					                    	</ul>
					                    </li>
					                   <li class="z-nav__item">
											<span class="z-nav__toggle-sub plus"><i class="fa fa-plus"></i><i class="fa fa-minus"></i></span>
					                    	<a class="z-nav__link" href="#">Dark footers</a>
					                    	<ul class="z-nav__list-secondary z-nav_nested">
					                    		<li class="z-nav__item"><a class="z-nav__link" href="footer-1.html">Default footer</a></li>
					                    		<li class="z-nav__item"><a class="z-nav__link" href="footer-2.html">Footer with subscription</a></li>
					                    		<li class="z-nav__item"><a class="z-nav__link" href="footer-3.html">Footer with contact form</a></li>
					                    		<li class="z-nav__item"><a class="z-nav__link" href="footer-4.html">Simplified footer</a></li>
					                    		<li class="z-nav__item"><a class="z-nav__link" href="footer-5.html">Footer with instagram feed</a></li>
					                    		<li class="z-nav__item"><a class="z-nav__link" href="footer-6.html">Centered footer</a></li>
					                    	</ul>	
					                    </li>
					                    <li class="z-nav__item">
											<span class="z-nav__toggle-sub plus"><i class="fa fa-plus"></i><i class="fa fa-minus"></i></span>
					                    	<a class="z-nav__link" href="#">Light footers</a>
					                    	<ul class="z-nav__list-secondary z-nav_nested">
					                    		<li class="z-nav__item"><a class="z-nav__link" href="footer-1-light.html">Default footer</a></li>
					                    		<li class="z-nav__item"><a class="z-nav__link" href="footer-2-light.html">Footer with subscription</a></li>
					                    		<li class="z-nav__item"><a class="z-nav__link" href="footer-3-light.html">Footer with contact form</a></li>
					                    		<li class="z-nav__item"><a class="z-nav__link" href="footer-4-light.html">Simplified footer</a></li>
					                    		<li class="z-nav__item"><a class="z-nav__link" href="footer-5-light.html">Footer with instagram feed</a></li>
					                    		<li class="z-nav__item"><a class="z-nav__link" href="footer-6-light.html">Centered footer</a></li>
					                    	</ul>
					                    </li>
			                </ul>
			                <!-- end subsidiary menu list-->
			            </li>
			            
			            <li class="z-nav__item">
			                <!-- Subsidiary menu toogle button -->
			            	<span class="z-nav__toggle-sub plus"><i class="fa fa-plus"></i><i class="fa fa-minus"></i></span>
			            	<a class="z-nav__link" href="shortcodes/accordions.html">Shortcodes</a>
			                <!-- Subsidiary menu list-->
			                <ul class="z-nav__list-secondary mega-menu">
			                	<div class="col-sm-3 col-md-2">
				                    <li class="z-nav__item"><a class="z-nav__link" href="shortcodes/accordions.html"><i class="fa fa-plus-circle"></i>Accordions</a></li>
				                    <li class="z-nav__item"><a class="z-nav__link" href="shortcodes/animation.html"><i class="fa fa-magic"></i>Animation</a></li><li class="z-nav__item"><a class="z-nav__link" href="shortcodes/buttons.html"><i class="fa fa-link"></i>Buttons</a></li>				                    
				                    <li class="z-nav__item"><a class="z-nav__link" href="shortcodes/charts.html"><i class="fa fa-bar-chart"></i> Charts</a></li>
			                    </div>
			                    
			                    <div class="col-sm-3 col-md-2">
			                    	<li class="z-nav__item"><a class="z-nav__link" href="shortcodes/column.html"><i class="fa fa-th-large"></i>Columns</a></li>
			                    	<li class="z-nav__item"><a class="z-nav__link" href="shortcodes/counters.html"><i class="fa fa-clock-o"></i> Counters </a></li>
			                    	<li class="z-nav__item"><a class="z-nav__link" href="shortcodes/dividers.html"><i class="fa fa-bars"></i>Dividers</a></li>
				                    <li class="z-nav__item"><a class="z-nav__link" href="shortcodes/forms.html"><i class="fa fa-check-square-o"></i> Forms</a></li>
			                    </div>
			                    
			                    <div class="col-sm-3 col-md-2">
			                    	<li class="z-nav__item"><a class="z-nav__link" href="shortcodes/maps.html"><i class="fa fa-map-marker"></i>Google maps</a></li>
			                    	<li class="z-nav__item"><a class="z-nav__link" href="shortcodes/icons.html"><i class="fa fa-user"></i> Icons</a></li>
				                    <li class="z-nav__item"><a class="z-nav__link" href="shortcodes/images.html"><i class="fa fa-picture-o"></i> Images</a></li>
			                    	<li class="z-nav__item"><a class="z-nav__link" href="shortcodes/media-embeds.html"><i class="fa fa-video-camera"></i>Media embeds</a></li>
			                    </div>
			                    
			                    <div class="col-sm-3 col-md-2">
			                    	<li class="z-nav__item"><a class="z-nav__link" href="shortcodes/notifications.html"><i class="fa fa-flag"></i>Notifications</a></li>
			                    	<li class="z-nav__item"><a class="z-nav__link" href="shortcodes/paginations.html"><i class="fa fa-chevron-circle-right"></i>Pagination</a></li>
			                    	<li class="z-nav__item"><a class="z-nav__link" href="shortcodes/progress.html"><i class="fa fa-tasks"></i>Progress bars</a></li>
				                    <li class="z-nav__item"><a class="z-nav__link" href="shortcodes/promo.html"><i class="fa fa-cube"></i> Promoboxes</a></li>
			                    </div>

			                    <div class="col-sm-3 col-md-2">
			                    	<li class="z-nav__item"><a class="z-nav__link" href="shortcodes/sequences.html"><i class="fa fa-ellipsis-h"></i>Sequences</a></li>
				                    <li class="z-nav__item"><a class="z-nav__link" href="shortcodes/sliders.html"><i class="fa fa-cogs"></i> Sliders</a></li>
				                    <li class="z-nav__item"><a class="z-nav__link" href="shortcodes/tables.html"><i class="fa fa-table"></i> Tables</a></li>
				                    <li class="z-nav__item"><a class="z-nav__link" href="shortcodes/tabs.html"><i class="fa fa-arrows"></i>Tabs</a></li>
			                    </div>

			                    <div class="col-sm-3 col-md-2">
				                    <li class="z-nav__item"><a class="z-nav__link" href="shortcodes/testimonials.html"><i class="fa fa-comments"></i>Testimonials</a></li>
				                    <li class="z-nav__item"><a class="z-nav__link" href="shortcodes/tooltips.html"><i class="fa fa-bookmark"></i>Tooltips</a></li>
				                    <li class="z-nav__item"><a class="z-nav__link" href="shortcodes/typography.html"><i class="fa fa-font"></i> Typography</a></li>
			                    </div>
			                    <!-- <li class="z-nav__item"><a class="z-nav__link" href="#">Shortcodes</a></li> -->
			                </ul>
			                <!-- end subsidiary menu list-->
			            </li>
					        </ul>
					        </div><!-- end list menu inner container -->
					        <!-- end list menu item -->
					    </nav>
					    <!-- end navigation section -->
					</div> <!-- end container -->
				</div> <!-- end fixed top block -->

				<div class="large-header hero-header">
					<div id="video-container" class="video-header-container">
						
					</div>
					
					<h1 class="main-title">All Mighty of Technology</h1>
					<h2 class="main-title-helper">gathered in one bootstrap template</h2>

					<a class="btn btn-info btn--decorated" href="http://themeforest.net/item/allec-bootstrapless-template-with-page-builder/8986248#content">Purchase Template</a>
				</div>
			</div>
			
		</header><!-- /header -->