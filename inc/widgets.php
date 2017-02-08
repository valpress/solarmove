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

    $layout = $integral['page-4-1-layout'];
	register_sidebar( array(
		'name' =>__( 'Page 4.1 Columns Section', 'integral'),
		'id' => 'page-4-1-column-widget',
		'description' => __( 'The column section which appears on page 4.1. Drag and drop widgets titled [Solarmove - Column Widget] here to add columns.', 'integral' ),
		'before_widget' => '<div class="col-sm-'.$layout.' col-md-'.$layout.' col-lg-'.$layout.' feature">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' =>__( 'Page 3.5 Table Section', 'integral'),
		'id' => 'page-3-5-table-widget',
		'description' => __( 'The table section which appears on page 3.5. Drag and drop widgets titled [Solarmove - Table Widget] here to add table rows.', 'integral' ),
		'before_widget' => '<tr>',
		'after_widget' => '</tr>',
	) ); 
    
    $team_layout = $integral['team-layout'];
    register_sidebar( array(
		'name' =>__( 'Team Section', 'integral'),
		'id' => 'team-widgets',
		'description' => __( 'The team section which appears on the homepage. Drag and drop widgets titled [Solarmove - Team Member Widget] here to add team members.', 'integral' ),
		'before_widget' => '<div class="col-sm-'.$team_layout.' col-md-'.$team_layout.' col-lg-'.$team_layout.' member">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="t-name">',
		'after_title' => '</h3>',
	) );

    $layout = $integral['values-layout'];
	register_sidebar( array(
		'name' =>__( 'Values Columns Section', 'integral'),
		'id' => 'values-column-widget',
		'description' => __( 'The column section which appears on the values page. Drag and drop widgets titled [Solarmove - Column Widget] here to add columns.', 'integral' ),
		'before_widget' => '<div class="col-sm-'.$layout.' col-md-'.$layout.' col-lg-'.$layout.' feature">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

    $layout = $integral['links-layout'];
	register_sidebar( array(
		'name' =>__( 'Link Section', 'integral'),
		'id' => 'link-widget',
		'description' => __( 'The link section which appears at the bottom. Drag and drop widgets titled [Solarmove - Link Widget] here to add links.', 'integral' ),
		'before_widget' => '<div class="col-sm-'.$layout.' col-md-'.$layout.' col-lg-'.$layout.'">',
		'after_widget' => '</div>',
	) );   
}

add_action( 'widgets_init', 'solarmove_widgets_init' );

/** Load Custom Widgets **/
require_once get_template_directory() . '/../solarmove/inc/widgets/column_widget.php';
require_once get_template_directory() . '/../solarmove/inc/widgets/link_widget.php';
require_once get_template_directory() . '/../solarmove/inc/widgets/our_team_widget.php';
require_once get_template_directory() . '/../solarmove/inc/widgets/table_widget.php';
