<?php
$config = agencies_kirki_config();

# Menu Typography
AGENCIES_Kirki::add_section( 'dt_menu_typo_section', array(
	'title' => __( 'Menu', 'agencies' ),
	'panel' => 'dt_site_typography_panel',
	'priority' => 5
) );
	
	# customize-menu-typo
	AGENCIES_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'customize-menu-typo',
		'label'    => __( 'Customize Menu Typo', 'agencies' ),
		'section'  => 'dt_menu_typo_section',
		'default'  => agencies_defaults( 'customize-menu-typo' ),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'agencies' ),
			'off' => esc_attr__( 'No', 'agencies' )
		)
	));

	# menu-typo
	AGENCIES_Kirki::add_field( $config ,array(
		'type' => 'typography',
		'settings' => 'menu-typo',
		'label'    => __('Settings', 'agencies'),
		'section'  => 'dt_menu_typo_section',
		'output' => array( 
			array( 'element' => '#main-menu ul.menu li a' )
		),
		'default' => agencies_defaults('menu-typo'),
		'active_callback' => array(
			array( 'setting' => 'customize-menu-typo', 'operator' => '==', 'value' => '1' )
		)
	));

# Body Content
AGENCIES_Kirki::add_section( 'dt_body_content_typo_section', array(
	'title' => __( 'Body', 'agencies' ),
	'panel' => 'dt_site_typography_panel',
	'priority' => 10
) );
	
	# customize-body-content-typo
	AGENCIES_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'customize-body-content-typo',
		'label'    => __( 'Customize Content Typo', 'agencies' ),
		'section'  => 'dt_body_content_typo_section',
		'default'  => agencies_defaults( 'customize-body-content-typo' ),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'agencies' ),
			'off' => esc_attr__( 'No', 'agencies' )
		)
	));

	# body-content-typo
	AGENCIES_Kirki::add_field( $config ,array(
		'type' => 'typography',
		'settings' => 'body-content-typo',
		'label'    => __('Settings', 'agencies'),
		'section'  => 'dt_body_content_typo_section',
		'output' => array( 
			array( 'element' => 'body' )
		),
		'default' => agencies_defaults('body-content-typo'),
		'choices'  => array(
			'variant' => array(
				'300',
				'300italic',
				'regular',
				'italic',
				'500',
				'500italic',
				'600',
				'600italic',
				'700',
				'700italic'
			),
		),
		'active_callback' => array(
			array( 'setting' => 'customize-body-content-typo', 'operator' => '==', 'value' => '1' )
		)
	));

