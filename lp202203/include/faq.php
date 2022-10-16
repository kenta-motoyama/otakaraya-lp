<?php
global $alt_add_word;
?>
<a id="<?php echo $layout['lp_layout_anc']; ?>"></a>

<section class="otkr-faq otkr-animation">
  <div class="box01 boxeffect"></div>
  <div class="box02 boxeffect"></div>
  <div class="box03 boxeffect"></div>
  <div class="box04 boxeffect"></div>

  <div class="otkr-cmn-inner fadein">
    <div class="otkr-ttl">
      <h2><?php the_field('faqs_title'); ?></h2>
      <p><?php the_field('faqs_sub'); ?></p>
      <!-- <h2>よくある質問</h2>
          <p>時計買取をご依頼のお客様からよくある質問をまとめました</p> -->
    </div>

    <?php $faqs = get_field('faqs'); ?>
    <?php if (count($faqs) > 0) { ?>
      <?php foreach ($faqs as $key => $value) { ?>
        <div class="otkr-accordion">
          <div class="accordion_header"><span class="icon--faq">Q</span><?php echo $value['faqs_q']; ?></div>
          <div class="accordion_inner">
            <p><?php echo $value['faqs_a']; ?></p>
          </div>
        </div>
      <?php } ?>
    <?php } ?>

  </div>

  <?php if (get_field('faq_is_cv')) { ?>
    <?php require get_template_directory() . '/include/parts/cv.php'; ?>
  <?php } ?>


</section>


<div class="otkr-animation_line">
  <div class="lineanime"></div>
</div>