<?php get_header();

if(have_posts()):
	while (have_posts()) :the_post(); 
the_content();
endwhile;
else:
	echo "<p>No content found </p>";
endif;

$posts = new WP_Query('cat=1'); 
$count = 0;
if($posts->have_posts()):
	while ($posts->have_posts()) : $posts->the_post(); ?>

<a href="<?php the_permalink(); ?>" class="col-md-5 col-sm-6  home_post">
	<article class="">
		<div class="container">
			<h5><?php the_title(); ?></h5>
			<p><?php echo wp_trim_words( get_the_content(), 30, '...' ); ?></p>

			<span><?php the_time('j F Y') ?></span>	
		</div>
		
	</article></a>

	<?php $count += 1;
	if($count > 3):
		break;
	endif;
	endwhile;
	endif;
	?>
</div>
	<div class="row blog_btn">
		<div class="col-md-6 btn">
			<a href="https://fatorjunior.com.br/blog/">Clique aqui para ver mais postagens</a>
		</div>
		
	</div>
</div> 
</div>

</section> 

<?php get_footer();?>