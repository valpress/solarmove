<?php
/**
 * Page 2.1 Section for our theme
 *
 * @package WordPress
 * @subpackage Integral
 * @since Integral 1.0
 */
?>
<?php global $integral; ?>
<?php if($integral['page-2-1-section-toggle']==1) { ?>
<section id="page-2-1" class="sm_column_layout <?php echo $integral['page-2-1-custom-class']; ?>">
	<div class="container">
		<div class="row">
			<div class="col-md-12 heading">
				<?php if ($integral['page-2-1-title']) { ?><h2><?php echo __($integral['page-2-1-title'], 'solarmove'); ?></h2><?php } ?>
                <?php if ($integral['page-2-1-subtitle']) { ?><p><?php echo __($integral['page-2-1-subtitle'], 'solarmove'); ?></p><?php } ?>
			</div>
        </div>
        <?php if ( is_active_sidebar( 'page-2-1-column-widget' ) ) : ?>
        <div class="row multi-columns-row">
            <?php dynamic_sidebar( 'page-2-1-column-widget' ); ?>
        </div>
        <?php endif; ?>
	</div>
</section><!--page-2-1-->
<?php } ?>