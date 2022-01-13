<?php get_header(); ?>

<?php
  $page = get_post( get_the_ID() );
  $slug = $page->post_name;
?>
<div class="page-header page-header---facility-detail page-header---slider">
  <div class="slider-content">
    <div class="slider-item"></div>
    <div class="slider-item"></div>
    <div class="slider-item"></div>
    <div class="slider-item"></div>
  </div>
  <div class="logo-back"></div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/img-logo_mark-gold.svg" alt="" class="logo">
</div>

<main class="main-content main-content---facility-detail">

  <?php // パンくずリスト(yost seo)
  if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb( '<div class="bread-navi">','</div>' ); }
  ?>

  <section class="sec sec---facility-detail">

    <?php // 施設名とイントロ文 ?>
    <header class="facility-header facility-header---<?php echo $slug; ?>">
      <h1 class="page-title-facility">
        <span class="facility-type">医療法人 こまくさ会</span>
        <em class="facility-name">池田医院</em>
        <small class="facility-en">IKEDA CLINC</small>
      </h1>
      <div class="facility-intro js-fin-obj">
        <p>当院は1985年に開業し現在まで地域医療に密着してきました。<br>高血圧、糖尿病、脂質異常症などの生活習慣病をはじめ<br>消化器疾患、外傷など幅広い疾患に対応しており、<br>患者様が安心して受診できる環境を整えております。<br>また、連携病院と協力し皆様の健康維持に努めております。</p>
      </div>
    </header>

    <section class="sec sec---ikedaclinic_news">
      <div class="inner">
        <div class="hl-block js-fin-obj">
          <h2 class="hl04">池田医院からのお知らせ</h2>
          <div class="btn-wrap">
            <a href="<?php echo esc_url(home_url()); ?>/information/" class="btn btn---02">お知らせ一覧</a>
          </div>
        </div>
        <?php
        $ppp = 5;
        if( wp_is_mobile() ) { $ppp = 5; }
        $args = array(
          'category_name' => 'ikedaclinic_news',
          'post_type' => 'post',
          'posts_per_page' => $ppp,
        );
        $the_query = new WP_Query( $args );
        if( $the_query->have_posts() ):
        ?>
        <ul class="post-list post-list---thumbnail js-fin-obj">
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

    <section class="sec sec---full sec---facility">
      <div class="inner">
        <h2 class="facility-hl01 js-fin-obj">
          <span class="hl-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/ico-faci-kamoku.svg" alt="" class="ico-faci-kamoku"></span>
          診療科目のご案内
        </h2>
        <div class="department-wrap">
          <?php // 診療科目 ?>
          <div class="department-info">
            <?php // 項目：左 ?>
            <div class="department-main">
              <div class="department-item js-fin-obj">
                <div class="item-title">一般内科</div>
                <div class="item-data">風邪をはじめとする症状（発熱、頭痛、咳、痰など）<br>消化器症状（腹痛、吐き気、嘔吐、下痢など）<br>アレルギー症状（喘息、じんましん、鼻炎など）<br>生活習慣病に代表される慢性疾患（高血圧、糖尿病、脂質異常症など）<br>代謝性疾患（骨粗しょう症、高尿酸血症など）<br>認知症の診断から治療・サポート<br>その他、なんとなく調子が悪いといった体調不良や、どの診療科を受診したらいいかわからない場合も相談してください。</div>
              </div>
              <div class="department-item js-fin-obj">
                <div class="item-title">一般外科</div>
                <div class="item-data">鼠径ヘルニア、痔、直腸脱、床ずれの処置など。また内視鏡やCT検査、各種腫瘍マーカーを含む採血検査による胃癌、大腸癌、肝臓癌、膵臓癌、胆道癌などの消化器癌の診断。診断後は基幹病院との連携による治療計画を実施しております。</div>
              </div>
              <div class="department-item js-fin-obj">
                <div class="item-title">外傷</div>
                <div class="item-data">転倒によるケガ、止血が必要な処置。また、やけど、虫刺され、ペットに噛まれたなど<br>頭部外傷（たんこぶ、挫創）、作業をしていてトゲが刺さったなど</div>
              </div>
            </div>
            <?php // 項目：右 ?>
            <div class="department-other">
              <div class="department-item js-fin-obj">
                <div class="item-data">
                  <p>健康診断・がん検診<br>特定健診、一般健診、会社の健康診断、胃がん検診、大腸がん検診、肺がん検診、乳がん検診</p>
                  <p>人間ドック</p>
                  <p>小児定期予防接種・成人の予防接種<br>ほぼ全ての予防接種を実施しております。</p>
                  <p>居宅介護支援（ケアマネージャー）</p>
                  <p>訪問診療・往診</p>
                  <p>産業医・健康スポーツ医・学校医</p>
                </div>
                <div class="item-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/ikedaclinic/img-department01.jpg" alt=""></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="sec sec---facility">
      <div class="inner">
        <?php // 診療時間 ?>
        <h2 class="facility-hl01 js-fin-obj">
          <span class="hl-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/ico-faci-clock.svg" alt="" class="ico-faci-clock"></span>
          診療時間
        </h2>
        <div class="shinsatsu-info js-fin-obj">
          <table class="consultation">
            <thead>
              <tr>
                <th class="cell-l">時間</th>
                <th class="cell-s">月</th>
                <th class="cell-s">火</th>
                <th class="cell-s">水</th>
                <th class="cell-s">木</th>
                <th class="cell-s">金</th>
                <th class="cell-s">土</th>
                <th class="cell-s">日</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th class="cell-l">8:30 - 12:00</th>
                <td class="cell-s">○</td>
                <td class="cell-s">○</td>
                <td class="cell-s">○</td>
                <td class="cell-s">○</td>
                <td class="cell-s">○</td>
                <td class="cell-s">○</td>
                <td class="cell-s">／</td>
              </tr>
              <tr>
                <th class="cell-l">15:00 - 18:00</th>
                <td class="cell-s">○</td>
                <td class="cell-s">○</td>
                <td class="cell-s">○</td>
                <td class="cell-s">○</td>
                <td class="cell-s">○</td>
                <td class="cell-s">／</td>
                <td class="cell-s">／</td>
              </tr>
            </tbody>
          </table>
          <div class="shinsatsu-info-other">
            <div class="info-doctor">
              <p>池田 義明 医師 ：月曜日～土曜日午前</p>
              <p>池田 豊 医師 ：月曜日～木曜日</p>
              <p>【休診】　土曜日の午後 ／ 日・祭日</p>
            </div>
            <ul class="info-notice">
              <li>池田 輝明 院長外来は不定期となります。</li>
              <li>診療予約は行っておりません。診療時間内にお越しください。</li>
              <li>午前受付最終時間は11時30分、午後は17時30分までとなっております。</li>
              <li>受付時間終了後に受診を希望される場合は電話連絡してください。</li>
            </ul>
          </div>
        </div>
        <?php // 当院で実施できる検査 & お支払い ?>
        <div class="about-more-wrap js-fin-obj">
          <?php // 当院で実施できる検査 ?>
          <div class="inspection-item">
            <h2 class="facility-hl01 js-fin-obj">
              <span class="hl-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/ico-faci-kensa.svg" alt="" class="ico-faci-kensa"></span>
              当院で実施できる検査
            </h2>
            <div class="item-list">
              <ul class="list-type-circle">
                <li>採血（ほぼ全ての項目が可能）</li>
                <li>心電図　24時間（Holter）心電図</li>
                <li>レントゲン</li>
                <li>マンモグラフィー</li>
                <li>胃部X線バリウム検査、注腸検査</li>
                <li>上部消化器内視鏡（食道、胃、十二指腸）<br>※大腸内視鏡は実施しておりません。</li>
              </ul>
              <ul class="list-type-circle">
                <li>CT検査</li>
                <li>骨密度測定</li>
                <li>脈波検査（ABI）</li>
                <li>腹部超音波検査</li>
                <li>心臓超音波検査</li>
                <li>頸動脈超音波検査</li>
                <li>乳腺超音波検査</li>
                <li>眼底検査</li>
                <li>アレルゲン検査</li>
                <li>インフルエンザ抗原検査</li>
                <li>生理機能検査（呼吸機能検査、聴力検査）</li>
              </ul>
            </div>
            <p>また、さらに精密検査が必要な場合は連携病院へ紹介させていただきます。</p>
          </div>
          <?php // お支払い ?>
          <div class="payment">
            <h2 class="facility-hl01 js-fin-obj">
              <span class="hl-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/ico-faci-payment.svg" alt="" class="ico-faci-payment"></span>
              お支払い
            </h2>
            <p>当院では、診療費のお支払いにクレジットカード及び<br>QR決済をご利用いただけます。</p>
            <div class="payment-card">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/ikedaclinic/img-card.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php // 医療設備 ?>
    <div class="facility-gallery">
      <h2 class="facility-hl01 js-fin-obj">
        <span class="hl-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/ico-faci-setsubi2.svg" alt="" class="ico-faci-setsubi2"></span>
        医療設備
      </h2>
      <div class="photo-gallery2 js-fin-obj">
        <div class="gallery-item">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/<?php echo $slug; ?>/img-gallery-01.jpg" alt="超音波検査装置">
          <p>超音波検査装置</p>
        </div>
        <div class="gallery-item">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/<?php echo $slug; ?>/img-gallery-02.jpg" alt="ヘリカルCT">
          <p>ヘリカルCT</p>
        </div>
        <div class="gallery-item">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/<?php echo $slug; ?>/img-gallery-03.jpg" alt="ヘリカルCT">
          <p>ヘリカルCT</p>
        </div>
        <div class="gallery-item">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/<?php echo $slug; ?>/img-gallery-04.jpg" alt="内視鏡装置">
          <p>内視鏡装置</p>
        </div>
        <div class="gallery-item">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/<?php echo $slug; ?>/img-gallery-05.jpg" alt="消化器用レントゲン器機">
          <p>消化器用レントゲン器機</p>
        </div>
        <div class="gallery-item">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/<?php echo $slug; ?>/img-gallery-06.jpg" alt="マンモグラフィ">
          <p>マンモグラフィ</p>
        </div>
      </div>
    </div>

    <?php // 医師紹介 ?>
    <section class="sec sec---full sec---facility">
      <div class="inner">
        <h2 class="facility-hl01 js-fin-obj">
          <span class="hl-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/ico-faci-doctor.svg" alt="" class="ico-faci-doctor"></span>
          医師紹介
        </h2>
        <div class="doctor-list">
          <div class="doctor js-fin-obj">
            <div class="doctor-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/<?php echo $slug; ?>/img-doctor-01.jpg" alt="理事長・院長 池田 輝明"></div>
            <div class="doctor-position">理事長・院長</div>
            <div class="doctor-name">池田 輝明</div>
            <div class="doctor-info">内科・外科・消化器科</div>
          </div>
          <div class="doctor js-fin-obj">
            <div class="doctor-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/<?php echo $slug; ?>/img-doctor-02.jpg" alt="副院長 池田 義明"></div>
            <div class="doctor-position">副院長</div>
            <div class="doctor-name">池田 義明</div>
            <div class="doctor-info">内科・外科<br>月曜日～土曜日午前</div>
          </div>
          <div class="doctor js-fin-obj">
            <div class="doctor-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facility/<?php echo $slug; ?>/img-doctor-03.jpg" alt="副院長 池田 豊"></div>
            <div class="doctor-position">副院長</div>
            <div class="doctor-name">池田 豊</div>
            <div class="doctor-info">内科・外科<br>月曜日～木曜日</div>
          </div>
        </div>
      </div>
    </section>

    <?php // MAP ?>
    <div class="facility-map js-fin-obj">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12912.316867016152!2d138.1360229042159!3d35.99393098002494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601c572e255ac62f%3A0x410f2d5f6f13593!2z5rGg55Sw5Yy76Zmi!5e0!3m2!1sja!2sjp!4v1610019713956!5m2!1sja!2sjp" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

    <?php // 施設フッター ?>
    <div class="facility-footer facility-footer---<?php echo $slug; ?>">
      <div class="facility-footer-info js-fin-obj">
        <p class="facility-name">池田医院</p>
        <p class="facility-address">長野県茅野市ちの2808-1</p>
        <p class="facility-tel">TEL <a href="tel:0266730555">0266(73)0555</a></p>
        <p class="facility-fax">FAX 0266(73)6863</p>
      </div>
      <div class="facility-footer-info js-fin-obj">
        <p class="facility-name">池田医院<br>居宅介護支援事業所</p>
        <p class="facility-address">長野県茅野市ちの2808-1</p>
        <p class="facility-tel">TEL <a href="tel:0266730666">0266(73)0666</a></p>
        <p class="facility-fax">FAX 0266(73)0661</p>
      </div>
    </div>

  </section>

<?php get_footer(); ?>