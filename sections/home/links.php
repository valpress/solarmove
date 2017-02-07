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
<?php if($integral['links-section-toggle']==1) { ?>
<section id="links" class="links dark <?php echo $integral['links-custom-class']; ?>">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<?php if ($integral['links-title']) { ?><h1><?php echo __($integral['links-title'], 'solarmove'); ?></h1><?php } ?>
			</div>
			<div class="col-md-2">
				<?php if($integral['links-btn1-toggle']==true) { ?>
					<?php if ($integral['links-btn1-text']) { ?><a href="<?php echo $integral['links-btn1-url']; ?>" class="btn"><?php echo __($integral['links-btn1-text'], 'solarmove'); ?></a><br/><?php } ?>
				<?php } ?>
				<?php if($integral['links-btn4-toggle']==true) { ?>
					<?php if ($integral['links-btn4-text']) { ?><a href="<?php echo $integral['links-btn4-url']; ?>" class="btn"><?php echo __($integral['links-btn4-text'], 'solarmove'); ?></a><?php } ?>
				<?php } ?>
			</div>
			<div class="col-md-2">
				<?php if($integral['links-btn2-toggle']==true) { ?>
					<?php if ($integral['links-btn2-text']) { ?><a href="<?php echo $integral['links-btn2-url']; ?>" class="btn"><?php echo __($integral['links-btn2-text'], 'solarmove'); ?></a><br/><?php } ?>
				<?php } ?>
				<?php if($integral['links-btn5-toggle']==true) { ?>
					<?php if ($integral['links-btn5-text']) { ?><a href="<?php echo $integral['links-btn5-url']; ?>" class="btn"><?php echo __($integral['links-btn5-text'], 'solarmove'); ?></a><?php } ?>
				<?php } ?>
			</div>
			<div class="col-md-2">
				<?php if($integral['links-btn3-toggle']==true) { ?>
					<?php if ($integral['links-btn3-text']) { ?><a href="<?php echo $integral['links-btn3-url']; ?>" class="btn"><?php echo __($integral['links-btn3-text'], 'solarmove'); ?></a><br/><?php } ?>
				<?php } ?>
				<?php if($integral['links-btn6-toggle']==true) { ?>
					<?php if ($integral['links-btn6-text']) { ?><a href="<?php echo $integral['links-btn6-url']; ?>" class="btn"><?php echo __($integral['links-btn6-text'], 'solarmove'); ?></a><?php } ?>
				<?php } ?>
			</div>
		</div>
	</div>
</section><!--links-->
<?php } ?>