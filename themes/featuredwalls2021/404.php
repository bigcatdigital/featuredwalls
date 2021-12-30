<?php
	/* Template Name: 404 error page */
	get_header();
?>  
	<!-- Page content start: Page header -->
	<section id="main-site-content" class="bc-hero has-lines bc-innerpage-hero">
		<?php if (is_array(get_field('leader-image'))) { 
			echo '<!-- page leader --> ';
			$leader_image_url = esc_url(get_field('leader-image')['url']);
			$leader_image_alt = esc_attr(get_field('leader-image')['alt']);
		?>
		<picture class="bc-hero__media">
			<img src="<?php echo $leader_image_url ?>" alt="<?php echo $leader_image_alt ?>" />
		</picture>
	<?php } // endif get leader-image ?>
		<article class="bc-hero__body bc-content-component" aria-label="Main page hero body">
			<div class="bc-hero__body__content bc-text-block">
				<h1 class="bc-hero__heading">Sorry, page not found</h1>
			</div>
		</article>
		<div class="bc-media-overlay"></div>
		<div class="lines"></div>
	</section><!-- // .bc-hero.bc-innerpage-hero -->
	<!-- About resin bound driveways-->	
  <section id="body-content" class="bc-container " aria-label="Find out about our stylish featured walls and Ceilings">
		<!-- ** Output page not found error ** -->
    <div class="bc-content-component--text" id="resin-body-content">
			<div class="bc-text-block">
				<h1>That page is not available.</h1>
				<p>
					<?php echo get_bloginfo('url') . $_SERVER['REQUEST_URI'] ?>
				</p>
				<p>These may be helpful:</p>
				<ul>
					<li><a href="<?php echo esc_url(get_permalink(5)) 	?>">Hompage</a></li>
					<li><a href="<?php echo esc_url(get_permalink(35)) 	?>">Resin bound design</a></li>
					<li><a href="<?php echo esc_url(get_permalink(113)) ?>">Sensory rooms</a></li>
				</ul>
				<p>Or, you can contact us directly using any of the options below.</p>
			</div>
    </div><!-- // .bc-content-component -->  
	</section>
	<?php get_footer(); ?>