<?php 
/**
 * new WordPress Widget format
 * Wordpress 2.8 and above
 * @see http://codex.wordpress.org/Widgets_API#Developing_Widgets
 */
class Solarmove_Link_Widget extends WP_Widget {

    /**
     * Constructor
     *
     * @return void
     **/
    function __construct() {
        $widget_ops = array( 'classname' => 'wcp_image', 'description' => 'Add a link to the link section.' );
        parent::__construct( 'Solarmove_link', 'Solarmove - Link Widget', $widget_ops );
        
        // Setup default widget data
    		$this->defaults = array(
    			'link_title'  => 'Link Title',
    			'link_url'    => '#',
    		);
    }

    /**
     * Outputs the HTML for this widget.
     *
     * @param array  An array of standard parameters for widgets in this theme
     * @param array  An array of settings for this widget instance
     * @return void Echoes it's output
     **/
    function widget( $args, $instance ) {
       wp_reset_query();
       extract( $args, EXTR_SKIP );

       $link_title = apply_filters('widget_title', $instance['link_title']);
       $link_url = $instance['link_url'];

       echo $before_widget;
       echo '';
       if ($link_title) {
          echo '<a href="' . $link_url .'" class="btn">' . $link_title . '</a>';
       }
       echo '';
       echo $after_widget;
    }

    /**
     * Deals with the settings when they are saved by the admin. Here is
     * where any validation should be dealt with.
     *
     * @param array  An array of new settings as submitted by the admin
     * @param array  An array of the previous settings
     * @return array The validated and (if necessary) amended settings
     **/
    function update( $new_instance, $old_instance ) {
      	$instance = $old_instance;
  		  $instance['link_title'] = strip_tags($new_instance['link_title']);
  		  $instance['link_url'] = strip_tags($new_instance['link_url']);

        return $instance;
    }

    /**
     * Displays the form for this widget on the Widgets page of the WP Admin area.
     *
     * @param array  An array of the current settings for this widget
     * @return void Echoes it's output
     **/
    function form( $instance ) {
        $instance = wp_parse_args( (array) $instance, $this->defaults );
?>
	 <p>
        <label for="<?php echo $this->get_field_id('link_title'); ?>"><?php _e('Link Title', 'integral'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('link_title'); ?>" name="<?php echo $this->get_field_name('link_title'); ?>" type="text" value="<?php echo $instance['link_title']; ?>" />
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('link_url'); ?>"><?php _e('Link URL', 'integral'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('link_url'); ?>" name="<?php echo $this->get_field_name('link_url'); ?>" type="text" value="<?php echo $instance['link_url']; ?>" />
    </p>
<?php
    }
}
// End of Plugin Class

add_action( 'widgets_init', create_function( '', "register_widget( 'Solarmove_Link_Widget' );" ) );


?>