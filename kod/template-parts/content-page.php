<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package KOD
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<header class="entry-header">
			<?php
			if (is_archive()):
			echo '<h1><a href="' . get_permalink() . '">' . wp_trim_words( get_the_title(), 7 ) . '</a></h1>';

			else: echo '<h4>' . get_the_title() . '</h4>';
			endif;
			?>
		</header><!-- .entry-header -->

		<?php kod_post_thumbnail(); ?>

		<div class="entry-content">
			<?php
			if(is_archive()) :
				the_excerpt();
				
			else: the_content();

			endif;
			
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'kod' ),
					'after'  => '</div>',
				)
			);
			?>
		</div><!-- .entry-content -->

	</article><!-- #post-<?php the_ID(); ?> -->
