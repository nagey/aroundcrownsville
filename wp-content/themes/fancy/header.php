<?php
	global $options;
	foreach ($options as $value) {
	    if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); } }

	/* default values */

	if ($fancy_main_color == '#FE0059') {
		$bubbles = 'bubbles.gif';
		$feed_image = 'feed.gif';
		$scissors = 'scissors.gif';
		$sep = 'sep-red.gif';
	}
	elseif ($fancy_main_color == '#FEB400')	{
		$bubbles = 'bubbles-yellow.gif';
		$feed_image = 'feed-yellow.gif';
		$scissors = 'scissors-yellow.gif';
		$sep = 'sep-yellow.gif';
	}
	else {
		$bubbles = 'bubbles-green.gif';
		$feed_image = 'feed-green.gif';
		$scissors = 'scissors-green.gif';
		$sep = 'sep-green.gif';
	}
?>
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
	
	<? include(TEMPLATEPATH."/custom.php"); ?>
	
	<?php wp_head(); ?>
</head>
