<?php
/**
 * The template for displaying search results pages
 *
 * 
 * @package KOD
 */

get_header();
?>
<div class="container">
	<div class="row">
		
			<main id="primary" class="site-main">

				<?php if ( have_posts() ) : ?>
				
					<header class="page-header">
						<h1 class="page-title">
							<?php
							/* translators: %s: search query. */
							printf( esc_html__( 'Rezultati pretrage za pojam: %s', 'kod' ), '<span>' . get_search_query() . '</span>' );
							?>
						</h1>
					</header><!-- .page-header -->
					<div class="red-divider"></div>

					<div class="search-wrapper d-flex flex-wrap">

				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'search' );

					endwhile;

					the_posts_navigation(); ?>

					</div>
					<?php
				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
					
			</main><!-- #main -->
		
	</div>
</div>
<?php
get_footer();
