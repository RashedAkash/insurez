<?php


function header_call(){
    $call_text = get_theme_mod('header_call_text',__('Call Us Anytime','insurez'));
    $call_number = get_theme_mod('header_call_number',__('+98 656 768 6789','insurez'));
    ?>
     <div class="sm-clist__icon">
    <i class="flaticon-telephone"></i>
</div>
<div class="sm-clist__text text-start ml-15 mr-25">
    <span><?php echo esc_html($call_text); ?></span>
    <a href="tel:+78690989067"><?php echo esc_html($call_number); ?></a>
</div>

    <?php
}

//main menu
function insurez_main_menu(){
    wp_nav_menu(array(
        'theme_location' => 'main-menu',
        'container'     => '',
        'menu_class'    => '',
        'menu_id'    => '',
        'fallback_cb'   => 'Insurez_Walker_Nav_Menu::fallback',
        'walker'        => new Insurez_Walker_Nav_Menu,
    ));
}
// solub_navigation 
function solub_pagination(){
    $pages = paginate_links( array( 
        'type' => 'array',
        'prev_text'    => __('<i class="fal fa-long-arrow-left"></i>','harry'),
        'next_text'    => __('<i class="fal fa-long-arrow-right"></i>','harry'),
    ) );
        if( $pages ) {
        echo '<nav><ul>';
        foreach ( $pages as $page ) {
            echo "<li>$page</li>";
        }
        echo '</ul><nav>';
    }
}

//search form

function solub_blog_search_form( $form ) {
	$form = '<div class="tp-sidebar-search">
            <form action="' . home_url( '/' ) . '" method="get">
            <div class="tp-sidebar-search-input p-relative">
                <input type="text" name="s" value="' . get_search_query() . '" placeholder="' . esc_attr__( 'Enter your keywords...' ) . '">
                <button class="tp-sidebar-search-btn" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M9.55005 18.1001C14.2721 18.1001 18.1001 14.2721 18.1001 9.55005C18.1001 4.82799 14.2721 1 9.55005 1C4.82799 1 1 4.82799 1 9.55005C1 14.2721 4.82799 18.1001 9.55005 18.1001Z" stroke="#1F2220" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M18.9992 19L17.1992 17.2" stroke="#1F2220" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg></button>
            </div>
            </form>
        </div>';

	return $form;
}
add_filter( 'get_search_form', 'solub_blog_search_form' );

// exdos_tags
function solub_tags(){
	$post_tags = get_the_tags();
    if ($post_tags) {
        foreach ($post_tags as $tag) {
            ?>
            <a href="<?php echo get_tag_link($tag); ?>"><?php echo esc_html( $tag->name); ?></a>
            <?php
        }
    } else {
        ?>
        <i><?php echo esc_html__('No tags found','exdos'); ?></i>
        <?php
    }
}

/**
* Sanitize SVG markup for front-end display.
*
* @param  string $svg SVG markup to sanitize.
* @return string 	  Sanitized markup.
*/
function solub_kses( $html_tags = '' ) {
	$allowed_html = [
        'svg' => array(
            'class' => true,
            'aria-hidden' => true,
            'aria-labelledby' => true,
            'role' => true,
            'xmlns' => true,
            'width' => true,
            'height' => true,
            'viewbox' => true, // <= Must be lower case!
        ),
        'path'  => array( 
            'd' => true, 
            'fill' => true,  
            'stroke' => true,  
            'stroke-width' => true,  
            'stroke-linecap' => true,  
            'stroke-linejoin' => true,  
            'opacity' => true,  
        ),
		'a' => [
			'class'    => [],
			'href'    => [],
			'title'    => [],
			'target'    => [],
			'rel'    => [],
		],
         'b' => [],
         'blockquote'  =>  [
            'cite' => [],
         ],
         'cite'                      => [
            'title' => [],
         ],
         'code'                      => [],
         'del'                    => [
            'datetime'   => [],
            'title'      => [],
        ],
         'dd'                     => [],
         'div'                    => [
            'class'   => [],
            'title'   => [],
            'style'   => [],
         ],
         'dl'                     => [],
         'dt'                     => [],
         'em'                     => [],
         'h1'                     => [],
         'h2'                     => [],
         'h3'                     => [],
         'h4'                     => [],
         'h5'                     => [],
         'h6'                     => [],
         'i'                         => [
            'class' => [],
         ],
         'img'                    => [
            'alt'  => [],
            'class'   => [],
            'height' => [],
            'src'  => [],
            'width'   => [],
         ],
         'li'                     => array(
            'class' => array(),
         ),
         'ol'                     => array(
            'class' => array(),
         ),
         'p'                         => array(
            'class' => array(),
         ),
         'q'                         => array(
            'cite'    => array(),
            'title'   => array(),
         ),
         'span'                      => array(
            'class'   => array(),
            'title'   => array(),
            'style'   => array(),
         ),
         'iframe'                 => array(
            'width'         => array(),
            'height'     => array(),
            'scrolling'     => array(),
            'frameborder'   => array(),
            'allow'         => array(),
            'src'        => array(),
         ),
         'strike'                 => array(),
         'br'                     => array(),
         'strong'                 => array(),
	];

	return wp_kses( $html_tags, $allowed_html );
}


