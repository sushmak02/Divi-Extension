<?php

class MYEX_MarketingButton extends ET_Builder_Module {

	public $slug       = 'myex_marketing_button';
	public $vb_support = 'on';

	public function init() {
		$this->name = esc_html__( 'Marketing Button', 'myex-my-extension' );
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
