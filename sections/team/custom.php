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

	<?php if($integral['team-hero-parallax-toggle']==1) { ?> $('#team-hero').parallax("50%", 0.3); <?php } ?>
	<?php if($integral['mission-parallax-toggle']==1) { ?> $('#mission').parallax("50%", 0.3); <?php } ?>
	
})	
</script>