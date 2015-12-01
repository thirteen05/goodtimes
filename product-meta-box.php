<?php
/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 * For more information, please visit:
 * @link http://metabox.io/docs/registering-meta-boxes/
 */


add_filter( 'rwmb_meta_boxes', 'your_prefix_register_meta_boxes' );

/**
 * Register meta boxes
 *
 * Remember to change "your_prefix" to actual prefix in your project
 *
 * @param array $meta_boxes List of meta boxes
 *
 * @return array
 */
function your_prefix_register_meta_boxes( $meta_boxes )
{
	/**
	 * prefix of meta keys (optional)
	 * Use underscore (_) at the beginning to make keys hidden
	 * Alt.: You also can make prefix empty to disable it
	 */
	// Better has an underscore as last sign
	$prefix = 'good_times';

	// 1st meta box
	$meta_boxes[] = array(
		// Meta box id, UNIQUE per meta box. Optional since 4.1.5
		'id'         => 'standard',

		// Meta box title - Will appear at the drag and drop handle bar. Required.
		'title'      => __( 'Product Information', 'your-prefix' ),

		// Post types, accept custom post types as well - DEFAULT is 'post'. Can be array (multiple post types) or string (1 post type). Optional.
		'post_types' => array('product' ),

		// Where the meta box appear: normal (default), advanced, side. Optional.
		'context'    => 'normal',

		// Order of meta box: high (default), low. Optional.
		'priority'   => 'high',

		// Auto save: true, false (default). Optional.
		'autosave'   => true,

		// List of meta fields
		'fields'     => array(
			// TEXT
			array(
				// Field name - Will be used as label
				'name'  => __( 'Flavor (if applicable)', 'your-prefix' ),
				// Field ID, i.e. the meta key
				'id'    => 'product_flavor',
				// Field description (optional)
				'desc'  => __( 'Flavor', 'your-prefix' ),
				'type'  => 'text',
				// Default value (optional)
				'std'   => __( '', 'your-prefix' ),
				// CLONES: Add to make the field cloneable (i.e. have multiple value)
				'clone' => false,
			),
            array(
				'name'        => __( 'Flavor Profile (if applicable)', 'your-prefix' ),
				'id'          => 'flavor_profile',
				'desc'        => __( 'Flavor Profile', 'your-prefix' ),
				'type'        => 'textarea',
				// Placeholder
				'placeholder' => __( 'Enter the Flavor Profile...', 'your-prefix' ),
				// Number of rows
				'rows'        => 5,
				// Number of columns
				'cols'        => 5,
			),
          array(
				'name'        => __( 'Product Type', 'your-prefix' ),
				'id'          => 'product_type',
				'type'        => 'select',
				// Array of 'value' => 'Label' pairs for select box
				'options'     => array(
					'product_type_1' => __( 'Blended Tobacco Cigarillo', 'your-prefix' ),
					'product_type_2' => __( 'Flat Wrap', 'your-prefix' ),
					'product_type_3' => __( 'Little Filter Cigars', 'your-prefix' ),
					'product_type_4' => __( 'Mini Blended Cigarillo', 'your-prefix' ),
					'product_type_5' => __( 'Natural Leaf Cigarillo', 'your-prefix' ),
					'product_type_6' => __( 'Natural Leaf Rustic Cigar', 'your-prefix' ),
					'product_type_7' => __( 'Party-Sized Cigarillo', 'your-prefix' ),
					'product_type_8' => __( 'Rolling Papers', 'your-prefix' ),
					'product_type_9' => __( 'Shorty Cigarillo', 'your-prefix' ),
					'product_type_10' => __( 'Natural Leaf Palma Cigar', 'your-prefix' ),
					'product_type_11' => __( 'Pipe Tobacco Tip Cigar', 'your-prefix' ),
				),
				// Default selected value
				//'std'         => 'value2',
				// Placeholder
				'placeholder' => __( 'Select Product Type', 'your-prefix' ),
			),
            array(
				'name'        => __( 'Ring Gauge', 'your-prefix' ),
				'id'          => 'ring_gauge',
				'type'        => 'select',
				// Array of 'value' => 'Label' pairs for select box
				'options'     => array(
					'ring_gauge_1' => __( '27.8 x 3"', 'your-prefix' ),
					'ring_gauge_2' => __( '27.8 X 3.75"', 'your-prefix' ),
					'ring_gauge_3' => __( '27.8 X 4.25"', 'your-prefix' ),
					'ring_gauge_4' => __( '27.8 X 5"', 'your-prefix' ),
					'ring_gauge_5' => __( '27.8 X 6"', 'your-prefix' ),
					'ring_gauge_6' => __( '30.25 X 4.25"', 'your-prefix' ),
					'ring_gauge_7' => __( '43 X 5.5"', 'your-prefix' ),
					'ring_gauge_8' => __( '8 X 4.875"', 'your-prefix' ),
				),
				// Default selected value
				//'std'         => 'value2',
				// Placeholder
				'placeholder' => __( 'Select Ring Gauge', 'your-prefix' ),
			),
            array(
				'name'        => __( 'Single Unit Quanity', 'your-prefix' ),
				'id'          => 'single_unit_qty',
				'type'        => 'select',
				// Array of 'value' => 'Label' pairs for select box
				'options'     => array(
					'single_unit_qty_1' => __( '1 Cigar Pouch', 'your-prefix' ),
					'single_unit_qty_2' => __( '2 Cigar Pouch', 'your-prefix' ),
					'single_unit_qty_3' => __( '3 Cigar Pouch', 'your-prefix' ),
					'single_unit_qty_4' => __( '4 Cigar Pouch', 'your-prefix' ),
					'single_unit_qty_5' => __( '5 Cigar Pouch', 'your-prefix' ),
					'single_unit_qty_6' => __( '2 Wraps', 'your-prefix' ),
					'single_unit_qty_7' => __( '2 Booklets', 'your-prefix' ),
					'single_unit_qty_8' => __( '2 Count Pack', 'your-prefix' ),
					'single_unit_qty_9' => __( '20 Count Pack', 'your-prefix' ),
					'single_unit_qty_10' => __( 'Single Cigar', 'your-prefix' ),
				),
				// Default selected value
				//'std'         => 'value2',
				// Placeholder
				'placeholder' => __( 'Select Single Unit Quanity', 'your-prefix' ),
			),
            array(
				'name'        => __( 'Selling Unit Quanity', 'your-prefix' ),
				'id'          => 'selling_unit_qty',
				'type'        => 'select',
				// Array of 'value' => 'Label' pairs for select box
				'options'     => array(
					'selling_unity_qty_1' => __( '6', 'your-prefix' ),
					'selling_unity_qty_2' => __( '10', 'your-prefix' ),
					'selling_unity_qty_3' => __( '15', 'your-prefix' ),
					'selling_unity_qty_4' => __( '24', 'your-prefix' ),
					'selling_unity_qty_5' => __( '25', 'your-prefix' ),
					'selling_unity_qty_6' => __( '50', 'your-prefix' )
				),
				// Default selected value
				//'std'         => 'value2',
				// Placeholder
				'placeholder' => __( 'Select Selling Unit Quanity', 'your-prefix' ),
			),
            array(
				'name'        => __( 'Brand Description', 'your-prefix' ),
				'id'          => 'brand_description',
				'desc'        => __( 'Brand Descrtiption', 'your-prefix' ),
				'type'        => 'textarea',
				// Placeholder
				'placeholder' => __( 'Enter the Brand Description...', 'your-prefix' ),
				// Number of rows
				'rows'        => 5,
				// Number of columns
				'cols'        => 5,
			),
		),
		'validation' => array(
			'rules'    => array(
				"{$prefix}password" => array(
					'required'  => true,
					'minlength' => 7,
				),
			),
			// optional override of default jquery.validate messages
			'messages' => array(
				"{$prefix}password" => array(
					'required'  => __( 'Password is required', 'your-prefix' ),
					'minlength' => __( 'Password must be at least 7 characters', 'your-prefix' ),
				),
			)
		)
	);

	return $meta_boxes;
}

