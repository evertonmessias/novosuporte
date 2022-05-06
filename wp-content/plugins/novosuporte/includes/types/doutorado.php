<?php

function create_custom_post_type_doutorado()
{
	$labels = [
		'name' => _x('Doutorado', 'post type general name'),
		'singular_name' => _x('Doutorado', 'post type singular name'),
		'add_new' => _x('Adicionar Reunião', 'Doutorado'),
		'add_new_item' => __('Adicionar nova Reunião de Doutorado'),
		'edit_item' => __('Editar Doutorado'),
		'new_item' => __('Nova Doutorado'),
		'view_item' => __('View Doutorado'),
		'search_items' => __('Search Doutorado'),
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
		'menu_position'         => 1,
		'show_in_admin_bar'     => true,
		'rewrite' 				=> true,
		'show_in_nav_menus'     => true,
		'can_export'			=> true,
		'menu_icon'             => 'dashicons-businessperson',
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'     	=> array('post', 'doutorado'),
		'map_meta_cap'        => true,
	];
	register_post_type('doutorado', $args);
}
add_action('init', 'create_custom_post_type_doutorado');


//Add in submenu
function type_doutorado()
{
	add_submenu_page('suporte', 'Doutorado', 'Doutorado', 'edit_posts', 'edit.php?post_type=doutorado');
}
add_action('admin_menu', 'type_doutorado');


//Roles for Admin, Editor
function role_caps_doutorado()
{
	$roles = array('editor', 'administrator');
	foreach ($roles as $the_role) {
		$role = get_role($the_role);
		$role->add_cap('read');
		$role->add_cap('read_doutorado');
		$role->add_cap('read_private_doutorado');
		$role->add_cap('edit_doutorado');
		$role->add_cap('edit_others_doutorado');
		$role->add_cap('edit_published_doutorado');
		$role->add_cap('publish_doutorado');
		$role->add_cap('delete_others_doutorado');
		$role->add_cap('delete_private_doutorado');
		$role->add_cap('delete_published_doutorado');
	}
}
add_action('admin_init', 'role_caps_doutorado', 999);

// POSTMETA ************************************************
include ABSPATH . '/wp-content/plugins/novosuporte/includes/types/postmeta/postmeta-doutorado.php';
