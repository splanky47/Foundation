<?php get_header(); ?>

<div class="container" id="content-wrap">
	<div class="row">	
			
			
			<section id="content" class="eight columns">
				<?php if ( have_posts() ) : ?>
	
					<?php if ( is_archive()) { include 'inc/archive-header.php';	} ?>
	
					<?php while ( have_posts() ) : the_post(); ?>
						<?php 
							if ( is_single() || is_page() ) {
								get_template_part( 'content', 'post' );
							}
													
							elseif ( is_archive() || is_search() || is_home() ) {
								get_template_part( 'content', 'archive' );
							}
							
							else {
								 get_template_part( 'content', get_post_format() );
							}
						?>
						
					<?php endwhile; ?>
					
					<?php if ( !is_page() && !is_single()) : ?>
						<div id="pagination" class="clearfix">
							<?php emm_paginate(); ?>
						</div>
					<?php endif; ?>
					
				<?php else : ?>
	
					<?php get_template_part( 'content', '404' ); ?>
	
				<?php endif; ?>
			
			
		</section><!-- #content -->
		
		
		<?php include 'sidebar.php'; ?>
			
		
	</div>
</div>

<?php get_footer(); ?>
