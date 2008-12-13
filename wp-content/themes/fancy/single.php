<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN">
<head>
	<?php get_header(); ?>
</head>
<body>
	<div class="main">
		<div class="container">
			<div class="span-24 header">
				<div class="name"><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></div>
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
								<h2 class="title"><?php the_title(); ?></h2>
								<span class="no"><?php comments_number('0', '1', '%', 'comments'); ?></span>
								<div class="clear"></div>
							</div>
													
							<div class="hr"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/<?php echo $scissors; ?>" alt="scissors" /></div>

							<div class="info-small">
								<span class="date"><?php the_time('F jS, Y') ?></span><span class="author"><?php the_author() ?></span><span class="cat"><?php the_category(', ') ?></span>
							</div>

							<?php the_content('Read the rest of this entry &raquo;'); ?>
							<?php the_tags('<span class="tag"> Tags: ', ', ', '</span>'); ?>
							<?php edit_post_link('Edit', '<p class="edit">', '</p>'); ?>
							
						</li>
							<?php endwhile; ?>
						<?php else : ?>
						<li>
	                        <h2>Not Found</h2>
	                        <p>Sorry, but you are looking for something that isn't here.</p>
						</li>
						<?php endif; ?>
					</ul>
					<?php comments_template(); ?>
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
