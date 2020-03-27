<?php

class MYEX_MarketingButton extends ET_Builder_Module {

	public $slug       = 'myex_marketing_button';
	public $vb_support = 'on';

	protected $module_credits = array(
		'module_uri' => '',
		'author'     => '',
		'author_uri' => '',
	);

	public function init() {
		$this->name = esc_html__( 'Marketing Button', 'myex-my-extension' );
	}

	public function get_fields() {
		return array(
			'title' => array(
				'label'           => esc_html__( 'Title', 'myex-my-extension' ),
				'type'            => 'text',
				'toggle_slug'     => 'main_content',
			),
			'content' => array(
				'label'           => esc_html__( 'Content', 'myex-my-extension' ),
				'type'            => 'tiny_mce',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Content entered here will appear inside the module.', 'myex-my-extension' ),
				'toggle_slug'     => 'main_content',
			),
		);
	}

	public function render( $attrs, $content = null, $render_slug ) {
		return sprintf( '<div class="uad-marketing-button"><div class="uad-mbutton-title"><h1>%1$s</h1></div><div class="uad-mbutton-content">%2$s</div></div>', $this->props['title'], $this->props['content'] );
	}
}

new MYEX_MarketingButton;
