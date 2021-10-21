<?php
/**
 * Template part for displaying posts content part
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package KOD
 */

?>

	<div class="row">
		<header class="entry-header">
			<?php
		
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) :
				?>
				<div class="entry-meta">
					<div class="avatar"><?php echo get_avatar(get_the_author_meta('ID'), 30);?><?php kod_posted_by(); ?></div>
					<div class="category"><span>Kategorija:</span><?php get_category_link(the_category(','));?></div>
					<p><span class="date"><?php echo get_the_date( 'd, m, Y ' );?></span>,<span class="time-stamp"><?php echo the_time( 'H:i' );?></span></p>				
					<p class="comments"><i class="bi bi-chat-right-text-fill"></i><span class="comment-number"><?php echo get_comments_number($post->ID); ?></span></p>

				</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

		<div class="col-lg-8">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<!-- <?php //echo gt_get_post_view(); ?> -->
			
			
				<?php kod_post_thumbnail(); ?>

				<div class="entry-content">
					<?php
					the_content(
						sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'kod' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							wp_kses_post( get_the_title() )
						)
					); ?>
					
					<?php
					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'kod' ),
							'after'  => '</div>',
						)
					);
					?>
					<div class="divider-single-page"></div>
					<div class="tags-share d-flex justify-content-between align-items-center">
						<div class="tags"><?php the_tags('', ''); ?></div>
						<?php dynamic_sidebar('sidebar-3'); ?>
					</div>
					<div class="divider-single-page"></div>
				</div><!-- .entry-content -->
				
			</article><!-- #post-<?php the_ID(); ?> -->
		</div>
			
		<div class="col-lg-4">
			<div class="sidebar-main-wrapper">
				<h5 style="text-transform: uppercase;">Najčitanije</h5>
				<div class="red-divider"></div>
					<?php dynamic_sidebar('sidebar-1') ?>
				<h5 style="text-transform: uppercase; margin-top: 40px">Najgledanije</h5>
				<div class="red-divider"></div>
				<?php dynamic_sidebar('sidebar-2') ?>
			</div>
		</div>
	</div>	<!-- end of row -->
		


