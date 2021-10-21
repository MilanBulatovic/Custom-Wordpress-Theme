<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package KOD
 */

?>

	<footer class="site-footer">
		<div class="container">
			<div class="row">
				<div class= "col-lg-3">
					<?php 
						$footer_logo = get_theme_mod('footer_logo');
						if( $footer_logo ) :
							echo  '<div class="footer-logo"><img src="' .  $footer_logo . '"/></div>'; 
						else : echo "Prostor za logo";
						endif; ?>
				<div>
				<?php get_theme_mod('')?>
				<?php echo 'test'?>
				</div>
					
				</div>
				<div class= "col-lg-3 left-divider">
					<p class="footer-headline">Doku centar</p>
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-2',
								'menu_id'        => 'doku-centar',
							)
						);
					?>
				</div>
				<div class= "col-lg-3 left-divider">
					<p class="footer-headline">Preporučujemo</p>
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-3',
								'menu_id'        => 'preporucujemo',
							)
						);
					?>
				</div>
				<div class= "col-lg-3 left-divider">
				<a href="<?php echo esc_url( get_page_link( 230 ) ); ?>"><p class="footer-headline impressum">Impressum</p></a>
					<p class="footer-headline">Kontakt <br><span class="adresa">Stara Varoš, Bratstva i jedinstva B-T
						81000, Podgorica, Crna Gora
						Tel: +382 20 20 336 214<br>
						Email: info@kod.org.me<br></p>
					<a href="<?php echo site_url('/kontakt'); ?>" class="lokacija">Lokacija</a>
				</div>
			</div>
		</div>	
		<!-- Bottom footer -->
		<div class="bottom-footer">
			<div class="container d-flex justify-content-between align-items-center">
				<div class="copyright">Sva prava zadržana KOD &copy; 2021</div>
				
				<?php dynamic_sidebar('sidebar-3'); ?>
				
			</div>
		</div>
				
	</footer><!-- #colophon -->
	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
