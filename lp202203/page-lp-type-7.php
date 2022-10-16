<?php
/*
Template Name: LP Type 7　（金用_2022）
*/
$pagetype = 2;
get_header('lp7');
?>



<main class="otkr-content">
  <article class="otkr-wrap">
    <div class="otkr-kv" style="background-image: url(<?php the_field('mv_bg'); ?>);">
      <div class="otkr-cmn-inner lp7">
        <div class="catch-wrap">
        <h2 class="catch-ttl">新宿<span class="whiteS">エリア</span></h2>
        <h3 class="catch-ttlS"><span>3店舗!</span></h3>
        </div>
        <img src="<?php the_field('mv'); ?>" alt="高価買取" class="otkr-pc">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/mv_sp-lp07.png" alt="高価買取" class="otkr-sp">
      </div>
      <div class="btn-shop">
      <div><a href="../../shop/shinjuku-honten/"><span>新宿<br>本店</span></a></div>
      <div><a href="../../shop/shinjuku-higashiguchi/"><span>新宿<br>東口店</span></a></div>
      <div><a href="../../shop/shinjuku-nishiguchi/"><span>新宿<br>西口店</span></a></div>
    </div>
    </div>
    <!-- end otkr-kv -->
    <div class="container_virustaisaku">
      <p class="ttl-virustaisaku"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/font-virustaisaku.png" alt="ウイルス対策1"></p>
      <div class="swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/virustaisaku-1.png" alt="ウイルス対策1"></div>
          <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/virustaisaku-2.png" alt="ウイルス対策2"></div>
          <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/virustaisaku-3.png" alt="ウイルス対策3"></div>
          <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/virustaisaku-4.png" alt="ウイルス対策4"></div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </div>
    <div class="container-lp7">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/bnr-souba.webp" alt="相場が下がってしまう">
    </div>
    <div class="container-lp7">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/bnr-sateidake.webp" alt="査定だけでも大歓迎">
    </div>
    <div class="container-lp7">
      <a href="tel:0120-555-600"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/cta-tell.webp" alt="お気軽にお電話ください"></a>
    </div>
    <div class="container-lp7">
      <a href="/shop"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/tenpo.webp" alt="店舗案内"></a>
    </div>
    <div class="container-lp7">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/bnr-erabareruriyu.webp" alt="選ばれる5つの理由">
    </div>
    <div class="container-lp7 kuchikomi">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/bnr-kuchikomi.png" alt="口コミ">
      <div class="kuchikomi-list">
        <div class="kuchikomi-list_detail">
          <h2>アクセサリー12点を買い取っていただきました。(K.Yさん)</h2>
          <div class="kuchikomi-list_txt">
            <p>アクセサリー12点程見て頂きました。今回はめちゃくちゃ満足出来る価格を提示して頂き、即決めました。またお願いしたいくらい良い店舗さんでした。</p>
          </div>
        </div>
        <div class="kuchikomi-list_detail">
          <h2>いらなくなった金のカフスセット(A.Kさん)</h2>
          <div class="kuchikomi-list_txt">
            <p>いらなくなった金のカフスセットを売りました。査定はとても良心的で、予想以上の価格に即決させていただきました。とてもよいお取引ありがとうございました。</p>
          </div>
        </div>
        <div class="kuchikomi-list_detail">
          <h2>本来の価格を大きく超えて希望通りの価格に!(K.Oさん)</h2>
          <div class="kuchikomi-list_txt">
            <p>電話したところ当日中に来てくださいました。交渉に際しても無理を押し付けたにもかかわらず本来の価格を大きく超えて希望の価格で買い取っていただき良かったです。</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container-lp7">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/bnr-sateidake.webp" alt="査定だけでも大歓迎">
    </div>
    <div class="container-lp7">
      <a href="tel:0120-555-600"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/cta-tell.webp" alt="お気軽にお電話ください"></a>
    </div>
    <div class="container-lp7">
      <a href="/shop"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/tenpo.webp" alt="店舗案内"></a>
    </div>
    <?php
    $url = 'https://www.otakaraya.jp/wp-json/wp/v2/shop?slug=shinjuku-honten';
    $json = mb_convert_encoding(file_get_contents($url), 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
    $arr = json_decode($json,true);
    ?>
    <?php foreach($arr as $data): ?>
      <div>
        <?php
        var_dump($data)
        ?>
      </div>
      <?php endforeach ?>
      <div class="container-lp7">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/ttl-kaitorizisseki.png" alt="貴金属買取実績">
    </div>
    <div class="container-lp7">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/zisseki_point1.png" alt="他社圧倒の買取実績">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/zisseki-item01.png" alt="買取アイテム1">
    <div class="zisseki-wrap">
    <div class="zisseki-wrap_inner">
      <h2>買取比較例</h2>
      <p>貴金属のアクセサリー</p>
      <dl class="zisseki-hikaku">
        <dt>A社</dt>
        <dd>0,000,000円</dd>
      </dl>
      <dl class="zisseki-hikaku">
        <dt>B社</dt>
        <dd>0,000,000円</dd>
      </dl>
    </div>
    <div class="zisseki-wrap_img">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/zisseki_catch.png" alt="他社圧倒">
    </div>
    </div>
    <div class="zisseki-reason">
      <h2><span class="zisseli-redTxt">おたからや</span>なら、こんなに<span class="zisseli-redTxt">高い！</span></h2>
      <p>0,000,000<span class="zisseki-yen">円</span></p>
    </div>
    </div>

    <div class="container-lp7 jisseki">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/zisseki_point2.png" alt="1品でも高価買取">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/zisseki-item02.png" alt="買取アイテム1">
    <div class="zisseki-wrap">
    <div class="zisseki-wrap_inner">
      <h2>買取比較例</h2>
      <p>ダイヤ付きブローチ</p>
      <dl class="zisseki-hikaku">
        <dt>A社</dt>
        <dd>0,000,000円</dd>
      </dl>
      <dl class="zisseki-hikaku">
        <dt>B社</dt>
        <dd>0,000,000円</dd>
      </dl>
    </div>
    <div class="zisseki-wrap_img">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/zisseki_catch.png" alt="他社圧倒">
    </div>
    </div>
    <div class="zisseki-reason">
      <h2><span class="zisseli-redTxt">おたからや</span>なら、こんなに<span class="zisseli-redTxt">高い！</span></h2>
      <p>0,000,000<span class="zisseki-yen">円</span></p>
    </div>
    </div>

    <div class="container-lp7 jisseki-list">
      <h2><img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/zisseki-ttl02.png" alt="このようなものご自宅で眠らせていませんか"></h2>
    <div class="gojitaku-wrap">
      <!-- 1段目 -->
      <div class="gojitaku-inner"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/zisseski-gojitaku01.png" alt="祖母が使っていたアクセサリー類">
      <div>
        <h3>祖母が使っていたアクセサリー類</h3>
        <p>1,684,800<span class="zisseki-yenS">円</span></p>
      </div>
    </div>
      <div class="gojitaku-inner"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/zisseski-gojitaku02.png" alt="実家の整理で出てきた">
      <div>
        <h3>実家の整理で出てきた金やプラチナのアクセサリー</h3>
        <p>5,126,800<span class="zisseki-yenS">円</span></p>
      </div>
    </div>
      <div class="gojitaku-inner"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/zisseski-gojitaku03.png" alt="趣味で集めた金貨">
      <div>
        <h3>昔、趣味で集めていた金貨</h3>
        <p>9,820,400<span class="zisseki-yenS">円</span></p>
      </div>
    </div>
    <!-- 2段目 -->
    <div class="gojitaku-inner"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/zisseski-gojitaku01.png" alt="祖母が使っていたアクセサリー類">
      <div>
        <h3>祖母が使っていたアクセサリー類</h3>
        <p>1,684,800<span class="zisseki-yenS">円</span></p>
      </div>
    </div>

      <div class="gojitaku-inner"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/zisseski-gojitaku02.png" alt="実家の整理で出てきた">
      <div>
        <h3>実家の整理で出てきた金やプラチナのアクセサリー</h3>
        <p>5,126,800<span class="zisseki-yenS">円</span></p>
      </div>
    </div>

      <div class="gojitaku-inner"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/zisseski-gojitaku03.png" alt="趣味で集めた金貨">
      <div>
        <h3>昔、趣味で集めていた金貨</h3>
        <p>9,820,400<span class="zisseki-yenS">円</span></p>
      </div>
    </div>
    <!-- 3段目 -->
    <div class="gojitaku-inner"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/zisseski-gojitaku01.png" alt="祖母が使っていたアクセサリー類">
      <div>
        <h3>祖母が使っていたアクセサリー類</h3>
        <p>1,684,800<span class="zisseki-yenS">円</span></p>
      </div>
    </div>

      <div class="gojitaku-inner"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/zisseski-gojitaku02.png" alt="実家の整理で出てきた">
      <div>
        <h3>実家の整理で出てきた金やプラチナのアクセサリー</h3>
        <p>5,126,800<span class="zisseki-yenS">円</span></p>
      </div>
    </div>

      <div class="gojitaku-inner"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/zisseski-gojitaku03.png" alt="趣味で集めた金貨">
      <div>
        <h3>昔、趣味で集めていた金貨</h3>
        <p>9,820,400<span class="zisseki-yenS">円</span></p>
      </div>
    </div>

    </div>
    </div>
    <div class="container-lp7">
      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/zisseki_btn.webp" alt="詳しく見る"></a>
    </div>
    <div class="container-lp7">
      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/bnr-nayami.webp" alt="悩んでいませんか"></a>
    </div>
    <div class="container-lp7 omakase">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/ttl-omakaswe.png" alt="どのようなお品物もお任せください">
    <div class="omakase-wrap">
      <!-- 1段目 -->
      <figure class="omakase-inner">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/omakase-item01.png" alt="インゴット">
      <figcaption>インゴット</figcaption>
      </figure>
      <figure class="omakase-inner">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/omakase-item01.png" alt="インゴット">
      <figcaption>インゴット</figcaption>
      </figure>
      <figure class="omakase-inner">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/omakase-item01.png" alt="インゴット">
      <figcaption>インゴット</figcaption>
    </figure>
    <!-- 2段目 -->
    <figure class="omakase-inner">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/omakase-item01.png" alt="インゴット">
      <figcaption>インゴット</figcaption>
      </figure>
      <figure class="omakase-inner">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/omakase-item01.png" alt="インゴット">
      <figcaption>インゴット</figcaption>
      </figure>
      <figure class="omakase-inner">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/omakase-item01.png" alt="インゴット">
      <figcaption>インゴット</figcaption>
    </figure>
    <!-- 3段目 -->
    <figure class="omakase-inner">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/omakase-item01.png" alt="インゴット">
      <figcaption>インゴット</figcaption>
      </figure>
      <figure class="omakase-inner">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/omakase-item01.png" alt="インゴット">
      <figcaption>インゴット</figcaption>
      </figure>
      <figure class="omakase-inner">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/omakase-item01.png" alt="インゴット">
      <figcaption>インゴット</figcaption>
    </figure>
    <!-- 4段目 -->
    <figure class="omakase-inner">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/omakase-item01.png" alt="インゴット">
      <figcaption>インゴット</figcaption>
      </figure>
      <figure class="omakase-inner">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/omakase-item01.png" alt="インゴット">
      <figcaption>インゴット</figcaption>
      </figure>
      <figure class="omakase-inner">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/omakase-item01.png" alt="インゴット">
      <figcaption>インゴット</figcaption>
    </figure>
    <!-- 5段目 -->
    <figure class="omakase-inner">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/omakase-item01.png" alt="インゴット">
      <figcaption>インゴット</figcaption>
      </figure>
      <figure class="omakase-inner">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/omakase-item01.png" alt="インゴット">
      <figcaption>インゴット</figcaption>
      </figure>
      <figure class="omakase-inner">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/omakase-item01.png" alt="インゴット">
      <figcaption>インゴット</figcaption>
    </figure>
    <!-- 6段目 -->
    <figure class="omakase-inner">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/omakase-item01.png" alt="インゴット">
      <figcaption>インゴット</figcaption>
      </figure>
      <figure class="omakase-inner">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/omakase-item01.png" alt="インゴット">
      <figcaption>インゴット</figcaption>
      </figure>
      <figure class="omakase-inner">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp07/omakase-item01.png" alt="インゴット">
      <figcaption>インゴット</figcaption>
    </figure>

    </div>

    </div>




  </article>
</main>
<?php get_footer(); ?>