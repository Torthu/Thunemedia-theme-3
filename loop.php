<?php
/**
 * The loop that displays posts.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop.php or
 * loop-template.php, where 'template' is the loop context
 * requested by a template. For example, loop-index.php would
 * be used if it exists and we ask for the loop with:
 * <code>get_template_part( 'loop', 'index' );</code>
 *
 * @package WordPress
 * @subpackage kvarteret
 * @since Kvarteret 1.0
 */

 /* If there are no posts to display, such as an empty archive page */
if ( ! have_posts() ) : ?>
	<div id="post-0" class="post error404 not-found">
		<h1 class="entry-title"><?php _e( 'Not Found', 'twentyten' ); ?></h1>
		<div class="entry-content">
			<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyten' ); ?></p>
			<?php get_search_form(); ?>
		</div><!-- .entry-content -->
	</div><!-- #post-0 -->
<?php endif; ?>

<?php
	/* Start the Loop.
	 *
	 * In Kvarteret we use the same loop in multiple contexts.
	 * It is broken into three main parts: when we're displaying
	 * posts that are in the gallery category, when we're displaying
	 * posts in the asides category, and finally all other posts.
	 *
	 * Additionally, we sometimes check for whether we are on an
	 * archive page, a search page, etc., allowing for small differences
	 * in the loop on each template without actually duplicating
	 * the rest of the loop that is shared.
	 *
	 * Without further ado, the loop:
	 */ ?>

<?php 
	$last_post = "";
	while ( have_posts() ) : the_post(); 
?>
	<?php if(get_the_date() != $last_post) : ?>
		<div class="three columns clear-left blog-meta text-center offset-top-by-one">
			<div class="date inline-block">
				<div class="day"><?=get_the_date('d'); ?></div>
				<div class="month"><?=get_the_date('M'); ?></div>
				<div class="year"><?=get_the_date('Y'); ?></div>
			</div>
		</div>
	<?php endif; ?>
	<div class="eleven columns<?php if(get_the_date() != $last_post) { echo " offset-top-by-one"; } else { echo " offset-by-three"; } ?>" style="background: #fff;">
		<h2 class="no-top-margin no-top-padding"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark" class="bebas"><?php the_title(); ?> <div class="right arrow_box"> </div></a></h2>
		<?php the_excerpt(); ?>
	</div>
	

<?php 
	$last_post = get_the_date();
	endwhile; // End the loop. Whew. 
?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
				<div id="nav-below" class="eleven clear-both columns offset-by-three navigation no-left-padding no-right-padding">
					<span class="nav-previous"><?php next_posts_link( __( '&larr; Older posts', 'twentyten' ) ); ?></span>
					<div class="nav-next right"><?php previous_posts_link( __( 'Newer posts &rarr;', 'twentyten' ) ); ?></div>
				</div><!-- #nav-below -->
<?php endif; ?>
