<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="theme-color" content="#2196f3">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/fonts/fontawesome/web-fonts-with-css/css/fontawesome-all.css">
    <title>
      <?php if (function_exists('is_tag') && is_tag()) {
        single_tag_title('Tag Archive for &quot;'); echo '&quot; - ';
      } elseif (is_archive()) {
        wp_title(''); echo ' - ';
      } elseif (is_search()) {
        echo 'Search for &quot;'.wp_specialchars($s).'&quot; - ';
      } elseif (!(is_404()) && (is_single()) || (is_page())) {
        wp_title(''); echo '  ';
      } elseif (is_404()) {
        echo 'Not Found - ';
      }
      if (is_home()) {
        bloginfo('name'); echo ' - '; bloginfo('description');
      } else {
        bloginfo('name');
      }
      if ($paged > 1) {
        echo ' - page '. $paged;
      } ?>
    </title> 
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <div class="container-fluid header">
    <div class="container">
      <div class="row header">
        <div class="col-md-4 logo">
          <a href="<?php echo get_bloginfo( 'wpurl' );?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="img-fluid"></a>

        </div>
        <div class="col-md-8 banner">
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/728x90.png" class="img-fluid"></a>
        </div>
      </div>
    </div>
  </div><!--container fluid header-->
  <div class="container-fluid menu">
    <div class="container menu">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="<?php esc_html_e( 'Toggle Navigation', 'theme-textdomain' ); ?>">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbar-content">
    <?php
    wp_nav_menu( array(
      'theme_location' => 'menu-1',
      'menu_id'        => 'primary-menu',
      'container'      => false,
      'depth'          => 2,
      'menu_class'     => 'navbar-nav mr-auto',
      'walker'         => new Bootstrap_NavWalker(),
      'fallback_cb'    => 'Bootstrap_NavWalker::fallback',
    ) );
    ?>
  </div>

    <form class="form-inline my-2 my-lg-0 navbar-form" method="get" action="<?php echo home_url( '/' ); ?>" id="search">
<input type="text" size="10" name="s" value="Search..." onBlur="if (this.value == '') {this.value = 'Search...';}" onFocus="if (this.value == 'Search...') {this.value = '';}" class="form-control form-control-sm btn-outline-info" placeholder="Search..."/>
<button class="btn btn-outline-info my-2 my-sm-0 btn-sm" type="submit">Search</button>

</form>
</nav>
    </div>
  </div><!--end container-fluid menu-->