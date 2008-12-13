<?php get_header(); ?>

		<div id="content">
			<div id="contentleft">

				<div class="blogpostwrapper">
					<div id="mainimage">
						<img src="<?php bloginfo('template_directory'); ?>/images/mainimage.jpg" alt="Main image" title="Main image" />
					</div>


	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

					<div class="blogpost">
						<div class="blogtitle">
							<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						</div>
						<div class="datetab">
							<div class="blogdate">
								<?php the_time('jS F') ?>
							</div>
							<div class="blogdateyear">
								<?php the_time('Y') ?>
							</div>
						</div>
						<div class="blogauthor">
							written by <? the_author(); ?>
						</div>
						<div class="blogcontent">
							<?php the_content(); ?>
							<div class="blogtags">
								<?php the_tags( 'Tags: ', ', ', ''); ?>
							</div>
						</div>
						<div class="blogdivide">
						</div>
						<div class="blogstrip">
							<div class="blogcomments">
								<?php edit_post_link('Edit this entry','','.'); ?>
							</div>
							<div class="blogcategory">
								<?php the_category(', ') ?>
							</div>
						</div>
					</div>

					<?php endwhile; ?>

						<?php else : ?>

							<h2 class="center">Not Found</h2>
							<p class="center">Sorry, but you are looking for something that isn't here.</p>
							<?php include (TEMPLATEPATH . "/searchform.php"); ?>

					<?php endif; ?>

					<?php comments_template(); ?>

			</div>
		</div>

				<?php get_sidebar(); ?>

		</div>



<?php get_footer(); ?>
