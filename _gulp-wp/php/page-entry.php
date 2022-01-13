<?php get_header(); ?>

<header class="page-header page-header---entryform">
  <h1 class="page-title"><small class="ff-en">ENTRY</small>エントリー</h1>
</header>

<main class="main-content">

  <?php // パンくずリスト(yost seo)
  if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb( '<div class="bread-navi">','</div>' ); }
  ?>

  <section class="sec sec---form">
    <div class="inner">
      <?php echo do_shortcode('[contact-form-7 id="8" title="エントリーフォーム"]'); ?>
    </div>
  </section>

<?php get_footer(); ?>