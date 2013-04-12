<?php
/*
Template Name: Archives
*/

 get_header(); ?>


   <article>
     <div class="container">
       <h2><?php the_title(); ?></h2>
       <?php the_content(); ?>
       <?php
      $posts_to_show = 100; //Max number of articles to display
      $debut = 0; //The first article to be displayed
      ?>
      <?php while(have_posts()) : the_post(); ?>
      
      <ul>
      <?php
      $myposts = get_posts('numberposts=$posts_to_show&offset=$debut');
      foreach($myposts as $post) :
        ?>
      <li><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a><?php the_time('d/m/y') ?>: <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

      <?php endforeach; ?>
      </ul>
      

      <?php endwhile; ?>
    </div>
</article>

  
  <?php get_footer(); ?>