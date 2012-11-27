<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage kvarteret
 * @since Kvarteret 1.0
 */

get_header(); ?>

	<div class="std-wrapper">
		<h1><div class="date bigger"><?php echo the_time('d\<\b\r \/\>M\<\b\r \/\>Y'); ?></div><?php the_title(); ?></h1>
		<?php if(has_post_thumbnail()) { 
				$thumb = wp_get_attachment_image_src ( get_post_thumbnail_id ( $post->ID ), "full-thumbnail");
		?>
			<div class="wrapper post_thumbnail" style="background: url(<?php echo $thumb[0]; ?>) center center no-repeat;">
			</div>
			
		<?php }
			if ( have_posts() ) while ( have_posts() ) : the_post(); 
		?>
			
			<section id="article" class="six_cols left article content">
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php the_content(); ?>
					<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
				</div><!-- .entry-content -->
				<section id="comments" class="comments">
					<h2>Comments</h2>
					<?php comments_template( '', true ); ?>
				</section>
			</section>
			<?php get_sidebar(); ?>
			


<?php endwhile; // end of the loop. ?>
	</div>
</div>
<?php get_footer(); ?>
