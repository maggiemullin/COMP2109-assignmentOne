<?php
/**
 * The header 
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- my custom style -->
		<link rel="stylesheet" type="text/css" href="<?php echo esc_url(home_url('wp-content/themes/assignmentOne/assets/css/custom-style.css')); ?>" />
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;700&display=swap" rel="stylesheet">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<header>
		<article>
			<a href="<?php echo esc_url(home_url()); ?>">
				<img src="<?php echo esc_url(home_url('wp-content/uploads/2021/01/logo1.png')); ?>" alt="logo">
		</article>
		<nav>
			<?php
				wp_nav_menu(array(
					'menu' => 'main1',
					'theme_location' => '',
					'depth' => 2,
					'fallback_cd' => false
				));
			?>
		</nav>
	</header>