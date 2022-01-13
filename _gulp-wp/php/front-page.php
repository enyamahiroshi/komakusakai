<?php get_header(); ?>

<header class="page-header page-header---home">
  <?php // カスタム投稿タイプ：バナーの表示
  $args = array(
    'post_type' => 'banner',
    'posts_per_page' => 1
  );
  ?>
  <h1 class="page-title<?php
    $the_query = new WP_Query( $args );
    if( $the_query->have_posts() ){
      echo ' has-banner';
    } ?>">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/img-logo-page-header.png" alt="こまくさグループ">
  </h1>
  <?php // カスタム投稿タイプ：バナーの表示
  if( $the_query->have_posts() ):
  ?>
  <?php while( $the_query->have_posts() ): $the_query->the_post(); ?>
  <?php
  $bnrLink = get_field('cf_banner_link');
  $bnrColor = get_field('cf_banner_border');
  ?>
  <div class="announce-banner">
    <a href="<?php echo $bnrLink; ?>" class="announce-banner-link color-<?php echo $bnrColor; ?>"><?php the_title(); ?></a>
  </div>
  <?php endwhile; endif; wp_reset_postdata(); ?>
  <section class="facility-info">
    <ul class="facility-info-list">
      <?php // 池田医院 ?>
      <li class="facility-item">
        <a href="<?php echo esc_url(home_url()); ?>/facility/ikedaclinic/" class="facility-link">
          <div class="facility-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/ikedaclinic/img-gaikan-s.jpg" alt="池田医院　外観"><div class="logo-komakusa_kai"></div></div>
          <div class="facility-data">
            <p class="facility-group">医療法人 こまくさ会</p>
            <p class="facility-type">内科・外科・消化器科<br>居宅介護支援事業所</p>
            <p class="facility-name">池田医院</p>
          </div>
        </a>
      </li>
      <?php // 虹の森・こまくさの森 ?>
      <li class="facility-item">
        <a href="<?php echo esc_url(home_url()); ?>/facility/nijinomori_komakusanomori/" class="facility-link">
          <div class="facility-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/nijinomori_komakusanomori/img-gaikan-s.jpg" alt="虹の森・こまくさの森　外観"><div class="logo-komakusa_kai"></div></div>
          <div class="facility-data">
            <p class="facility-group">医療法人 こまくさ会</p>
            <p class="facility-type">介護老人保健施設<br>グループホーム・サテライト</p>
            <p class="facility-name">虹の森・こまくさの森</p>
          </div>
        </a>
      </li>
      <?php // テラスの森 諏訪湖 ?>
      <li class="facility-item">
        <a href="<?php echo esc_url(home_url()); ?>/facility/terracenomori_suwako/" class="facility-link">
          <div class="facility-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/terracenomori_suwako/img-gaikan-s.jpg" alt="テラスの森 諏訪湖　外観"><div class="logo-komakusa_kai"></div></div>
          <div class="facility-data">
            <p class="facility-group">医療法人 こまくさ会</p>
            <p class="facility-type">住宅型有料老人ホーム</p>
            <p class="facility-name">テラスの森 諏訪湖</p>
          </div>
        </a>
      </li>
      <?php // 白駒の森 ?>
      <li class="facility-item">
        <a href="<?php echo esc_url(home_url()); ?>/facility/shirakomanomori/" class="facility-link">
          <div class="facility-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/shirakomanomori/img-gaikan-s.jpg" alt="白駒の森　外観"><div class="logo-komakusafukushi_kai"></div></div>
          <div class="facility-data">
            <p class="facility-group">社会福祉法人 こまくさ福祉会</p>
            <p class="facility-type">特別養護老人ホーム<br>地域密着型通所介護</p>
            <p class="facility-name">白駒の森</p>
          </div>
        </a>
      </li>
      <?php // ふくろうの森 ?>
      <li class="facility-item">
        <a href="<?php echo esc_url(home_url()); ?>/facility/fukurounomori/" class="facility-link">
          <div class="facility-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/fukurounomori/img-gaikan-s.jpg" alt="ふくろうの森　外観"><div class="logo-komakusafukushi_kai"></div></div>
          <div class="facility-data">
            <p class="facility-group">社会福祉法人 こまくさ福祉会</p>
            <p class="facility-type">特別養護老人ホーム</p>
            <p class="facility-name">ふくろうの森</p>
          </div>
        </a>
      </li>
      <?php // うぐいすの森 ?>
      <li class="facility-item">
        <a href="<?php echo esc_url(home_url()); ?>/facility/uguisunomori/" class="facility-link">
          <div class="facility-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/uguisunomori/img-gaikan-s.jpg" alt="うぐいすの森　外観"><div class="logo-komakusafukushi_kai"></div></div>
          <div class="facility-data">
            <p class="facility-group">社会福祉法人 こまくさ福祉会</p>
            <p class="facility-type">地域密着型介護老人福祉施設<br>ショートステイ・就労支援B型事業</p>
            <p class="facility-name">うぐいすの森</p>
          </div>
        </a>
      </li>
    </ul>
    <div class="btn-wrap">
      <a href="<?php echo esc_url(home_url()); ?>/facility/etc/" class="btn btn---01">関連事業</a>
    </div>
  </section>
  <span class="bg-g"></span>
</header>

<main class="main-content">

  <section class="sec sec---information js-fin-obj">
    <div class="inner">
      <div class="hl-block">
        <h2 class="hl01">INFORMATION</h2>
        <div class="btn-wrap">
          <a href="<?php echo esc_url(home_url()); ?>/information/" class="btn btn---02">お知らせ一覧</a>
        </div>
      </div>
      <?php
      $ppp = 5;
      if( wp_is_mobile() ) { $ppp = 5; }
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => $ppp,
      );
      $the_query = new WP_Query( $args );
      if( $the_query->have_posts() ):
      ?>
      <ul class="post-list post-list---thumbnail">
        <?php
        while( $the_query->have_posts() ): $the_query->the_post();
        $thumburl = get_the_post_thumbnail_url(get_the_ID(), 'medium');
        $category = get_the_category();
        $cat_name = $category[0]->cat_name;
        $cat_slug = $category[0]->category_nicename;
        $cat_ID = 'category_'.$category[0]->cat_ID;
        $cat_color = get_field('cf_catecolor',$cat_ID);
        ?>
        <li class="list-item">
          <a href="<?php the_permalink(); ?>" class="post-link">
            <div class="post-img" style="background-image: url(<?php echo $thumburl; ?>)"></div>
            <div class="post-data">
              <div class="post-date"><?php the_time('Y.m.d'); ?></div>
              <div class="post-cat post-cat---<?php echo $cat_slug; ?> post-cat-color-<?php echo $cat_color; ?>"><?php echo $cat_name; ?></div>
              <p class="post-title"><?php the_title(); ?></p>
            </div>
          </a>
        </li>
        <?php endwhile; ?>
      </ul>
      <?php endif; wp_reset_postdata(); ?>
    </div>
  </section>

  <section class="sec sec---induction">
    <div class="inner">
      <div class="recruit-info js-fin-obj">
        <div class="info-block">
          <span>RECRUIT</span>
          <em>採用情報</em>
          <div class="btn-wrap">
            <a href="<?php echo esc_url(home_url()); ?>/recruit/" class="btn btn---03">詳しく</a>
          </div>
        </div>
      </div>
      <div class="btn-wrap-large js-fin-obj">
        <a href="<?php echo esc_url(home_url()); ?>/aboutus/" class="btn btn---04">当グループについて</a>
      </div>
    </div>
  </section>

<?php get_footer(); ?>