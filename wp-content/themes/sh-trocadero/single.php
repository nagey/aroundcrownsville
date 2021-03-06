<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="post" id="post-<?php the_ID(); ?>">
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanent Link to'); ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<p class="the_time"><?php the_time('F jS, Y') ?></p>
		<?php the_content(__('(more...)')); ?>
		<?php wp_link_pages(); ?>
		<p class="the_category">
			<?php if ( ! is_attachment() ) : ?>
				<?php _e('Categories'); ?>: <?php the_category(', ') ?> | 
				<?php the_tags(__('Tags: '), ', ', '');  ?>
			<?php endif; ?>
			<?php edit_post_link(__('Edit'), ' &nbsp; ', ''); ?>
		</p>
	</div>
	<div class="navigation">
		<div class="alignleft"><?php previous_post_link(__('&laquo; %link')) ?></div>
		<div class="alignright"><?php next_post_link(__('%link &raquo;')) ?></div>
	</div>
	<?php if( ! is_attachment() ) comments_template(); ?>
<?php endwhile; else: ?>
	<div class="post">
		<h2><?php _e('Not Found'); ?></h2>
		<p><?php _e('Sorry, but you are looking for something that isn&#39;t here.'); ?></p>
	</div>
<?php endif; ?>
<?php get_footer(); ?>
