<?php 
if ( ! function_exists('paquetes_post_type') ) {

// Register Custom Post Type
function paquetes_post_type() {

	$labels = array(
		'name'                  => _x( 'Paquetes', 'Post Type General Name', 'Avada' ),
		'singular_name'         => _x( 'Paquete', 'Post Type Singular Name', 'Avada' ),
		'menu_name'             => __( 'Paquetes', 'Avada' ),
		'name_admin_bar'        => __( 'Paquetes', 'Avada' ),
		'archives'              => __( 'Archivo de Paquetes', 'Avada' ),
		'attributes'            => __( 'Atributos de Paquetes', 'Avada' ),
		'parent_item_colon'     => __( 'Paquete Padre:', 'Avada' ),
		'all_items'             => __( 'Todos Los Paquetes', 'Avada' ),
		'add_new_item'          => __( 'Añadir Nuevo Paquete', 'Avada' ),
		'add_new'               => __( 'Añadir Nuevo', 'Avada' ),
		'new_item'              => __( 'Nuevo Paquete', 'Avada' ),
		'edit_item'             => __( 'Editar Paquete', 'Avada' ),
		'update_item'           => __( 'Actualizar Paquete', 'Avada' ),
		'view_item'             => __( 'Ver Paquete', 'Avada' ),
		'view_items'            => __( 'Ver Elementos', 'Avada' ),
		'search_items'          => __( 'Buscar Paquete', 'Avada' ),
		'not_found'             => __( 'Paquete no encontrado', 'Avada' ),
		'not_found_in_trash'    => __( 'Paquete no encontrado en la papelera', 'Avada' ),
		'featured_image'        => __( 'Imagen Destacada', 'Avada' ),
		'set_featured_image'    => __( 'Definir Imagen Destacada', 'Avada' ),
		'remove_featured_image' => __( 'Eliminar Imagen Destacada', 'Avada' ),
		'use_featured_image'    => __( 'Usar como Imagen Destacada', 'Avada' ),
		'insert_into_item'      => __( 'Insertar en Elemento', 'Avada' ),
		'uploaded_to_this_item' => __( 'Subido a este Paquete', 'Avada' ),
		'items_list'            => __( 'Lista de Elementos', 'Avada' ),
		'items_list_navigation' => __( 'Paquetes En Lista de Navegacion', 'Avada' ),
		'filter_items_list'     => __( 'Filtrar Lista de Paquetes', 'Avada' ),
	);
	$args = array(
		'label'                 => __( 'Paquete', 'Avada' ),
		'description'           => __( 'Paquetes Turisticos', 'Avada' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'trackbacks', 'revisions' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'paquetes', $args );

}
add_action( 'init', 'paquetes_post_type', 0 );

}
if ( ! function_exists('paquetes_aditionals_fields') ) {
	function paquetes_aditionals_fields() {
	$cmb = new_cmb2_box( array(
		'id'            => CMB2PREFIX . 'metabox',
		'title'         => esc_html__( 'Test Metabox', 'cmb2' ),
		'object_types'  => array( 'paquetes' ), // Post type
		// 'show_on_cb' => 'yourprefix_show_if_front_page', // function should return a bool value
		// 'context'    => 'normal',
		'priority'   => 'high',
		// 'show_names' => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // true to keep the metabox closed by default
		// 'classes'    => 'extra-class', // Extra cmb2-wrap classes
		// 'classes_cb' => 'yourprefix_add_some_classes', // Add classes through a callback.
	) );	
	$cmb->add_field( array(
		'name'       => esc_html__( 'Short Description', 'Avada' ),
		'desc'       => esc_html__( 'Short description to show in Carousel', 'Avada' ),
		'id'         => $prefix . 'short_description',
		'type'       => 'textarea_small',
		// 'show_on_cb' => 'yourprefix_hide_if_no_cats', // function should return a bool value
		// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
		// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
		// 'on_front'        => false, // Optionally designate a field to wp-admin only
		// 'repeatable'      => true,
		// 'column'          => true, // Display field value in the admin post-listing columns
	) );
	}
	// add_action( 'cmb2_admin_init', 'paquetes_aditionals_fields' );
?>