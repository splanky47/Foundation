<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	
	<meta name="viewport" content="width=device-width" />
	
	<title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
  
	<!-- Included CSS Files -->
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/foundation/3.2.2/stylesheets/foundation.min.css">
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
	
	<script src="<?php bloginfo('template_url'); ?>/javascripts/modernizr.foundation.js"></script>
	
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<!-- Begin Container -->
	<div class="container" id="header-wrap">
		
		<!-- Header Row -->
		<div class="row">
			
				<!-- Header Column -->
				<div class="twelve columns" id="access" role="navigation">
					
				
					<!-- Site Description & Title -->
					<hgroup id="header">
						<h1><a href="<?php echo site_url(); ?>"><?php bloginfo('title'); ?></a></h1>
						<h4 class="subheader"><?php bloginfo('description'); ?></h4>
					</hgroup>

					<!-- Navigation --> 					
 				    <?php foundation_nav_bar(); ?>
				
				</div>
				<!-- Header Column -->
				
		</div>
		<!-- Header Row -->
		
	</div>
		
		
				