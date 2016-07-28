<?php
/**
 *
 * footer
 *
**/
?>
</main>


<?php if ( !is_page() ) : ?>
<aside class="p-aff">
<?php if(is_active_sidebar('widget_footer_aff')) : ?>
<?php dynamic_sidebar('widget_footer_aff'); ?>
<?php endif; ?>

</aside>
<?php endif; ?>


<footer class="footer">
  <p class="footer__copy">&copy; <span>Color Me Shop</span> Design Gallery</p>
</footer>


</div>


<div class="p-modal" id="js-modal">
  <div class="p-modal__inner">
    <h5 class="p-modal__ttl">サービス</h5>
    <ul class="p-modal__lists">
<?php
$args = array(
  'orderby' => 'id'
);
$categories = get_categories( $args );
foreach ( $categories as $category ) {
  echo '<li class="p-modal__list"><a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '<span>(' . $category->count . ')</span></a></li>';
}
?>

    </ul>
  </div>
  <div class="p-modal__inner">
    <h5 class="p-modal__ttl">カラー</h5>
    <ul class="p-modal__lists">
<?php
$args = array(
  'orderby' => 'name',
  'taxonomy' => 'color'
);
$categories = get_categories( $args );
foreach ( $categories as $category ) {
  echo '<li class="p-modal__list"><a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '<span>(' . $category->count . ')</span></a></li>';
}
?>

    </ul>
  </div>
  <div class="p-modal__inner">
    <h5 class="p-modal__ttl">タグ</h5>
    <ul class="p-modal__lists">
<?php
$args = array(
  'orderby' => 'name',
  'taxonomy' => 'post_tag'
);
$categories = get_categories( $args );
foreach ( $categories as $category ) {
  echo '<li class="p-modal__list"><a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '<span>(' . $category->count . ')</span></a></li>';
}
?>

    </ul>
  </div>
  <div class="p-modal__btn">
    <div class="c-btn--close" id="is-close"></div>
  </div>
</div>


<div class="c-toTop" id="js-toTop">
  <a href="#"><svg class="c-icon arrowUp"><use xlink:href="#arrowUpIcon"/></svg></a>
</div>


<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script charset="utf-8" src="<?php echo get_template_directory_uri(); ?>/assets/scripts/app.min.js?ver=<?php echo wp_get_theme()->get( 'Version' ); ?>"></script>
<?php wp_footer(); ?>

</body>
</html>
