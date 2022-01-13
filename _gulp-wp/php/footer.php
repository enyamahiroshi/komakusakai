</main><?php //.main-content  ?>

<?php //フッター ?>
<footer class="footer">
  <div class="footer-info">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/logo-footer-sp.png" alt="こまくさグループ 医療法人 こまくさ会 社会福祉法人 こまくさ福祉会" class="no-pc">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/logo-footer-pc.png" alt="こまくさグループ 医療法人 こまくさ会 社会福祉法人 こまくさ福祉会" class="no-sp">
  </div>
  <div class="footer-menu">
    <?php // カスタムメニューの呼び出し
    wp_nav_menu( array ( 'menu'=>'header-menu', 'menu_class'=>'menu', 'container'=>'nav' , 'items_wrap'=>'<ul class="%2$s">%3$s</ul>' ) ); ?>
  </div>
  <div class="copyright">Copyright &copy;<br> 医療法人こまくさ会・社会福祉法人こまくさ福祉会 <br>all right reserved.</div>
</footer>
<a href="#top" class="pagetop"></a>
<?php wp_footer(); ?>
<?php // ie11 object-fit 対応
if(is_front_page()): ?>
  <script> objectFitImages(); </script>
<?php endif; ?>
</body>
</html>