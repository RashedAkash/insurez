<?php get_header(); ?>
<?php insurez_breadcrumb(); ?>


<!-- postbox area start -->
   <section class="postbox__area pt-120 pb-90">
      <div class="container">
         <div class="row">
            <div class="col-xxl-8 col-xl-8 col-lg-8">
               <div class="postbox__wrapper">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'template_parts/content', get_post_format() ); ?>
                  
                   <?php endwhile; else : ?>
                 <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>
                   <div class="postbox__blog-banner mt-60 mb-60">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="postbox__banner-img p-relative">
                <a href="<?php the_permalink(); ?>"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog-banner.png" alt="">
                <h3 class="blog-banner-title"><?php the_title(); ?></h3></a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="postbox__banner-img-yellow p-relative">
                <a href="<?php the_permalink(); ?>">   <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog-banner.png" alt="">
                    <h3 class="blog-banner-title-black"><?php the_title(); ?></h3></a>
                </div>
            </div>
        </div>
    </div>
    <div class="postbox__wrapper pr-20">
      <?php if ( comments_open() || get_comments_number() ) :
                            comments_template();
        endif; ?>
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