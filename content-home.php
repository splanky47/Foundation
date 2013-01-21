<article id="post-<?php the_ID(); ?>" <?php post_class('block width1'); ?>>
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'crunchy' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				
		<?php the_excerpt();?>
		

</article><!-- #post -->