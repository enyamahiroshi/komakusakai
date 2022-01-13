<?php get_header(); ?>

<header class="page-header page-header---entry">
  <h1 class="page-title"><small class="ff-en">NEWS</small>お知らせ</h1>
</header>

<main class="main-content">

	<?php // パンくずリスト(yost seo)
  if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb( '<div class="bread-navi">','</div>' ); }
  ?>

	<section class="sec sec---entry">
		<div class="inner">

			<?php if(have_posts()): the_post(); ?>
			<?php
			$category = get_the_category();
			$cat_name = $category[0]->cat_name;
			$cat_slug = $category[0]->category_nicename;
			$mainIMG  = get_field('main_image');
      $cat_ID = 'category_'.$category[0]->cat_ID;
      $cat_color = get_field('cf_catecolor',$cat_ID);
			?>
			<div class="post-meta">
				<div class="post-date"><?php the_time('Y.m.d'); ?></div>
				<div class="post-cat post-cat---<?php echo $cat_slug; ?> post-cat-color-<?php echo $cat_color; ?>"><?php echo $cat_name; ?></div>
				<h1 class="post-title"><?php the_title(); ?></h1>
			</div>

			<div class="post-body">
				<?php if( $mainIMG ): ?>
				<div class="post-main-image">
					<img src="<?php echo $mainIMG; ?>" />
				</div>
				<?php endif; ?>
				<?php the_content(); ?>
			</div>
			<?php endif; ?>

			<div class="pagenation">
				<div class="prev"><?php previous_post_link('%link', '≪ 前のお知らせ', ''); ?></div>
				<div class="all"><a href="<?php echo esc_url(home_url()); ?>/information/">一覧へ</a></div>
				<div class="next"><?php next_post_link('%link', '次のお知らせ ≫', ''); ?></div>
			</div>

		</div>
	</section>

<?php get_footer(); ?>