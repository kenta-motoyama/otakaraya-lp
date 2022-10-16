<!DOCTYPE html>
<html lang="ja">
<head>


<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<meta name="twitter:card" content="summary_large_image" />

<?php
date_default_timezone_set ('Asia/Tokyo');

global $alt_add_word;
global $pagetype;
global $visiting_link;
global $tento_link;

//noinndex設定
if(is_page()):
  if(get_field('noindex') == true){
    echo '<meta name="robots" content="noindex,follow" />';
  }
endif;

//カテゴリ種別取得
$cp_category = get_field('cp_category');

//出張買取、店頭買取リンク先
if($cp_category == 'rolex'):
  $visiting_link = "https://www.otakaraya.jp/lp_page/visiting-rolex/";
  $tento_link = "https://www.otakaraya.jp/lp_page/tento-rolex/";
  $cp_link = "https://www.otakaraya.jp/campaign/tokei-cam-rolex.php";
elseif($cp_category == 'brand-tokei'):
  $visiting_link = "https://www.otakaraya.jp/lp_page/visiting-tokei/";
  $tento_link = "https://www.otakaraya.jp/lp_page/tento-tokei/";
  $cp_link = "https://www.otakaraya.jp/campaign/tokei-cam.php";
elseif($cp_category == 'brand'):
  $visiting_link = "https://www.otakaraya.jp/lp_page/visiting-40/";
  $tento_link = "https://www.otakaraya.jp/lp_page/tento-40/";
  $cp_link = "https://www.otakaraya.jp/campaign/bag-camp.php";
elseif($cp_category == 'daiya'):
  $visiting_link = "https://www.otakaraya.jp/lp_page/visiting-40/";
  $tento_link = "https://www.otakaraya.jp/lp_page/tento-40/";
  $cp_link = "https://www.otakaraya.jp/campaign/daiya-cam.php";
elseif($cp_category == 'gold'):
  $visiting_link = "https://www.otakaraya.jp/lp_page/visiting/";
  $tento_link = "https://www.otakaraya.jp/lp_page/tento/";
  $cp_link = "https://www.otakaraya.jp/campaign/gold-cam.php";
elseif($cp_category == 'other'):
  $visiting_link = "https://www.otakaraya.jp/lp_page/visiting-40/";
  $tento_link = "https://www.otakaraya.jp/lp_page/tento-40/";
  $cp_link = "https://www.otakaraya.jp/campaign/";
else:
  $visiting_link = "https://www.otakaraya.jp/lp_page/visiting-40/";
  $tento_link = "https://www.otakaraya.jp/lp_page/tento-40/";
  $cp_link = "https://www.otakaraya.jp/campaign/";
endif;

/*
1:時計
2:金
3:ダイヤ
4:ブランド
5:プラチナ
6:その他
*/


if($pagetype == 1):
  $visiting_link = "https://www.otakaraya.jp/lp_page/visiting-tokei/";
  $tento_link = "https://www.otakaraya.jp/lp_page/tento-tokei/";
elseif($pagetype == 2):
  $visiting_link = "https://www.otakaraya.jp/lp_page/visiting/";
  $tento_link = "https://www.otakaraya.jp/lp_page/tento/";
elseif($pagetype == 3):
  $visiting_link = "https://www.otakaraya.jp/lp_page/visiting-daiya/";
  $tento_link = "https://www.otakaraya.jp/lp_page/tento-daiya/";
elseif($pagetype == 4):
  $visiting_link = "https://www.otakaraya.jp/lp_page/visiting-brand/";
  $tento_link = "https://www.otakaraya.jp/lp_page/tento-brand/";
elseif($pagetype == 5):
  $visiting_link = "https://www.otakaraya.jp/lp_page/visiting-pt/";
  $tento_link = "https://www.otakaraya.jp/lp_page/tento-pt/";
else:
  $visiting_link = "https://www.otakaraya.jp/lp_page/visiting-40/";
  $tento_link = "https://www.otakaraya.jp/lp_page/tento-40/";
endif;



//9:00 - 21:00は問い合わせリンク
$_hh = date('H');
if($_GET['h']){
  $_hh = $_GET['h'];
}
$_h = (int)$_hh;
$contacturl = "tel:".get_field('common_tel_contact');
if($_h < 9 || $_h >= 21){
  $contacturl = "https://www.otakaraya.jp/contact/";
}


