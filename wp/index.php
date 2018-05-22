<?php get_header(); ?>
    <main class="content">

      <section class="about">
        <h2 class="about__title">Кратко о нашем проекте</h2>
        <?php if(!dynamic_sidebar('project_id')): ?>
        <?php endif; ?>
<!--         <p class="about__text">К сожалению, с каждым годом ситуация с увеличением количества людей, страдающих сахарным диабетом, ожирением или другим заболеванием, связанным с нарушением обмена веществ, в Украине и во всем мире набирает обороты. И вы не поверите, насколько конечный результат нашего проекта упростит жизнь людям, которым жизненно важно следить и подсчитывать Ккал, Белки, Жиры, Углеводы и ХЕ. Также, эта информация будет полезна для людей, которые следят за правильным и здоровым питанием</p> -->
      </section>

      <section class="tasks" id="tasks">
        <div class="tasks__container">
          <h2 class="tasks__title">Наши цели и задачи</h2>
        <?php if(!dynamic_sidebar('tasks_id')): ?>
        <?php endif; ?>
        </div>
      </section>

    <!--  <section class="partner" id="partner">
        <h2 class="partner__title">Наши партнеры</h2>
        <?php if(!dynamic_sidebar('partners_id')): ?>
        <?php endif; ?>
      </section> -->

      <?php $slider = new WP_Query(array(
        'post_type' => 'slider',
        'order' => 'ASC',
        'meta_query' => array(
          array('key' => 'link_site'),
          array('key' => 'name_firm'),
        )
      )); ?>

      <section class="slider">
        <h2 class="slider__title">Наши партнеры:</h2>
        <?php if ($slider->have_posts()) :  while ($slider->have_posts()) : $slider->the_post(); ?>
          <div class="swiper-container swiper-container--1">
		  	<!-- Additional required wrapper -->
          	<div class="swiper-wrapper">
            	<!-- Slides -->
            	<div class="swiper-slide">
              	<a href="<?php echo get_post_meta(get_the_ID(), 'link_site', 1); ?>" class="partner__link">
				  		    <?php the_post_thumbnail('full'); ?>
					      </a>
            	</div>
	      	</div>
		  </div>
        <?php endwhile; ?>
        <!-- post navigation -->
        <?php else: ?>
          <div><h2>Место для слайдера</h2></div> <!-- no posts found -->
        <?php endif; ?>
          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev swiper-button-prev--1"></div>
          <div class="swiper-button-next swiper-button-next--1"></div>
      </section>

      <section class="ideas" id="ideas">
        <div class="ideas__container">
          <h2 class="ideas__title">Запросы потребителей</h2>
          <div class="scroll-pane">
            <div class="ideas__wrapper">

              <?php if (have_posts()) :
                query_posts('cat=4');
                 while (have_posts()) : the_post(); ?>
                  <div class="ideas__slide ideas__slide--desktop">
                    <h3 class="ideas__author"><?php the_title(); ?></h3>
                    <div class="ideas__text"><?php the_content(); ?></div>
                  </div>
              <?php endwhile; ?>
              <?php wp_reset_query(); ?>
              <?php endif; ?>
            </div>
          </div>
          <div class="ideas__btn ideas__btn--prev"></div>
          <div class="ideas__btn ideas__btn--next"></div>
          <a href="#contacts" class="ideas__link">Написать нам</a>
        </div>
      </section>

      <section class="team" id="team">
        <div class="team__container">
          <h2 class="team__title">Наша команда</h2>
          <?php if(!dynamic_sidebar('team_id')): ?>
          <?php endif; ?>
        </div>
      </section>

      <section class="stat">
        <h2 class="visually-hidden">Статистика</h2>
        <ul class="stat__list">
          <li class="stat__item">
            <svg class="stat__icon" width="95" height="95" aria-label="Community">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#community"></use>
            </svg>
            <span class="stat__value">3890</span>
            <span class="stat__description">людей, которые продвигают наши идеи</span>
          </li>
          <li class="stat__item">
            <svg class="stat__icon" width="95" height="95" aria-label="Vegetarian">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#vegetarian"></use>
            </svg>
            <span class="stat__value">285</span>
            <span class="stat__description">подсчитаных карт блюд</span>
          </li>
          <li class="stat__item">
            <svg class="stat__icon" width="95" height="95" aria-label="Deal">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#deal"></use>
            </svg>
            <span class="stat__value">28</span>
            <span class="stat__description">заведений, желающих с нами сотрудничать</span>
          </li>
          <li class="stat__item">
            <svg class="stat__icon" width="95" height="95" aria-label="Team">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#team-icon"></use>
            </svg>
            <span class="stat__value">18</span>
            <span class="stat__description">заведений, которые уже с нами</span>
          </li>
        </ul>
      </section>

      <section class="result" id="result">
        <h2 class="result__title">Результаты работы</h2>
        <div class="swiper-container swiper-container--4"><!-- Additional required wrapper -->
          <div class="swiper-wrapper"><!-- Slides -->
            <?php if (have_posts()) :
              query_posts('cat=2');
               while (have_posts()) : the_post(); ?>
                <div class="swiper-slide swiper-slide--restaurant">
                  <?php the_post_thumbnail(array(585,467), array('class' => 'result__photo')); ?>
                  <div class="result__description">
                    <?php the_content(); ?>
                  </div>
                </div>
               <?php endwhile; ?>
              <?php wp_reset_query(); ?>
            <?php endif; ?>
          </div>

        <!-- If we need navigation buttons -->
          <div class="swiper-button-prev swiper-button-prev--4"></div>
          <div class="swiper-button-next swiper-button-next--4"></div>
        </div>
        </div>
      </section>

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
<?php get_footer(); ?>
