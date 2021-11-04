<?php
/**
 * Sample Fields
 */

require_once 'class-wp-settings.php';


new WP_Settings( array(
	'type'           => 'main_menu',
	'menu_title'     => esc_html__( 'Sample Options' ),
	'page_title'     => esc_html__( 'Sample Settings' ),
	'page_tab_title' => esc_html__( 'Sample Settings Page' ),
	'menu_slug'      => 'sample-settings',
	'menu_icon'      => 'dashicons-games',
	'position'       => 20,
	'pages'          => array(
		'tab-one' => array(
			'page_nav'      => esc_html__( 'Tab One' ),
			'page_settings' => array(
				array(
					'title'       => esc_html__( 'General Section One' ),
					'description' => esc_html__( 'This is a description for general tab one' ),
					'options'     => array(
						array(
							'id'          => 'text_field',
							'title'       => esc_html__( 'Text Field' ),
							'details'     => esc_html__( 'This is sample text field' ),
							'type'        => 'text',
							'placeholder' => esc_html__( 'Text Field' ),
						),
						array(
							'id'          => 'text_field',
							'title'       => esc_html__( 'Text Field' ),
							'details'     => esc_html__( 'This is sample text field' ),
							'type'        => 'text',
							'placeholder' => esc_html__( 'Text Field' ),
						),
						array(
							'id'    => 'woocngr_order_settings',
							'title' => esc_html__( 'Order Settings' ),
							'type'  => 'checkbox',
							'args'  => array(
								'autocomplete'      => esc_html__( 'Complete order when creating freight order' ),
								'create_shipping'   => esc_html__( 'Create shipping upon order completion' ),
								'tracking_in_order' => esc_html__( 'Send tracking URL in order email' ),
								'fixed_weight'      => esc_html__( 'Fixed weight in all orders' ),
							),
						),
						array(
							'id'      => 'woocngr_order_fixed_weight',
							'details' => esc_html__( 'Weight, If you select fixed weight in previous settings, then specify the weight here.' ),
							'type'    => 'number',
						),
						array(
							'id'    => 'woocngr_order_extra',
							'title' => esc_html__( 'Freight assignments and etiquette' ),
							'type'  => 'checkbox',
							'args'  => array(
								'attach_company_name' => esc_html__( 'Attach company name to freight assignment' ),
								'career_booking'      => esc_html__( 'Enable career booking' ),
							),
						),
					),
				),
				array(
					'title'   => esc_html__( 'Return Address' ),
					'options' => array(
						array(
							'id'    => 'woocngr_address_name',
							'title' => esc_html__( 'Name *' ),
							'type'  => 'text',
						),
						array(
							'id'    => 'woocngr_address_1',
							'title' => esc_html__( 'Address 1 *' ),
							'type'  => 'textarea',
						),
						array(
							'id'    => 'woocngr_address_2',
							'title' => esc_html__( 'Address 2' ),
							'type'  => 'textarea',
						),
						array(
							'id'    => 'woocngr_address_zip',
							'title' => esc_html__( 'Zip Code *' ),
							'type'  => 'text',
						),
						array(
							'id'    => 'woocngr_address_city',
							'title' => esc_html__( 'City *' ),
							'type'  => 'text',
						),
						array(
							'id'    => 'woocngr_address_country',
							'title' => esc_html__( 'Country *' ),
							'type'  => 'select2',
							'args'  => 'PAGES',
						),
					),
				),
			),
		),
		'tab-two' => array(
			'page_nav'      => esc_html__( 'Tab Two' ),
			'page_settings' => array(
				array(
					'title'   => esc_html__( 'General Settings' ),
					'options' => array(
						array(
							'id'          => 'woocngr_shop_name',
							'title'       => esc_html__( 'Shop name' ),
							'details'     => esc_html__( 'Please specify your WooCommerce store or shop name here.' ),
							'type'        => 'text',
							'placeholder' => get_bloginfo( 'name' ),
						),
						array(
							'id'    => 'woocngr_order_settings',
							'title' => esc_html__( 'Order Settings' ),
							'type'  => 'checkbox',
							'args'  => array(
								'autocomplete'      => esc_html__( 'Complete order when creating freight order' ),
								'create_shipping'   => esc_html__( 'Create shipping upon order completion' ),
								'tracking_in_order' => esc_html__( 'Send tracking URL in order email' ),
								'fixed_weight'      => esc_html__( 'Fixed weight in all orders' ),
							),
						),
						array(
							'id'      => 'woocngr_order_fixed_weight',
							'details' => esc_html__( 'Weight, If you select fixed weight in previous settings, then specify the weight here.' ),
							'type'    => 'number',
						),
						array(
							'id'    => 'woocngr_order_extra',
							'title' => esc_html__( 'Freight assignments and etiquette' ),
							'type'  => 'checkbox',
							'args'  => array(
								'attach_company_name' => esc_html__( 'Attach company name to freight assignment' ),
								'career_booking'      => esc_html__( 'Enable career booking' ),
							),
						),
					),
				),
			),
		),
	),
) );