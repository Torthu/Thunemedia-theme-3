<?php
/**
 * The template for displaying the footer.
 *
 * @package Thunemedia
 * @subpackage Thunemedia theme
 * @since Thunemedia 3.0
 */
?>	
		<footer class="container clearfix offset-bottom-by-one">
			<div class="sixteen columns social-media inset-border-top-bottom offset-top-by-one offset-bottom-by-one text-center">
				<ul class="no-margin">
					<li class="five columns inline-block no-margin">
						<a href="#">
							<span class="round-link-image-container">
								<img src="<?php bloginfo('template_directory'); ?>/images/forrst-green.png" alt="" />
							</span>
							forrst.com/torthu
						</a>
					</li>
					<li  class="five columns inline-block no-margin">
						<a href="#">
							<span class="round-link-image-container">
								<img src="<?php bloginfo('template_directory'); ?>/images/twitter-green.png" alt="" />
							</span>
							twitter.com/torsteinthune
						</a>
					</li>
					<li  class="five columns inline-block no-margin">
						<a href="#">
							<span class="round-link-image-container">
								<img src="<?php bloginfo('template_directory'); ?>/images/github-green.png" alt="" />
							</span>
							github.com/torthu
						</a>
					</li>
				</ul>

			</div>
			<div class="one-third column no-padding">
				Thune Media is Torstein Thune
			</div>
			<div class="one-third column no-padding text-center">
				torstein@thunemedia.no
			</div>
			<div class="one-third column no-padding text-right">
				&copy;2012
			</div>
		</footer>

		<script type="text/javascript">
			$('.carousel').carousel();
		</script>
		<?php wp_footer(); ?>
	</body>
</html>