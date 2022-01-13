<?php get_header(); ?>

<?php
  $page = get_post( get_the_ID() );
  $slug = $page->post_name;
?>
<header class="page-header page-header---<?php echo $slug; ?>">
  <h1 class="page-title"><small class="ff-en"><?php echo $slug; ?></small><?php echo the_title(); ?></h1>
</header>

<main class="main-content">

  <section class="sec">
    <div class="inner">
      <h2 class="sub-title">当社の特徴</h2>
      <div class="block-layout1">
        <div class="bl-txt">
          <p>当社は通常の処方せん調剤業務に加え、在宅服薬指導等を積極的に行い地域医療連携に努めています。<br>在宅服薬指導では、患者さまの最新のバイタル情報等を処方医に提供し、共同薬物治療管理（CDTM）を実施しています。</p>
        </div>
        <div class="bl-img"><img class="img-radius" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/policy/img-1.jpg"></div>
      </div>
    </div>
  </section>

  <section class="sec sec---medium">
    <div class="inner">
      <h2 class="sub-title">社員教育等</h2>
      <dl class="list-type3">
        <dt>社員研修</dt>
        <dd>
          <p>定期研修：保険調剤について年２回実施<br>随時研修：医薬品情報等について年６回程度実施</p>
        </dd>
        <dt>新人研修（マンツーマン）</dt>
        <dd>
          一カ月間保険業務研修を行う。配属後、指導薬剤師のもと1年間実務を通じて研修しています。
          <div class="sep-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/policy/img-2.jpg">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/policy/img-3.jpg">
          </div>
          <div class="related-entry">
            <h3>関連記事</h3>
            <ul>
              <li><a href="<?php echo esc_url(home_url()); ?>/外部講師による社員研修会「守る・補う・育む-ス/"><span class="post-date">2019.10.04</span><h4>外部講師による社員研修会「守る・補う・育む スキンケア」</h4></a></li>
              <li><a href="<?php echo esc_url(home_url()); ?>/外部講師による社員研修会「メンタルケアと音楽/"><span class="post-date">2018.02.20</span><h4>外部講師による社員研修会「メンタルケアと音楽療法」</h4></a></li>
            </ul>
          </div>
        </dd>
        <dt>研究等</dt>
        <dd>
          <p>臨床現場で遭遇する課題についての研究を行い、学会等で発表しています。<br>希望者には、保険薬局の各種業務に係る研究の機会を与えています。<br>必要に応じ大学等の研修機関との共同研究も実施します。<br>学会発表や原著論文（査読者有）投稿も行い、スキルアップをはかっています。</p>
          <div class="related-entry">
            <h3>関連記事</h3>
            <ul>
              <li><a href="<?php echo esc_url(home_url()); ?>/第22回日本地域薬局薬学会/"><span class="post-date">2018.07.08</span><h4>第22回日本地域薬局薬学会（@昭和薬科大学）</h4></a></li>
              <li><a href="<?php echo esc_url(home_url()); ?>/第21回日本地域薬局薬学会で口頭発表を行いました/"><span class="post-date">2017.07.23</span><h4>第21回日本地域薬局薬学会で口頭発表を行いました（@武蔵野大学有明キャンパス）</h4></a></li>
            </ul>
          </div>
        </dd>
      </dl>
    </div>
  </section>

<?php get_footer(); ?>