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



<section class="otkr-comparison otkr-animation">
  
  <div class="box03 boxeffect"></div>
  <div class="box04 boxeffect"></div>

  <div class="otkr-cmn-inner fadein">

  <?php
  //image

  $_img = get_field('comparison_product_image');
  // echo '<pre>';
  // var_dump($_img);
  // echo '</pre>';
  
  ?>

  <div class="display-pc">
    <div class="otkr-comparison--block">
      <div class="otkr-comparison--image">
        <img src="<?php echo $_img;?>" alt="<?php echo $alt_add_word;?> <?php the_field('comparison_product_name'); ?>">
      </div>
      <div class="otkr-comparison--detail">
        <div class="otkr-comparison--title">買取比較例</div>
        <p class="product-name"><?php the_field('comparison_product_name'); ?></p>
        <div class="abprice-block">
          <div class="abprice-item abprice-a">
            <label>A社</label>
            <p class="price"><?php the_field('comparison_product_price_a'); ?>円</p>
          </div>
          <div class="abprice-item abprice-b">
            <label>B社</label>
            <p class="price"><?php the_field('comparison_product_price_b'); ?>円</p>
          </div>
        </div>

        <div class="midashi">他社圧倒の高価買取おたからやなら!</div>

        <p class="priceresult"><img src="/lp/cms/wp-content/themes/lp202203/assets/img/icon_kaitori.png" alt="<?php echo $alt_add_word;?> 買取実績" class="icon"><strong><?php the_field('comparison_product_price'); ?></strong><small>円</small></p>
      </div>
    </div>
  
  </div>


  <div class="display-sp">


    <div class="otkr-comparison--title">買取比較例</div>
    <div class="otkr-comparison--block">
      <div class="otkr-comparison--image">
        <img src="<?php echo $_img;?>" alt="<?php echo $alt_add_word;?> <?php the_field('comparison_product_name'); ?>">
      </div>
      <div class="otkr-comparison--detail">
        <p class="product-name"><?php the_field('comparison_product_name'); ?></p>
        <div class="abprice-block">
          <div class="abprice-item abprice-a">
            <label>A社</label>
            <p class="price"><?php the_field('comparison_product_price_a'); ?>円</p>
          </div>
          <div class="abprice-item abprice-b">
            <label>B社</label>
            <p class="price"><?php the_field('comparison_product_price_b'); ?>円</p>
          </div>
        </div>

      </div>
    </div>
    <div class="midashi">他社圧倒の高価買取おたからやなら!</div>
    <p class="priceresult"><img src="/lp/cms/wp-content/themes/lp202203/assets/img/icon_kaitori.png" alt="<?php echo $alt_add_word;?> 買取実績" class="icon"><strong><?php the_field('comparison_product_price'); ?></strong><small>円</small></p>


  </div>







  </div>

  <?php if(get_field('comparison_is_cv')){ ?>
    <?php require get_template_directory() . '/include/parts/cv.php'; ?>
  <?php } ?>

</section>

<div class="otkr-animation_line"><div class="lineanime"></div></div>

