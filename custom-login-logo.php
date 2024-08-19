<?php
/**
 * Replace the default WordPress login page logo with your own
 */
function custom_login_logo() {
	?>
	<style type="text/css">
		#login h1 a, .login h1 a {
			background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/custom-logo.png);
			height: 65px;
			width: 320px;
			background-size: 320px 65px;
			background-repeat: no-repeat;
			padding-bottom: 30px;
		}
	</style>
	<?php
}
add_action('login_enqueue_scripts', 'custom_login_logo');