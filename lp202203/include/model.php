<?php
global $alt_add_word;
?>
<section class="otkr-model otkr-animation">
  <div class="box01 boxeffect"></div>
  <div class="box02 boxeffect"></div>
  <div class="box03 boxeffect"></div>
  <div class="box04 boxeffect"></div>

    <div class="otkr-ttl fadein">
    <h2><?php the_field('model_list_title'); ?></h2>
      <p><?php the_field('model_list_sub'); ?></p>
      <!-- <h2>買取強化モデル</h2>
      <p>現在、相場高騰中により買取強化中のモデルです</p> -->
    </div>
    <div class="otkr-cmn-inner fadein">
      <div class="table_bg--White">
          <table>
            <tbody>
              <tr>
                <th>商品画像</th>
                <th>商品名</th>
                <th>買取実績価格</th>
              </tr>
              <?php
                $list_num = get_field('list_num');
                
                $url = get_field('model_list');
                $json = file_get_contents($url);
                $arr = json_decode($json,true);
              ?>
              <?php foreach ($arr as $i => $value) {
                if($i <= $list_num):
                ?>
                <!-- <tr onclick="location.href='<?php echo $value['link'];?>'"> -->
                <tr>
                  <td class="table_img"><img src="<?php echo $value['imgPath'];?>" alt="<?php echo $alt_add_word;?>"></td>
                  <td class=""><?php echo $value['brandName'];?> <span><?php echo $value['name'];?></span></td>
                  <td class="table_text_red"><?php echo $value['price'];?><span>円</span></td>
                </tr>
              <?php
              endif;
              } ?>
              <!-- <tr>
                <td class="table_img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_clock.jpg" alt="<?php echo $alt_add_word;?>"></td>
                <td class="">sample sample sample sample <span>00000000</span></td>
                <td class="table_text_red">5,500,000<span>円</span></td>
              </tr>

              <tr>
                <td class="table_img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_clock.jpg" alt="<?php echo $alt_add_word;?>"></td>
                <td class="">sample sample sample sample <span>00000000</span></td>
                <td class="table_text_red">5,500,000<span>円</span></td>
              </tr> -->
            </tbody>
          </table>
          <div class="btn--more"><a>もっとみる</a></div>
      </div>
    </div>

</section>
