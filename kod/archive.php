<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package KOD
 */

get_header();
?>
<div class="container">
	<main id="primary" class="site-main">
		<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<?php
					the_archive_title( '<h4 class="page-title">', '</h4>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
				<!-- <div class="red-divider"></div> -->
			</header><!-- .page-header -->
			<div class="grid">
				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/*
					* Include the Post-Type-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Type name) and that will be used instead.
					*/
					get_template_part( 'template-parts/content', 'category' );

				endwhile; ?>
			</div> <?php
			
				else : get_template_part( 'template-parts/content', 'none' );
				endif;
				?>
			

			<!-- Pagination --> 
			<?php the_posts_pagination(array( 
			'prev_text' => '<span><i class="bi bi-arrow-left-short"></i></span>',
  			'next_text' => '<span><i class="bi bi-arrow-right-short"></i></span>' )); ?>
			<!-- the_posts_navigation//(); -->

	</main><!-- #main -->
</div>
<?php

get_footer();
