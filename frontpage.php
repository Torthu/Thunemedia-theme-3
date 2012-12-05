<?php
/**
 * Template Name: Frontpage
 *
 * A custom page template for the frontpage.
 *
 *
 * @package Thunemedia
 * @subpackage kvarteret
 * @since Kvarteret 1.0
 */

get_header(); ?>
		<div class="media-wrapper">
			<section id="myCarousel" class="carousel slide">
				<div class="carousel-inner">

					<?php
						$sub_pages = get_pages( array( 'child_of' => '71', 'sort_column' => 'post_date', 'number' => '10', 'sort_order' => 'desc' ) );
	 
						$slideNum = count($sub_pages);
						$i = 0;
						foreach($sub_pages as $featured) :
							$i++;
							$thumb = wp_get_attachment_image_src ( get_post_thumbnail_id ( $featured->ID ), "full-thumbnail");
							$mediaWrappeCss = get_post_custom_values('media-wrapper-css', $featured->ID);
					?>
							<article class="<?php if($i == 1) { echo'active ';} ?>item" style="<?=$mediaWrapperCss[0]; ?>"> 
								<div class="container">
									<a href="<?php echo get_page_link( $featured->ID ); ?>">
										<img src="<?php echo $thumb[0]; ?>" alt="" />
										<h2><?php echo $featured->post_title; ?></h2>
									</a>
								</div>
							</article>
							
						 <?php endforeach;  ?>
						 
					</div>
					<!-- <div class="container">
						<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		 				<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
		 			</div> -->
			</section>
		</div>
		<h1 class="container text-center standard-padding"><?php the_title(); ?></h1>
		<?=$post->post_content; ?>

<?php get_footer(); ?>
