<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package KOD
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="description" content="KOD Organizacija - Reakcija na stvarnost">
	<meta name="author" content="Milan Bulatović">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); 

	if ( ( is_front_page() ) OR is_page( 20 ) ) :
		
		?>

			style="background-image:url(<?php echo get_template_directory_uri().'/img/Vector.png'; ?>);"
		
		<?php

		
	endif;

?>>
<?php wp_body_open(); ?>


<div id="page" class="site">
	
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'kod' ); ?></a>

		<header id="masthead" class="site-header">
			<div class="container">
				<div class="row justify-content-between align-items-end">

					<div class="col-lg-2">
						<!-- Logo -->
						<div class="site-branding">
							<?php
								the_custom_logo();
								
							?>
						</div><!-- .site-branding -->
					</div>

					<div class="col-lg-8">
						<!-- Navigation -->
						<nav id="site-navigation" class="main-navigation">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'kod' ); ?></button>
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								)
							);
							?>
						</nav><!-- #site-navigation -->
					</div>

					<div class="col-lg-2">
						<!-- Search form -->
						<div class="fc d-flex">	
						
							<?php get_search_form()?>	
						
							<div class="icon">
								<i class="fas fa-search search-icon"></i>
							</div>
						</div>	
					</div>

				</div>
			</div>	
		</header><!-- #masthead -->
