	<div id="sidebar">
	
	<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar() ) : ?>
		
		


	<h3><?php _e('Main Menu'); ?></h3>

<ul>

<?php wp_list_pages('title_li='); ?>
</ul>





			<h3>Categories</h3>
			<ul>
				<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
			<div class="bottom"></div>
				</ul>

			<h3>Archives</h3>
			
			<ul>
				<?php wp_get_archives('type=monthly'); ?>
			<div class="bottom"></div>
				</ul>
		        <h3>Recommended</h3>
			<ul>
			<?php wp_get_links('category=2&before=<li>&between=&after=</li>') ; ?>
			<div class="bottom"></div>
			</ul>	
			
			<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>
			
			<h3>Meta</h3>
			<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
					<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
					<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
					<?php wp_meta(); ?>
			<div class="bottom"></div>
				</ul>

		        <h3>Syndication</h3>
                        <ul>
				<li><a href="<?php bloginfo('rss2_url'); ?>" >Entries RSS</a></li>
				<li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments RSS</a></li>
			<div class="bottom"></div>
			</ul>



			
			<?php } ?>
<?php endif; ?>
	</div>

