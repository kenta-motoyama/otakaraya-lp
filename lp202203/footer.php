<?php
global $alt_add_word;
global $post;
$slug = $post->post_name;
?>

<footer class="otkr-footer">
        <!-- <div class="otkr-pagetop" id="pagetop"><a href="#">PAGETOP</a></div> -->

        <div class="otkr-footer-inner">
              <div class="otkr-footer--logo">
                <div class="logo-otakaraya"><a><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_otakaraya_w.png" alt="<?php echo $alt_add_word;?> おたからや"></a></div>
                <div class="logo-e-fran"><a href="https://e-fran.jp/" target="_block">【株式会社いーふらん】</a></div>
              </div>
      
              <ul class="otkr-footer--link">
                <li><a href="https://e-fran.jp/company/" target="_blank">会社概要</a></li>
                <li><a href="/contact/" target="_blank">お問い合わせ</a></li>
                <li><a href="https://e-fran.jp/policy/" target="_blank">プライバシーポリシー</a></li>
                <li><a href="https://e-fran.jp/declaration/" target="_blank">反社会的勢力排除宣言</a></li>
                <li><a href="https://e-fran.jp/species-survival/" target="_blank">特別国際種事業者番号</a></li>
              </ul>

              <p class="copyright">神奈川県公安委員会 許可 第451380001308号 <span>Copyright(C)2022　買取専門店のおたからや　All Rights Reserved.</span></p>
        </div>
  </footer>


  
</div>
<div>
<?php
global $telnumber;
$telnumber = get_field('common_tel_contact');

$footer_type = get_field('footer_type');

//強制LINE導線設定
$line_important_use = get_field('line_important_use','option');

if($line_important_use == 1){
  $footer_type = "1";
}

?>
<div data-footer-type="<?php echo $footer_type;?>" data-line-use="<?php echo $line_important_use;?>"></div>
<?php if($footer_type == "1"):?>
  <?php include("/var/www/html/assets/modalcvbutton_line_pc.php"); ?>
  <?php include("/var/www/html/assets/modalcvbutton_line.php"); ?>
<?php else: ?>
  <?php include("/var/www/html/assets/modalcvbutton_pc.php"); ?>
  <?php include("/var/www/html/assets/modalcvbutton.php"); ?>
<?php endif; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.1.1/remodal.min.js" integrity="sha512-a/KwXZUMuN0N2aqT/nuvYp6mg1zKg8OfvovbIlh4ByLw+BJ4sDrJwQM/iSOd567gx+yS0pQixA4EnxBlHgrL6A==" crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/libs/luxy.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/app.js?2022090502"></script>
<!-- 
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/daiya_pricelist.js?3"></script> -->


<?php wp_footer(); ?>

</body>
</html>





