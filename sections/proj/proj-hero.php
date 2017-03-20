<?php
/**
 *
 * @package WordPress
 * @subpackage Integral
 * @since Integral 1.0
 */
?>
<?php global $integral; ?>
<section id="proj-hero" class="sm_hero_layout sm_hero_layout_proj-hero">
<?php if($integral['proj-hero-overlay-toggle']==1) { ?><div class="blacklayer"></div><?php } ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?php if ($integral['proj-hero-title']) { ?><h1><?php echo __($integral['proj-hero-title'], 'solarmove'); ?></h1><?php } ?>
			<?php if ($integral['proj-hero-subtitle']) { ?><h2><?php echo __($integral['proj-hero-subtitle'], 'solarmove'); ?></h2><?php } ?>
			<?php if ($integral['proj-hero-tagline']) { ?>
            <div class="lead text-center">
                <p><?php echo str_replace("\n", "<br>", __($integral['proj-hero-tagline'], 'solarmove')); ?></p>
            </div>
            <?php } ?>
			<?php if($integral['proj-hero-btn1-toggle']==true && $integral['proj-hero-btn2-toggle']==false) { ?>
            <div class="col-md-12 text-center">
                <a href="<?php echo $integral['proj-hero-btn1-url']; ?>" class="btn btn-lg btn-secondary btn-solarmove"><?php echo __($integral['proj-hero-btn1-text'], 'solarmove'); ?></a>
			</div>
			<?php } else if($integral['proj-hero-btn1-toggle']==true){ ?>
			<div class="col-md-6 text-right">
                <a href="<?php echo $integral['proj-hero-btn1-url']; ?>" class="btn btn-lg btn-secondary btn-solarmove"><?php echo __($integral['proj-hero-btn1-text'], 'solarmove'); ?></a>
			</div>
			<?php } ?>
			<?php if($integral['proj-hero-btn2-toggle']==true && $integral['proj-hero-btn1-toggle']==false) { ?>
			<div class="col-md-12 text-center">
                <a href="<?php echo $integral['proj-hero-btn2-url']; ?>" class="btn btn-lg btn-primary btn-solarmove"><?php echo __($integral['proj-hero-btn2-text'], 'solarmove'); ?></a>
			</div>
			<?php } else if($integral['proj-hero-btn2-toggle']==true) { ?>
			<div class="col-md-6 text-left">
                <a href="<?php echo $integral['proj-hero-btn2-url']; ?>" class="btn btn-lg btn-primary btn-solarmove"><?php echo __($integral['proj-hero-btn2-text'], 'solarmove'); ?></a>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
</section><!--proj-hero-->