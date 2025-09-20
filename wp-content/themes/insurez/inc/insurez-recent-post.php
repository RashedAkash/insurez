<?php
class insurez_Recent_Post_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'insurez_recent_post_widget',
            __('insurez Recent Post', 'insurez'),
            array('description' => __('Display recent blog posts with thumbnail and date.', 'insurez'))
        );
    }

    public function widget($args, $instance) {
        $title = apply_filters('widget_title', $instance['title']);
        $order = $instance['order'] ?? 'DESC';
        $number = $instance['number'] ?? 3;

        echo $args['before_widget'];

        if (!empty($title)) {
            echo $args['before_title'] . esc_html($title) . $args['after_title'];
        }

        $recent_posts = new WP_Query(array(
            'post_type'           => 'post',
            'posts_per_page'      => $number,
            'orderby'             => 'date',
            'order'               => $order,
            'ignore_sticky_posts' => true,
        ));

        if ($recent_posts->have_posts()) :
            while ($recent_posts->have_posts()) : $recent_posts->the_post();
                ?>
                 <div class="rc__post d-flex align-items-center">
                              <div class="rc__post-thumb mr-20">
                                 <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
                                 <span> <i class="flaticon-right-arrows"></i></span>
                              </div>
                              <div class="rc__post-content">
                                 <div class="rc__meta">
                                    <span><i class="fal fa-comments"></i> <?php 
                                        comments_popup_link(
                                            __('No Comments', 'insurez'), 
                                            __('1 Comment', 'insurez'), 
                                            __('% Comments', 'insurez')
                                        ); 
                                    ?></span>
                                 </div>
                                 <h3 class="rc__post-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                 </h3>
                              </div>
                           </div>
                
                <?php
            endwhile;
            wp_reset_postdata();
        endif;

        echo $args['after_widget'];
    }

    public function form($instance) {
        $title = $instance['title'] ?? __('Recent Posts', 'insurez');
        $order = $instance['order'] ?? 'DESC';
        $number = $instance['number'] ?? 3;
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php _e('Title:', 'insurez'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text"
                   value="<?php echo esc_attr($title); ?>"/>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('order')); ?>"><?php _e('Order:', 'insurez'); ?></label>
            <select id="<?php echo esc_attr($this->get_field_id('order')); ?>"
                    name="<?php echo esc_attr($this->get_field_name('order')); ?>" class="widefat">
                <option value="DESC" <?php selected($order, 'DESC'); ?>><?php _e('Descending', 'insurez'); ?></option>
                <option value="ASC" <?php selected($order, 'ASC'); ?>><?php _e('Ascending', 'insurez'); ?></option>
            </select>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('number')); ?>"><?php _e('Number of posts:', 'insurez'); ?></label>
            <input class="tiny-text" id="<?php echo esc_attr($this->get_field_id('number')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('number')); ?>" type="number" step="1" min="1"
                   value="<?php echo esc_attr($number); ?>" size="3"/>
        </p>
        <?php
    }

    public function update($new_instance, $old_instance) {
        return array(
            'title'  => sanitize_text_field($new_instance['title']),
            'order'  => $new_instance['order'] === 'ASC' ? 'ASC' : 'DESC',
            'number' => absint($new_instance['number']),
        );
    }
}

// Register widget
function insurez_register_recent_post_widget() {
    register_widget('insurez_Recent_Post_Widget');
}
add_action('widgets_init', 'insurez_register_recent_post_widget');
