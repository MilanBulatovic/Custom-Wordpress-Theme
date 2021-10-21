<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package KOD
 */

get_header();
?>
<div class="container">
	
	<main id="primary" class="site-main">
			<?php
			while ( have_posts() ) :
				the_post();
				if(is_page('kontakt')) : 
					get_template_part( 'template-parts/content', 'contact' );
				else :
					get_template_part( 'template-parts/content', 'page' );
				endif;
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		
	</main><!-- #main -->

	<?php

	if(is_page(array ('impressum', 'o-nama'))) : ?>
		<div class="divider"></div>
		<h4 class="entry-suggestion-title">PREPORUČUJEMO</h4>
		<div class="red-divider"></div>
		<div class="suggestions">
			<?php suggestions(4, 'wrapper-element', 'wrapper-thumb', 'wrapper-content') ?>
		</div>
	<?php endif; ?>
			
	

</div><!-- end of container -->

<?php
get_footer();
