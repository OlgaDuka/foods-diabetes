'use strict';
$(function () {
  // ---------------------------------------
  // Меню (Стандартные функции JQuery)
  // -----------------------------------------
  var desktopWidth = 1170;
  $('.header__menu').removeClass('menu--nojs');
  if ($(window).width() < desktopWidth) {
    $('.header__toggle').removeClass('header__toggle--cross');
    $('.header__menu').addClass('menu--close');
    $('.header__menu').slideUp('slow');
    $('.header__title').removeClass('header__title--hidden');
    $('.header__intro').removeClass('header__intro--hidden');
  }
  $('.header__toggle').click(function () {
    $('.header__menu').slideToggle('slow');
    $('.header__title').slideToggle('fast');
    $('.header__intro').slideToggle('fast');
    $('.header__toggle').toggleClass('header__toggle--cross');
  });

  // Перезагрузка страницы, если изменение идет между мобильной и десктопной версиями
  var oldWidth = $(window).width();
  $(window).resize(function () {
    var newWith = $(window).width();
    if ((oldWidth < desktopWidth) && (newWith >= desktopWidth)) {
      location.reload();
      $('.header__menu').removeClass('menu--nojs');
      $('.header__menu').removeClass('menu--close');
      return;
    } else if ((oldWidth >= desktopWidth) && (newWith < desktopWidth)) {
      location.reload();
    }
  });

  // -------------------------------------------------------------------
  // Оживление слайдеров с помощью плагина Swiper (работает без JQuery)
  // --------------------------------------------------------------------
  // Слайдер Партнеры
  var swiper1 = new Swiper('.swiper-container--1', {
    slidesPerView: 'auto',
    spaceBetween: 0,
    slidesPerGroup: 1,
    loop: true,
    loopFillGroupWithBlank: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
  // Слайдер Наша команда
  var swiper3 = new Swiper('.swiper-container--3', {
    slidesPerView: 'auto',
    spaceBetween: 0,
    slidesPerGroup: 1,
    loop: true,
    loopFillGroupWithBlank: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
  // Слайдер Результаты работы
  var swiper4 = new Swiper('.swiper-container--4', {
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });

  // -------------------------------------------------------------
  // Стандартные функции JQuery для скроллинга
  // -------------------------------------------------------------
  // Плавный скроллинг по сайту до якорей при нажатии на пункты меню
  $('#menu').on('click', 'a', function (event) {
    event.preventDefault();
    // забираем идентификатор блока с атрибута href
    var id = $(this).attr('href');
    // узнаем высоту от начала страницы до блока на который ссылается якорь
    var top = $(id).offset().top;
    // анимируем переход на расстояние - top за 1500 мс
    $('body,html').animate({scrollTop: top}, 1500);
  });
  // Появление и исчезновение кнопки "наверх" на первом экране
  var limit = $(window).height() / 3;
  var $backToTop = $('#scroll-up');
  $(window).scroll(function () {
    if ($(this).scrollTop() > limit) {
      $backToTop.fadeIn();
    } else {
      $backToTop.fadeOut();
    }
  });
  // Мягкий скролл к началу сайта
  $backToTop.click(function () {
    $('body,html').animate({scrollTop: 0}, 1500);
    return false;
  });

  // Скроллинг на десктопной версии блока идей потребителей
  // с помощью плагина Scroll-pane (JQuery)
  $('.scroll-pane').jScrollPane({
    showArrows: false,
    enableKeyboardNavigation: false,
    hideFocus: true,
    verticalDragMinHeight: 90,
    verticalDragMaxHeight: 90,
    autoReinitialise: true
  });
});
