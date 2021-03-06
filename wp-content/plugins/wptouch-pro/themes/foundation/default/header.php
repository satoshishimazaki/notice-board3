<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php wp_title( ' | ', true, 'right' ); ?></title>
		<?php wptouch_head(); ?>
		<?php
			if ( !is_single() && !is_archive() && !is_page() && !is_search() ) {
				wptouch_canonical_link();
			}

			if ( isset( $_REQUEST[ 'wptouch_preview_theme' ] ) || isset( $_REQUEST[ 'wptouch_switch' ] ) )  {
				echo '<meta name="robots" content="noindex" />';
			}
		?>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


	</head>

	<body <?php body_class( wptouch_get_body_classes() ); ?>>

		<?php do_action( 'wptouch_body_top' ); ?>

		<?php get_template_part( 'header-bottom' ); ?>

		<?php do_action( 'wptouch_body_top_second' ); ?>