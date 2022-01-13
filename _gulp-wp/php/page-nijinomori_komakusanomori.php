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

  <?php // 2施設へのアンカーリンク ?>
  <section class="sec sec---facility-anchor">
    <?php // 施設名 ?>
    <header class="facility-header facility-header---<?php echo $slug; ?>">
      <h1 class="page-title-facility">
        <em class="facility-name">虹の森・こまくさの森</em>
        <small class="facility-en">NIJI NO MORI・KOMAKUSA NO MORI</small>
      </h1>
      <div class="anchor-link">
        <a href="#niji_no_mori" class="item-link js-fin-obj">
          <div class="item-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/<?php echo $slug; ?>/img-anchor-nijinomori.jpg" alt=""></div>
          <p class="item-sub-title">介護老人保健施設・通所リハビリテーション</p>
          <p class="item-title">虹の森</p>
        </a>
        <a href="#komakusa_no_mori" class="item-link js-fin-obj">
          <div class="item-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/<?php echo $slug; ?>/img-anchor-komakusanomori.jpg" alt=""></div>
          <p class="item-sub-title">認知症対応型共同生活介護・サテライト老健・居宅支援事業所</p>
          <p class="item-title">こまくさの森</p>
        </a>
      </div>
    </header>
  </section>

  <?php // 虹の森 ?>
  <section id="niji_no_mori" class="sec sec---facility-detail">

    <div class="page-header page-header---facility-detail detail-nijinomori"><div class="logo-back"></div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/img-logo_mark-gold.svg" alt="" class="logo"></div>

    <?php // 施設名とイントロ文 ?>
    <header class="facility-header facility-header---nijinomori">
      <h1 class="page-title-facility">
        <span class="facility-type">介護老人保健施設・通所リハビリテーション</span>
        <em class="facility-name">虹の森</em>
        <small class="facility-en">NIJI NO MORI</small>
      </h1>
      <div class="facility-intro js-fin-obj">
        <p>介護の必要な方に安心して日常生活を過ごしていただけるように、<br>その方の有する能力に応じた介護、医療、リハビリテーション、機能訓練その他、<br>必要な生活のサポートをして、早く家庭での生活に戻れるよう<br>支援させていただきます。</p>
      </div>
    </header>

    <?php // 施設紹介（写真） ?>
    <div class="facility-gallery">
      <h2 class="facility-hl01 js-fin-obj">
        <span class="hl-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/ico-faci-facility.svg" alt="" class="ico-faci-facility"></span>
        施設紹介
      </h2>
      <div class="photo-gallery">
        <div class="gallery-item js-fin-obj"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/<?php echo $slug; ?>/img-gallery-nijinomori-01.jpg" alt=""></div>
        <div class="gallery-item js-fin-obj"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/<?php echo $slug; ?>/img-gallery-nijinomori-02.jpg" alt=""></div>
        <div class="gallery-item js-fin-obj"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/<?php echo $slug; ?>/img-gallery-nijinomori-03.jpg" alt=""></div>
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
          <dt>療養室</dt>
          <dd>1人部屋：28室、2人部屋：2室、4人部屋：17室</dd>
          <dt>その他</dt>
          <dd>デイルーム・食堂・各階談話室・各階サービスステーション・浴室（一般・特殊・１人用浴室（シャワー浴付））・機能訓練室・相談室・診察室・会議室・多目的ホール・喫茶室・会議室・事務室・リネン室・ボランティア室・洗濯室</dd>
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
          <dd>100名</dd>
          <dt>通所・ リハビリテーション定員（デイケア）</dt>
          <dd>40名</dd>
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
          <dd>浜口　史江</dd>
          <dt>スタッフ</dt>
          <dd>看護師・介護福祉士・社会福祉士・支援相談員・栄養士・介護支援専門員・調理師・理学療法士・作業療法士・事務員</dd>
        </dl>
      </div>
    </div>

    <?php // MAP ?>
    <div class="facility-map js-fin-obj">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3081.873935855651!2d138.14837360183574!3d35.992176399882695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x379aff6929067acd!2z44GT44G-44GP44GV5LyaIOiZueOBruajrg!5e0!3m2!1sja!2sjp!4v1609976217207!5m2!1sja!2sjp" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

    <?php // 施設フッター ?>
    <div class="facility-footer facility-footer---nijinomori">
      <div class="facility-footer-info js-fin-obj">
        <div class="facility-name-group">
          <p class="facility-type">介護老人保健施設・通所リハビリテーション</p>
          <p class="facility-name">虹の森</p>
        </div>
        <p class="facility-address">長野県茅野市ちの3094-6</p>
        <p class="facility-tel">TEL <a href="tel:0266732000">0266(73)2000</a></p>
        <p class="facility-fax">FAX 0266(73)2211</p>
        <p class="facility-other"><span>介護保険事業所番号</span><span>2051480024</span></p>
      </div>
    </div>

  </section>

  <?php // こまくさの森 ?>
  <section id="komakusa_no_mori" class="sec sec---facility-detail">

    <div class="page-header page-header---facility-detail detail-komakusanomori"><div class="logo-back"></div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/img-logo_mark-gold.svg" alt="" class="logo"></div>

    <?php // 施設名とイントロ文 ?>
    <header class="facility-header facility-header---komakusanomori">
      <h1 class="page-title-facility">
        <span class="facility-type">認知症対応型共同生活介護・サテライト老健・居宅支援事業所</span>
        <em class="facility-name">こまくさの森</em>
        <small class="facility-en">KOMAKUSA NO MORI</small>
      </h1>
      <div class="facility-intro js-fin-obj">
        <p>お年寄りの人達の穏やかな一日が私達の願いです。<br>こまくさの森では、お年寄りの人達に必要な<br>介護・看護・リハビリ等のサービスをご提供いたします。</p>
      </div>
    </header>

    <?php // 施設紹介（写真） ?>
    <div class="facility-gallery">
      <h2 class="facility-hl01 js-fin-obj">
        <span class="hl-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/ico-faci-facility.svg" alt="" class="ico-faci-facility"></span>
        施設紹介
      </h2>
      <div class="photo-gallery">
        <div class="gallery-item js-fin-obj"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/<?php echo $slug; ?>/img-gallery-komakusanomori-01.jpg" alt=""></div>
        <div class="gallery-item js-fin-obj"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/<?php echo $slug; ?>/img-gallery-komakusanomori-02.jpg" alt=""></div>
        <div class="gallery-item js-fin-obj"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/<?php echo $slug; ?>/img-gallery-komakusanomori-03.jpg" alt=""></div>
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
          <dt>グループホーム</dt>
          <dd>居室：18部屋（全個室）、食堂・居間：２部屋、台所、浴室：２部屋</dd>
          <dt>サテライト老健</dt>
          <dd>居室：13部屋（個室）、４人部屋：４部屋（多床室）、食堂・談話室、浴室：５部屋、機能訓練室、デイルーム、相談室、事務室</dd>
        </dl>
      </div>
      <?php // ご利用定員 ?>
      <div class="detail-block js-fin-obj">
        <h2 class="facility-hl02">
          <span class="hl-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/ico-faci-teiin.svg" alt="" class="ico-faci-teiin"></span>
          ご利用定員
        </h2>
        <dl class="list-type-circle">
          <dt>認知症対応型共同生活介護</dt>
          <dd>18名（２ユニット）</dd>
          <dt>サテライト老健</dt>
          <dd>29名（短期入所含む）</dd>
          <dt>通所リハビリテーション</dt>
          <dd>15名</dd>
        </dl>
      </div>
      <?php // 施設スタッフ ?>
      <div class="detail-block js-fin-obj">
        <h2 class="facility-hl02">
          <span class="hl-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/ico-faci-staff.svg" alt="" class="ico-faci-staff"></span>
          施設スタッフ
        </h2>
        <dl class="list-type-circle">
          <dd>栄養士・看護師・介護職員・理学療法士<br>作業療法士・介護支援専門員・相談員・事務員</dd>
        </dl>
      </div>
    </div>

    <div class="facility-detail facility-detail---col3">
      <h2 class="facility-hl02">
        <span class="hl-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/ico-faci-facility.svg" alt="" class="ico-faci-facility"></span>
        施設紹介
      </h2>
      <div class="detail-block js-fin-obj">
        <h3 class="detail-block-title">認知症対応型共同生活介護<span>（グループホーム）</span></h3>
        <div class="detail-block-txt">
          <p>認知症のため介護が必要になってこられた方の施設です。</p>
          <p>ご入居者の方が自宅で暮らしてこられた時と同じような環境の中で生活をしていただくように配慮し、ご利用者のペースで暮らしていただきます。</p>
          <p>ご入居者の意志を尊重し、ゆったりと、楽しく生活していただきながら、潜在能力を引き出し生活に喜び、自信、心身の安定を取り戻せるように共同生活を通して支援する事業所です。</p>
        </div>
      </div>
      <div class="detail-block js-fin-obj">
        <h3 class="detail-block-title">サテライト老健こまくさの森<span>（サテライト型小規模介護老人保健施設）</span></h3>
        <div class="detail-block-txt">
          <p>本体施設（介護老人保健施設 虹の森）との緻密な連携を確保しつつ、 施設サービス計画に基づいて、介護、医療的管理下における看護及び機能訓練その他必要な医療並びに日常生活の支援を行うことにより在宅における生活への復帰を目指す施設です。</p>
        </div>
      </div>
      <div class="detail-block js-fin-obj">
        <h3 class="detail-block-title">こまくさの森居宅支援センター<span>（居宅介護支援事業所）</span></h3>
        <div class="detail-block-txt">
          <p>介護支援専門員（ケアマネージャー）が、ご利用者に合わせたケアプラン（介護サービス計画）作成やサービス事業者の選択の支援、市役所への申請の代行、福祉用具をレンタルする支援等をご家族様と相談しながら行なわせていただきます。</p>
          <p>介護支援専門員（ケアマネージャー）に ケアプラン作成を依頼した場合の費用は介護保険から支払われ、ご本人や家族様の負担はありません。</p>
          <p>介護でお悩みの方、介護保険の利用の仕方がわからない方等ご連絡ください。</p>
        </div>
      </div>
    </div>

    <?php // MAP ?>
    <div class="facility-map js-fin-obj">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3227.4652208166162!2d138.12669961615578!3d36.00893133011933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x487389c26e2407a!2z44GT44G-44GP44GV44Gu5qOuIOOCteODhuODqeOCpOODiOiAgeWBpeOBk-OBvuOBj-OBleOBruajrg!5e0!3m2!1sja!2sjp!4v1609977102487!5m2!1sja!2sjp" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

    <?php // 施設フッター ?>
    <div class="facility-footer facility-footer---komakusanomori">
      <div class="facility-footer-info order2 js-fin-obj">
        <p class="facility-type">認知症対応型共同生活介護・サテライト老健・居宅支援事業所</p>
        <p class="facility-name">こまくさの森</p>
        <p class="facility-address">長野県諏訪市中洲豆田 5924</p>
        <p class="facility-tel">TEL <a href="tel:0266538833">0266(53)8833</a></p>
        <p class="facility-fax">FAX 0266(58)7277</p>
        <p class="facility-other"><span>介護保険事業所番号</span><span>2070600545</span></p>
      </div>
      <div class="facility-footer-info order1 js-fin-obj">
        <p class="facility-name">居宅支援事業所</p>
        <p class="facility-tel">TEL <a href="tel:0266587800">0266(58)7800</a></p>
        <p class="facility-fax">FAX 0266(58)7277</p>
      </div>
      <div class="facility-footer-info order3 js-fin-obj">
        <p class="facility-name">グループホーム</p>
        <p class="facility-tel">TEL <a href="tel:0266538811">0266(53)8811</a></p>
        <p class="facility-fax">FAX 0266(53)8815</p>
        <p class="facility-other"><span>介護保険事業所番号</span><span>2070600115</span></p>
      </div>
    </div>

  </section>

<?php get_footer(); ?>