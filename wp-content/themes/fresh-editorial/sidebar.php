<div id="contentright">
	<div id="sidebar">
		<div id="rss" onclick="location.href='<?php bloginfo('rss2_url'); ?>';" style="cursor:pointer;">
			<img src="<?php bloginfo('template_directory'); ?>/images/rss.gif" title="RSS Feed" alt="RSS Feed" />
		</div>
		<div id="introductionwrap">
			<div id="introduction">
				<h3>ABOUT</h3>
				<p>
					<?php bloginfo('description'); ?>
				</p>
			</div>
		</div>
		<div id="searchformsidebar">
			<?php include (TEMPLATEPATH . '/searchform.php'); ?>
		</div>
		<div id="recentpostswrap">
			<div id="recentposts">
				<h3>RECENT POSTS</h3>
				<?php query_posts('showposts=5'); ?>
					<?php while (have_posts()) : the_post(); ?>
						<div class="recentpostswrap">
							<div class="recentpostsdate">
								<?php the_time('dS F Y') ?>
							</div>
							<div class="recentpoststitle">
								<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanent link to'); ?> <?php the_title(); ?>"><?php the_title(); ?></a>
							</div>
						</div>
				<?php endwhile;?>
			</div>
		</div>
		<div id="calendarwrap">
			<div id="calendar">
				<?php get_calendar(true); ?>
			</div>
		</div>
		<div id="widgets">
		<?php 	/* Widgetized sidebar, if you have the plugin installed. */
				if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
		<?php endif; ?>
		</div>
	</div>
</div>
