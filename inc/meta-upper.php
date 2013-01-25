<?php if (!is_page()):?>
	<?php
		if ( ! function_exists( 'foundation_posted_on' ) ) :
			function foundation_posted_on() {
				printf( __( '<span class="sep">Posted on </span><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a><span class="by-author"> <span class="sep"> by </span> <span class="author vcard"><a class="url fn n" href="%5$s" title="%6$s" rel="author">%7$s</a></span></span>', 'foundation' ),
					esc_url( get_permalink() ),
					esc_attr( get_the_time() ),
					esc_attr( get_the_date( 'c' ) ),
					esc_html( get_the_date() ),
					esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
					esc_attr( sprintf( __( 'View all posts by %s', 'foundation' ), get_the_author() ) ),
					get_the_author()
				);
			}
		endif;
	?>
	
	<div class="meta-upper">
		<?php foundation_posted_on(); ?>
		
		<?php if ( comments_open() ) : ?>
			<span class="comments-link">
				<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'foundation' ) . '</span>', __( '1 Reply', 'foundation' ), __( '% Replies', 'foundation' ) ); ?>
			</span>
		<?php endif; // comments_open() ?>
		<hr>
	</div>
<? endif; ?>