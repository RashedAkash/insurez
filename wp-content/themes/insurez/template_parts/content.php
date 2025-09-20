<?php if(is_single()): ?>
<article class="postbox__item format-image mb-50 transition-3">
    <div class="postbox__thumb m-img p-relative">
        <?php the_post_thumbnail(); ?>
        <span><?php echo get_the_date( 'd M' ); ?></span>
    </div>
    <div class="postbox__content">
    <div class="postbox__meta">
       <span>
      <i class="far fa-user"></i>
   <?php the_author(); ?>
   </span>

   <span>
      <i class="fal fa-comments"></i>
      <?php 
         comments_popup_link(
            __('No Comments', 'insurez'), 
            __('1 Comment', 'insurez'), 
            __('% Comments', 'insurez')
         ); 
      ?>
   </span>
    </div>
    <h3 class="postbox__title">
        <?php the_title(); ?>
    </h3>
    <div class="postbox__text">
        <?php the_content(); ?>
    </div>
    <div class="postbox__tagcloud mt-50">
        <div class="postbox__tag tagcloud">
            <h5><?php echo esc_html__('Our Tags') ?></h5>
            <?php insurez_tags(); ?>
        </div>
        <div class="postbox__social">
            <div class="icon">
                <ul>
                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
   
    </div>
</article>
<?php else : ?>
<article id="post-<?php the_ID(); ?>" <?php post_class('postbox__item format-image mb-30 transition-3'); ?> >
    <div class="postbox__thumb m-img p-relative">
    <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail(); ?>
        <span><?php echo get_the_date( 'd M' ); ?></span>
    </a>
    </div>
    <div class="postbox__content">
   <div class="postbox__meta">
   <span>
      <i class="far fa-user"></i>
   <?php the_author(); ?>
   </span>

   <span>
      <i class="fal fa-comments"></i>
      <?php 
         comments_popup_link(
            __('No Comments', 'insurez'), 
            __('1 Comment', 'insurez'), 
            __('% Comments', 'insurez')
         ); 
      ?>
   </span>
</div>

    <h3 class="postbox__title">
        <?php the_title(); ?>
    </h3>
    <div class="postbox__text">
        <?php the_excerpt(); ?>
    </div>
    </div>
    <div class="blog-btn mt-30">
    <a class="tp-btn" href="<?php the_permalink(); ?>"><?php echo esc_html__('Read More') ?></a>
    </div>
</article>
<?php endif; ?>