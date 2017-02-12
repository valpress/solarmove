<?php
/**
 *
 * @package WordPress
 * @subpackage Integral
 * @since Integral 1.0
 */
?>
<?php global $integral; ?>
<?php if($integral['page-5-1-section-toggle']==1) { ?>
<section id="page-5-1" class="sm_carousel_layout white">
    <div class="container">
	    <div id="page-5-1-carousel" class="carousel carousel-small slide" data-ride="carousel" data-interval="false">
			<ol class="carousel-indicators">
				<li data-target="#page-5-1-carousel" data-slide-to="0" class="active"></li>
				<li data-target="#page-5-1-carousel" data-slide-to="1" class=""></li>
				<li data-target="#page-5-1-carousel" data-slide-to="2" class=""></li>
				<li data-target="#page-5-1-carousel" data-slide-to="3" class=""></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<div class="container">
						<div class="carousel-caption carousel-caption-black">
							<h1><?php echo __($integral['page-5-1-slide-1-title'], 'solarmove') . ' | ' . __($integral['page-5-1-slide-1-subtitle'], 'solarmove'); ?></h1>
							<p><?php echo __($integral['page-5-1-slide-1-text'], 'solarmove'); ?></p>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="container">
						<div class="carousel-caption carousel-caption-black">
							<h1><?php echo __($integral['page-5-1-slide-2-title'], 'solarmove') . ' | ' . __($integral['page-5-1-slide-2-subtitle'], 'solarmove'); ?></h1>
							<p><?php echo __($integral['page-5-1-slide-2-text'], 'solarmove'); ?></p>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="container">
						<div class="carousel-caption carousel-caption-black">
							<h1><?php echo __($integral['page-5-1-slide-3-title'], 'solarmove') . ' | ' . __($integral['page-5-1-slide-3-subtitle'], 'solarmove'); ?></h1>
							<p><?php echo __($integral['page-5-1-slide-3-text'], 'solarmove'); ?></p>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="container">
						<div class="carousel-caption carousel-caption-black">
							<h1><?php echo __($integral['page-5-1-slide-4-title'], 'solarmove') . ' | ' . __($integral['page-5-1-slide-4-subtitle'], 'solarmove'); ?></h1>
							<p><?php echo __($integral['page-5-1-slide-4-text'], 'solarmove'); ?></p>
						</div>
					</div>
				</div>
			</div>
			<a class="left left-black carousel-control" href="#page-5-1-carousel" role="button" data-slide="prev">
				<i class="fa fa-chevron-left"></i>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right right-black carousel-control" href="#page-5-1-carousel" role="button" data-slide="next">
				<i class="fa fa-chevron-right"></i>
				<span class="sr-only">Next</span>
			</a>
	    </div>
        <div class="row">
            <?php if ( is_active_sidebar( 'page-5-1-table-widget' ) ) : ?>
            <div class="col-md-12">
                <table class="battery-table">
                    <thead>
                        <tr>
                            <th></th>
                            <th class="col-0 active"><?php echo __($integral['page-5-1-slide-1-subtitle'], 'solarmove'); ?></th>
                            <th class="col-1"><?php echo __($integral['page-5-1-slide-2-subtitle'], 'solarmove'); ?></th>
                            <th class="col-2"><?php echo __($integral['page-5-1-slide-3-subtitle'], 'solarmove'); ?></th>
                            <th class="col-3"><?php echo __($integral['page-5-1-slide-4-subtitle'], 'solarmove'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php dynamic_sidebar( 'page-5-1-table-widget' ); ?>
                    </tbody>
                </table>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <script type="text/javascript">

    	var table_cols = 4;

    	function update_table_style() {
			for (var i = 0; i < table_cols; i++) {
				jQuery(".col-" + i).removeClass("active");
			};
			jQuery(".carousel-indicators > li").each(function() {
				if (jQuery(this).hasClass("active")) {
					slideIndex = get_slide_index(jQuery(this));
					jQuery(".col-" + slideIndex).addClass("active");
				}
			});
    	}

    	function get_slide_index(el) {
			return (parseInt(el.attr('data-slide-to')) + 1) % table_cols;
    	}

		jQuery(document)
			.on('click.bs.carousel.data-api', '[data-slide]', update_table_style)
			.on('click.bs.carousel.data-api', '[data-slide-to]', update_table_style)

    </script>
</section><!--page-5-1-->
<?php } ?>