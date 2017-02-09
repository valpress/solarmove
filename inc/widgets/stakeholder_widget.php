<?php 
/**
 * new WordPress Widget format
 * Wordpress 2.8 and above
 * @see http://codex.wordpress.org/Widgets_API#Developing_Widgets
 */
class Solarmove_Stakeholder_Widget extends WP_Widget {

    /**
     * Constructor
     *
     * @return void
     **/
    function __construct() {
        $widget_ops = array( 'classname' => 'wcp_image', 'description' => 'Add a stakeholder to the homepage stakeholders section.' );
        parent::__construct( 'Solarmove_stakeholder', 'Solarmove - Stakeholder Widget', $widget_ops );
    }

    /**
     * Outputs the HTML for this widget.
     *
     * @param array  An array of standard parameters for widgets in this theme
     * @param array  An array of settings for this widget instance
     * @return void Echoes it's output
     **/
    function widget( $args, $instance ) {
        extract( $args, EXTR_SKIP );

       // these are the widget options
       $title = apply_filters('widget_title', $instance['title']);
       $image_url = $instance['image_url'];
       $textarea = apply_filters( 'widget_textarea', empty( $instance['textarea'] ) ? '' : $instance['textarea'], $instance );
       echo $before_widget;
       // Display the widget
       echo '';

       if( $image_url) {
          echo '<a href="'.$image_url.'" rel="prettyPhoto" title="'.$title.'" class="fancybox-thumb hovereffect">';
          echo '<img src="'.$image_url.'" alt="'.$title.'" class="img-responsive center-block"><span></span></a>';
       }
        
       // Check if title is set
       if ( $title ) {
          echo $before_title . $title . $after_title;
       }

       // Check if textarea is set
       if( $textarea ) { echo '<p>' . wpautop($textarea) . '</p>'; }
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

        // update logic goes here
    	$instance = $old_instance;
          // Fields
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['image_url'] = strip_tags($new_instance['image_url']);
		if ( current_user_can('unfiltered_html') )
			$instance['textarea'] =  $new_instance['textarea'];
		else $instance['textarea'] = stripslashes( wp_filter_post_kses( addslashes($new_instance['textarea']) ) );

        return $instance;
    }

    /**
     * Displays the form for this widget on the Widgets page of the WP Admin area.
     *
     * @param array  An array of the current settings for this widget
     * @return void Echoes it's output
     **/
    function form( $instance ) {
        extract($instance);

?>
	<p>
        <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Stakeholder Title', 'integral'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('image_url'); ?>"><?php _e('Stakeholder Image', 'integral'); ?></label>
        <input id="<?php echo $this->get_field_id('image_url'); ?>" type="text" class="image-url" name="<?php echo $this->get_field_name('image_url'); ?>" value="<?php if (isset($image_url)) echo esc_attr($image_url); ?>" style="width: 100%;" />
        <input data-title="Image in Widget" data-btntext="Select it" class="button upload_image_button" type="button" value="<?php _e('Upload','integral') ?>" />
        <input data-title="Image in Widget" data-btntext="Select it" class="button clear_image_button" type="button" value="<?php _e('Clear','integral') ?>" />
	</p>
	<p class="img-prev">
		<?php if (isset($image_url) && $image_url) { echo '<img src="'.$image_url.'" style="max-width: 100%;">';} ?>
	</p>
    <p>
        <label for="<?php echo $this->get_field_id('textarea'); ?>"><?php _e('Stakeholder Description', 'integral'); ?></label>
        <textarea class="widefat" rows="5" id="<?php echo $this->get_field_id('textarea'); ?>" name="<?php echo $this->get_field_name('textarea'); ?>"><?php echo $textarea; ?></textarea>
        <small><?php _e('No limit on the amount of text and HTML is allowed.', 'integral'); ?></small>
    </p>
<?php
    }
}
// End of Plugin Class

add_action( 'widgets_init', create_function( '', "register_widget( 'Solarmove_Stakeholder_Widget' );" ) );

?>