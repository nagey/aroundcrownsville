		<?php if ( is_404() || is_category() || is_day() || is_month() ||
					is_year() || is_search() || is_paged() ) {
		?> <li>

		<?php /* If this is a 404 page */ if (is_404()) { ?>
		<?php /* If this is a category archive */ } elseif (is_category()) { ?>
		<p>You are currently browsing the archives for the <?php single_cat_title(''); ?> category.</p>

		<?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
		<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
		for the day <?php the_time('l, F jS, Y'); ?>.</p>

		<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
		for <?php the_time('F, Y'); ?>.</p>

		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
		for the year <?php the_time('Y'); ?>.</p>

		<?php /* If this is a monthly archive */ } elseif (is_search()) { ?>
		<p>You have searched the <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
		for <strong>'<?php the_search_query(); ?>'</strong>. If you are unable to find anything in these search results, you can try one of these links.</p>

		<?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<p>You are currently browsing the <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives.</p>

		<?php } ?>

		</li> <?php }?>

		<div id="footercontent">
			<div id="footerheader">
			</div>
			<div id="footerbg">
				<div class="footercolumn">
					<div id="blogroll">
						<h3>BLOGROLL</h3>
						<ul>
							<?php wp_list_bookmarks('title_li=&categorize=0'); ?>
						</ul>
					</div>
				</div>
				<div class="footercolumn">
					<div id="meta">
						<h3>META</h3>
						<ul>
							<?php wp_register(); ?>
							<li><?php wp_loginout(); ?></li>
							<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
							<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
							<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
							<?php wp_meta(); ?>
						</ul>
					</div>
				</div>
				<div class="footercolumn">
					<div id="archive">
						<h3>ARCHIVE</h3>
						<ul>
							<?php wp_get_archives('type=monthly'); ?>
						</ul>
					</div>
				</div>
				<div class="footercolumn">

				</div>
			</div>
		</div>
	</div>


	<div id="footer">
		<div id="footerbottomcontent">
			<p>
				<?php bloginfo('name'); ?> is proudly powered by
				<a href="http://wordpress.org/">WordPress</a>
				<br />
				<a title="web designer" href="http://www.brightcherry.co.uk">Web design</a> by Bright<b class="pink">Cherry</b>.
			</p>
		</div>
	</div>





</body>
</html>