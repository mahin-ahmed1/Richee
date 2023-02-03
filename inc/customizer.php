<?php
 
/**
 * All these code for kirki customizer settings
**/
 
if (class_exists('Kirki')) {

    new \Kirki\Panel(
	'home_panel',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'HomePage Customization', 'richee' ),
		'description' => esc_html__( 'You can customize every content of home page from customizer panel', 'richee' ),
	]
);

    new \Kirki\Section(
	'hero_section',
	[
		'title'       	=> esc_html__( 'Hero Section', 'richee' ),
		'description' 	=> esc_html__( 'Hero area content', 'richee' ),
		'panel'       	=> 'home_panel',
		'active_callback' => function() {
			$checkbox_value = get_theme_mod( 'hero_switch');

		if ( $checkbox_value ) {
			return true;
		}
		return false;
	},
		'priority'   	 => 160,
	]
);

    new \Kirki\Field\Text(
	[
		'settings' => 'wlcm_text',
		'label'    => esc_html__( 'Heading before name', 'richee' ),
		'section'  => 'hero_section',
		'default'  => esc_html__( "Hi, i'm", "richee" ),
		'priority' => 10,
	]
);

     new \Kirki\Field\Text(
	[
		'settings' => 'hero_name',
		'label'    => esc_html__( 'Main hero area heading', 'richee' ),
		'section'  => 'hero_section',
		'default'  => esc_html__( "Mahin Ahmed", "richee" ),
		'priority' => 10,
	]
);


      new \Kirki\Field\Text(
	[
		'settings' => 'before_repeater_txt',
		'label'    => esc_html__( 'Title before animate text', 'richee' ),
		'section'  => 'hero_section',
		'default'  => esc_html__( "Professional", "richee" ),
		'priority' => 10,
	]
);

     new \Kirki\Field\Text(
	[
		'settings' 	=> 'animate_type_text',
		'label'    	=> esc_html__( 'Add animated text', 'richee' ),
		'description'=> esc_html__('For multiple animated text using pip (|)symbol to seperate them','richee'),
		'section'  	=> 'hero_section',
		'default'  	=> esc_html__( "web designer|web developer", "richee" ),
		'priority' 	=> 10,
	]
);

	new \Kirki\Field\Text(
		[
			'settings' => 'hero_area_desc',
			'label'    => esc_html__( 'Hero area description', 'richee' ),
			'description'=>esc_html__('Add some description about yourself or business','richee'),
			'section'  => 'hero_section',
			'default'  => esc_html__( "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat, quia blanditiis in voluptatum eligendi hic error dignissimos corporis consequatur !", "richee" ),
			'priority' => 10,
		]
);

	new \Kirki\Field\Text(
		[
			'settings' => 'hero_area_btn_label',
			'label'    => esc_html__( 'Button Label', 'richee' ),
			'section'  => 'hero_section',
			'default'  => esc_html__( "Hire me", "richee" ),
			'priority' => 10,
		]
);

	new \Kirki\Field\Text(
		[
			'settings' => 'hero_area_btn_url',
			'label'    => esc_html__( 'Button Url', 'richee' ),
			'section'  => 'hero_section',
			'default'  => esc_url_raw( "#", "richee" ),
			'priority' => 10,
		]
);
	new \Kirki\Field\Image(
	[
		'settings'    => 'hero_image_url',
		'label'       => esc_html__( 'Upload Image', 'richee' ),
		'description' => esc_html__( 'This images show on hero area', 'richee' ),
		'section'     => 'hero_section',
		'default'     => get_template_directory_uri().'/assets/images/hero-area.png',
	]
);

	//ABOUT SECTION

	new \Kirki\Section(
	'about_section',
	[
		'title'       => esc_html__( 'About Section', 'richee' ),
		'description' => esc_html__( 'About area content', 'richee' ),
		'panel'       => 'home_panel',
		'active_callback' => function() {
			$checkbox_value = get_theme_mod( 'about_switch');

		if ( $checkbox_value ) {
			return true;
		}
		return false;
	},
		'priority'    => 160,
	]
);

	new \Kirki\Field\Text(
		[
			'settings' => 'about_area_heading',
			'label'    => esc_html__( 'About Area Heading', 'richee' ),
			'section'  => 'about_section',
			'default'  => esc_html__( "About Myself", "richee" ),
			'priority' => 10,
		]
);

	new \Kirki\Field\Text(
		[
			'settings' => 'about_area_sub_heading',
			'label'    => esc_html__( 'About area sub heading', 'richee' ),
			'section'  => 'about_section',
			'default'  => esc_html__( "a few words", "richee" ),
			'priority' => 10,
		]
);

	new \Kirki\Field\Text(
		[
			'settings' => 'about_area_desc',
			'label'    => esc_html__( 'About area Description', 'richee' ),
			'section'  => 'about_section',
			'default'  => esc_html__( "Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Eveniet consequuntur laudantium, veniam voluptas ipsam asperiores, saepe architecto velit repellat officia.", "richee" ),
			'priority' => 10,
		]
);

	new \Kirki\Field\Text(
		[
			'settings' => 'about_area_bio_heading',
			'label'    => esc_html__( 'About Bio data heading', 'richee' ),
			'section'  => 'about_section',
			'default'  => esc_html__( "Personal Information", "richee" ),
			'priority' => 10,
		]
);

	new \Kirki\Field\Text(
		[
			'settings' => 'about_bio_name',
			'label'    => esc_html__( 'Enter your name', 'richee' ),
			'section'  => 'about_section',
			'default'  => esc_html__( "Mahin Ahmed", "richee" ),
			'priority' => 10,
		]
);

	new \Kirki\Field\Text(
		[
			'settings' => 'about_bio_age',
			'label'    => esc_html__( 'Enter your age', 'richee' ),
			'section'  => 'about_section',
			'default'  => esc_html__( "21", "richee" ),
			'priority' => 10,
		]
);

	new \Kirki\Field\Text(
		[
			'settings' => 'about_bio_residence',
			'label'    => esc_html__( 'Enter your country name', 'richee' ),
			'section'  => 'about_section',
			'default'  => esc_html__( "Bangladesh", "richee" ),
			'priority' => 10,
		]
);

	new \Kirki\Field\Text(
		[
			'settings' => 'about_bio_address',
			'label'    => esc_html__( 'Enter your address', 'richee' ),
			'section'  => 'about_section',
			'default'  => esc_html__( "Dhaka, Bangladesh", "richee" ),
			'priority' => 10,
		]
);

	new \Kirki\Field\Text(
		[
			'settings' => 'about_bio_email',
			'label'    => esc_html__( 'Enter your email', 'richee' ),
			'section'  => 'about_section',
			'default'  => esc_html__( "demo@gmail.com", "richee" ),
			'priority' => 10,
		]
);



	new \Kirki\Field\Text(
		[
			'settings' => 'about_bio_phone',
			'label'    => esc_html__( 'Enter your phone number', 'richee' ),
			'section'  => 'about_section',
			'default'  => esc_html__( "+534 453335", "richee" ),
			'priority' => 10,
		]
);

	new \Kirki\Field\Text(
		[
			'settings' => 'about_area_btn_label',
			'label'    => esc_html__( 'About Area Button Label', 'richee' ),
			'section'  => 'about_section',
			'default'  => esc_html__( "Download CV", "richee" ),
			'priority' => 10,
		]
);

	new \Kirki\Field\Text(
		[
			'settings' => 'about_area_btn_url',
			'label'    => esc_html__( 'About Area Button URL', 'richee' ),
			'section'  => 'about_section',
			'default'  => esc_url_raw( "#"),
			'priority' => 10,
		]
);

	new \Kirki\Field\Image(
		[
			'settings'    => 'about_image_url',
			'label'       => esc_html__( 'Upload Image', 'richee' ),
			'description' => esc_html__( 'This images show on about area', 'richee' ),
			'section'     => 'about_section',
			'default'     => get_template_directory_uri().'/assets/images/about.png',
		]
);

	//ACHIEVE SECTION START

  new \Kirki\Section(
	'achieve_section',
	[
		'title'       => esc_html__( 'Achieve Section', 'richee' ),
		'description' => esc_html__( 'Achieve area content', 'richee' ),
		'panel'       => 'home_panel',
		'active_callback' => function() {
			$checkbox_value = get_theme_mod( 'about_switch');

		if ( $checkbox_value ) {
			return true;
		}
		return false;
	},
		'priority'    => 160,
	]
);

	new \Kirki\Field\Text(
		[
			'settings' 		=> 'box1_achieve_icon',
			'label'   		=> esc_html__( 'Box1 achieve icon', 'richee' ),
			'description'	=> esc_html__("Paste font awesome icon class here","richee"),
			'section'  		=> 'achieve_section',
			'default'  		=> esc_html("fa-solid fa-people-group"),
			'priority'		=> 10,
		]
);

	new \Kirki\Field\Text(
		[
			'settings' => 'box1_achieve_title',
			'label'    => esc_html__( 'Box1 achieve title', 'richee' ),
			'section'  => 'achieve_section',
			'default'  => esc_html__( "active clients", "richee" ),
			'priority' => 10,
		]
);

	new \Kirki\Field\Text(
		[
			'settings' => 'box1_achieve_number',
			'label'    => esc_html__( 'Box1 achieve number', 'richee' ),
			'section'  => 'achieve_section',
			'default'  => esc_html__( "2000+", "richee" ),
			'priority' => 10,
		]
);


	new \Kirki\Field\Text(
		[
			'settings' 		=> 'box2_achieve_icon',
			'label'    		=> esc_html__( 'Box2 achieve icon', 'richee' ),
			'description'	=> esc_html__("Paste font awesome icon class here","richee"),
			'section'  		=> 'achieve_section',
			'default'  		=> esc_html( "fa-solid fa-diagram-project"),
			'priority' 		=> 10,
		]
);

	new \Kirki\Field\Text(
		[
			'settings' => 'box2_achieve_title',
			'label'    => esc_html__( 'Box2 achieve title', 'richee' ),
			'section'  => 'achieve_section',
			'default'  => esc_html__( "completed projects", "richee" ),
			'priority' => 10,
		]
);

	new \Kirki\Field\Text(
		[
			'settings' => 'box2_achieve_number',
			'label'    => esc_html__( 'Box2 achieve number', 'richee' ),
			'section'  => 'achieve_section',
			'default'  => esc_html__( "3000+", "richee" ),
			'priority' => 10,
		]
);


	new \Kirki\Field\Text(
		[
			'settings' 		=> 'box3_achieve_icon',
			'label'    		=> esc_html__( 'Box3 achieve icon', 'richee' ),
			'description'	=> esc_html__("Paste font awesome icon class here","richee"),
			'section' 		=> 'achieve_section',
			'default'  		=> esc_html( "fa-solid fa-laptop-file"),
			'priority' 		=> 10,
		]
);

	new \Kirki\Field\Text(
		[
			'settings' => 'box3_achieve_title',
			'label'    => esc_html__( 'Box3 achieve title', 'richee' ),
			'section'  => 'achieve_section',
			'default'  => esc_html__( "years of experience", "richee" ),
			'priority' => 10,
		]
);

	new \Kirki\Field\Text(
		[
			'settings' => 'box3_achieve_number',
			'label'    => esc_html__( 'Box3 achieve number', 'richee' ),
			'section'  => 'achieve_section',
			'default'  => esc_html__( "7+", "richee" ),
			'priority' => 10,
		]
);


	new \Kirki\Field\Text(
		[
			'settings' 		=> 'box4_achieve_icon',
			'label'    		=> esc_html__( 'Box4 achieve icon', 'richee' ),
			'description'	=> esc_html__("Paste font awesome icon class here","richee"),
			'section' 		=> 'achieve_section',
			'default'  		=> esc_html( "fa-solid fa-medal"),
			'priority' 		=> 10,
		]
);

	new \Kirki\Field\Text(
		[
			'settings' => 'box4_achieve_title',
			'label'    => esc_html__( 'Box4 achieve title', 'richee' ),
			'section'  => 'achieve_section',
			'default'  => esc_html__( "awards", "richee" ),
			'priority' => 10,
		]
);

	new \Kirki\Field\Text(
		[
			'settings' => 'box4_achieve_number',
			'label'    => esc_html__( 'Box4 achieve number', 'richee' ),
			'section'  => 'achieve_section',
			'default'  => esc_html__( "29", "richee" ),
			'priority' => 10,
		]
);


	//SERVICE SECTION START

	new \Kirki\Section(
	'services_section',
	[
		'title'       => esc_html__( 'Services Section', 'richee' ),
		'description' => esc_html__( 'Services area content', 'richee' ),
		'panel'       => 'home_panel',
		'active_callback' => function() {
			$checkbox_value = get_theme_mod( 'service_switch');

		if ( $checkbox_value ) {
			return true;
		}
		return false;
	},
		'priority'    => 160,
	]
);

	new \Kirki\Field\Text(
		[
			'settings' => 'service_section_heading',
			'label'    => esc_html__( 'Service section heading', 'richee' ),
			'section'  => 'services_section',
			'default'  => esc_html__( "services", "richee" ),
			'priority' => 10,
		]
);

	new \Kirki\Field\Text(
		[
			'settings' => 'service_section_sub_heading',
			'label'    => esc_html__( 'Services section sub heading', 'richee' ),
			'section'  => 'services_section',
			'default'  => esc_html__( "GET PREMIUM & HIGH QUALITY SERVICES", "richee" ),
			'priority' => 10,
		]
);

	new \Kirki\Field\Repeater(
	[
		'settings' => 'services_box',
		'label'    => esc_html__( 'Services Box', 'richee' ),
		'section'  => 'services_section',
		'priority' => 10,
		'row_label'    => [
			'type'  => 'field',
			'value' => esc_html__( 'Service Box', 'richee' )
		],
		'default'  => [
			[
				'service_icon'		=>esc_attr('fa-solid fa-paintbrush'),
				'service_heading'	=>esc_html__('Ui/Ux Design','richee'),
				'service_desc'		=>esc_html__('Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Aspernatur Atque Voluptas Ullam.','richee'),
			],

			[
				'service_icon'		=>esc_attr('fa-solid fa-laptop-code'),
				'service_heading'	=>esc_html__('Web Design','richee'),
				'service_desc'		=>esc_html__('Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Aspernatur Atque Voluptas Ullam.','richee'),
			],

			[
				'service_icon'		=>esc_attr('fa-solid fa-code'),
				'service_heading'	=>esc_html__('Web Development','richee'),
				'service_desc'		=>esc_html__('Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Aspernatur Atque Voluptas Ullam.','richee'),
			],

			[
				'service_icon'		=>esc_attr('fa-brands fa-wordpress-simple'),
				'service_heading'	=>esc_html__('wordpress','richee'),
				'service_desc'		=>esc_html__('Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Aspernatur Atque Voluptas Ullam.','richee'),
			],

			[
				'service_icon'		=>esc_attr('fa-solid fa-chart-line'),
				'service_heading'	=>esc_html__('data analysis','richee'),
				'service_desc'		=>esc_html__('Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Aspernatur Atque Voluptas Ullam.','richee'),
			],

			[
				'service_icon'		=>esc_attr('fa-solid fa-people-arrows'),
				'service_heading'	=>esc_html__('social marketing','richee'),
				'service_desc'		=>esc_html__('Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Aspernatur Atque Voluptas Ullam.','richee'),
			],
		],
		'button_label' => esc_html__( '"Add new service Box', 'richee' ),
		'fields'   => [
				'service_icon'=> [
				'type'        => 'text',
				'label'       => esc_html__( 'Service Icon', 'richee' ),
				'description' => esc_html__( 'Paste fontawesome icon class', 'richee' ),
				'default'     => '',
			],
				'service_heading'=> [
				'type'        	=> 'text',
				'label'       	=> esc_html__( 'Service Heading', 'richee' ),
				'default'     	=> '',
			],
			'service_desc'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'Service Description', 'richee' ),
				'default'     => '',
			],
		],
	]
);


	//RESUME SECTION START

	new \Kirki\Section(
	'resume_section',
	[
		'title'       => esc_html__( 'Resume Section', 'richee' ),
		'description' => esc_html__( 'Resume area content', 'richee' ),
		'panel'       => 'home_panel',
		'active_callback' => function() {
			$checkbox_value = get_theme_mod( 'resume_switch');

		if ( $checkbox_value ) {
			return true;
		}
		return false;
	},
		'priority'    => 160,
	]
);

	new \Kirki\Field\Text(
		[
			'settings' => 'resume_section_heading',
			'label'    => esc_html__( 'Resume section heading', 'richee' ),
			'section'  => 'resume_section',
			'default'  => esc_html__( "my resume", "richee" ),
			'priority' => 7,
		]
);

	new \Kirki\Field\Text(
		[
			'settings' => 'resume_section_sub_heading',
			'label'    => esc_html__( 'Resume section sub heading', 'richee' ),
			'section'  => 'resume_section',
			'default'  => esc_html__( "know about my experience & academic certificate", "richee" ),
			'priority' => 7,
		]
);

	new \Kirki\Field\Text(
		[
			'settings' => 'resume_tab1_btn_label',
			'label'    => esc_html__( 'First tab button label', 'richee' ),
			'section'  => 'resume_section',
			'default'  => esc_html__( "education", "richee" ),
			'priority' => 8,
		]
);



	new \Kirki\Field\Repeater(
	[
		'settings' => 'first_tab_btn_content',
		'label'    => esc_html__( 'First Tab Button Content', 'richee' ),
		'section'  => 'resume_section',
		'priority' => 9,
		'row_label'    => [
			'type'  => 'field',
			'value' => esc_html__( 'Content Box', 'richee' )
		],
		'default'  => [
			[
				'achieve_year'	=>esc_html__('2014-2018','richee'),
				'achieve_tab_title'		=>esc_html__('web developer','richee'),
				'achieve_tab_from'		=>esc_html__('University Of Udemy','richee'),
				'achieve_tab_desc'		=>esc_html__('Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Voluptate Fugiat Quia Cupiditate Labore Natus Sunt? Odio.','richee'),
			],

			[
				'achieve_year'	=>esc_html__('2014-2016','richee'),
				'achieve_tab_title'		=>esc_html__('web design','richee'),
				'achieve_tab_from'		=>esc_html__('University Of Udemy','richee'),
				'achieve_tab_desc'		=>esc_html__('Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Voluptate Fugiat Quia Cupiditate Labore Natus Sunt? Odio.','richee'),
			],

			[
				'achieve_year'	=>esc_html__('2018-2022','richee'),
				'achieve_tab_title'		=>esc_html__('graphics design','richee'),
				'achieve_tab_from'		=>esc_html__('University Of Udemy','richee'),
				'achieve_tab_desc'		=>esc_html__('Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Voluptate Fugiat Quia Cupiditate Labore Natus Sunt? Odio.','richee'),
			],
			
		],
		'button_label' => esc_html__( '"Add new Tab Content', 'richee' ),
		'fields'   => [
				'achieve_year'=> [
				'type'        => 'text',
				'label'       => esc_html__( 'Add your achievement years', 'richee' ),
			],
				'achieve_tab_title'=> [
				'type'        	=> 'text',
				'label'       	=> esc_html__( 'Achievement Title', 'richee' ),
			],

			'achieve_tab_from'=> [
				'type'        	=> 'text',
				'label'       	=> esc_html__( 'Add University/Company Name', 'richee' ),
			],

			'achieve_tab_desc'=> [
				'type'        	=> 'text',
				'label'       	=> esc_html__( 'Add description about your achievement', 'richee' ),
			],
		],
	]
);

	new \Kirki\Field\Text(
		[
			'settings' => 'resume_tab2_btn_label',
			'label'    => esc_html__( 'Second tab button label', 'richee' ),
			'section'  => 'resume_section',
			'default'  => esc_html__( "experience", "richee" ),
			'priority' => 10,
		]
);



