<?php 
	/* Template Name: Serviços */
get_header('servicos'); 
?>

<section style="background-color: #171717;margin-top:1.3em;" onscroll="SideScroll()">
	<div class="container clearfix main_blog">
		<div class="blog_posts ">
			<?php if(have_posts()):
			while (have_posts()) :the_post(); ?>
			<div class="servicos_posts">
				<div class=" container post_content">
					<p class="servicos_content_text servicos"><?php the_content();?></p>
				</div>
				
				
			</div>

		<?php endwhile; ?>
	</div>
	<?php 
	else:

		echo "<p>No content found </p>";
	endif; ?>

	<div class="sidebar">
		<?php get_sidebar('Sidebar');?>
	</div>
</div>
</section>


<?php get_footer();?>