<?php
/**
 * The template for displaying all pages.
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
		
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); 
	
		// determine h1 styling
		$h1_custom_css_custom_field = get_post_custom_values('h1_custom_css', $post->ID);
		$h1_custom_css = "";
		if($h1_custom_css_custom_field) {
			$h1_custom_css = 'style="'.$h1_custom_css_custom_field[0].'"';
		}
		
		// determine h1
		$h1_text = get_the_title();
		$h1_text_custom_field = get_post_custom_values('h1_custom_text', $post->ID);
		if($h1_text_custom_field) {
			$h1_text = $h1_text_custom_field[0];
		}
		
		// get child-pages for navigation
		$children = get_pages('child_of='.$post->ID.'&parent='.$post->ID);
		
	?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
			<?php /*if(count($children) > 0 || ($post->post_parent != '71')) { ?>
				<nav class="sub-page-navigation">
					<ul>
						<?php if($post->post_parent != '71') { 
							$parent = get_post($post->post_parent);
						?>
							<li>fthfth<a href="<?=$parent->guid ?>"><?=$parent->post_title ?></a></li>
						<?php } foreach($children as $c) { ?>
							<li><a href="<?=$c->guid ?>"><?=$c->post_title ?></a></li>
						<?php } ?>
					</ul>
				</nav>
			<?php } */?>

				<?php if(has_post_thumbnail()) { 
					$thumb = wp_get_attachment_image_src ( get_post_thumbnail_id ( $post->ID ), "full-thumbnail");	
				?>	
					<div class="media-wrapper" style="<?=get_post_custom_values('media-wrapper-css', $post->ID)[0]; ?>">
						<div class="container">
							<img src="<?=$thumb[0] ?>" alt="" class="responsive" />
						</div>
					</div>
				<?php } ?>
				<h1 class="text-center standard-padding container" <?=$h1_custom_css ?>><?=$h1_text ?></h1>			
				<?php the_content(); ?>
			</div>
		</div>
	<?php endwhile; ?>
			
<?php get_footer(); ?>
