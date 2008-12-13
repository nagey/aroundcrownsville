<?php get_header(); ?>

<div id="maintop">
<div id="maintopimg"></div>

</div><!--end maintop-->

<div id="wrapper">



<div id="content">
	<div id="main-blog">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
					<div class="clear">&nbsp;</div>
			


	

			<div class="post" id="post-<?php the_ID(); ?>">
			
				<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
				<div class="postdata">
Posted by <?php the_author() ?> on <?php the_time('M j, Y') ?> in <?php the_category(', ') ?> <?php edit_post_link('Edit', '&#124; ', ''); ?> | <div class="rss"><a href="/feed" title="Subscribe to my feed">Subscribe</a></div>
					</div>

				
					<?php the_content(' Read more...'); ?>
				<p class="single-meta" style="float:right; margin-top:5px; margin-right:10px; font-size:11px; "> <?php the_tags(); ?></p>

				
			</div>
<?php comments_template(); ?>
		<?php endwhile; ?>

		

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>


			

	

		

	
	</div><!--end main blog-->

<?php get_sidebar(); ?>

<div class="clear"></div>



</div><!--end content-->


</div><!--end wrapper-->
<?php get_footer();?>