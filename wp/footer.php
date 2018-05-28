<section class="contacts" id="contacts">
  <div class="contacts__container">
    <h2 class="contacts__title">Свяжитесь с нами</h2>
    <div class="contacts__form form">
      <?php if(!dynamic_sidebar('feedback_id')): ?>
      <?php endif; ?>
    </div>
    <p class="contacts__data">
      <svg class="contacts__icon" width="26" height="26" aria-label="Address">
        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#maps-and-flags"></use>
      </svg>г. КИЕВ, УЛИЦА ХРЕЩАТИК, 1
    </p>
    <p class="contacts__data">
      <a href="tel:+38-(097)-88-88-888">
        <svg class="contacts__icon" width="26" height="26" aria-label="Phone">
          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#phone-receiver"></use>
        </svg>+38-(097)-88-88-888
      </a>
    </p>
    <p class="contacts__data contacts__data--email">
      <a  href="mailto:foodanddiabetes@gmail.com">
        <svg class="contacts__icon" width="26" height="26" aria-label="Email">
          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close-envelope"></use>
        </svg>foodanddiabetes@gmail.com
      </a>
    </p>
    <p class="contacts__data contacts__data--social">
      <a href="https://www.facebook.com/FoodAndDiabetes/">
        <svg class="contacts__icon" width="26" height="26" aria-label="fb">
          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#facebook"></use>
        </svg>Наша страница в Facebook
      </a>
    </p>
  </div>
</section>
</main>

<footer class="footer">
      <div class="footer__container">
        <div class="footer__copyright">© 2018 - Все права защищены</div>
        <div class="footer__creator">Design by <a class="footer__link" href="https://www.behance.net/elena-mykytyuk">Elena Mykytyuk</a></div>
        <div class="footer__creator">Developed by <a class="footer__link" href="https://olgaduka.github.io/MyPortfolio/">Olga Duka</a></div>
      </div>
    </footer>

    <!-- Scroll to top -->
    <div class="scroll scroll--up">
      <a class="scroll__up" id="scroll-up" href="#home">
        <span><i class="scroll__arrow-up"></i></span>
      </a>
    </div>  <!-- Scroll to top end-->

    <?php wp_footer(); ?>
  </body>
</html>
