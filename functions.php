<?php

	// Disable WordPress version reporting as a basic protection against attacks
	function remove_generators() {
		return '';
	}		
	
	add_filter('the_generator','remove_generators');
	
	show_admin_bar(FALSE);
	
	add_theme_support( 'automatic-feed-links' );
	
	include('functions/navigation.php');
	include('functions/pagination.php');
	include('functions/sidebar.php');
	include('functions/comment-function.php');
	include('functions/thumbnail.php');
	include('functions/orbit-function.php');
	include('functions/post-edit.php');

?>