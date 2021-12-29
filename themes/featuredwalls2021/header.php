<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
  <meta name="description" content="Specialists in creating beautiful feature walls, sensory rooms and resin bound driveways with custom interior and exterior design. Serving north-west of Ireland, Northern Ireland and all of the island of Ireland.">
	<title>Custom Feature Wall Design | CAPS Ltd</title>
	<link rel="shortcut icon" type="image/png" href="assets/media/caps-favicon.png"/>
  <link rel="canonical" href="http://www.featuredwalls.ie/" />
  <!-- Google fonts Oswald & Lato -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<?php wp_head() ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-EB511QMQDJ"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('consent', 'default', {
			'ad_storage': 'denied',
			'analytics_storage': 'denied'
		});
		gtag('config', 'G-EB511QMQDJ'); 
		function GAConsentGranted() {
			gtag('consent', 'default', {
				'ad_storage': 'denied',
				'analytics_storage': 'denied'
			});
			gtag('set', {'is_consent_granted': false});
		}
	</script>
</head> 
<body>
		<div class="bc-body-wrap">
			<nav class="bc-is-hidden" aria-label="Skip to main content link" >
				<a href="#main-site-content" title="Skip site menu, go to to main site content"></a>	
			</nav>
			<header class="bc-site-header bc-is-hero-overlay bc-container">
				<a title="Site hompepage" class="bc-site-header__home-link" href="<?php echo site_url(); ?>"> 
					<img src="<?php echo get_theme_file_uri('/assets/media/caps-logo.png'); ?>" alt="CAPS Ltd logo - presenting Featured Walls and Ceilings" /> 
				</a>
				<a href="#main-site-content" class="bc-site-header__menu-skip bc-is-hidden" title="Skip site menu, to main site content"></a>
				<div class="bc-site-header__site-nav">
					<a href="<?php echo get_permalink(187) ?>" class="bc-site-header__cart"></a>
					<a href="javascript:void(0)" aria-hidden="true" class="bc-site-header__menu-link" title="Site Menu">
						<svg class="svg-icon bc-site-header__menu-link__menu ">
							<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg'); ?>#menu-thin"></use>
						</svg>
						<svg class="svg-icon bc-site-header__menu-link__close "> 
							<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg'); ?>#close-x"></use>
						</svg>
					</a>
					<?php wp_nav_menu( array( 
    				'theme_location' => 'main-navigation', 
    				'container_class' => 'bc-site-header__main-navigation' ) ); 
					?>
					<ul id="site-main-navigation" role="navigation" aria-label="Main site navigation" class="bc-site-header__main-navigation">
						<li class="bc-site-header__main-navigation__item"><a href="<?php echo esc_url(get_permalink(35)) 	?>">Resin bound design</a></li>
						<li class="bc-site-header__main-navigation__item"><a href="<?php echo esc_url(get_permalink(113)) ?>">Sensory rooms</a></li>
					</ul>	
					<div class="bc-shopping-cart-preview">
						<h2>Your shopping cart</h2>
						<div class="bc-shopping-cart-preview__items">
							<div class="bc-shopping-cart-preview__item bc-card">
								<div class="bc-card__media is-16x9"></div>
								<h3 class="bc-card__heading">Fireplace name</h3>
								<p>€900.00</p>
								<!-- <p class="bc-shopping-cart-preview__remove">
									<svg class="svg-icon "> 
										<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg'); ?>#close-x"></use>
									</svg>
									<a class="bc-shopping-cart-preview__remove" href="#">Remove from cart</a> 
								</p> -->
							</div><!-- // .bc-shopping-cart-preview__item -->
							<div class="bc-shopping-cart-preview__item bc-card">
								<div class="bc-card__media is-16x9"></div>
								<h3 class="bc-card__heading">Fireplace name</h3>
								<p>€700.00</p>
								
							</div><!-- // .bc-shopping-cart-preview__item -->
							<div class="bc-shopping-cart-preview__item bc-card">
								<div class="bc-card__media is-16x9"></div>
								<h3 class="bc-card__heading">Fireplace name</h3>
								<p>€800.00</p>
								
							</div><!-- // .bc-shopping-cart-preview__item -->
							<div class="bc-shopping-cart-preview__item bc-card">
								<div class="bc-card__media is-16x9"></div>
								<h3 class="bc-card__heading">Fireplace name</h3>
								<p>€1,000.00</p>
								
							</div><!-- // .bc-shopping-cart-preview__item -->
						</div><!-- // .bc-shopping-cart-preview__items -->
						<div class="bc-shopping-cart-preview__totals">
							<h3>Cart total</h3>
							<table>
								<tbody>
									<tr><td><strong>Sub-total</strong></td><td class="bc-shopping-cart-preview__totals__item-cost"><strong>€3,400</strong></td></tr>
									<tr><td>VAT</td><td class="bc-shopping-cart-preview__totals__item-cost">€340</td></tr>
									<tr class="bc-shopping-cart-preview__totals__total"><td>Total</td><td class="bc-shopping-cart-preview__totals__item-cost">€3,400</td></tr>
								</tbody> 
							</table>
						</div><!-- // .bc-shopping-cart-preview__totals -->
					
					</div><!-- // .bc-shopping-cart-preview -->
				</div><!-- // .bc-site-header__site-nav -->
			</header><!-- // ..be-hero__header -->
			