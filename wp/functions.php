<?php

/**
* загружаемые скрипты и стили
*/
function load_style_script(){
	$template_url = get_template_directory_uri();

	wp_enqueue_script('jquery', $template_url.'/js/jquery.min.js');
	wp_enqueue_script('jqMousewheel', $template_url.'/js/jquery.mousewheel.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('jqScrollpane', $template_url.'/js/jquery.jscrollpane.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('jqSwiper', $template_url.'/js/swiper.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('jqCustom', $template_url.'/js/custom.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('jqMyfirst',$template_url.'/js/myfirst.js', array('jquery'), '1.0', true);

	wp_enqueue_style('cssSwiper', $template_url.'/css/swiper.min.css');
	wp_enqueue_style('cssStyle', $template_url.'/style.css');
}

/**
* загружаем скрипты и стили
*/
add_action('wp_enqueue_scripts', 'load_style_script');

/*
* Поддержка логотипа темы
*/
add_theme_support('custom-logo');

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
register_sidebar(array('name' => 'Feedback',
				 							'id' => 'feedback_id',
											'description' => 'Форма обратной связи',
											'before_widget' => '',
											'after_widget' => ''));

/**
** Создаем пункт СЛАЙДЕР ПАРТНЕРОВ в админ-панели
**/

add_action('init', 'slider_index');

function slider_index() {
  register_post_type('slider', array(
    'public' => true,
    'supports' => array('title', 'thumbnail'),
    'menu_position' => 100,
    'labels' => array(
      'name' => 'Слайдер партнеров',
      'all_items' => 'Все слайды',
      'add_new' => 'Новый слайд',
      'add_new_item' => 'Добавить слайд'
    )
  ));
}

/**
** Добавляем блок с данными партнера на слайд в админке
**/

add_action('add_meta_boxes', 'add_custom_firm');
  function add_custom_firm(){
	   $screens = 'slider';
	    add_meta_box( 'firm_id', 'Сведения о партнере', 'add_custom_firm_callback', $screens );
  }

// HTML код блока
function add_custom_firm_callback( $post, $meta ){
	$screens = $meta['args'];

  // Используем nonce для верификации
  wp_nonce_field( plugin_basename(__FILE__), 'myplugin_noncename' );

  // Поля формы для введения данных
	echo '<label for="name_partner">' . __("Имя партнера", 'myplugin_textdomain' ) . '</label></br> ';
  echo '<input type="text" id= "name_partner" name="name_partner" value="' . get_post_meta(get_the_ID(), 'name_client', 1) . '" size="50" style="width: 100%"/></br>';
  echo '<label for="link_site">' . __("Ссылка на сайт партнера", 'myplugin_textdomain' ) . '</label></br> ';
  echo '<input type="text" id= "link_site" name="link_site" value="' . get_post_meta(get_the_ID(), 'link_site', 1) . '" size="50" style="width: 100%" /></br>';
  echo '<label for="name_firm">' . __("Название фирмы", 'myplugin_textdomain' ) . '</label></br> ';
  echo '<input type="text" id= "name_firm" name="name_firm" value="' . esc_attr(get_post_meta(get_the_ID(), 'name_firm', 1)) . '" size="50" style="width: 100%" />';
}

// Сохраняем данные, когда пост сохраняется
add_action( 'save_post', 'custom_firm_save_postdata' );

function custom_firm_save_postdata( $post_id ) {
	// Убедимся что поле установлено.
	if ( ! isset( $_POST['name_partner']) )
		return;

	// проверяем nonce нашей страницы, потому что save_post может быть вызван с другого места.
	if ( ! wp_verify_nonce( $_POST['myplugin_noncename'], plugin_basename(__FILE__) ) )
		return;

  // если это автосохранение ничего не делаем
  if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE )
  	return;

  // проверяем права юзера
  if( ! current_user_can( 'edit_post', $post_id ) )
  	return;

	// Все ОК. Теперь, нужно найти и сохранить данные
  // Очищаем значение поля input.
  $my_data = sanitize_text_field( $_POST['name_partner'] );
	// Обновляем данные в базе данных.
	update_post_meta( $post_id, 'name_partner', $my_data );
  // Очищаем значение поля input.
	$my_data = sanitize_text_field( $_POST['link_site'] );
	// Обновляем данные в базе данных.
	update_post_meta( $post_id, 'link_site', $my_data );
  // Очищаем значение поля input.
	$my_data = sanitize_text_field( $_POST['name_firm'] );
	// Обновляем данные в базе данных.
	update_post_meta( $post_id, 'name_firm', $my_data );
}

/**
** Создаем пункт СЛАЙДЕР КОМАНДА в админ-панели
**/

add_action('init', 'slider_index1');

function slider_index1() {
  register_post_type('slider1', array(
    'public' => true,
    'supports' => array('title', 'thumbnail'),
    'menu_position' => 99,
    'labels' => array(
      'name' => 'Слайдер Команда',
      'all_items' => 'Все слайды',
      'add_new' => 'Новый слайд',
      'add_new_item' => 'Добавить слайд'
    )
  ));
}

/**
** Добавляем блок с данными члена команды на слайд команды в админке
**/

add_action('add_meta_boxes', 'add_member_team');

function add_member_team(){
  $screens = 'slider1';
  add_meta_box( 'member_id', 'Сведения о члене команды', 'add_member_callback', $screens );
}

// HTML код блока
function add_member_callback( $post, $meta ){
	$screens = $meta['args'];

  // Используем nonce для верификации
  wp_nonce_field( plugin_basename(__FILE__), 'myplugin_noncename' );

  // Поля формы для введения данных
	echo '<label for="name_member">' . __("Имя члена команды", 'myplugin_textdomain' ) . '</label></br> ';
  echo '<input type="text" id= "name_member" name="name_member" value="' . get_post_meta(get_the_ID(), 'name_member', 1) . '" size="50" style="width: 100%"/></br>';
  echo '<label for="post_team">' . __("Должность в команде", 'myplugin_textdomain' ) . '</label></br> ';
  echo '<input type="text" id= "post_team" name="post_team" value="' . get_post_meta(get_the_ID(), 'post_team', 1) . '" size="50" style="width: 100%" /></br>';
  echo '<label for="link_fb">' . __("Ссылка на профиль в фейсбук", 'myplugin_textdomain' ) . '</label></br> ';
  echo '<input type="text" id= "link_fb" name="link_fb" value="' . get_post_meta(get_the_ID(), 'link_fb', 1) . '" size="50" style="width: 100%" />';
  echo '<label for="link_insta">' . __("Ссылка на профиль в инстаграмм", 'myplugin_textdomain' ) . '</label></br> ';
  echo '<input type="text" id= "link_insta" name="link_insta" value="' . get_post_meta(get_the_ID(), 'link_insta', 1) . '" size="50" style="width: 100%" />';
  echo '<label for="link_skype">' . __("Ссылка на скайп", 'myplugin_textdomain' ) . '</label></br> ';
  echo '<input type="text" id= "link_skype" name="link_skype" value="' . get_post_meta(get_the_ID(), 'link_skype', 1) . '" size="50" style="width: 100%" />';
}

// Сохраняем данные, когда пост сохраняется
add_action( 'save_post', 'team_save_postdata' );

function team_save_postdata( $post_id ) {
	// Убедимся что поле установлено.
	if ( ! isset( $_POST['name_member']) )
		return;

	// проверяем nonce нашей страницы, потому что save_post может быть вызван с другого места.
	if ( ! wp_verify_nonce( $_POST['myplugin_noncename'], plugin_basename(__FILE__) ) )
		return;

  // если это автосохранение ничего не делаем
  if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE )
  	return;

  // проверяем права юзера
  if( ! current_user_can( 'edit_post', $post_id ) )
  	return;

	// Все ОК. Теперь, нужно найти и сохранить данные
  // Очищаем значение поля input.
  $my_data = sanitize_text_field( $_POST['name_member'] );
	// Обновляем данные в базе данных.
	update_post_meta( $post_id, 'name_member', $my_data );
  // Очищаем значение поля input.
	$my_data = sanitize_text_field( $_POST['post_team'] );
	// Обновляем данные в базе данных.
	update_post_meta( $post_id, 'post_team', $my_data );
  // Очищаем значение поля input.
	$my_data = sanitize_text_field( $_POST['link_fb'] );
	// Обновляем данные в базе данных.
	update_post_meta( $post_id, 'link_fb', $my_data );
  // Очищаем значение поля input.
	$my_data = sanitize_text_field( $_POST['link_insta'] );
	// Обновляем данные в базе данных.
	update_post_meta( $post_id, 'link_insta', $my_data );
  // Очищаем значение поля input.
	$my_data = sanitize_text_field( $_POST['link_skype'] );
	// Обновляем данные в базе данных.
	update_post_meta( $post_id, 'link_skype', $my_data );
}

