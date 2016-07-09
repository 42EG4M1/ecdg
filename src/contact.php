<?php 
/**
 *
 * Template Name: contact
 *
**/
get_header(); ?>


<section class="main__inner p-page">
  <div class="p-page__hold u-width__max500 u-margin__b--120">
    
    <h3 class="p-page__ttl">Contact</h3>
    
    <div class="p-page__block">
      <p>当サイトへのお問い合わせは下記のフォームよりご連絡ください。</p>
    </div>
    
    <div class="p-page__block p-form">
      <div role="form" class="wpcf7" id="wpcf7-f4-o1" lang="ja" dir="ltr">
        <form method="post" class="wpcf7-form" novalidate="novalidate">
          <div class="p-form__box">
            <h4 class="p-form__ttl">お名前 *</h4>
            <div class="p-form__input"><span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="" /></span></div>
          </div>
          <div class="p-form__box">
            <h4 class="p-form__ttl">メールアドレス *</h4>
            <div class="p-form__input"><span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="" /></span></div>
          </div>
          <div class="p-form__box">
            <h4 class="p-form__ttl">件名</h4>
            <div class="p-form__input"><span class="wpcf7-form-control-wrap your-subject"><input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="" /></span></div>
          </div>
          <div class="p-form__box">
            <h4 class="p-form__ttl">お問い合わせ内容 *</h4>
            <div class="p-form__textarea"><span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder=""></textarea></span></div>
          </div>
          <div class="p-form__checkbox">
            <span class="wpcf7-form-control-wrap acceptance-707"><input type="checkbox" name="acceptance-707" value="1" class="wpcf7-form-control wpcf7-acceptance" id="lb-checkbox" aria-invalid="false" /></span>
            <label class="p-form__checkbox" for="lb-checkbox">スパム防止のため、左のボックスをクリックしてチェックを入れてください。</label>
          </div>
          <div class="p-form__submit">
            <input type="submit" value="送　信" class="wpcf7-form-control wpcf7-submit" />
          </div>
        </form>
      </div>
    </div>
    
  </div>
</section>

</main>


<?php get_footer(); ?>






















