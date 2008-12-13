					<div class="span-24 menu">
						<ul>
							<li class="<?php if ( is_home() ) { ?>current_page_item<?php } ?>"><a href="<?php echo get_option('home'); ?>/" title="">Home</a></li>
							<?php wp_list_pages('sort_column=menu_order&depth=1&title_li=');?>
							<li class="feed"><a href="<?php bloginfo('rss2_url'); ?>" title=""><img src="<?php bloginfo('stylesheet_directory'); ?>/img/<?php echo $feed_image; ?>" alt="Feed icon" /></a></li>
						</ul>
					</div>
