<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!--[if lt IE 7.]>
<script defer type="text/javascript" src="<?php bloginfo('template_directory'); ?>/includes/js/pngfix.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body>

	<div id="wrapper">
		<div id="headertag">
			<div id="toptag">

			</div>
		</div>
		<div id="header">
			<div id="topheader">
				<div id="mainnavigationleft">
				</div>
				<div id="mainnavigation">
					<ul>

						<li><a href="<?php echo get_option('home'); ?>/">Home</a></li>
						<?php wp_list_pages('title_li=' ); ?>

					</ul>
				</div>
				<div id="mainnavigationright">
				</div>
			</div>
			<div id="logo">
				<div id="title">
					<?
						if (is_home())
						{
					?>
 						<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
 					<?
 						} else {
 					?>
						<h2><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h2>
					<?
						}
					?>
				</div>
			</div>
			<div id="navigation">
				<ul>
					<?php wp_list_categories('title_li='); ?>
					<li><!-- always leave empty --></li>
				</ul>
			</div>
		</div>
