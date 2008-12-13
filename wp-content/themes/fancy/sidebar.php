					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : ?>
		
					<!--sidebox start -->
					<div class="widget_archive">
						<h3 class="block title-1"><?php _e('Archives'); ?></h3>
						<div class="paddings">
							<ul class="list-2 block">
								<?php wp_get_archives('type=monthly'); ?>
							</ul>
						</div>
					</div>
					<!--sidebox end -->
					
			        <!--sidebox start -->
			        <div class="widget_links">
			            <h3 class="block title-1"><?php _e('Links'); ?></h3>
			        	<div class="paddings">
				            <ul>
				                <?php get_links('-1', '<li>', '</li>', '<br />', FALSE, 'id', FALSE, FALSE, -1, FALSE); ?>
				            </ul>
			            </div>
			        </div>
			        <!--sidebox end -->

			        <!--sidebox start -->
			        <div class="widget_categories">
			            <h3 class="block title-1"><?php _e('Categories'); ?></h3>
			        	<div class="paddings">
				            <ul>
				                <?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
				            </ul>
			            </div>
			        </div>
			        <!--sidebox end -->
					
					<?php endif; ?>

					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : ?>
					
					<!--sidebox start -->
					<!-- <div class="widget_meta green">
						<h3 class="block title-1">Meta</h3>
						<div class="paddings">
							<ul>
				                <li class="rss"><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a></li>
				                <li class="rss"><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a></li>
				                <li class="wordpress"><a href="http://www.wordpress.org" title="Powered by WordPress">WordPress</a></li>
				                <li class="login"><?php wp_loginout(); ?></li>
							</ul>
						</div>
					</div> -->
					<!--sidebox end -->
					
					<!--sidebox start -->
					<!-- <div class="widget_calendar green">
						<h3 class="block title-1">Calendar</h3>
						<div class="paddings">
							<div id="calendar_wrap"><?php get_calendar(); ?></div>
						</div>
					</div> -->
					<!--sidebox end -->
					<?php endif; ?>


					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(3) ) : ?>

			        <!--sidebox start -->
					<!-- <div class="widget_recent_entries pink">
						<h3 class="block title-1"><?php _e('Recent Articles'); ?></h3>
						<div class="paddings">
							<ul>
								<?php $side_posts = get_posts('numberposts=10'); foreach($side_posts as $post) : ?>
								<li><a href= "<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
								<?php endforeach; ?>
							</ul>
						</div>
					</div> -->
			        <!--sidebox end -->
			        
					<?php endif; ?>

	




