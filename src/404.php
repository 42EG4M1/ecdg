<?php
/**
 *
 * 404 not found
 *
 */
get_header(); ?>


<section class="main__inner p-page--404">
  <div class="p-page--404__hold">
    <div class="p-page--404__inner">
      <h3 class="p-page--404__ttl">404 Not Found</h3>
      <div class="p-page--404__block">
        <p class="p-page--404__txt">ページは見つかりませんでした。</p>
        <p class="p-page--404__txt">指定されたページは存在しないか、移動もしくは削除された可能性があります。</p>
        <p class="p-page--404__btn c-btn--std"><a href="<?php echo esc_url(home_url('/')); ?>">HOME</a></p>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>