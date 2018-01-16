<?php 



function style_script_load() {
	wp_enqueue_style('vendor.css',  get_template_directory_uri() . '/vendor.css', '', null, false);
	wp_enqueue_style('style.css',  get_template_directory_uri() . '/style.css', '', null, false);
	wp_enqueue_script( 'modernizr.js', get_template_directory_uri() . '/scripts/vendor/modernizr.js', '', null, false);
}

add_action('wp_enqueue_scripts', 'style_script_load');


function load_my_scripts() {
	wp_enqueue_script('test.js', get_template_directory_uri() . '/scripts/test.js', '', null, true);
	wp_enqueue_script( 'vendor.js', get_template_directory_uri() . '/scripts/vendor.js', '', null, true);
	wp_enqueue_script( 'plugins.js', get_template_directory_uri() . '/scripts/plugins.js', '', null, true);
	wp_enqueue_script( 'main.js', get_template_directory_uri() . '/scripts/main.js', '', null, true);
}

add_action('wp_enqueue_scripts', 'load_my_scripts');

add_theme_support('post-thumbnails');

register_nav_menu('menu', 'Меню в шапке');

register_nav_menu('category', 'Категории');


/////////////////////////////////////////


add_action('add_meta_boxes', 'my_extra_fields', 1);

function my_extra_fields() {
	add_meta_box( 'extra_fields', 'Дополнительные поля', 'extra_fields_box_func', 'post', 'normal', 'high'  );
}


// код блока
function extra_fields_box_func( $post ){
	?>
	
	<p><label><input type="text" name="extra[color]" value="<?php echo get_post_meta($post->ID, 'color', 1); ?>" style="width:50%" /> Цвет </label></p>
	
	<p><label><input type="text" name="extra[image1]" value="<?php echo get_post_meta($post->ID, 'image1', 1); ?>" style="width:50%" /> Изображение 1</label></p>
	<p><label><input type="text" name="extra[image2]" value="<?php echo get_post_meta($post->ID, 'image2', 1); ?>" style="width:50%" /> Изображение 2</label></p>
	<p><label><input type="text" name="extra[image3]" value="<?php echo get_post_meta($post->ID, 'image3', 1); ?>" style="width:50%" /> Изображение 3</label></p>
	<p><label><input type="text" name="extra[image4]" value="<?php echo get_post_meta($post->ID, 'image4', 1); ?>" style="width:50%" /> Изображение 4</label></p>

	<p>Описание статьи (description):
		<textarea type="text" name="extra[description]" style="width:100%;height:50px;"><?php echo get_post_meta($post->ID, 'description', 1); ?></textarea>
	</p>



	<input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />
	<?php
}

// включаем обновление полей при сохранении
add_action('save_post', 'my_extra_fields_update', 0);

/* Сохраняем данные, при сохранении поста */
function my_extra_fields_update( $post_id ){
	if ( ! wp_verify_nonce($_POST['extra_fields_nonce'], __FILE__) ) return false; // проверка
	if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE  ) return false; // выходим если это автосохранение
	if ( !current_user_can('edit_post', $post_id) ) return false; // выходим если юзер не имеет право редактировать запись

	if( !isset($_POST['extra']) ) return false; // выходим если данных нет

	// Все ОК! Теперь, нужно сохранить/удалить данные
	$_POST['extra'] = array_map('trim', $_POST['extra']); // чистим все данные от пробелов по краям
	foreach( $_POST['extra'] as $key=>$value ){
		if( empty($value) ){
			delete_post_meta($post_id, $key); // удаляем поле если значение пустое
			continue;
		}

		update_post_meta($post_id, $key, $value); // add_post_meta() работает автоматически
	}
	return $post_id;
}







