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
            <img class="lazy" data-original="<?php $id = get_post_thumbnail_id(); $url = wp_get_attachment_image_src($id, 'thumbnail'); echo $url[0]; ?>" alt="">
<?php else: ?>
            <img class="lazy" data-original="<?php echo get_template_directory_uri(); ?>/assets/images/ecdg-no-images.jpg" alt="">
<?php endif; ?>
          </a>
        </figure>
        <div class="p-card__meta">
          <div class="p-card__meta-inner">
            <p class="p-card__date"><?php $days = 7; $today = date_i18n('U'); $entry = get_the_time('U'); $elapsed = date('U',($today - $entry)) / 86400; if( $days > $elapsed ){ echo '<span>NEW</span>'; } ?><?php echo get_post_time('Y.m.d'); ?></p>
            <!--<p class="p-card__like">123<svg class="c-icon heart"><use xlink:href="#heartIcon"/></svg></p>-->
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
<?php endif; if ( $count > 20 ) : ?>  
    <aside class="p-card__item--no2 p-ads">
      <div class="p-ads__inner">
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
<?php endif; if ( $count > 40 ) : ?>
    <aside class="p-card__item--no3 p-ads">
      <div class="p-ads__inner">
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
<?php endif;?>

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