new \Kirki\Field\Repeater(
	[
		'settings' => 'second_tab_btn_content',
		'label'    => esc_html__( 'Second Tab Button Content', 'richee' ),
		'section'  => 'resume_section',
		'priority' => 10,
		'row_label'    => [
			'type'  => 'field',
			'value' => esc_html__( 'Content Box', 'richee' )
		],
		'default'  => [
			[
				'achieve_year'	=>esc_html__('2016-2018','richee'),
				'achieve_tab_title'		=>esc_html__('junior web developer','richee'),
				'achieve_tab_from'		=>esc_html__('Themebucket','richee'),
				'achieve_tab_desc'		=>esc_html__('Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Voluptate Fugiat Quia Cupiditate Labore Natus Sunt? Odio.','richee'),
			],

			[
				'achieve_year'	=>esc_html__('2018-2022','richee'),
				'achieve_tab_title'		=>esc_html__('wordpress developer','richee'),
				'achieve_tab_from'		=>esc_html__('Fiverr','richee'),
				'achieve_tab_desc'		=>esc_html__('Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Voluptate Fugiat Quia Cupiditate Labore Natus Sunt? Odio.','richee'),
			],

			[
				'achieve_year'	=>esc_html__('2018-2021','richee'),
				'achieve_tab_title'		=>esc_html__('graphics designer','richee'),
				'achieve_tab_from'		=>esc_html__('fiverr','richee'),
				'achieve_tab_desc'		=>esc_html__('Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Voluptate Fugiat Quia Cupiditate Labore Natus Sunt? Odio.','richee'),
			],
			
		],
		'button_label' => esc_html__( '"Add new Tab Content', 'richee' ),
		'fields'   => [
				'achieve_year'=> [
				'type'        => 'text',
				'label'       => esc_html__( 'Add your achievement years', 'richee' ),
			],
				'achieve_tab_title'=> [
				'type'        	=> 'text',
				'label'       	=> esc_html__( 'Achievement Title', 'richee' ),
			],

			'achieve_tab_from'=> [
				'type'        	=> 'text',
				'label'       	=> esc_html__( 'Add University/Company Name', 'richee' ),
			],

			'achieve_tab_desc'=> [
				'type'        	=> 'text',
				'label'       	=> esc_html__( 'Add description about your achievement', 'richee' ),
			],
		],
	]
);


	new \Kirki\Field\Text(
		[
			'settings' => 'resume_tab3_btn_label',
			'label'    => esc_html__( 'Third tab button label', 'richee' ),
			'section'  => 'resume_section',
			'default'  => esc_html__( "awards", "richee" ),
			'priority' => 11,
		]
);



