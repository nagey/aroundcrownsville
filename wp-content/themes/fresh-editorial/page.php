<?php get_header(); ?>

		<div id="content">
			<div id="contentleft">

				<div class="blogpostwrapper">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

					<div class="blogpost">
						<div class="blogtitle">
							<h1><?php the_title(); ?></h1>
						</div>

						<div class="blogauthor">
							written by <? the_author(); ?>
						</div>
						<div class="blogcontent">
							<?php the_content(); ?>
						</div>
						<br />
						<div class="blogdivide">
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
