<?php
/**
 * Stakeholders Section for our theme
 *
 * @package WordPress
 * @subpackage Integral
 * @since Integral 1.0
 */
?>
<?php global $integral; ?>
<?php if($integral['sh-grid-section-toggle']==1) { ?>
<section id="sh-grid" class="sh-grid lite <?php echo $integral['sh-grid-custom-class']; ?>">
	<div class="container">
		<?php if ($integral['sh-grid-maintitle']) { ?>
        <div class="row">
			<div class="col-md-12">			
                <h2 class="smalltitle"><?php echo $integral['sh-grid-maintitle']; ?><span></span></h2>
			</div>
        </div>
        <?php } ?>
        <?php if ( is_active_sidebar( 'sh-grid-widget' ) ) : ?>
        <div class="row multi-columns-row">
            <?php dynamic_sidebar( 'sh-grid-widget' ); ?>
        </div>
        <?php endif; ?>
	</div>
</section><!--sh-->
<?php } ?>