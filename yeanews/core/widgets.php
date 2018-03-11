<?php

/**
 * Register widgets
 *
 * Callback function which includes widget classes and initialize theme specific widgets
 *
 * @since  1.0
 */
register_sidebar( array(
        'name' => __( 'Комменты', '' ),
        'id' => 'vk_comm',
        'description' => __( 'Комменты', '' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );
add_action( 'widgets_init', 'gridlove_register_widgets' );

if ( !function_exists( 'gridlove_register_widgets' ) ) :
	function gridlove_register_widgets() {
		
		include_once get_template_directory() .'/core/widgets/posts.php';
		include_once get_template_directory() .'/core/widgets/adsense.php';
		include_once get_template_directory() .'/core/widgets/categories.php';
		
		register_widget( 'GRIDLOVE_Posts_Widget' );
		register_widget( 'GRIDLOVE_Adsense_Widget' );
		register_widget( 'GRIDLOVE_Category_Widget' );

	}
endif;


?>