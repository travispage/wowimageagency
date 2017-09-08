<?php
global $dfd_ronneby;
$menu_class = '';
if(isset($dfd_ronneby['enable_menu_titles_delimiter']) && strcmp($dfd_ronneby['enable_menu_titles_delimiter'], 'off') === 0) {
	$menu_class .= 'dfd-disable-menu-delimiters';
}
if(isset($dfd_ronneby['enable_menu_line_animated']) && strcmp($dfd_ronneby['enable_menu_line_animated'], 'off') === 0) {
	$menu_class .= ' dfd-disable-menu-line-animated';
}
?>
<nav class="mega-menu clearfix text-right <?php echo esc_attr($menu_class) ?>" id="top_left_mega_menu">
	<?php
		wp_nav_menu(array(
			'theme_location' => 'top_left_navigation', 
			'menu_class' => 'nav-menu menu-top-left-navigation menu-clonable-for-mobiles dfd-header-responsive-hide', 
			'fallback_cb' => 'top_menu_fallback'
		));
	?>
	<i class="carousel-nav prev dfd-icon-left_2"></i>
	<i class="carousel-nav next dfd-icon-right_2"></i>
</nav>
