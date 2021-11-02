<?php
/**
 * The header for our theme
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

	if ( ( is_front_page() ) OR is_page( 20 ) ) : ?>
		style="background-image:url(<?php echo get_template_directory_uri().'/img/Vector.png'; ?>);"	
	<?php	
	endif;

?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
	
		<header id="masthead" class="site-header">
			<div class="container">
				<div class="row justify-content-between align-items-end">
					<div class="close-search">
					<i class="bi bi-x-circle-fill"></i>
					</div>
					<?php get_search_form()?>
					<div class="col-lg-2 col-md-2">
						<!-- Logo -->
						<div class="site-branding">
							<?php
								the_custom_logo();
								
							?>
						</div><!-- .site-branding -->
					</div>

					<div class="col-lg-9 col-md-9">

						<!-- Navigation -->
						<nav id="site-navigation" class="main-navigation">
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

					<div class="col-lg-1 col-md-1 search-menu">

						<!-- Search form -->
						<div class="fc">	
							<div class="icon">
								<i class="fas fa-search search-icon"></i>
							</div>
						</div>	

						<button class="menu-toggler"><i class="bi bi-filter-right"></i></button>
					</div>

				</div>
			</div>	
		</header><!-- #masthead -->
