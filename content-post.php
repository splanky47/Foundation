<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<hgroup>
				<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'crunchy' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				
			</hgroup>
			
			
		</header>
		
		<div class="entry">
			<?php the_content(); ?>
		</div>

</article>

<section id="comments">
	<?php comments_template( '', true ); ?>
</section>