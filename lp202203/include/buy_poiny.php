<a id="<?php echo $layout['lp_layout_anc']; ?>"></a>

<section class="otkr-select-reason otkr-animation">
  <div class="box01 boxeffect"></div>
  <div class="box02 boxeffect"></div>
  <div class="box03 boxeffect"></div>
  <div class="box04 boxeffect"></div>

  <div class="otkr-cmn-inner--l fadein">
    <div class="otkr-ttl">
      <h2><?php the_field('select_reason_title'); ?></h2>
      <p><?php the_field('select_reason_sub'); ?></p>
      <!-- <h2>売却時に必要なもの</h2>
          <p>買取に必要なものは、本人確認書類だけ</p> -->
    </div>
    <?php the_field('select_reason_lead'); ?>
  </div>

</section>

<div class="otkr-animation_line">
  <div class="lineanime"></div>
</div>