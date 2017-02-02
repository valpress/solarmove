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
                <?php if ($integral['page-3-5-title']) { ?><h2><?php echo $integral['page-3-5-title']; ?></h2><?php } ?>
                <?php if ($integral['page-3-5-text']) { ?><p><?php echo $integral['page-3-5-text']; ?></p><?php } ?>
            </div>
            <div class="col-md-12">
                <table class="battery-table">
                    <thead>
                        <tr>
                            <th></th>
                            <th class="active">Column 1</th>
                            <th>Column 2</th>
                            <th>Column 3</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="row-header">Row 1</td>
                            <td class="active"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                            <td>Yes</td>
                            <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                        </tr>
                        <tr>
                            <td class="row-header">Row 2</td>
                            <td class="active"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                            <td>No</td>
                            <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                        </tr>
                        <tr>
                            <td class="row-header">Row 3</td>
                            <td class="active"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                            <td>Maybe</td>
                            <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?php } ?>