<?php 

/**
 * Jon Lab functions and definitions
 *
 * @package Jon Lab
 */

function jon_lab_customizer( $wp_customize ){

	// Custom Blog Title
/*
	$wp_customize->add_section(
		'sec_blog_title', array(
			'title'			=> 'Blog Title',
			'description'	=> 'Blog Title Section'
		)

	);

			*/

	// Copyright Section

	$wp_customize->add_section(
		'sec_copyright', array(
			'title'			=> 'Copyright Settings',
			'description'	=> 'Copyright Section'
		)

	);

			// Field 1 - Copyright Text Box
			$wp_customize->add_setting(
				'set_copyright', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback' 	=> 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_copyright', array(
					'label'			=> 'Copyright',
					'description'	=> 'Please, add your copyright information here',
					'section'		=> 'sec_copyright',
					'type'			=> 'text'
				)
			);

	// Custom Section Home Page Title

	$wp_customize->add_section(
		'sec_home_title_sections', array(
			'title'			=> 'Section Home Page Title',
			'description'	=> 'Customize your Home Page Titles'
		)

	);

			// Field 1 - Section 1 Title Text Box
			$wp_customize->add_setting(
				'set_home_title1', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback' 	=> 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_home_title1', array(
					'label'			=> 'Section Title 1',
					'description'	=> 'Please, add your title for section 1 here',
					'section'		=> 'sec_home_title_sections',
					'type'			=> 'text'
				)
			);
			// Field 2 - Section Title 2 Text Box
			$wp_customize->add_setting(
				'set_home_title2', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback' 	=> 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_home_title2', array(
					'label'			=> 'Section Title 2',
					'description'	=> 'Please, add your title for section 2 here',
					'section'		=> 'sec_home_title_sections',
					'type'			=> 'text'
				)
			);
			// Field 3 - Section Title 3 Text Box
			$wp_customize->add_setting(
				'set_home_title3', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback' 	=> 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_home_title3', array(
					'label'			=> 'Section Title 3',
					'description'	=> 'Please, add your title for section 3 here',
					'section'		=> 'sec_home_title_sections',
					'type'			=> 'text'
				)
			);
			// Field 4 - Blog Title Text Box
			$wp_customize->add_setting(
				'set_blog_title', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback' 	=> 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_blog_title', array(
					'label'			=> 'Blog Section Title',
					'description'	=> 'Please, add your last  blog title information here',
					'section'		=> 'sec_home_title_sections',
					'type'			=> 'text'
				)
			);

	/*----------------------------------------------------------*/
	//Slider SecTion

	$wp_customize->add_section(
		'sec_slider', array(
			'title'			=> 'Slider Settings',
			'description'	=> 'Slider Section'
		)
	);

			// Field 1 - Slider Page Number 1	

			$wp_customize->add_setting(
				'set_slider_page1', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback' 	=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_slider_page1', array(
					'label'			=> 'Set slider page 1',
					'description'	=> 'Set slider page 1',
					'section'		=> 'sec_slider',
					'type'			=> 'dropdown-pages'
				)
			);

			// Field 2 - Slider Burron Text Number 1	

			$wp_customize->add_setting(
				'set_slider_button_text1', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback' 	=> 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_text1', array(
					'label'			=> 'Button Text for page 1',
					'description'	=> 'Button Text for page 1',
					'section'		=> 'sec_slider',
					'type'			=> 'text'
				)
			);

			// Field 3 - Slider Burron URL Number 1	

			$wp_customize->add_setting(
				'set_slider_button_url1', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback' 	=> 'esc_url_raw'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_url1', array(
					'label'			=> 'URL Text for page 1',
					'description'	=> 'URL Text for page 1',
					'section'		=> 'sec_slider',
					'type'			=> 'url'
				)
			);

	/*----------------------------------------------------------*/

			// Field 4 - Slider Page Number 2	

			$wp_customize->add_setting(
				'set_slider_page2', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback' 	=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_slider_page2', array(
					'label'			=> 'Set slider page 2',
					'description'	=> 'Set slider page 2',
					'section'		=> 'sec_slider',
					'type'			=> 'dropdown-pages'
				)
			);

			// Field 5 - Slider Burron Text Number 2	

			$wp_customize->add_setting(
				'set_slider_button_text2', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback' 	=> 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_text2', array(
					'label'			=> 'Button Text for page 2',
					'description'	=> 'Button Text for page 2',
					'section'		=> 'sec_slider',
					'type'			=> 'text'
				)
			);

			// Field 6 - Slider Burron URL Number 2	

			$wp_customize->add_setting(
				'set_slider_button_url2', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback' 	=> 'esc_url_raw'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_url2', array(
					'label'			=> 'URL Text for page 2',
					'description'	=> 'URL Text for page 2',
					'section'		=> 'sec_slider',
					'type'			=> 'url'
				)
			);

	/*----------------------------------------------------------*/

			// Field 7 - Slider Page Number 3	

			$wp_customize->add_setting(
				'set_slider_page3', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback' 	=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_slider_page3', array(
					'label'			=> 'Set slider page 3',
					'description'	=> 'Set slider page 3',
					'section'		=> 'sec_slider',
					'type'			=> 'dropdown-pages'
				)
			);

			// Field 8 - Slider Burron Text Number 3	

			$wp_customize->add_setting(
				'set_slider_button_text3', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback' 	=> 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_text3', array(
					'label'			=> 'Button Text for page 3',
					'description'	=> 'Button Text for page 3',
					'section'		=> 'sec_slider',
					'type'			=> 'text'
				)
			);

			// Field 9 - Slider Burron URL Number 3	

			$wp_customize->add_setting(
				'set_slider_button_url3', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback' 	=> 'esc_url_raw'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_url3', array(
					'label'			=> 'URL Text for page 3',
					'description'	=> 'URL Text for page 3',
					'section'		=> 'sec_slider',
					'type'			=> 'url'
				)
			);
			

	/*----------------------------------------------------------*/

			// Field 10 - Slider Page Number 4	

			$wp_customize->add_setting(
				'set_slider_page4', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback' 	=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_slider_page4', array(
					'label'			=> 'Set slider page 4',
					'description'	=> 'Set slider page 4',
					'section'		=> 'sec_slider',
					'type'			=> 'dropdown-pages'
				)
			);

			// Field 11 - Slider Burron Text Number 4	

			$wp_customize->add_setting(
				'set_slider_button_text4', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback' 	=> 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_text4', array(
					'label'			=> 'Button Text for page 4',
					'description'	=> 'Button Text for page 4',
					'section'		=> 'sec_slider',
					'type'			=> 'text'
				)
			);

			// Field 12 - Slider Burron URL Number 4	

			$wp_customize->add_setting(
				'set_slider_button_url4', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback' 	=> 'esc_url_raw'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_url4', array(
					'label'			=> 'URL Text for page 4',
					'description'	=> 'URL Text for page 4',
					'section'		=> 'sec_slider',
					'type'			=> 'url'
				)
			);				

	/*--------------------------------------------------------------------------------*/
	// Home Page Settings

	$wp_customize->add_section(
		'sec_home_page', array(
			'title'			=> 'Home Page Products and Blog Settings',
			'description'	=> 'Home Page Section'
		)
	);	

			$wp_customize->add_setting(
				'set_popular_max_num', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_popular_max_num', array(
					'label'			=> 'Popular Products Max Number',
					'description'	=> 'Popular Products Max Number',
					'section'		=> 'sec_home_page',
					'type'			=> 'number'
				)
			);

			$wp_customize->add_setting(
				'set_popular_max_col', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_popular_max_col', array(
					'label'			=> 'Popular Products Max Columns',
					'description'	=> 'Popular Products Max Columns',
					'section'		=> 'sec_home_page',
					'type'			=> 'number'
				)
			);


			$wp_customize->add_setting(
				'set_new_arrivals_max_num', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_new_arrivals_max_num', array(
					'label'			=> 'New Arrivals Max Number',
					'description'	=> 'New Arrivals Max Number',
					'section'		=> 'sec_home_page',
					'type'			=> 'number'
				)
			);

			$wp_customize->add_setting(
				'set_new_arrivals_max_col', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_new_arrivals_max_col', array(
					'label'			=> 'New Arrivals Max Columns',
					'description'	=> 'New Arrivals Max Columns',
					'section'		=> 'sec_home_page',
					'type'			=> 'number'
				)
			);

			// Deal of the Week Checkbox
			$wp_customize->add_setting(
				'set_deal_show', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'jon_lab_sanitize_checkbox'
				)
			);

			$wp_customize->add_control(
				'set_deal_show', array(
					'label'			=> 'Show Deal of the Week?',
					'section'		=> 'sec_home_page',
					'type'			=> 'checkbox'
				)
			);

			// Deal of the Week Product ID
			$wp_customize->add_setting(
				'set_deal', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_deal', array(
					'label'			=> 'Deal of the Week Product ID',
					'description'	=> 'Product ID to Display',
					'section'		=> 'sec_home_page',
					'type'			=> 'number'
				)
			);

}
add_action( 'customize_register', 'jon_lab_customizer' );

function jon_lab_sanitize_checkbox( $checked ){
	return ( ( isset ( $checked ) && true == $checked ) ? true : false );
}