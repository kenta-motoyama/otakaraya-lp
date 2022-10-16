<?php
global $alt_add_word;
?>
<a id="<?php echo $layout['lp_layout_anc']; ?>"></a>

<section class="otkr-koukakaitori otkr-animation">
  <div class="box01 boxeffect"></div>
  <div class="box02 boxeffect"></div>
  <div class="box03 boxeffect"></div>
  <div class="box04 boxeffect"></div>

  <div class="otkr-under-inner fadein">
    <div class="otkr-ttl">
      <h2><?php the_field('welcome_title'); ?></h2>
      <p><?php the_field('welcome_sub'); ?></p>
      <!-- <h2>どんな状態でも高価買取</h2>
      <p>壊れていても、汚れていても、お任せください!</p> -->
    </div>

    <?php the_field('welcome_content'); ?>



    <?php if (get_field('welcome_is_cv')) { ?>
      <?php require get_template_directory() . '/include/parts/cv.php'; ?>
    <?php } ?>

  </div>
</section>

<div class="otkr-animation_line">
  <div class="lineanime"></div>
</div>