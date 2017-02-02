<?php
/**
 *
 * @package WordPress
 * @subpackage Integral
 * @since Integral 1.0
 */
?>
<?php global $integral; ?>
<?php if($integral['page-1-2-section-toggle']==1) { ?>
<section id="page-1-2" class="sm_simple_text_layout sm_simple_text_layout_page-1-2 <?php echo $integral['page-1-2-custom-class']; ?>">
    <?php if($integral['page-1-2-overlay-toggle']==1) { ?><div class="blacklayer"></div><?php } ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if ($integral['page-1-2-title']) { ?><h2><?php echo $integral['page-1-2-title']; ?></h2><?php } ?>
                <?php if ($integral['page-1-2-text']) { ?><p><?php echo $integral['page-1-2-text']; ?></p><?php } ?>
            </div>
            <?php if($integral['page-1-2-btn1-toggle']==true && $integral['page-1-2-btn2-toggle']==false) { ?>
                <div class="col-md-12 text-center">
                <?php if ($integral['page-1-2-btn1-text']) { ?><a href="<?php echo $integral['page-1-2-btn1-url']; ?>" class="btn btn-lg btn-secondary"><?php echo $integral['page-1-2-btn1-text']; ?></a><?php } ?>
                </div>
                <?php } else if($integral['page-1-2-btn1-toggle']==true){ ?>
                <div class="col-md-6 text-right">
                <?php if ($integral['page-1-2-btn1-text']) { ?><a href="<?php echo $integral['page-1-2-btn1-url']; ?>" class="btn btn-lg btn-secondary"><?php echo $integral['page-1-2-btn1-text']; ?></a><?php } ?>
                </div>
                <?php } ?>

                <?php if($integral['page-1-2-btn2-toggle']==true && $integral['page-1-2-btn1-toggle']==false) { ?>
                <div class="col-md-12 text-center">
                <?php if ($integral['page-1-2-btn2-text']) { ?><a href="<?php echo $integral['page-1-2-btn2-url']; ?>" class="btn btn-danger btn-lg btn-primary"><?php echo $integral['page-1-2-btn2-text']; ?></a><?php } ?>
                </div>
                <?php } else if($integral['page-1-2-btn2-toggle']==true) { ?>
                <div class="col-md-6 text-left">
                <?php if ($integral['page-1-2-btn2-text']) { ?><a href="<?php echo $integral['page-1-2-btn2-url']; ?>" class="btn btn-danger btn-lg btn-primary"><?php echo $integral['page-1-2-btn2-text']; ?></a><?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="triangle--left-bottom triangle--left-bottom--black"></div>
    <div class="triangle--right-bottom triangle--right-bottom--black"></div>
</section>
<?php } ?>