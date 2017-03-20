<?php
/**
 *
 * @package WordPress
 * @subpackage Integral
 * @since Integral 1.0
 */
?>
<?php global $integral; ?>
<?php if($integral['page-3-2-section-toggle']==1) { ?>
<section id="page-3-2" class="sm_column_layout <?php echo $integral['page-3-2-custom-class']; ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading">
                <?php if ($integral['page-3-2-title']) { ?><h2><?php echo __($integral['page-3-2-title'], 'solarmove'); ?></h2><?php } ?>
                <?php if ($integral['page-3-2-subtitle']) { ?><p><?php echo __($integral['page-3-2-subtitle'], 'solarmove'); ?></p><?php } ?>
            </div>
        </div>
        <?php if ( is_active_sidebar( 'page-3-2-column-widget' ) ) : ?>
        <div class="row multi-columns-row">
            <?php dynamic_sidebar( 'page-3-2-column-widget' ); ?>
        </div>
        <?php endif; ?>
    </div>
</section><!--page-3-2-->
<?php } ?>