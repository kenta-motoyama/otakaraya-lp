<?php
/*
Template Name: LP Type 2　（金用）
*/
$pagetype = 2;
get_header();
?>



  <main class="otkr-content">
    <article class="otkr-wrap">

          <div class="otkr-kv" style="background-image: url(<?php the_field('mv_bg'); ?>);">
            <div class="otkr-cmn-inner">
              <img src="<?php the_field('mv'); ?>" alt="高価買取" class="otkr-pc">
              <img src="<?php the_field('mv_sp'); ?>" alt="高価買取" class="otkr-sp">
            </div>
          </div>
          <?php 
            $lp_layout = get_field('lp_layout');
            require get_template_directory() . '/include/campaign-banner.php';
            foreach ($lp_layout as $key => $layout) {
              require get_template_directory() . '/include/'.$layout['acf_fc_layout'].'.php';
            }
          ?>
          <?php //require get_template_directory() . '/include/koto.php'; ?>
          <?php //require get_template_directory() . '/include/latest.php'; ?>
          <?php //require get_template_directory() . '/include/comment.php'; ?>
          <?php //require get_template_directory() . '/include/koukakaitori.php'; ?>
          <?php //require get_template_directory() . '/include/media.php'; ?>
          <?php //require get_template_directory() . '/include/system.php'; ?>
          <?php //require get_template_directory() . '/include/document.php'; ?>
          <?php //require get_template_directory() . '/include/faq.php'; ?>
          <?php //require get_template_directory() . '/include/model.php'; ?>
    </article>
  </main>
  
  <!-- <div class="otkr-footerTel otkr-sp">
    <div class="otkr-footerTel--inner">
      <div class="otkr-footerTel--link">
        <p class="otkr-footerTel--speech">本日<span>000名</span>の方よりお電話頂いております。</p>
        <a href="tel:<?php the_field('common_tel_contact'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn_footer_tel.png" alt="電話で査定額を聞く" class=""></a>
      </div>
    </div>
  </div> -->

<?php get_footer(); ?>
