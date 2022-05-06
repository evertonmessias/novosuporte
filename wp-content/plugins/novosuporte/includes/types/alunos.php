<?php

function create_custom_post_type_alunos()
{
	$labels = [
		'name' => _x('Alunos', 'post type general name'),
		'singular_name' => _x('Alunos', 'post type singular name'),
		'add_new' => _x('Adicionar Reunião', 'Alunos'),
		'add_new_item' => __('Adicionar nova Reunião de Alunos'),
		'edit_item' => __('Editar Alunos'),
		'new_item' => __('Nova Alunos'),
		'view_item' => __('View Alunos'),
		'search_items' => __('Search Alunos'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	];
	$args = [
		'labels'				=> $labels,
		'supports'              => ['title', 'editor', 'thumbnail'/*, 'author', 'excerpt'*/],
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => false,
		'query_var' 			=> true,
		'menu_position'         => 0,
		'show_in_admin_bar'     => true,
		'rewrite' 				=> true,
		'show_in_nav_menus'     => true,
		'can_export'			=> true,
		'menu_icon'             => 'dashicons-groups',
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'     	=> array('post', 'alunos'),
		'map_meta_cap'        => true,
	];
	register_post_type('alunos', $args);
}
add_action('init', 'create_custom_post_type_alunos');


//Add in submenu
function type_alunos()
{
	add_submenu_page('suporte', 'Alunos', 'Alunos', 'edit_posts', 'edit.php?post_type=alunos');
}
add_action('admin_menu', 'type_alunos');


//Roles for Admin, Editor
function role_caps_alunos()
{
	$roles = array('editor', 'administrator');
	foreach ($roles as $the_role) {
		$role = get_role($the_role);
		$role->add_cap('read');
		$role->add_cap('read_alunos');
		$role->add_cap('read_private_alunos');
		$role->add_cap('edit_alunos');
		$role->add_cap('edit_others_alunos');
		$role->add_cap('edit_published_alunos');
		$role->add_cap('publish_alunos');
		$role->add_cap('delete_others_alunos');
		$role->add_cap('delete_private_alunos');
		$role->add_cap('delete_published_alunos');
	}
}
add_action('admin_init', 'role_caps_alunos', 999);


// POSTMETA ************************************************
include ABSPATH . '/wp-content/plugins/novosuporte/includes/types/postmeta/postmeta-alunos.php';
