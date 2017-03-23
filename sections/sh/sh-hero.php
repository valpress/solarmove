<?php
/**
 *
 * @package WordPress
 * @subpackage Integral
 * @since Integral 1.0
 */
?>
<?php global $integral; ?>
<section id="sh-hero" class="sm_hero_layout sm_hero_layout_sh-hero">
<?php if($integral['sh-hero-overlay-toggle']==1) { ?><div class="blacklayer"></div><?php } ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?php if ($integral['sh-hero-title']) { ?><h1><?php echo __($integral['sh-hero-title'], 'solarmove'); ?></h1>
			<?php } else { ?><center><img src="/wp-content/themes/solarmove/assets/images/logo_black.png" style="max-width:60%;" /></center><?php } ?>
			<?php if ($integral['sh-hero-subtitle']) { ?><h2><?php echo __($integral['sh-hero-subtitle'], 'solarmove'); ?></h2><?php } ?>
			<?php if ($integral['sh-hero-tagline']) { ?>
            <div class="lead text-center">
                <p><?php echo str_replace("\n", "<br>", __($integral['sh-hero-tagline'], 'solarmove')); ?></p>
            </div>
            <?php } ?>
			<?php if($integral['sh-hero-btn1-toggle']==true && $integral['sh-hero-btn2-toggle']==false) { ?>
            <div class="col-md-12 text-center">
                <a href="<?php echo $integral['sh-hero-btn1-url']; ?>" class="btn btn-lg btn-secondary btn-solarmove"><?php echo __($integral['sh-hero-btn1-text'], 'solarmove'); ?></a>
			</div>
			<?php } else if($integral['sh-hero-btn1-toggle']==true){ ?>
			<div class="col-md-6 text-right">
                <a href="<?php echo $integral['sh-hero-btn1-url']; ?>" class="btn btn-lg btn-secondary btn-solarmove"><?php echo __($integral['sh-hero-btn1-text'], 'solarmove'); ?></a>
			</div>
			<?php } ?>
			<?php if($integral['sh-hero-btn2-toggle']==true && $integral['sh-hero-btn1-toggle']==false) { ?>
			<div class="col-md-12 text-center">
                <a href="<?php echo $integral['sh-hero-btn2-url']; ?>" class="btn btn-lg btn-primary btn-solarmove"><?php echo __($integral['sh-hero-btn2-text'], 'solarmove'); ?></a>
			</div>
			<?php } else if($integral['sh-hero-btn2-toggle']==true) { ?>
			<div class="col-md-6 text-left">
                <a href="<?php echo $integral['sh-hero-btn2-url']; ?>" class="btn btn-lg btn-primary btn-solarmove"><?php echo __($integral['sh-hero-btn2-text'], 'solarmove'); ?></a>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
</section><!--sh-hero-->