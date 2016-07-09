<?php
/**
 *
 * front page
 *
**/
get_header(); ?>


<section class="main__inner p-card">
  <div class="p-card__hold">
    
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <div class="p-card__item">
      <article class="p-card__inner">
        <h1 class="p-card__ttl"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <figure class="p-card__thumb">
          <a href="<?php echo post_custom('URL'); ?>" target="_blank">
            <?php if (has_post_thumbnail()): ?>
              <img class="lazy" data-original="<?php $id = get_post_thumbnail_id(); $url = wp_get_attachment_image_src($id, true); echo $url[0]; ?>" alt="<?php the_title(); ?>">
            <?php endif; ?>
          </a>
        </figure>
        <div class="p-card__meta">
          <div class="p-card__meta-inner">
            <p class="p-card__date"><span>NEW</span><?php echo get_post_time('Y.m.d'); ?></p>
            <!--<p class="p-card__like">123<svg class="c-icon heart"><use xlink:href="#heartIcon"/></svg></p>-->
          </div>
        </div>
        <p class="p-card__taxonomy"><span><a href="">123tag</a></span><span><a href="">category</a></span><span><a href="">ブルーhome</a></span></p>
        
      </article>
    </div>
<?php endwhile; else : ?>
    <div class="no-entry">
      <p>リクエストされたページはありませんでした。</p>
    </div>
<?php endif; ?>
    
    
    
    
  

    



    
    <aside class="p-card__item--no1 p-ads">
      <div class="p-ads__inner">
        <p>ad</p>
      </div>
    </aside>
  
    <aside class="p-card__item--no2 p-ads">
      <div class="p-ads__inner">
        <p>ad</p>
      </div>
    </aside>
  
    <aside class="p-card__item--no3 p-ads">
      <div class="p-ads__inner">
        <p>ad</p>
      </div>
    </aside>
  
  </div>
</section>


<aside class="main__inner p-pagination" id="js-pagination">
  <div class="p-pagination__inner">
    <a class="prev p-pagination__num" href="/">PREV</a>
    <span class='p-pagination__num current'>1</span>
    <a class='p-pagination__num' href='/'>2</a>
    <a class='p-pagination__num' href='/'>3</a>
    <a class='p-pagination__num' href='/'>4</a>
    <span class="p-pagination__num dots">&hellip;</span>
    <a class='p-pagination__num' href='/'>6</a>
    <a class="next p-pagination__num" href="/">NEXT</a>
  </div>
</aside>


</main>


<?php get_footer(); ?>



































