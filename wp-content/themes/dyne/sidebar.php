<div id="sidebar">
<div id="sidebar-top"></div>

<div id="sidebar-content">

			<div id="subcolumn">
				<div id="search">
					 <form id="searchform" method="get" action="<?php bloginfo('home'); ?>/">
						<div>
							<input type="text" name="s" id="s" value="" size="35" class="form-input" />
							<input name="search" type="submit" value="Search" class="search-submit" />
						</div>
					</form>	
      	</div>

	<?php if (function_exists('dynamic_sidebar')  && 0 && dynamic_sidebar(1) ) : else : ?>		
		
		<div class="widget">			
				<h2 class="hl">Calendar</h2>
				<div align="center">
					<?php get_calendar(1); ?> 
				</div>
		</div>
		
			<div class="widget">			
				<h2 class="hl">Blogroll</h2>
				<ul>
					<?php get_links(-1, '<li>', '</li>', ' - '); ?>
				</ul>
		</div>
		
		<div class="widget">			
				<h2 class="hl">Categories</h2>
				<ul>
						<?php wp_list_cats('sort_column=name&optioncount=1'); ?>
				</ul>
		</div>
		
		<div class="widget">			
				<h2 class="hl">Archives</h2>
				<ul>
						<?php wp_get_archives('type=monthly&show_post_count=1'); ?>
				</ul>
		</div>
		
		
		
		<?php endif; ?>
	
	</div>


</div>
<div id="sidebar-bottom"></div>

</div>

