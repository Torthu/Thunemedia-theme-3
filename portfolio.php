<?php
/**
 * Template Name: Portfolio
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Thune Media
 * @subpackage thunemedia.no
 * @since Thune 2.0
 */

get_header(); ?>
	<div class="container">
		<h1 class="six columns no-left-padding"><?php the_title(); ?></h1>
			<a class="three columns right btn btn-large no-padding btn-green clear-right" href="">Github</a>
		<?php 
			if ( have_posts() ) while ( have_posts() ) : the_post(); 
				$project_pages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );
				$concept_pages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );
		
				if(has_post_thumbnail()): 
					$thumb = wp_get_attachment_image_src ( get_post_thumbnail_id ( $post->ID ), "full-thumbnail");
			?>			
				<div class="wrapper post_thumbnail" style="background: url(<?php echo $thumb[0]; ?>) center center no-repeat;">
				</div>	
			<?php endif; ?>	
	</div>
	<div class="container">
		<?php
			$i = 0;
			foreach( $project_pages as $page ) {
				$i++;		
				$content = $page->post_content;
				$thumb = wp_get_attachment_image_src ( get_post_thumbnail_id ( $page->ID ), "five-thumbnail");

				$content = apply_filters( 'the_content', $content );
			?>
				<div class="eight columns <?=($i%2==0?"no-right-padding":"no-left-padding");?>">
					<a class="block big" href="<?php echo get_page_link( $page->ID ); ?>">
						<img class="responsive block" src="<?=$thumb[0]?>" alt="" />
						<h2 class="bebas black-box"><?=$page->post_title; ?></h2>
					</a>
				</div>
			<?php
			}	/*
		?>
		
		<h2 class="clear">Konsepter og skisser</h2>
		<?php
			foreach( $concept_pages as $page ) {		
				$content = $page->post_content;
				$thumb = wp_get_attachment_image_src ( get_post_thumbnail_id ( $page->ID ), "five-thumbnail");

				$content = apply_filters( 'the_content', $content );
			?>
				<div class="two_half_cols left" >
					<a class="block big" href="<?php echo get_page_link( $page->ID ); ?>">
						<img style="width: 100%;height:auto;border:1px solid #c7c7c7;" src="<?=$thumb[0]?>" alt="" />
						<?=$page->post_title; ?><div class="right arrow_box"> </div>
					</a>
				</div>
			<?php
			}	*/
		?>
	</div>
	<?php endwhile; ?>

<?php get_footer(); ?>
