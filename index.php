<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article>
		<div class="container">
			<div class="thirteen columns offset-by-three">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php the_content(); ?>
				<time><a href="<?php the_permalink(); ?>"><?php the_time('F jS, Y') ?></a></time>
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