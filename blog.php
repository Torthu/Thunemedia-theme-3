<?php
/**
 * Template Name: Blog
 * The template for displaying the blog.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Thune Media
 * @subpackage thunemedia.no
 * @since Thune 1.0
 */

get_header(); ?>

    <div class="container">
		
		<h1><?php the_title(); ?></h1>
			
		<?php if(has_post_thumbnail()):
				$thumb = wp_get_attachment_image_src ( get_post_thumbnail_id ( $post->ID ), "full-thumbnail");
		?>
			<div class="wrapper post-thumbnail" style="background: url(<?php echo $thumb[0]; ?>) center center no-repeat;">
			</div>	
		<?php endif; ?>
			
		<?=$post->post_content; ?>
			
			<?php
				// get posts to dispaly in blog
				$wp_query = new WP_Query('numberposts=12');//get_posts('numberposts=12');
				
				// run the loop
				get_template_part( 'loop', 'index' );
			?>
			<?php
				/*foreach($posts as $post) :
					setup_postdata( $post );
				?>
				<article class="ten_cols cf blog_post">
					<section class="one_col left text_center blog meta">
						<div class="ten_cols blog date bigger"><?php echo the_time('d\<\b\r \/\>M\<\b\r \/\>Y'); ?></div>
						<img src="<?php bloginfo('template_directory'); ?>/images/comments.png" alt="" /> <?php comments_number("0", "1", "%"); ?>
					</section>
					<section class="nine_cols left blog_post_content">
						<a href="<?php echo get_page_link( $post->ID ); ?>">
							
							<?php the_post_thumbnail('nine-thumbnail'); ?>
							<h2><?php the_title(); ?> <div class="right arrow_box"> </div></h2>
						</a>
							<?php the_content(); ?>
					</section>
				</article>
			 <?php endforeach; ?>
			 </div>
			 <?php */ ?>
		 </div>
		 <?php get_sidebar(); ?>
	</div>

<?php get_footer(); ?>
