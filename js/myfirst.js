'use strict';
$(function () {
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

  $('#menu').on('click', 'a', function (event) {
    // отменяем стандартную обработку нажатия по ссылке
    event.preventDefault();
    // забираем идентификатор бока с атрибута href
    var id = $(this).attr('href');
    // узнаем высоту от начала страницы до блока на который ссылается якорь
    var top = $(id).offset().top;
    // анимируем переход на расстояние - top за 1500 мс
    $('body,html').animate({scrollTop: top}, 1500);
  });

  var limit = $(window).height() / 3;
  var $backToTop = $('#scroll-up');

  $(window).scroll(function () {
    if ($(this).scrollTop() > limit) {
      $backToTop.fadeIn();
    } else {
      $backToTop.fadeOut();
    }
  });

  $backToTop.click(function () {
    $('body,html').animate({scrollTop: 0}, 1500);
    return false;
  });

  $('.scroll-pane').jScrollPane({
    showArrows: false,
    enableKeyboardNavigation: false,
    hideFocus: true,
    verticalDragMinHeight: 90,
    verticalDragMaxHeight: 90,
    autoReinitialise: true
  });
});
