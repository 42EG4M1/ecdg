<?php 
/**
 *
 * header
 *
**/
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<?php /* <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#<php if ( is_home() ) { echo ' website: http://ogp.me/ns/website#'; } else { echo ' article: http://ogp.me/ns/article#'; } ?>"> */ ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php my_description(); ?>">
  <meta name="keywords" content="カラーミーショップ, カラーミー, ネットショップ, オンラインショップ, EC, ギャラリー">
  
  <!-- styles -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/all.min.css?ver=<?php echo wp_get_theme()->get( 'Version' ); ?>" media="all">
  
  <!-- favicon -->
  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/apple-touch-icon-180x180.png">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/android-chrome-192x192.png" sizes="192x192">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/manifest.json">
  <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="apple-mobile-web-app-title" content="ECdesign">
  <meta name="application-name" content="ECdesign">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/mstile-144x144.png">
  <meta name="theme-color" content="#ffffff">
  
  <!-- ogp -->
  <meta property="fb:admins" content="100006838625868">
  <meta property="og:title" content="<?php $title = wp_get_document_title(); echo $title; ?>">
  <meta property="og:type" content="<?php if( is_home() ) { echo 'website'; } else { echo 'article'; } ?>">
  <meta property="og:url" content="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>">
  <meta property="og:image" content="<?php if ( is_single() && wp_get_attachment_url(get_post_thumbnail_id()) != '' ) { echo wp_get_attachment_url(get_post_thumbnail_id()); } elseif ( is_single() && wp_get_attachment_url(get_post_thumbnail_id()) == '' ) { echo get_bloginfo('template_url').'/assets/images/ecdg-no-images.jpg'; } else { echo get_bloginfo('template_url').'/assets/images/ecdg-default.jpg';} ?>">
  <meta property="og:site_name" content="カラーミーショップデザインギャラリー">
  <meta property="og:description" content="<?php my_description(); ?>">

<?php wp_head(); ?>
</head>

<body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48544050-2', 'ecdesigngallery.com');
  ga('send', 'pageview');

