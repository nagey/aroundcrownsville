<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN">

<?php get_header(); ?>

<body>
	<div class="main">
		<div class="container">
			<div class="span-24 header">
				<h1 class="name"><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?><!--<span class="bubble"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/<?php echo $bubbles; ?>" alt="bubbles" /></span>--></a></h1>
				<span class="slogan"><?php bloginfo('description'); ?></span>
			</div>

			<?php include (TEMPLATEPATH . "/navigation.php"); ?>

			<?php include (TEMPLATEPATH . "/banner.php"); ?>

			<div class="span-24 content">
				<div class="span-16 post-wrapper">
					<ul>
						<?php if (have_posts()) : ?>
							<?php while (have_posts()) : the_post(); ?>
						<li class="post">
							<div class="text-header">
								<h2 class="title"><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
								<span class="no"><?php comments_number('0', '1', '%', 'comments'); ?></span>
								<div class="clear"></div>
							</div>
													
							<div class="hr"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/<?php echo $scissors; ?>" alt="scissors" /></div>

							<div class="info-small">
								<span class="date"><?php the_time('F jS, Y') ?></span><span class="author"><?php the_author() ?></span><span class="cat"><?php the_category(', ') ?></span>
							</div>

							<?php the_content('Read the rest of this entry &raquo;'); ?>
							<div class="clear"></div>
							<?php the_tags('<span class="tag small"> Tags: ', ', ', '</span>'); ?>
							<?php edit_post_link('Edit', '<p class="edit">', '</p>'); ?>
							
						</li>
							<?php endwhile; ?>
						<?php else : ?>
						<li>
	                        <h2>Not Found</h2>
	                        <p>Sorry, but you are looking for something that isn't here.</p>
						</li>

						<?php endif; ?>
						<li class="post">
		                    <p class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></p>
		                    <p class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></p>
		                </li>
					</ul>
				</div>
				<div class="span-8 last sidebar">
				<?php get_sidebar(); ?>
				</div>
			</div>

			<?php get_footer(); ?>
		</div>
	</div>
</body>
</html>
