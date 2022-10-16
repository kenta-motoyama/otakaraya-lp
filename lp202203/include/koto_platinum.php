<?php
global $alt_add_word;

$price_highest_gap_use = get_field('price_highest_gap_use','option');

?>
<a id="<?php echo $layout['lp_layout_anc']; ?>"></a>





<section class="otkr-koto_gold otkr-animation">


<div class="box01 boxeffect"></div>
  <div class="box02 boxeffect"></div>

  <div class="box03 boxeffect"></div>
  <div class="box04 boxeffect"></div>

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


    <div id="price" v-cloak>

      <div class="otkr-cmn-inner">

        <p class="mt-1 mb-5"><?php the_field('price_highest_lead'); ?></p>

        <div class="otkr-ttl">
          <h2>金・貴金属<br class="display-sp">参考買取価格相場</h2>
          <p>{{price_date | ad_format}}{{price_hhmm}}更新</p>
        </div>


        <!-- 金レート・プラチナレート -->
        <div id="ratebox">
          <table class="ratebox table-pc">
            <thead>
              <tr>
                <th class="bg_gold">金</th>
                <th class="bg_platinum">プラチナ</th>
                <th class="bg_palladium">バラジウム</th>
                <th class="bg_silver">銀</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="price">{{au_ingod_price}}円</td>
                <td class="price">{{pt_ingod_price}}円</td>
                <td class="price">{{pd_ingod_price}}円</td>
                <td class="price">{{ag_ingod_price}}円</td>
              </tr>
              <?php if ($price_highest_gap_use) : ?>
              <tr>
                <td class="gap">{{au_ingod_diff | diff_format}}円</td>
                <td class="gap">{{pt_ingod_diff | diff_format}}円</td>
                <td class="gap">{{pd_ingod_diff | diff_format}}円</td>
                <td class="gap">{{ag_ingod_diff | diff_format}}円</td>
              </tr>
              <?php endif;?>
            </tbody>
          </table>
          <table class="ratebox table-sp" v-cloak>
              <tr>
                <th class="bg_gold" width="30%">金</th>
                <td class="price" width="40%">{{au_ingod_price}}円</td>
                <?php if ($price_highest_gap_use) : ?>
                <td class="gap" width="30%">{{au_ingod_diff | diff_format}}円</td>
                <?php endif;?>
              </tr>
              <tr>
                <th class="bg_platinum">プラチナ</th>
                <td class="price">{{pt_ingod_price}}円</td>
                <?php if ($price_highest_gap_use) : ?>
                <td class="gap">{{pd_ingod_diff | diff_format}}円</td>
                <?php endif;?>
              </tr>
              <tr>
                <th class="bg_palladium">バラジウム</th>
                <td class="price">{{pd_ingod_price}}円</td>
                <?php if ($price_highest_gap_use) : ?>
                <td class="gap">{{pt_ingod_diff | diff_format}}円</td>
                <?php endif;?>
              </tr>
              <tr>
                <th class="bg_silver">銀</th>
                <td class="price">{{ag_ingod_diff | diff_format}}円</td>
                <?php if ($price_highest_gap_use) : ?>
                <td class="gap">{{ag_ingod_price}}円</td>
                <?php endif;?>
              </tr>
          </table>


        </div>
      </div>
      <div class="campaign"><?php the_field('price_highest_campaign'); ?></div>


      <!-- 貴金属種別レート表 -->
      <div class="otkr-cmn-inner">


        <div id="ratetable" v-cloak>
          <!-- <h2 class="mincho sitecolor" style="margin-bottom: 0;">貴金属種別レート表・相場表は？</h2> -->
          <div class="rate-tables" id="soba_sp_more">
            <div class="rate-table-col col1">

            
              <table class="rate-table table_gold">
                <tbody>
                  <tr>
                    <th>Pt1000</td>
                    <td>{{pt_scrap[0].price}}円</td>
                    
                  </tr>
                  <tr>
                    <th>Pt950</th>
                    <td>{{pt_scrap[1].price}}円</td>
                    
                  </tr>
                </tbody>


              </table>
            </div>
            <div class="rate-table-col col2">
              <table class="rate-table table_gold">
                <tbody>
                  <tr>
                    <th>Pt900</th>
                    <td>{{pt_scrap[2].price}}円</td>
                    
                  </tr>
                  <tr>
                    <th>Pt850</th>
                    <td>{{pt_scrap[3].price}}円</td>
                    
                  </tr>
                </tbody>


              </table>


            </div>

            <div class="display-sp soba_btn">
            <a id="soba_more_btn" class="soba_more"><img src="/lp/cms/wp-content/themes/lp202203/assets/img/btn_gold_soba_more.png" alt="<?php echo $alt_add_word;?> 相場をもっと詳しくみる！"></a>
            <a id="soba_close_btn" class="soba_close" style="display:none;"><img src="/lp/cms/wp-content/themes/lp202203/assets/img/btn_gold_soba_close.png" alt="<?php echo $alt_add_word;?> 閉じる"></a>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- トータル査定 -->
    <section class="otkr-totalsatei">

      <div class="otkr-ttl">
        <h2><?php the_field('totalsatei_title');?></h2>
        <p><?php the_field('totalsatei_title_sub');?></p>
      </div>
      <div class="otkr-detail">
      <div class="__display-pc">
    <div class="otkr-totalsatei--block">
      <div class="otkr-totalsatei--image">
        <img src="<?php the_field('totalsatei_img_pc');?>" class="display-pc" alt="<?php echo $alt_add_word;?> ">
        <img src="<?php the_field('totalsatei_img_sp');?>" class="display-sp" alt="<?php echo $alt_add_word;?> ">
      </div>
      <div class="otkr-totalsatei--detail">
        <div class="otkr-totalsatei--board">
          <div class="otkr-totalsatei--boardItem">
            <?php
            $total_pricelist = get_field('totalsatei_price');
            // var_dump($total_pricelist);

            $total = 0;
            foreach($total_pricelist as $p):
              $dlclass = "";
              if($p['product_price_red']){
                $dlclass = "red";
              }
            ?>
            <dl class="<?php echo $dlclass;?>">
              <dt><?php echo $p['product_name'];?></dt>
              <dd><?php echo number_format($p['product_price']);?>円</dd>
            </dl>
            <?php
            $total += $p['product_price'];
            endforeach;
            ?>

            <!-- <dl>
              <dt>ルビー</dt>
              <dd>10,000円</dd>
            </dl>
            <dl>
              <dt>ダイヤモンド</dt>
              <dd>35,000円</dd>
            </dl>
            <dl>
              <dt>デザイン性</dt>
              <dd>8,000円</dd>
            </dl> -->
          </div>
          <div class="otkr-totalsatei--boardTotal">
            <p>合計<strong><?php echo number_format($total);?>円</strong></p>
          </div>
        </div>
        <div class="abprice-block">
          <div class="abprice-item abprice-a">
            <label>A社</label>
            <p class="price"><?php echo number_format(get_field('totalsatei_price_a'));?>円</p>
          </div>
          <div class="abprice-item abprice-b">
            <label>B社</label>
            <p class="price"><?php echo number_format(get_field('totalsatei_price_b'));?>円</p>
          </div>
        </div>

      </div>
    </div>
  
  </div>


  <div class="display-sp">



  </div>
      </div>


    </section>








    <!-- <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script> -->

    <script src="https://www.otakaraya.jp/js/vue.min.js"></script>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="/rate_files/japanese-holidays.min.js"></script>
    <script src="/rate_files/price_load_ex.js?s3"></script>
    <script>
      //crossdomainのphpファイルのアップ先URL
      const crossdomain_file = "https://www.otakaraya.jp/rate_files/crossdomain.php";
      //データを反映したいDOM要素のID
      const dom_id = ["#price"];
      // const dom_id = "#price";
      Vue.use(PriceLoad, {
        _file: crossdomain_file,
        _dom: dom_id
      });
    </script>


    <script>
      function priceset() {
        // 読み込み時にselect二種類追加
        var pt900 = jQuery('#pt900').text();
        var pt850 = jQuery('#pt850').text();
        pt900 = pt900.replace(/,/g, '');
        pt850 = pt850.replace(/,/g, '');
        pt900 = pt900 / 2;
        pt850 = pt850 / 2;
        jQuery('#simulation_select').append(jQuery('<option>').html('Pt900/K18 半々').val(pt900));
        jQuery('#simulation_select').append(jQuery('<option>').html('Pt850/K18 半々').val(pt850));
      }
      window.onload = priceset;
      document.addEventListener('DOMContentLoaded', function() {



        var select_state = document.getElementById("simulation_select");
        jQuery(document).on('change', '#simulation_select', function() {
          var text = jQuery('option:selected').val();
          multi();
        });
        jQuery(document).on('change', '#weight', function() {
          var text = jQuery(this).val();
          multi()
        });

        function multi() {
          var text = jQuery('#simulation_select option:selected').val();
          var removed = text.replace(/,/g, '');
          var num = parseInt(removed, 10);
          var weight = jQuery("#weight").val();
          if (num) {
            if (weight) {


              var answer_cp = num * weight + <?php the_field('price_highest_upprice');?> * weight;
              answer_cp = Math.round(answer_cp);
              answer_cp = answer_cp.toLocaleString();

              console.log(answer_cp);
              jQuery('#answer_cp').text(answer_cp);


              var answer = num * weight;
              answer = Math.round(answer);
              answer = answer.toLocaleString();

              console.log(answer);

              jQuery('#answer').val(answer);

            }
          }
        }
        jQuery(function() {
          jQuery(document).on('mouseup keyup', '#weight', function(e) {
            var month = parseInt(jQuery(this).val());
            var monthMax = parseInt(jQuery(this).attr('max'));
            var monthMin = parseInt(jQuery(this).attr('min'));
            if (month > monthMax) {
              jQuery(this).val(monthMax);
            }
            if (month < monthMin) {
              jQuery(this).val(monthMin);
            }
          });













        });
      });
    </script>



    <?php if (get_field('price_highest_is_cv')) { ?>
      <?php require get_template_directory() . '/include/parts/cv.php'; ?>
    <?php } ?>


</section>

<div class="otkr-animation_line">
  <div class="lineanime"></div>
</div>