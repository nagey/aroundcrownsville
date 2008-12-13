<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
	<div id="searchmenu">
		<input class="searchbg" type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
	</div>
	<div id="searchsubmitbtn">
		<input type="image" src="<?php bloginfo('template_directory'); ?>/images/magnify.png" alt="Search" />
	</div>
</form>