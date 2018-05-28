'use strict';
var $s = jQuery.noConflict();
$s(function () {
  // Появление и исчезновение кнопки "наверх" на первом экране
  var limit = $s(window).height() / 3;
  var $backToTop = $s('#scroll-up');
  $s(window).scroll(function () {
    if ($s(this).scrollTop() > limit) {
      $backToTop.fadeIn();
    } else {
      $backToTop.fadeOut();
    }
  });

  // Мягкий скролл к началу сайта
  $backToTop.click(function () {
    $s('body,html').animate({scrollTop: 0}, 1500);
    return false;
  });
});