new \Kirki\Field\Repeater(
	[
		'settings' => 'third_tab_btn_content',
		'label'    => esc_html__( 'Second Tab Button Content', 'richee' ),
		'section'  => 'resume_section',
		'priority' => 12,
		'row_label'    => [
			'type'  => 'field',
			'value' => esc_html__( 'Content Box', 'richee' )
		],
		'default'  => [
			[
				'achieve_year'	=>esc_html__('2016','richee'),
				'achieve_tab_title'		=>esc_html__('Creative Designer','richee'),
				'achieve_tab_from'		=>esc_html__('Fiverr Award','richee'),
				'achieve_tab_desc'		=>esc_html__('Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Voluptate Fugiat Quia Cupiditate Labore Natus Sunt? Odio.','richee'),
			],

			[
				'achieve_year'	=>esc_html__('2018-2022','richee'),
				'achieve_tab_title'		=>esc_html__('best theme developer','richee'),
				'achieve_tab_from'		=>esc_html__('WordPress Team','richee'),
				'achieve_tab_desc'		=>esc_html__('Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Voluptate Fugiat Quia Cupiditate Labore Natus Sunt? Odio.','richee'),
			],
			
		],
		'button_label' => esc_html__( '"Add new Tab Content', 'richee' ),
		'fields'   => [
				'achieve_year'=> [
				'type'        => 'text',
				'label'       => esc_html__( 'Add your achievement years', 'richee' ),
			],
				'achieve_tab_title'=> [
				'type'        	=> 'text',
				'label'       	=> esc_html__( 'Achievement Title', 'richee' ),
			],

			'achieve_tab_from'=> [
				'type'        	=> 'text',
				'label'       	=> esc_html__( 'Add University/Company Name', 'richee' ),
			],

			'achieve_tab_desc'=> [
				'type'        	=> 'text',
				'label'       	=> esc_html__( 'Add description about your achievement', 'richee' ),
			],
		],
	]
);


