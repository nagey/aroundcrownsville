<?php
/*
Template Name: Links
*/
?>
<?php get_header(); ?>
<div class="post">
	<?php wp_list_bookmarks('between=<br />&title_li=&category_before=&category_before=&title_before=<h2 class="pagetitle">&show_description=1'); ?>
</div>
<?php get_footer(); ?>
