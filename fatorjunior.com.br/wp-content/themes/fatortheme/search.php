<?php 
	/* Template Name: Busca */
get_header('servicos'); 
?>

<section style="background-color: #171717;margin-top:2.1em;min-height:20em;" onscroll="SideScroll()">
	<div class="container clearfix main_blog">
		
			<?php if(have_posts()):
			while (have_posts()) :
			the_post(); 
			if(get_the_ID() != 4):?>
			<div class="blog_posts " style="margin-bottom:0.5em;">
			<div class="servicos_posts">
				<div class=" container post_content">
					<a class="servicos" href="<?php the_permalink(); ?>"><?php the_title();?></a>
				</div>
				
				
			</div>
</div>
			<?php endif; ?>
		<?php endwhile; ?>
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