<?php
/**
 *
 * Template Name: about
 *
 */
get_header(); ?>


<section class="main__inner p-page">
  <div class="p-page__hold">

    <div class="p-page__inner">
      <h3 class="p-page__ttl">About</h3>
      <div class="p-page__block">
        <p>COLOR ME SHOP DESIGN GALLERY は、<?php $options = get_option('ecdg_theme_options'); if ( $options['affBoolean'] ) : ?><?php echo wp_kses_post($options['affAbout']); ?><?php else : ?>カラーミーショップ<?php endif; ?>で制作されたECサイト（オンラインショップ）だけを集めたニッチなWebサイトギャラリーです。カラーミーショップのカート機能を利用して制作されたデザイン性の高いECサイトを中心に、カスタマイズやデザインの参考となるようなハイクオリティなサイトを厳選し掲載しています。</p>
        <p>掲載するサイトには、カラーミーショップの<em>カート機能</em>を利用しているサイトを前提としており、「どこでもカラーミー」の機能や「カラーミーショップ API」を利用したもの、プラチナプランによる通常プランとは異なる仕様のものなども含まれています。</p>
        <p>サイトの掲載希望や推薦も随時募集していますので、<a href="<?php echo esc_url(home_url('/contact/')); ?>">コンタクト</a>よりお気軽にご連絡ください（全て掲載されるとは限りません）。</p>
        <p><a href="https://twitter.com/ecdesigngallery" target="_blank">Twitter</a></p>
      </div>
    </div>

    <div class="p-page__inner p-profile">
      <h4 class="p-page__ttl">Created By</h4>
      <div class="p-profile__inner">
        <p class="p-profile__name">TATSUYA AZEGAMI</p>
        <p class="p-profile__text">Designer &amp; Developer</p>
        <ul class="p-profile__lists">
          <li>Portfolio : <a href="http://theorthodoxworks.com/">http://theorthodoxworks.com</a></li>
          <li>Twitter : <a href="https://twitter.com/42EG4M1">42EG4M1</a></li>
          <li>GitHub : <a href="https://github.com/42EG4M1">42EG4M1</a></li>
        </ul>
      </div>
    </div>

  </div>
</section>


<?php get_footer(); ?>