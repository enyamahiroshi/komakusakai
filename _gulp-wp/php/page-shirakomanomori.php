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
        <em class="facility-name">白駒の森</em>
        <small class="facility-en">SHIRAKOMA NO MORI</small>
      </h1>
      <div class="facility-intro js-fin-obj">
        <p>八ヶ岳の奥深く、私たちの心を癒やしてくれる「白駒の池」にちなんで<br>命名した施設は、駅から歩いて5分、閑静な住宅街にあります。<br>全室個室、10人程度の小規で生活、個人のプライバシーを大切にした<br>ユニットケアを基本とした特別養護老人ホームです。<br>小規模の地域密着型通所介護も併設しております。<br>木材を多く使用して日本的和風な趣を意識し、リビングには家庭的で季節感が<br>味わえるような中庭があり癒やされる温かい雰囲気を工夫しております。<br>利用してくださる皆様に障がいがあってもどんなに認知力が低下しても、<br>心と体が落ち着いて不安にならず、最期まで穏やかに暮らしていただけるように努力しております。</p>
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
      <?php // 主な設備 ?>
      <div class="detail-block js-fin-obj">
        <h2 class="facility-hl02">
          <span class="hl-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/ico-faci-setsubi.svg" alt="" class="ico-faci-setsubi"></span>
          主な設備
        </h2>
        <dl class="list-type-circle">
          <dt>居室</dt>
          <dd>１人部屋　72室　/　１人部屋（ショート）　５室</dd>
          <dt>デイルーム・食堂・家庭浴槽（１人用）</dt>
          <dd>５個</dd>
          <dt>家庭浴槽（２人用）</dt>
          <dd>１個</dd>
          <dt>多人数浴槽</dt>
          <dd>１個</dd>
          <dt>特殊浴槽</dt>
          <dd>１個</dd>
          <dt>その他</dt>
          <dd>多目的ホール（地域交流スペース）・応接室・会議室・厨房・ラウンジ・事務室・リネン室・ボランティア室・洗濯室・トイレ（車イス対応）</dd>
          <dt>敷地面積</dt>
          <dd>6,792㎡</dd>
          <dt>延床面積</dt>
          <dd>5,182㎡</dd>
          <dt>建築構造</dt>
          <dd>鉄筋コンクリート造２階建</dd>
        </dl>
      </div>
      <?php // ご利用定員 ?>
      <div class="detail-block js-fin-obj">
        <h2 class="facility-hl02">
          <span class="hl-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/ico-faci-teiin.svg" alt="" class="ico-faci-teiin"></span>
          ご利用定員
        </h2>
        <dl class="list-type-circle">
          <dt>入所定員（１人部屋）</dt>
          <dd>72名</dd>
          <dt>ショートステイ定員（短期入所定員）</dt>
          <dd>5名</dd>
          <dt>デイサービス定員（地域密着型通所介護）</dt>
          <dd>10名</dd>
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
          <dd>澤田　キヌ子</dd>
          <dt>スタッフ</dt>
          <dd>看護師・介護福祉士・生活相談員・管理栄養士・介護支援専門員・事務員</dd>
        </dl>
      </div>
    </div>

    <?php // MAP ?>
    <div class="facility-map js-fin-obj">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1850.4202185023348!2d138.14968542744012!3d35.991880063000764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601c572fd92e4975%3A0x96bb1131d88da5f3!2z54m55Yil6aSK6K236ICB5Lq644Ob44O844OgIOeZvemnkuOBruajrg!5e0!3m2!1sja!2sjp!4v1610504431106!5m2!1sja!2sjp" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

    <?php // 施設フッター ?>
    <div class="facility-footer facility-footer---<?php echo $slug; ?>">
      <div class="facility-footer-info js-fin-obj">
        <div class="facility-name-group">
          <p class="facility-type">特別養護老人ホーム・地域密着型通所介護</p>
          <p class="facility-name">白駒の森</p>
        </div>
        <p class="facility-address">長野県茅野市ちの3000-1</p>
        <p class="facility-tel">TEL <a href="tel:0266827500">0266(82)7500</a></p>
        <p class="facility-fax">FAX 0266(82)7575</p>
      </div>
    </div>

  </section>

<?php get_footer(); ?>