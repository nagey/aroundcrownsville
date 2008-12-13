<style type="text/css">
	div.main {
		background: <?php echo $fancy_main_color; ?> url(<?php bloginfo('stylesheet_directory'); ?>/img/bg/<?php echo $fancy_background; ?>) repeat scroll 0 0;
	}
	.header .name, .header .name a {
		color: <?php echo $fancy_main_color; ?>;
		margin-bottom: 0 !important;
	}
	.menu ul {
		border-top: solid 3px <?php echo $fancy_main_color; ?>;
	}
	.menu .current_page_item, .menu li a:hover {
		background: <?php echo $fancy_main_color; ?>;
	}
	div.banner {
		border-bottom: 3px solid <?php echo $fancy_main_color; ?>;
	}
	.post blockquote p {
		border: 1px dashed <?php echo $fancy_main_color; ?>;
	}
	.post p, .post a, .post li {
		font-size: <?php echo $fancy_font_size; ?>;
	}
	.post a:hover {
		background-color: <?php echo $fancy_second_color; ?>;
	}
	.post .title a {
		background-color: <?php echo $fancy_main_color; ?>;
	}
	.post h2 a:hover {
		background-color: <?php echo $fancy_second_color; ?>;
	}
	.post span.no {
		background-color: <?php echo $fancy_main_color; ?>;
	}
	.hr {
		background: url(<?php bloginfo('stylesheet_directory'); ?>/img/<?php echo $sep; ?>) repeat-x 0 9px;
		!background: url(<?php bloginfo('stylesheet_directory'); ?>/img/<?php echo $sep; ?>) repeat-x 0 4px;
	}
	.sidebar div a:hover {
		background-color: <?php echo $fancy_second_color; ?>;
	}
	.sidebar div.pink a:hover {
		background-color: <?php echo $fancy_second_color; ?>;
	}
	div.footer {
		border-top: 3px solid <?php echo $fancy_main_color; ?>;
		font-size: <?php echo $fancy_font_size; ?> !important;
	}
</style>