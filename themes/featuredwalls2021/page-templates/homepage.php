<?php
	/* Template Name: Homepage template */
	get_header();
?> 
			<?php if (get_field('leader-image') && !empty(get_field('leader-image'))) { 
				$leader_image_url = esc_url(get_field('leader-image')['url']);
				$leader_image_alt = esc_attr(get_field('leader-image')['alt']);
			?>
			<!-- Page content start: Hero -->
			<section id="main-site-content" class="bc-hero--full-screen  has-lines" aria-label="Welcome to Featured Walls and Ceilings">
				<picture class="bc-hero__media">
					<img src="<?php echo $leader_image_url ?>" alt="<?php echo $leader_image_alt ?>" />
				</picture>
				<article class="bc-hero__body bc-content-component" aria-label="Main page hero body">
					<div class="bc-hero__body__content bc-text-block">
						<h1 class="bc-hero__heading"><?php echo get_field('leader-header') ?></h1>
						<p class=""><strong><?php echo get_field('leader-sub-header') ?></strong></p>
					</div>
				</article>
				<footer class="bc-hero__footer">
					<a href="#body-content" class="bc-hero__footer__scroll bc-scroll-link">
						About our work
						<svg class="svg-icon">
							<use xlink:href="assets/media/svg/icons/bc-svgs.svg#carat--down"></use>
						</svg>
					</a>
				</footer>
				<div class="bc-media-overlay"></div>
				<div class="lines"></div>
			</section>
			<?php }//end if get_file('hero-image') ?>
			<!-- // Hero -->
			<?php if (get_field('carousel-feature-title') && strcmp(get_field('carousel-feature-title'), '') !== 0) { 
				$title = get_field('carousel-feature-title');
				if (get_field('feature-intro-paragraph-#1')) {
					$para_1 = get_field('feature-intro-paragraph-#1');
				}
				if (get_field('feature-intro-paragraph-#2')) {
					$para_2 = get_field('feature-intro-paragraph-#2');
				}
				if (get_field('carousel-call-to-action-text') && strcmp(get_field('carousel-call-to-action-text'), '') !== 0) {
					$carousel_cta = get_field('carousel-call-to-action-text');
				}
			?>
			<!-- Carousel feature -->
			<section id="body-content" class="bc-container bc-fwc-containter" aria-label="Find out about our stylish featured walls and Ceilings">
				<div class="bc-content-component--text bc-content-block bc-column">
					<div class="bc-text-block">
						<h2 class="bc-section-title"><?php echo $title ?></h2>
						<?php echo $para_1 ?>
						<?php echo $para_2 ?>
					</div><!-- // .bc-text-block -->	
				</div><!-- // .bc-content-component -->
				<?php if (is_array(get_field('carousel-images')) && is_array(get_field('carousel-images')['carousel-image-#1']) && is_array(get_field('carousel-images')['carousel-image-#2'])) { 
					echo '<!-- Do carousel -->' ; 
					$image_1 = get_field('carousel-images')['carousel-image-#1'];
					$image_2 = get_field('carousel-images')['carousel-image-#2'];
				?>
				<div class="bc-flickity bc-flickity--feature-slider bc-content-component--media">
					<article class="bc-flickity__slide">
						<picture class=""> 
							<?php if (is_array(get_field('carousel-images')['carousel-image-#1-small'])) {
								$image_src = esc_url(get_field('carousel-images')['carousel-image-#1-small']['url']);
								$image_alt = esc_attr(get_field('carousel-images')['carousel-image-#1-small']['alt']);
							?>
							<source srcset="<?php echo $image_src ?>" alt="<?php echo $image_alt ?>" media="(max-width: 767px)" />
							<?php }//end if image-1-small ?>
							<img src=" <?php echo esc_url($image_1['url']) ?> " alt="<?php echo esc_attr($image_1['alt']) ?>" />

						</picture><!-- // .bc-hero__media -->
					</article><!-- // .bc-flickity__slide -->
					<article class="bc-flickity__slide" aria-label="Hero slide #1">
						<picture class="">
						<?php if (is_array(get_field('carousel-images')['carousel-image-#2-small'])) {
								$image_src = esc_url(get_field('carousel-images')['carousel-image-#2-small']['url']);
								$image_aly = esc_attr(get_field('carousel-images')['carousel-image-#2-small']['alt']);
							?>
							<source srcset="<?php echo $image_src ?>" alt="<?php echo $image_alt ?>" media="(max-width: 767px)" />
							<?php }//end if image-1-small ?>
							<img src="<?php echo esc_url($image_2['url']) ?>" alt="<?php echo esc_attr($image_2['alt']) ?>" />
						</picture><!-- // .bc-hero__media -->
					</article><!-- // .bc-flickity__slide -->
					<?php if (is_array(get_field('carousel-images')['carousel-image-#3'])) { 
						$image_3 = get_field('carousel-images')['carousel-image-#3'];	
					?>
					<article class="bc-flickity__slide" aria-label="Hero slide #3">
						<picture class="">
							<?php if (is_array(get_field('carousel-images')['carousel-image-#3-small'])) {
									$image_src = esc_url(get_field('carousel-images')['carousel-image-#3-small']['url']);
									$image_aly = esc_attr(get_field('carousel-images')['carousel-image-#3-small']['alt']);
								?>
								<source srcset="<?php echo $image_src ?>" alt="<?php echo $image_alt ?>" media="(max-width: 767px)" />
								<?php }//end if image-1-small ?>
								<img src="<?php echo esc_url($image_3['url']) ?>" alt="<?php echo esc_attr($image_3['alt']) ?>" />
							</picture><!-- // .bc-hero__media -->
					</article><!-- // .bc-flickity__slide -->
					<?php }//end if is array carousel image #3 ?>
					<article class="bc-flickity__slide" aria-label="Hero slide #4">
						<picture class="">
							<img src="assets/media/featured-walls-and-ceilings-wood-finish.jpg" alt="A custom featured wall with inset fireplace and lighting" />
						</picture><!-- // .bc-hero__media -->
					</article><!-- // .bc-flickity__slide -->
				</div><!-- //.bc-flickity -->
				<?php }// endif is_array(carouse-images) ?>
				<?php if ($carousel_cta) { ?>
				<div class="bc-call-to-action">
					<p class="bc-call-to-action-button">	
						<a href="#get-started" class="bc-scroll-link"><?php echo $carousel_cta ?></a>
					</p><!-- // .bc-call-to-action-button -->
				</div><!-- // .bc-call-to-action -->
				<?php }//end if $carousel_cta ?>
			</section>
			<?php }//end if get_field('carousel-feature-title') ?>
			<!-- // Flickity hero slider -->
			<section class="bc-container bc-fwc-containter">
				<div class="bc-content-component--text bc-content-block bc-column">
					<div class="bc-text-block">
						<h1 class="bc-content-block__heading"><span class="bc-featured-intro__heading">More of what we do</span></h1> 
						<div class="bc-featured-intro__body"> 
							<p class=""><strong>Imagine a space for set aside</strong> for a calming sensory experience for a child or loved with sensory input needs? </p>	
							<p>Or <strong>your own driveway custom designed</strong> for you using resin bound surfacing? See below...</p>
						</div>
					</div>
				</div><!-- .bc-featured-intro -->
				<div class="bc-2-col-feature bc-content-component--media">
					<div class="bc-2-col-feature__col"> 
						<article class="bc-2-col-feature__media is-object-contain" aria-label="Our calming star ceilings">	
							<picture class="">
								<img src="assets/media/star-ceiling-lights-2.jpg" alt="A star ceiling lighting design to create a relaxing experience in your room" />
							</picture><!-- //  -->
						</article><!-- // .bc-2-col-feature__media -->
						<div class="bc-2-col-feature__overlay"> 
							<h2>Custom sensory room design</h2>
							<p>Add colour, life and a calming experience with a customised sensory room.</p> 
							<p class="bc-arrow-link">
								<a href="sensory-rooms/">Find out more here</a>				
								<svg class="svg-icon"> 
									<use xlink:href="assets/media/svg/icons/bc-svgs.svg#arrow"></use>
								</svg>	
							</p><!-- // .bc-arrow-link -->
						</div><!-- // .bc-2-col-feature__overlay -->
					</div><!-- // .bc-2-col-feature__col -->
					<div class="bc-2-col-feature__col"> 
						<article class="bc-2-col-feature__media is-object-contain" aria-label="Our calming star ceilings">	
							<picture class=""> 
								<img src="assets/media/resin-bound-compass-2.jpg" alt="A ceiling LED lighting installation to add atmosphere to a room" />
							</picture><!-- //  -->
						</article><!-- // .bc-2-col-feature__media -->
						<div class="bc-2-col-feature__overlay"> 
							<h2>Resin bound surface design</h2>
							<p>Elegant, long lasting, durable, beautiful custom designed resin bound driveways.</p> 
							<p class="bc-arrow-link">
								<a href="resin-driveways/">Find out more here</a>				
								<svg class="svg-icon">
									<use xlink:href="assets/media/svg/icons/bc-svgs.svg#arrow"></use>
								</svg>	
							</p><!-- // .bc-arrow-link -->
						</div><!-- // .bc-2-col-feature__overlay -->
					</div><!-- // .bc-2-col-feature__col -->
				</div><!-- // .bc-2-col-feature -->
			</section><!-- // More about our work -->

<?php get_footer(); ?>
			