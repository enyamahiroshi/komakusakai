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
        <em class="facility-name">うぐいすの森</em>
        <small class="facility-en">UGUISU NO MORI</small>
      </h1>
      <div class="facility-intro js-fin-obj">
        <p>地域密着型介護老人福祉施設と就労支援B型事業を併設しております。<br>住み慣れた地域の環境のもと、今までの生活リズムのまま<br>ゆったり穏やかな時間がながれる暮らしを支援させていただきます。<br>障がいのある皆様に就労の機会や生活活動を提供、<br>『甘処うぐいす』を運営し、調理、接遇、会計などで<br>能力向上を目指すための支援をさせていただきます。</p>
      </div>
    </header>

    <?php // 施設紹介（写真） ?>
    <div class="facility-gallery">
      <h2 class="facility-hl01 js-fin-obj">
        <span class="hl-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/ico-faci-facility.svg" alt="" class="ico-faci-facility"></span>
        施設紹介
      </h2>
      <h3 class="gallery-title js-fin-obj">地域密着型介護老人福祉施設</h3>
      <div class="photo-gallery">
        <div class="gallery-item js-fin-obj"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/<?php echo $slug; ?>/img-gallery-01.jpg" alt=""></div>
        <div class="gallery-item js-fin-obj"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/<?php echo $slug; ?>/img-gallery-02.jpg" alt=""></div>
        <div class="gallery-item js-fin-obj"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/<?php echo $slug; ?>/img-gallery-03.jpg" alt=""></div>
      </div>
      <h3 class="gallery-title js-fin-obj">就労支援B型事業</h3>
      <div class="photo-gallery">
        <div class="gallery-item js-fin-obj"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/<?php echo $slug; ?>/img-gallery-04.jpg" alt=""></div>
        <div class="gallery-item js-fin-obj"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/<?php echo $slug; ?>/img-gallery-05.jpg" alt=""></div>
        <div class="gallery-item js-fin-obj"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/<?php echo $slug; ?>/img-gallery-06.jpg" alt=""></div>
      </div>
    </div>

    <?php // 詳細リスト ?>
    <div class="facility-detail facility-detail---col3">
      <?php // 居室概要 ?>
      <div class="detail-block js-fin-obj">
        <h2 class="facility-hl02">
          <span class="hl-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/ico-faci-setsubi.svg" alt="" class="ico-faci-setsubi"></span>
          居室概要
        </h2>
        <dl class="list-type-circle">
          <dt>面積</dt>
          <dd>14.31㎡</dd>
          <dt>床</dt>
          <dd>フローリング</dd>
          <dt>暖房設備</dt>
          <dd>外壁断熱</dd>
          <dt>冷房設備</dt>
          <dd>エアコン</dd>
          <dt>設備</dt>
          <dd>洗面台、ベッド、ナースコール、照明器具、障子、TV取付可能</dd>
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
          <dd>29名</dd>
          <dt>ショートステイ（短期入居生活介護）</dt>
          <dd>個室　2部屋　２名<br>多床室（４人部屋）　２部屋　８名</dd>
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
          <dd>看護師・介護福祉士・生活相談員・介護支援専門員・事務員</dd>
        </dl>
      </div>
    </div>

    <?php // MAP ?>
    <div class="facility-map js-fin-obj">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18145.768356128603!2d138.11950629508178!3d36.00631333259142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2f3a74230fa7035!2z5Zyw5Z-f5a-G552A5Z6L54m55Yil6aSK6K236ICB5Lq644Ob44O844Og44GG44GQ44GE44GZ44Gu5qOu!5e0!3m2!1sja!2sjp!4v1609972008563!5m2!1sja!2sjp" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

    <?php // 施設フッター ?>
    <div class="facility-footer facility-footer---<?php echo $slug; ?>">
      <div class="facility-footer-info js-fin-obj">
        <div class="facility-name-group">
          <p class="facility-type">地域密着型介護老人福祉施設・ショートステイ・就労支援B型事業</p>
          <p class="facility-name">うぐいすの森</p>
        </div>
        <p class="facility-address">長野県諏訪市沖田町４丁目２-１</p>
        <p class="facility-tel">TEL <a href="tel:0266751212">0266(75)1212</a></p>
        <p class="facility-fax">FAX 0266(75)1222</p>
      </div>
    </div>

  </section>

<?php get_footer(); ?>