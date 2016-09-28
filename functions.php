<?php
/************************************
		SUPORTE THUMBNAIL
*************************************/

function add_suport_theme(){
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'add_suport_theme');

/**************************************
		SUPORTE MENUS
**************************************/

add_theme_support('menus' );
register_nav_menus( array(
    'primary' => __( 'Menu header', 'menu-header' ),
) );

/*************************************
		SCRIPTS E CSS
**************************************/

function bootstrap_scripts(){
	/*CSS*/
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
	wp_enqueue_style('style', get_stylesheet_uri() );


	/*SCRIPT*/
	wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery') );



}
add_action('wp_enqueue_scripts', 'bootstrap_scripts' );

/*****************************************
		CUSTOM LOGO
******************************************/

$args = array(
	'flex-width' => true,
	'width' =>  980,
	'flex-height' => true,
	'height' => 720,
	'default-image' => get_template_directory_uri() . '/assets/images/logo.png',
);
add_theme_support( 'custom-header', $args );




/*****************************************
		SLIDER CPT
******************************************/

add_action('init', 'slider_register' );
function slider_register(){
	$labels = array(
		'name' => _x('Slider', 'post type general name'),
		'singular_name' => _x('Slider', 'post type general singular name' ),
		'add_new' => _x('Adicionar slider', 'slider'),
		'add_new_item' => __('Novo slider'),
		'edit_item' => __('Editar slider'),
		'new_item' => __('Novo slider'),
		'view_item' => __('Ver slider'),
		'search_items' =>__('Procurar slider'),
		'not_found' => __('Nada encontrado'),
		'not_found_in_trash' => __('Nada encontrado no lixo'),
		'parent_item_color' => ''
		);

	$args = array(
		'labels' => $labels,
		'pulblic' => true,
		'pulblic_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-media-code',
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 6,
		'supports' => array('title','thumbnail'),
		);
register_post_type('slider',$args);

}

/*****************************************
			CPT	SERVIÇOS 
******************************************/
add_action('init', 'servicos_register');
	function servicos_register(){
		$labels = array(
			'name' => _x('Serviços',  'Post type general name'),
			'singular_name' => _x('Serviços', 'Post type general singular name' ),
			'add_new' => _x('Adicionar serviço', 'Serviço'),
			'add_new_item' => __('Novo serviço'),
			'edit_new' => __('Editar serviço'),
			'new_item' =>  __('Novo serviço'),
			'view_item' => __('Ver serviço'),
			'search_items' => __('Procurar serviço'),
			'not_found' => __('Nada encontrado'),
			'not_found_in_trash' => __('Nada encontrado no lixo'),
			'parent_item_color' => ''
		);

	$args = array(
		'labels' => $labels,
		'pulblic' => true,
		'pulblic_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'has_hachive' => true,
		'menu_icon' => 'dashicons-pressthis',
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 6,
		'supports' => array('title','editor','thumbnail'),
	);
	register_post_type('servicos', $args);
	}
/*****************************************
			CPT	PORTFÓLIO 
******************************************/
add_action('init', 'portfolio_register');
	function portfolio_register(){
		$labels = array(
			'name' => _x('Portfólio',  'Post type general name'),
			'singular_name' => _x('Portfólio', 'Post type general singular name' ),
			'add_new' => _x('Adicionar Portfólio', 'Portfólio'),
			'add_new_item' => __('Novo Portfólio'),
			'edit_new' => __('Editar Portfólio'),
			'new_item' =>  __('Novo Portfólio'),
			'view_item' => __('Ver Portfólio'),
			'search_items' => __('Procurar Portfólio'),
			'not_found' => __('Nada encontrado'),
			'not_found_in_trash' => __('Nada encontrado no lixo'),
			'parent_item_color' => ''
		);

	$args = array(
		'labels' => $labels,
		'pulblic' => true,
		'pulblic_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'has_hachive' => true,
		'menu_icon' => 'dashicons-images-alt2',
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 6,
		'supports' => array('title','thumbnail'),
	);
	register_post_type('portfolio', $args);
	}

/*****************************************
			CPT	TIME
******************************************/
add_action('init', 'membro_register');
	function membro_register(){
		$labels = array(
			'name' => _x('Membro', 'Post type general name'),
			'singular_name' => _x('Membro', 'Post type general singular name'),
			'add_new' => _x('Adicionar membro', 'Membros'),
			'add_new_item' => __('Novo membro'),
			'edit_new' => __('Editar membro'),
			'new_item' => __('Novo membro'),
			'view_item' => __('Ver membro'),
			'search_items' => __('Procurar membro'),
			'not_found' => __('Nada encontrado'),
			'not_found_in_trash' => __('Nada encontardo no lixo'),
			'parent_item_color' =>''
		);

		$args = array(
		'labels' => $labels,
		'pulblic' => true,
		'pulblic_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'has_hachive' => true,
		'menu_icon' => 'dashicons-admin-users',
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 6,
		'supports' => array('title','editor','thumbnail'),
	);
	register_post_type('membro', $args);
	}
