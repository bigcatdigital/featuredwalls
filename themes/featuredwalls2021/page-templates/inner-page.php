<?php
	/* Template Name: Inner page template */
	get_header();
?>  
	<?php if (get_field('leader-image') && !empty(get_field('leader-image'))) { 
		$leader_image_url = get_field('leader-image')['url'];
		$leader_image_alt = esc_attr(get_field('leader-image')['alt']);
	?>
	<!-- Page content start: Page header -->
	<section class="bc-hero has-lines bc-innerpage-hero">
		<picture class="bc-hero__media">
			<img src="<?php echo $leader_image_url ?>" alt="<?php echo $leader_image_alt ?>" />
		</picture>
		<article class="bc-hero__body bc-content-component" aria-label="Main page hero body">
			<div class="bc-hero__body__content bc-text-block">
				<h1 class="bc-hero__heading"><?php echo get_field('leader-header') ?></h1>
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
		<div class="bc-content-component--text bc-content-block bc-column">
			<div class="bc-text-block">
				<h1>Custom designed resin driveways</h1>
				<p class=""><strong>Elegant, long lasting, durable, beautiful.</strong></p>	 
				<p>We we create custom designed resin bound surfaces for driveways, pathways, patios, walkways...anywhere a stone or tarmac surface can be used.</p>
				<p><a class="bc-scroll-link" href="#resin-body-content"><i>Find out why and how below here.</i></a></p>
			</div><!-- // .bc-text-block -->
		</div><!-- // .bc-contnt-component--text -->
		<div class="bc-content-component--media bc-column">
      <picture class="">
        <img src="../assets/media/resin-bound-compass-2.jpg" alt="A resin bound driveway with embedded compass design" />
      </picture>
    </div>
    <div class="bc-content-component--text" id="resin-body-content">
			<div class="bc-text-block">
				<h2>What is is?</h2>
				<p><a href="https://www.vubaresinproducts.com/blog/what-can-you-lay-resin-bound-on">Resin bound</a> is a surfacing material that is created by mixing <strong>resin</strong> and <strong>aggregate stone</strong>. The mixture is then laid onto the surface to create a strong, clear and permeable finish. It is a popular option for footpaths, patios, walkways and driveways.</p>
				<p>Some people call it “<i>stone carpet</i>”, it provides a seamless finish which is durable and has no loose stones or weeds to remove. </p> 
				<p>It&apos;s <strong>permeable</strong> too, as the mixing process creates small gaps between the composite aggregates, this supports drainage requirements. That&apos; good news in itself but it also avoids any need for planning permission that may be required for other surfaces.</p>
				<p>It has improved slip resistance; it is weed and frost resistant and colour-stable.</p>
				<p>Resin bound surfaces can even be laid over existing driveways, car parks and other existing stone pavements. </p>
				<h2>The design possibilities</h2>
				<p>They’re almost limitless, any shape can be created. There are standard colour combinations and we can work to make an almost limitless range of new colours to suit your needs.</p>
				<p>This wide range of colours and blends make for unique design options and it makes for a beautiful alternative to traditional outdoor surfaces. </p>
				<p><strong>Sound like your thing?</strong></p>
				<p><a class="bc-scroll-link" href="#get-started">Get in touch with us here and tell us what you&apos;re thinking</a>.</p>
				<p>We will find a design solution that works for you.</p>
				<p class="bc-icon-link">
					<svg class="svg-icon">
						<use xlink:href="../assets/media/svg/icons/bc-svgs.svg#arrow--left"></use>
					</svg>
					<a href="../">Back to our homepage</a>	
				</p>
			</div>
    </div><!-- // .bc-content-component -->  
	</section>
	<!-- // About resin bound driveways -->
  <section id="get-started" class="bc-container bc-get-started">
				<article class="">
					<div class="bc-text-component bc-content-block bc-column">
						<h1>Get started</h1>
						<p>Contact us now by email, phone or on social media to get started.</p>
					</div><!-- // bc-grid column-->
					<div class="bc-column bc-text-component bc-get-started__links">
						<div class="bc-get-started__column">
							<div class="bc-get-started__link">
								<span class="bc-get-started__button-wrap">
									<a href="tel:0863627302"class="bc-get-started__button bc-call-to-action-button">
										<svg class="svg-icon">
											<use xlink:href="../assets/media/svg/icons/bc-svgs.svg#phone-outline-2"></use>
										</svg>	
										<span class="bc-get-started__button__text">086 362 7302</span>	 	
									</a><!-- // .bc-get-started__button -->	
								</span><!-- // .bc-get-started__button-wrap -->	
							</div><!-- // .bc-get-started__link -->
						</div><!-- // .bc-get-started__column -->
						<div class="bc-get-started__column">
							<div class="bc-get-started__link">
								<span class="bc-get-started__button-wrap">
									<a href="https://www.facebook.com/resinbounddesigns"class="bc-get-started__button bc-call-to-action-button">
										<svg class="svg-icon">
											<use xlink:href="../assets/media/svg/icons/bc-svgs.svg#facebook"></use>
										</svg>		
									<span class="bc-get-started__button__text">Resin Bound Designs Ireland</span>	
									</a><!-- // .bc-get-started__button -->	
								</span><!-- // .bc-get-started__button-wrap -->	
							</div><!-- // .bc-get-started__link -->
						</div><!-- // .bc-get-started__column -->
						<div class="bc-get-started__column">
							<div class="bc-get-started__link">
								<span class="bc-get-started__button-wrap">
									<a href="https://www.facebook.com/featuredbespokewallsandceilings"class="bc-get-started__button bc-call-to-action-button">
										<svg class="svg-icon">
											<use xlink:href="../assets/media/svg/icons/bc-svgs.svg#facebook"></use>
										</svg>		
										<span class="bc-get-started__button__text">Featured Walls and Ceilings</span>
									</a><!-- // .bc-get-started__button -->	
								</span><!-- // .bc-get-started__button-wrap -->	
							</div><!-- // .bc-get-started__link -->
						</div><!-- // .bc-get-started__column -->
						<div class="bc-get-started__column">
							<div class="bc-get-started__link">
								<span class="bc-get-started__button-wrap">
									<a href="mailto:capsltd@hotmail.com" class="bc-get-started__button bc-call-to-action-button">
										<svg class="svg-icon">
											<use xlink:href="../assets/media/svg/icons/bc-svgs.svg#email-at"></use>
										</svg>		
										<span class="bc-get-started__button__text">capsltd@hotmail.com</span> 
									</a><!-- // .bc-get-started__button -->	
								</span><!-- // .bc-get-started__button-wrap -->	
							</div><!-- // .bc-get-started__link -->
						</div><!-- // .bc-get-started__column -->
					</div><!-- // bc-grid column-->
				</article><!-- .bc-grid--x2 -->
			</section><!-- // Get started -->
<?php get_footer(); ?>