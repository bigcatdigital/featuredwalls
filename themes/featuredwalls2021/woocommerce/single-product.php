<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header(); ?>
	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>
	<!-- Page content start: Page header -->
	<section id="main-site-content" class="bc-hero has-lines bc-innerpage-hero">
		<picture class="bc-hero__media">
			<img src="<?php echo get_theme_file_uri('assets/media/featured-walls-and-ceilings-wood-finish.jpg'); ?>" alt="Featured Walls and Ceilings" />
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
	<section id="body-content" class="bc-container bc-wc-single-product " aria-label="Find out about our stylish featured walls and Ceilings">
		
		<div class="bc-content-component--text bc-content-block bc-column">
		<?php wc_get_template_part( 'content', 'single-product' ); ?>
		</div>
	</section>
		<?php endwhile; // end of the loop. ?>
	
	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>
	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		//do_action( 'woocommerce_sidebar' );
	?>
<?php
get_footer();

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
