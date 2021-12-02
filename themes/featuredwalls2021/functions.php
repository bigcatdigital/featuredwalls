<?php 
	// ******************** Crunchify Tips - Clean up WordPress Header START ********************** //
		function crunchify_remove_version() {
			return '';
		}
		add_filter('the_generator', 'crunchify_remove_version');

		remove_action('wp_head', 'rest_output_link_wp_head', 10);
		remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
		remove_action('template_redirect', 'rest_output_link_header', 11, 0);

		remove_action ('wp_head', 'rsd_link');
		remove_action( 'wp_head', 'wlwmanifest_link');
		remove_action( 'wp_head', 'wp_shortlink_wp_head');

		function crunchify_cleanup_query_string( $src ){
			$parts = explode( '?', $src );
			return $parts[0];
		}
		//add_filter( 'script_loader_src', 'crunchify_cleanup_query_string', 15, 1 );
		//add_filter( 'style_loader_src', 'crunchify_cleanup_query_string', 15, 1 );
	
	/**
	* Disable the emoji's
	*/
	function disable_emojis() {
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
		remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
		remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
		remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
		remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
		add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
		add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
	}
	add_action( 'init', 'disable_emojis' );

	/**
	* Filter function used to remove the tinymce emoji plugin.
	* 
	* @param array $plugins 
	* @return array Difference betwen the two arrays
	*/
	function disable_emojis_tinymce( $plugins ) {
		if ( is_array( $plugins ) ) {
			return array_diff( $plugins, array( 'wpemoji' ) );
		} else {
			return array();
		}
	}

	/**
	* Remove emoji CDN hostname from DNS prefetching hints.
	*
	* @param array $urls URLs to print for resource hints.
	* @param string $relation_type The relation type the URLs are printed for.
	* @return array Difference betwen the two arrays.
	*/
	function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
		if ( 'dns-prefetch' == $relation_type ) {
			/** This filter is documented in wp-includes/formatting.php */
			$emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );	
			$urls = array_diff( $urls, array( $emoji_svg_url ) );
		}
		return $urls;
	}
	// ******************** Clean up WordPress Header END ********************** //


	function build_project_styles() {
		wp_enqueue_style('alegreya', '//fonts.googleapis.com/css?family=Alegreya|Alegreya+Sans|Merriweather|Merriweather+Sans|Nunito|Nunito+Sans|Quattrocento|Quattrocento+Sans|Roboto|Roboto+Mono|Roboto+Slab&display=swap', NULL, time());	
		wp_enqueue_style('lato', '//fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Oswald:wght@200;400;500;600&display=swap', NULL, time());	
		wp_enqueue_style('flickty-styles',  'https://unpkg.com/flickity@2/dist/flickity.min.css', NULL, time());	
		wp_enqueue_style('project-styles', get_theme_file_uri('/assets/css/style.css'), NULL, time(), 'all');	
	}
	add_action('wp_enqueue_scripts', 'build_project_styles');
	function build_project_scripts() {
		wp_enqueue_script('project-scripts',  get_theme_file_uri('/assets/scripts/app-concat.js'), NULL, time(), true);	
	}
	add_action('wp_enqueue_scripts', 'build_project_scripts');

	function project_features() {
		add_theme_support('title-tag');	
		/*register_nav_menu('headerMenu', 'Header menu');
		register_nav_menu('footerMenu1', 'Footer menu 1');
		register_nav_menu('footerMenu2', 'Footer menu 2');*/
	}
	add_action('after_setup_theme', 'project_features');



	//Preload scripts
	// add_action('wp_head', function () {
  // 	global $wp_scripts;
	//   foreach ($wp_scripts->queue as $handle) {
	//     $script = $wp_scripts->registered[$handle];
	//     //-- If version is set, append to end of source.
	//     $source = $script->src . ($script->ver ? "?ver={$script->ver}" : "");
	//     //-- Spit out the tag.
	//     echo "<link rel='preload' href='{$source}' as='script'/>\n";
	//   }
	// }, 1);
	

/** REST API filters **/
//Function to add all CPT ACF fields to REST API response 
// function bc_add_CPT_to_rest($post_type) {
// 	function bc_rest_prepare_post($data, $post, $request) {
// 		$_data = $data->data;	
// 		$fields = get_fields($post->ID);	
// 		foreach ($fields as $key => $value){
// 			$_data[$key] = get_field($key, $post->ID);
// 		}
// 		$data->data = $_data; 
// 		return $data;
// 	}
// 	add_filter('rest_prepare_' . $post_type, 'bc_rest_prepare_post', 10, 3);
// }

/* Custom post types */
function fwc_custom_postypes() {
	register_post_type('main-cta', 
		array(
			'labels' => array(
				'name'               => 'Main site contact cards',
				'singular_name'      => 'Main site contact cards',
				'menu_name'          => 'Main site contact cards',
				'name_admin_bar'     => 'Main site contact cards',
				'add_new'            => 'Add New',
				'add_new_item'       => 'Add Main site contact cards',
				'new_item'           => 'New Main site contact cards',
				'edit_item'          => 'Edit Main site contact cards',
				'view_item'          => 'View Main site contact cards',
				'all_items'          => 'All Main site contact cards',
				'search_items'       => 'Search Main site contact cards',
				'parent_item_colon'  => 'Parent Main site contact cards',
				'not_found'          => 'No Main site contact cards',
				'not_found_in_trash' => 'No Main site contact cards in Trash'
			),
			'public'              => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'show_ui'             => true,
			'show_in_nav_menus'   => true,
			'show_in_menu'        => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-format-quote',
			'capability_type'     => 'post',
			'hierarchical'        => false,
			'supports'            => array( 'title', 'author', 'thumbnail'),
			'has_archive'         => true,
			'rewrite'             => array( 'slug' => 'main-cta' ),
			'query_var'           => true
		)
	);//register_post_type
}//fwc_custom_postypes()
add_action('init', 'fwc_custom_postypes');
?>