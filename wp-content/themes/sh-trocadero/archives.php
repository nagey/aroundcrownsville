<?php
/*
Template Name: Archives
*/
?>
<?php get_header(); ?>
<div class="post">
	<?php $scritti = array(); $categories = get_categories(); foreach( $categories as $category ) { ?>
		<h2 class="pagetitle" id="cat-<?php echo $category->cat_ID; ?>"><?php echo $category->name; ?></h2>
		<ul class="archivelist">
			<?php query_posts("showposts=100&cat=" . $category->cat_ID . ""); ?>
			<?php while (have_posts()) : the_post(); ?>
				<?php if ( ! in_array($post->ID, $scritti ) ) { ?>
					<li id="post-<?php echo $post->ID; ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
				<?php } else { ?>
					<li class="exists"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title_attribute(); ?>"><?php the_title(); ?></a> &#94;</li>
				<?php } $i++; $scritti[$i] = $post->ID; ?>
			<?php endwhile; ?>
		</ul>
	<?php } ?>
</div>
<?php get_footer(); ?>
