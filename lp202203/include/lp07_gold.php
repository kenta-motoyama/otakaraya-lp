<?php
global $alt_add_word;
$price_highest_gap_use = get_field('price_highest_gap_use', 'option');
?>

<section>
    <div class="container-lp7--center">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/ttl-sankokaitori.png" alt="金プラチナの買取参考相場">
    </div>

    <!-- 参考買取価格相場 -->
    <div id="price" v-cloak>

        <div class="otkr-cmn-inner">
            <div class="soba-ttl">
                <h2>本日の金レート・プラチナレート</h2>
            </div>

            <!-- 金レート・プラチナレート -->
            <div id="ratebox">
                <table class="lp7table table-pc">
                    <caption><span class="caption-gold">金・貴金属国内公表価格</span><span class="caption-date">{{price_date | ad_format}}{{price_hhmm}}更新</span></caption>
                    <thead>
                        <tr>
                            <th class="bg_gold">金の国内公表価格</th>
                            <th class="bg_platinum">プラチナの国内公表価格</th>
                            <th class="bg_palladium">バラジウムの国内公表価格</th>
                            <th class="bg_silver">シルバーの国内公表価格</th>
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
                        <?php endif; ?>
                    </tbody>
                </table>
                <table class="lp7table table-sp" v-cloak>
                    <tr class="caption" colspan="3">
                        <th class="caption" colspan="3">
                            <span class="caption-gold">金・貴金属国内公表価格</span><span class="caption-date">{{price_date | ad_format}}{{price_hhmm}}更新</span>
                        </th>
                    </tr>
                    <tr class="lp7-ratetr">
                        <th class="bg_gold" width="40%">金の国内公表価格</th>
                        <td class="price" width="30%">{{au_ingod_price}}円</td>
                        <?php if ($price_highest_gap_use) : ?>
                            <td class="gap" width="30%">{{au_ingod_diff | diff_format}}円</td>
                        <?php endif; ?>
                    </tr>
                    <tr class="lp7-ratetr">
                        <th class="bg_platinum" width="40%">プラチナの国内公表価格</th>
                        <td class="price" width="30%">{{pt_ingod_price}}円</td>
                        <?php if ($price_highest_gap_use) : ?>
                            <td class="gap" width="30%">{{pd_ingod_diff | diff_format}}円</td>
                        <?php endif; ?>
                    </tr>
                    <tr class="lp7-ratetr">
                        <th class="bg_palladium" width="40%">バラジウムの国内公表価格</th>
                        <td class="price" width="30%">{{pd_ingod_price}}円</td>
                        <?php if ($price_highest_gap_use) : ?>
                            <td class="gap" width="30%">{{pt_ingod_diff | diff_format}}円</td>
                        <?php endif; ?>
                    </tr>
                    <tr class="lp7-ratetr">
                        <th class="bg_silver" width="40%">シルバーの国内公表価格</th>
                        <td class="price" width="30%">{{ag_ingod_price}}円</td>
                        <?php if ($price_highest_gap_use) : ?>
                            <td class="gap" width="30%">{{ag_ingod_diff | diff_format}}円</td>
                        <?php endif; ?>
                    </tr>
                </table>
            </div>
        </div>
        <!-- 金貴金属の種別参考買取相場表 -->
        <div class="container-lp7">
            <div class="otkr-cmn-inner">
                <div class="soba-ttl">
                    <h2>金貴金属の種別参考買取相場表</h2>
                </div>
                <div class="rate-list">
                    <details class="bg_goldrate">
                        <summary class="bg_gold">金のレート（1gあたり）</summary>
                        <dl>
                            <dt>インゴット（金）</dt>
                            <dd>8,643円</dd>
                        </dl>
                        <dl>
                            <dt>K24</dt>
                            <dd>8,636円</dd>
                        </dl>
                        <dl>
                            <dt>K22</dt>
                            <dd>7,919円</dd>
                        </dl>
                        <dl>
                            <dt>K21.6</dt>
                            <dd>7,775円</dd>
                        </dl>
                        <dl>
                            <dt>K20</dt>
                            <dd>7,236円</dd>
                        </dl>
                        <dl>
                            <dt>K18</dt>
                            <dd>6,652円</dd>
                        </dl>
                        <dl>
                            <dt>K14</dt>
                            <dd>4,944円</dd>
                        </dl>
                        <dl>
                            <dt>K10</dt>
                            <dd>3,500円</dd>
                        </dl>
                        <dl>
                            <dt>K9</dt>
                            <dd>3,086円</dd>
                        </dl>
                        <dl>
                            <dt>K18WG</dt>
                            <dd>6,901円</dd>
                        </dl>
                        <dl>
                            <dt>K14WG</dt>
                            <dd>5,106円</dd>
                        </dl>
                    </details>
                    <details class="bg_platinumrate">
                        <summary class="bg_platinum">プラチナのレート（1gあたり）</summary>
                        <dl>
                            <dt>インゴット（プラチナ）</dt>
                            <dd>4,700円</dd>
                        </dl>
                        <dl>
                            <dt>Pt1000</dt>
                            <dd>4,650円</dd>
                        </dl>
                        <dl>
                            <dt>Pt950</dt>
                            <dd>4,410円</dd>
                        </dl>
                        <dl>
                            <dt>Pt900</dt>
                            <dd>4,285円</dd>
                        </dl>
                        <dl>
                            <dt>Pt850</dt>
                            <dd>4,043円</dd>
                        </dl>
                    </details>
                    <details class="bg_silverrate">
                        <summary class="bg_silver">シルバーのレート（1gあたり）</summary>
                        <dl>
                            <dt>インゴット（シルバー）</dt>
                            <dd>93円</dd>
                        </dl>
                        <dl>
                            <dt>Sv1000</dt>
                            <dd>90円</dd>
                        </dl>
                        <dl>
                            <dt>Sv925</dt>
                            <dd>81円</dd>
                        </dl>
                    </details>
                </div>
                <p style="text-align: left;">※各種別毎の金相場、プラチナ相場、シルバー相場です。</p>
                <p style="text-align: left;">※上記の金額は、形状によって異なりますので、詳しくはお電話でお問合わせください。</p>
            </div>
        </div>




        <!-- 貴金属種別レート表 -->
        <div class="otkr-cmn-inner" style="display:none;">


            <div id="ratetable" v-cloak>
                <!-- <h2 class="mincho sitecolor" style="margin-bottom: 0;">貴金属種別レート表・相場表は？</h2> -->
                <div class="rate-tables" id="soba_sp_more">
                    <div class="rate-table-col col1">


                        <table class="rate-table table_gold">
                            <tbody>
                                <tr>
                                    <th>K24</td>
                                    <td>{{au_scrap[0].price}}円</td>
                                    <td class="up">
                                        <div><span>UP! &gt;</span><strong>{{price_add(au_scrap[0].price,<?php the_field('price_highest_upprice'); ?>)}}<small>円</small></strong></div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>K22</th>
                                    <td>{{au_scrap[1].price}}円</td>
                                    <td class="up">
                                        <div><span>UP! &gt;</span><strong>{{price_add(au_scrap[1].price,<?php the_field('price_highest_upprice'); ?>)}}<small>円</small></strong></div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>K21.6</th>
                                    <td>{{au_scrap[2].price}}円</td>
                                    <td class="up">
                                        <div><span>UP! &gt;</span><strong>{{price_add(au_scrap[2].price,<?php the_field('price_highest_upprice'); ?>)}}<small>円</small></strong></div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>K20</th>
                                    <td>{{au_scrap[3].price}}円</td>
                                    <td class="up">
                                        <div><span>UP! &gt;</span><strong>{{price_add(au_scrap[3].price,<?php the_field('price_highest_upprice'); ?>)}}<small>円</small></strong></div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>K18</th>
                                    <td>{{au_scrap[4].price}}円</td>
                                    <td class="up">
                                        <div><span>UP! &gt;</span><strong>{{price_add(au_scrap[4].price,<?php the_field('price_highest_upprice'); ?>)}}<small>円</small></strong></div>
                                    </td>
                                </tr>
                            </tbody>


                        </table>
                    </div>
                    <div class="rate-table-col col2">
                        <table class="rate-table table_gold">
                            <tbody>
                                <tr>
                                    <th>K14</th>
                                    <td>{{au_scrap[5].price}}円</td>
                                    <td class="up">
                                        <div><span>UP! &gt;</span><strong>{{price_add(au_scrap[5].price,<?php the_field('price_highest_upprice'); ?>)}}<small>円</small></strong></div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>K10</th>
                                    <td>{{au_scrap[6].price}}円</td>
                                    <td class="up">
                                        <div><span>UP! &gt;</span><strong>{{price_add(au_scrap[6].price,<?php the_field('price_highest_upprice'); ?>)}}<small>円</small></strong></div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>K9</th>
                                    <td>{{au_scrap[7].price}}円</td>
                                    <td class="up">
                                        <div><span>UP! &gt;</span><strong>{{price_add(au_scrap[7].price,<?php the_field('price_highest_upprice'); ?>)}}<small>円</small></strong></div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>K18WG</th>
                                    <td>{{au_scrap[8].price}}円</td>
                                    <td class="up">
                                        <div><span>UP! &gt;</span><strong>{{price_add(au_scrap[8].price,<?php the_field('price_highest_upprice'); ?>)}}<small>円</small></strong></div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>K14WG</th>
                                    <td>{{au_scrap[9].price}}円</td>
                                    <td class="up">
                                        <div><span>UP! &gt;</span><strong>{{price_add(au_scrap[9].price,<?php the_field('price_highest_upprice'); ?>)}}<small>円</small></strong></div>
                                    </td>
                                </tr>
                            </tbody>


                        </table>
                        <p style="text-align:right;line-height:1.1;font-size:10px;margin-top:5px;"><small>※上記の金額は実際の買取金額を保証するものではありません。</small></p>


                    </div>

                    <div class="display-sp soba_btn">
                        <a id="soba_more_btn" class="soba_more"><img src="/lp/cms/wp-content/themes/lp202203/assets/img/btn_gold_soba_more.png" alt="<?php echo $alt_add_word; ?> 相場をもっと詳しくみる！"></a>
                        <a id="soba_close_btn" class="soba_close" style="display:none;"><img src="/lp/cms/wp-content/themes/lp202203/assets/img/btn_gold_soba_close.png" alt="<?php echo $alt_add_word; ?> 閉じる"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- 相場表グラフ -->
    <?php
    $price_graph_option_use = get_field('price_graph_option_use', 'option');

    if ($price_graph_option_use) :

    ?>
        <section class="price-chart">

            <div class="soba-ttl">
                <h2>金・貴金属の過去2ヶ月の<br class="sp-only">参考買取価格相場推移グラフ</h2>
            </div>

            <div class="price-chart-container">

                <div class="price-chart-header lp7-chart">
                    <select id="graph-select" class="form-control lp7">
                        <option value="">選択してください</option>
                        <optgroup label="金">
                            <option value="k24_ingot">インゴット（金）</option>
                            <option value="k24">K24</option>
                            <option value="k22">K22</option>
                            <option value="k21.6">K21.6</option>
                            <option value="k20">K20</option>
                            <option value="k18">K18</option>
                            <option value="k14">K14</option>
                            <option value="k10">K10</option>
                            <option value="k9">K9</option>
                            <option value="k18wg">K18WG</option>
                            <option value="k14wg">K14WG</option>
                        </optgroup>
                        <optgroup label="プラチナ">
                            <option value="pt_ingot">インゴット（プラチナ）</option>
                            <option value="pt1000">Pt1000</option>
                            <option value="pt950">Pt950</option>
                            <option value="pt900">Pt900</option>
                            <option value="pt850">Pt850</option>
                        </optgroup>
                        <optgroup label="銀">
                            <option value="sv_ingot">インゴット（銀）</option>
                            <option value="sv1000">Sv1000</option>
                            <option value="sv925">Sv925</option>
                        </optgroup>
                        <optgroup label="パラジウム">
                            <option value="pd_ingot">インゴット（パラジウム）</option>
                        </optgroup>
                    </select>
                    <p id="price-chart-legend" class='chart-legend' style='text-align:right; margin: 20px 0 0 0;'>相場価格(円/g)</p>
                    <p id="price-chart-last-update" class='last_update' style='text-align:right; margin: 20px 0 0 0;'>更新</p>
                </div>
                <div class="lp7-graph">
                    <canvas id="" class="price-chart-canvas" width="735" height="400"></canvas>
                </div>
                <!-- <small>※上記の金額は、形状によって異なりますので詳しくはお電話でお問い合わせください。</small> -->

            </div>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
            <script>
                let inittype = 'k24_ingot';
            </script>
            <script src="https://www.otakaraya.jp/rate_files/graph/loadgraph.js"></script>
        </section>

    <?php endif; ?>


    <div id="simulation">

        <div class="soba-ttl">
            <h2>金・プラチナ<br class="sp-only">買取シミュレーション</h2>
        </div>

        <div class="gold_simulation lp7-ver" id="price">
            <div class="simulation_box">
                <div class="inputbox select_arrow">
                    <p>品位</p>
                    <select id="simulation_select" class="lp7-select">
                        <option value="" selected="selected">種類を選んで下さい</option>
                        <option v-bind:value="au_ingod_price">インゴット（金）</option>
                        <option v-bind:value="au_scrap[0].price">K24</option>
                        <option v-bind:value="au_scrap[1].price">K22</option>
                        <option v-bind:value="au_scrap[2].price">K21.6</option>
                        <option v-bind:value="au_scrap[3].price">K20</option>
                        <option v-bind:value="au_scrap[4].price">K18</option>
                        <option v-bind:value="au_scrap[5].price">K14</option>
                        <option v-bind:value="au_scrap[6].price">K10</option>
                        <option v-bind:value="au_scrap[7].price">K9</option>
                        <option v-bind:value="au_scrap[8].price">K18WG</option>
                        <option v-bind:value="au_scrap[9].price">K14WG</option>
                        <option v-bind:value="pt_ingod_price">インゴット（プラチナ）</option>
                        <option v-bind:value="pt_scrap[0].price">Pt1000</option>
                        <option v-bind:value="pt_scrap[1].price">Pt950</option>
                        <option v-bind:value="pt_scrap[2].price">Pt900</option>
                        <option v-bind:value="pt_scrap[3].price">Pt850</option>
                    </select>
                </div>
                <div class="lp7-simulationarrow"><span></span></div>
                <div class="inputbox weight lp7-weight">
                    <p class="title"><span>重さ</span></p>
                    <input type="number" id="weight" min="0" max="100000" placeholder="0" class="boxstyle">
                    <p class="unit">g</p>
                </div>
            </div>
            <div class="under_box">
                <div class="symbol">
                    <p class="equal"></p>
                </div>
                <div class="inputbox finalprice">
                    <p class="title"><span>参考買取相場価格</span></p>
                    <input type="text" id="answer" readonly="readonly" class="boxstyle">
                    <p class="unit">円</p>
                </div>
            </div>
        </div>
        <p class="detail-call">※上記の金額は、形状によって異なりますので、詳しくはお電話でお問合せください。</p>


        <!-- <small>※上記の金額は、形状によって異なりますので詳しくはお電話でお問い合わせください。</small> -->
        <div id="pt900" style="display:none;">{{pt_scrap[2].price}}</div>
        <div id="pt850" style="display:none;">{{pt_scrap[3].price}}</div>
        <div id="k18val" style="display:none;">{{au_scrap[4].price}}</div>
    </div>

    <script src="https://www.otakaraya.jp/js/vue.min.js"></script>
    <script src="https://www.otakaraya.jp/js/axios/axios.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script> -->
    <!-- <script src="https://unpkg.com/axios/dist/axios.min.js"></script> -->
    <script src="/rate_files/japanese-holidays.min.js"></script>
    <script src="/rate_files/price_load_ex.js?s4"></script>
    <script>
        // window.onload = function(){
        //crossdomainのphpファイルのアップ先URL
        const crossdomain_file = "https://www.otakaraya.jp/rate_files/crossdomain.php";
        //データを反映したいDOM要素のID
        const dom_id = ["#price", "#simulation"];
        // const dom_id = "#price";
        Vue.use(PriceLoad, {
            _file: crossdomain_file,
            _dom: dom_id
        });
        // }
    </script>


    <script>
        function priceset() {
            // 読み込み時にselect二種類追加
            var k18val = jQuery('#k18val').text();
            k18val = k18val.replace(/,/g, '');

            var pt900 = jQuery('#pt900').text();
            var pt850 = jQuery('#pt850').text();
            pt900 = pt900.replace(/,/g, '');
            pt850 = pt850.replace(/,/g, '');
            pt900 = pt900 / 2 + k18val / 2;
            pt850 = pt850 / 2 + k18val / 2;
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

                        var _up = "<?php echo get_field('price_highest_upprice'); ?>";

                        if (!_up) {
                            _up = 0;
                        }
                        // var _up = <?php the_field('price_highest_upprice'); ?>;

                        var answer_cp = num * weight + _up * weight;
                        // var answer_cp = num * weight * weight;
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
</section>