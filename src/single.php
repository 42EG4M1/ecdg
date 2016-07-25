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
        <p class="p-article__url">URL : <a href="<?php echo post_custom('URL'); ?>" target="_blank"><?php echo post_custom('URL'); ?></a></p>
        <div class="p-article__share">
          <p class="p-article__share-item"><a href="https://twitter.com/intent/tweet?original_referer=<?php $pageTitle = urlencode(get_the_title()); $homeUrl = esc_url(home_url('/')); $pageUrl = get_permalink(); $search = array(':','/'); $replace = array('%3A','%2F'); $home = str_replace($search, $replace, $homeUrl); echo $home . '&text=' . $pageTitle . ' | カラーミーショップで制作されたネットショップ事例集 &url=' . $pageUrl; ?>" onclick="window.open(encodeURI(decodeURI(this.href)), 'twetterWindow<?php echo $count; ?>', 'width=650, height=450, menubar=no, toolbar=no, scrollbars=yes'); return false;" target="_blank"><svg class="c-icon tw"><use xlink:href="#twitterIcon"/></svg></a></p>
          <p class="p-article__share-item"><a href="https://www.facebook.com/sharer.php?src=bm&amp;u=<?php $pageTitle = urlencode(get_the_title()); $pageUrl = get_permalink(); echo $pageUrl . '&amp;t=' . $pageTitle . ' | カラーミーショップで制作されたネットショップ事例集'; ?>" onclick="window.open(this.href, 'facebookWindow<?php echo $count; ?>', 'width=650, height=450, menubar=no, toolbar=no, scrollbars=yes'); return false;" target="_blank"><svg class="c-icon fb"><use xlink:href="#facebookpageIcon"/></svg></a></p>
          <?php if(function_exists('wp_ulike')) wp_ulike('get'); ?>
        </div>
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
<?php get_template_part( 'inc/adsense/adsense' ); ?>
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
