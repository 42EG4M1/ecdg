<?php
/**
 *
 * Template Name: contact
 *
 */
get_header(); ?>


<section class="main__inner p-page">
  <div class="p-page__hold u-width__max500 u-margin__b--120">

    <h3 class="p-page__ttl">Contact</h3>

    <div class="p-page__block">
      <p>
        当サイトへのお問い合わせは下記のフォームよりご連絡ください。<br>
        (Webサイト制作に関するお問い合わせは <a href="http://theorthodoxworks.com/contact/">THE ORTHODOX WORKS</a> からお願いします)
      </p>
    </div>

    <div class="p-page__block p-form">

<?php echo do_shortcode('[contact-form-7 id="104" title="コンタクトフォーム 1"]'); ?>

    </div>

  </div>
</section>


<?php get_footer(); ?>