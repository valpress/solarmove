<?php
/**
 *
 * @package WordPress
 * @subpackage Integral
 * @since Integral 1.0
 */
?>
<?php global $integral; ?>
<?php if($integral['sh-section-toggle']==1) { ?>
<section id="sh" class="sm_simple_text_layout sm_simple_text_layout_sh <?php echo $integral['sh-custom-class']; ?>">
    <?php if($integral['sh-overlay-toggle']==1) { ?><div class="blacklayer"></div><?php } ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if ($integral['sh-title']) { ?><h2><?php echo __($integral['sh-title'], 'solarmove'); ?></h2><?php } ?>
                <?php if ($integral['sh-text']) { ?><p><?php echo __($integral['sh-text'], 'solarmove'); ?></p><?php } ?>
            </div>
            <?php if($integral['sh-btn1-toggle']==true && $integral['sh-btn2-toggle']==false) { ?>
                <div class="col-md-12 text-center">
                <?php if ($integral['sh-btn1-text']) { ?><a href="<?php echo $integral['sh-btn1-url']; ?>" class="btn btn-lg btn-secondary btn-solarmove"><?php echo __($integral['sh-btn1-text'], 'solarmove'); ?></a><?php } ?>
                </div>
                <?php } else if($integral['sh-btn1-toggle']==true){ ?>
                <div class="col-md-6 text-right">
                <?php if ($integral['sh-btn1-text']) { ?><a href="<?php echo $integral['sh-btn1-url']; ?>" class="btn btn-lg btn-secondary btn-solarmove"><?php echo __($integral['sh-btn1-text'], 'solarmove'); ?></a><?php } ?>
                </div>
                <?php } ?>

                <?php if($integral['sh-btn2-toggle']==true && $integral['sh-btn1-toggle']==false) { ?>
                <div class="col-md-12 text-center">
                <?php if ($integral['sh-btn2-text']) { ?><a href="<?php echo $integral['sh-btn2-url']; ?>" class="btn btn-danger btn-lg btn-primary btn-solarmove"><?php echo __($integral['sh-btn2-text'], 'solarmove'); ?></a><?php } ?>
                </div>
                <?php } else if($integral['sh-btn2-toggle']==true) { ?>
                <div class="col-md-6 text-left">
                <?php if ($integral['sh-btn2-text']) { ?><a href="<?php echo $integral['sh-btn2-url']; ?>" class="btn btn-danger btn-lg btn-primary btn-solarmove"><?php echo __($integral['sh-btn2-text'], 'solarmove'); ?></a><?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php } ?>