<?php get_header('page'); ?>
  <main class="content">
    <h2 class="content__title">Фотогалерея</h2>

    <section class="gallery">

      <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

        <?php the_content(); ?>

      <?php endwhile; ?>
       <?php wp_reset_postdata(); // сбрасываем переменную $post ?>
     <?php else: ?>
       <h2>Записей нет.</h2>
     <?php endif; ?>

    </section>

<?php get_footer(); ?>
