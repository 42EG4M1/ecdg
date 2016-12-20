<?php
/**
 *
 * header
 *
 */ ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php my_description(); ?>">
  <meta name="keywords" content="カラーミーショップ, カラーミー, ネットショップ, オンラインショップ, EC, ギャラリー">

<?php get_template_part( 'template-parts/favicon' ); ?>

<?php get_template_part( 'template-parts/ogp' ); ?>

<?php wp_head(); ?>
</head>

<body>
<?php
$options = get_option('ecdg_theme_options');
if ( $options['gaBoolean'] ) : ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-<?php echo esc_html($options['gaUA']); ?>', 'auto');
  ga('send', 'pageview');
</script>
<?php endif; ?>

<noscript class="noscript" data-noscript="本サイトは JavaScript が有効な状態にないと正常に表示されません。このメッセージが表示される場合、ブラウザの設定状況をご確認ください。"></noscript>

<!--[if lt IE 10]>
<div class="ie">
  <div class="ie__hold">
    <h3><span>Color Me Shop</span> Design Gallery</h3>
    <h4>カラーミーショップで制作されたネットショップの事例集。</h4>
    <p>恐れ入りますが、ご利用のブラウザ(インターネット閲覧の為のソフト)は古いバージョンのため、<br />本Webサイトではサポートしておりません。</p>
    <p>古いバージョンのブラウザでは、正常に表示されない箇所が出てくるため非表示としております。</p>
    <p>本サイトを閲覧するには、<a href="http://browsehappy.com">最新のブラウザをインストール</a>してからご覧ください。</p>
  </div>
  <p class="ie__btn" id="js-ieBtn">この表示を削除する</p>
</div>
<![endif]-->


<div class="wrapper" id="js-wrapper">


<header class="header">
  <h1 class="header__ttl"><a href="<?php echo esc_url(home_url('/')); ?>"><span>Color Me Shop</span> Design Gallery</a></h1>
  <nav class="header__nav">
    <ul class="header__nav-lists">
      <li<?php if ( is_page('contact') ) { echo ' class="cur"'; } ?>><a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a></li>
      <li<?php if ( is_page('about') ) { echo ' class="cur"'; } ?>><a href="<?php echo esc_url(home_url('/about/')); ?>">About</a></li>
    </ul>
  </nav>
</header>


<main class="main" id="js-main">


<section class="main__inner p-cover" id="js-cover">

  <div class="p-cover__hold">
    <div class="p-cover__inner">

      <h2 class="p-cover__ttl">カラーミーショップで制作されたネットショップ事例集</h2>

      <div class="p-cover__menu p-menu">
        <div class="p-menu__inner">
          <div class="p-menu__btn" id="is-open">
            <div class="p-menu__btn-hold c-btn--menu">
              <span class="c-btn--menu-t"></span><span class="c-btn--menu-m"></span><span class="c-btn--menu-b"></span>
            </div>
          </div>
          <div class="p-menu__item p-search" id="js-search">
            <form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="p-search__inner">
              <input type="search" id="s" name="s" class="p-search__submit" value="">
              <p class="p-search__icon"><svg class="c-icon search"><use xlink:href="#searchIcon"/></svg></p>
            </form>
          </div>
        </div>
      </div>

      <div class="p-cover__sns c-sns">
        <div class="c-sns__inner">
          <p class="c-sns__txt"><A href="https://px.a8.net/svt/ejp?a8mat=2BJERR+6CMHUI+348+HWXLE" target="_blank">カラーミーショップ</A><img border="0" width="1" height="1" src="https://www15.a8.net/0.gif?a8mat=2BJERR+6CMHUI+348+HWXLE" alt=""><svg class="c-icon link"><use xlink:href="#linkIcon"/></svg></p>
          <input type="checkbox" class="c-form--checked" id="checked">
          <label class="c-sns__svg--hidden" for="checked"><svg class="c-icon share"><use xlink:href="#shareIcon"/></svg></label>
          <div class="c-sns__inner--visible">
            <p class="c-sns__svg"><a href="https://twitter.com/intent/tweet?original_referer=<?php $str = esc_url(home_url('/')); $search = array(':','/'); $replace = array('%3A','%2F'); $home = str_replace($search, $replace, $str); echo $home . '&text=カラーミーショップで制作されたネットショップの事例集 - COLOR ME SHOP DESIGN GALLERY' . '&url=' . $home . '&via=ecdesigngallery'; ?>" onclick="window.open(this.href, 'twetterWindow', 'width=650, height=450, menubar=no, toolbar=no, scrollbars=yes'); return false;" target="_blank"><svg class="c-icon tw"><use xlink:href="#twitterIcon"/></svg></a></p>
            <p class="c-sns__svg"><a href="https://www.facebook.com/sharer.php?src=bm&amp;u=<?php $str = esc_url(home_url('/')); $search = array(':','/'); $replace = array('%3A','%2F'); $home = str_replace($search, $replace, $str); echo $home . '&amp;t=カラーミーショップで制作されたネットショップの事例集 - COLOR ME SHOP DESIGN GALLERY'; ?>" onclick="window.open(this.href, 'facebookWindow', 'width=650, height=450, menubar=no, toolbar=no, scrollbars=yes'); return false;" target="_blank"><svg class="c-icon fb"><use xlink:href="#facebookIcon"/></svg></a></p>
            <p class="c-sns__svg"><a href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php echo esc_url(home_url('/')); ?>&title=カラーミーショップで制作されたネットショップの事例集 - COLOR ME SHOP DESIGN GALLERY" onclick="window.open(this.href, 'hatenaWindow', 'width=510, height=450, menubar=no, toolbar=no, scrollbars=yes'); return false;" target="_blank"><svg class="c-icon hatena"><use xlink:href="#hatenaIcon"/></svg></a></p>
            <p class="c-sns__svg"><a href='http://cloud.feedly.com/#subscription%2Ffeed%2Fhttp%3A%2F%2Fecdesigngallery.com%2Ffeed%2F' target="_blank" title="Follow"><svg class="c-icon feedly"><use xlink:href="#feedlyIcon"/></svg></a></p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
