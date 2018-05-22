<?php

/**
* загружаемые скрипты и стили
*/
function load_style_script(){
	$template_url = get_template_directory_uri();
  echo $template_url;

	wp_enqueue_script('jquery', $template_url.'/js/jquery.min.js');
	wp_enqueue_script('jqMousewheel', $template_url.'/js/jquery.mousewheel.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('jqScrollpane', $template_url.'/js/jquery.jscrollpane.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('jqSwiper', $template_url.'/js/swiper.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('jqCustom', $template_url.'/js/custom.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('jqMyfirst',$template_url.'/js/myfirst.js', array('jquery'), '1.0', true);

	wp_enqueue_style('cssSwiper', $template_url.'/css/swiper.min.css');
  wp_enqueue_style('style', $template_url.'/style.css');  //Здесь изменила путь на файл стилей
}

/**
* загружаем скрипты и стили
*/
add_action('wp_enqueue_scripts', 'load_style_script');

/**
*  Поддержка миниатюр
*/
add_theme_support('post-thumbnails');
set_post_thumbnail_size(585,467);


register_sidebar(array('name' => 'Menu',
 											'id' => 'menu_id',
											'description' => 'Меню сайта',
											'before_widget' => '',
											'after_widget' => ''));
register_sidebar(array('name' => 'Project',
 											'id' => 'project_id',
											'description' => 'О проекте',
											'before_widget' => '',
											'after_widget' => ''));
register_sidebar(array('name' => 'Tasks',
 											'id' => 'tasks_id',
											'description' => 'Наши задачи',
											'before_widget' => '',
											'after_widget' => ''));
register_sidebar(array('name' => 'Our team',
 											'id' => 'team_id',
											'description' => 'Добавление в виджет Наша коменда',
											'before_widget' => '',
											'after_widget' => ''));
/*
register_sidebar(array('name' => 'Partners',
 											'id' => 'partners_id',
											'description' => 'Добавление в виджет Наши партнеры',
											'before_widget' => '',
											'after_widget' => ''));
*/

/**
** Создаем пункт СЛАЙДЕР в админ-панели
**/

add_action('init', 'slider_index');

function slider_index() {
  register_post_type('slider', array(
    'public' => true,
    'supports' => array('title', 'editor', 'thumbnail'),
    'menu_position' => 100,
    'labels' => array(
      'name' => 'Слайдер',
      'all_items' => 'Все слайды',
      'add_new' => 'Новый слайд',
      'add_new_item' => 'Добавить слайд'
    )
  ));
}

register_sidebar(array('name' => 'Results',
 											'id' => 'results_id',
											'description' => 'Добавление информации через виджет',
											'before_widget' => '',
											'after_widget' => ''));
register_sidebar(array('name' => 'Feedback',
				 							'id' => 'feedback_id',
											'description' => 'Форма обратной связи',
											'before_widget' => '',
											'after_widget' => ''));

?>
