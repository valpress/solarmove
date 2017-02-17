<?php
/**
 * Projects Section for our theme
 *
 * @package WordPress
 * @subpackage Integral
 * @since Integral 1.0
 */
?>
<?php global $integral; ?>
<?php if($integral['proj-grid-section-toggle']==1) { ?>
<section id="proj-grid" class="proj-grid lite <?php echo $integral['proj-grid-custom-class']; ?>">
	<div class="container">
		<?php if ($integral['proj-grid-maintitle']) { ?>
        <div class="row">
			<div class="col-md-12">			
                <h2 class="smalltitle"><?php echo $integral['proj-grid-maintitle']; ?><span></span></h2>
			</div>
        </div>
        <?php } ?>
        <?php if ( is_active_sidebar( 'proj-grid-widget' ) ) : ?>
        <div class="row multi-columns-row">
            <?php dynamic_sidebar( 'proj-grid-widget' ); ?>
        </div>
        <?php endif; ?>
	</div>
</section><!--proj-grid-->
<?php } ?>