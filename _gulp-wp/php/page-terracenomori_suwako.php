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
        <em class="facility-name">テラスの森 諏訪湖</em>
        <small class="facility-en">UGUISU NO MORI</small>
      </h1>
      <div class="facility-intro js-fin-obj">
        <p>テラスの森 諏訪湖は医療法人こまくさ会が運営する<br>住宅型有料老人ホームです。（一部介護付き）<br>お元気な方も介護が必要な方もご入居いただける施設となっております。<br>地域の主治医と連携し、医療面でも安心した生活をサポートいたします。<br>暮らしでは、特に食事に工夫をし、信州の新鮮な野菜、果物、キノコなどの食材を<br>ふんだんに利用して季節に応じておいしくいただけるように心がけております。<br>入浴では浴室にて下諏訪温泉を楽しんでいただけるよう、元湯から直接温泉を引いております。<br>諏訪湖を眺めながらの温泉気分を存分に味わっていただくことができます。</p>
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
    <div class="facility-detail facility-detail---col2">
      <?php // 主な設備 ?>
      <div class="detail-block js-fin-obj">
        <h2 class="facility-hl02">
          <span class="hl-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/ico-faci-setsubi.svg" alt="" class="ico-faci-setsubi"></span>
          主な設備
        </h2>
        <dl class="list-type-circle">
          <dd>IHクッキングヒーター、エアコン、シャワーユニット、エコキュート、ケアコール、車椅子対応型洗面台、トイレ、洗濯機置場、押入れ、専用ベランダ</dd>
          <dt>居室</dt>
          <dd>全60室（全室個室）</dd>
          <dt>建築構造</dt>
          <dd>鉄筋コンクリート造６階建て</dd>
          <dt>床面積</dt>
          <dd>22.57～31.07㎡(広く明るい使い勝手の良い居住空間、畳部屋併設）</dd>
          <dt>共用設備</dt>
          <dd>フロント、食堂<br>（ガラス張りの明るいダイニング、諏訪湖が一望できる空間を提供します）<br>男女浴室<br>（天然温泉大浴場で諏訪湖の景観を楽しみながらお体を労わることができます）<br>泉質：アルカリ性単純泉　一般適応症：創傷・神経痛・湿疹・婦人病・<br>成人病・腰痛<br>車椅子用トイレ、エレベーター、喫茶室、洗濯室、会議室</dd>
          <dt>土地・建物</dt>
          <dd>賃借（事業主非所有）</dd>
        </dl>
      </div>
      <?php // 利用料金 ?>
      <div class="detail-block js-fin-obj">
        <h2 class="facility-hl02">
          <span class="hl-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/ico-faci-price.svg" alt="" class="ico-faci-price"></span>
          利用料金
        </h2>
        <dl class="list-type-circle">
          <dt>入居一時金</dt>
          <dd>０円　　入居一時金はありません。月払い方式です。</dd>
          <dt>家賃（非課税）</dt>
          <dd>60,000円　～　83,000円/月　居室及び共用部の利用料</dd>
          <dt>管理費（税込）</dt>
          <dd>44,000円/月<br>共用部の維持管理、生活サービスに関わる人件費・事務費</dd>
          <dt>食費（税込）</dt>
          <dd>55,080円　３食30日を召上った場合の料金です。欠食も可能です。<br>（退所時の修繕積立として月2,000円の積立金が必要です。<br> 退所時に原状回復に要する金額を除き返金いたします。）</dd>
        </dl>
        <div class="btn-wrap">
          <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/download/teraracenomori_price.pdf" target="_blank" class="btn btn---pdf">利用料金一覧表はこちら</a>
        </div>
      </div>
    </div>

    <?php // MAP ?>
    <div class="facility-map js-fin-obj">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6450.357096185297!2d138.09950883361458!3d36.06474888010662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601c5513b8b00001%3A0x39ce66a7a44aa4f!2z44OG44Op44K544Gu5qOu6KuP6Kiq5rmW!5e0!3m2!1sja!2sjp!4v1609974159225!5m2!1sja!2sjp" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

    <?php // 施設フッター ?>
    <div class="facility-footer facility-footer---<?php echo $slug; ?>">
      <div class="facility-footer-info js-fin-obj">
        <div class="facility-name-group">
          <p class="facility-type">住宅型有料老人ホーム</p>
          <p class="facility-name">テラスの森 諏訪湖</p>
        </div>
        <p class="facility-address">長野県諏訪郡下諏訪町高木10616-10番地</p>
        <p class="facility-tel">TEL <a href="tel:0266262000">0266(26)2000</a></p>
        <p class="facility-fax">FAX 0266(26)2005</p>
        <p class="facility-other"><span>お問合せ・見学・ご相談</span><span>担当：池田</span></p>
      </div>
    </div>

  </section>

<?php get_footer(); ?>