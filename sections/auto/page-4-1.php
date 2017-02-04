<?php
/**
 *
 * @package WordPress
 * @subpackage Integral
 * @since Integral 1.0
 */
?>
<?php global $integral; ?>
<?php if($integral['page-4-1-section-toggle']==1) { ?>
<section id="page-4-1" class="sm_column_layout light-gray <?php echo $integral['page-4-1-custom-class']; ?>">
    <div class="triangle--left-top"></div>
    <div class="triangle--right-top"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading">
                <?php if ($integral['page-4-1-title']) { ?><h2><?php echo $integral['page-4-1-title']; ?></h2><?php } ?>
                <?php if ($integral['page-4-1-subtitle']) { ?><p><?php echo $integral['page-4-1-subtitle']; ?></p><?php } ?>
            </div>
        </div>
        <?php if ( is_active_sidebar( 'page-4-1-column-widget' ) ) : ?>
        <div class="row multi-columns-row">
            <?php dynamic_sidebar( 'page-4-1-column-widget' ); ?>
        </div>
        <?php endif; ?>
    </div>
</section><!--page-4-1-->
<?php } ?>