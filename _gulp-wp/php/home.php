<?php get_header(); ?>

<header class="page-header page-header---information">
  <h1 class="page-title"><small class="ff-en">NEWS</small>お知らせ</h1>
</header>

<main class="main-content">

  <?php // パンくずリスト(yost seo)
  if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb( '<div class="bread-navi">','</div>' ); }
  ?>

  <section class="sec sec---tight">
    <div class="inner">
      <h2 class="information-title">INFORMATION</h2>
      <?php if(have_posts()): ?>
      <ul class="post-list">
      <?php
      while(have_posts()): the_post();
      $category = get_the_category();
      $cat_name = $category[0]->cat_name;
      $cat_slug = $category[0]->category_nicename;
      $cat_ID = 'category_'.$category[0]->cat_ID;
      $cat_color = get_field('cf_catecolor',$cat_ID);
      ?>
        <li class="list-item">
          <a href="<?php the_permalink(); ?>" class="post-link">
            <div class="post-data">
              <div class="post-date"><?php the_time('Y.m.d'); ?></div>
              <div class="post-cat post-cat---<?php echo $cat_slug; ?> post-cat-color-<?php echo $cat_color; ?>"><?php echo $cat_name; ?></div>
              <p class="post-title"><?php the_title(); ?></p>
            </div>
          </a>
        </li>
      <?php endwhile; ?>
      </ul>
      <?php  endif; ?>
    </div>

    <?php // ページナビ
    if(function_exists('wp_pagenavi')): wp_pagenavi(); endif; ?>

  </section>

<?php get_footer(); ?>