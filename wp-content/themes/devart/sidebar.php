<div id="sidebar">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
	
	<div class="block">
		<h3>Author</h3>
		<img src="<?php bloginfo('stylesheet_directory'); ?>/images/author.gif" alt="Author" style="float: left; margin: 0 10px 0 -3px; padding: 0;" />
		<p>Howdy! I'm Denis and this is my blog.</p>			
	</div>
	
	<div class="block">
		<h3>Categories</h3>
		<ul>
			<?php wp_list_categories('orderby=name&show_count=0&title_li='); ?>
		</ul>
	</div>
	
	<div class="block">
		<h3>Archive</h3>
		<ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>
	</div>
	
	<div class="block">
		<h3>Blogroll</h3>
		<ul>
			<?php wp_list_bookmarks('title_li=&categorize=0'); ?>
		</ul>
	</div>		
	
	<div class="block">
		<h3>Meta</h3>
		<ul>
			<?php wp_register(); ?>
			<li><?php wp_loginout(); ?></li>
			<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
			<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
			<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
			<?php wp_meta(); ?>
		</ul>
	</div>
		
<?php endif; ?>
</div>