<?php
/**
 * Partners Section for our theme
 *
 * @package WordPress
 * @subpackage Integral
 * @since Integral 1.0
 */
?>
<?php global $integral; ?>
<?php if($integral['part-grid-section-toggle']==1) { ?>
<section id="part-grid" class="part-grid lite <?php echo $integral['part-grid-custom-class']; ?>">
	<div class="container">
		<?php if ($integral['part-grid-maintitle']) { ?>
        <div class="row">
			<div class="col-md-12">			
                <h2 class="smalltitle"><?php echo $integral['part-grid-maintitle']; ?><span></span></h2>
			</div>
        </div>
        <?php } ?>
        <?php if ( is_active_sidebar( 'part-grid-widget' ) ) : ?>
        <div class="row multi-columns-row">
            <?php dynamic_sidebar( 'part-grid-widget' ); ?>
        </div>
        <?php endif; ?>
	</div>
</section><!--part-grid-->
<?php } ?>