new \Kirki\Field\Text(
		[
			'settings' => 'line_progress_box_title',
			'label'    => esc_html__( 'Linear Progress-bar Box Title', 'richee' ),
			'section'  => 'resume_section',
			'default'  => esc_html__( "my skills", "richee" ),
			'priority' => 15,
		]
);



new \Kirki\Field\Repeater(
	[
		'settings' => 'linear_progress_bar_content',
		'label'    => esc_html__( 'Show your skills in Linear Progress Bar', 'richee' ),
		'section'  => 'resume_section',
		'priority' => 15,
		'row_label'    => [
			'type'  => 'field',
			'value' => esc_html__( 'Progress Bar', 'richee' )
		],
		'default'  => [
			[
				'skills_title'	=>esc_html__('html & css','richee'),
				'skills_percent'		=>esc_html__('92','richee'),
			],

			[
				'skills_title'	=>esc_html__('javascript','richee'),
				'skills_percent'		=>esc_html__('80','richee'),
			],

			[
				'skills_title'	=>esc_html__('php','richee'),
				'skills_percent'		=>esc_html__('83','richee'),
			],

			[
				'skills_title'	=>esc_html__('wordpress','richee'),
				'skills_percent'		=>esc_html__('90','richee'),
			],
			
		],
		'button_label' => esc_html__( '"Add new Skills Progress Bar', 'richee' ),
		'fields'   => [
				'skills_title'=> [
				'type'        => 'text',
				'label'       => esc_html__( 'Add Skills title', 'richee' ),
			],
				'skills_percent'=> [
				'type'        	=> 'text',
				'label'       	=> esc_html__( 'Add your skills percentage', 'richee' ),
			],
		],
	]
);


