 <?php $welcome = get_theme_mod('topbar_welcome_setting',__('Welcome to our Insurez company','insurez')); ?>
 <?php $location = get_theme_mod('topbar_location_setting',__('66 Broklyne Golden Street, USA','insurez')); ?>
 <?php $mail = get_theme_mod('topbar_mail_setting',__('needhelp@company.com','insurez')); ?>
 <?php $logo_link = get_theme_mod('logo_link',__('#','insurez')); ?>
 <?php
  $logo = get_theme_mod( 
    'logo_setting_url', 
    get_template_directory_uri() . '/assets/img/logo/logo.png' 
);  ?>

<?php $Quate_btn = get_theme_mod('header-btn',__('Get a Quote','insurez')) ?>
<?php $Quate_btn_url = get_theme_mod('header-btn-url',__('#','insurez')) ?>
 <!-- header area start -->
   <header class="main-header d-none d-lg-block">
      <div class="tp-header">
         <div id="header-sticky" class="tp-header__wrapper-inner">

            <?php if(!empty ($logo_link )): ?>
            <div class="tp-header__logo grey-bg-2">
               <a href="<?php echo esc_url($logo_link); ?>"><img src="<?php echo esc_url($logo); ?>" alt=""></a>
            </div>
            <?php endif; ?>

            <div class="tp-header__main-header">
               <div class="tp-header__top grey-bg-1">
                <?php if(!empty ($welcome)): ?>
                  <div class="tp-header__top-left text-left">
                     <p class="tp-header-top-left-text"><?php echo esc_html($welcome); ?></p>
                  </div>
                  <?php endif; ?>

                  <div class="tp-header__top-right text-end">
                    <?php if(!empty ($location)): ?>
                     <div class="tp-location mr-30">
                        <a href="https://www.google.com/maps/place/Maricopa,+AZ,+USA/@33.0435146,-112.0317544,13z/data=!3m1!4b1!4m5!3m4!1s0x872ae52ea99557e3:0x702c0500cea3bb0!8m2!3d33.0581063!4d-112.0476423"
                           target="_blank"> <i class="fa-sharp fa-solid fa-location-dot"></i> <?php echo esc_html($location); ?></a>
                     </div>
                      <?php endif; ?>

                     <?php if(!empty ($mail)): ?>
                     <div class="envelope">
                        <a href="mailto:needhelp@company.com"><i class="fa-solid fa-envelope"></i>
                           <?php echo esc_html($mail); ?></a>
                     </div>
                      <?php endif; ?>


                  </div>
               </div>
               <div class="tp-main-menu">
                  <div class="tp-header__bottom d-flex align-items-center justify-content-between">
                     <div class="main-menu">
                        <div class="tp-header__wrapper-inner">
                           <div class="tp-header__menu text-center ">
                              <nav id="mobile-menu">
                                 <?php insurez_main_menu(); ?>
                              </nav>
                           </div>
                        </div>
                     </div>
                     <div class="tp-header__right-box d-flex justify-content-end align-items-center">
                        <div class="tp-header__right d-flex align-items-center">
                           
                           <div class="tp-header-search search-open-btn">
                              <a href="javascript:void(0);"> <i class="fa-regular fa-magnifying-glass"></i></a>
                           </div>
                        
                           

                           <div class="tp-header__contact-number">
                             <?php header_call();?>
                           </div>
                           <div class="tp-header-btn">
                              <a class="tp-btn" href="<?php echo esc_url($Quate_btn_url); ?>"><?php echo esc_html($Quate_btn); ?></a>
                           </div>
                        </div>
                        <div class="sidebar__menu">
                           <a class="tp-menu-bar text-black" href="#"><i class="fa-solid fa-bars"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <div class="mobile-header d-lg-none ">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-6">
               <div class="mobile__logo">
                  <a href="index.html"><img src="assets/img/logo/logo-black.png" alt=""></a>
               </div>
            </div>
            <div class="col-6">
               <div class="mobile__menu text-end">
                  <a class="tp-menu-bar" href="javascript:void(0)"><i class="fa-solid fa-bars"></i></a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- header area end -->