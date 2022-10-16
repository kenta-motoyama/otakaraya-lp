<section class="otkr-cp_banner fadein">
  <div class="otkr-cmn-inner">
    <div class="otkr-ttl">
      <h2><?php the_field('price_highest_title'); ?></h2>
      <p><?php the_field('price_highest_title_sub'); ?></p>
    </div>
    <div class="banner">
        <img src="<?php echo get_field('price_highest_img')['url']; ?>" alt="<?php the_field('price_highest_img_text'); ?>" class="otkr-pc">
        <img src="<?php echo get_field('price_highest_img_sp')['url']; ?>" alt="<?php the_field('price_highest_img_text'); ?>" class="otkr-sp">
    </div>
  </div>
</section>
