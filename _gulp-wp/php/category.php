<?php get_header(); ?>

  <main class="main-content">

    <?php if (have_posts()) : ?>
    <ul class="post-list">
      <?php //ループ ?>
      <?php while (have_posts()) : the_post(); ?>
      <?php
      if($opsPDF){
        $theLink = $opsPDF;
      } elseif($opsURL){
        $theLink = $opsURL;
      } else{
        $theLink = get_the_permalink();
      }
      ?>
      <li class="list-item">
        <div class="post-data">
          <div class="post-date"><?php the_time('Y.m.d'); ?></div>
          <h2 class="post-title"><a href="<?php echo $theLink; ?>"<?php if($opsPDF || $opsURL){ echo ' target="_blank"'; } ?>><?php the_title(); ?><?php if($opsPDF){ echo '<i class="far fa-file-pdf"></i>'; }elseif($opsURL){ echo '<i class="fas fa-external-link-alt"></i>'; } ?></a></h2>
        </div>
      </li>
      <?php endwhile; ?>
    </ul>
    <?php endif; ?>

    <?php // ページナビ
    if(function_exists('wp_pagenavi')): wp_pagenavi(); endif; ?>

<?php get_footer(); ?>