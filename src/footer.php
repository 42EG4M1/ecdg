<?php
/**
 *
 * footer
 *
 */ ?>
</main>

<?php
$options = get_option('ecdg_theme_options');
if ( !is_page() && $options['affBoolean'] ) : ?>
<aside class="p-aff" id="js-aff">
  <div class="p-aff__inner">
    <?php echo $options['affTags']; ?>
  </div>
</aside>
<?php endif; ?>


<div class="p-fixed">
  <a href="https://twitter.com/ecdesigngallery" target="_blank">Twitter</a>
</div>


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


<?php wp_footer(); ?>

</body>
</html>
