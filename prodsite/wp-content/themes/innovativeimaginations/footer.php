<!-- Footer section -->
		<footer class="footer">
			<div class="container">
				<!-- Twitter carousel -->
				<div class="swiper-container">
					<div class="swiper-wrapper" id="twitter-feed"></div>
					<!-- Slider pagination -->
					<div class="swiper-pagination"></div>
				</div>

				<div class="row">
				
				<!-- Latest post -->
				<div class="col-sm-4">
					<h3 class="heading-info">Latest from blog:</h3>

					<div class="row">
					<?php $query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 2, 'orderby' => 'menu_order','order' => 'DESC') ); ?>
						<?php if($query->have_posts()) : ?>
							<?php while ($query->have_posts()) : $query->the_post(); ?>
								<div class="col-xs-6 col-sm-12 one-column">
									<article class="post post--latest">
										<h3 class="not-visible"><?php the_title(); ?></h3>
										<a class="post__images" href="<?php the_permalink(); ?>">
											<?php the_post_thumbnail('circle-image'); ?>
										</a>
										<a class="post__text" href="<?php the_permalink(); ?>"><?php echo substr(get_the_excerpt(), 0, 75); ?>
</a>
										<time datetime="2015-07-17" class="post__date"><?php the_date('F j, Y'); ?></time>
									</article>
								</div>
							<?php endwhile; ?>
						<?php else : ?>
							<?php wp_reset_query(); ?>
							<h1>No Post Found</h1>
							<?php get_search_form( ); ?>
						<?php endif; ?>
					</div>
				</div>
				<!-- end latest post -->
				
				<!-- Contact info about company -->
				<div class="col-sm-4">
					<h3 class="heading-info heading-info--mobile">Contact info:</h3>
					<!-- Contact information about company -->
						<address class="contact-info contact-info--list">
							<div class="row">
								<div class="col-xs-6 col-sm-12 one-column">
									<a href="http://maps.google.com/?q=101 West Street, New York, NY 10014" class="contact-info__item" target="_blank">
										<i class="fa fa-location-arrow"></i>
										101 West Street, New York, NY 10014
									</a>
									<a class="contact-info__item" href="tel://1-888-555-5555">
										<i class="fa fa-mobile"></i>
										+1-888-555-5555
									</a>
								</div>
					
								<div class="col-xs-6 col-sm-12 one-column">
									<a class="contact-info__item" href="mailto:info@allec.com,sales@allec.com?subject=Email from website">
										<i class="fa fa-envelope"></i>
										info@allec.com / sales@allec.com
									</a>
									<a href="skype:allec-support?call" class="contact-info__item">
										<i class="fa fa-skype"></i>
										allec-support
									</a>
								</div>
							</div>
						</address>
						<!-- end contact information -->
				</div>
				<!-- end contact info -->
				
				<!-- Social links -->
				<div class="col-sm-4">
				<h3 class="heading-info heading-info--mobile">We’re social:</h3>
					<div class="social social--default">
						<!-- List with social icons -->
						<ul>
							<li class="social__item"><a class="social__link" href="https://twitter.com/OliaGozha" target="_blank"><i class="social__icon fa fa-twitter"></i></a></li>
							<li class="social__item"><a class="social__link" href="https://www.facebook.com/olia.gozha" target="_blank"><i class="social__icon fa fa-facebook"></i></a></li>
							<li class="social__item"><a class="social__link" href="https://plus.google.com/u/0/+OliaGozha/posts" target="_blank"><i class="social__icon fa fa-google-plus"></i></a></li>
							<li class="social__item"><a class="social__link" href="#" target="_blank"><i class="social__icon fa fa-pinterest"></i></a></li>
							<li class="social__item"><a class="social__link" href="#" target="_blank"><i class="social__icon fa fa-tumblr"></i></a></li>
							<li class="social__item"><a class="social__link" href="http://www.linkedin.com/pub/olia-gozha/49/b91/268" target="_blank"><i class="social__icon fa fa-linkedin"></i></a></li>
							<li class="social__item"><a class="social__link" href="#" target="_blank"><i class="social__icon fa fa-youtube"></i></a></li>
							<li class="social__item"><a class="social__link" href="#" target="_blank"><i class="social__icon fa fa-github-alt"></i></a></li>
							<li class="social__item"><a class="social__link" href="#" target="_blank"><i class="social__icon fa fa-flickr"></i></a></li>
							<li class="social__item"><a class="social__link" href="#" target="_blank"><i class="social__icon fa fa-vimeo-square"></i></a></li>
							<li class="social__item"><a class="social__link" href="http://dribbble.com/OliaGozha" target="_blank"><i class="social__icon fa fa-dribbble"></i></a></li>
							<li class="social__item"><a class="social__link" href="#" target="_blank"><i class="social__icon fa fa-stumbleupon"></i></a></li>
							<li class="social__item"><a class="social__link" href="http://instagram.com/olechka_dumka#" target="_blank"><i class="social__icon fa fa-instagram"></i></a></li>
							<li class="social__item"><a class="social__link" href="#" target="_blank"><i class="social__icon fa fa-soundcloud"></i></a></li>
							<li class="social__item"><a class="social__link" href="http://www.behance.net/olia_gozha" target="_blank"><i class="social__icon fa fa-behance"></i></a></li>
							<li class="social__item"><a class="social__link" href="#" target="_blank"><i class="social__icon fa fa-vine"></i></a></li>
						</ul>
					</div>
				</div>
				<!-- end social links -->
				</div><!-- end row -->
				
				<div class="copy">
					&copy; Allec, 2015. All rights reserved. Done by <a href="http://themeforest.net/user/olechka" target="_blank">Congruity Hub</a>
				</div>

			</div><!-- end container -->
		</footer>
		<!-- end footer section -->

		<div class="top-scroll"><i class="fa fa-angle-up"></i></div>
	
	</div>

	<div class="animationload">
        	<div class="preloader"></div>
    </div>


