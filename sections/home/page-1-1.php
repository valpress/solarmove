<?php
/**
 *
 * @package WordPress
 * @subpackage Integral
 * @since Integral 1.0
 */
?>
<?php global $integral; ?>
<?php if($integral['page-1-1-section-toggle']==1) { ?>
<section id="page-1-1" class="sm_simple_text_layout sm_simple_text_layout_page-1-1 <?php echo $integral['page-1-1-custom-class']; ?>">
    <?php if($integral['page-1-1-overlay-toggle']==1) { ?><div class="blacklayer"></div><?php } ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if ($integral['page-1-1-title']) { ?><h2><?php echo __($integral['page-1-1-title'], 'solarmove'); ?></h2><?php } ?>
                <?php if ($integral['page-1-1-text']) { ?><p><?php echo __($integral['page-1-1-text'], 'solarmove'); ?></p><?php } ?>
            </div>
            <?php if($integral['page-1-1-btn1-toggle']==true && $integral['page-1-1-btn2-toggle']==false) { ?>
                <div class="col-md-12 text-center">
                <?php if ($integral['page-1-1-btn1-text']) { ?><a href="<?php echo $integral['page-1-1-btn1-url']; ?>" class="btn btn-lg btn-secondary btn-solarmove"><?php echo __($integral['page-1-1-btn1-text'], 'solarmove'); ?></a><?php } ?>
                </div>
                <?php } else if($integral['page-1-1-btn1-toggle']==true){ ?>
                <div class="col-md-6 text-right">
                <?php if ($integral['page-1-1-btn1-text']) { ?><a href="<?php echo $integral['page-1-1-btn1-url']; ?>" class="btn btn-lg btn-secondary btn-solarmove"><?php echo __($integral['page-1-1-btn1-text'], 'solarmove'); ?></a><?php } ?>
                </div>
                <?php } ?>

                <?php if($integral['page-1-1-btn2-toggle']==true && $integral['page-1-1-btn1-toggle']==false) { ?>
                <div class="col-md-12 text-center">
                <?php if ($integral['page-1-1-btn2-text']) { ?><a href="<?php echo $integral['page-1-1-btn2-url']; ?>" class="btn btn-danger btn-lg btn-primary btn-solarmove"><?php echo __($integral['page-1-1-btn2-text'], 'solarmove'); ?></a><?php } ?>
                </div>
                <?php } else if($integral['page-1-1-btn2-toggle']==true) { ?>
                <div class="col-md-6 text-left">
                <?php if ($integral['page-1-1-btn2-text']) { ?><a href="<?php echo $integral['page-1-1-btn2-url']; ?>" class="btn btn-danger btn-lg btn-primary btn-solarmove"><?php echo __($integral['page-1-1-btn2-text'], 'solarmove'); ?></a><?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php } ?>