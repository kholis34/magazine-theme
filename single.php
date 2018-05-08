<?php get_header(); ?>
  <div class="container-fluid index">
    <div class="container index">
      <div class="row index">
        <div class="col-md-8 maincontent">
        <?php custom_breadcrumbs(); ?>
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="maincontent-index">
    <div class="media-body content single">

      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="meta-post">
        <ul class="list-inline">
          <i class="fa fa-calendar-alt"> <?php the_date(); ?></i> 
          <i class="fa fa-user"> <?php the_author(); ?></i> 
          <i class="fa fa-folder-open"> <?php the_category(' , '); ?></i>
        </ul>
      </div><!--end meta post-->
      <div class="thumb-single">
         <a href="<?php the_permalink(); ?>"><?php   
                  if ( has_post_thumbnail() ) {  
                    the_post_thumbnail();  
                    } 
                    else {
  echo '<img class="img-fluid" src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/thumb.jpg" alt="<?php the_title(); ?>"  />';
            }
                ?></a>
      </div>
      <p><?php the_content(); ?></p>
      <div class="tag-meta">
        <?php the_tags(); ?>
      </div>
      <div class="mainauthor-box">
        <?php if (get_the_author_meta('description')) : // Checking if the user has added any author descript or not. If it is added only, then lets move ahead ?>
    <div class="author-box">
        <div class="author-img"><?php echo get_avatar(get_the_author_meta('user_email'), '100'); // Display the author gravatar image with the size of 100 ?></div>
        <h3 class="author-name"><?php esc_html(the_author_meta('display_name')); // Displays the author name of the posts ?></h3>
        <p class="author-description"><?php esc_textarea(the_author_meta('description')); // Displays the author description added in Biographical Info ?></p>
    </div>
<?php endif; ?>
      </div>
    </div>

<?php endwhile; else: ?>
           <div class="search">
        <h2 class="center">Not Found</h2>
        <p class="center">Sorry, but you are looking for something that isn't here.</p>
      </div>
<?php endif; ?> 
          </div><!--maincontent-index-->
          <div class="related-post">
            <?php $orig_post = $post;
    global $post;
    $categories = get_the_category($post->ID);
    if ($categories) {
    $category_ids = array();
    foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

    $args=array(
    'category__in' => $category_ids,
    'post__not_in' => array($post->ID),
    'posts_per_page'=> 4, // Number of related posts that will be shown.
    'caller_get_posts'=>1
    );

    $my_query = new wp_query( $args );
    if( $my_query->have_posts() ) {
    echo '<div id="related_posts"><h3>Recommended for You</h3><div class="row">';
    while( $my_query->have_posts() ) {
    $my_query->the_post();?>
<div class="col-md-3" style="width: 18rem;">
  <a href="<?php the_permalink(); ?>">
    <?php   
                  if ( has_post_thumbnail() ) {  
                    the_post_thumbnail('thumbnail', array('class' => 'img-fluid card-img-top'));;  
                    } 
                    else {
  echo '<img class="" src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/thumb.jpg" alt="<?php the_title(); ?>"  />';
            }
                ?></a>
  <div class="card-body related">
    <h3 class="card-title related"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
  </div>
</div>
    <?
    }
    echo '</div></div>';
    }
    }
    $post = $orig_post;
wp_reset_query(); ?>
          </div>
        </div>
<?php get_sidebar(); ?>
      </div>
    </div>
  </div><!--end container-fluid index-->
<?php get_sidebar('footer'); ?>
<?php get_footer(); ?>