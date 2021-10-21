<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package KOD
 */

?>

<section class="no-results not-found">
	<div class="container">
		<header class="page-header">
			<h1 class="page-title"><?php esc_html_e( 'U izradi...', 'kod' ); ?></h1>
		</header><!-- .page-header -->

		<div class="page-content">
			<?php
			if ( is_home() && current_user_can( 'publish_posts' ) ) :

				printf(
					'<p>' . wp_kses(
						/* translators: 1: link to WP admin new post page. */
						__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'kod' ),
						array(
							'a' => array(
								'href' => array(),
							),
						)
					) . '</p>',
					esc_url( admin_url( 'post-new.php' ) )
				);

			elseif ( is_search() ) :
				?>

				<p><?php esc_html_e( 'Nismo ništa pronašli za vaš upit. Molimo vas probajte sa drugom pretragom.', 'kod' ); ?></p>
				<?php
				

			else :
				?>

				<p><?php esc_html_e( '', 'kod' ); ?></p>
				<?php
				

			endif;
			?>
		</div><!-- .page-content -->
	</div>
</section><!-- .no-results -->
