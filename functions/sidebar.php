<?php

	if (function_exists('register_sidebar')) {
	
		// Right Sidebar
	
		register_sidebar(array(
			'name'=> 'Right Sidebar',
			'id' => 'right_sidebar',
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget' => '</li>',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		));
		
		// Footer Sidebar
		
		register_sidebar(array(
			'name'=> 'Footer Sidebar',
			'id' => 'footer_sidebar',
			'before_widget' => '<div id="%1$s" class="four columns %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		));
	}

?>
