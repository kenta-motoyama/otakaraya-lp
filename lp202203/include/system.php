<?php
global $alt_add_word;
?>
<a id="<?php echo $layout['lp_layout_anc']; ?>"></a>

<section class="otkr-system otkr-animation">
  <div class="box01 boxeffect"></div>
  <div class="box02 boxeffect"></div>
  <div class="box03 boxeffect"></div>
  <div class="box04 boxeffect"></div>

  <div class="otkr-cmn-inner--l fadein">
    <div class="otkr-ttl">
      <h2><?php the_field('system_title'); ?></h2>
      <p><?php the_field('system_sub'); ?></p>
      <!-- <h2>万全の体制</h2>
        <p>お客様ひとりひとりにあった万全の体制でご利用をお待ちしております</p> -->
    </div>

    <div class="otkr-system--inner">
      <?php the_field('system_content'); ?>
    </div>

  </div>

</section>

<div class="otkr-animation_line">
  <div class="lineanime"></div>
</div>