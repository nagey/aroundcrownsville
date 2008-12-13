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
			
				<h1><?php the_title(); ?></h1>
				

				
					<?php the_content('<p class="entry-more">Read more... </p>'); ?>
				

				
			</div>
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