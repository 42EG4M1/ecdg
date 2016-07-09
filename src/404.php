<?php
/**
 *
 * 404 not found
 *
**/
get_header(); ?>


<main class="main" id="js-load">


<section class="main__inner p-cover" id="js-cover">
  
  <div class="p-cover__hold">
    <div class="p-cover__inner">
  
      <h2 class="p-cover__ttl">カラーミーショップで制作されたネットショップ事例集</h2>

      <div class="p-cover__menu p-menu">
        <div class="p-menu__inner">
          <div class="p-menu__btn c-btn--menu" id="is-open">
            <span class="c-btn--menu-t"></span><span class="c-btn--menu-m"></span><span class="c-btn--menu-b"></span>
          </div>
          <div class="p-menu__item p-search">
            <form action="/" method="get" class="p-search__inner">
              <input type="search" id="s" name="s" class="p-search__submit" value="">
              <p class="p-search__icon"><svg class="c-icon search"><use xlink:href="#searchIcon"/></svg></p>
            </form>
          </div>
        </div>
      </div>
  
      <div class="p-cover__sns c-sns">
        <div class="c-sns__inner">
          <p class="c-sns__txt"><a href="">カラーミーショップ<svg class="c-icon link"><use xlink:href="#linkIcon"/></svg></a></p>
          <input type="checkbox" class="c-form--checked" id="checked">
          <label class="c-sns__svg--hidden" for="checked"><svg class="c-icon share"><use xlink:href="#shareIcon"/></svg></label>
          <div class="c-sns__inner--visible">
            <p class="c-sns__svg"><a href=""><svg class="c-icon tw"><use xlink:href="#twitterIcon"/></svg></a></p>
            <p class="c-sns__svg"><a href=""><svg class="c-icon fb"><use xlink:href="#facebookIcon"/></svg></a></p>
            <p class="c-sns__svg"><a href=""><svg class="c-icon hatena"><use xlink:href="#hatenaIcon"/></svg></a></p>
            <p class="c-sns__svg"><a href=""><svg class="c-icon feedly"><use xlink:href="#feedlyIcon"/></svg></a></p>
          </div>
        </div>
      </div>
    
    </div>
  </div>

</section>


<section class="main__inner p-page--404">
  <div class="p-page--404__hold">
  
    <div class="p-page--404__inner">
      <h3 class="p-page--404__ttl">404 Not Found</h3>
      <div class="p-page--404__block">
        <p class="p-page--404__txt">ページは見つかりませんでした。</p>
        <p class="p-page--404__txt">指定されたページは存在しないか、移動もしくは削除された可能性があります。</p>
        <p class="p-page--404__btn c-btn--std"><a href="">HOME</a></p>
      </div>
    </div>
    
  </div>
</section>


</main>


<?php get_footer(); ?>