</script>
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
<svg class="svg-defs">
  <symbol id="twitterIcon" viewBox="0 0 246.1 200">
    <path d="M246.1,23.7c-9.1,4-18.8,6.7-29,8c10.4-6.2,18.4-16.1,22.2-27.9c-9.8,5.8-20.6,10-32.1,12.3
             C198,6.1,184.9,0,170.4,0c-27.9,0-50.5,22.6-50.5,50.5c0,4,0.4,7.8,1.3,11.5C79.2,59.9,42,39.8,17.1,9.2c-4.3,7.5-6.8,16.1-6.8,25.4
             c0,17.5,8.9,33,22.5,42c-8.3-0.3-16.1-2.5-22.9-6.3c0,0.2,0,0.4,0,0.6c0,24.5,17.4,44.9,40.5,49.5c-4.2,1.2-8.7,1.8-13.3,1.8
             c-3.3,0-6.4-0.3-9.5-0.9c6.4,20.1,25.1,34.7,47.2,35.1C57.5,169.9,35.7,178,12,178c-4.1,0-8.1-0.2-12-0.7
             C22.3,191.6,48.9,200,77.4,200c92.9,0,143.7-76.9,143.7-143.7c0-2.2,0-4.4-0.1-6.5C230.8,42.7,239.3,33.8,246.1,23.7z"/>
  </symbol>
  <symbol id="facebookIcon" viewBox="0 0 88 170">
    <path d="M57,170V93h26.6l3.9-31H57V43.1c0-8.7,2.5-14.7,15-14.7l16,0v-27C86,1,75.8,0,64.8,0C41.7,0,26,14.2,26,40.1V62
             H0v31h26v77H57z"/>
  </symbol>
  <symbol id="facebookpageIcon" viewBox="0 0 200 200">
    <path d="M189.6,0H11.6C5.5,0,0,4.9,0,11v177.9C0,195,5.5,200,11.6,200H107v-77H81V92h26V70.1
             c0-25.8,15.7-39.9,38.8-39.9c11,0,21.2,0.8,23.2,1.2v27l-16,0c-12.5,0-15,6-15,14.7V92h30.5l-3.9,31H138v77h51.6
             c6.1,0,10.4-5,10.4-11.1V11C200,4.9,195.7,0,189.6,0z"/>
  </symbol>
  <symbol id="githubIcon" viewBox="0 0 32.6 31.8">
    <path d="M16.3,0C7.3,0,0,7.3,0,16.3c0,7.2,4.7,13.3,11.1,15.5c0.8,0.1,1.1-0.4,1.1-0.8c0-0.4,0-1.4,0-2.8
             c-4.5,1-5.5-2.2-5.5-2.2c-0.7-1.9-1.8-2.4-1.8-2.4c-1.5-1,0.1-1,0.1-1c1.6,0.1,2.5,1.7,2.5,1.7c1.5,2.5,3.8,1.8,4.7,1.4
             c0.1-1.1,0.6-1.8,1-2.2c-3.6-0.4-7.4-1.8-7.4-8.1c0-1.8,0.6-3.2,1.7-4.4C7.4,10.7,6.8,9,7.7,6.8c0,0,1.4-0.4,4.5,1.7
             c1.3-0.4,2.7-0.5,4.1-0.5c1.4,0,2.8,0.2,4.1,0.5c3.1-2.1,4.5-1.7,4.5-1.7c0.9,2.2,0.3,3.9,0.2,4.3c1,1.1,1.7,2.6,1.7,4.4
             c0,6.3-3.8,7.6-7.4,8c0.6,0.5,1.1,1.5,1.1,3c0,2.2,0,3.9,0,4.5c0,0.4,0.3,0.9,1.1,0.8c6.5-2.2,11.1-8.3,11.1-15.5
             C32.6,7.3,25.3,0,16.3,0z"/>
  </symbol>
  <symbol id="feedlyIcon" viewBox="0 0 226.5 200">
    <path d="M130.8,7.3c-9.7-9.7-25.5-9.7-35.2,0L7.3,95.6c-9.7,9.7-9.7,25.5,0,35.2l63.1,63.1
             c4.4,3.8,10.1,6.1,16.4,6.1h53c6.9,0,13.2-2.8,17.7-7.3l61.8-61.8c9.7-9.7,9.7-25.5,0-35.2L130.8,7.3z M66.6,124.6
             c-0.6,0.6-1.5,1-2.5,1h-7.6c-0.9,0-1.7-0.3-2.3-0.9l-9-9c-1.4-1.4-1.4-3.6,0-5l65.5-65.5c1.4-1.4,3.6-1.4,5,0l12.6,12.6
             c1.4,1.4,1.4,3.6,0,5L66.6,124.6z M128.3,168.7l-8.8,8.8c-0.6,0.6-1.5,1-2.5,1h-7.6c-0.9,0-1.7-0.3-2.3-0.9l-9-9
             c-1.4-1.4-1.4-3.6,0-5l12.6-12.6c1.4-1.4,3.6-1.4,5,0l12.6,12.6C129.7,165,129.7,167.3,128.3,168.7z M128.3,115.8L93.1,151
             c-0.6,0.6-1.5,1-2.5,1H83c-0.9,0-1.7-0.3-2.3-0.9l-9-9c-1.4-1.4-1.4-3.6,0-5l39.1-39.1c1.4-1.4,3.6-1.4,5,0l12.6,12.6
             C129.7,112.1,129.7,114.4,128.3,115.8z"/>
  </symbol>
  <symbol id="hatenaIcon" viewBox="0 0 200 200">
    <path d="M85.9,91.8c2.2-1.3,3.3-3.6,3.3-6.8c0-3.3-1-5.6-3.1-7C84,76.7,80,76,74.1,76H69v18h4.8
             C79.6,94,83.7,93.1,85.9,91.8z"/>
    <path d="M89.6,111.3c-2.1-1.5-6.1-2.3-11.9-2.3H69v19h8.3c5.6,0,9.6-0.6,12-2c2.4-1.4,3.5-3.8,3.5-7.1
             C92.8,115.3,91.8,112.7,89.6,111.3z"/>
    <path d="M170.4,0H99.8H29.2C13,0,0,13.5,0,29.7v70.6v70.6C0,187.2,13,200,29.2,200h70.6h70.6
             c16.2,0,29.6-12.8,29.6-29.1v-70.6V29.7C200,13.5,186.6,0,170.4,0z M129,56h21v59h-21V56z M112.5,131.4c-2,3.5-4.8,6.3-8.4,8.2
             c-3,1.6-6.6,2.7-11,3.4c-4.4,0.7-11.5,1-21.5,1H47V57h23.8c9.9,0,16.7,0.1,20.7,0.8c3.9,0.6,7.3,1.6,10.1,3.2
             c3.2,1.8,5.7,4.1,7.4,7.1c1.7,3,2.5,6.5,2.5,10.4c0,5-1.3,8.9-3.8,11.8c-2.5,2.9-6.6,5.1-12.1,6.7c6.2,0.5,11.1,2.7,14.5,6.6
             c3.5,3.9,5.2,9.1,5.2,15.6C115.4,123.7,114.4,127.8,112.5,131.4z M139.5,144.5c-6.5,0-11.8-5.3-11.8-11.8c0-6.5,5.3-11.8,11.8-11.8
             c6.5,0,11.8,5.3,11.8,11.8C151.3,139.2,146,144.5,139.5,144.5z"/>
  </symbol>
  <symbol id="shareIcon" viewBox="0 0 200 200">
    <path d="M170,140c-9.3,0-17.6,4.3-23.1,11l-87.9-43.9c0.6-2.3,0.9-4.6,0.9-7.1c0-2.5-0.4-4.8-0.9-7.1L146.9,49
             c5.5,6.7,13.7,11,23.1,11c16.6,0,30-13.4,30-30c0-16.6-13.4-30-30-30s-30,13.4-30,30c0,2.5,0.4,4.8,0.9,7.1L53.1,81
             C47.6,74.3,39.3,70,30,70C13.4,70,0,83.4,0,100c0,16.6,13.4,30,30,30c9.3,0,17.6-4.3,23.1-11l87.9,43.9c-0.6,2.3-0.9,4.6-0.9,7.1
             c0,16.6,13.4,30,30,30s30-13.4,30-30C200,153.4,186.6,140,170,140z"/>
  </symbol>
  <symbol id="searchIcon" viewBox="0 0 200 200">
    <path d="M200,191.2l-53.6-53.6c12.6-14.6,20.2-33.5,20.2-54.3c0-46-37.3-83.3-83.3-83.3S0,37.3,0,83.3
             s37.3,83.3,83.3,83.3c20.8,0,39.7-7.6,54.3-20.2l53.6,53.6L200,191.2z M13.3,83.3c0-38.7,31.3-70,70-70s70,31.3,70,70
             c0,19.3-7.8,36.8-20.5,49.5l0,0c-12.7,12.7-30.2,20.5-49.5,20.5C44.7,153.3,13.3,122,13.3,83.3z"/>
  </symbol>
  <symbol id="heartIcon" viewBox="0 0 511.6 438.5">
	<path d="M475.4,35.4C451.2,11.8,417.8,0,375.2,0c-11.8,0-23.8,2-36.1,6.1c-12.3,4.1-23.7,9.6-34.3,16.6
             c-10.6,6.9-19.6,13.5-27.3,19.6c-7.6,6.1-14.8,12.6-21.7,19.4c-6.9-6.8-14.1-13.3-21.7-19.4c-7.6-6.1-16.7-12.6-27.3-19.6
             c-10.6-7-22-12.5-34.3-16.6C160.3,2,148.3,0,136.5,0c-42.6,0-76,11.8-100.2,35.4C12.1,59,0,91.7,0,133.6c0,12.8,2.2,25.9,6.7,39.4
             c4.5,13.5,9.6,25,15.3,34.5c5.7,9.5,12.2,18.8,19.4,27.8c7.2,9,12.5,15.3,15.8,18.7c3.3,3.4,5.9,5.9,7.9,7.4l178.2,171.9
             c3.4,3.4,7.6,5.1,12.6,5.1c4.9,0,9.1-1.7,12.6-5.1l177.9-171.3c43.6-43.6,65.4-86.4,65.4-128.5C511.6,91.7,499.5,59,475.4,35.4z"/>
  </symbol>
  <symbol id="linkIcon" viewBox="0 0 511.6 438.5">
    <path d="M392.9,255.8h-18.3c-2.7,0-4.9,0.9-6.6,2.6c-1.7,1.7-2.6,3.9-2.6,6.6v91.4c0,12.6-4.5,23.3-13.4,32.3
             c-8.9,8.9-19.7,13.4-32.3,13.4H82.2c-12.6,0-23.3-4.5-32.3-13.4c-8.9-8.9-13.4-19.7-13.4-32.3V118.8c0-12.6,4.5-23.3,13.4-32.3
             c8.9-8.9,19.7-13.4,32.3-13.4h201c2.7,0,4.9-0.9,6.6-2.6c1.7-1.7,2.6-3.9,2.6-6.6V45.7c0-2.7-0.9-4.9-2.6-6.6
             c-1.7-1.7-3.9-2.6-6.6-2.6h-201c-22.6,0-42,8-58.1,24.1C8,76.8,0,96.1,0,118.8v237.5c0,22.6,8,42,24.1,58.1
             c16.1,16.1,35.5,24.1,58.1,24.1h237.5c22.6,0,42-8,58.1-24.1C394,398.3,402,379,402,356.3V265c0-2.7-0.9-4.9-2.6-6.6
             C397.7,256.7,395.5,255.8,392.9,255.8z"/>
    <path d="M506.2,5.4c-3.6-3.6-7.9-5.4-12.9-5.4H347.2c-4.9,0-9.2,1.8-12.8,5.4c-3.6,3.6-5.4,7.9-5.4,12.8s1.8,9.2,5.4,12.8
             l50.2,50.2L198.4,267.5c-1.9,1.9-2.9,4.1-2.9,6.6c0,2.5,1,4.7,2.9,6.6l32.5,32.5c1.9,1.9,4.1,2.9,6.6,2.9s4.7-0.9,6.6-2.9
             l186.1-186.1l50.3,50.2c3.6,3.6,7.9,5.4,12.8,5.4s9.2-1.8,12.9-5.4c3.6-3.6,5.4-7.9,5.4-12.8V18.3C511.6,13.3,509.8,9,506.2,5.4z"/>
  </symbol>
  <symbol id="arrowDownIcon" viewBox="0 0 284.9 166.2">
    <path d="M282.1,17.1L267.8,2.9C265.9,1,263.7,0,261.2,0c-2.5,0-4.7,1-6.6,2.9L142.5,115.1L30.3,2.9C28.4,1,26.2,0,23.7,0
             c-2.5,0-4.7,1-6.6,2.9L2.9,17.1C0.9,19,0,21.2,0,23.7c0,2.5,1,4.7,2.9,6.6l133,133c1.9,1.9,4.1,2.9,6.6,2.9s4.7-1,6.6-2.9
             l133.1-133c1.9-1.9,2.8-4.1,2.8-6.6C284.9,21.2,284,19,282.1,17.1z"/>
  </symbol>
  <symbol id="arrowUpIcon" viewBox="0 0 284.9 166.2">
    <path d="M284.9,142.5c0-2.5-0.9-4.7-2.8-6.6L149,2.9C147.1,1,144.9,0,142.5,0s-4.7,1-6.6,2.9l-133,133C1,137.8,0,140,0,142.5
             c0,2.5,0.9,4.7,2.9,6.6l14.3,14.3c1.9,1.9,4.1,2.9,6.6,2.9c2.5,0,4.7-1,6.6-2.9L142.5,51.1l112.2,112.2c1.9,1.9,4.1,2.9,6.6,2.9
             c2.5,0,4.7-0.9,6.6-2.9l14.3-14.3C284,147.1,284.9,144.9,284.9,142.5z"/>
  </symbol>