new \Kirki\Field\Text(
		[
			'settings' => 'circle_progress_box_title',
			'label'    => esc_html__( 'Circle Progress-bar Box Title', 'richee' ),
			'section'  => 'resume_section',
			'default'  => esc_html__( "design skills", "richee" ),
			'priority' => 15,
		]
);


new \Kirki\Field\Repeater(
	[
		'settings' => 'circle_progress_bar_content',
		'label'    => esc_html__( 'Show your skills in circle Progress Bar', 'richee' ),
		'section'  => 'resume_section',
		'priority' => 15,
		'row_label'    => [
			'type'  => 'field',
			'value' => esc_html__( 'Circle Progress Bar', 'richee' )
		],
		'default'  => [
			[
				'skills_title'	=>esc_html__('web design','richee'),
				'skills_percent'		=>esc_html__('89','richee'),
			],

			[
				'skills_title'	=>esc_html__('ui/ux design','richee'),
				'skills_percent'		=>esc_html__('82','richee'),
			],

			[
				'skills_title'	=>esc_html__('graphics design','richee'),
				'skills_percent'		=>esc_html__('91','richee'),
			],
		],
		'button_label' => esc_html__( '"Add new Skills Progress Circle', 'richee' ),
		'fields'   => [
				'skills_title'=> [
				'type'        => 'text',
				'label'       => esc_html__( 'Add Skills title', 'richee' ),
			],
				'skills_percent'=> [
				'type'        	=> 'text',
				'label'       	=> esc_html__( 'Add your skills percentage', 'richee' ),
			],
		],
	]
);


