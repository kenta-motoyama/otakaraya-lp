<?php
global $alt_add_word;
global $pagetype;
?>

<a id="<?php echo $layout['lp_layout_anc']; ?>"></a>
<section class="otkr-latest" data-type="<?php echo $pagetype;?>">

  <div class="otkr-animation pb-0">
    <div class="box01 boxeffect"></div>
    <div class="box02 boxeffect"></div>

    <div class="otkr-ttl fadein">
      <h2><?php the_field('latest_list_title'); ?></h2>
      <p><?php the_field('latest_list_sub'); ?></p>
      <!-- <h2>最新の買取実績</h2>
      <p>コストは最少、査定額は最大限</p> -->
    </div>
  </div>




  <?php
  //image
  //時計、金、ダイヤ、プラチナ
if($pagetype == 1 || $pagetype == 2 || $pagetype == 3 || $pagetype == 5):
  $_comparison_img = get_field('comparison_product_image');
  if($_comparison_img):
  // echo '<pre>';
  // var_dump($_img);
  // echo '</pre>';
  
  ?>
  <div class="otkr-comparison">
    <div class="otkr-cmn-inner">
      <div class="display-pc">
        <div class="otkr-comparison--block">
          <div class="otkr-comparison--image">
            <img src="<?php echo $_comparison_img;?>" alt="<?php echo $alt_add_word;?> <?php the_field('comparison_product_name'); ?>">
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
            <img src="<?php echo $_comparison_img;?>" alt="<?php echo $alt_add_word;?> <?php the_field('comparison_product_name'); ?>">
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


      <?php
      if($pagetype == 1):
      $telnumber = get_field('common_tel_contact');
      ?>
      <div class="otkr-comparison--banner">
        <a href="tel:<?php echo $telnumber;?>" class="btn btn-souba">電話でリアルタイム買取相場を調べる</a>
      </div>
      <?php endif;?>
    </div>
  </div>

  <?php endif;endif;?>























  <?php
  $url = get_field('latest_list');



  // echo '<pre>';
  // var_dump($arr);
  // echo '</pre>';

  // var_dump($slider_num);
  // var_dump($list_num);
  if ($url) :

    $json = file_get_contents($url);
    $arr = json_decode($json, true);

    $slider_num = get_field('slider_num');
  ?>

    <ul class="otkr-slick--list fadein">


      <?php foreach ($arr as $i => $value) { ?>
        <?php if ($i < $slider_num) { ?>
          <li class="otkr-slick--listItem">
            <!-- <a href="<?php echo $value['link']; ?>"> -->
            <div class="cont">
              <div class="img"><img src="<?php echo $value['imgPath']; ?>" alt="<?php echo $alt_add_word;?> "></div>
              <div class="text">
                <p class="cate"><span>買取事例<?php echo ($i + 1); ?></span></p>
                <p class="name"><?php echo $value['brandName']; ?><span><?php echo $value['name']; ?></span></p>
                <div class="purchase">
                  <p><?php echo $value['price']; ?><span>円</span></p>
                </div>
              </div>
              <!-- </a> -->
            </div>
          </li>
        <?php } ?>
      <?php } ?>
    </ul>

    <?php else :
    if (get_field('latest_list_type') == 'manual') :
    ?>

      <?php if (have_rows('latest_list_manual_group')) : ?>
        <ul class="otkr-slick--list fadein">
          <?php $j = 0;
          while (have_rows('latest_list_manual_group')) : the_row(); ?>


            <li class="otkr-slick--listItem">
              <div class="cont">
                <div class="img"><img src="<?php the_sub_field('image'); ?>" alt="<?php echo $alt_add_word;?> "></div>
                <div class="text">
                  <p class="cate"><span>買取事例<?php echo ($j + 1); ?></span></p>
                  <p class="name"><?php the_sub_field('brand-name'); ?><span><?php the_sub_field('product-name'); ?></span></p>
                  <div class="purchase">
                    <p><?php the_sub_field('price'); ?><span>円</span></p>
                  </div>
                </div>
              </div>
            </li>


          <?php $j++;
          endwhile; ?>
        </ul>
      <?php endif; ?>




  <?php
    endif;
  endif;
  ?>



  <?php
  $model_url = get_field('latest_model_list');



  // var_dump($model_url);


  if ($model_url) :

    $model_json = file_get_contents($model_url);
    $model_arr = json_decode($model_json, true);

    $latest_model_num = get_field('latest_model_num');

    // var_dump($latest_model_num);

  ?>


    <div class="otkr-animation pb-4 pt-0">
      <div class="box03 boxeffect"></div>
      <div class="box04 boxeffect"></div>

      <div class="otkr-cmn-inner fadein">
        <p class="mt-5 mb-5"><?php the_field('latest_model_list_lead'); ?></p>



        <div class="latest_model_list3">

        <?php for($i=$slider_num; $i<count($model_arr); $i++):?>


        <?php //foreach ($model_arr as $i => $value) { ?>
          <?php //echo $i;
          if ($i <= $latest_model_num) { ?>
          <div class="latest_model_list3--item">
            <div class="img"><img src="<?php echo $model_arr[$i]['imgPath']; ?>" alt="<?php echo $alt_add_word;?> "></div>
            <div class="name"><?php echo $model_arr[$i]['brandName']; ?> <span><?php echo $model_arr[$i]['name']; ?></span></div>
            <div class="purchase"><p><?php echo $model_arr[$i]['price']; ?><span>円</span></p></div>
          </div>
          <?php } ?>
        <?php //}
        endfor;
        ?>
          <div class="blank"></div>
          <div class="blank"></div>
        </div>


          <div class="btn--more2"><a>もっとみる</a></div>
        </div>


      </div>


      <?php else :
      if (get_field('latest_model_list_type') == 'manual') :
      ?>


        <?php if (have_rows('latest_model_list_manual_group')) : ?>


          <div class="otkr-animation pb-4 pt-0">
            <div class="box03 boxeffect"></div>
            <div class="box04 boxeffect"></div>

            <div class="otkr-cmn-inner fadein">
              <p class="mt-5 mb-5"><?php the_field('latest_model_list_lead'); ?></p>


              <div class="latest_model_list3">
                <?php while (have_rows('latest_model_list_manual_group')) : the_row(); ?>
                <div class="latest_model_list3--item">
                  <div class="img"><img src="<?php the_sub_field('image'); ?>" alt="<?php echo $alt_add_word;?> "></div>
                  <div class="name"><?php the_sub_field('brand-name'); ?> <span><?php the_sub_field('product-name'); ?></span></div>
                  <div class="purchase"><p><?php the_sub_field('price'); ?><span>円</span></p></div>
                </div>
                <?php endwhile; ?>
                <div class="blank"></div>
                <div class="blank"></div>
              </div>




              <div class="btn--more2"><a>もっとみる</a></div>


            </div>
          <?php endif; ?>
























      <?php endif;

    endif; ?>



















      <a id="<?php echo $layout['lp_layout_anc2']; ?>"></a>




      <div class="otkr-under-inner mt100 fadein">
        <div class="otkr-ttl">

          <h2><?php the_field('latest_list_up_title'); ?></h2>
          <p><?php the_field('latest_list_up_sub'); ?></p>

          <!-- <h2>2点以上で10%up!</h2>
        <p>おまとめ査定で買取金額をさらにUP</p> -->
        </div>

        <?php the_field('latest_up'); ?>

      </div>

      <?php if (get_field('latest_is_cv')) { ?>
        <?php require get_template_directory() . '/include/parts/cv.php'; ?>
      <?php } ?>



          </div>
</section>

<div class="otkr-animation_line">
  <div class="lineanime"></div>
</div>