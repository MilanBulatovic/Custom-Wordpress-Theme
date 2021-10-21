<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package KOD
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<div class="container">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Nismo pronašli ništa za vaš upit', 'kod' ); ?></h1>
				</header><!-- .page-header -->
				<div class="page-content">
				</div><!-- .page-content -->
			</div>
		</section><!-- .error-404 -->

	</main><!-- #main -->

	<div class="container">
		<div class="divider"></div>
		<h4 class="entry-suggestion-title">PREPORUČUJEMO</h4>
		<div class="red-divider"></div>
		<div class="suggestions">
			<?php suggestions(4, 'wrapper-element', 'wrapper-thumb', 'wrapper-content') ?>
		</div>
	</div>
<?php


get_footer();
