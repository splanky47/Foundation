<div class="container" id="footer-wrap">
	<!-- Main Row -->
	
	<!-- Footer -->
	<footer class="row">
	
		<div class="twelve columns"><hr></div>
	
			<div class="row">
			
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Sidebar')) : ?>
					<h4>Hey! You!</h4>
					<p>You should like, so test out this dynamic footer sidebar. Check it out in Appearance > Widgets!</p>
					<?php endif; ?>
				
			</div>
	
	</footer>
	<!-- Footer -->

</div>
	<!-- container -->

	<!-- Included JS Files -->	
	<script src="http://cdnjs.cloudflare.com/ajax/libs/foundation/3.2.2/javascripts/foundation.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/javascripts/app.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/javascripts/main.js"></script>

	<?php wp_footer(); ?>
	
</body>
</html>