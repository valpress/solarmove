<?php 
/**
 * new WordPress Widget format
 * Wordpress 2.8 and above
 * @see http://codex.wordpress.org/Widgets_API#Developing_Widgets
 */
class Solarmove_Table_Widget extends WP_Widget {

    /**
     * Constructor
     *
     * @return void
     **/
    function __construct() {
        $widget_ops = array( 'classname' => 'wcp_image', 'description' => 'Add a table row to the table section.' );
        parent::__construct( 'Solarmove_table', 'Solarmove - Table Widget', $widget_ops );
        
        // Setup default widget data
        $this->defaults = array(
          'column_1_text'    => 'Column 1 text',
          'column_2_text'    => 'Column 2 text',
          'column_3_text'    => 'Column 3 text',
          'column_4_text'    => 'Column 4 text',
          'column_5_text'    => 'Column 5 text',
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

       $column_1_text = apply_filters('widget_title', $instance['column_1_text']);
       $column_2_text = apply_filters('widget_title', $instance['column_2_text']);
       $column_3_text = apply_filters('widget_title', $instance['column_3_text']);
       $column_4_text = apply_filters('widget_title', $instance['column_4_text']);
       $column_5_text = apply_filters('widget_title', $instance['column_5_text']);

       echo $before_widget;
       echo '';
       $this->format(-1, $column_1_text);
       $this->format(0, $column_2_text);
       $this->format(1, $column_3_text);
       $this->format(2, $column_4_text);
       $this->format(3, $column_5_text);
       echo '';
       echo $after_widget;
    }

    function format($index, $text) {
      if ($text) {

        $class = '';

        if ($index == -1)
          $class = '';
        elseif ($index == 0)
          $class = 'class="col-' . $index . ' active"';
        else
          $class = 'class="col-' . $index . '"';

        if ($text == 'yes') {
          echo '<td ' . $class . '><i class="fa fa-green fa-check-circle" aria-hidden="true"></i></td>';
        } else if ($text == 'no') {
          echo '<td ' . $class . '><i class="fa fa-red fa-times-circle" aria-hidden="true"></i></td>';
        } else {
          echo '<td ' . $class . '>' . $text . '</td>';
        }
      }
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
        $instance['column_1_text'] = strip_tags($new_instance['column_1_text']);
        $instance['column_2_text'] = strip_tags($new_instance['column_2_text']);
        $instance['column_3_text'] = strip_tags($new_instance['column_3_text']);
        $instance['column_4_text'] = strip_tags($new_instance['column_4_text']);
        $instance['column_5_text'] = strip_tags($new_instance['column_5_text']);

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
        <label for="<?php echo $this->get_field_id('column_1_text'); ?>"><?php _e('Column 1 text', 'integral'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('column_1_text'); ?>" name="<?php echo $this->get_field_name('column_1_text'); ?>" type="text" value="<?php echo $instance['column_1_text']; ?>" />
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('column_2_text'); ?>"><?php _e('Column 2 text', 'integral'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('column_2_text'); ?>" name="<?php echo $this->get_field_name('column_2_text'); ?>" type="text" value="<?php echo $instance['column_2_text']; ?>" />
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('column_3_text'); ?>"><?php _e('Column 3 text', 'integral'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('column_3_text'); ?>" name="<?php echo $this->get_field_name('column_3_text'); ?>" type="text" value="<?php echo $instance['column_3_text']; ?>" />
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('column_4_text'); ?>"><?php _e('Column 4 text', 'integral'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('column_4_text'); ?>" name="<?php echo $this->get_field_name('column_4_text'); ?>" type="text" value="<?php echo $instance['column_4_text']; ?>" />
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('column_5_text'); ?>"><?php _e('Column 5 text', 'integral'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('column_5_text'); ?>" name="<?php echo $this->get_field_name('column_5_text'); ?>" type="text" value="<?php echo $instance['column_5_text']; ?>" />
    </p>
<?php
    }
}
// End of Plugin Class

add_action( 'widgets_init', create_function( '', "register_widget( 'Solarmove_Table_Widget' );" ) );


?>