<?php
/*
 * Register widgetised sidebars 
 * (Charley Ramm Jan 2013)
 * 
 */
add_action( 'widgets_init', 'my_register_sidebars' );

function my_register_sidebars() {

	/* Register the 'primary' sidebar. */
	register_sidebar(
		array(
			'id' => 'left',
			'name' => __( 'Left' ),
			'description' => __( 'Left hand sidebar.' ),
			'before_widget' => '<p id="%1$s" class="widget %2$s">',
			'after_widget' => '</p>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);	
	/* Register the 'secondary' sidebar. */
	register_sidebar(
		array(
			'id' => 'right',
			'name' => __( 'Right' ),
			'description' => __( 'Right hand sidebar.' ),
			'before_widget' => '<p id="%1$s" class="widget %2$s">',
			'after_widget' => '</p>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);

	/* Repeat register_sidebar() code for additional sidebars. */
}

?>