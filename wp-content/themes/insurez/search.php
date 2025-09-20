<?php get_header(); ?>
<?php insurez_breadcrumb(); ?>
 <!-- postbox area start -->
   <section class="postbox__area pt-120 pb-90">
      <div class="container">
         <div class="row">
            <div class="col-xxl-8 col-xl-8 col-lg-8">
               <div class="postbox__wrapper pr-20">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'template_parts/content', get_post_format() ); ?>
                  
                   <?php endwhile; else : ?>
                 <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>
                 
                  <div class="basic-pagination">
                     <?php insurez_pagination(); ?>
                  </div>
               </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4">
               <?php get_sidebar(); ?>
            </div>
         </div>
      </div>
   </section>
   <!-- postbox area end -->




	




<?php get_footer(); 