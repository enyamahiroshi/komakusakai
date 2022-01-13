<?php get_header(); ?>

<?php
  $page = get_post( get_the_ID() );
  $slug = $page->post_name;
?>
<header class="page-header page-header---<?php echo $slug; ?>">
  <h1 class="page-title"><small class="ff-en">FACILITY</small><?php echo the_title(); ?></h1>
</header>

<main class="main-content main-content---facility">

  <?php // パンくずリスト(yost seo)
  if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb( '<div class="bread-navi">','</div>' ); }
  ?>

  <section class="sec sec---facility-list">
    <div class="inner">
      <ul class="facility-list">
        <?php // 池田医院 ?>
        <li class="facility-item js-fin-obj">
          <a href="<?php echo esc_url(home_url()); ?>/facility/ikedaclinic/" class="facility-link">
            <div class="facility-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/ikedaclinic/img-gaikan-m.jpg" alt="池田医院　外観"></div>
            <div class="facility-data-group">
              <div class="facility-data">
                <p class="facility-type">内科・外科・消化器科・居宅介護支援事業所</p>
                <p class="facility-name">池田医院</p>
                <div class="facility-more">
                  <div class="more-add">長野県茅野市ちの2808-1</div><div class="more-tel">TEL 0266(73)0555</div><div class="more-fax">FAX 0266(73)6863</div>
                </div>
              </div>
            </div>
          </a>
        </li>
        <?php // 虹の森・こまくさの森 ?>
        <li class="facility-item js-fin-obj">
          <a href="<?php echo esc_url(home_url()); ?>/facility/nijinomori_komakusanomori/" class="facility-link">
            <div class="facility-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/nijinomori_komakusanomori/img-gaikan-m.jpg" alt="虹の森・こまくさの森　外観"></div>
            <div class="facility-data-group">
              <div class="facility-data">
                <p class="facility-type">介護老人保健施設・通所リハビリテーション</p>
                <p class="facility-name">虹の森</p>
                <div class="facility-more">
                  <div class="more-add">長野県茅野市ちの3094-6</div><div class="more-tel">TEL 0266(73)2000</div><div class="more-fax">FAX 0266(73)2211</div>
                </div>
              </div>
              <div class="facility-data">
                <p class="facility-type">認知症対応型共同生活介護・サテライト老健・居宅支援事業所</p>
                <p class="facility-name">こまくさの森</p>
                <div class="facility-more">
                  <div class="more-add">長野県諏訪市中洲豆田 5924</div><div class="more-tel">TEL 0266(58)7800</div><div class="more-fax">FAX 0266(58)7277</div>
                </div>
              </div>
            </div>
          </a>
        </li>
        <?php // テラスの森 諏訪湖 ?>
        <li class="facility-item js-fin-obj">
          <a href="<?php echo esc_url(home_url()); ?>/facility/terracenomori_suwako/" class="facility-link">
            <div class="facility-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/terracenomori_suwako/img-gaikan-m.jpg" alt="テラスの森 諏訪湖　外観"></div>
            <div class="facility-data-group">
              <div class="facility-data">
                <p class="facility-type">住宅型有料老人ホーム</p>
                <p class="facility-name">テラスの森 諏訪湖</p>
                <div class="facility-more">
                  <div class="more-add">長野県諏訪郡下諏訪町高木10616-10番地</div><div class="more-tel">TEL 0266(26)2000</div><div class="more-fax">FAX 0266(26)2005</div>
                </div>
              </div>
            </div>
          </a>
        </li>
        <?php // 白駒の森 ?>
        <li class="facility-item js-fin-obj">
          <a href="<?php echo esc_url(home_url()); ?>/facility/shirakomanomori/" class="facility-link">
            <div class="facility-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/shirakomanomori/img-gaikan-m.jpg" alt="白駒の森　外観"></div>
            <div class="facility-data-group">
              <div class="facility-data">
                <p class="facility-type">特別養護老人ホーム・地域密着型通所介護</p>
                <p class="facility-name">白駒の森</p>
                <div class="facility-more">
                  <div class="more-add">長野県茅野市ちの3000-1</div><div class="more-tel">TEL 0266(82)7500</div><div class="more-fax">FAX 0266(82)7575</div>
                </div>
              </div>
            </div>
          </a>
        </li>
        <?php // ふくろうの森 ?>
        <li class="facility-item js-fin-obj">
          <a href="<?php echo esc_url(home_url()); ?>/facility/fukurounomori/" class="facility-link">
            <div class="facility-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/fukurounomori/img-gaikan-m.jpg" alt="ふくろうの森　外観"></div>
            <div class="facility-data-group">
              <div class="facility-data">
                <p class="facility-type">特別養護老人ホーム</p>
                <p class="facility-name">ふくろうの森</p>
                <div class="facility-more">
                  <div class="more-add">長野県諏訪市四賀(飯島）2398-1</div><div class="more-tel">TEL 0266(53)5577</div><div class="more-fax">FAX 0266(54)2255</div>
                </div>
              </div>
            </div>
          </a>
        </li>
        <?php // うぐいすの森 ?>
        <li class="facility-item js-fin-obj">
          <a href="<?php echo esc_url(home_url()); ?>/facility/uguisunomori/" class="facility-link">
            <div class="facility-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/uguisunomori/img-gaikan-m.jpg" alt="うぐいすの森　外観"></div>
            <div class="facility-data-group">
              <div class="facility-data facility-data---l">
                <p class="facility-type">地域密着型介護老人福祉施設・<br>ショートステイ・就労支援B型事業</p>
                <p class="facility-name">うぐいすの森</p>
                <div class="facility-more">
                  <div class="more-add">長野県諏訪市沖田町４丁目２-１</div><div class="more-tel">TEL 0266(75)1212</div><div class="more-fax">FAX 0266(75)1222</div>
                </div>
              </div>
            </div>
          </a>
        </li>
      </ul>

      <div class="btn-wrap-large js-fin-obj">
        <a href="./etc/" class="btn btn---04">関連事業</a>
      </div>

    </div>
  </section>

<?php get_footer(); ?>