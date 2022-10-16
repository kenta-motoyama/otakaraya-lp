<?php
global $alt_add_word;
?>
<a id="<?php echo $layout['lp_layout_anc']; ?>"></a>

<section class="otkr-cp_banner fadein">
  <div class="otkr-cmn-inner">
    <div class="otkr-ttl">
      <h2><?php the_field('price_highest_title'); ?></h2>
      <p><?php the_field('price_highest_title_sub'); ?></p>
    </div>
    <div class="banner">
        <img src="<?php echo get_field('price_highest_img')['url']; ?>" alt="<?php echo $alt_add_word;?> <?php the_field('price_highest_img_text'); ?>" class="otkr-pc">
        <img src="<?php echo get_field('price_highest_img_sp')['url']; ?>" alt="<?php echo $alt_add_word;?> <?php the_field('price_highest_img_text'); ?>" class="otkr-sp">
    </div>
  </div>
</section>



<section class="otkr-soaring otkr-animation">
  
  <div class="box03 boxeffect"></div>
  <div class="box04 boxeffect"></div>

  <div class="otkr-cmn-inner fadein">
    <div class="otkr-ttl">
      <p class="mb-3"><?php the_field('price_rising_title_sub'); ?></p>
      <h2><?php the_field('price_rising_title'); ?></h2>
    </div>
    <div class="table_bg--gray">
        <table>
          <tbody>
            <tr>
              <th>商品名</th>
              <th><?php the_field('price_rising_items_price_before_date'); ?></th>
              <th><?php the_field('price_rising_items_price_after_date'); ?></th>
            </tr>
            <?php $price_rising_items = get_field('price_rising_items'); ?>
            <?php if(count($price_rising_items) > 0 ){ ?>
                <?php foreach ($price_rising_items as $key => $value) { ?>
                    <tr>
                      <td><strong><?php echo $value['price_rising_items_name']; ?></strong><span><?php echo $value['price_rising_items_name_detail']; ?></span></td>
                      <td class="text-right"><?php echo $value['price_rising_items_price_before']; ?>円</td>
                      <td class="text-right table_text_red"><?php echo $value['price_rising_items_price_after']; ?>円</td>
                    </tr>
                <?php } ?>
            <?php } ?>
          </tbody>
        </table>
        <p class="text-right otkr-font-10">※上記は参考価格であり、品物の状態や時期により買取価格は変動します</p>
    </div>
  </div>

  <?php if(get_field('price_rising_is_cv')){ ?>
    <?php require get_template_directory() . '/include/parts/cv.php'; ?>
  <?php } ?>

</section>

<div class="otkr-animation_line"><div class="lineanime"></div></div>

