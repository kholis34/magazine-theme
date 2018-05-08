<?php get_header(); ?>
  <div class="container-fluid index">
    <div class="container index">
      <div class="row index">
        <div class="col-md-8 maincontent">
          <div class="slider-index">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/images/slider.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/images/slider2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/images/slider.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
          </div><!--end slider-->
          <div class="maincontent-index">
            <ul class="list-unstyled">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <li class="media content">

    <a href="<?php the_permalink(); ?>">
    <?php   
                  if ( has_post_thumbnail() ) {  
                    the_post_thumbnail('thumbnail', array('class' => 'img-fluid'));;  
                    } 
                    else {
  echo '<img class="mr-3" src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/thumb.jpg" alt="<?php the_title(); ?>"  />';
            }
                ?></a>
    <div class="media-body content">
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <p><?php echo get_the_catcharacter_excerpt(); ?>...</p>
      <div class="meta-post">
        <ul class="list-inline">
          <i class="fa fa-calendar-alt"> <?php the_date(); ?></i> 
          <i class="fa fa-user"> <?php the_author(); ?></i> 
          <i class="fa fa-folder-open"> <?php the_category(' , '); ?></i>
        </ul>
      </div><!--end meta post-->
    </div>
  </li>
<?php endwhile; else: ?>
           <div class="search">
        <h2 class="center">Not Found</h2>
        <p class="center">Sorry, but you are looking for something that isn't here.</p>
      </div>
<?php endif; ?> 

</ul>
<div class="navi">
        <?php
      include('wp-pagenavi.php');
      if(function_exists('wp_pagenavi')) { wp_pagenavi(); }
    ?>
      </div><!--end navigations-->
          </div><!--maincontent-index-->
        </div>
<?php get_sidebar(); ?>
      </div>
    </div>
  </div><!--end container-fluid index-->
<?php get_sidebar('footer'); ?>
<?php get_footer(); ?>