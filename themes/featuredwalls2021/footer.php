		<?php $main_ctas_posts = new WP_Query([
			'post_type' => 'main-cta'
			]); 
			while ($main_ctas_posts->have_posts()) {
				$main_ctas_posts->the_post(); 
				$main_cta_cards = get_field('cta-cards');
			?>
			<section id="get-started" class="bc-container bc-get-started">
				<article class="">
					<div class="bc-text-component bc-content-block bc-column">
						<h1><?php echo get_field('cta-cards-title') ?></h1>
						<p><?php echo get_field('cta-cards-para') ?></p>
					</div><!-- // bc-grid column-->
					<div class="bc-column bc-text-component bc-get-started__links">
						<?php if($main_cta_cards['cta-card-1']) { 
							$main_cta_card = $main_cta_cards['cta-card-1']; 
						?>
						<div class="bc-get-started__column">
							<div class="bc-get-started__link">
								<span class="bc-get-started__button-wrap">
									<a href="<?php echo esc_url($main_cta_card['cta-card-1-link']['url']) ?>" class="bc-get-started__button bc-call-to-action-button">
										<svg class="svg-icon">
											<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg'); ?>#<?php echo $main_cta_card['cta-card-1-icon']['value'] ?>"></use>
										</svg>	
										<span class="bc-get-started__button__text"><?php echo $main_cta_card['cta-card-1-link']['title'] ?></span>	 	
									</a><!-- // .bc-get-started__button -->	
								</span><!-- // .bc-get-started__button-wrap -->	
							</div><!-- // .bc-get-started__link -->
						</div><!-- // .bc-get-started__column -->
						<?php } // end get cta-card-1 ?>
						<?php if ($main_cta_cards['cta-card-2']) { 
							$main_cta_card = $main_cta_cards['cta-card-2']; 
						?>
						<div class="bc-get-started__column">
							<div class="bc-get-started__link">
								<span class="bc-get-started__button-wrap">
									<a href="<?php echo esc_url($main_cta_card['cta-card-2-link']['url']) ?>" class="bc-get-started__button bc-call-to-action-button">
										<svg class="svg-icon">
											<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg'); ?>#<?php echo $main_cta_card['cta-card-2-icon']['value'] ?>"></use>
										</svg>	
										<span class="bc-get-started__button__text"><?php echo $main_cta_card['cta-card-2-link']['title'] ?></span>	 	
									</a><!-- // .bc-get-started__button -->	
								</span><!-- // .bc-get-started__button-wrap -->	
							</div><!-- // .bc-get-started__link -->
						</div><!-- // .bc-get-started__column -->
						<?php } // end get cta-card-2 ?>
						<?php if ($main_cta_cards['cta-card-3']) { 
							$main_cta_card = $main_cta_cards['cta-card-3']; 
						?>
						<div class="bc-get-started__column">
							<div class="bc-get-started__link">
								<span class="bc-get-started__button-wrap">
									<a href="<?php echo esc_url($main_cta_card['cta-card-3-link']['url']) ?>" class="bc-get-started__button bc-call-to-action-button">
										<svg class="svg-icon">
											<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg'); ?>#<?php echo $main_cta_card['cta-card-3-icon']['value'] ?>"></use>
										</svg>	
										<span class="bc-get-started__button__text"><?php echo $main_cta_card['cta-card-3-link']['title'] ?></span>	 	
									</a><!-- // .bc-get-started__button -->	
								</span><!-- // .bc-get-started__button-wrap -->	
							</div><!-- // .bc-get-started__link -->
						</div><!-- // .bc-get-started__column -->
						<?php } // end get cta-card-3 ?>
						<?php if ($main_cta_cards['cta-card-4']) { 
							$main_cta_card = $main_cta_cards['cta-card-4']; 
						?>
						<div class="bc-get-started__column">
							<div class="bc-get-started__link">
								<span class="bc-get-started__button-wrap">
									<a href="<?php echo esc_url($main_cta_card['cta-card-4-link']['url']) ?>" class="bc-get-started__button bc-call-to-action-button">
										<svg class="svg-icon">
											<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg'); ?>#<?php echo $main_cta_card['cta-card-4-icon']['value'] ?>"></use>
										</svg>	
										<span class="bc-get-started__button__text"><?php echo $main_cta_card['cta-card-4-link']['title'] ?></span>	 	
									</a><!-- // .bc-get-started__button -->	
								</span><!-- // .bc-get-started__button-wrap -->	
							</div><!-- // .bc-get-started__link -->
						</div><!-- // .bc-get-started__column -->
						<?php } // end get cta-card-4 ?>
				</article><!-- .bc-grid--x2 -->
			</section><!-- // Get started -->
			<?php }//end while $main_ctas ?>
			<footer class="bc-footer bc-container"> 
				<div class="bc-grid">
					<div>
						<p>
							<strong>CAPSLtd</strong>,<br />
							Greencastle<br />
							Co. Donegal<br />
							<a href="tel:01234567">01234567</a><br />
						</p>
					</div><!-- // grid column -->
				</div><!-- // .bc-grid -->
			</footer>
		</div><!-- //. bc-body-wrap --> 
    <?php wp_footer(); ?>
	</body>
</html> 