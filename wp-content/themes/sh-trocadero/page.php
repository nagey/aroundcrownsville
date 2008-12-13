<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="post" id="post-<?php the_ID(); ?>">
		<h2 class="pagetitle"><?php the_title(); ?></h2>
		<?php the_content(__('(more...)')); ?>
		<?php wp_link_pages(); ?>
		<p class="the_category">&nbsp;<?php edit_post_link(__('Edit'), '', ''); ?></p>
	</div>
<?php endwhile; else : ?>
	<div class="post">
		<h2><?php _e('Not Found'); ?></h2>
		<p><?php _e('Sorry, but you are looking for something that isn&#39;t here.'); ?></p>
	</div>
<?php endif; ?>
<?php get_footer(); ?>
