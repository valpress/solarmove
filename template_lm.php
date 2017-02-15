<?php
/*
Template Name: Solarmove (Legal)

 * Second Page Template for our theme
 *
 * @package WordPress
 * @subpackage Integral
 * @since Integral 1.0
 */
?>

<?php get_header(); ?>

<?php 

	$layout = $integral['gen-home-layout']['Enabled'];

		if ($layout): foreach ($layout as $key=>$value) {
		 get_template_part( 'sections/lm/'.$key);
	 
	}

	endif;
	
?>

<?php get_footer(); ?>