/**
** Создаем пункт СЛАЙДЕР РЕЗУЛЬТАТОВ в админ-панели
**/

add_action('init', 'slider_index2');

function slider_index2() {
  register_post_type('slider2', array(
    'public' => true,
    'supports' => array('title', 'editor', 'thumbnail'),
    'menu_position' => 101,
    'labels' => array(
      'name' => 'Слайдер результатов',
      'all_items' => 'Все слайды',
      'add_new' => 'Новый слайд',
      'add_new_item' => 'Добавить слайд'
    )
  ));
}

/**
** Добавляем блок для ввода данных по результатам работы на слайд результатов в админке
**/

add_action('add_meta_boxes', 'add_results');

function add_results(){
  $screens = 'slider2';
  add_meta_box( 'results_id', 'Сведения о привлеченных к проекту заведениях общепита', 'add_results_callback', $screens );
}

// HTML код блока
function add_results_callback( $post, $meta ){
	$screens = $meta['args'];

  // Используем nonce для верификации
  wp_nonce_field( plugin_basename(__FILE__), 'myplugin_noncename' );

  // Поля формы для введения данных
  echo '<label for="name_catering">' . __("Название заведения", 'myplugin_textdomain' ) . '</label></br> ';
  echo '<input type="text" id= "name_catering" name="name_catering" value="' . esc_attr(get_post_meta(get_the_ID(), 'name_catering', 1)) . '" size="50" style="width: 100%"/></br>';
  echo '<label for="name_nutritionist">' . __("ФИО диетолога", 'myplugin_textdomain' ) . '</label></br> ';
  echo '<input type="text" id= "name_nutritionist" name="name_nutritionist" value="' . get_post_meta(get_the_ID(), 'name_nutritionist', 1) . '" size="50" style="width: 100%"/></br>';
  echo '<label for="address_catering">' . __("Адрес заведения", 'myplugin_textdomain' ) . '</label></br> ';
  echo '<input type="text" id= "address_catering" name="address_catering" value="' . esc_attr(get_post_meta(get_the_ID(), 'address_catering', 1)) . '" size="50" style="width: 100%" /></br>';
  echo '<label for="link_catering">' . __("Ссылка сайт заведения", 'myplugin_textdomain' ) . '</label></br> ';
  echo '<input type="text" id= "link_catering" name="link_catering" value="' . esc_attr(get_post_meta(get_the_ID(), 'link_catering', 1)) . '" size="50" style="width: 100%" />';
  echo '<label for="link_photos">' . __("Ссылка на фотоотчет", 'myplugin_textdomain' ) . '</label></br> ';
  echo '<input type="text" id= "link_photos" name="link_photos" value="' . esc_attr(get_post_meta(get_the_ID(), 'link_photos', 1)) . '" size="50" style="width: 100%" />';
}

