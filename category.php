<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage kvarteret
 * @since Kvarteret 1.0
 */
// hello world
get_header(); ?>

	<div class="container">
		<h1 class="text-center"><?php
			printf( __( 'Category Archives: %s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' );
		?></h1>

		<?php
			$category_description = category_description();
			if ( ! empty( $category_description ) )
				echo '<div class="infobox sixteen columns">' . $category_description . '</div>';

			/* Run the loop for the category page to output the posts.
			 * If you want to overload this in a child theme then include a file
			 * called loop-category.php and that will be used instead.
			 */
			get_template_part( 'loop', 'category' );
		?>
		<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>
