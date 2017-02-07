<?php
/**
 * Footer section for our theme
 *
 * @package WordPress
 * @subpackage Integral
 * @since Integral 1.0
 */
?>
<?php global $integral; ?>
<?php if($integral['links-section-toggle']==1) { ?>
<section id="links" class="links dark <?php echo $integral['links-custom-class']; ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php if ($integral['links-title']) { ?><h1><?php echo __($integral['links-title'], 'solarmove'); ?></h1><?php } ?>
            </div>
            <?php if ( is_active_sidebar( 'link-widget' ) ) : ?>
            <div class="col-md-6">
                <div class="row">
                    <?php dynamic_sidebar( 'link-widget' ); ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section><!--links-->
<?php } ?>
<section class="copyright dark">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
                <div class="copyrightinfo">
                    <p>
                        <?php echo '&copy; ' . date('Y') . ' Solarmove &middot; All rights reserved &middot; Webdesign by <a href="http://valpress.ch" target="_blank">Valpress</a>' ?>
                    </p>
                </div>
			</div>
		</div>
	</div>
</section>
<?php wp_footer(); ?>
<?php echo "\n<!--Custom Footer Code Start-->\n".$integral['customcode-footer']."\n<!--Custom Footer Code End-->\n"; ?>
<?php get_template_part('sections/custom'); ?>
<!-- PrettyPhoto Code START -->
<script type="text/javascript" charset="utf-8">
        jQuery(document).ready(function($){
			$("a[rel^='prettyPhoto']").prettyPhoto({
				social_tools: false,
				theme: 'light_rounded',
                show_title: false,
                callback: function(){}
			});
		});
</script>
<!-- PrettyPhoto Code END -->
<!-- CounterUp Code For Stats START -->
<script type="text/javascript" charset="utf-8">
        jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 10,  // The delay in which the stats counter will start 
                time: 2000  // The speed by which the stats counter counts up (in milliseconds)
            });
        });
</script>
<!-- CounterUp Code For Stats END -->
<?php if($integral['animations-scrollreveal']==1) { ?>
<!-- Scroll Reveal START -->
<script>
    // Changing the defaults
    window.sr = ScrollReveal({ reset: false });
    // Customizing a reveal set
    sr.reveal('.page-template-template_home .features .feature', {
        duration: 900,
        delay: 50,
        origin: 'bottom',
        distance: '20px',
        scale: 1,
        easing: 'linear',
        viewFactor: 0.25
    }, 150);
    sr.reveal('.page-template-template_home .project-single .project', {
        duration: 900,
        delay: 50,
        origin: 'bottom',
        distance: '20px',
        scale: 1,
        easing: 'linear',
        viewFactor: 0.25
    }, 150);
    sr.reveal('.page-template-template_home .projects-grid .grid', {
        duration: 900,
        delay    : 200,
        distance : '90px',
        easing   : 'ease-in-out',
        rotate   : { z: 5 },
        viewFactor: 0.25,
        scale    : 1.1
    }, 150);
    sr.reveal('.page-template-template_home .services .feature', {
        duration: 900,
        delay: 50,
        origin: 'bottom',
        distance: '20px',
        scale: 1,
        easing: 'linear',
        viewFactor: 0.25
    }, 150);
    sr.reveal('.page-template-template_home .pts .pt', {
        duration: 900,
        delay    : 200,
        distance : '90px',
        easing   : 'ease-in-out',
        rotate   : { z: 5 },
        viewFactor: 0.25,
        scale    : 1.1
    }, 150);
    sr.reveal('.page-template-template_home .skills .skill', {
        duration: 900,
        delay: 50,
        origin: 'bottom',
        distance: '20px',
        scale: 1,
        easing: 'linear',
        viewFactor: 0.25
    }, 150);
    sr.reveal('.page-template-template_home .team .member', {
        duration: 900,
        delay    : 200,
        distance : '90px',
        easing   : 'ease-in-out',
        rotate   : { z: 5 },
        viewFactor: 0.25,
        scale    : 1.1
    }, 150);
    sr.reveal('.page-template-template_home .blog article', {
        duration: 900,
        delay: 50,
        origin: 'bottom',
        distance: '20px',
        scale: 1,
        easing: 'linear',
        viewFactor: 0.25
    }, 150);
</script>
<!-- Scroll Reveal END -->
<?php } ?>
</body>
</html>
