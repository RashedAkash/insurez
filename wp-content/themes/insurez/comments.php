<?php if ( comments_open() ) : ?>
<div id="comments" class="contact-form-box mb-50">

    <?php if ( have_comments() ) : ?>
        <div class="postbox-comment mb-60">
            <div class="tp-postbox-comments">
                <h3 class="postbox__comment-title">
                    <?php
                    $comment_count = get_comments_number();
                    echo esc_html( $comment_count ) . ' ' . _n( 'Comment', 'Comments', $comment_count, 'exdos' );
                    ?>
                </h3>

                <ul class="postbox__comment mb-65">
                    <?php
                    wp_list_comments( array(
                        'style'      => 'ul',
                        'short_ping' => true,
                        'callback'   => 'custom_comment_list'
                    ) );
                    ?>
                </ul>
            </div>
        </div>

        <?php
        // pagination if needed
        the_comments_pagination( array(
            'prev_text' => esc_html__( 'Previous', 'exdos' ),
            'next_text' => esc_html__( 'Next', 'exdos' ),
        ) );
        ?>
    <?php endif; ?>

    <!-- Comment Form -->
    <div class="postbox__comment-form">
        <h3 class="postbox__comment-form-title"><?php esc_html_e( 'Leave your comment', 'exdos' ); ?></h3>
        <?php
        $commenter = wp_get_current_commenter();
        $req       = get_option( 'require_name_email' );
        $aria_req  = ( $req ? " aria-required='true'" : '' );

        $fields = array(
            'author' => '<div class="row"><div class="col-xxl-6 col-xl-6 col-lg-6">
                    <div class="postbox__comment-input">
                        <input id="author" name="author" type="text" placeholder="' . esc_attr__( 'Your Name', 'exdos' ) . '" value="' . esc_attr( $commenter['comment_author'] ) . '"' . $aria_req . ' />
                    </div>
                </div>',
            'email'  => '<div class="col-xxl-6 col-xl-6 col-lg-6">
                    <div class="postbox__comment-input">
                        <input id="email" name="email" type="email" placeholder="' . esc_attr__( 'Email address', 'exdos' ) . '" value="' . esc_attr( $commenter['comment_author_email'] ) . '"' . $aria_req . ' />
                    </div>
                </div></div>',
        );

        $defaults = array(
            'fields'        => $fields,
            'comment_field' => '<div class="row"><div class="col-xxl-12">
                    <div class="postbox__comment-input">
                        <textarea id="comment" name="comment" placeholder="' . esc_attr__( 'Write your comment', 'exdos' ) . '" required></textarea>
                    </div>
                </div></div>',
            'submit_button' => '<div class="row"><div class="col-xxl-12">
                    <div class="postbox__comment-btn">
                        <button type="submit" class="tp-btn">' . esc_html__( 'SUBMIT COMMENT', 'exdos' ) . '</button>
                    </div>
                </div></div>',
            'comment_notes_after' => '',
        );

        comment_form( $defaults );
        ?>
    </div>

</div>
<?php endif; ?>


<?php
// Custom comment layout callback
function custom_comment_list( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;
    ?>
    <li <?php comment_class( 'postbox__comment-list' ); ?> id="comment-<?php comment_ID(); ?>">

        <div class="postbox__comment-box d-flex p-relative">
            <div class="postbox__comment-avater mr-40">
                <?php echo get_avatar( $comment, 70 ); ?>
            </div>
            <div class="postbox__comment-text">
                <div class="postbox__comment-name">
                    <h5><?php comment_author(); ?></h5>
                    <span class="post-meta"><?php comment_date(); ?> at <?php comment_time(); ?></span>
                </div>
                <p><?php comment_text(); ?></p>
                <div class="postbox__comment-reply">
                    <?php
                    comment_reply_link( array_merge( $args, array(
                        'reply_text' => esc_html__( 'Reply', 'exdos' ),
                        'depth'      => $depth,
                        'max_depth'  => $args['max_depth'],
                    ) ) );
                    ?>
                </div>
            </div>
        </div>
    </li>
    <?php
}
?>
