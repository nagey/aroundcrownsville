<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


<?php wp_head(); ?>


<!--[if IE 6]>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/ie60.css" type="text/css" media="screen" />
    <![endif]-->

</head>

<body>
<div id="mainwrap">
<div id="header-container">

	<div id="header">  <!-- Header -->
		<div id="cup"></div>
		<div id="logo">
			<h2><?php bloginfo('name'); ?></h2>
			<p><?php bloginfo('description'); ?></p>
		</div>
		<div id="headerright"></div>

<ul id="menu">
  <li><a href="<?php echo get_option('home'); ?>/" class="active">Home</a></li>
  <?php wp_list_pages('title_li='); ?>
</ul>



	</div> <!-- END Header -->
	</div>