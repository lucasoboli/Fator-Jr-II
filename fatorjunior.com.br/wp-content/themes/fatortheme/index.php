<?php get_header(); ?>

<section style="background-color: #171717;" onscroll="SideScroll()">
	<div class="container clearfix main_blog">
		<div class="blog_posts ">
			<?php if(have_posts()):
			while (have_posts()) :the_post(); ?>
			<div class="posts">
				<?php the_post_thumbnail(); ?>
				<div class=" container post_content">
				<div class="row post_title">
					<div class="col-md-2 post_date">
						<?php the_time('j F'); ?>
					</div>
					<div class="col-md-10">
						<h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
					</div>
					
				</div>
				</div>
				
				
			</div>

		<?php endwhile; ?>
	</div>
	<?php 
	else:

		echo "<p>No content found </p>";
	endif; ?>

	<div class="sidebar">
		<?php get_sidebar();?>
	</div>
</div>
</section>


<?php get_footer();?>