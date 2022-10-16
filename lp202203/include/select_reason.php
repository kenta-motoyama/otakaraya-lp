<?php
global $alt_add_word;
?>
<a id="<?php echo $layout['lp_layout_anc']; ?>"></a>
<?php
    $select_reason_option_use = get_field('select_reason_option_use','option');


    //共通の場合
    if($select_reason_option_use):

?>
<section class="otkr-select-reason otkr-animation">
  <div class="box01 boxeffect"></div>
  <div class="box02 boxeffect"></div>
  <div class="box03 boxeffect"></div>
  <div class="box04 boxeffect"></div>

  <div class="otkr-cmn-inner fadein">
    <div class="otkr-ttl">
      <h2><?php the_field('select_reason_title','option'); ?></h2>
      <p><?php the_field('select_reason_sub','option'); ?></p>
    </div>
    <?php the_field('select_reason_lead','option'); ?>

    <?php if(have_rows('select_reason_detail','option')): ?>
    <div class="otkr-select-reason-wrap">
    <?php $n = 0;
    while(have_rows('select_reason_detail','option')): the_row();
    $n++;
    ?>
    <div class="otkr-accordion">
      <div class="accordion_header open"><span class="num"><?php echo $n;?></span><?php the_sub_field('select_reason_detail_title','option'); ?></div>
      <div class="accordion_inner" style="display:none;"><?php the_sub_field('select_reason_detail_detail','option'); ?></div>
    </div>
    <?php endwhile; ?>
    </div>
    <?php endif; ?>
  </div>

</section>

<?php else:
  
  //個別の場合
  ?>
  
  <section class="otkr-select-reason otkr-animation">
  <div class="box01 boxeffect"></div>
  <div class="box02 boxeffect"></div>
  <div class="box03 boxeffect"></div>
  <div class="box04 boxeffect"></div>

  <div class="otkr-cmn-inner fadein">
    <div class="otkr-ttl">
      <h2><?php the_field('select_reason_title'); ?></h2>
      <p><?php the_field('select_reason_sub'); ?></p>
    </div>
    <?php the_field('select_reason_lead'); ?>

    <?php if(have_rows('select_reason_detail')): ?>
    <div class="otkr-select-reason-wrap">
    <?php $n = 0;
    while(have_rows('select_reason_detail')): the_row();
    $n++;
    ?>
    <div class="otkr-accordion">
      <div class="accordion_header open"><span class="num"><?php echo $n;?></span><?php the_sub_field('select_reason_detail_title'); ?></div>
      <div class="accordion_inner" style="display:none;"><?php the_sub_field('select_reason_detail_detail'); ?></div>
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