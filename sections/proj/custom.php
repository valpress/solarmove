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

	<?php if($integral['proj-hero-parallax-toggle']==1) { ?> $('#proj-hero').parallax("50%", 0.3); <?php } ?>
	
})	
</script>