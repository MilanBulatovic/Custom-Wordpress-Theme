<?php
/**
 * KOD functions and definitions
 *
 * @package KOD
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'kod_setup' ) ) :
	
	function kod_setup() {
		
		load_theme_textdomain( 'kod', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'kod' ),
				'menu-2' => esc_html__( 'Doku centar', 'kod' ),
				'menu-3' => esc_html__( 'Preporučujemo', 'kod' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'kod_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => ''
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		//Custom image size - Sidebar thumbnail size
		add_image_size( 'sidebar', 115, 85, true); // (cropped)

		//Custom image size - Suggestions thumbnails
		add_image_size( 'suggestion-thumb', 180, 125, true); // (cropped)

		/**
		 * Add support for core custom logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'kod_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kod_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'kod_content_width', 640 );
}
add_action( 'after_setup_theme', 'kod_content_width', 0 );


/**
 * Register widget area.
 */
function kod_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'KOD Sidebar', 'kod' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'kod' ),
			'before_widget' => '<div class="sidebar-wrapper">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="test">',
			'after_title'   => '</h4>'
			)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'KOD Sidebar', 'kod' ),
			'id'            => 'sidebar-2',
			'description'   => esc_html__( 'Add widgets here.', 'kod' ),
			'before_widget' => '<div class="sidebar-wrapper">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="test">',
			'after_title'   => '</h4>'
			)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Social Icons', 'kod' ),
			'id'            => 'sidebar-3',
			'description'   => esc_html__( 'Add widgets here.', 'kod' ),
			'before_widget' => '<div class="socials-wrapper">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="test">',
			'after_title'   => '</h4>'
			)
	);

}
add_action( 'widgets_init', 'kod_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function kod_scripts() {
	wp_enqueue_style( 'bootstrap-style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css', array(), _S_VERSION );
	wp_enqueue_style( 'font-awesome-icons', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'kod-style', get_template_directory_uri() . '/sass/style.css', array(), _S_VERSION );
	wp_style_add_data( 'kod-style', 'rtl', 'replace' );

	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'kod-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	/**
	 * If is_page(ID) change background color on pseudo element
	 */
	if( is_page( 12 ) ){
		wp_enqueue_script( 'zelena prica', get_template_directory_uri() . '/js/zelena.js', array(), _S_VERSION, true );
	}
	
	
}
add_action( 'wp_enqueue_scripts', 'kod_scripts' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';


/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';


/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


/**
 * Custom excerpt lenght
 */
function custom_excerpt_length( $length ) {
	return 10 . '...';
}
add_filter( 'excerpt_length', 'custom_excerpt_length' );


/**
 * Remove read more square brackets [...]
 */
function excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'excerpt_more' );


/**
 * Loop category by ID function Home Page
 */
function loop_category_posts($cat_id, $posts_per_page, $class1 = '', $class2='', $overlay=''){
	$args = array(
		'post_type' => 'post',
		'cat' => $cat_id,
		'posts_per_page' => $posts_per_page
	); 
	// The Query
	$the_query = new WP_Query( $args );

	// The Loop
	if ( $the_query->have_posts() ) :
		while ( $the_query->have_posts() ) :
			$the_query->the_post(); ?>
			
				<!-- Thumbnail -->
				<div class="<?php echo esc_attr( $class1 ); ?>">
					<?php if ( has_post_thumbnail()) :
						the_post_thumbnail(); ?>
					<?php endif; ?>
				</div> 

				<!-- Headline -->
				<div class="<?php echo esc_attr( $class2 );?>">
					<h4><a href="<?php echo esc_url( the_permalink() ); ?>"><?php echo esc_html( wp_trim_words( get_the_title(), 6 ) ); ?></a></h4>
				</div>
				
				<!-- Overlay -->
				<div class="<?php echo esc_attr( $overlay );?>"></div>
			</div>
			<?php
			wp_reset_postdata(); 
		endwhile;
	endif;

}


/**
 * Suggestions section posts Loop function- single.php/content.php
 */
