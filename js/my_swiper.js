'use strict';
(function () {
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
})();
