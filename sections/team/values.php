<?php
/**
 * Values Section for our theme
 *
 * @package WordPress
 * @subpackage Integral
 * @since Integral 1.0
 */
?>
<?php global $integral; ?>
<?php if($integral['values-section-toggle']==1) { ?>
<section id="values" class="sm_column_layout <?php echo $integral['values-custom-class']; ?>">
	<div class="container">
		<div class="row">
			<div class="col-md-12 heading">
				<?php if ($integral['values-title']) { ?><h2><?php echo __($integral['values-title'], 'solarmove'); ?></h2><?php } ?>
                <?php if ($integral['values-subtitle']) { ?><p><?php echo __($integral['values-subtitle'], 'solarmove'); ?></p><?php } ?>
			</div>
        </div>
        <?php if ( is_active_sidebar( 'values-column-widget' ) ) : ?>
        <div class="row multi-columns-row">
            <?php dynamic_sidebar( 'values-column-widget' ); ?>
        </div>
        <?php endif; ?>
	</div>
</section><!--values-->
<?php } ?>