<?php
	/* Template Name: Inner page template - Privacy page */
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
		
    <div class="bc-content-component--text">
			<div class="bc-text-block">
			<?php wp_reset_postdata(); 
				the_content();
			?>
			</div>
    </div><!-- // .bc-content-component -->  
		<div class="bc-content-component--text">
			<div class="bc-text-block">
				<form class="bc-privacy-form" name="bc-privacy-form" id="bc-privacy-form" action="#" method="post">
					<div class="bc-privacy-form__section">
						<input type="checkbox" name="google-analytics" id="google-analytics" />
						<label for="google-analytics">Disable Google analytics</label>
					</div>
					<div class="bc-privacy-form__section">
						<input type="checkbox" name="google-ad-storage" id="google-ad-storage" />
						<label for="google-analytics">Disable Google ad storage</label>
					</div>
					<input class="bc-button" type="reset">
					<input class="bc-button" type="submit">
				</form>			
			</div>
			<script>
				const privacyForm = document.querySelector('#bc-privacy-form');
				privacyForm.addEventListener('submit', (evt) => {
					evt.preventDefault();
					console.log(evt.currentTarget);
					console.log(privacyForm['google-analytics'].checked);
					console.log(privacyForm['google-ad-storage'].checked);
					if (privacyForm['google-analytics'].checked || privacyForm['google-analytics'].checked) {
						const expiryDate = new Date(Date.now() + (7 * 24 * 60 * 60 * 1000)).toUTCString();
						bcFunctions.bcSetCookie('fwc-cookies-preferences', 'submitted', {
							expires: expiryDate
						});
					}
					if (privacyForm['google-analytics'].checked) {
						const expiryDate = new Date(Date.now() + (7 * 24 * 60 * 60 * 1000)).toUTCString();
						bcFunctions.bcSetCookie('fwc-ga-analytics', 'denied', {
							expires: expiryDate
						});
					}
					if (privacyForm['google-ad-storage'].checked) {
						const expiryDate = new Date(Date.now() + (7 * 24 * 60 * 60 * 1000)).toUTCString();
						bcFunctions.bcSetCookie('fwc-goolge-ad-storage', 'denied', {
							expires: expiryDate
						});
					}
				});
			</script>
		</div>
	</section>
	<?php get_footer(); ?>