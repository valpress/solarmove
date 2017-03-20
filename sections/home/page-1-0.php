<?php
/**
 *
 * @package WordPress
 * @subpackage Integral
 * @since Integral 1.0
 */
?>
<?php global $integral; ?>
<section id="page-1-0" class="sm_hero_layout sm_hero_layout_page-1-0">
<?php if($integral['page-1-0-overlay-toggle']==1) { ?><div class="blacklayer"></div><?php } ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?php if ($integral['page-1-0-title']) { ?><h1><?php echo __($integral['page-1-0-title'], 'solarmove'); ?></h1><?php } ?>
			<?php if ($integral['page-1-0-subtitle']) { ?><h2><?php echo __($integral['page-1-0-subtitle'], 'solarmove'); ?></h2><?php } ?>
			<?php if ($integral['page-1-0-tagline']) { ?>
            <div class="lead text-center">
                <p><?php echo str_replace("\n", "<br>", __($integral['page-1-0-tagline'], 'solarmove')); ?></p>
            </div>
            <?php } ?>
			<?php if($integral['page-1-0-btn1-toggle']==true && $integral['page-1-0-btn2-toggle']==false) { ?>
            <div class="col-md-12 text-center">
                <a href="<?php echo $integral['page-1-0-btn1-url']; ?>" class="btn btn-lg btn-secondary btn-solarmove"><?php echo __($integral['page-1-0-btn1-text'], 'solarmove'); ?></a>
			</div>
			<?php } else if($integral['page-1-0-btn1-toggle']==true){ ?>
			<div class="col-md-6 text-right">
                <a href="<?php echo $integral['page-1-0-btn1-url']; ?>" class="btn btn-lg btn-secondary btn-solarmove"><?php echo __($integral['page-1-0-btn1-text'], 'solarmove'); ?></a>
			</div>
			<?php } ?>
			<?php if($integral['page-1-0-btn2-toggle']==true && $integral['page-1-0-btn1-toggle']==false) { ?>
			<div class="col-md-12 text-center">
                <a href="<?php echo $integral['page-1-0-btn2-url']; ?>" class="btn btn-lg btn-primary btn-solarmove"><?php echo __($integral['page-1-0-btn2-text'], 'solarmove'); ?></a>
			</div>
			<?php } else if($integral['page-1-0-btn2-toggle']==true) { ?>
			<div class="col-md-6 text-left">
                <a href="<?php echo $integral['page-1-0-btn2-url']; ?>" class="btn btn-lg btn-primary btn-solarmove"><?php echo __($integral['page-1-0-btn2-text'], 'solarmove'); ?></a>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
</section><!--page-1-0-->