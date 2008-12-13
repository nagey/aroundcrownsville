<form method="get" action="<?php bloginfo('url'); ?>/">
<div><input type="text" value="<?php the_search_query(); ?>" name="s" />
<input type="submit" value="Search" />
</div>
</form>