<?php
global $alt_add_word;
?>
<a id="<?php echo $layout['lp_layout_anc']; ?>"></a>
<?php
    $buy_point_option_use = get_field('buy_point_option_use','option');


    //共通の場合
    if($buy_point_option_use):

?>
<section class="otkr-buy-point otkr-animation">
  <div class="box01 boxeffect"></div>
  <div class="box02 boxeffect"></div>
  <div class="box03 boxeffect"></div>
  <div class="box04 boxeffect"></div>

  <div class="otkr-cmn-inner fadein">
    <div class="otkr-ttl">
      <h2><?php the_field('buy_point_title','option'); ?></h2>
      <p><?php the_field('buy_point_sub','option'); ?></p>
    </div>

    <?php if(have_rows('buy_point_detail','option')): ?>
    <div class="otkr-buy-point-wrap">
    <?php
    $n = 0;
    while(have_rows('buy_point_detail','option')): the_row();
    $n++;
    ?>
    <div class="block">
      <div class="num"><?php echo $n;?></div>
      <h4><?php the_sub_field('buy_point_detail_title','option'); ?></h4>
      <div class="detail">
        <div class="image"><img src="<?php the_sub_field('buy_point_detail_image','option'); ?>"></div>
        <div class="text"><?php the_sub_field('buy_point_detail_detail','option'); ?></div>
      </div>
    </div>
    <?php endwhile; ?>
    </div>
    <?php endif; ?>
  </div>

</section>

<?php else:
  
  //個別の場合
  ?>
  

  <section class="otkr-buy-point otkr-animation">
  <div class="box01 boxeffect"></div>
  <div class="box02 boxeffect"></div>
  <div class="box03 boxeffect"></div>
  <div class="box04 boxeffect"></div>

  <div class="otkr-cmn-inner fadein">
    <div class="otkr-ttl">
      <h2><?php the_field('buy_point_title'); ?></h2>
      <p><?php the_field('buy_point_sub'); ?></p>
    </div>

    <?php if(have_rows('buy_point_detail')): ?>
    <div class="otkr-buy-point-wrap">
    <?php
    $n = 0;
    while(have_rows('buy_point_detail')): the_row();
    $n++;
    ?>
    <div class="block">
      <div class="num"><?php echo $n;?></div>
      <h4><?php the_sub_field('buy_point_detail_title'); ?></h4>
      <div class="detail">
        <div class="image"><img src="<?php the_sub_field('buy_point_detail_image'); ?>"></div>
        <div class="text"><?php the_sub_field('buy_point_detail_detail'); ?></div>
      </div>
    </div>
    <?php endwhile; ?>
    </div>
    <?php endif; ?>
  </div>

</section>

  <?php endif; ?>
<div class="otkr-animation_line">
  <div class="lineanime"></div>
</div>