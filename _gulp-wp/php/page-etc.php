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
        <span class="facility-type">医療法人 こまくさ会</span>
        <em class="facility-name">その他 施設</em>
        <small class="facility-en">ANOTHER FACILITY</small>
      </h1>
      <div class="anchor-link">
        <a href="#komakusa" class="item-link js-fin-obj">
          <p class="item-sub-title">訪問看護ステーション</p>
          <p class="item-title">こまくさ</p>
        </a>
        <a href="#care_komakusa" class="item-link js-fin-obj">
          <p class="item-sub-title">ヘルパーステーション</p>
          <p class="item-title">ケア こまくさ</p>
        </a>
        <a href="#komakusa_room" class="item-link js-fin-obj">
          <p class="item-sub-title">フリースペース</p>
          <p class="item-title">こまくさルーム</p>
        </a>
      </div>
    </header>
  </section>

  <?php // こまくさ ?>
  <section id="komakusa" class="sec sec---facility-detail sec---facility-detail-etc">

    <h2 class="facility-hl01 js-fin-obj">
      <span class="hl-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/img-logo_mark-purple.svg" alt="" class="ico-logo_mark"></span>
      <small>訪問看護ステーション</small>こまくさ
    </h2>

    <?php // 詳細リスト ?>
    <div class="facility-detail facility-detail---col2">
      <div class="detail-block js-fin-obj">
        <h2 class="facility-hl02">訪問看護を受けられる方</h2>
        <ul class="list-type-num">
          <li>70歳以上で寝たきりの方または、寝たきりになる心配のある方。</li>
          <li>65歳以上で、病気や事故で寝たきりまたは、寝たきりになる心配のある方。</li>
          <li>年齢に関係なく、ご家庭で寝たきりの状態にある難病患者や重度障害の方、働き盛りで脳卒中などで倒れて寝たきりになった方。</li>
        </ul>
      </div>
      <div class="detail-block js-fin-obj">
        <h2 class="facility-hl02">サービス内容</h2>
        <ul class="list-type-num">
          <li>心と体の健康チェックと相談</li>
          <li>日常生活のお世話</li>
          <li>リハビリテーション</li>
          <li>認知症のケアと相談</li>
          <li>療養生活や介護方法の指導と相談</li>
          <li>主治医の指示による看護全般</li>
        </ul>
      </div>
      <div class="detail-block js-fin-obj">
        <h2 class="facility-hl02">訪問の費用</h2>
        <dl class="list-type-circle">
          <dt>利用料</dt>
          <dd>介護保険の告示額</dd>
          <dt>訪問日</dt>
          <dd>月曜日から土曜日</dd>
          <dt>時間</dt>
          <dd>午前９時から午後４時まで</dd>
          <dt>訪問回数</dt>
          <dd>主治医の指示により回数が決まります。</dd>
          <dt>訪問時間</dt>
          <dd>30分から１時間半程度（ 時間外の対応もいたします ）</dd>
        </dl>
      </div>
      <div class="detail-block js-fin-obj">
        <h2 class="facility-hl02">訪問看護の申し込み方法</h2>
        <ul class="list-type-kome">
          <li>かかりつけの主治医の先生に、ご相談してください。</li>
          <li>居宅介護支援事業所に、ご相談してください。</li>
          <li>かかりつけの医師と居宅介護支援事業所との連携をはかり、指示内容にそって、きめ細 かな訪問看護を行います。</li>
        </ul>
      </div>
    </div>

    <?php // MAP ?>
    <div class="facility-map js-fin-obj">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1614.045374650304!2d138.14934575651833!3d35.993649180122674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601c572f83d4fa2b%3A0x839f6b5f10ecfe1!2z44CSMzkxLTAwMDEg6ZW36YeO55yM6IyF6YeO5biC44Gh44Gu5qiq5YaF77yT77yQ77yZ77yU!5e0!3m2!1sja!2sjp!4v1609991968470!5m2!1sja!2sjp" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

    <?php // 施設フッター ?>
    <div class="facility-footer facility-footer---etc1">
      <div class="facility-footer-info js-fin-obj">
        <p class="facility-address">長野県茅野市ちの3094-1</p>
        <p class="facility-tel">TEL <a href="tel:0266820500">0266(82)0500</a></p>
        <p class="facility-other"><span>介護保険事業所番号</span><span>2061490021</span></p>
      </div>
    </div>

  </section>

  <?php // ケア こまくさ ?>
  <section id="care_komakusa" class="sec sec---facility-detail sec---facility-detail-etc">

    <h2 class="facility-hl01 js-fin-obj">
      <span class="hl-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/img-logo_mark-purple.svg" alt="" class="ico-logo_mark"></span>
      <small>ヘルパーステーション</small>ケア こまくさ
    </h2>

    <?php // 詳細リスト ?>
    <div class="facility-detail facility-detail---full">
      <div class="detail-block js-fin-obj">
        <h3 class="facility-hl02">施設紹介</h3>
        <div class="detail-block-txt">
          <p>私達は、家庭で療養している方々の支援をいたします。「ケア こまくさ」では、何らかの障害があって家庭で療養されている高齢者のために家事支援、 介護サービスを実施しています。退院したり施設を退所された方が家庭で穏やかに一日を過ごすためのサービスです。入院した後、家庭で介護する事に不安をお持ちの方は気軽にご相談ください。</p>
        </div>
      </div>
    </div>

    <div class="facility-detail facility-detail---col3">
      <div class="detail-block js-fin-obj">
        <h3 class="facility-hl02">家事援助サービス</h3>
        <div class="detail-block-txt">
          <p>家庭での掃除、洗濯、炊事などの家事の支援を、散歩などの支援をいたします。</p>
        </div>
      </div>
      <div class="detail-block js-fin-obj">
        <h3 class="facility-hl02">身体介護サービス</h3>
        <div class="detail-block-txt">
          <p>家庭での体位交換、おむつ交換、入浴介助、食事介助などの介護の支援をいたします。</p>
        </div>
      </div>
      <div class="detail-block js-fin-obj">
        <h3 class="facility-hl02">料金</h3>
        <div class="detail-block-txt">
          <p>介護保険の告示の金額となります。</p>
        </div>
      </div>
    </div>

    <?php // MAP ?>
    <div class="facility-map js-fin-obj">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1614.045634216005!2d138.14939947615468!3d35.99363649500624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601c572f83d4fa2b%3A0xcd747ba9361e98e1!2z44CSMzkxLTAwMDEg6ZW36YeO55yM6IyF6YeO5biC44Gh44Gu5qiq5YaF77yT77yQ77yZ77yU4oiS77yW!5e0!3m2!1sja!2sjp!4v1609996002325!5m2!1sja!2sjp" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

    <?php // 施設フッター ?>
    <div class="facility-footer facility-footer---etc2">
      <div class="facility-footer-info js-fin-obj">
        <p class="facility-address">長野県茅野市ちの3094-6</p>
        <p class="facility-tel">TEL <a href="tel:08048007934">080(4800)7934</a></p>
        <p class="facility-other"><span>介護保険事業所番号</span><span>2071400028</span></p>
      </div>
    </div>

  </section>

  <?php // こまくさルーム ?>
  <section id="komakusa_room" class="sec sec---facility-detail sec---facility-detail-etc">

    <h2 class="facility-hl01 js-fin-obj">
      <span class="hl-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/img-logo_mark-purple.svg" alt="" class="ico-logo_mark"></span>
      <small>フリースペース</small>こまくさルーム
    </h2>

    <?php // 詳細リスト ?>
    <div class="facility-detail facility-detail---full">
      <div class="detail-block js-fin-obj">
        <h3 class="facility-hl02">施設紹介</h3>
        <div class="detail-block-txt">
          <p>こまくさルームは、不登校やひきこもりのお子さん、又そのご家族の精神的ケア、支援できる場所として開設されました。同じ悩みを抱える親同士の交流の場として、又、子供さんの意志が尊重され自分らしい生き方が見つけ出していけるよう一緒に考えていきたいと思っています。</p>
        </div>
      </div>
    </div>

    <div class="facility-detail facility-detail">
      <div class="detail-block js-fin-obj">
        <h3 class="facility-hl02">不登校やひきこもりなどで、困っておられるご家族の方へ</h3>
        <div class="detail-block-txt">
          <p>私達、医療法人こまくさ会では、いじめなどの理由で学校に行かれない子供さん達や社会になかなか溶け込めない方達のためにフリースペースを設けています。<br>家族ではお互いに息が詰まってなかなか打ち解けて話す事ができなかったり、学校では緊張してなかなか自分をだすことができない方達のために少しでも気分を和らげてもらい、自分自身を取り戻し、自信を持って生きていけるように少しでも支援をしていきたいと考えています。<br>子供達のために居場所を提供し、安心できるスタッフとの精神的な交流を通じて少しでも自立した生活ができるよう支援をしていきます。自由でゆったりとした時間を持つことができるようにいたします。<br>疲れた心や傷ついた心が少しでも癒されるようにスタッフとともに協力して実施していきます。気軽に相談してください。</p>
        </div>
      </div>
    </div>

    <?php // MAP ?>
    <div class="facility-map js-fin-obj">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1614.0545024966068!2d138.15180767615473!3d35.993203095006216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601c572e30710cb9%3A0xeecefeec4e8d03bf!2z44CSMzkxLTAwMDEg6ZW36YeO55yM6IyF6YeO5biC44Gh44Gu6IyF6YeO55S677yT77yV77yV77yQ!5e0!3m2!1sja!2sjp!4v1609996466378!5m2!1sja!2sjp" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

    <?php // 施設フッター ?>
    <div class="facility-footer facility-footer---etc3">
      <div class="facility-footer-info js-fin-obj">
        <p class="facility-address">長野県茅野市ちの3550-3</p>
        <p class="facility-tel">TEL <a href="tel:0266827175">0266(82)7175</a></p>
        <p class="facility-other"><span>介護保険事業所番号</span><span>2071400028</span></p>
      </div>
    </div>

  </section>

<?php get_footer(); ?>