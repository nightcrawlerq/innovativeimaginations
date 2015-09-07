<?php get_header(); ?>

		<section class="container">
			<h3 class="not-visible">Main conrainer</h3>

			<div class="text-plus bottom-space--m">
				<h3 class="text-plus__heading"><?php if( get_field('plus_heading')) : the_field('plus_heading'); else: ''; endif; ?></h3>
				<p class="text-plus__info">A Lot of Features You May Love</p>
			</div>

			<div class="row">
			<?php $query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 3, 'tax_query' => array(array('taxonomy'=>'post_tag','field'=>'slug','terms'=>'feature'),),
 'orderby' => 'menu_order','order' => 'DESC') ); ?>
			            <?php if($query->have_posts()) : ?>
			                <?php while ($query->have_posts()) : $query->the_post(); ?>
			                	<div class="col-sm-4 hidden-xs">
			                		<div class="feature">
			                			<div class="feature__image feature__image--page animated fadeInUpStart start-1">
			                				<?php the_post_thumbnail(); ?>
			                			</div>
			                			<h3 class="feature__heading"><?php the_title(); ?>
			                			</h3>
			                			<p class="feature__info"><?php echo substr(get_the_excerpt(), 0, 200); ?>
			                			</p>
			                		</div>
			                	</div><!-- end col -->
			            <?php endwhile; ?>
			        <?php else : ?>
			            <?php wp_reset_query(); ?>
			            <h1>No Post Found</h1>
			            <?php get_search_form( ); ?>
			        <?php endif; ?>
			</div><!-- end row -->

			<div class="swiper-container fearure-slider">
			  <div class="swiper-wrapper">
			      <!--Slide-->
			      <div class="swiper-slide"> 
			        	<div class="feature">
							<div class="feature__image feature__image--page">
								<img src="<?php bloginfo('template_url'); ?>/images/feature/1.png" alt="">
							</div>
							<h3 class="feature__heading">Allec showcase</h3>
							<p class="feature__info">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in lacinia quam. Fusce quis nulla tincidunt, interdum magna vitae, viverra est. Nunc eu sodales turpis, varius viverra mauris.</p>
						</div>
			      </div>
			      
			      <!--Slide-->
			      <div class="swiper-slide">
				        <div class="feature">
							<div class="feature__image feature__image--responsive">
								<img src="<?php bloginfo('template_url'); ?>/images/feature/2.png" alt="">
							</div>
							<h3 class="feature__heading">Compatible with any device</h3>
							<p class="feature__info">Aenean porta, elit vitae tristique consequat, nisi tellus tincidunt erat, sit amet interdum elit quam at velit. Mauris venenatis metus sed purus tincidunt placerat. </p>
						</div>
			      </div>
			      
			      <!--Slide-->
			      <div class="swiper-slide"> 
			        	<div class="feature">
							<div class="feature__image feature__image--clock">
								<img src="<?php bloginfo('template_url'); ?>/images/feature/3.png" alt="">
							</div>
							<h3 class="feature__heading">Quick implementation</h3>
							<p class="feature__info">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in lacinia quam. Fusce quis nulla tincidunt, interdum magna vitae, viverra est. Nunc eu sodales turpis, varius viverra mauris.</p>
						</div>
			      </div>
			  </div>

			  <div class="product-slider-pagination feature-pagination"></div>
			</div>
		</section><!-- end container -->

		<div class="number-container bottom-space--small">
			<div class="container">
			<div class="row">
				<h2 class="block-title block-title--simple" id="number-start">Allec in Numbers</h2>

			
				<!-- Brand shape stat view -->
					<div class="col-xs-6 col-md-3 one-column">
						<div class="stat stat--shape">
							<p class="stat__dimension">download</p>
							<span class="stat__number" data-result="140k" data-value="140">0</span>
						</div>
					</div><!-- end col -->

					<div class="col-xs-6 col-md-3 one-column">
						<div class="stat stat--shape stat--shape-end">
							<p class="stat__dimension">spent hours</p>
							<span class="stat__number" data-result="6718" data-value="471">0</span>
						</div>
					</div><!-- end col -->

					<div class="col-xs-6 col-md-3 one-column">
						<div class="stat stat--shape">
							<p class="stat__dimension">countries</p>
							<span class="stat__number" data-result="106" data-value="106">0</span>
						</div>
					</div><!-- end col -->

					<div class="col-xs-6 col-md-3 one-column">
						<div class="stat stat--shape last">
							<p class="stat__dimension">loyal clients</p>
							<span class="stat__number" data-result="239" data-value="23">0</span>
						</div>
					</div><!-- end col -->
			</div><!-- end row -->
			</div><!-- end container -->
		</div>

		<div class="container">
			<h2 class="block-title block-title--top-larger">Available Services</h2>
		</div>
		
		<!-- Fading slider -->
		<div class="swiper-container fading-slider">
		  <div class="swiper-wrapper">
		      <!--Slide-->
		      <div class="swiper-slide swiper-no-swiping"> 
		        	<!-- Sevrice preview -->
					<div class="service">
						<div class="icon icon--strips">
							<i class="icon__item fa fa-credit-card">&nbsp;</i>
						</div>
						<a class="service__link" href="single-service.html">
							<h3 class="service__heading">Reasonable Price</h3>
						</a>
						
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in lacinia quam. Fusce quis nulla tincidunt, interdum magna vitae, viverra est. Nunc eu sodales turpis, varius viverra mauris.</p>
					</div>
					<!-- end sevrice preview -->
		      </div>
		      
		      <!-- Slide-->
		      <div class="swiper-slide swiper-no-swiping">
		      	<!-- Sevrice preview -->
					<div class="service">
						<div class="icon icon--strips">
							<i class="icon__item fa fa-heart">&nbsp;</i>
						</div>
						<a class="service__link" href="single-service.html">
							<h3 class="service__heading">Made with Love</h3>
						</a>
						
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in lacinia quam. Fusce quis nulla tincidunt, interdum magna vitae, viverra est. Nunc eu sodales turpis, varius viverra mauris.</p>
					</div>
					<!-- end sevrice preview -->
		      </div>
		      
		      <!--Slide-->
		      <div class="swiper-slide swiper-no-swiping"> 
				<!-- Sevrice preview -->
					<div class="service">
						<div class="icon icon--strips">
							<i class="icon__item fa fa-cogs">&nbsp;</i>
						</div>
						<a class="service__link" href="single-service.html">
							<h3 class="service__heading">Fully Customizable</h3>
						</a>
						
						<p>Nullam lacinia nibh et nisi luctus rhoncus. Cras vitae purus volutpat, rhoncus mauris quis, elementum neque. In cursus magna eget consequat placerat. Nulla facilisi. </p>
					</div>
					<!-- end sevrice preview -->
		      </div>

		      <!-- Slide-->
		      <div class="swiper-slide swiper-no-swiping">
		      	<!-- Sevrice preview -->
					<div class="service">
						<div class="icon icon--strips">
							<i class="icon__item fa fa-phone">&nbsp;</i>
						</div>
						<a class="service__link" href="single-service.html">
							<h3 class="service__heading">Premium-class Support</h3>
						</a>
						
						<p>Sed eget placerat arcu. Nullam porta faucibus ligula, egestas tempus tellus dapibus tincidunt. Nunc vitae interdum massa. Nam in augue quis elit sagittis accumsan.</p>
					</div>
					<!-- end sevrice preview -->
		      </div>
		      

		      <!--Slide-->
		      <div class="swiper-slide swiper-no-swiping"> 
				<!-- Sevrice preview -->
					<div class="service">
						<div class="icon icon--strips">
							<i class="icon__item fa fa-dashboard">&nbsp;</i>
						</div>
						<a class="service__link" href="single-service.html">
							<h3 class="service__heading">Efficient Workflow</h3>
						</a>
						
						<p>Sed eget placerat arcu. Nullam porta faucibus ligula, egestas tempus tellus dapibus tincidunt. Nunc vitae interdum massa. Nam in augue quis elit sagittis accumsan.</p>
					</div>
					<!-- end sevrice preview -->
		      </div>

		      <!--Slide-->
		      <div class="swiper-slide swiper-no-swiping"> 
				<!-- Sevrice preview -->
					<div class="service">
						<div class="icon icon--strips">
							<i class="icon__item fa fa-magic">&nbsp;</i>
						</div>
						<a class="service__link" href="single-service.html">
							<h3 class="service__heading">Innovative Technologies</h3>
						</a>
						
						<p>Sed eget placerat arcu. Nullam porta faucibus ligula, egestas tempus tellus dapibus tincidunt. Nunc vitae interdum massa. Nam in augue quis elit sagittis accumsan.</p>
					</div>
					<!-- end sevrice preview -->
		      </div>

		  </div>

		   <div class="fade-slider-control">
				<a class="prev-arrow" href="#"><i class="fa fa-angle-left"></i></a>
				<a class="next-arrow" href="#"><i class="fa fa-angle-right"></i></a>
			</div><!-- end slider controls-->

			<div class="clearfix"></div>

			<div class="product-slider-pagination fade-pagination"></div>

		</div>

		<div class="container">
			<div class="divider-brand"></div>
		</div>

		<div class="container">
			<h2 class="block-title block-title--simple block-title--bottom-s block-title--top-large">Check Allec in Action</h2>

			<div class="row animated-row">
					<div class="col-sm-12 col-md-6 col-md-push-3">
						<div class="image-container image-container--empty animated fadeInUpStart start-2">
							<div class="video-container video-container--large">
								<iframe src="http://player.vimeo.com/video/18776121?title=0&amp;byline=0&amp;portrait=0" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
							</div>
						</div>
					</div><!-- end col -->

					<div class="col-sm-6 col-md-3 col-md-pull-6">
						<ul class="list list--bordered list--top-line animated fadeInUpStart start-1">
							<li>Etiam augue sem, pellentesque </li>
							<li>Duis nec neque posuere, gravida</li>
							<li>Cras felis nunc, tempus ut</li>
							<li>Ut tincidunt varius pellentesque. Aenean laoreet nibh et nulla </li>
							<li>Donec imperdiet posuere dolor, at fringilla augue</li>
						</ul>
					</div><!-- end col -->
					

					<div class="col-sm-6 col-md-3">
						<ul class="list list--bordered list--top-line animated fadeInUpStart start-3">
							<li>Etiam augue sem, pellentesque </li>
							<li>Duis nec neque posuere, gravida</li>
							<li>Cras felis nunc, tempus ut</li>
							<li>Ut tincidunt varius pellentesque. Aenean laoreet nibh et nulla </li>
							<li>Donec imperdiet posuere dolor, at fringilla augue</li>
						</ul>
					</div><!-- end col -->
				</div><!-- end row -->

				<div class="divider-brand"></div>

				<div class="col-sm-10 col-sm-offset-1">
				<div class="short-text short-text--uni animated fadeInStart">
					<h4>Nullam lacinia nibh et nisi luctus rhoncus. Cras vitae purus volutpat, rhoncus mauris quis, elementum neque. </h4>
	 
					<p>In cursus magna eget consequat placerat. Nulla facilisi. Ut pretium quis lacus quis mollis. Aenean justo mi, adipiscing a ligula id, lobortis porttitor arcu. Cras tincidunt tempus est a scelerisque. Maecenas adipiscing nulla sapien, non laoreet orci accumsan tempus. Vestibulum cursus nisi ut purus lobortis, non aliquet mauris pulvinar.  </p>

					<a class="link link--top" href="about.html">Learn more</a>
				</div>
			</div>
		</div>

		<!-- Colored divider -->
		<div class="divider-color bottom-space--m"></div>

<?php get_footer(); ?>		