AGENCIES_Kirki::add_section( 'dt_headings_typo_section', array(
	'title' => __( 'Headings', 'agencies' ),
	'panel' => 'dt_site_typography_panel',
	'priority' => 1
) );
	# H1 Tags
		# customize-body-h1-typo
		AGENCIES_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-body-h1-typo',
			'label'    => __( 'Customize H1 Tag', 'agencies' ),
			'section'  => 'dt_headings_typo_section',
			'default'  => agencies_defaults( 'customize-body-h1-typo' ),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'agencies' ),
				'off' => esc_attr__( 'No', 'agencies' )
			)
		));

		# h1 tag typography	
		AGENCIES_Kirki::add_field( $config ,array(
			'type' => 'typography',
			'settings' => 'h1',
			'label'    => __('H1 Tag Settings', 'agencies'),
			'section'  => 'dt_headings_typo_section',
			'output' => array( 
				array( 'element' => 'h1' )
			),
			'default' => agencies_defaults('h1'),
			'choices'  => array( 'variant' => array('300','300italic','regular','italic','500','500italic','600','600italic','700','700italic') ),	
			'active_callback' => array(
				array( 'setting' => 'customize-body-h1-typo', 'operator' => '==', 'value' => '1' )
			)
		));		

		# Divider
		AGENCIES_Kirki::add_field( $config ,array(
			'type'=> 'custom',
			'settings' => 'customize-body-h1-typo-divider',
			'section'  => 'dt_headings_typo_section',
			'default'  => '<div class="customize-control-divider"></div>'
		));

	# H2 Tags
		# customize-body-h2-typo
		AGENCIES_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-body-h2-typo',
			'label'    => __( 'Customize H2 Tag', 'agencies' ),
			'section'  => 'dt_headings_typo_section',
			'default'  => agencies_defaults( 'customize-body-h2-typo' ),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'agencies' ),
				'off' => esc_attr__( 'No', 'agencies' )
			)
		));

		# h2 tag typography	
		AGENCIES_Kirki::add_field( $config ,array(
			'type' => 'typography',
			'settings' => 'h2',
			'label'    => __('H2 Tag Settings', 'agencies'),
			'section'  => 'dt_headings_typo_section',
			'output' => array( 
				array( 'element' => 'h2' )
			),
			'default' => agencies_defaults('h2'),
			'choices'  => array( 'variant' => array('300','300italic','regular','italic','500','500italic','600','600italic','700','700italic') ),	
			'active_callback' => array(
				array( 'setting' => 'customize-body-h2-typo', 'operator' => '==', 'value' => '1' )
			)
		));		

		# Divider
		AGENCIES_Kirki::add_field( $config ,array(
			'type'=> 'custom',
			'settings' => 'customize-body-h2-typo-divider',
			'section'  => 'dt_headings_typo_section',
			'default'  => '<div class="customize-control-divider"></div>'
		));

	# H3 Tags
		# customize-body-h3-typo
		AGENCIES_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-body-h3-typo',
			'label'    => __( 'Customize H3 Tag', 'agencies' ),
			'section'  => 'dt_headings_typo_section',
			'default'  => agencies_defaults( 'customize-body-h3-typo' ),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'agencies' ),
				'off' => esc_attr__( 'No', 'agencies' )
			)
		));

		# h3 tag typography	
		AGENCIES_Kirki::add_field( $config ,array(
			'type' => 'typography',
			'settings' => 'h3',
			'label'    => __('H3 Tag Settings', 'agencies'),
			'section'  => 'dt_headings_typo_section',
			'output' => array( 
				array( 'element' => 'h3' )
			),
			'default' => agencies_defaults('h3'),
			'choices'  => array( 'variant' => array('300','300italic','regular','italic','500','500italic','600','600italic','700','700italic') ),	
			'active_callback' => array(
				array( 'setting' => 'customize-body-h3-typo', 'operator' => '==', 'value' => '1' )
			)
		));		

		# Divider
		AGENCIES_Kirki::add_field( $config ,array(
			'type'=> 'custom',
			'settings' => 'customize-body-h3-typo-divider',
			'section'  => 'dt_headings_typo_section',
			'default'  => '<div class="customize-control-divider"></div>'
		));

	# H4 Tags
		# customize-body-h4-typo
		AGENCIES_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-body-h4-typo',
			'label'    => __( 'Customize H4 Tag', 'agencies' ),
			'section'  => 'dt_headings_typo_section',
			'default'  => agencies_defaults( 'customize-body-h4-typo' ),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'agencies' ),
				'off' => esc_attr__( 'No', 'agencies' )
			)
		));

		# h4 tag typography	
		AGENCIES_Kirki::add_field( $config ,array(
			'type' => 'typography',
			'settings' => 'h4',
			'label'    => __('H4 Tag Settings', 'agencies'),
			'section'  => 'dt_headings_typo_section',
			'output' => array( 
				array( 'element' => 'h4' )
			),
			'choices'  => array( 'variant' => array('300','300italic','regular','italic','500','500italic','600','600italic','700','700italic') ),	
			'default' => agencies_defaults('h4'),
			'active_callback' => array(
				array( 'setting' => 'customize-body-h4-typo', 'operator' => '==', 'value' => '1' )
			)
		));		

		# Divider
		AGENCIES_Kirki::add_field( $config ,array(
			'type'=> 'custom',
			'settings' => 'customize-body-h4-typo-divider',
			'section'  => 'dt_headings_typo_section',
			'default'  => '<div class="customize-control-divider"></div>'
		));

	# H5 Tags
		# customize-body-h5-typo
		AGENCIES_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-body-h5-typo',
			'label'    => __( 'Customize H5 Tag', 'agencies' ),
			'section'  => 'dt_headings_typo_section',
			'default'  => agencies_defaults( 'customize-body-h5-typo' ),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'agencies' ),
				'off' => esc_attr__( 'No', 'agencies' )
			)
		));

		# h5 tag typography	
		AGENCIES_Kirki::add_field( $config ,array(
			'type' => 'typography',
			'settings' => 'h5',
			'label'    => __('H5 Tag Settings', 'agencies'),
			'section'  => 'dt_headings_typo_section',
			'output' => array( 
				array( 'element' => 'h5' )
			),
			'choices'  => array( 'variant' => array('300','300italic','regular','italic','500','500italic','600','600italic','700','700italic') ),	
			'default' => agencies_defaults('h5'),
			'active_callback' => array(
				array( 'setting' => 'customize-body-h5-typo', 'operator' => '==', 'value' => '1' )
			)
		));		

		# Divider
		AGENCIES_Kirki::add_field( $config ,array(
			'type'=> 'custom',
			'settings' => 'customize-body-h5-typo-divider',
			'section'  => 'dt_headings_typo_section',
			'default'  => '<div class="customize-control-divider"></div>'
		));

	# H6 Tags
		# customize-body-h6-typo
		AGENCIES_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-body-h6-typo',
			'label'    => __( 'Customize H6 Tag', 'agencies' ),
			'section'  => 'dt_headings_typo_section',
			'default'  => agencies_defaults( 'customize-body-h6-typo' ),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'agencies' ),
				'off' => esc_attr__( 'No', 'agencies' )
			)
		));

		# h6 tag typography	
		AGENCIES_Kirki::add_field( $config ,array(
			'type' => 'typography',
			'settings' => 'h6',
			'label'    => __('H6 Tag Settings', 'agencies'),
			'section'  => 'dt_headings_typo_section',
			'output' => array( 
				array( 'element' => 'h6' )
			),
			'choices'  => array( 'variant' => array('300','300italic','regular','italic','500','500italic','600','600italic','700','700italic') ),	
			'default' => agencies_defaults('h6'),
			'active_callback' => array(
				array( 'setting' => 'customize-body-h6-typo', 'operator' => '==', 'value' => '1' )
			)
		));	
