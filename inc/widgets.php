<?php
/**
 * Declaring widgets
 */

/** Register Sidebars and Custom Widget Areas **/
function solarmove_widgets_init() {
    
    global $integral;

	register_sidebar( array(
		'name' => __( 'Right Sidebar', 'integral' ),
		'id' => 'rightbar',
		'description' => __( 'Widgets in this area will be shown in the right sidebar.', 'integral' )
    ) );

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

	register_sidebar( array(
		'name' =>__( 'Page 5.1 Table Section', 'integral'),
		'id' => 'page-5-1-table-widget',
		'description' => __( 'The table section which appears on page 5.1. Drag and drop widgets titled [Solarmove - Table Widget] here to add table rows.', 'integral' ),
		'before_widget' => '<tr>',
		'after_widget' => '</tr>',
	) );
    
    $layout = $integral['team-layout'];
    register_sidebar( array(
		'name' =>__( 'Team Section', 'integral'),
		'id' => 'team-widgets',
		'description' => __( 'The team section which appears on the homepage. Drag and drop widgets titled [Solarmove - Team Member Widget] here to add team members.', 'integral' ),
		'before_widget' => '<div class="col-sm-'.$layout.' col-md-'.$layout.' col-lg-'.$layout.' member">',
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
    
    $layout = $integral['sh-grid-layout'];
    register_sidebar( array(
		'name' =>__( 'Stakeholder Section', 'integral'),
		'id' => 'sh-grid-widget',
		'description' => __( 'The stakeholder section which appears on the homepage. Drag and drop widgets titled [Solarmove - Stakeholder Widget] here to add stakeholders.', 'integral' ),
		'before_widget' => '<div class="col-sm-'.$layout.' col-md-'.$layout.' col-lg-'.$layout.' grid">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
    
    $layout = $integral['part-grid-layout'];
    register_sidebar( array(
		'name' =>__( 'Partner Section', 'integral'),
		'id' => 'part-grid-widget',
		'description' => __( 'The partner section which appears on the homepage. Drag and drop widgets titled [Solarmove - Stakeholder Widget] here to add partners.', 'integral' ),
		'before_widget' => '<div class="col-sm-'.$layout.' col-md-'.$layout.' col-lg-'.$layout.' grid">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
    
    $layout = $integral['proj-grid-layout'];
    register_sidebar( array(
		'name' =>__( 'Projects Section', 'integral'),
		'id' => 'proj-grid-widget',
		'description' => __( 'The projects section which appears on the homepage. Drag and drop widgets titled [Solarmove - Stakeholder Widget] here to add projects.', 'integral' ),
		'before_widget' => '<div class="col-sm-'.$layout.' col-md-'.$layout.' col-lg-'.$layout.' grid">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
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
require_once get_template_directory() . '/../solarmove/inc/widgets/stakeholder_widget.php';
require_once get_template_directory() . '/../solarmove/inc/widgets/table_widget.php';
