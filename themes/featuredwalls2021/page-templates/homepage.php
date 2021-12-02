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
							<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg'); ?>#carat--down"></use>
						</svg>
					</a>
				</footer>
				<div class="bc-media-overlay"></div>
				<div class="lines"></div>
			</section>
			<?php }//end if get_file('hero-image') ?>
			<!-- // Hero -->
			<section id="body-content" class="bc-container bc-fwc-containter" aria-label="Find out about our stylish featured walls and Ceilings">
				<!-- FW&C WP theme: Single image/Carousel feature -->
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
		<div class="bc-content-component--text bc-content-block bc-column">
			<div class="bc-text-block">
				<h2 class="bc-section-title"><?php echo $title ?></h2>
				<?php echo $para_1 ?>
				<?php echo $para_2 ?>
			</div><!-- // .bc-text-block -->	
		</div><!-- // .bc-content-component -->
		<?php if (is_array(get_field('carousel-single-images')['carousel-single-image--large']) || is_array(get_field('carousel-single-images')['carousel-single-image--small'])) { 
			echo '<!-- WP theme: Do single image -->' ; 
			$large_image = get_field('carousel-single-images')['carousel-single-image--large'];	
			$small_image = get_field('carousel-single-images')['carousel-single-image--small'] ;	
		?>
		<div class="bc-content-component--media bc-column">
			<picture class="">
				<?php if (is_array($small_image)) { ?>
					<source srcset="<?php echo esc_url($small_image['url']) ?>" alt="<?php echo esc_url($small_image['alt']) ?>" media="(max-width: 767px)" />
					<?php } //end if is_array $small_image } ?>
					<?php if (is_array($large_image)) { ?> 
					<img src="<?php echo esc_url($large_image['url']) ?>" alt="<?php echo esc_attr($large_image['alt']) ?>" />
					<?php } ?>
			</picture>
		</div>
		<?php // end if 'carousel-single-images' 
			} elseif (is_array(get_field('carousel-images')['carousel-image-#1']) && is_array(get_field('carousel-images')['carousel-image-#2'])) { 
			echo '<!-- Do carousel -->' ; 
			$carousel_image_1 = get_field('carousel-images')['carousel-image-#1'];
			$carousel_image_2 = get_field('carousel-images')['carousel-image-#2'];
		?>
		<div class="bc-flickity bc-flickity--feature-slider bc-content-component--media">
			<article class="bc-flickity__slide" aria-label="<?php echo esc_attr($carousel_image_1['alt']) ?>">
				<picture class=""> 
					<?php if (is_array(get_field('carousel-images')['carousel-image-#1-small'])) {
						$small_image = get_field('carousel-images')['carousel-image-#1-small'];
					?>
					<source srcset="<?php echo esc_url($small_image['url']) ?>" alt="<?php esc_attr($small_image['alt']) ?>" media="(max-width: 767px)" />
					<?php }//end if image-1-small ?>
					<img src=" <?php echo esc_url($carousel_image_1['url']) ?> " alt="<?php echo esc_attr($carousel_image_1['alt']) ?>" />
				</picture><!-- // .bc-hero__media -->
			</article><!-- // .bc-flickity__slide #1 -->
			<article class="bc-flickity__slide" aria-label="<?php echo esc_attr($carousel_image_2['alt']) ?>">
				<picture class="">
					<?php if (is_array(get_field('carousel-images')['carousel-image-#2-small'])) {
						$small_image = get_field('carousel-images')['carousel-image-#2-small'];
					?>
					<source srcset="<?php echo esc_url($small_image['url']) ?>" alt="<?php esc_attr($small_image['alt']) ?>" media="(max-width: 767px)" />
					<?php }//end if image-2-small ?>
					<img src="<?php echo esc_url($carousel_image_2['url']) ?>" alt="<?php echo esc_attr($carousel_image_2['alt']) ?>" />
				</picture><!-- // .bc-hero__media -->
			</article><!-- // .bc-flickity__slide #2 -->
			<?php if (is_array(get_field('carousel-images')['carousel-image-#3'])) { 
				$carousel_image = get_field('carousel-images')['carousel-image-#3'];	
			?>
			<article class="bc-flickity__slide" aria-label="<?php echo esc_attr($carousel_image['alt']) ?>">
				<picture class="">
					<?php if (is_array(get_field('carousel-images')['carousel-image-#3-small'])) {
						$small_image = get_field('carousel-images')['carousel-image-#3-small'];
					?>
					<source srcset="<?php echo esc_url($small_image['url']) ?>" alt="<?php esc_attr($small_image['alt']) ?>" media="(max-width: 767px)" />
					<?php }//end if image-3-small ?>
					<img src="<?php echo esc_url($carousel_image['url']) ?>" alt="<?php echo esc_attr($carousel_image['alt']) ?>" />
				</picture><!-- // .bc-hero__media -->
			</article><!-- // .bc-flickity__slide #3-->
			<?php }//end if is array carousel image #3 ?>
			<?php if (is_array(get_field('carousel-images')['carousel-image-#4'])) { 
				$carousel_image = get_field('carousel-images')['carousel-image-#4'];	
			?>
			<article class="bc-flickity__slide" aria-label="<?php echo esc_attr($carousel_image['alt']) ?>">
				<picture class="">
					<?php if (is_array(get_field('carousel-images')['carousel-image-#4-small'])) {
						$small_image = get_field('carousel-images')['carousel-image-#4-small'];
					?>
					<source srcset="<?php echo esc_url($small_image['url']) ?>" alt="<?php esc_attr($small_image['alt']) ?>" media="(max-width: 767px)" />
					<?php }//end if image-4-small ?>
					<img src="<?php echo esc_url($carousel_image['url']) ?>" alt="<?php echo esc_attr($carousel_image['alt']) ?>" />
				</picture><!-- // .bc-hero__media -->
			</article><!-- // .bc-flickity__slide #4 -->
			<?php }//end if is array carousel image #4 ?>
			<?php if (is_array(get_field('carousel-images')['carousel-image-#5'])) { 
				$carousel_image = get_field('carousel-images')['carousel-image-#5'];	
			?>
			<article class="bc-flickity__slide" aria-label="<?php echo esc_attr($carousel_image['alt']) ?>">
				<picture class="">
					<?php if (is_array(get_field('carousel-images')['carousel-image-#5-small'])) {
						$small_image = get_field('carousel-images')['carousel-image-#5-small'];
					?>
					<source srcset="<?php echo esc_url($small_image['url']) ?>" alt="<?php esc_attr($small_image['alt']) ?>" media="(max-width: 767px)" />
					<?php }//end if image-5-small ?>
					<img src="<?php echo esc_url($carousel_image['url']) ?>" alt="<?php echo esc_attr($carousel_image['alt']) ?>" />
				</picture><!-- // .bc-hero__media -->
			</article><!-- // .bc-flickity__slide #5 -->
			<?php }//end if is array carousel image #5 ?>
			<?php if (is_array(get_field('carousel-images')['carousel-image-#6'])) { 
				$carousel_image = get_field('carousel-images')['carousel-image-#6'];	
			?>
			<article class="bc-flickity__slide" aria-label="<?php echo esc_attr($carousel_image['alt']) ?>">
				<picture class="">
					<?php if (is_array(get_field('carousel-images')['carousel-image-#6-small'])) {
						$small_image = get_field('carousel-images')['carousel-image-#6-small'];
					?>
					<source srcset="<?php echo esc_url($small_image['url']) ?>" alt="<?php esc_attr($small_image['alt']) ?>" media="(max-width: 767px)" />
					<?php }//end if image-6-small ?>
					<img src="<?php echo esc_url($carousel_image['url']) ?>" alt="<?php echo esc_attr($carousel_image['alt']) ?>" />
				</picture><!-- // .bc-hero__media -->
			</article><!-- // .bc-flickity__slide #6 -->
			<?php }//end if is array carousel image #6 ?>
			<?php if (is_array(get_field('carousel-images')['carousel-image-#7'])) { 
				$carousel_image = get_field('carousel-images')['carousel-image-#7'];	
			?>
			<article class="bc-flickity__slide" aria-label="<?php echo esc_attr($carousel_image['alt']) ?>">
				<picture class="">
					<?php if (is_array(get_field('carousel-images')['carousel-image-#7-small'])) {
						$small_image = get_field('carousel-images')['carousel-image-#7-small'];
					?>
					<source srcset="<?php echo esc_url($small_image['url']) ?>" alt="<?php esc_attr($small_image['alt']) ?>" media="(max-width: 767px)" />
					<?php }//end if image-7-small ?>
					<img src="<?php echo esc_url($carousel_image['url']) ?>" alt="<?php echo esc_attr($carousel_image['alt']) ?>" />
				</picture><!-- // .bc-hero__media -->
			</article><!-- // .bc-flickity__slide #7 -->
			<?php }//end if is array carousel image #7 ?>
			<?php if (is_array(get_field('carousel-images')['carousel-image-#8'])) { 
				$carousel_image = get_field('carousel-images')['carousel-image-#8'];	
			?>
			<article class="bc-flickity__slide" aria-label="<?php echo esc_attr($carousel_image['alt']) ?>">
				<picture class="">
					<?php if (is_array(get_field('carousel-images')['carousel-image-#8-small'])) {
						$small_image = get_field('carousel-images')['carousel-image-#8-small'];
					?>
					<source srcset="<?php echo esc_url($small_image['url']) ?>" alt="<?php esc_attr($small_image['alt']) ?>" media="(max-width: 767px)" />
					<?php }//end if image-8-small ?>
					<img src="<?php echo esc_url($carousel_image['url']) ?>" alt="<?php echo esc_attr($carousel_image['alt']) ?>" />
				</picture><!-- // .bc-hero__media -->
			</article><!-- // .bc-flickity__slide #8 -->
			<?php }//end if is array carousel image #8 ?>
			<?php if (is_array(get_field('carousel-images')['carousel-image-#9'])) { 
				$carousel_image = get_field('carousel-images')['carousel-image-#9'];	
			?>
			<article class="bc-flickity__slide" aria-label="<?php echo esc_attr($carousel_image['alt']) ?>">
				<picture class="">
					<?php if (is_array(get_field('carousel-images')['carousel-image-#9-small'])) {
						$small_image = get_field('carousel-images')['carousel-image-#9-small'];
					?>
					<source srcset="<?php echo esc_url($small_image['url']) ?>" alt="<?php esc_attr($small_image['alt']) ?>" media="(max-width: 767px)" />
					<?php }//end if image-10-small ?>
					<img src="<?php echo esc_url($carousel_image['url']) ?>" alt="<?php echo esc_attr($carousel_image['alt']) ?>" />
				</picture><!-- // .bc-hero__media -->
			</article><!-- // .bc-flickity__slide #9 -->
			<?php }//end if is array carousel image #9 ?>
			<?php if (is_array(get_field('carousel-images')['carousel-image-#10'])) { 
				$carousel_image = get_field('carousel-images')['carousel-image-#10'];	
			?>
			<article class="bc-flickity__slide" aria-label="<?php echo esc_attr($carousel_image['alt']) ?>">
				<picture class="">
					<?php if (is_array(get_field('carousel-images')['carousel-image-#10-small'])) {
						$small_image = get_field('carousel-images')['carousel-image-#10-small'];
					?>
					<source srcset="<?php echo esc_url($small_image['url']) ?>" alt="<?php esc_attr($small_image['alt']) ?>" media="(max-width: 767px)" />
					<?php }//end if image-10-small ?>
					<img src="<?php echo esc_url($carousel_image['url']) ?>" alt="<?php echo esc_attr($carousel_image['alt']) ?>" />
				</picture><!-- // .bc-hero__media -->
			</article><!-- // .bc-flickity__slide #10 -->
			<?php }//end if is array carousel image #10 ?>
			</div><!-- //.bc-flickity -->
			<?php }// endif is_array(carouse-images) ?>
			<?php if ($carousel_cta) { ?>
			<div class="bc-call-to-action">
				<p class="bc-call-to-action-button">	
					<a href="#get-started" class="bc-scroll-link"><?php echo $carousel_cta ?></a>
				</p><!-- // .bc-call-to-action-button -->
			</div><!-- // .bc-call-to-action -->
			<?php }//end if $carousel_cta ?>
		<?php }//end if get_field('carousel-feature-title') ?>
		<!-- // End: FW&C WP theme: Single image/Carousel feature -->
		</section><!-- // .bc-container -->

		<?php if (get_field('split-feature-title') && strcmp(get_field('split-feature-title'), '') !== 0) { ?>
		<!-- FW&C WP theme: Homepage split feature -->
		<section class="bc-container bc-fwc-containter">
			<div class="bc-content-component--text bc-content-block bc-column">
				<div class="bc-text-block">
					<h1 class="bc-content-block__heading"><span class="bc-featured-intro__heading"><?php echo get_field('split-feature-title'); ?></span></h1> 
					<?php if (get_field('split-feature-intro-paragraph')) { ?>
					<div class="bc-featured-intro__body"> 
						<?php echo get_field('split-feature-intro-paragraph') ?>
					</div>
					<?php }//end if split-feature-intro-paragraph ?>
				</div>
			</div><!-- .bc-featured-intro -->
			<div class="bc-2-col-feature bc-content-component--media">
				<?php if (get_field('split-feature-left')) { 
					$split_feature = get_field('split-feature-left');	
				?>
				<!-- Split feature left -->
				<div class="bc-2-col-feature__col"> 
					<article class="bc-2-col-feature__media is-object-contain" aria-label="<?php echo esc_attr($split_feature['split-feature-left-heading']); ?>">	
						<picture class="">
							<?php $split_image = $split_feature['split-image--left']; ?>
							<img src="<?php echo esc_url($split_image['url']); ?>" alt="<?php echo esc_attr($split_image['alt']); ?>" />
						</picture><!-- //  -->
					</article><!-- // .bc-2-col-feature__media -->
					<div class="bc-2-col-feature__overlay"> 
						<h2><?php echo $split_feature['split-feature-left-heading']; ?></h2>
						<p><?php echo $split_feature['split-feature-left-leader']; ?></p> 
						<p class="bc-arrow-link">
							<a href="<?php echo esc_url($split_feature['split-feature-left-link']['url']); ?>"><?php echo $split_feature['split-feature-left-link']['title']; ?></a>				
							<svg class="svg-icon"> 
								<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg'); ?>#arrow"></use>
							</svg>	
						</p><!-- // .bc-arrow-link -->
					</div><!-- // .bc-2-col-feature__overlay -->
				</div><!-- // .bc-2-col-feature__col -->
				<!-- // Split feature left -->
				<?php } //end if split-feature-left ?>
				<?php if (get_field('split-feature-right')) { 
						$split_feature = get_field('split-feature-right');	
				?>
				<!-- Split feature right -->
				<div class="bc-2-col-feature__col"> 
					<article class="bc-2-col-feature__media is-object-contain" aria-label="<?php echo esc_attr($split_feature['split-feature-right-heading']); ?>">	
						<picture class="">
							<?php $split_image = $split_feature['split-image--right']; ?>
							<img src="<?php echo esc_url($split_image['url']); ?>" alt="<?php echo esc_attr($split_image['alt']); ?>" />
						</picture><!-- //  -->
					</article><!-- // .bc-2-col-feature__media -->
					<div class="bc-2-col-feature__overlay"> 
						<h2><?php echo $split_feature['split-feature-right-heading']; ?></h2>
						<p><?php echo $split_feature['split-feature-right-leader']; ?></p> 
						<p class="bc-arrow-link">
							<a href="<?php echo esc_url($split_feature['split-feature-right-link']['url']); ?>"><?php echo $split_feature['split-feature-right-link']['title']; ?></a>				
							<svg class="svg-icon"> 
								<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg'); ?>#arrow"></use>
							</svg>	
						</p><!-- // .bc-arrow-link -->
					</div><!-- // .bc-2-col-feature__overlay -->
				</div><!-- // .bc-2-col-feature__col -->
				<!-- // Split feature right -->
				<?php } //end if split-feature-right ?>
			</div><!-- // .bc-2-col-feature -->
		</section><!-- // .bc-container -->
		<!-- // End: FW&C WP theme: Homepage split feature -->
		<?php } //endif split-feature-title ?>
<?php get_footer(); ?>
			