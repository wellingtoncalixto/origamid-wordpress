<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title><?php bloginfo('name'); ?> | <?php wp_title('') ?> <?php the_field2('title_seo') ?></title>
		<meta name="description" content="<?php bloginfo('name'); ?> | <?php wp_title(''); ?> - <?php the_field2('description_seo') ?>">

		<link href='https://fonts.googleapis.com/css?family=Alegreya+SC' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">

		<!-- Header Wordpress -->
		<?php wp_head(); ?>
		<!-- Fecha Header Wordpress -->
	</head>

	<body>
		
		<header>
			<nav>
			<?php
					$args = array(
						'menu' => 'principal',
						'container' => false
					);
					wp_nav_menu( $args );
				?>
			</nav>

			<h1><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rest.png" alt="Rest"></h1>
			<?php $contato = get_page_by_title('Contato')->ID; ?>
			<p><?php echo get_post_meta($contato, 'adress_streat', true) . ' ' . get_post_meta($contato, 'adress_number', true) . ' - ' . get_post_meta($contato, 'adress_neighborhood', true) . ' - ' . get_post_meta($contato, 'adress_state', true)  ?></p>
		</header>