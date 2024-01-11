<?php
/**
 * The template for displaying all single posts
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
		    gt_set_post_view();
		
			//$categories = get_the_category();
			$category = get_the_category(); 
				echo '<h5 class="category-title"><a href="'. get_category_link($category[0]->term_id ) . '">'. $category[0]->cat_name.'</a></h5>';
				
			get_template_part( 'template-parts/content', get_post_type() );

			// the_post_navigation(
			// 	array(
			// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'kod' ) . '</span> <span class="nav-title">%title</span>',
			// 		'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'kod' ) . '</span> <span class="nav-title">%title</span>',
			// 	)
			// );
		
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
	
	<aside class="aside">
		<!-- Preporučujemo -->
		<h5 class="entry-suggestion-title">PREPORUČUJEMO</h5>
		<div class="red-divider"></div>
		<div class="suggestions">
			<?php suggestions(4, 'wrapper-element', 'wrapper-thumb kod-cards', 'wrapper-content') ?>
		</div>

		<div class="divider"></div>

		<!-- Komentari -->
		<h5>KOMENTARI</h5>
		<div class="red-divider"></div>
		<div class="number-of-comments d-flex" style="width: 100%;">
			<h5 class="xs-width">Pridružite se diskusiji</h5>
			<h5 class="number"><?php echo get_comments_number(); ?> komentar(a)</h5>
		</div>
		
		<?php
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;  ?>
	</aside>
	
</div> 
<?php
//get_sidebar();
get_footer();
