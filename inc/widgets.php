<?php
/**
 * Declaring widgets
 */

/** Register Sidebars and Custom Widget Areas **/
function solarmove_widgets_init() {
    
    global $integral;

    $layout = $integral['page-2-1-layout'];
    register_sidebar( array(
		'name' =>__( 'Page 2.1 Columns Section', 'integral'),
		'id' => 'page-2-1-column-widget',
		'description' => __( 'The column section which appears on page 2.1. Drag and drop widgets titled [Solarmove - Column Widget] here to add columns.', 'integral' ),
		'before_widget' => '<div class="col-sm-'.$layout.' col-md-'.$layout.' col-lg-'.$layout.' feature">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) ); 

    $layout = $integral['page-2-2-layout'];
	register_sidebar( array(
		'name' =>__( 'Page 2.2 Columns Section', 'integral'),
		'id' => 'page-2-2-column-widget',
		'description' => __( 'The column section which appears on page 2.2. Drag and drop widgets titled [Solarmove - Column Widget] here to add columns.', 'integral' ),
		'before_widget' => '<div class="col-sm-'.$layout.' col-md-'.$layout.' col-lg-'.$layout.' feature">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

    $layout = $integral['page-3-2-layout'];
	register_sidebar( array(
		'name' =>__( 'Page 3.2 Columns Section', 'integral'),
		'id' => 'page-3-2-column-widget',
		'description' => __( 'The column section which appears on page 3.2. Drag and drop widgets titled [Solarmove - Column Widget] here to add columns.', 'integral' ),
		'before_widget' => '<div class="col-sm-'.$layout.' col-md-'.$layout.' col-lg-'.$layout.' feature">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

    $layout = $integral['page-3-3-layout'];
	register_sidebar( array(
		'name' =>__( 'Page 3.3 Columns Section', 'integral'),
		'id' => 'page-3-3-column-widget',
		'description' => __( 'The column section which appears on page 3.3. Drag and drop widgets titled [Solarmove - Column Widget] here to add columns.', 'integral' ),
		'before_widget' => '<div class="col-sm-'.$layout.' col-md-'.$layout.' col-lg-'.$layout.' feature">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );
    
}

add_action( 'widgets_init', 'solarmove_widgets_init' );

/** Load Custom Widgets **/
require_once get_template_directory() . '/../solarmove/inc/widgets/column_widget.php';