// Сохраняем данные, когда пост сохраняется
add_action( 'save_post', 'results_save_postdata' );

function results_save_postdata( $post_id ) {
	// Убедимся что поле установлено.
	if ( ! isset( $_POST['name_catering']) )
		return;

	// проверяем nonce нашей страницы, потому что save_post может быть вызван с другого места.
	if ( ! wp_verify_nonce( $_POST['myplugin_noncename'], plugin_basename(__FILE__) ) )
		return;

  // если это автосохранение ничего не делаем
  if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE )
  	return;

  // проверяем права юзера
  if( ! current_user_can( 'edit_post', $post_id ) )
  	return;

	// Все ОК. Теперь, нужно найти и сохранить данные
  // Очищаем значение поля input.
  $my_data = sanitize_text_field( $_POST['name_catering'] );
	// Обновляем данные в базе данных.
	update_post_meta( $post_id, 'name_catering', $my_data );
  // Очищаем значение поля input.
	$my_data = sanitize_text_field( $_POST['name_nutritionist'] );
	// Обновляем данные в базе данных.
	update_post_meta( $post_id, 'name_nutritionist', $my_data );
  // Очищаем значение поля input.
	$my_data = sanitize_text_field( $_POST['address_catering'] );
	// Обновляем данные в базе данных.
	update_post_meta( $post_id, 'address_catering', $my_data );
  // Очищаем значение поля input.
	$my_data = sanitize_text_field( $_POST['link_catering'] );
	// Обновляем данные в базе данных.
	update_post_meta( $post_id, 'link_catering', $my_data );
  // Очищаем значение поля input.
	$my_data = sanitize_text_field( $_POST['link_photos'] );
	// Обновляем данные в базе данных.
	update_post_meta( $post_id, 'link_photos', $my_data );
}

?>
