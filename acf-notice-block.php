<?php

function register_acf_block_types() {
// register a  block.
	acf_register_block_type( array(
		'name'            => 'notice',
		'title'           => __( 'Notice' ),
		'description'     => __( 'A custom notice block.' ),
		'render_template' => plugin_dir_path( __FILE__ ) . '/block/notice.php',
		'category'        => 'formatting',
		'icon'            => 'admin-comments',
		'keywords'        => array( 'notice', 'quote' ),
	) );
}

// Check if function exists and hook into setup.
if ( function_exists( 'acf_register_block_type' ) ) {
	add_action( 'acf/init', 'register_acf_block_types' );
}

//Add ACF fields
if ( function_exists( 'acf_add_local_field_group' ) ):

	acf_add_local_field_group( array(
		'key'                   => 'group_616820394721e',
		'title'                 => 'notice',
		'fields'                => array(
			array(
				'key'               => 'field_6168203d01e77',
				'label'             => 'notice type',
				'name'              => 'notice_type',
				'type'              => 'select',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'choices'           => array(
					'default' => 'Default',
					'success' => 'Success',
					'warning' => 'Warning',
					'error'   => 'Error',
				),
				'default_value'     => array(),
				'allow_null'        => 0,
				'multiple'          => 0,
				'ui'                => 0,
				'return_format'     => 'value',
				'ajax'              => 0,
				'placeholder'       => '',
			),
			array(
				'key'               => 'field_616820aa01e78',
				'label'             => 'notice title',
				'name'              => 'notice_title',
				'type'              => 'text',
				'instructions'      => 'Enter title here...',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'default_value'     => '',
				'placeholder'       => '',
				'prepend'           => '',
				'append'            => '',
				'maxlength'         => '',
			),
			array(
				'key'               => 'field_616820e7548ad',
				'label'             => 'notice description',
				'name'              => 'notice_description',
				'type'              => 'textarea',
				'instructions'      => 'Enter description here...',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'default_value'     => '',
				'placeholder'       => '',
				'maxlength'         => '',
				'rows'              => '',
				'new_lines'         => '',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'block',
					'operator' => '==',
					'value'    => 'acf/notice',
				),
			),
		),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen'        => '',
		'active'                => true,
		'description'           => '',
	) );

endif;
