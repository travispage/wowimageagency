<?php
wp_nav_menu(array(
	'theme_location' => 'additional_header_menu',
	'depth' => 1,
	'fallback_cb' => 'false',
	'menu_class' => 'dfd-additional-header-menu',
	'walker' => new crum_clean_walker()
));