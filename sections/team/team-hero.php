<?php
/**
 *
 * @package WordPress
 * @subpackage Integral
 * @since Integral 1.0
 */
?>
<?php global $integral; ?>
<section id="team-hero" class="sm_hero_layout sm_hero_layout_team-hero">
<?php if($integral['team-hero-overlay-toggle']==1) { ?><div class="blacklayer"></div><?php } ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?php if ($integral['team-hero-title']) { ?><h1><?php echo __($integral['team-hero-title'], 'solarmove'); ?></h1><?php } ?>
			<?php if ($integral['team-hero-subtitle']) { ?><h2><?php echo __($integral['team-hero-subtitle'], 'solarmove'); ?></h2><?php } ?>
			<?php if ($integral['team-hero-tagline']) { ?>
            <div class="lead text-center">
                <p><?php echo str_replace("\n", "<br>", __($integral['team-hero-tagline'], 'solarmove')); ?></p>
            </div>
            <?php } ?>
			<?php if($integral['team-hero-btn1-toggle']==true && $integral['team-hero-btn2-toggle']==false) { ?>
            <div class="col-md-12 text-center">
                <a href="<?php echo $integral['team-hero-btn1-url']; ?>" class="btn btn-lg btn-secondary btn-solarmove"><?php echo __($integral['team-hero-btn1-text'], 'solarmove'); ?></a>
			</div>
			<?php } else if($integral['team-hero-btn1-toggle']==true){ ?>
			<div class="col-md-6 text-right">
                <a href="<?php echo $integral['team-hero-btn1-url']; ?>" class="btn btn-lg btn-secondary btn-solarmove"><?php echo __($integral['team-hero-btn1-text'], 'solarmove'); ?></a>
			</div>
			<?php } ?>
			<?php if($integral['team-hero-btn2-toggle']==true && $integral['team-hero-btn1-toggle']==false) { ?>
			<div class="col-md-12 text-center">
                <a href="<?php echo $integral['team-hero-btn2-url']; ?>" class="btn btn-lg btn-primary btn-solarmove"><?php echo __($integral['team-hero-btn2-text'], 'solarmove'); ?></a>
			</div>
			<?php } else if($integral['team-hero-btn2-toggle']==true) { ?>
			<div class="col-md-6 text-left">
                <a href="<?php echo $integral['team-hero-btn2-url']; ?>" class="btn btn-lg btn-primary btn-solarmove"><?php echo __($integral['team-hero-btn2-text'], 'solarmove'); ?></a>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
</section><!--team-hero-->