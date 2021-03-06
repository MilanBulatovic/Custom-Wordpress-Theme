<?php
/**
 * The template for displaying search forms
 *
 * @package KOD
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	<label class="sr-only" for="s"><?php esc_html_e( 'Search', 'kod' ); ?></label>
	<div class="input-group d-flex flex-nowrap">
		<input class="field form-control" id="s" name="s" type="text"
			placeholder="<?php esc_attr_e( 'Unesite pojam...', 'kod' ); ?>" value="<?php the_search_query(); ?>">
		<span class="input-group-append">
			<input class="submit btn btn-danger" id="searchsubmit" name="submit" type="submit"
			value="<?php esc_attr_e( 'Pretraga', 'kod' ); ?>">
		</span>
	</div>
</form>