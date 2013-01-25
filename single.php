<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article>
		<div class="container">
			<div class="thirteen columns offset-by-three">
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
				<time><?php the_time('F jS, Y') ?>  
			</div>
		</div>
	</article>
	<?php endwhile; ?>
	<?php else : ?>
	<article>
		<div class="container">
			<div class="thirteen columns offset-by-three">
				<h2>No matching results.</h2>
				<p>You're on the wrong side of town, brother. <a href="<?php echo get_settings('home'); ?>">Return to homepage.</a></p>
			</div>
		</div>
	</article>
	<?php endif; ?>
	<?php get_footer(); ?>