//PORTFOLIO SECTION START

  new \Kirki\Section(
	'portfolio_section',
	[
		'title'       => esc_html__( 'Portfolio Section', 'richee' ),
		'description' => esc_html__( 'Portfolio area content', 'richee' ),
		'panel'       => 'home_panel',
		'active_callback' => function() {
			$checkbox_value = get_theme_mod( 'portfolio_switch');

		if ( $checkbox_value ) {
			return true;
		}
		return false;
	},
		'priority'    => 160,
	]
);

	new \Kirki\Field\Text(
		[
			'settings' => 'portfolio_area_heading',
			'label'    => esc_html__( 'Portfolio Area Heading', 'richee' ),
			'section'  => 'portfolio_section',
			'default'  => esc_html__( "portfolio", "richee" ),
			'priority' => 10,
		]
);

	new \Kirki\Field\Text(
		[
			'settings' => 'portfolio_area_btn_url',
			'label'    => esc_html__( 'Portfolio Area Button URL', 'richee' ),
			'section'  => 'portfolio_section',
			'default'  => esc_url('#'),
			'priority' => 15,
		]
);

	new \Kirki\Field\Text(
		[
			'settings' => 'portfolio_area_btn_label',
			'label'    => esc_html__( 'Portfolio Area Button Label', 'richee' ),
			'section'  => 'portfolio_section',
			'default'  => esc_html__( "See More", "richee" ),
			'priority' => 15,
		]
);

	new \Kirki\Field\Text(
		[
			'settings' => 'portfolio_area_sub_heading',
			'label'    => esc_html__( 'Portfolio area sub heading', 'richee' ),
			'section'  => 'portfolio_section',
			'default'  => esc_html__( "VISIT MY PORTFOLIO & SEE MY LATEST PROJECTS", "richee" ),
			'priority' => 10,
		]
);






new \Kirki\Field\Repeater(
	[
		'settings' => 'portfolio_category',
		'label'    => esc_html__( 'Add Working Categories', 'richee' ),
		'section'  => 'portfolio_section',
		'priority' => 10,
		'row_label'    => [
			'type'  => 'field',
			'value' => esc_html__( 'Portfolio Category', 'richee' )
		],
		'default'  => [
			[
				'portfolio_category'	=>esc_html__('wordpress','richee'),
			],

			[
				'portfolio_category'	=>esc_html__('web design','richee'),
			],

			[
				'portfolio_category'	=>esc_html__('ui ux','richee'),
			],

			[
				'portfolio_category'	=>esc_html__('graphics','richee'),
			],

		],
		'button_label' => esc_html__( '"Add new Category', 'richee' ),
		'fields'   => [
				'portfolio_category'=> [
				'type'        	=> 'text',
				'label'       	=> esc_html__( 'Add Category', 'richee' ),
			],
		],
	]
);



new \Kirki\Field\Repeater(
	[
		'settings' => 'portfolio_items',
		'label'    => esc_html__( 'Add your portfolio items', 'richee' ),
		'section'  => 'portfolio_section',
		'priority' => 10,
		'row_label'    => [
			'type'  => 'field',
			'value' => esc_html__( 'Portfolio Items', 'richee' )
		],
		'default'  => [
			[
				'portfolio_image'		=>get_template_directory_uri().'/assets/images/img1.jpg',
				'portfolio_category'	=>esc_html__('wordpress|web design','richee'),
			],

			[
				'portfolio_image'		=>get_template_directory_uri().'/assets/images/img2.jpg',
				'portfolio_category'	=>esc_html__('web design|wordpress','richee'),
			],

			[
				'portfolio_image'		=>get_template_directory_uri().'/assets/images/img3.jpg',
				'portfolio_category'	=>esc_html__('ui ux|graphics','richee'),
			],

			[
				'portfolio_image'		=>get_template_directory_uri().'/assets/images/img4.jpg',
				'portfolio_category'	=>esc_html__('graphics','richee'),
			],

			[
				'portfolio_image'		=>get_template_directory_uri().'/assets/images/img5.jpg',
				'portfolio_category'	=>esc_html__('ui ux|web design','richee'),
			],

			[
				'portfolio_image'		=>get_template_directory_uri().'/assets/images/img6.jpg',
				'portfolio_category'	=>esc_html__('graphics|ui ux','richee'),
			],

			
		],
		'button_label' => esc_html__( '"Add new Portfolio Items', 'richee' ),
		'fields'   => [
				'portfolio_image'=> [
				'type'        => 'image',
				'label'       => esc_html__( 'Add Portfolio Image', 'richee' ),
			],
				'portfolio_category'=> [
				'type'        	=> 'text',
				'label'       	=> esc_html__( 'Add Category', 'richee' ),
				'description'	=>esc_html__('Have multiple categories? Then separate them by pipe" | "','richee'),
			],
		],
	]
);





//PORTFOLIO SECTION START

  new \Kirki\Section(
	'testimonial_section',
	[
		'title'       => esc_html__( 'Testimonials Section', 'richee' ),
		'description' => esc_html__( 'Testimonials area content', 'richee' ),
		'panel'       => 'home_panel',
		'active_callback' => function() {
			$checkbox_value = get_theme_mod( 'testimonial_switch');

		if ( $checkbox_value ) {
			return true;
		}
		return false;
	},
		'priority'    => 160,
	]
);

	new \Kirki\Field\Text(
		[
			'settings' => 'testimonial_area_heading',
			'label'    => esc_html__( 'Testimonials Area Heading', 'richee' ),
			'section'  => 'testimonial_section',
			'default'  => esc_html__( "testimonials", "richee" ),
			'priority' => 10,
		]
);

	new \Kirki\Field\Text(
		[
			'settings' => 'testimonial_area_sub_heading',
			'label'    => esc_html__( 'Testimonials area sub heading', 'richee' ),
			'section'  => 'testimonial_section',
			'default'  => esc_html__( "SEE WHAT OUR CLIENTS SAYS", "richee" ),
			'priority' => 10,
		]
);



