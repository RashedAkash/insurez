<?php 

function insurez_breadcrumb(){ 
    
    global $post;

   if ( is_front_page() && is_home() ) {
      $title = __('Blog','exdos');
   }
   elseif ( is_front_page() ) {
         $title =  __('Blog','exdos');
   }
   elseif ( is_home() ) {
      if ( get_option( 'page_for_posts' ) ) {
         $title = get_the_title( get_option( 'page_for_posts') );
      }
   }

   elseif ( is_single() && 'post' == get_post_type() ) {
      $title = get_the_title();
   } 
   elseif ( is_single() && 'service' == get_post_type() ) {
      $title = get_the_title();
   } 
   elseif ( is_single() && 'product' == get_post_type() ) {
         $title = get_theme_mod( 'breadcrumb_product_details', __( 'Shop', 'exdos' ) );
   } 
   elseif ( is_search() ) {
         $title = esc_html__( 'Search Results for : ', 'exdos' ) . get_search_query();
   } 
   elseif ( is_404() ) {
         $title = esc_html__( '404 Page not Found', 'exdos' );
   } 
   elseif ( is_archive() ) {
         $title = get_the_archive_title();
   } 
   else {
         $title = get_the_title();
   }
    
    
    
    
    
    
    ?>

  <!-- beadcrumb area start -->
 <div class="wrapper-box p-relative ">
      <div class="breadcrumb__bg breadcrumb__bg__overlay pt-130 pb-130 "
         data-background="<?php echo get_template_directory_uri();?>/assets/img/breadcrumb/breadcrumb-bg-1.jpg">
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="breadcrumb__content p-relative z-index-1 text-center">
                     <div class="breadcrumb__list mb-10">
                         <?php bcn_display(); ?> 
                        <!-- <span><a href="index.html">INSUREZ </a></span>
                        <span class="dvdr"> / </span>
                        <span class="sub-page-black">Blog Sidebar</span> -->
                     </div>
                     <h3 class="breadcrumb__title mb-20">Blog Sidebar</h3>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>


    
    <!-- beadcrumb area end -->  

<?php    
}