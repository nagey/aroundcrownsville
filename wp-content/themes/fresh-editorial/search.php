<?php get_header(); ?>

		<div id="content">
			<div id="contentleft">

				<div class="blogpostwrapper">


	<?php if (have_posts()) : ?>

					<div id="title2">
						<h1 class="pagetitle">Search results for "<? echo $_GET[s]; ?>"</h1>
					</div>

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
								<?php comments_popup_link('0 Comments', '1 Comment', '% Comments'); ?>
							</div>
							<div class="blogcategory">
								<?php the_category(', ') ?>
							</div>
						</div>
					</div>

					<?php endwhile; ?>

					<div id="paging">

						<?php $previous = get_bloginfo('template_directory'); ?>

						<div id="alignright"><?php next_posts_link('<img src="' . $previous . '/images/previous.png" alt="Previous" title="Previous" />') ?></div>
						<div id="alignleft"><?php previous_posts_link('<img src="' . $previous . '/images/next.png" alt="Next" title="Next" />') ?></div>
					</div>

						<?php else : ?>

							<h2 class="center">Not Found</h2>
							<p class="center">Sorry, but you are looking for something that isn't here.</p>
							<?php include (TEMPLATEPATH . "/searchform.php"); ?>

					<?php endif; ?>

			</div>
		</div>

				<?php get_sidebar(); ?>

		</div>



<?php get_footer(); ?>
