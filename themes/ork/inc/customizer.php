<?php 

/**
 * ork functions and definitions
 *
 * @package ork
 */

function ork_customizer( $wp_customize ){

	// Copyright Section

	$wp_customize->add_section(
		'sec_copyright', array(
			'title'			=> __('Configurações de Copyright', 'ork' ),
			'description'	=> __('Seção de Copyright', 'ork' ),
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
					'label'			=> __('Copyright', 'ork' ),
					'description'	=> __('Informe suas informações de copyrights aqui', 'ork' ),
					'section'		=> 'sec_copyright',
					'type'			=> 'text'
				)
			);

	// Custom Section Home Page Title

	$wp_customize->add_section(
		'sec_home_title_sections', array(
			'title'			=> __('Titulos na Página Principal', 'ork' ),
			'description'	=> __('Escolha os título das seções em sua pagina principal', 'ork' ),
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
					'label'			=> __('Título da seção 1', 'ork' ),
					'description'	=> __('Adicione o título da seção 1 aqui', 'ork' ),
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
					'label'			=> __('Título da seção 2', 'ork' ),
					'description'	=> __('Adicione o título da seção 2 aqui', 'ork' ),
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
					'label'			=> __('Título da seção 3', 'ork' ),
					'description'	=> __('Adicione o título da seção 3 aqui', 'ork' ),
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
					'label'			=> __('Título do Blog', 'ork' ),
					'description'	=> __('Adicione um título para seu blog aqui', 'ork' ),
					'section'		=> 'sec_home_title_sections',
					'type'			=> 'text'
				)
			);

	/*----------------------------------------------------------*/
	//Slider SecTion

	$wp_customize->add_section(
		'sec_slider', array(
			'title'			=> __('Configurações do Slider','ork' ),
			'description'	=> __('As imagens que serão mostradas no slider são de acordo com as páginas escolhidas', 'ork' ),
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
					'label'			=> __('Página do slide 1', 'ork' ),
					'description'	=> __('Escolha uma página para o slide', 'ork' ),
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
					'label'			=> __('Texto do botão slide 1', 'ork' ),
					'description'	=> __('Escolha um texto para o botão', 'ork' ),
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
					'label'			=> __('Endereço URL slide 1', 'ork' ),
					'description'	=> __('Defina o endereço de uma página para o slide 1', 'ork' ),
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
					'label'			=> __('Página do slide 2', 'ork' ),
					'description'	=> __('Escolha uma página para o slide', 'ork' ),
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
					'label'			=> __('Texto do botão slide 2', 'ork' ),
					'description'	=> __('Escolha um texto para o botão', 'ork' ),
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
					'label'			=> __('Endereço URL slide 2','ork' ),
					'description'	=> __('Defina o endereço de uma página para o slide 2', 'ork' ),
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
					'label'			=> __('Página do slide 3', 'ork' ),
					'description'	=> __('Escolha uma página para o slide', 'ork' ),
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
					'label'			=> __('Texto do botão slide 3', 'ork' ),
					'description'	=> __('Escolha um texto para o botão', 'ork' ),
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
					'label'			=> __('Endereço URL slide 3', 'ork' ),
					'description'	=> __('Defina o endereço de uma página para o slide 3', 'ork' ),
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
					'label'			=> __('Página do slide 4', 'ork' ),
					'description'	=> __('Escolha uma página para o slide', 'ork' ),
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
					'label'			=> __('Texto do botão slide 4', 'ork' ),
					'description'	=> __('Escolha um texto para o botão', 'ork' ),
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
					'label'			=> __('Endereço URL slide 4', 'ork' ),
					'description'	=> __('Defina o endereço de uma página para o slide 4', 'ork' ),
					'section'		=> 'sec_slider',
					'type'			=> 'url'
				)
			);				

	/*--------------------------------------------------------------------------------*/
	// Home Page Settings

	$wp_customize->add_section(
		'sec_home_page', array(
			'title'			=> __('Produtos e Blog Página Principal', 'ork' ),
			'description'	=> __('Configurações para produtos e de blog da página principal', 'ork' ),
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
					'label'			=> __('Máximo de Produtos Populares', 'ork' ),
					'description'	=> __('Escolha o número de produtos por linha que serão exibidos na seção Produtos Populares', 'ork' ),
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
					'label'			=> __('Número Colunas para Produtos Populares', 'ork' ),
					'description'	=> __('Escolha o número de colunas que serão exibidos na seção Produtos Populares', 'ork' ),
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
					'label'			=> __('Máximo de Novos Produtos', 'ork' ),
					'description'	=> __('Escolha o número de produtos por linha que serão exibidos na seção Novos Produtos', 'ork' ),
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
					'label'			=> __('Número Colunas para Novos Produtos', 'ork' ),
					'description'	=> __('Escolha o número de colunas que serão exibidos na seção Novos Produtos', 'ork' ),
					'section'		=> 'sec_home_page',
					'type'			=> 'number'
				)
			);

			// Deal of the Week Checkbox
			$wp_customize->add_setting(
				'set_deal_show', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'ork_sanitize_checkbox'
				)
			);

			$wp_customize->add_control(
				'set_deal_show', array(
					'label'			=> __('Mostrar Oferta da Semana?', 'ork' ),
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
					'label'			=> __('ID do produto Oferta da Semana', 'ork' ),
					'description'	=> __('Escolha o ID do produto a ser exibido na seção Oferta da Semana', 'ork' ),
					'section'		=> 'sec_home_page',
					'type'			=> 'number'
				)
			);

}
add_action( 'customize_register', 'ork_customizer' );

function ork_sanitize_checkbox( $checked ){
	return ( ( isset ( $checked ) && true == $checked ) ? true : false );
}