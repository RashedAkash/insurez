<?php get_header(); ?>
<?php insurez_breadcrumb(); ?>
<!-- error area start -->
   <div class="error-page__area pt-120 pb-120">
      <div class="container">
         <div class="row">
            <div class="col-xl-12">
               <div class="error-page__inner text-center pt-40 pb-40">
                  <div class="error-page__title-box">
                     <div class="error-page__title-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/error/error-main-img.png" alt="">
                     </div>
                  </div>
                  <h3 class="error-page__tagline"><?php echo esc_html__('Sorry We Cant Find That Page!'); ?> </h3>
                  <form class="error-page__form">
                     <div class="error-page__form-input">
                        <input type="search" placeholder="Search here">
                        <button type="submit"><i class="flaticon-search"></i></button>
                     </div>
                  </form>
                  <div class="tp-error-btn-box pt-5">
                     <a class="tp-btn" href="<?php echo home_url(); ?>"><?php echo esc_html__('BACK TO HOME'); ?></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- error area end -->



	




<?php get_footer(); 