<?php get_header(); ?>

<?php
  $page = get_post( get_the_ID() );
  $slug = $page->post_name;
?>
<header class="page-header page-header---<?php echo $slug; ?>">
  <h1 class="page-title ff-min"><small class="ff-en">ABOUT US</small><?php echo the_title(); ?></h1>
  <div class="page-header-image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/aboutus/img-page-header.png" alt=""></div>
  <section class="aboutus-vision">
    <h2>こまくさグループ基本理念</h2>
    <p>医療・介護・福祉・教育の諸活動を通じて地域社会に貢献をしていきます。<br>利用者本位のサービスを心がけ、笑顔を忘れず<br>「優しさと暖かさ」のあるサービスを提供していきます。<br>質の高いサービスの提供を目指します。</p>
  </section>
</header>

<main class="main-content">

  <?php // パンくずリスト(yost seo)
  if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb( '<div class="bread-navi">','</div>' ); }
  ?>


  <section class="sec">
    <div class="inner">
      <?php // ごあいさつ ?>
      <div class="block-message js-fin-obj">
        <div class="message-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/aboutus/img-message.jpg" alt=""></div>
        <div class="message-data">
          <h2 class="hl02"><small>MESSAGE</small>ごあいさつ</h2>
          <p class="message-txt">こまくさ会は、医療・介護・福祉・教育の面で諏訪の地域に貢献すべく1996年（平成8年）より施設を運営してまいりました。私自身は、学生時代に全共闘運動などの学生運動を実践する中で地域医療を展望し、1975年（昭和50年）に信州大学卒業後、諏訪中央病院の勤務を経て、地域医療の実践の場としてこの地に根差していくことになりました。病院での医療とは全くの別物である在宅医療の現場を見るにつけ、施設を運営し、充実させ、在宅での医療、介護を支援していく必要性をさらに感じていました。そこで介護老人保健施設、特別養護老人ホーム、認知症のためのグループホームなどを運営し、地域の住民のためになることを少しずつ展開していくこととしました。医療だけでなく、介護や福祉の面でも専門的な知識が必要で、地域の医療や介護がより充実していくために、これからも利用者の要望に沿った支援を行っていきたいと考えております。今後とも何卒地域の皆様のご協力の程よろしくお願いいたします。</p>
          <p class="message-sign"><small>理事長</small>池田 輝明</p>
        </div>
      </div>
      <?php // 沿革 ?>
      <div class="block-history js-fin-obj">
        <h2 class="hl02"><small>HISTORY</small>沿革</h2>
        <div class="item-history">
          <div class="history-label">1985年</div>
          <div class="history-data">
            <p>池田医院運営</p>
          </div>
        </div>
        <div class="item-history">
          <div class="history-label">1988年</div>
          <div class="history-data">
            <p>医療法人 こまくさ会　設立</p>
          </div>
        </div>
        <div class="item-history">
          <div class="history-label">1989年</div>
          <div class="history-data">
            <p>介護老人保健施設「虹の森」開設　50床</p>
            <p>訪問看護ステーション「こまくさ」、訪問介護ステーション「ケアこまくさ」開設</p>
          </div>
        </div>
        <div class="item-history">
          <div class="history-label">2000年</div>
          <div class="history-data">
            <p>介護保険法成立後、居宅介護支援事業所設立</p>
            <p>認知症グループホーム「こまくさの森」開設</p>
          </div>
        </div>
        <div class="item-history">
          <div class="history-label">2002年</div>
          <div class="history-data">
            <p>「虹の森」50床増床　合計100床での運営開始</p>
          </div>
        </div>
        <div class="item-history">
          <div class="history-label">2004年</div>
          <div class="history-data">
            <p>社会福祉法人 こまくさ福祉会設立</p>
          </div>
        </div>
        <div class="item-history">
          <div class="history-label">2005年</div>
          <div class="history-data">
            <p>特別養護老人ホーム「白駒の森」設立　77床</p>
          </div>
        </div>
        <div class="item-history">
          <div class="history-label">2006年</div>
          <div class="history-data">
            <p>サテライト老人保健施設「こまくさの森」設立　29床</p>
            <p>デイケアを併設、グループホーム増床18床へ</p>
          </div>
        </div>
        <div class="item-history">
          <div class="history-label">2012年</div>
          <div class="history-data">
            <p>特別養護老人ホーム「ふくろうの森」開設　100床</p>
          </div>
        </div>
        <div class="item-history">
          <div class="history-label">2016年</div>
          <div class="history-data">
            <p>有料老人ホーム「テラスの森諏訪湖」開設　60床</p>
          </div>
        </div>
        <div class="item-history">
          <div class="history-label">2017年</div>
          <div class="history-data">
            <p>地域密着型特別養護老人ホーム「うぐいすの森」開設　40床</p>
            <p>障害者のための施設自立支援事業所B型　開設</p>
          </div>
        </div>
      </div>
      <?php // 情報公開 ?>
      <div class="corporate-information js-fin-obj">
        <h2 class="hl03"><span class="icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon/ico-001.svg" alt="" class="ico-001"></span>情報公開</h2>
        <p>全国社会福祉法人経営者協議会にて法人情報を開示しております。<br>現況報告書・財務情報報告・監査報告書は、<a href="https://www.keieikyo.com/" target="_blank" class="link01">こちら</a> からご覧ください。<br>社会福祉法人こまくさ福祉会　役員等報酬規程・役員名簿は、<a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/download/yakuinn.docx" class="link01">こちら（word ファイル）</a>からご覧ください。</p>
      </div>
    </div>
  </section>

<?php get_footer(); ?>