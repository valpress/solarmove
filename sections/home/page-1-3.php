<?php
/**
 * Contact Section for our theme
 *
 * @package WordPress
 * @subpackage Integral
 * @since Integral 1.0
 */
?>
<?php global $integral; ?>
<?php if($integral['page-1-3-section-toggle']==1) { ?>
<section id="page-1-3" class="page-1-3 dark <?php echo $integral['page-1-3-custom-class']; ?>">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php if ($integral['page-1-3-title']) { ?><h2><?php echo $integral['page-1-3-title']; ?></h2><?php } ?>
	            <?php if ($integral['page-1-3-subtitle']) { ?><p class="subtitle"><?php echo $integral['page-1-3-subtitle']; ?></p><?php } ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<?php echo do_shortcode($integral['page-1-3-form-code']); ?>
			</div>
		</div>
	</div>
</section><!--page-1-3-->
<?php } ?>