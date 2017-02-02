<?php
/**
 * Custom Javsscript for our theme
 *
 * @package WordPress
 * @subpackage Integral
 * @since Integral 1.0
 */
?>
<?php global $integral; ?>
<script type="text/javascript">
jQuery(document).ready(function($){

	<?php if($integral['page-3-0-parallax-toggle']==1) { ?> $('#page-3-0').parallax("50%", 0.3); <?php } ?>
	<?php if($integral['page-3-1-parallax-toggle']==1) { ?> $('#page-3-1').parallax("50%", 0.3); <?php } ?>
	<?php if($integral['page-3-4-parallax-toggle']==1) { ?> $('#page-3-4').parallax("50%", 0.3); <?php } ?>
	<?php if($integral['page-3-5-parallax-toggle']==1) { ?> $('#page-3-5').parallax("50%", 0.3); <?php } ?>

})	
</script>