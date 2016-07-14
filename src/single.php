<?php
/**
 *
 * single
 *
**/
get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article class="main__inner p-article">
  <div class="p-article__hold">
    <div class="p-article__header" id="js-articleHeader">
      <h1 class="p-article__ttl"><a href="<?php echo post_custom('URL'); ?>" target="_blank"><?php the_title(); ?></a></h1>
      <div class="p-article__meta">
        <p class="p-article__date"><?php $days = 7; $today = date_i18n('U'); $entry = get_the_time('U'); $elapsed = date('U',($today - $entry)) / 86400; if( $days > $elapsed ){ echo '<span>NEW</span>'; } ?><?php echo get_post_time('Y.m.d'); ?></p>
<?php if ( !is_attachment() ): ?>
        <ul class="p-article__taxonomy">
          <li><?php the_category( ' ' ); ?></li><?php the_terms( $post->ID, 'color', '<li>', '</li><li>', '</li>' ); ?><?php the_tags( '<li>', '</li><li>', '</li>' ); ?>
        </ul>
        <p class="p-article__more">URL : <a href="<?php echo post_custom('URL'); ?>" target="_blank"><?php echo post_custom('URL'); ?></a></p>
<?php endif; ?>
      </div>
    </div>
    <div class="p-article__body">
      <a href="<?php echo post_custom('URL'); ?>" target="_blank">
        <figure class="p-article__thumbnail">
          <?php remove_filter('the_content', 'wpautop'); the_content(); ?>

        </figure>
      </a>
    </div>
  </div>
</article>


<aside class="main__inner p-ads--article">
  <div class="p-ads--article__inner">
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-0944111943952651"
         data-ad-slot="3234704806"
         data-ad-format="auto"></ins>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
  </div>
</aside>


<aside class="main__inner p-pagination--article">
  <div class="p-pagination--article__inner">
    <?php if ( get_previous_post() ) : ?><p class="p-pagination--article__prev"><?php previous_post_link('%link', 'PREV'); ?></p><?php endif; ?>
    <?php if ( get_next_post() ) : ?><p class="p-pagination--article__next"><?php next_post_link('%link', 'NEXT'); ?></p><?php endif; ?>
  </div>
</aside>


<?php endwhile; else : ?>
<div class="main__inner p-article">
  <div class="p-article__hold u-align__center">
    <p>リクエストされたページはありませんでした。</p>
  </div>
</div>
<?php endif; ?>


<?php get_footer(); ?>