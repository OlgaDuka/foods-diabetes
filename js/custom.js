'use strict';
(function () {
  // ----------------------------------------------
  // Меню
  // ----------------------------------------------
  var header = document.querySelector('.header');
  var toggle = header.querySelector('.header__toggle');
  var menu = header.querySelector('.menu');
  var title = header.querySelector('.header__title');
  var intro = header.querySelector('.header__intro');
  // Закрываем меню, если JS работает
  menu.classList.remove('menu--nojs');
  menu.classList.add('menu--close');
  toggle.classList.remove('header__toggle--cross');
  title.classList.remove('header__title--hidden');
  intro.classList.remove('header__intro--hidden');
  header.style.height = '280px';
  // Переключаем состояние меню по кнопке и меняем высоту хедера
  toggle.addEventListener('click', function () {
    menu.classList.toggle('menu--close');
    toggle.classList.toggle('header__toggle--cross');
    title.classList.toggle('header__title--hidden');
    intro.classList.toggle('header__intro--hidden');
    header.style.height = (header.style.height === '280px') ? '480px' : '280px';
  });

  // ----------------------------------------------
  // Слайдер
  // ----------------------------------------------
  var slides = document.querySelectorAll('.ideas__slide');
  var sliderBtns = document.querySelectorAll('.ideas__btn');
  var slideCurrentNum = 0;
  sliderBtns[0].classList.add('ideas__btn--hidden');
  slides[0].classList.add('ideas__slide--active');
  // Функции для обработки событий на слайдере
  var onClickButtonBack = function () {
    if (slideCurrentNum === (slides.length - 1)) {
      sliderBtns[1].classList.remove('ideas__btn--hidden');
    }
    slides[slideCurrentNum].classList.remove('ideas__slide--active');
    slideCurrentNum--;
    slides[slideCurrentNum].classList.add('ideas__slide--active');
    if (slideCurrentNum === 0) {
      sliderBtns[0].classList.add('ideas__btn--hidden');
    }
  };
  var onClickButtonForward = function () {
    if (slideCurrentNum === 0) {
      sliderBtns[0].classList.remove('ideas__btn--hidden');
    }
    slides[slideCurrentNum].classList.remove('ideas__slide--active');
    slideCurrentNum++;
    slides[slideCurrentNum].classList.add('ideas__slide--active');
    if (slideCurrentNum === (slides.length - 1)) {
      sliderBtns[1].classList.add('ideas__btn--hidden');
    }
  };
  // Установка обработчиков событий для слайдера
  sliderBtns[0].addEventListener('click', onClickButtonBack);
  sliderBtns[1].addEventListener('click', onClickButtonForward);

})();
