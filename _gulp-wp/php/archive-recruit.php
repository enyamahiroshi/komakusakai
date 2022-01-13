<?php get_header(); ?>

<header class="page-header page-header---recruit">
  <h1 class="page-title"><small class="ff-en">RECRUIT</small>採用情報</h1>
</header>

<main class="main-content">

  <?php // パンくずリスト(yost seo)
  if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb( '<div class="bread-navi">','</div>' ); }
  ?>

  <section class="sec sec---recruit">
		<div class="inner">
      <h2 class="recruit-title">募集内容</h2>
      <?php if (have_posts()) : ?>
      <ul class="recruit-list">
        <?php //ループ ?>
        <?php while (have_posts()) : the_post(); ?>
        <?php
        $pdfTitle = get_field('pdf_title');
        $pdfFile  = get_field('pdf_file');
        ?>
        <li class="list-item">
          <div class="post-title"><?php the_title(); ?></div>
          <div class="post-body">
            <?php the_content(); ?>
            <?php if($pdfFile): ?>
            <a href="<?php echo $pdfFile; ?>" target="_blank" class="pdf-link">→ <?php if($pdfTitle){ echo $pdfTitle; } else { echo '募集要項詳細'; } ?>（PDF）</a>
            <?php endif; ?>
          </div>
        </li>
        <?php endwhile; ?>
      </ul>
      <?php endif; ?>

      <?php // ページナビ
      if(function_exists('wp_pagenavi')): wp_pagenavi(); endif; ?>

      <div class="btn-wrap-large js-fin-obj">
        <a href="../entry/" class="btn btn---05">募集に応募する</a>
      </div>

    </div>
	</section>

<?php get_footer(); ?>