?>



<meta property="og:title" content="買取専門店のおたからや - 最短5分で査定、出張費・送料無料" />
<meta property="og:description" content="買取専門店のおたからや。最短5分で査定、出張費・送料無料です。金・プラチナ・貴金属・ダイヤモンド・ブランド品・時計・バッグ・切手・古銭・着物・鉄道模型など、他社圧倒の高額買取でいろいろ買います。" />
<meta property="og:url" content="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
<meta property="og:image" content="<?php the_field('mv'); ?>" />
<meta name="twitter:card" content="summary_large_image">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png">

<title>買取専門店のおたからや - 最短5分で査定、出張費・送料無料</title>
<meta name="description" content="買取専門店のおたからや。最短5分で査定、出張費・送料無料です。金・プラチナ・貴金属・ダイヤモンド・ブランド品・時計・バッグ・切手・古銭・着物・鉄道模型など、他社圧倒の高額買取でいろいろ買います。" />
<meta name="keywords" content="買取専門店,おたからや,査定,宅配買取,出張買取">



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.1.1/remodal.min.css" integrity="sha512-UO+dUiFTr6cCaPZKCzXEGhYsuK8DkGAS5iThyMUrtHsg+INCFyRM3GiqJ4rjuvfEyn81XGjpfmjSwwR1dAjAsw==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.1.1/remodal-default-theme.min.css" integrity="sha512-jRxwiuoe3nt8lMSnOzNEuQ7ckDrLl31dwVYFWS6jklXQ6Nzl7b05rrWF9gjSxgOow5nFerdoN6CBB4gY5m5nDw==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/app.css?2022090501" />

<?php wp_head(); ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W2M2WF');</script>
<!-- End Google Tag Manager -->

</head>
<body data-category="<?php echo $cp_category;?>" data-pagetype="<?php echo $pagetype;?>">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W2M2WF"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  

