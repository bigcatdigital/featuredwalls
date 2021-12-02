<?php
	/* Template Name: Inner page template */
	get_header();
?>  
	<?php if (is_array(get_field('leader-image'))) { 
		echo '<!-- page leader --> ';
		$leader_image_url = esc_url(get_field('leader-image')['url']);
		$leader_image_alt = esc_attr(get_field('leader-image')['alt']);
	?>
	<!-- Page content start: Page header -->
	<section id="main-site-content" class="bc-hero has-lines bc-innerpage-hero">
		<picture class="bc-hero__media">
			<img src="<?php echo $leader_image_url ?>" alt="<?php echo $leader_image_alt ?>" />
		</picture>
		<article class="bc-hero__body bc-content-component" aria-label="Main page hero body">
			<div class="bc-hero__body__content bc-text-block">
				<h1 class="bc-hero__heading"><?php the_title() ?></h1>
				<?php if (get_field('leader-sub-header') && strcmp(get_field('leader-sub-header'), '') !== 0) { ?>
				<h2><?php echo get_field('leader-sub-header') ?></h2>
				<?php } ?>
			</div>
		</article>
		<div class="bc-media-overlay"></div>
		<div class="lines"></div>
	</section><!-- // .bc-hero -->
	<?php }//end if get_file('leader-image') ?>
	<!-- About resin bound driveways-->	
  <section id="body-content" class="bc-container " aria-label="Find out about our stylish featured walls and Ceilings">
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
    <div class="bc-content-component--text" id="resin-body-content">
			<div class="bc-text-block">
			<?php wp_reset_postdata(); 
				the_content();
			?>
			</div>
    </div><!-- // .bc-content-component -->  
	</section>
	<?php get_footer(); ?>