   <?php $copyright =  get_theme_mod('footer_copyright_setting',__('© Copyright 2023, Insurez. All Rights Reserved','insurez')) ?>
   
   <!-- footer  area start -->
   <div class="footer__area" data-background="assets/img/footer/img.jpg">
      <div class="footer__top pt-120 pb-90">
         <div class="container">
            <div class="row">
               <div class="col-xxl-3 col-lg-6 col-md-6  col-sm-6">
                 <?php dynamic_sidebar('footer-widget-1'); ?>
               </div>
               <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-6">
                   <?php dynamic_sidebar('footer-widget-2'); ?>
               </div>
               <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-6">
                   <?php dynamic_sidebar('footer-widget-3'); ?>
               </div>
               <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-6">
                   <?php dynamic_sidebar('footer-widget-4'); ?>
               </div>
            </div>
         </div>
      </div>
      <div class="footer__bottom grey-bg-2 pt-25 pb-25">
         <div class="container">
            <div class="footer__bottom-inner">
               <div class="row">
                  <div class="col-xxl-12">
                     <?php if(!empty($copyright)): ?>
                     <div class="footer__copyright text-center">
                        <p><?php echo esc_html($copyright); ?></p>
                     </div>
                     <?php endif; ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- footer  area end -->

   <!-- JS here -->
 <?php wp_footer(); ?>
</body>

</html>