<?php
/**
 *
 * index
 *
**/
get_header(); ?>


<section class="main__inner p-breadcrumbs">
  <div class="p-breadcrumbs__inner">
    <p><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></p><?php if ( is_search() ) : ?><p>“ <?php the_search_query(); ?> ” の検索結果</p><?php else : ?><p><?php single_cat_title(); ?></p><?php endif; ?>
  </div>
</section>


<section class="main__inner p-card">
  <div class="p-card__hold">
    
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); $count++; ?>

    <div class="p-card__item">
      <article class="p-card__inner">
        <h1 class="p-card__ttl"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <figure class="p-card__thumb">
          <a href="<?php echo post_custom('URL'); ?>" target="_blank">
<?php if ( has_post_thumbnail() ) : ?>
            <img class="lazy" data-original="<?php $id = get_post_thumbnail_id(); $url = wp_get_attachment_image_src($id, 'thumbnail'); echo $url[0]; ?>" src="<?php echo get_template_directory_uri(); ?>/assets/images/ecdg-loading.gif" alt="">
<?php else: ?>
            <img class="lazy" data-original="<?php echo get_template_directory_uri(); ?>/assets/images/ecdg-no-images.jpg" src="<?php echo get_template_directory_uri(); ?>/assets/images/ecdg-loading.gif" alt="">
<?php endif; ?>
          </a>
        </figure>
        <div class="p-card__meta">
          <div class="p-card__meta-inner">
            <p class="p-card__date"><?php $days = 7; $today = date_i18n('U'); $entry = get_the_time('U'); $elapsed = date('U',($today - $entry)) / 86400; if( $days > $elapsed ){ echo '<span>NEW</span>'; } ?><?php echo get_post_time('Y.m.d'); ?></p>
            <div class="p-card__share">
              <p class="p-card__share-item"><a href="https://twitter.com/intent/tweet?original_referer=<?php $pageTitle = urlencode(get_the_title()); $homeUrl = esc_url(home_url('/')); $pageUrl = get_permalink(); $search = array(':','/'); $replace = array('%3A','%2F'); $home = str_replace($search, $replace, $homeUrl); echo $home . '&text=' . $pageTitle . ' | カラーミーショップで制作されたネットショップ事例集 &url=' . $pageUrl; ?>" onclick="window.open(encodeURI(decodeURI(this.href)), 'twetterWindow<?php echo $count; ?>', 'width=650, height=450, menubar=no, toolbar=no, scrollbars=yes'); return false;" target="_blank"><svg class="c-icon tw"><use xlink:href="#twitterIcon"/></svg></a></p>
              <p class="p-card__share-item"><a href="https://www.facebook.com/sharer.php?src=bm&amp;u=<?php $pageTitle = urlencode(get_the_title()); $pageUrl = get_permalink(); echo $pageUrl . '&amp;t=' . $pageTitle . ' | カラーミーショップで制作されたネットショップ事例集'; ?>" onclick="window.open(this.href, 'facebookWindow<?php echo $count; ?>', 'width=650, height=450, menubar=no, toolbar=no, scrollbars=yes'); return false;" target="_blank"><svg class="c-icon fb"><use xlink:href="#facebookpageIcon"/></svg></a></p>
              <?php if(function_exists('wp_ulike')) wp_ulike('get'); ?>
            </div>
          </div>
        </div>
        <p class="p-card__taxonomy"><span><?php the_category( ' ' ); ?></span><?php the_terms( $post->ID, 'color', '<span>', '</span><span>', '</span>' ); ?><?php the_tags( '<span>', '</span><span>', '</span>' ); ?></p>
      </article>
    </div>

<?php endwhile; else : ?>
    <div class="p-card__item--none">
      <p>エントリーはありませんでした。</p>
    </div>
<?php endif; ?>

<?php if ( $count >= 0 ) : ?>
    <aside class="p-card__item--no1 p-ads">
      <div class="p-ads__inner">
<?php get_template_part( 'inc/adsense' ); ?>
      </div>
    </aside>
<?php endif; if ( $count > 20 ) : ?>
    <aside class="p-card__item--no2 p-ads">
      <div class="p-ads__inner">
<?php get_template_part( 'inc/adsense' ); ?>
      </div>
    </aside>
<?php endif; if ( $count > 40 ) : ?>
    <aside class="p-card__item--no3 p-ads">
      <div class="p-ads__inner">
<?php get_template_part( 'inc/adsense' ); ?>
      </div>
    </aside>
<?php endif; ?>

  </div>
</section>


<?php $max_page = $wp_query->max_num_pages; if( $max_page != 1 ) : ?>
<aside class="main__inner p-pagination" id="js-pagination">
  <div class="p-pagination__inner">
    <?php my_pagination(); ?>
  </div>
</aside>
<?php endif; ?>


<?php get_footer(); ?>