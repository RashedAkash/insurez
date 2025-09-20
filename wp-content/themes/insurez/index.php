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
                     <nav>
                        <ul>
                           <li>
                              <a href="blog-sidebar.html">1</a>
                           </li>
                           <li>
                              <span class="current">2</span>
                           </li>
                           <li>
                              <a href="blog-sidebar.html">3</a>
                           </li>
                           <li>
                              <a href="blog-sidebar.html">
                                 <i class="far fa-angle-right"></i>
                              </a>
                           </li>
                        </ul>
                     </nav>
                  </div>
               </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4">
               <div class="sidebar__wrapper">
                  <div class="sidebar__widget sidebar__widget-1 mb-40">
                     <div class="sidebar__widget-content">
                        <div class="sidebar__search">
                           <form action="#">
                              <div class="sidebar__search-input-2">
                                 <input type="text" placeholder="Search">
                                 <button type="submit"><i class="far fa-search"></i></button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
                  <div class="sidebar__widget sidebar__widget-2 mb-40">
                     <h3 class="sidebar__widget-title">Our latest post</h3>
                     <div class="sidebar__widget-content">
                        <div class="sidebar__post p-relative">
                           <div class="rc__post d-flex align-items-center">
                              <div class="rc__post-thumb mr-20">
                                 <a href="blog-details.html"><img src="assets/img/sideber/resent-post.png" alt=""></a>
                                 <span> <i class="flaticon-right-arrows"></i></span>
                              </div>
                              <div class="rc__post-content">
                                 <div class="rc__meta">
                                    <span><i class="fal fa-comments"></i> 02 Comments</span>
                                 </div>
                                 <h3 class="rc__post-title">
                                    <a href="blog-details.html">Designing human body
                                       interfaces</a>
                                 </h3>
                              </div>
                           </div>
                           <div class="rc__post d-flex align-items-center">
                              <div class="rc__post-thumb mr-20">
                                 <a href="blog-details.html"><img src="assets/img/sideber/resent-post3.png" alt=""></a>
                                 <span> <i class="flaticon-right-arrows"></i></span>
                              </div>
                              <div class="rc__post-content">
                                 <div class="rc__meta">
                                    <span><i class="fal fa-comments"></i> 02 Comments</span>
                                 </div>
                                 <h3 class="rc__post-title">
                                    <a href="blog-details.html">Designing human body
                                       interfaces</a>
                                 </h3>
                              </div>
                           </div>
                           <div class="rc__post d-flex align-items-center">
                              <div class="rc__post-thumb mr-20">
                                 <a href="blog-details.html"><img src="assets/img/sideber/resent-post2.png" alt=""></a>
                                 <span> <i class="flaticon-right-arrows"></i></span>
                              </div>
                              <div class="rc__post-content">
                                 <div class="rc__meta">
                                    <span><i class="fal fa-comments"></i> 02 Comments</span>
                                 </div>
                                 <h3 class="rc__post-title">
                                    <a href="blog-details.html">Designing human body
                                       interfaces</a>
                                 </h3>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="sidebar__widget sidebar__widget-3 mb-40">
                     <h3 class="sidebar__widget-title">Catagories</h3>
                     <div class="sidebar__widget-content">
                        <ul>
                           <li>
                              <a href="blog-details.html">Life imsurance <i class="flaticon-right-arrows"></i></a>
                           </li>
                           <li><a href="blog-details.html">Policies <i class="flaticon-right-arrows"></i></a></li>
                           <li><a href="blog-details.html">Marriage <i class="flaticon-right-arrows"></i></a></li>
                           <li><a href="blog-details.html"> Car insurance <i class="flaticon-right-arrows"></i></a></li>
                           <li><a href="blog-details.html"> Home insurance <i class="flaticon-right-arrows"></i></a></li>
                           <li><a href="blog-details.html"> Protection <i class="flaticon-right-arrows"></i></a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="sidebar__widget sidebar__widget-4 mb-40">
                     <h3 class="sidebar__widget-title">Our Tags</h3>
                     <div class="sidebar__widget-content">
                        <div class="tagcloud">
                           <a href="#">Insurance</a>
                           <a href="#">Policy</a>
                           <a href="#">Life insurance</a>
                           <a href="#">Protect</a>
                           <a href="#">Financial</a>
                           <a href="#">Money</a>
                           <a href="#">Life</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- postbox area end -->




	




<?php get_footer(); 