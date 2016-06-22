(function () {
//  "use strict";
  
  
  
  function coverFixed() {
    var $win = $(window),
        elm = document.getElementById('js-cover');
    if (elm === null) {
      return false;
    }
    $(elm).each(function() {
      var position = $(this).offset().top,
          winScrollTop = $win.scrollTop();
      if (winScrollTop > position) {
        $(this).addClass('is-fixed');
      } else if (winScrollTop < position) {
        $(this).removeClass('is-fixed');
      }
    });
  }
  
  
  function modalOpen() {
    var $open = $('#is-open'),
        $close = $('#is-close'),
        $modal = $('#js-modal');
    $close.on('click', function() {
      $modal.removeClass('is-visible');
    });
    $open.on('click', function() {
      $modal.addClass('is-visible');
    });
  }
  
  
  function toTop() {
    $('a[href^="#"]').on('click', function() {
      var speed = 300,
          href = $(this).attr('href'),
          target = $(href === '#' || href === '' ? 'html' : href),
          position = target.offset().top;
      $('html, body').animate({ scrollTop: position }, speed, 'swing');
      return false;
    });
  }
  
  
  $.fn.inViews = function(inviewCase) {
    var win = $(window),
        views = {},
        elm = {};
    views.top = win.scrollTop();//                  画面のスクロールトップ位置（スクロールのたびに変動）
    views.mid = views.top + win.height() / 2;//     画面のセンター位置（スクロールしても常にセンターの位置を取得している）
    views.bottom = views.top + win.height();//      画面のボトム位置（スクロールしても常にボトムの位置を取得している）
    elm.top = $(this).offset().top;//               要素のトップ値
    elm.bottom = elm.top + $(this).outerHeight();// 要素のボトム値
    switch(inviewCase) {
      case 'whmid':
        return(elm.top > win.height() / 2);//   要素のトップが画面の高さの半分（固定値）を上回ったら（固定値のため、fixed要素にのみ有効）
      case 'wh':
        return (elm.top > win.height());//      要素のトップが画面の高さ（固定値）を上回ったら（固定値のため、fixed要素にのみ有効）
      case 'bottom':
        return (elm.bottom <= views.bottom);//  要素が完全に現れたら（画面上部の値＋画面の高さの値が、要素ボトムの値を超えたら）
      case 'center':
        return (elm.top <= views.mid);//        要素のトップが画面の中央まできたら（画面上部の値＋画面半分の高さの値が、要素トップの値を超えたら）
      case 'top':
        return (elm.top <= views.bottom);//     要素のトップが画面に現れたら（画面上部の値＋画面の高さの値が、要素トップの値を超えたら）
      default:
        return ((elm.top <= views.bottom) && (elm.top >= views.top));
    }
  };
  
  
  function scrollInViews() {
    var win = $(window),
        winH = win.height(),
        winTop = win.scrollTop(),
        $wrap = $('#js-wrapper');
    if (winTop > winH / 3) {
      $wrap.addClass('is-active');
    } else {
      $wrap.removeClass('is-active');
    }
  }
  
  
  function init() {
    toTop();
    modalOpen();
  }
  
  
  function scrollInit() {
    coverFixed();
    scrollInViews();
  }
  
  
  $(function () {
    var win = $(window);
    win.on('scroll', function() {
      scrollInit();
    });
        
    init();
  });
  
}());























































