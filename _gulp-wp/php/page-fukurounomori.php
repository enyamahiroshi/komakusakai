<?php get_header(); ?>

<?php
  $page = get_post( get_the_ID() );
  $slug = $page->post_name;
?>
<div class="page-header page-header---facility-detail detail-<?php echo $slug; ?>"><div class="logo-back"></div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/img-logo_mark-gold.svg" alt="" class="logo"></div>

<main class="main-content main-content---facility-detail">

  <?php // パンくずリスト(yost seo)
  if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb( '<div class="bread-navi">','</div>' ); }
  ?>

  <section class="sec sec---facility-detail">

    <?php // 施設名とイントロ文 ?>
    <header class="facility-header facility-header---<?php echo $slug; ?>">
      <h1 class="page-title-facility">
        <span class="facility-type">社会福祉法人 こまくさ福祉会</span>
        <em class="facility-name">ふくろうの森</em>
        <small class="facility-en">FUKUROU NO MORI</small>
      </h1>
      <div class="facility-intro js-fin-obj">
        <p>高齢化社会がますます深刻化し、寝たきりの方や認知症の方が大勢介護を受けておられる現在、<br>在宅での療養がご本人、ご家族の方にとって、一番良いことは申すまでもありませんが、<br>介護負担が大きくなり、在宅だけの療養では本人も家族の方も疲れきってしまうため、<br>こうした施設を開設して少しでもお役に立つことができることをありがたく思っております。<br>社会福祉法人こまくさ福祉会として、「白駒の森」についで２つ目の施設として、これまでと同じように、<br>法人の理念である、地域社会に少しでも貢献して「優しさと暖かさ」を基本に、質の高いサービスを提供していくことで、<br>利用者の皆様に少しでも多くの満足をしていただけるように職員一同精一杯の努力をしてまいります。</p>
      </div>
    </header>

    <?php // 施設紹介（写真） ?>
    <div class="facility-gallery">
      <h2 class="facility-hl01 js-fin-obj">
        <span class="hl-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/ico-faci-facility.svg" alt="" class="ico-faci-facility"></span>
        施設紹介
      </h2>
      <div class="photo-gallery">
        <div class="gallery-item js-fin-obj"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/<?php echo $slug; ?>/img-gallery-01.jpg" alt=""></div>
        <div class="gallery-item js-fin-obj"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/<?php echo $slug; ?>/img-gallery-02.jpg" alt=""></div>
        <div class="gallery-item js-fin-obj"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/<?php echo $slug; ?>/img-gallery-03.jpg" alt=""></div>
        <div class="gallery-item js-fin-obj"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/<?php echo $slug; ?>/img-gallery-04.jpg" alt=""></div>
        <div class="gallery-item js-fin-obj"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/<?php echo $slug; ?>/img-gallery-05.jpg" alt=""></div>
        <div class="gallery-item js-fin-obj"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/<?php echo $slug; ?>/img-gallery-06.jpg" alt=""></div>
      </div>
    </div>

    <?php // 詳細リスト ?>
    <div class="facility-detail facility-detail---col3">
      <?php // 概要 ?>
      <div class="detail-block js-fin-obj">
        <h2 class="facility-hl02">
          <span class="hl-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/ico-faci-setsubi.svg" alt="" class="ico-faci-setsubi"></span>
          概要
        </h2>
        <dl class="list-type-circle">
          <dt>敷地面積</dt>
          <dd>8,314㎡</dd>
          <dt>延床面積</dt>
          <dd>4,996㎡</dd>
          <dt>建築構造</dt>
          <dd>鉄筋コンクリート造2階建て</dd>
          <dt>居室概要</dt>
          <dd>面積15㎡　/　床　フローリング　/　暖房設備　外壁断熱　/　冷房設備　エアコン</dd>
          <dt>設備</dt>
          <dd>洗面台、ベッド、ナースコール、照明器具、障子、TV取付可能　他</dd>
        </dl>
      </div>
      <?php // ご利用定員 ?>
      <div class="detail-block js-fin-obj">
        <h2 class="facility-hl02">
          <span class="hl-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/ico-faci-teiin.svg" alt="" class="ico-faci-teiin"></span>
          ご利用定員
        </h2>
        <dl class="list-type-circle">
          <dt>入所定員</dt>
          <dd>89名</dd>
          <dt>ショートステイ（短期入居生活介護）定員・デイサービス（通所介護）</dt>
          <dd>11名</dd>
        </dl>
      </div>
      <?php // 施設スタッフ ?>
      <div class="detail-block js-fin-obj">
        <h2 class="facility-hl02">
          <span class="hl-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/ico-faci-staff.svg" alt="" class="ico-faci-staff"></span>
          施設スタッフ
        </h2>
        <dl class="list-type-circle">
          <dt>管理者</dt>
          <dd>池田　輝明</dd>
          <dt>施設長</dt>
          <dd>池田　しずゑ</dd>
          <dt>スタッフ</dt>
          <dd>看護師・介護福祉士・生活相談員・管理栄養士・介護支援専門員・事務員</dd>
        </dl>
      </div>
    </div>

    <?php // MAP ?>
    <div class="facility-map js-fin-obj">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8585.44348452048!2d138.12607044924297!3d36.008528316312024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xefa9788704742124!2z54m55Yil6aSK6K236ICB5Lq644Ob44O844OgIOOBteOBj-OCjeOBhuOBruajrg!5e0!3m2!1sja!2sjp!4v1609972251721!5m2!1sja!2sjp" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

    <?php // 施設フッター ?>
    <div class="facility-footer facility-footer---<?php echo $slug; ?>">
      <div class="facility-footer-info js-fin-obj">
        <div class="facility-name-group">
          <p class="facility-type">特別養護老人ホーム</p>
          <p class="facility-name">ふくろうの森</p>
        </div>
        <p class="facility-address">長野県諏訪市四賀(飯島）2398-1</p>
        <p class="facility-tel">TEL <a href="tel:0266535577">0266(53)5577</a></p>
        <p class="facility-fax">FAX 0266(54)2255</p>
      </div>
    </div>

  </section>

<?php get_footer(); ?>