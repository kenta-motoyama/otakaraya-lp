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
      <h2><?php the_field('koukakaitori_title'); ?></h2>
      <p><?php the_field('koukakaitori_sub'); ?></p>
      <!-- <h2>どんな状態でも高価買取</h2>
      <p>壊れていても、汚れていても、お任せください!</p> -->
    </div>

    <?php the_field('koukakaitori_content'); ?>

    <?php if(have_rows('koukakaitori_sample')): ?>
      <ul class="row otkr-koukakaitori-count<?php echo count(get_field('koukakaitori_sample')); ?>">
      <?php while(have_rows('koukakaitori_sample')): the_row(); ?>

        <li>
          <figure><img src="<?php the_sub_field('koukakaitori_sample_img'); ?>" alt="<?php echo $alt_add_word;?> <?php the_sub_field('koukakaitori_sample_caption'); ?>"><figcaption><?php echo nl2br(get_sub_field('koukakaitori_sample_caption')); ?></figcaption></figure>
        </li>
      <?php endwhile; ?>
      </ul>
    <?php endif; ?>



    </div>
</section>

<div class="otkr-animation_line">
  <div class="lineanime"></div>
</div>