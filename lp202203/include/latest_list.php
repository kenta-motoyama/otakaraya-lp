<?php
global $alt_add_word;
?>
<a id="<?php echo $layout['lp_layout_anc']; ?>"></a>
<section class="otkr-latest">
    
  <div class="otkr-animation pb-0">
    <div class="box01 boxeffect"></div>
    <div class="box02 boxeffect"></div>
  
    <div class="otkr-ttl fadein">
      <h2>買取強化モデル</h2>
      <p>現在相場高騰中により買取強化モデルです</p>
    </div>
  </div>



<?php
  $url = get_field('latest_list');
  $json = file_get_contents($url);
  $arr = json_decode($json,true);

  $slider_num = get_field('slider_num');
  $list_num = get_field('list_num');


  // var_dump($slider_num);
  // var_dump($list_num);
?>
  
  <ul class="otkr-slick--list fadein">


    <?php foreach ($arr as $i => $value) { ?>
    <?php if($i < $slider_num) { ?>
      <li class="otkr-slick--listItem">
        <!-- <a href="<?php echo $value['link'];?>"> -->
        <div class="cont">
          <div class="img"><img src="<?php echo $value['imgPath'];?>" alt="<?php echo $alt_add_word;?> "></div>
          <div class="text">
            <p class="cate"><span>買取事例<?php echo ($i+1);?></span></p>
            <p class="name"><?php echo $value['name'];?><span><?php echo $value['model_number'];?></span></p>
            <div class="purchase"><p><?php echo $value['price'];?><span>円</span></p></div>
          </div>
        <!-- </a> -->
        </div>
      </li>
    <?php } ?>
    <?php } ?>
<!-- 
    <li class="otkr-slick--listItem">
      <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_clock.jpg" alt="<?php echo $alt_add_word;?> "></div>
      <div class="text">
        <p class="cate">買取事例1</p>
        <p class="name">ロレックスデイトナ アイスブルー <span>116506A</span></p>
        <div class="purchase"><p>19,000,000<span>円</span></p></div>
      </div>
    </li>
    <li class="otkr-slick--listItem">
      <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_clock.jpg" alt="<?php echo $alt_add_word;?> "></div>
      <div class="text">
        <p class="cate">買取事例1</p>
        <p class="name">ロレックスデイトナ アイスブルー <span>116506A</span></p>
        <div class="purchase"><p>19,000,000<span>円</span></p></div>
      </div>
    </li>
    <li class="otkr-slick--listItem">
      <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_clock.jpg" alt="<?php echo $alt_add_word;?> "></div>
      <div class="text">
        <p class="cate">買取事例1</p>
        <p class="name">ロレックスデイトナ アイスブルー <span>116506A</span></p>
        <div class="purchase"><p>19,000,000<span>円</span></p></div>
      </div>
    </li>
    <li class="otkr-slick--listItem">
      <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_clock.jpg" alt="<?php echo $alt_add_word;?> "></div>
      <div class="text">
        <p class="cate">買取事例1</p>
        <p class="name">ロレックスデイトナ アイスブルー <span>116506A</span></p>
        <div class="purchase"><p>19,000,000<span>円</span></p></div>
      </div>
    </li> -->
  </ul>
  <div class="otkr-animation pb-4 pt-0">
          <div class="box03 boxeffect"></div>
          <div class="box04 boxeffect"></div>
        
            <div class="otkr-cmn-inner fadein">
              <p class="mt-5 mb-5">メンテナンスや運営を自社で行うことでコストを最小限に抑え、お客様へ最大限の査定額で還元できるよう、買取業40年の歴史の中で培ってきました。だから「おたからや」では、お客様に自信をもって、売却をおすすめすることができるのです。</p>
              <div class="table_bg--White">
                  <table>
                    <tbody>
                      <tr>
                        <th>商品画像</th>
                        <th>商品名</th>
                        <th>買取実績価格</th>
                      </tr>
                      <?php foreach ($arr as $i => $value) { ?>
                      <?php //echo $i;
                      if($i >= $slider_num && $i < $list_num) { ?>
                        <tr>
                          <td class="table_img"><img src="<?php echo $value['imgPath'];?>" alt="<?php echo $alt_add_word;?> "></td>
                          <td class=""><?php echo $value['name'];?> <span><?php echo $value['model_number'];?></span></td>
                          <td class="table_text_red"><?php echo $value['price'];?><span>円</span></td>
                        </tr>
                      <?php } ?>
                      <?php } ?>
                      <!-- <tr>
                        <td class="table_img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_clock.jpg" alt="<?php echo $alt_add_word;?> "></td>
                        <td class="">sample sample sample sample <span>00000000</span></td>
                        <td class="table_text_red">5,500,000<span>円</span></td>
                      </tr>-->
                    </tbody>
                  </table>
                  <div class="btn--more"><a>もっとみる</a></div>
              </div>


            </div>
            
            <a id="<?php echo $layout['lp_layout_anc2']; ?>"></a>

            <div class="otkr-under-inner mt100 fadein">
              <div class="otkr-ttl">
                <h2>2点以上で10%up!</h2>
                <p>おまとめ査定で買取金額をさらにUP</p>
              </div>
              
              <?php the_field('latest_up'); ?>

            </div>

        <?php if(get_field('latest_is_cv')){ ?>
          <?php require get_template_directory() . '/include/parts/cv.php'; ?>
        <?php } ?>


      </div>
</section>

<div class="otkr-animation_line"><div class="lineanime"></div></div>