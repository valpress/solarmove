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

	<?php if($integral['page-4-0-parallax-toggle']==1) { ?> $('#page-4-0').parallax("50%", 0.3); <?php } ?>
	
})	
</script>