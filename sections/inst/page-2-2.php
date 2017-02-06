<?php
/**
 *
 * @package WordPress
 * @subpackage Integral
 * @since Integral 1.0
 */
?>
<?php global $integral; ?>
<?php if($integral['page-2-2-section-toggle']==1) { ?>
<section id="page-2-2" class="sm_carousel_layout">
    <div class="triangle--left-top"></div>
    <div class="triangle--right-top"></div>
    <div id="page-2-2-carousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#page-2-2-carousel" data-slide-to="0" class="active"></li>
			<li data-target="#page-2-2-carousel" data-slide-to="1" class=""></li>
			<li data-target="#page-2-2-carousel" data-slide-to="2" class=""></li>
			<li data-target="#page-2-2-carousel" data-slide-to="3" class=""></li>
			<li data-target="#page-2-2-carousel" data-slide-to="4" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active sm_carousel_layout-slide-1">
				<div class="container">
					<div class="carousel-caption">
						<h1><?php echo __($integral['page-2-2-slide-1-title'], 'solarmove'); ?></h1>
						<p><?php echo __($integral['page-2-2-slide-1-subtitle'], 'solarmove'); ?></p>
					</div>
				</div>
			</div>
			<div class="item sm_carousel_layout-slide-2">
				<div class="container">
					<div class="carousel-caption">
						<h1><?php echo __($integral['page-2-2-slide-2-title'], 'solarmove'); ?></h1>
						<p><?php echo __($integral['page-2-2-slide-2-subtitle'], 'solarmove'); ?></p>
					</div>
				</div>
			</div>
			<div class="item sm_carousel_layout-slide-3">
				<div class="container">
					<div class="carousel-caption">
						<h1><?php echo __($integral['page-2-2-slide-3-title'], 'solarmove'); ?></h1>
						<p><?php echo __($integral['page-2-2-slide-3-subtitle'], 'solarmove'); ?></p>
					</div>
				</div>
			</div>
			<div class="item sm_carousel_layout-slide-4">
				<div class="container">
					<div class="carousel-caption">
						<h1><?php echo __($integral['page-2-2-slide-4-title'], 'solarmove'); ?></h1>
						<p><?php echo __($integral['page-2-2-slide-4-subtitle'], 'solarmove'); ?></p>
					</div>
				</div>
			</div>
			<div class="item sm_carousel_layout-slide-5">
				<div class="container">
					<div class="carousel-caption">
						<h1><?php echo __($integral['page-2-2-slide-5-title'], 'solarmove'); ?></h1>
						<p><?php echo __($integral['page-2-2-slide-5-subtitle'], 'solarmove'); ?></p>
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#page-2-2-carousel" role="button" data-slide="prev">
			<i class="fa fa-chevron-left"></i>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#page-2-2-carousel" role="button" data-slide="next">
			<i class="fa fa-chevron-right"></i>
			<span class="sr-only">Next</span>
		</a>
    </div>
</section><!--page-2-2-->
<?php } ?>