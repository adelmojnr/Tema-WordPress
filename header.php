<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Vendo seu projeto</title>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <?php wp_head(); ?>
    </head>
    <body>

      <div class="container">
        <div class="row">
         <div class="col-md-4 col-xs-7 col-sm-5"><a href="<?php bloginfo('home' ); ?>"><img class="img-responsive center-block" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->heigth; ?>" width="<?php echo get_custom_header()-> width; ?>"  alt="logo" /></a></div>
         <div class="col-md-8 col-sm-7">
          <nav class="navbar navbar-default navbar-custom navbar-right">
            <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <?php require_once('assets/includes/wp_bootstrap_navwalker.php'); ?>
              <?php
              wp_nav_menu( array(
                'menu'              => 'Menu',
                'theme_location'    => 'menu-header',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse navbar-collapse-custom navbar-right',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav navbar-right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker()));
                ?>

              </div><!-- /.container -->
            </nav>
          </div>
        </div>
      </div><!-- /.container -->
<script>
  jQuery.$(document).ready(function($) {
    $(".scroll").click(function(event) {
      envent.preventDefault();
      $('html, body').animate({scrollTop:$(this.hash).offset().top}, 100)
    });
    
  });
</script> 