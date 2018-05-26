<?php get_header(); ?>
    <main class="content">

      <section class="about">
        <h2 class="about__title">Кратко о нашем проекте</h2>
        <?php if(!dynamic_sidebar('project_id')): ?>
        <?php endif; ?>
      </section>

      <section class="tasks" id="tasks">
        <div class="tasks__container">
          <h2 class="tasks__title">Наши цели и задачи</h2>
		      <p class="tasks__intro">Реализация проекта поможет решить ряд проблем:</p>

        <?php $query = new WP_Query(array(
          'category_name' => 'task',
          'orderby' => 'title',
          'order' => 'ASC'
        )) ?>

         <ol class="tasks__list">

           <?php if ($query->have_posts()) :  while ($query->have_posts()) : $query->the_post(); ?>

	            <li class="tasks__item">
    	          <div class="tasks__problem">
					        <p class="tasks__text"><span class="tasks__name">Проблема:</span><?php echo get_post_meta(get_the_ID(), 'task_problem', 1); ?></p>
					        <p class="tasks__text"><span class="tasks__name">Решение:</span><?php echo get_post_meta(get_the_ID(), 'task_decision', 1); ?></p>
              	</div>
            	</li>
            <?php endwhile; ?>
              <?php wp_reset_postdata(); // сбрасываем переменную $post ?>
            <?php else: ?>
              <h2>Записей нет.</h2>
            <?php endif; ?>

		      </ol>
        </div>
      </section>

       <section class="partner" id="partner">
        <h2 class="partner__title">Наши партнеры</h2>

	    <?php $slider = new WP_Query(array(
    	    'post_type' => 'slider',
        	'order' => 'ASC',
	        'meta_query' => array(
    	      array('key' => 'name_partner'),
        	  array('key' => 'link_site'),
          	  array('key' => 'name_firm'),
        	)
      	)); ?>

        <div class="swiper-container swiper-container--1">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">

              <?php if ($slider->have_posts()) :  while ($slider->have_posts()) : $slider->the_post(); ?>
            	   <!-- Slides -->
            	     <div class="swiper-slide swiper-slide--partner">
              	     	<a href="<?php echo get_post_meta(get_the_ID(), 'link_site', 1); ?>" class="partner__link">
				  		          <?php the_post_thumbnail('full'); ?>
					 	          </a>
            	     </div>
			  <?php endwhile; ?>
			  <?php wp_reset_postdata(); // сбрасываем переменную $post ?>
	      	</div>

          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev swiper-button-prev--1"></div>
          <div class="swiper-button-next swiper-button-next--1"></div>
		</div>
		<?php else: ?>
          <div><h2>Место для слайдера партнеров</h2></div> <!-- no posts found -->
        <?php endif; ?>
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

	      <?php $slider1 = new WP_Query(array(
    	      'post_type' => 'slider1',
        	  'order' => 'ASC',
      	    'meta_query' => array(
        	    array('key' => 'name_member'),
            	array('key' => 'post_team'),
       		    array('key' => 'link_fb'),
            	array('key' => 'link_insta'),
            	array('key' => 'link_skype')
          	   )
             ));
      	  ?>

		  <!-- Slider3 container -->
          <div class="swiper-container swiper-container--3">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
				<?php if ($slider1->have_posts()) :  while ($slider1->have_posts()) : $slider1->the_post(); ?>
              		<!-- Slides -->
              		<div class="swiper-slide swiper-slide--member">
						<img class="team__photo" src="<?php echo get_the_post_thumbnail_url(); ?>" >
						<span class="team__name"><?php echo get_post_meta(get_the_ID(), 'name_member', 1); ?></span>
                		<span class="team__post"><?php echo get_post_meta(get_the_ID(), 'post_team', 1); ?></span>
						<ul class="team__social social">
						  <li class="social__item">
							<a href="<?php echo get_post_meta(get_the_ID(), 'link_fb', 1); ?>" class="social__link">
							  <svg class="social__icon" width="50" height="50" aria-label="Facebook">
								<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#facebook"></use>
							  </svg>
							</a>
						  </li>
						  <li class="social__item">
							<a href="<?php echo get_post_meta(get_the_ID(), 'link_insta', 1); ?>" class="social__link">
							  <svg class="social__icon" width="50" height="50" aria-label="Instagram">
								<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#instagram"></use>
							  </svg>
							</a>
						  </li>
						  <li class="social__item">
							<a href="<?php echo get_post_meta(get_the_ID(), 'link_skype', 1); ?>" class="social__link">
							  <svg class="social__icon" width="50" height="50" aria-label="Skype">
								<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#skype"></use>
							  </svg>
							</a>
						  </li>
						</ul>
					</div>
  			  <?php endwhile; ?>
			  <?php wp_reset_postdata(); // сбрасываем переменную $post ?>
	      	</div>

          	<!-- If we need navigation buttons -->
          	<div class="swiper-button-prev swiper-button-prev--3"></div>
          	<div class="swiper-button-next swiper-button-next--3"></div>
		  </div>
		  <?php else: ?>
          	<div><h2>Место для слайдера Команда</h2></div> <!-- no posts found -->
          <?php endif; ?>
		</div>
      </section>

      <section class="stat">
        <h2 class="visually-hidden">Статистика</h2>

        <?php $query = new WP_Query(array(
          'category_name' => 'stat',
          'orderby' => 'title',
          'order' => 'ASC'
        )) ?>

        <ul class="stat__list">

          <?php if ($query->have_posts()) :  while ($query->have_posts()) : $query->the_post(); ?>

          <li class="stat__item">
            <svg class="stat__icon" width="95" height="95" aria-label="Community">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php echo get_post_meta(get_the_ID(), 'stat_img', 1); ?>"></use>
            </svg>
            <span class="stat__value"><?php echo get_post_meta(get_the_ID(), 'stat_num', 1); ?></span>
            <span class="stat__description"><?php echo get_post_meta(get_the_ID(), 'stat_text', 1); ?></span>
          </li>

          <?php endwhile; ?>
            <?php wp_reset_postdata(); // сбрасываем переменную $post ?>
          <?php else: ?>
            <h2>Записей нет.</h2>
          <?php endif; ?>

        </ul>
      </section>

      <section class="result" id="result">
        <h2 class="result__title">Результаты работы</h2>

  	    <?php $slider2 = new WP_Query(array(
    	    'post_type' => 'slider2',
        	'order' => 'ASC',
	        'meta_query' => array(
    	      array('key' => 'name_catering'),
			  array('key' => 'name_nutritionist'),
			  array('key' => 'address_catering'),
        	  array('key' => 'link_catering'),
          	  array('key' => 'link_photos'),
        	)
      	)); ?>

        <div class="swiper-container swiper-container--4"><!-- Additional required wrapper -->
          <div class="swiper-wrapper"><!-- Slides -->

			<?php if ($slider2->have_posts()) :  while ($slider2->have_posts()) : $slider2->the_post(); ?>

                <div class="swiper-slide swiper-slide--restaurant">
                  <?php the_post_thumbnail(array(585,467), array('class' => 'result__photo')); ?>
                  <div class="result__description">
					<h3 class="result__name"><?php echo get_post_meta(get_the_ID(), 'name_catering', 1); ?></h3>
					<p class="result__text"><?php echo get_post_meta(get_the_ID(), 'address_catering', 1); ?></p>
                    <?php the_content(); ?>
					<a href="<?php echo get_post_meta(get_the_ID(), 'link_catering', 1); ?>" class="result__link">Перейти на сайт</a>
					<a href="<?php echo get_post_meta(get_the_ID(), 'link_photos', 1); ?>" class="result__link">Посмотреть фотоотчет</a>
                  </div>
                </div>
            <?php endwhile; ?>
			<?php wp_reset_postdata(); // сбрасываем переменную $post ?>

		  </div>

          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev swiper-button-prev--4"></div>
          <div class="swiper-button-next swiper-button-next--4"></div>
        </div>

		  <?php else: ?>
           <div><h2>Место для слайдера с результатами работы</h2></div> <!-- no posts found -->
          <?php endif; ?>

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
