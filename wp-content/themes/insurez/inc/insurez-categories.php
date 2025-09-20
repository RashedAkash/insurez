<?php

// ==========================
// Custom Categories Widget
// ==========================
class Insurez_Categories_Widget extends WP_Widget {

    function __construct() {
        parent::__construct(
            'insurez_categories_widget',
            __('Insurez Categories', 'insurez'),
            array( 'description' => __( 'Custom Categories widget with icons.', 'insurez' ) )
        );
    }

    // Widget output
    public function widget( $args, $instance ) {
        echo $args['before_widget'];

        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        }

        echo '<div class="sidebar__widget-content"><ul>';

        $categories = get_categories( array(
            'orderby' => 'name',
            'order'   => 'ASC'
        ) );

        foreach ( $categories as $category ) {
            $cat_link = get_category_link( $category->term_id );
            echo '<li><a href="'. esc_url( $cat_link ) .'">'. esc_html( $category->name ) .' <i class="flaticon-right-arrows"></i></a></li>';
        }

        echo '</ul></div>';

        echo $args['after_widget'];
    }

    // Widget form in admin
    public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : __( 'Categories', 'insurez' );
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" 
                   name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" 
                   value="<?php echo esc_attr( $title ); ?>">
        </p>
        <?php
    }
}

// Register widget
function insurez_register_widgets() {
    register_widget( 'Insurez_Categories_Widget' );
}
add_action( 'widgets_init', 'insurez_register_widgets' );
