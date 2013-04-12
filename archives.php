<?php
/*
Template Name: Archives
*/

/* Need to install Auto Post Thumbnail plugin and generate thumbnails with it
*/

 get_header(); ?>

<article>
  <div class="container">
       <h2><?php the_title(); ?></h2>
       <archive>
       <?php the_content(); ?>

      <?php while(have_posts()) : the_post(); ?>
      <ul>
      <?php
      $args = array( 'posts_per_page' => -1 );
      $myposts = get_posts($args);
      foreach($myposts as $post) :
        ?>

      <li><archivethumb> <a href="<?php the_permalink(); ?>">
        <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); }
        else { ?> <img src="<?php bloginfo('template_directory'); ?>/images/noImage3.jpg" 
      alt="<?php the_title(); ?>" </a>
      <?php } ?>
      </archivethumb>
        <a href="<?php the_permalink(); ?>">
        <?php the_title(); ?></a><br>
        <br>
      </li>

      <?php endforeach; ?>
      </ul>
      

      <?php endwhile; ?>
    </archive>
   </div>  
</article>

  
  <?php get_footer(); ?>