new \Kirki\Field\Repeater( 
	[
		'settings' => 'testimonials',
		'label'    => esc_html__( 'Add Testimonial', 'richee' ),
		'section'  => 'testimonial_section',
		'priority' => 10,
		'row_label'    => [
			'type'  => 'field',
			'value' => esc_html__( 'Testimonial', 'richee' )
		],
		'default'  => [
			[
				'client_img'	=>get_template_directory_uri().'/assets/images/testimonial1.jpg',
				'client_name'	=>esc_html__('john doe','richee'),
				'client_review'	=>esc_html__('Lorem ipsum, sint dolor sit amet consectetur adipisicing, elit. Quia, rerum nihil ex corrupti dignissimos est sint unde.','richee'),
			],

			[
				'client_img'	=>get_template_directory_uri().'/assets/images/testimonial2.jpg',
				'client_name'	=>esc_html__('mickel kyaw','richee'),
				'client_review'	=>esc_html__('Lorem ipsum, sint dolor sit amet consectetur adipisicing, elit. Quia, rerum nihil ex corrupti dignissimos est sint unde.','richee'),
			],

			[
				'client_img'	=>get_template_directory_uri().'/assets/images/testimonial3.jpg',
				'client_name'	=>esc_html__('Jemy Watson','richee'),
				'client_review'	=>esc_html__('Lorem ipsum, sint dolor sit amet consectetur adipisicing, elit. Quia, rerum nihil ex corrupti dignissimos est sint unde.','richee'),
			],

			[
				'client_img'	=>get_template_directory_uri().'/assets/images/testimonial1.jpg',
				'client_name'	=>esc_html__('James Smith','richee'),
				'client_review'	=>esc_html__('Lorem ipsum, sint dolor sit amet consectetur adipisicing, elit. Quia, rerum nihil ex corrupti dignissimos est sint unde.','richee'),
			],

			[
				'client_img'	=>get_template_directory_uri().'/assets/images/testimonial2.jpg',
				'client_name'	=>esc_html__('Henry Johnson','richee'),
				'client_review'	=>esc_html__('Lorem ipsum, sint dolor sit amet consectetur adipisicing, elit. Quia, rerum nihil ex corrupti dignissimos est sint unde.','richee'),
			],

			[
				'client_img'	=>get_template_directory_uri().'/assets/images/testimonial3.jpg',
				'client_name'	=>esc_html__('Luka Modric','richee'),
				'client_review'	=>esc_html__('Lorem ipsum, sint dolor sit amet consectetur adipisicing, elit. Quia, rerum nihil ex corrupti dignissimos est sint unde.','richee'),
			],


			
		],
		'button_label' => esc_html__( '"Add new Testimonial', 'richee' ),
		'fields'   => [
				'client_img'=> [
				'type'        => 'image',
				'label'       => esc_html__( 'Add Client Image', 'richee' ),
			],
				'client_name'=> [
				'type'        	=> 'text',
				'label'       	=> esc_html__( 'Add Client Name', 'richee' ),
			],

			'client_review'=> [
				'type'        	=> 'text',
				'label'       	=> esc_html__( 'Add Client Review', 'richee' ),
			],
		],
	]
);




//CONTACT SECTION START

  new \Kirki\Section(
	'contact_section',
	[
		'title'       => esc_html__( 'Contact Section', 'richee' ),
		'description' => esc_html__( 'Contact area content', 'richee' ),
		'panel'       => 'home_panel',
		'active_callback' => function() {
			$checkbox_value = get_theme_mod( 'contact_switch');

		if ( $checkbox_value ) {
			return true;
		}
		return false;
	},
		'priority'    => 160,
	]
);

	new \Kirki\Field\Text(
		[
			'settings' => 'contact_area_heading',
			'label'    => esc_html__( 'Contact Area Heading', 'richee' ),
			'section'  => 'contact_section',
			'default'  => esc_html__( "Contact", "richee" ),
			'priority' => 10,
		]
);

	new \Kirki\Field\Text(
		[
			'settings' => 'contact_area_sub_heading',
			'label'    => esc_html__( 'Contact area sub heading', 'richee' ),
			'section'  => 'contact_section',
			'default'  => esc_html__( "contact with me", "richee" ),
			'priority' => 10,
		]
);





new \Kirki\Field\Repeater( 
	[
		'settings' => 'contact_right_box',
		'label'    => esc_html__( 'Add Contact Info', 'richee' ),
		'section'  => 'contact_section',
		'priority' => 10,
		'row_label'    => [
			'type'  => 'field',
			'value' => esc_html__( 'Contact Info', 'richee' )
		],
		'default'  => [
			[
				'contact_box_icon'	=>esc_html('fa-solid fa-location-dot'),
				'contact_box_title'	=>esc_html__('address','richee'),
				'contact_box_desc'	=>esc_html__('12 road mirpur, dhaka','richee'),
			],

			[
				'contact_box_icon'	=>esc_html('fa-solid fa-envelope'),
				'contact_box_title'	=>esc_html__('email','richee'),
				'contact_box_desc'	=>esc_html__('demo@gmail.com','richee'),
			],

			[
				'contact_box_icon'	=>esc_html('fa-solid fa-phone'),
				'contact_box_title'	=>esc_html__('phone','richee'),
				'contact_box_desc'	=>esc_html__('+241 201-3322','richee'),
			],

			
		],
		'button_label' => esc_html__( '"Add new Contact Info', 'richee' ),
		'fields'   => [
				'contact_box_icon'=> [
				'type'        => 'text',
				'label'       => esc_html__( 'Add FontAwesome icon Class', 'richee' ),
			],
				'contact_box_title'=> [
				'type'        	=> 'text',
				'label'       	=> esc_html__( 'Add Info Label', 'richee' ),
			],

			'contact_box_desc'=> [
				'type'        	=> 'text',
				'label'       	=> esc_html__( 'Add Information', 'richee' ),
			],
		],
	]
);



