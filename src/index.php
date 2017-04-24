<?php
/**
 *
 * index
 *
 */
get_header(); ?>


<section class="main__inner p-breadcrumbs">
  <div class="p-breadcrumbs__inner">
    <p><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></p><?php if ( is_search() ) : ?><p>“ <?php the_search_query(); ?> ” の検索結果</p><?php else : ?><p><?php single_cat_title(); ?></p><?php endif; ?>
  </div>
</section>


<section class="main__inner p-card">
  <div class="p-card__hold">

<?php $count = 0; if ( have_posts() ) : while ( have_posts() ) : the_post(); $count++; ?>

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
        <p class="p-card__taxonomy"><span><?php the_category( '</span><span>' ); ?></span><?php the_terms( $post->ID, 'color', '<span>', '</span><span>', '</span>' ); ?><?php the_tags( '<span>', '</span><span>', '</span>' ); ?></p>
      </article>
    </div>

<?php endwhile; else : ?>
    <div class="p-card__item--none">
      <p>エントリーはありませんでした。</p>
    </div>
<?php endif; ?>

<?php
$options = get_option('ecdg_theme_options');
if ( $options['adBoolean'] ) : ?>
<?php if ( $count >= 0 ) : ?>
    <aside class="p-card__item--no1 p-ads">
      <div class="p-ads__inner">
        <?php echo '<ins class="' . esc_html($options['adClass']) . '" style="' . esc_html($options['adStyle']) . '" data-ad-client="' . esc_html($options['adDataAdClient']) . '" data-ad-slot="' . esc_html($options['adDataAdSlot']) . '" data-ad-format="' . esc_html($options['adDataAdFormat']) . '"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script>'; ?>

      </div>
    </aside>
<?php endif; if ( $count > 20 ) : ?>
    <aside class="p-card__item--no2 p-ads">
      <div class="p-ads__inner">
        <?php echo '<ins class="' . esc_html($options['adClass']) . '" style="' . esc_html($options['adStyle']) . '" data-ad-client="' . esc_html($options['adDataAdClient']) . '" data-ad-slot="' . esc_html($options['adDataAdSlot']) . '" data-ad-format="' . esc_html($options['adDataAdFormat']) . '"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script>'; ?>

      </div>
    </aside>
<?php endif; if ( $count > 40 ) : ?>
    <aside class="p-card__item--no3 p-ads">
      <div class="p-ads__inner">
        <?php echo '<ins class="' . esc_html($options['adClass']) . '" style="' . esc_html($options['adStyle']) . '" data-ad-client="' . esc_html($options['adDataAdClient']) . '" data-ad-slot="' . esc_html($options['adDataAdSlot']) . '" data-ad-format="' . esc_html($options['adDataAdFormat']) . '"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script>'; ?>

      </div>
    </aside>
<?php endif; ?>
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