function suggestions($posts_per_page, $class1 = '', $class2='', $class3=''){
	$args = array(
		'post_type' => 'post',
		'posts_per_page' => $posts_per_page,
		'orderby' => 'rand'
	); 
	// The Query
	$the_query = new WP_Query( $args );

	// The Loop
	if ( $the_query->have_posts() ) :
		while ( $the_query->have_posts() ) :
			$the_query->the_post(); ?>

			<div class="<?php echo esc_attr( $class1 ); ?>">
				<div class="<?php echo esc_attr( $class2  ); ?>">
					<a href="<?php echo esc_url( get_permalink() ); ?>">
						<?php the_post_thumbnail(); ?>
					</a>
					<?php playIcon('Da', 'trans.png'); ?>
				</div> 
				
				<div class="<?php echo $class3 ?>">
					<h5><a href="<?php echo esc_url ( the_permalink() ); ?>"><?php echo esc_html( wp_trim_words( get_the_title(), 7 ) ); ?></a></h5>
					<div class="meta-date-comments">
						<?php 

							echo get_the_date( 'd. m. Y ' );

							if (  get_comments_number() > 0 ) : //Ako postoji komentar
										
									echo ', '. '<i class="bi bi-chat-dots-fill icon-chat"></i>' . get_comments_number(); //PrikaŽi komentar

								endif;
						?>
					</div>
				</div> 
			</div>
			<?php

			/* Restore original Post Data */
			wp_reset_postdata(); 
		endwhile;
	endif;

}


/**
 * Remove CATEGORY: prefix function - before category title
 */
function remove_cat_prefix( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    }
    return $title;
}
add_filter( 'get_the_archive_title', 'remove_cat_prefix' );


/**
 * Function for tracking most viewed posts - Stack Overflow - not gonna use probably
 */
function kod_popular_posts($post_id) {
	$count_key = 'post_views_count';
	$count = get_post_meta($post_id, $count_key, true);
	if ($count == '') {
		$count = 0;
		delete_post_meta($post_id, $count_key);
		add_post_meta($post_id, $count_key, '0');
	} else {
		$count++;
		update_post_meta($post_id, $count_key, $count);
	}
}
function kod_track_posts($post_id) {
	if (!is_single()) return;
	if (empty($post_id)) {
		global $post;
		$post_id = $post->ID;
	}
	kod_popular_posts($post_id);
}
add_action('wp_head', 'kod_track_posts');


/**
*
* Remove pages from search results
*/
function exclude_pages( $query ) {
    if ( $query->is_main_query() && $query->is_search() && ! is_admin() ) {
        $query->set( 'post_type', array( 'post' ) );
    }    
}
add_action( 'pre_get_posts', 'exclude_pages' );


/**
*
* Displaying play icon on video posts function
*
* $img argument is just for displaying different icons for presentation purposes - will be changed width ACF field 
*/
function playIcon($choice, $img) {
	$play = get_field('play');
	$icon = '<img src="' . get_template_directory_uri() . '/img/' . $img . '"' . 'alt="play-icon">';

	if( $play && in_array($choice, $play) ) :
		$output = '<div class="p-icon">' . $icon . '</div>';
		echo $output;
	endif;
}


/**
*
* Loop category function
*/
function loop_cat_comments($cat_id, $posts_per_page, $class1 = '', $class2='') {
	$args = array(
		'cat' => $cat_id,
		'posts_per_page' => $posts_per_page
	); 

	// The Query
	$the_query = new WP_Query( $args );

	// The Loop
	if ( $the_query->have_posts() ) : ?>

		<?php
		while ( $the_query->have_posts() ) :
			$the_query->the_post(); ?>

				<div class="col-lg-3 col-md-6">
					<div class="kod-section-wrapper">
						<div class="kod-cards">
							<?php if ( has_post_thumbnail()) :
								the_post_thumbnail(); ?>
							<?php endif; ?>

							<?php playIcon('Da', 'trans.png'); ?>
						</div> 


						<div class="kod-card-content">
							<h5><a href="<?php echo esc_url( the_permalink() ); ?>"><?php echo esc_html( wp_trim_words( get_the_title(), 6 ) ); ?></a></h5>
						</div>

						<div class="date-comments">
							<?php 
								echo get_the_date( 'd. m. Y ' );

								if (  get_comments_number() > 0 ) : //Ako postoji komentar
											
										echo ', '. '<i class="bi bi-chat-dots-fill icon-chat"></i>' . get_comments_number(); //PrikaŽi komentar

								endif;
							?>
						</div>

					</div>
				</div> <!-- End of column -->
				<?php
			/* Restore original Post Data */
			wp_reset_postdata(); 
		endwhile;
	endif;

}
