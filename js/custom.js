'use strict';

(function () {
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
