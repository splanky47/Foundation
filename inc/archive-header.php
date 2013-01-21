<h1 class="archive-title">
	<?php if ( is_category() ) : ?>
		<?php printf( single_cat_title( '', false )); ?>
	<?php elseif ( is_tag() ): ?>
		<?php printf( single_tag_title( '', false )); ?>
	<?php elseif ( is_search() ) : ?>
		<?php printf( __( 'Search Results for: %s', 'crunchy' ), '<span>' . get_search_query() . '</span>' ); ?>
	<?php elseif ( is_day() ) : ?>
		<?php printf( __( 'Daily Archives: <span>%s</span>', 'crunchy' ), get_the_date() ); ?>
	<?php elseif ( is_month() ) : ?>
		<?php printf( __( 'Monthly Archives: <span>%s</span>', 'crunchy' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'crunchy' ) ) ); ?>
	<?php elseif ( is_year() ) : ?>
		<?php printf( __( 'Yearly Archives: <span>%s</span>', 'crunchy' ), get_the_date( _x( 'Y', 'yearly archives date format', 'crunchy' ) ) ); ?>
	<?php else : ?>
		<?php _e( 'Archives', 'crunchy' ); ?>
	<?php endif; ?>
</h1>