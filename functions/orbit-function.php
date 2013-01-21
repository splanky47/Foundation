<?php
	
	// Orbit, for WordPress

	add_action('init', 'Orbit');
	
	function Orbit(){
		$Orbit_args = array(
			'label'	=> __('Orbit'),
			'singular_label' =>	__('Orbit'),
			'public'	=>	true,
			'show_ui'	=>	true,
			'capability_type'	=>	'post',
			'hierarchical'	=>	false,
			'rewrite'	=>	true,
			'supports'	=>	array('title', 'editor','page-attributes','thumbnail')
			);
			register_post_type('Orbit', $Orbit_args);
	}
	
	function SliderContent(){
	
		$args = array( 'post_type' => 'Orbit');
		$loop = new WP_Query( $args );
		
			while ( $loop->have_posts() ) : $loop->the_post();
			
				if(has_post_thumbnail()) {
				
					the_post_thumbnail();
					
				} else {
				
					echo '<div class="content" style="background:#FFF;">';
				
						the_title();
						the_content();
						
					echo '</div>';
				
				}
			
			endwhile;
			
	}

	
?>