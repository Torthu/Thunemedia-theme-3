<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage kvarteret
 * @since Kvarteret 1.0
 */

get_header(); ?>
	<div class="std-wrapper">
		<h1><?php printf( __( 'Søkeresultat for: %s', 'twentyten' ), '<span>' . get_search_query() . '</span>' ); ?></h1>  

		<?php if ( have_posts() ) : ?>
			<div class="six_cols left">
				<?php get_template_part( 'loop', 'search' );?>
			</div>
		<?php else : ?>
			<p><?php _e( 'Beklager, vi fant ingenting på søket ditt. Prøv noe annet?', 'twentyten' ); ?></p>
			<?php get_search_form(); ?>
		<?php endif; ?>
		<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>
