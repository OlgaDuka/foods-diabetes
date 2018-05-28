'use strict';
var $j = jQuery.noConflict();
$j(function () {
  // ---------------------------------------
  // Меню (Стандартные функции JQuery)
  // -----------------------------------------
  var desktopWidth = 1170;
  $j('.header__menu').removeClass('menu--nojs');
  if ($j(window).width() < desktopWidth) {
    $j('.header__toggle').removeClass('header__toggle--cross');
    $j('.header__menu').addClass('menu--close');
    $j('.header__menu').slideUp('slow');
    $j('.header__title').removeClass('header__title--hidden');
    $j('.header__intro').removeClass('header__intro--hidden');
  }

  $j('.header__toggle').click(function () {
    $j('.header__menu').slideToggle('slow');
    $j('.header__title').slideToggle('fast');
    $j('.header__intro').slideToggle('fast');
    $j('.header__toggle').toggleClass('header__toggle--cross');
  });

  // Перезагрузка страницы, если изменение идет между мобильной и десктопной версиями
  var oldWidth = $j(window).width();
  $j(window).resize(function () {
    var newWith = $j(window).width();
    if ((oldWidth < desktopWidth) && (newWith >= desktopWidth)) {
      location.reload();
      $j('.header__menu').removeClass('menu--nojs');
      $j('.header__menu').removeClass('menu--close');
      return;
    } else if ((oldWidth >= desktopWidth) && (newWith < desktopWidth)) {
      location.reload();
    }
  });

  // -------------------------------------------------------------
  // Стандартные функции JQuery для скроллинга
  // -------------------------------------------------------------
  // Плавный скроллинг по сайту до якорей при нажатии на пункты меню
  $j('#menu').on('click', 'a', function (event) {
    event.preventDefault();
    // забираем идентификатор блока с атрибута href
    var id = $j(this).attr('href');
    // узнаем высоту от начала страницы до блока на который ссылается якорь
    var top = $j(id).offset().top;
    // анимируем переход на расстояние - top за 1500 мс
    $j('body,html').animate({scrollTop: top}, 1500);
  });

  // Скроллинг на десктопной версии блока идей потребителей
  // с помощью плагина Scroll-pane (JQuery)
  $j('.scroll-pane').jScrollPane({
    showArrows: false,
    enableKeyboardNavigation: false,
    hideFocus: true,
    verticalDragMinHeight: 90,
    verticalDragMaxHeight: 90,
    autoReinitialise: true
  });
});
