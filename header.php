<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/images/favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,400italic' rel='stylesheet' type='text/css'>
    <title>
      <?php wp_title( '|', true, 'right' ); ?>
      <?php bloginfo( 'name' ); ?>
    </title>

    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>

    <div class="head-top">
      <div class="navbar navbar-inverse navbar-fixed-top header--fixed hide-from-print" role="navigation" id="header-head">
          <div class="container head-container">
            <a class="navbar-logo " href="<?php bloginfo( 'url' ); ?>"><img src="<?php bloginfo('template_directory');?>/images/logo.png"></a>
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>          
            </div>
    
            <div class="navbar-collapse collapse">
    
              <?php 
                $args = array(
                  'menu'        => 'header-menu',
                  'menu_class'  => 'nav navbar-nav',
                  'container'   => 'false'
                );
                wp_nav_menu( $args );
              ?>
    
            </div><!--/.navbar-collapse -->
    
          </div>
        </div>
      </div>