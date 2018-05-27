<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Total
 */

?>

	</div><!-- #content -->

	<footer id="ht-colophon" class="ht-site-footer">
		<?php if(is_active_sidebar('total-footer1') || is_active_sidebar('total-footer2') || is_active_sidebar('total-footer3') || is_active_sidebar('total-footer4')){ ?>
		<div id="ht-top-footer">
			<div class="ht-container">
				<div class="ht-top-footer ht-clearfix">
					<div class="ht-footer ht-footer1">
						<?php if(is_active_sidebar('total-footer1')): 
							dynamic_sidebar('total-footer1');
						endif;
						?>	
					</div>

					<div class="ht-footer ht-footer2">
						<?php if(is_active_sidebar('total-footer2')): 
							dynamic_sidebar('total-footer2');
						endif;
						?>	
					</div>

					<div class="ht-footer ht-footer3">
						<?php if(is_active_sidebar('total-footer3')): 
							dynamic_sidebar('total-footer3');
						endif;
						?>	
					</div>

					<div class="ht-footer ht-footer4">
						<?php if(is_active_sidebar('total-footer4')): 
							dynamic_sidebar('total-footer4');
						endif;
						?>	
					</div>
				</div>
			</div>
		</div>
		<?php } ?>

		<div id="ht-bottom-footer">
			<div class="ht-container">
				<div class="ht-site-info">
					Site design Copyright © 2018 LuxCoreRender project, images used are copyrighted by their respective authors and used with kind permission. Contact <a href="mailto:admin@luxcorerender.org">admin@luxcorerender.org</a>
				</div><!-- #site-info -->
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<div id="ht-back-top" class="ht-hide"><i class="fa fa-angle-up" aria-hidden="true"></i></div>
<?php wp_footer(); ?>

<svg xmlns="http://www.w3.org/2000/svg" id="svg-filters">
	<filter id="svg-colorize-orange">
		<feColorMatrix color-interpolation-filters="sRGB" type="matrix" values="0 0 0 0 0.996 0 0 0 0 0.537 0 0 0 0 0.039 0 0 0 1 0"/>
	</filter>
</svg>

</body>
</html>
