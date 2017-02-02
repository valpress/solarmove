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

	<?php if($integral['page-1-0-parallax-toggle']==1) { ?> $('#page-1-0').parallax("50%", 0.3); <?php } ?>
	<?php if($integral['page-1-1-parallax-toggle']==1) { ?> $('#page-1-1').parallax("50%", 0.3); <?php } ?>
	<?php if($integral['page-1-2-parallax-toggle']==1) { ?> $('#page-1-2').parallax("50%", 0.3); <?php } ?>

})	
</script>