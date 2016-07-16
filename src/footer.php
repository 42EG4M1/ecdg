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
  <div class="p-aff__inner">
    <div class="p-aff__item">
      <a href="http://px.a8.net/svt/ejp?a8mat=2NMEYJ+893CEY+JD8+6IWSH" target="_blank">
        <img border="0" width="250" height="250" alt="" src="http://www25.a8.net/svt/bgt?aid=160609339499&wid=002&eno=01&mid=s00000002510001096000&mc=1">
      </a>
      <img border="0" width="1" height="1" src="http://www14.a8.net/0.gif?a8mat=2NMEYJ+893CEY+JD8+6IWSH" alt="">
    </div>
    <div class="p-aff__item">
      <a href="http://px.a8.net/svt/ejp?a8mat=2NMEYJ+A1ZLCQ+KK0+6RWV5" target="_blank">
        <img border="0" width="250" height="250" alt="" src="http://www23.a8.net/svt/bgt?aid=160609339608&wid=002&eno=01&mid=s00000002664001138000&mc=1">
      </a>
      <img border="0" width="1" height="1" src="http://www17.a8.net/0.gif?a8mat=2NMEYJ+A1ZLCQ+KK0+6RWV5" alt="">
    </div>
    <div class="p-aff__item">
      <a href="http://px.a8.net/svt/ejp?a8mat=2NOMSX+13ANH6+348+6FP1T" target="_blank">
        <img border="0" width="250" height="250" alt="" src="http://www29.a8.net/svt/bgt?aid=160712817066&wid=002&eno=01&mid=s00000000404001081000&mc=1">
      </a>
      <img border="0" width="1" height="1" src="http://www15.a8.net/0.gif?a8mat=2NOMSX+13ANH6+348+6FP1T" alt="">
    </div>
    <div class="p-aff__item">
      <a href="http://px.a8.net/svt/ejp?a8mat=2BJERR+6CMH2Q+348+IQXU9" target="_blank">
        <img border="0" width="250" height="250" alt="" src="http://www25.a8.net/svt/bgt?aid=140313735384&wid=001&eno=01&mid=s00000000404003149000&mc=1">
      </a>
      <img border="0" width="1" height="1" src="http://www19.a8.net/0.gif?a8mat=2BJERR+6CMH2Q+348+IQXU9" alt="">
    </div>
  </div>
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