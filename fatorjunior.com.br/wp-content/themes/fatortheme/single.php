<?php get_header(); ?>

<section style="background-color: #171717;" >
	<div class="container clearfix main_blog">
		<div class="single_post ">
			<?php if(have_posts()):
			while (have_posts()) :the_post(); ?>
			<div class="posts">
				<?php the_post_thumbnail(); ?>
				<div class=" container post_content">
				<div class="row">
					<div class="col-md-10">
						<h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
					</div>
					
				</div>
					<p><?php the_content();?></p>
					<p class="post_info"><?php the_author(); ?></p>
				</div>
				
				
			</div>

		<?php endwhile; ?>
	</div>
	<?php 
	else:

		echo "<p>No content found </p>";
	endif; ?>
</div>
</section>
<?php get_footer();?>