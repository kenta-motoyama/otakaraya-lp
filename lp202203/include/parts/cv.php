<?php
date_default_timezone_set('Asia/Tokyo');
global $visiting_link;
global $tento_link;
global $alt_add_word;


//9:00 - 21:00は問い合わせリンク
$_hh = date('H');
if ($_GET['h']) {
  $_hh = $_GET['h'];
}
$_h = (int)$_hh;
$contacturl_sp = "tel:" . get_field('common_tel_contact');
$contacturl_pc = "https://www.otakaraya.jp/contact/";
$linktarget = "_self";
$imagepath_sp = get_template_directory_uri() . "/assets/img/btn_tel_sp_202205.webp";
$imagepath_pc = "";
$mode = 1;
if ($_h < 9 || $_h >= 21) {
  $contacturl_sp = "https://lin.ee/ot9VXkM";
  $contacturl_pc = "https://lin.ee/ot9VXkM";
  $linktarget = "_blank";
  $imagepath_sp = "/assets/img/cta_line_sp_20221013.webp";
  $imagepath_pc = "/assets/img/pc/cta_line_pc_20221013.webp";
  $mode = 2;
}
?>

<!-- まずは査定額を聞いてみる start lp202203/cv.php -->
<div class="otkr-purchase fadein" data-h="<?php echo $_h; ?>">
  <div class="otkr-under-inner">
    <div class="otkr-purchase--tel otkr-sp">
      <p class="tel_linkText"><a href="<?php echo $contacturl_sp; ?>" target="<?php echo $linktarget; ?>"><img src="<?php echo $imagepath_sp; ?>" alt="<?php echo $alt_add_word; ?>"></a></p>
    </div>

    <div class="otkr-purchase--btn">
      <ul>
        <li><a href="<?php echo $visiting_link; ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn_trip_l.png" alt="<?php echo $alt_add_word; ?>ご自宅の玄関で簡単!出張買取 詳しくはこちら" class="otkr-pc">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn_trip_l_sp_202205.webp" alt="<?php echo $alt_add_word; ?>ご自宅の玄関で簡単!出張買取 詳しくはこちら" class="otkr-sp">
          </a></li>
        <li><a href="<?php echo $tento_link; ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn_store_l.png" alt="<?php echo $alt_add_word; ?>お近くの店舗を調べる 店頭買取 詳しくはこちら" class="otkr-pc">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn_store_l_sp_202205.webp" alt="<?php echo $alt_add_word; ?>お近くの店舗を調べる 店頭買取 詳しくはこちら" class="otkr-sp">
          </a></li>
      </ul>
    </div>


    <div class="otkr-purchase--telblock">

      <?php if ($mode == 2) : ?>
        <div class="otkr-pc">
        <a href="<?php echo $contacturl_pc; ?>" target="<?php echo $linktarget; ?>"><img src="<?php echo $imagepath_pc; ?>" alt="<?php echo $alt_add_word; ?>"></a>

        </div>
      <?php else : ?>

        <div class="otkr-purchase--tel otkr-pc">

          <p class="text_l">まずは査定額を聞いてみる</p>
          <div class="tel_link">
            <div class="tel_linkIcon">
              <span>通話無料</span>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_tel.png" alt="<?php echo $alt_add_word; ?>">
            </div>
            <p class="tel_linkText"><a href="<?php echo $contacturl_pc; ?>" target="<?php echo $linktarget; ?>"><?php the_field('common_tel_contact'); ?></a></p>
          </div>
          <p class="text_s"><?php the_field('common_reception_time'); ?></p>
        </div>
        <div class="otkr-purchase--check  otkr-pc">
          <h4>まずはお気軽にお電話ください!</h4>
          <ul>
            <li>初めての方でも親切・丁寧にご対応</li>
            <li>お近くの店舗をわかりやすくご案内</li>
            <li>ご不明点はなんでもご相談ください</li>
          </ul>
        </div>

      <?php endif; ?>



    </div>
  </div>




</div>
<!-- /まずは査定額を聞いてみる end lp202203/cv.php -->