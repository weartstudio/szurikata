<?php

// timber specific functions

class TimberSpec extends Timber\Site {

	public function __construct() {
		add_filter( 'timber/context', array( $this, 'addToContext' ) );
		parent::__construct();
	}

	public function addToContext( $context ) {

		// menu-object from registered menu
		$context['menuPrimary']  = new Timber\Menu('primary');
		$context['menuSecondary']  = new Timber\Menu('secondary');
		$context['menuFooter']  = new Timber\Menu('footer');

		// acf options page datas
		$context['options'] = get_fields('option');

		// site stuff
		$context['site']  = $this;

		return $context;
	}

}
new TimberSpec();