<div id="otkr_lp" class="">

  <header id="otkr-header" class="otkr-header">
    <!-- <div class="otkr-header--ukraine">
      <a class="otkr-pc" href="https://e-fran.jp/news-page/" target="_blank"><p>ウクライナ情勢に対する人道支援寄付に関して</p></a>
      <a class="otkr-sp" href="https://e-fran.jp/news-page/" target="_blank"><p>ウクライナ情勢に対する人道支援寄付に関して</p></a>
    </div> -->
    <?php if($pagetype != 2):?>
    <div class="otkr-header--covid">
      <a class="otkr-pc" href="https://www.otakaraya.jp/lp_page/corona/"><p>コロナ対策徹底、定期的にPCR検査済み</p></a>
      <a class="otkr-sp" href="https://www.otakaraya.jp/lp_page/corona/"><p>コロナ対策徹底、定期的にPCR検査済み</p></a>
    </div>
    <?php endif;?>
    <div class="otkr-nav-pc">
        <div class="otkr-header--content">
            <div class="otkr-header--sitename">
              <?php if(get_field('is_coupon')): ?>
                <h1 class="f-notosans--r"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_otakaraya.png" alt="<?php echo $alt_add_word;?> おたからや"></h1>
              <?php else:?>
                <h1 class="f-notosans--r"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_otakaraya.png" alt="<?php echo $alt_add_word;?> おたからや" style="width:240px;"></h1>
              <?php endif;?>
            </div>
            <div class="otkr-header--">
            </div>
            <div class="otkr-header--coupon">
              <?php if(get_field('is_coupon')){ ?>
                <a href="<?php echo $cp_link;?>#kupon">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_coupon.png" alt="<?php echo $alt_add_word;?> お得なクーポン">
                </a>
              <?php } ?>
            </div>
            <div class="otkr-header--tel">
                <p class="text_l">まずは査定額を聞いてみる</p>
                <div class="tel_link">
                    <div class="tel_linkIcon">
                      <span>通話無料</span>
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_tel.png" alt="<?php echo $alt_add_word;?> ">
                    </div>
                    <p class="tel_linkText">
                      <a href="/contact/" class="otkr-pc"><?php the_field('common_tel_contact'); ?></a>
                      <a href="<?php echo $contacturl; ?>" class="otkr-sp"><?php the_field('common_tel_contact'); ?></a>
                    </p>
                </div>
                <p class="text_s"><?php the_field('common_reception_time'); ?></p>
            </div>
            <div class="otkr-header--purchase">
              <ul>
                <li><a href="<?php echo $visiting_link;?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn_trip_s.png" alt="<?php echo $alt_add_word;?> ご自宅の玄関で簡単!出張買取 詳しくはこちら"></a></li>
                <li><a href="<?php echo $tento_link?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn_store_s.png" alt="<?php echo $alt_add_word;?> お近くの店舗を調べる 店頭買取 詳しくはこちら"></a></li>
              </ul>
            </div>

        </div>

        <?php if(get_field('is_navi')){ ?>

          <div class="otkr-header--menu">
            <nav class="otkr-header--nav">
              <ul>
                <li><a href="#otkr_lp">トップ</a></li>
                  <?php
                    $lp_layout = get_field('lp_layout');
                    foreach ($lp_layout as $key => $value) {
                      if($value['lp_layout_name']){
                        echo '<li><a href="#'.$value['lp_layout_anc'].'">'.$value['lp_layout_name'].'</a></li>';
                      }
                      if(isset($value['lp_layout_name2'])){
                        if($value['lp_layout_name2']){
                          echo '<li><a href="#'.$value['lp_layout_anc2'].'">'.$value['lp_layout_name2'].'</a></li>';
                        }
                      }
                    }
                  ?>
              </ul>
            </nav>
          </div>

        <?php } ?>

    </div>

    
    <div class="otkr-nav-sp">
      <div class="otkr-header--content">
          <div class="otkr-header--sitename">
            <h1 class="f-notosans--r"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_otakaraya.png" alt="<?php echo $alt_add_word;?> おたからや"></h1>
          </div>

          <div class="otkr-header--coupon">
            <?php if(get_field('is_coupon')){ ?>
              <a href="<?php echo $cp_link;?>#kupon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_coupon.png" alt="<?php echo $alt_add_word;?> お得なクーポン">
              </a>
            <?php } ?>
          </div>


        <?php if(get_field('is_navi')){ ?>

          <div class="otkr-header--menu" id="ijMenu">
              <span></span>
              <span></span>
              <span></span>
              <span class="text"></span>
          </div>

        <?php } ?>

          <nav id="otkr-nav">
            <div id="otkr-nav-list">
                <div class="menutext">
                    <p>メニュー</p>
                </div>
              <ul class="otkr-nav-list-ul">
                <li class="otkr-nav-purchase">
                    <ul>
                      <li><a href="<?php echo $visiting_link;?>" class="ico_car">出張予約</a></li>
                      <li><a href="<?php echo $tento_link?>" class="ico_shop">店舗一覧</a></li>
                    </ul>
                </li>
                <li class="otkr-menu">
                    <ul>
                      <li><a href="#otkr_lp">トップ</a></li>
                      <?php
                        foreach ($lp_layout as $key => $value) {
                          if($value['lp_layout_name']){
                            echo '<li><a href="#'.$value['lp_layout_anc'].'">'.$value['lp_layout_name'].'</a></li>';
                          }
                          if($value['lp_layout_name2']){
                            echo '<li><a href="#'.$value['lp_layout_anc2'].'">'.$value['lp_layout_name2'].'</a></li>';
                          }
                        }
                      ?>

                      <!-- <li><a href="#">金相場高騰</a></li>
                      <li><a href="#" class="">買取実績</a></li>
                      <li><a href="#" class="">まとめて査定で金額10%up</a></li>
                      <li><a href="#" class="">どんな状態でもお買取</a></li>
                      <li><a href="#" class="">Liメディア情報ve</a></li>
                      <li><a href="#" class="">万全の体制</a></li>
                      <li><a href="#" class="">売却時に必要なもの</a></li>
                      <li><a href="#" class="">よくある質問</a></li> -->
                    </ul>
                </li>
                <li class="otkr-close"><a href="#">とじる</a></li>
                
              </ul>         
            </div>
          </nav>
      </div>
      <div class="otkr-header--purchase" style="display:none !important; ">
        <ul>
          <li><a href="<?php echo $visiting_link;?>" class="ico_car">出張予約</a></li>
          <li><a href="<?php echo $tento_link?>" class="ico_shop">店舗一覧</a></li>
        </ul>
      </div>
    
    </div>


</header>