new \Kirki\Field\Text(
		[
			'settings' => 'contact_form_shortcode',
			'label'    => esc_html__( 'Paste Contact form shortcode', 'richee' ),
			'section'  => 'contact_section',
			'default'  => esc_html('[contact-form-7 id="35" title="Contact form 1"]'),
			'priority' => 10,
		]
);

	new \Kirki\Section(
	'section_switch',
	[
		'title'       => esc_html__( 'Section Hide & Show', 'richee' ),
		'description' => esc_html__( 'You can Hide or Show Demo Sections', 'richee' ),
		'panel'       => 'home_panel',
		'priority'    => 160,
	]
);


new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'hero_switch',
		'label'       => esc_html__( 'Hero Section Switch', 'richee' ),
		'description' => esc_html__( 'Switch control for hero section', 'richee' ),
		'section'     => 'section_switch',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Show', 'richee' ),
			'off' => esc_html__( 'Hide', 'richee' ),
		],
	]
);


new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'about_switch',
		'label'       => esc_html__( 'About Section Switch', 'richee' ),
		'description' => esc_html__( 'Switch control for About section', 'richee' ),
		'section'     => 'section_switch',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Show', 'richee' ),
			'off' => esc_html__( 'Hide', 'richee' ),
		],
	]
);


new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'service_switch',
		'label'       => esc_html__( 'Service Section Switch', 'richee' ),
		'description' => esc_html__( 'Switch control for Service section', 'richee' ),
		'section'     => 'section_switch',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Show', 'richee' ),
			'off' => esc_html__( 'Hide', 'richee' ),
		],
	]
);

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'resume_switch',
		'label'       => esc_html__( 'Resume Section Switch', 'richee' ),
		'description' => esc_html__( 'Switch control for Resume section', 'richee' ),
		'section'     => 'section_switch',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Show', 'richee' ),
			'off' => esc_html__( 'Hide', 'richee' ),
		],
	]
);


new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'portfolio_switch',
		'label'       => esc_html__( 'Portfolio Section Switch', 'richee' ),
		'description' => esc_html__( 'Switch control for Portfolio section', 'richee' ),
		'section'     => 'section_switch',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Show', 'richee' ),
			'off' => esc_html__( 'Hide', 'richee' ),
		],
	]
);

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'testimonial_switch',
		'label'       => esc_html__( 'Testiomonial Section Switch', 'richee' ),
		'description' => esc_html__( 'Switch control for Testiomonial section', 'richee' ),
		'section'     => 'section_switch',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Show', 'richee' ),
			'off' => esc_html__( 'Hide', 'richee' ),
		],
	]
);


new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'contact_switch',
		'label'       => esc_html__( 'Contact Section Switch', 'richee' ),
		'description' => esc_html__( 'Switch control for Contact section', 'richee' ),
		'section'     => 'section_switch',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Show', 'richee' ),
			'off' => esc_html__( 'Hide', 'richee' ),
		],
	]
);


   new \Kirki\Section(
	'social_section',
	[
		'title'       	=> esc_html__( 'Social Icons', 'richee' ),
		'description' 	=> esc_html__( 'Leave Link Field blank to hide any Social Icons', 'richee' ),
		'panel'       	=> 'home_panel',
		'priority'   	 => 160,
	]
);



new \Kirki\Field\Repeater( 
	[
		'settings' => 'social_icon_link',
		'label'    => esc_html__( 'Add Social Icons', 'richee' ),
		'section'  => 'social_section',
		'priority' => 10,
		'row_label'    => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'richee' )
		],
		'default'  => [
			[
				'font_class'	=>esc_html('fa-facebook-f'),
				'social_link'	=>esc_url('#')
			],

			[
				'font_class'	=>esc_html('fa-twitter'),
				'social_link'	=>esc_url('#')
			],

			[
				'font_class'	=>esc_html('fa-instagram'),
				'social_link'	=>esc_url('#')
			],

			[
				'font_class'	=>esc_html('fa-linkedin-in'),
				'social_link'	=>esc_url('#')
			],

			
		],
		'button_label' => esc_html__( '"Add new Contact Info', 'richee' ),
		'fields'   => [
				'font_class'=> [
				'type'        => 'text',
				'label'       => esc_html__( 'Add FontAwesome icon Class', 'richee' ),
				'description' =>esc_html('Paste fontawesome icon class. Note:"Paste last part of class". Example(fa-facebook)'),
			],
				'social_link'=> [
				'type'        	=> 'url',
				'label'       	=> esc_html__( 'Add Socials Account Link', 'richee' ),
			],
		],
	]
);


  new \Kirki\Section(
	'footer_area',
	[
		'title'       	=> esc_html__( 'Footer', 'richee' ),
		'panel'       	=> 'home_panel',
		'priority'   	 => 160,
	]
);


new \Kirki\Field\Text(
	[
		'settings'    => 'copy_text',
		'label'       => esc_html__( 'Copyright Text', 'richee' ),
		'section'     => 'footer_area',
		'default'     => esc_html__('© 2023. Richee — PERSONAL PORTFOLIO THEME. ALL RIGHTS RESERVED.','richee'),
	]
);
}