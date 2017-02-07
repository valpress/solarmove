<?php
/**
 *
 * @package WordPress
 * @subpackage Integral
 * @since Integral 1.0
 */
?>
<?php global $integral; ?>
<?php if($integral['page-3-5-section-toggle']==1) { ?>
<section id="page-3-5" class="sm_simple_text_layout sm_simple_text_layout_page-3-5 <?php echo $integral['page-3-5-custom-class']; ?>">
    <?php if($integral['page-3-5-overlay-toggle']==1) { ?><div class="blacklayer"></div><?php } ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if ($integral['page-3-5-title']) { ?><h2><?php echo __($integral['page-3-5-title'], 'solarmove'); ?></h2><?php } ?>
                <?php if ($integral['page-3-5-text']) { ?><p><?php echo __($integral['page-3-5-text'], 'solarmove'); ?></p><?php } ?>
            </div>
            <?php if ( is_active_sidebar( 'page-3-5-table-widget' ) ) : ?>
            <div class="col-md-12">
                <table class="battery-table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Column 1</th>
                            <th>Column 2</th>
                            <th>Column 3</th>
                            <th>Column 4</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php dynamic_sidebar( 'page-3-5-table-widget' ); ?>
                    </tbody>
                </table>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php } ?>