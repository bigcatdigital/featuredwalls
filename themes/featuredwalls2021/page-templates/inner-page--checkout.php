<?php
	/* Template Name: Inner page checkout template */
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
	
  <section id="body-content" class="bc-container " aria-label="Find out about our stylish featured walls and Ceilings">
		<div class="bc-content-component--text bc-content-block bc-column">
			<div class="bc-text-block">
				<h2 class="bc-section-title"><?php echo 'Checkout' ?></h2>
				<p><strong>Fill out the forms below</strong>.</p>
			</div><!-- // .bc-text-block -->	
		</div><!-- // .bc-content-component -->
		<div class="bc-content-component--text bc-column bc-wc-checkout-page">
			<?php while ( have_posts() ) : ?>
			<?php the_post(); 
				the_content() ; ?>
			<?php endwhile; // end of the loop. ?>	
		</div><!-- // .bc-content-component--media bc-column -->
	</section>
	<?php get_footer(); ?>