<?php
/**
 *
 * @package WordPress
 * @subpackage Integral
 * @since Integral 1.0
 */
?>
<?php global $integral; ?>
<?php if($integral['mission-section-toggle']==1) { ?>
<section id="mission" class="sm_simple_text_layout sm_simple_text_layout_mission <?php echo $integral['mission-custom-class']; ?>">
    <?php if($integral['mission-overlay-toggle']==1) { ?><div class="blacklayer"></div><?php } ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if ($integral['mission-title']) { ?><h2><?php echo __($integral['mission-title'], 'solarmove'); ?></h2><?php } ?>
                <?php if ($integral['mission-text']) { ?><p><?php echo __($integral['mission-text'], 'solarmove'); ?></p><?php } ?>
            </div>
            <?php if($integral['mission-btn1-toggle']==true && $integral['mission-btn2-toggle']==false) { ?>
                <div class="col-md-12 text-center">
                <?php if ($integral['mission-btn1-text']) { ?><a href="<?php echo $integral['mission-btn1-url']; ?>" class="btn btn-lg btn-secondary btn-solarmove"><?php echo __($integral['mission-btn1-text'], 'solarmove'); ?></a><?php } ?>
                </div>
                <?php } else if($integral['mission-btn1-toggle']==true){ ?>
                <div class="col-md-6 text-right">
                <?php if ($integral['mission-btn1-text']) { ?><a href="<?php echo $integral['mission-btn1-url']; ?>" class="btn btn-lg btn-secondary btn-solarmove"><?php echo __($integral['mission-btn1-text'], 'solarmove'); ?></a><?php } ?>
                </div>
                <?php } ?>

                <?php if($integral['mission-btn2-toggle']==true && $integral['mission-btn1-toggle']==false) { ?>
                <div class="col-md-12 text-center">
                <?php if ($integral['mission-btn2-text']) { ?><a href="<?php echo $integral['mission-btn2-url']; ?>" class="btn btn-danger btn-lg btn-primary btn-solarmove"><?php echo __($integral['mission-btn2-text'], 'solarmove'); ?></a><?php } ?>
                </div>
                <?php } else if($integral['mission-btn2-toggle']==true) { ?>
                <div class="col-md-6 text-left">
                <?php if ($integral['mission-btn2-text']) { ?><a href="<?php echo $integral['mission-btn2-url']; ?>" class="btn btn-danger btn-lg btn-primary btn-solarmove"><?php echo __($integral['mission-btn2-text'], 'solarmove'); ?></a><?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php } ?>