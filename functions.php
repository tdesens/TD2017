<?php
// register menus	
function register_my_menus() {
	register_nav_menus(
		array(
			'header-menu' => __('Header Menu')
		)
	);
}
add_action('init', 'register_my_menus');

// register custom navigation walker
require_once('wp_bootstrap_navwalker.php');









// default acf fields
if(function_exists('register_field_group'))
{
	register_field_group(array (
		'id' => 'acf_seo',
		'title' => 'SEO',
		'fields' => array (
			array (
				'key' => 'field_554e6c368d0c4',
				'label' => 'Title',
				'name' => 'seo_title',
				'type' => 'text',
				'instructions' => 'Note: If this is blank, it we default to the page title above, this is for overriding the default title.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_554e6c5b8d0c5',
				'label' => 'Description',
				'name' => 'seo_description',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_554e6c718d0c6',
				'label' => 'Keywords',
				'name' => 'seo_keywords',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_554e6c718d0c7',
				'label' => 'Image',
				'name' => 'seo_image',
				'type' => 'image',
				'instructions' => 'Note: Preview image used by social networks, if left empty they normally pick the first image on the page.',
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 1,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}









// Filter ACF Post_Object for FEATURED PROJECT - sets the order of displayed by date instead of by name
function my_post_object_query( $args, $field, $post )
{
    // modify the order
    $args['orderby'] = 'date';
    $args['order'] = 'DESC';

    return $args;
}

// filter for a specific field based on it's name
add_filter('acf/fields/post_object/query/name=featured_projects', 'my_post_object_query', 10, 3);









//Add Styles to dropdown menu of Content Editor
function wpb_mce_buttons_2($buttons){
	array_unshift($buttons, 'styleselect');
	return $buttons;
};
add_filter('mce_buttons_2', 'wpb_mce_buttons_2');

function my_mce_before_init_insert_formats( $init_array ) { 
 
// Define the style_formats array
 
    $style_formats = array( 
        // Each array child is a format with it's own settings
        array( 
            'title' => 'emphasize', 
            'block' => 'span', 
            'classes' => 'emphasize',
            'wrapper' => true,
             
        ),
		
		array(
			'title' => 'Black Button',
			'block' => 'a',
			'classes' => 'button black',
			'wrapper' => true
		),
    ); 
    // Insert the array, JSON ENCODED, into 'style_formats'
    $init_array['style_formats'] = json_encode( $style_formats ); 
     
    return $init_array; 
   
}
// Attach callback to 'tiny_mce_before_init'
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );


// Use Custom Editor Styles
function my_theme_add_editor_styles(){
	add_editor_style( 'assets/css/custom-editor-style.css' );
}
add_action( 'init', 'my_theme_add_editor_styles' );

?>