<?php wp_footer(); ?>
<?php if(is_front_page()){ ?>
	<!-- JavaScript-->
		<!-- External-->
		<!-- jQuery 1.10.1--> 
        <script>window.jQuery || document.write('<script src="<?php bloginfo('template_url'); ?>/external/jquery/jquery-1.10.1.min.js"><\/script>')</script>
		<script>
			$(document).ready(function() { 
	           featureSlider();
	           fadingSlider();
	           numberStart();
	           preloader();

	           if (!Modernizr.touch && Modernizr.video) {
				  if (Modernizr.video.webm) {
				    $('.video-header-container').append('<video id="video-header" class="media-element"  autoplay="autoplay" preload="none" loop="loop" muted="" src="video/envato.webm" >');
				  } else if (Modernizr.video.ogg) {
				    $('.video-header-container').append('<video id="video-header" class="media-element"  autoplay="autoplay" preload="none" loop="loop" muted="" src="video/envato.ogv" >');
				  } else if (Modernizr.video.h264){
				     $('.video-header-container').append('<video id="video-header" class="media-element"  autoplay="autoplay" preload="none" loop="loop" muted="" src="video/envato.mp4" >');
				  }

				  videoLoop('video-header');
				}

				var video = document.getElementById("video-container");
				video.muted= true;
				video.volume = 0.0;
				

	           	$('.feature .feature__heading').one('inview', function (event, visible) {
                        if (visible == true) {
                            $('.feature__image.start-1').addClass('fadeInUp');
                            $('.feature__image.start-2').addClass('fadeInUp stage2');
                            $('.feature__image.start-3').addClass('fadeInUp stage3');
                        }
                });

                $('.animated-row').one('inview', function (event, visible) {
                        if (visible == true) {
                            $('.list.start-1').addClass('fadeInUp');
                            $('.image-container.start-2').addClass('fadeInUp stage2');
                            $('.list.start-3').addClass('fadeInUp stage3');
                        }
                });

                $('.short-text').one('inview', function (event, visible) {
                        if (visible == true) {
                            $(this).addClass('fadeIn slow');
                        }
                });
               
			});
		</script>
<?php } ?>
</body>
</html>