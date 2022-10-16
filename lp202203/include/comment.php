<?php
global $alt_add_word;
?>
<a id="<?php echo $layout['lp_layout_anc']; ?>"></a>

<section class="otkr-comment otkr-animation">

  <div class="box01 boxeffect"></div>
  <div class="box02 boxeffect"></div>
  <div class="box03 boxeffect"></div>
  <div class="box04 boxeffect"></div>


  <div class="otkr-cmn-inner--l fadein">
    <div class="otkr-ttl">
      <h2><?php the_field('comment_title'); ?></h2>
      <p><?php the_field('comment_sub'); ?></p>
      <!-- <h2>Googleクチコミ4.8!</h2>
      <p>嬉しいお声、沢山いただいております!</p> -->
    </div>
    <div class="otkr-comment--inner">
      <h3><img src="<?php the_field('comment_img1'); ?>" alt="<?php echo $alt_add_word;?> 買取クチコミ数 No.1 嬉しいお声ありがとうございます!"></h3>
      <ul class="row otkr-comment--logo">
        <li><img src="<?php the_field('comment_img2'); ?>" alt="<?php echo $alt_add_word;?> google 口コミ評価4.8獲得!"></li>
        <li><img src="<?php the_field('comment_img3'); ?>" alt="<?php echo $alt_add_word;?> ヒカカク 口コミ評価4.3獲得!"></li>
      </ul>

      <div class="otkr-comment--kuchikomi fadein">
        <ul class="row">


          <?php $comments = get_field('comments'); ?>
          <?php if (count($comments) > 0) { ?>
            <?php foreach ($comments as $key => $value) { ?>
              <li>
                <div class="otkr-comment--kuchikomiHed"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_star<?php echo $value['comments_rate']; ?>.png" alt="<?php echo $alt_add_word;?> <?php echo $value['comments_rate']; ?>"><span>(<?php echo $value['comments_name']; ?>）</span></div>
                <div class="otkr-comment--kuchikomiText">
                  <h4><?php echo $value['comments_title']; ?></h4>
                  <p><?php echo $value['comments_content']; ?></p>
                </div>
              </li>
            <?php } ?>
          <?php } ?>
          <!-- <li>
            <div class="otkr-comment--kuchikomiHed"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_star.png" alt="<?php echo $alt_add_word;?> ★★★★★" ><span>(東京都/S.Yさん）</span></div>
            <div class="otkr-comment--kuchikomiText">
              <h4>ロレックス サブマリーナを<br>
                買い取っていただきました</h4>
                <p>買い取りサービスを初めて利用したのですが、迅速で丁寧な対応、かつ高額での買い取りをして頂き、とても感謝しています。</p>
            </div>
          </li>
          <li>
            <div class="otkr-comment--kuchikomiHed"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_star.png" alt="<?php echo $alt_add_word;?> ★★★★★" ><span>(北海道/H.Fさん）</span></div>
            <div class="otkr-comment--kuchikomiText">
              <h4>古い時計の査定にビックリでした。</h4>
                <p>金貨、銀貨など記念硬貨と、せっかくなので古い時計の出張査定をお願いしました。古い時計の査定にビックリでした。まとめて買い取って頂きました。</p>
            </div>
          </li>
          <li>
            <div class="otkr-comment--kuchikomiHed"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_star.png" alt="<?php echo $alt_add_word;?> ★★★★★" ><span>(Sさん/女性）</span></div>
            <div class="otkr-comment--kuchikomiText">
              <h4>レディースのデイトジャストを<br>
                買取していただきました</h4>
                <p>ずっとタンスに眠っていたロレックスの時計を持っていきました。メンテナンスもしてないし、動いてもいなかったのですが、思っていた以上の値段で買取ってくださいました。</p>
            </div>
          </li> -->
        </ul>
      </div>
    </div>

  </div>

  <?php if (get_field('comments_is_cv')) { ?>
    <?php require get_template_directory() . '/include/parts/cv.php'; ?>
  <?php } ?>

</section>

<div class="otkr-animation_line">
  <div class="lineanime"></div>
</div>