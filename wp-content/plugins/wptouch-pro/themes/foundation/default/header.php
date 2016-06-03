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

<meta name="google-site-verification" content="_PP0P10wBBVc2gJjQZ_djnqFlvh2nZW7tiyE5HvwHXw" />
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-71011506-1', 'auto');
  ga('send', 'pageview');

</script>
	</head>

	<body <?php body_class( wptouch_get_body_classes() ); ?>>

		<?php do_action( 'wptouch_body_top' ); ?>

		<?php get_template_part( 'header-bottom' ); ?>

		<?php do_action( 'wptouch_body_top_second' ); ?>