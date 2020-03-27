<?php

class MYEX_MarketingButton extends ET_Builder_Module {

	public $slug       = 'myex_marketing_button';
	public $vb_support = 'on';

	public function init() {
		$this->name = esc_html__( 'Marketing Button', 'myex-my-extension' );

		$this->custom_css_fields = array(
			'main_element' => array(
				'label'    => esc_html__( 'Main Element', 'myex-my-extension' ),
				'no_space_before_selector' => true,
			),
		);

		$this->settings_modal_toggles = array(
			'general'  => array(
				'toggles' => array(
					'main_constent' => esc_html__( 'Text', 'myex-my-extension' ),
					'link'         => esc_html__( 'Link', 'myex-my-extension' ),
				),
			),
			'advanced' => array(
				'toggles' => array(
					'alignment'  => esc_html__( 'Alignment', 'myex-my-extension' ),
					'text'       => array(
						'title'    => esc_html__( 'Text', 'myex-my-extension' ),
						'priority' => 49,
					),
				),
			),
		);

		$this->advanced_fields = array(
			'borders'               => array(
				'default' => false,
			),
			'button'                => array(
				'button' => array(
					'label' => esc_html__( 'Button', 'myex-my-extension' ),
					'css' => array(
						'main' => $this->main_css_element,
						'limited_main' => "{$this->main_css_element}.et_pb_button",
					),
					'box_shadow'     => false,
					'margin_padding' => false,
				),
			),
			'margin_padding' => array(
				'css' => array(
					'padding' => "{$this->main_css_element}_wrapper {$this->main_css_element}, {$this->main_css_element}_wrapper {$this->main_css_element}:hover",
					'margin' => "{$this->main_css_element}_wrapper",
					'important' => 'all',
				),
			),
			'text'                  => array(
				'use_text_orientation' => false,
				'use_background_layout' => true,
				'options' => array(
					'background_layout' => array(
						'default_on_front' => 'light',
						'hover' => 'tabs',
					),
				),
			),
			'text_shadow'           => array(
				// Text Shadow settings are already included on button's advanced style
				'default' => false,
			),
			'background'            => false,
			'fonts'                 => false,
			'max_width'             => false,
			'height'                => false,
			'link_options'          => false,
			'position_fields'       => array(
				'css' => array(
					'main'=> "{$this->main_css_element}_wrapper",
				),
			),
			'transform'             => array(
				'css' => array(
					'main' => "{$this->main_css_element}_wrapper",
				),
			),
		);
	}

	public function get_fields() {
		return array(
			'heading' => array(
				'label'           => esc_html__( 'Heading', 'myex-my-extension' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Input your desired heading here.', 'myex-my-extension' ),
				'toggle_slug'     => 'main_content',
			),
			'content' => array(
				'label'           => esc_html__( 'Content', 'myex-my-extension' ),
				'type'            => 'tiny_mce',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Content entered here will appear below the heading text.', 'myex-my-extension' ),
				'toggle_slug'     => 'main_content',
				'show_if'		  => array(
					'heading' 		=> 'sushma',
				)
			),
			'heading_text_color' => array(
				'label'             => esc_html__( 'Heading Text Color', 'myex-my-extension' ),
				'description'       => esc_html__( 'You can pick unique text colors for Heading. Choose the open state title color here.', 'uad-my-extension' ),
				'type'              => 'color-alpha',
				'custom_color'      => true,
				'tab_slug'          => 'advanced',
				'toggle_slug'       => 'toggle',
				'hover'             => 'tabs',
				'mobile_options'    => true,
			),
		);
	}

	public function render( $attrs, $content = null, $render_slug ) {
		return sprintf( '<div class="uad-marketing-button">
		<div class="uad-mbutton-title"><h1>%1$s</h1></div>
		<div class="uad-mbutton-content">%2$s</div>
		</div>', esc_html( $this->props['heading'] ), $this->props['content'] );
	}
}

new MYEX_MarketingButton;
