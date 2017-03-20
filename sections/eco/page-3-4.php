<?php
/**
 *
 * @package WordPress
 * @subpackage Integral
 * @since Integral 1.0
 */
?>
<?php global $integral; ?>
<?php if($integral['page-3-4-section-toggle']==1) { ?>
<section id="page-3-4" class="sm_simple_text_layout sm_simple_text_layout_page-3-4 <?php echo $integral['page-3-4-custom-class']; ?>">
    <?php if($integral['page-3-4-overlay-toggle']==1) { ?><div class="blacklayer"></div><?php } ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if ($integral['page-3-4-title']) { ?><h2><?php echo __($integral['page-3-4-title'], 'solarmove'); ?></h2><?php } ?>
                <?php if ($integral['page-3-4-text']) { ?><p><?php echo __($integral['page-3-4-text'], 'solarmove'); ?></p><?php } ?>
            </div>
            <?php if($integral['page-3-4-btn1-toggle']==true && $integral['page-3-4-btn2-toggle']==false) { ?>
                <div class="col-md-12 text-center">
                <?php if ($integral['page-3-4-btn1-text']) { ?><a href="<?php echo $integral['page-3-4-btn1-url']; ?>" class="btn btn-lg btn-secondary btn-solarmove"><?php echo __($integral['page-3-4-btn1-text'], 'solarmove'); ?></a><?php } ?>
                </div>
                <?php } else if($integral['page-3-4-btn1-toggle']==true){ ?>
                <div class="col-md-6 text-right">
                <?php if ($integral['page-3-4-btn1-text']) { ?><a href="<?php echo $integral['page-3-4-btn1-url']; ?>" class="btn btn-lg btn-secondary btn-solarmove"><?php echo __($integral['page-3-4-btn1-text'], 'solarmove'); ?></a><?php } ?>
                </div>
                <?php } ?>

                <?php if($integral['page-3-4-btn2-toggle']==true && $integral['page-3-4-btn1-toggle']==false) { ?>
                <div class="col-md-12 text-center">
                <?php if ($integral['page-3-4-btn2-text']) { ?><a href="<?php echo $integral['page-3-4-btn2-url']; ?>" class="btn btn-danger btn-lg btn-primary btn-solarmove"><?php echo __($integral['page-3-4-btn2-text'], 'solarmove'); ?></a><?php } ?>
                </div>
                <?php } else if($integral['page-3-4-btn2-toggle']==true) { ?>
                <div class="col-md-6 text-left">
                <?php if ($integral['page-3-4-btn2-text']) { ?><a href="<?php echo $integral['page-3-4-btn2-url']; ?>" class="btn btn-danger btn-lg btn-primary btn-solarmove"><?php echo __($integral['page-3-4-btn2-text'], 'solarmove'); ?></a><?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php } ?>