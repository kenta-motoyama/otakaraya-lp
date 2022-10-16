<?php
global $alt_add_word;
?>
<a id="<?php echo $layout['lp_layout_anc']; ?>"></a>

<section class="otkr-another-lp otkr-animation">
  <div class="box01 boxeffect"></div>
  <div class="box02 boxeffect"></div>
  <div class="box03 boxeffect"></div>
  <div class="box04 boxeffect"></div>

  <div class="otkr-cmn-inner fadein">
    <div class="otkr-ttl">
      <h2><?php the_field('another_lp_title'); ?></h2>
      <p><?php the_field('another_lp_sub'); ?></p>
    </div>
    <?php if(have_rows('another_lp_detail')): ?>
    <div class="otkr-another-lp-wrap">
    <?php while(have_rows('another_lp_detail')): the_row(); ?>
    <div class="block">
      <figure>
        <a href="<?php the_sub_field('another_lp_detail_url'); ?>">


          <?php 
          if(is_array(get_sub_field('another_lp_detail_image'))):
          ?>
          <img src="<?php echo get_sub_field('another_lp_detail_image')['url']; ?>">
          <?php
          else:
          ?>
          <img src="<?php the_sub_field('another_lp_detail_image'); ?>">
          <?php
          endif;
          ?>

          <figcaption><?php the_sub_field('another_lp_detail_title'); ?></figcaption>
        </a>
      </figure>
    </div>
    

    <?php endwhile; ?>
    </div>
    <?php endif; ?>
  </div>

</section>

<div class="otkr-animation_line">
  <div class="lineanime"></div>
</div>