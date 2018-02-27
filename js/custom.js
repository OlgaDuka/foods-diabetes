'use strict';
(function ($) {
// Preloader - анимация, пока ждем загрузку страницы (шрифты, скрипты и т.д.)
  $(window).load(function () {
    $('.status').fadeOut();
    $('.preloader').delay(300).fadeOut('slow');
  });

  $(document).ready(function () {
    var toggle = document.querySelector('.header__toggle');
    var menu = document.querySelector('.menu');

    // ----------------------------------------------
    // "Мягкий" скроллинг при нажатии на пункт меню или кнопки перехода
    // ----------------------------------------------

    $(document).on('scroll', onScroll);

    $('a[href*=#]').on('click', function (e) {
      var anchor = $(this);
      $(document).off('scroll');

      $('html, body').stop().animate({'scrollTop': $(anchor.attr('href')).offset().top}, 1000, function () {
        $(document).on('scroll', onScroll);
      });
    });

    $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
        $('.scroll--up').fadeIn();
      } else {
        $('.scroll--up').fadeOut();
      }
    });

    // ----------------------------------------------
    // Меню
    // ----------------------------------------------

    // Закрываем меню, если JS работает
    menu.classList.remove('menu--nojs');
    menu.classList.add('menu--close');
    toggle.classList.remove('header__toggle--cross');
    // Переключаем состояние меню по кнопке
    toggle.addEventListener('click', function () {
      menu.classList.toggle('menu--close');
      toggle.classList.toggle('header__toggle--cross');
    });

    // Закрываем меню, если оно выпадающее, переключаем вид кнопки
    var onMenuClick = function () {
      menu.classList.add('menu--close');
      toggle.classList.toggle('header__toggle--cross');
    };

    // Добавляем событие клика на меню
    menu.addEventListener('click', onMenuClick);

  });
})(jQuery);
