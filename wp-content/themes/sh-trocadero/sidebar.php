<div id="sidebar">
	<div class="inner">
		<ul>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
				<li>
					<?php include (TEMPLATEPATH . '/searchform.php'); ?>
				</li>
				<?php wp_list_pages("title_li=<h2>" . __('Pages') . "</h2>" ); ?>
				<li><h2><?php _e('Archives'); ?></h2>
					<ul>
					<?php wp_get_archives('type=monthly'); ?>
					</ul>
				</li>
				<?php wp_list_categories("depth=-1&title_li=<h2>" . __('Categories') . "</h2>"); ?>
			<?php endif; ?>
		</ul>
	</div>
</div>
