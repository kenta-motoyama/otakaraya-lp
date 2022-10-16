<?php
global $alt_add_word;
?>
<?php

$cp_category = get_field('cp_category');
$campaign_link = get_field('campaign_link');
$cp_category_image = get_field('cp_category_image');
// var_dump($cp_category);

if($cp_category == 'rolex'):
  $cp_link = "https://www.otakaraya.jp/campaign/tokei-cam-rolex.php";
elseif($cp_category == 'brand-tokei'):
  $cp_link = "https://www.otakaraya.jp/campaign/tokei-cam.php";
elseif($cp_category == 'brand'):
  $cp_link = "https://www.otakaraya.jp/campaign/bag-cam.php";
elseif($cp_category == 'daiya'):
  $cp_link = "https://www.otakaraya.jp/campaign/daiya-cam.php";
elseif($cp_category == 'gold'):
  $cp_link = "https://www.otakaraya.jp/campaign/gold-cam.php";
elseif($cp_category == 'brand-jewelry'):
  $cp_link = "https://www.otakaraya.jp/campaign/bag-cam-jw.php";
elseif($cp_category == 'platinum'):
  $cp_link = "https://www.otakaraya.jp/campaign/platinum-cam.php";
elseif($cp_category == 'other'):
  $cp_link = "https://www.otakaraya.jp/campaign/";
endif;


if($campaign_link){
  $cp_link = $campaign_link;
}

// $cp_link = "https://www.otakaraya.jp/campaign/";
// if (strstr($_SERVER['REQUEST_URI'], 'brand-tokei/rolex') == true) :
//   $cp_category = "rolex";
//   $cp_link = "https://www.otakaraya.jp/campaign/tokei-cam-rolex.php";
// elseif (strstr($_SERVER['REQUEST_URI'], 'brand-tokei') == true) :
//   $cp_category = "brand-tokei";
//   $cp_link = "https://www.otakaraya.jp/campaign/tokei-cam.php";
// elseif (strstr($_SERVER['REQUEST_URI'], 'daiya') == true) :
//   $cp_category = "daiya";
//   $cp_link = "https://www.otakaraya.jp/campaign/";
// elseif (strstr($_SERVER['REQUEST_URI'], 'brand-bag') == true) :
//   $cp_category = "brand";
//   $cp_link = "https://www.otakaraya.jp/campaign/bag-cam.php";
// elseif (strstr($_SERVER['REQUEST_URI'], 'brand') == true) :
//   $cp_category = "brand";
//   $cp_link = "https://www.otakaraya.jp/campaign/bag-cam.php";
// elseif (strstr($_SERVER['REQUEST_URI'], 'gold') == true) :
//   $cp_category = "gold";
//   $cp_link = "https://www.otakaraya.jp/campaign/gold-cam.php";
// elseif (strstr($_SERVER['REQUEST_URI'], 'kikinzoku') == true) :
//   $cp_category = "gold";
//   $cp_link = "https://www.otakaraya.jp/campaign/gold-cam.php";
// elseif (strstr($_SERVER['REQUEST_URI'], 'kinka-ginka') == true) :
//   $cp_category = "gold";
//   $cp_link = "https://www.otakaraya.jp/campaign/gold-cam.php";
// elseif (strstr($_SERVER['REQUEST_URI'], 'platinum') == true) :
//   $cp_category = "gold";
//   $cp_link = "https://www.otakaraya.jp/campaign/gold-cam.php";
// else :
//   $cp_category = "other";
//   $cp_link = "https://www.otakaraya.jp/campaign/";
// endif;

// $rss = simplexml_load_file('https://otakaraya:n3VJX8zK@' . $_SERVER["HTTP_HOST"] . '/feed/?post_type=chirashi');
// $rss = simplexml_load_file('https://' . $_SERVER["HTTP_HOST"] . '/feed/?post_type=chirashi');
$rss = simplexml_load_file('https://www.otakaraya.jp/feed/?post_type=chirashi');
$i = 0;

// echo '<pre>';
// var_dump($rss->channel);
// echo '</pre>';

?>


<?php wp_reset_query(); ?>


<?php //$campaign_banner = get_field('campaign_banner'); ?>
<?php //if (count($campaign_banner) > 0) { ?>
  <section class="otkr-cp">
    <div class="otkr-cmn-inner">
      <p class="otkr-sabttl"><?php the_field('campaign_title'); ?></p>


      <?php
      foreach ($rss->channel->item as $item) :
        $title = $item->title;
        $banner = $item->bannerurl;
        if(!empty($cp_category_image)){
          $banner = $cp_category_image;
        }
        if ($item->cpcat == $cp_category) :
          if($item->cpurl != ""):
            $cp_link = $item->cpurl;
          endif;
          echo '<div class="banner" data-cpurl="'.$item->cpurl.'">';
          echo '<a style="pointer-events:none !important;" href="' . $cp_link . '" target="_blank"><img src="' . $banner . '" width="100%" alt="'.$alt_add_word.' おたからや' . get_the_title() . 'チラシキャンペーン"></a>';
          echo '</div>';
          $i++;
        endif;
        if ($i > 0) break;
      endforeach;
      ?>





      <?php /* ?>
      <ul class="row" style="justify-content:center">
        <?php foreach ($campaign_banner as $key => $value) { ?>
            <li class="col1">
                <img src="<?php echo $value['campaign_banner_img']['url']; ?>" alt="<?php echo $value['campaign_banner_text']; ?>" class="otkr-pc">
                <img src="<?php echo $value['campaign_banner_img_sp']['url']; ?>" alt="<?php echo $value['campaign_banner_text']; ?>" class="otkr-sp">
            </li>
        <?php } ?>
      </ul>

      <?php */ ?>
    </div>
  </section>
<?php //} ?>


<?php
//共通CVT導線
$tel = get_field('common_tel_contact');
$campaign_link = $cp_link;
include("/var/www/html/assets/cvt_cp.php");
?>