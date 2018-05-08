<?php get_header(); ?>
  <div class="container-fluid index">
    <div class="container index">
      <div class="row index">
        <div class="col-md-8 maincontent">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="maincontent-index">
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <p><?php the_content(); ?></p>
<?php endwhile; else: ?>
           <div class="search">
        <h2 class="center">Not Found</h2>
        <p class="center">Sorry, but you are looking for something that isn't here.</p>
      </div>
<?php endif; ?> 

          </div><!--maincontent-index-->
        </div>
<?php get_sidebar(); ?>
      </div>
    </div>
  </div><!--end container-fluid index-->
<?php get_sidebar('footer'); ?>
<?php get_footer(); ?>