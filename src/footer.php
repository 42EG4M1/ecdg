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
      <a href="http://px.a8.net/svt/ejp?a8mat=2NMEYJ+893BN6+JD8+6I1XD" target="_blank">
        <img border="0" width="300" height="250" alt="" src="http://www21.a8.net/svt/bgt?aid=160609339499&wid=001&eno=01&mid=s00000002510001092000&mc=1">
      </a>
      <img border="0" width="1" height="1" src="http://www14.a8.net/0.gif?a8mat=2NMEYJ+893BN6+JD8+6I1XD" alt="">
    </div>
    <div class="p-aff__item">
      <a href="http://px.a8.net/svt/ejp?a8mat=2NMEYJ+8ZVUMY+3CZK+601S1" target="_blank">
        <img border="0" width="300" height="250" alt="" src="http://www25.a8.net/svt/bgt?aid=160609339544&wid=002&eno=01&mid=s00000015680001008000&mc=1">
      </a>
      <img border="0" width="1" height="1" src="http://www14.a8.net/0.gif?a8mat=2NMEYJ+8ZVUMY+3CZK+601S1" alt="">
    </div>
    <div class="p-aff__item">
      <a href="http://px.a8.net/svt/ejp?a8mat=2NMEYJ+A1ZLCQ+KK0+6SCAP" target="_blank">
        <img border="0" width="300" height="250" alt="" src="http://www22.a8.net/svt/bgt?aid=160609339608&wid=002&eno=01&mid=s00000002664001140000&mc=1">
      </a>
      <img border="0" width="1" height="1" src="http://www12.a8.net/0.gif?a8mat=2NMEYJ+A1ZLCQ+KK0+6SCAP" alt="">
    </div>
    <div class="p-aff__item">
      <a href="http://px.a8.net/svt/ejp?a8mat=2BJERR+6CMH2Q+348+I9D4H" target="_blank">
        <img border="0" width="300" height="250" alt="" src="http://www25.a8.net/svt/bgt?aid=140313735384&wid=001&eno=01&mid=s00000000404003067000&mc=1">
      </a>
      <img border="0" width="1" height="1" src="http://www13.a8.net/0.gif?a8mat=2BJERR+6CMH2Q+348+I9D4H" alt="">
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


<!-- js -->
<script charset="utf-8" src="<?php echo get_template_directory_uri(); ?>/assets/scripts/app.min.js?ver=<?php echo wp_get_theme()->get( 'Version' ); ?>"></script>
<?php wp_footer(); ?>

</body>
</html>