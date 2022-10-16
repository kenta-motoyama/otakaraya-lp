<?php
global $alt_add_word;
?>
<a id="<?php echo $layout['lp_layout_anc']; ?>"></a>

<section class="otkr-media otkr-animation">
  <div class="box01 boxeffect"></div>
  <div class="box02 boxeffect"></div>
  <div class="box03 boxeffect"></div>
  <div class="box04 boxeffect"></div>

  <div class="otkr-cmn-inner fadein">
    <div class="otkr-ttl">
      <h2><?php the_field('media_title'); ?></h2>
      <p><?php the_field('media_sub'); ?></p>
      <!-- <h2>メディア情報多数</h2>
      <p>「おたからや」は様々なTVで取材されています!</p> -->
    </div>
    <?php the_field('media_content'); ?>
  </div>

  <?php if (get_field('media_is_cv')) { ?>
    <?php require get_template_directory() . '/include/parts/cv.php'; ?>
  <?php } ?>

</section>
<div class="otkr-animation_line">
  <div class="lineanime"></div>
</div>