</svg>


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
            <form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="p-search__inner">
              <input type="search" id="s" name="s" class="p-search__submit" value="">
              <p class="p-search__icon"><svg class="c-icon search"><use xlink:href="#searchIcon"/></svg></p>
            </form>
          </div>
        </div>
      </div>
  
      <div class="p-cover__sns c-sns">
        <div class="c-sns__inner">
          <p class="c-sns__txt"><a href="http://px.a8.net/svt/ejp?a8mat=2BJERR+6CMH2Q+348+HWXLE" target="_blank">カラーミーショップ<svg class="c-icon link"><use xlink:href="#linkIcon"/></svg></a><img border="0" width="1" height="1" src="http://www10.a8.net/0.gif?a8mat=2BJERR+6CMH2Q+348+HWXLE" alt=""></p>
          <input type="checkbox" class="c-form--checked" id="checked">
          <label class="c-sns__svg--hidden" for="checked"><svg class="c-icon share"><use xlink:href="#shareIcon"/></svg></label>
          <div class="c-sns__inner--visible">
            <p class="c-sns__svg"><a href="https://twitter.com/intent/tweet?original_referer=<?php $str = esc_url(home_url('/')); $search = array(':','/'); $replace = array('%3A','%2F'); $home = str_replace($search, $replace, $str); echo $home . '&text=カラーミーショップで制作されたネットショップの事例集 - COLOR ME SHOP DESIGN GALLERY' . '&url=' . $home; ?>" onclick="window.open(this.href, 'twetterWindow', 'width=650, height=450, menubar=no, toolbar=no, scrollbars=yes'); return false;" target="_blank"><svg class="c-icon tw"><use xlink:href="#twitterIcon"/></svg></a></p>
            <p class="c-sns__svg"><a href="https://www.facebook.com/sharer.php?src=bm&amp;u=<?php $str = esc_url(home_url('/')); $search = array(':','/'); $replace = array('%3A','%2F'); $home = str_replace($search, $replace, $str); echo $home . '&amp;t=カラーミーショップで制作されたネットショップの事例集 - COLOR ME SHOP DESIGN GALLERY'; ?>" onclick="window.open(this.href, 'facebookWindow', 'width=650, height=450, menubar=no, toolbar=no, scrollbars=yes'); return false;" target="_blank"><svg class="c-icon fb"><use xlink:href="#facebookIcon"/></svg></a></p>
            <p class="c-sns__svg"><a href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php echo esc_url(home_url('/')); ?>&title=カラーミーショップで制作されたネットショップの事例集 - COLOR ME SHOP DESIGN GALLERY" onclick="window.open(this.href, 'hatenaWindow', 'width=510, height=450, menubar=no, toolbar=no, scrollbars=yes'); return false;" target="_blank"><svg class="c-icon hatena"><use xlink:href="#hatenaIcon"/></svg></a></p>
            <p class="c-sns__svg"><a href='http://cloud.feedly.com/#subscription%2Ffeed%2Fhttp%3A%2F%2Fecdesigngallery.com%2Ffeed%2F' target="_blank" title="Follow"><svg class="c-icon feedly"><use xlink:href="#feedlyIcon"/></svg></a></p>
          </div>
        </div>
      </div>
    
    </div>
  </div>
</section>