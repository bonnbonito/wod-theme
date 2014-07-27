<?php get_header(); ?>
<!-- SLIDER -->
<div id="myCarousel" class="carousel slide">
  <div class="carousel-inner">
    <div class="item active">
      <img src="<?php bloginfo('template_directory');?>/images/slide1.png" alt="">
      <div class="container">
        
      </div>
    </div>
    <div class="item">
    <img src="<?php bloginfo('template_directory');?>/images/slide2.png" alt="">
      <div class="container">
        <div class="carousel-caption">
          
        </div>
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev"></a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next"></a>
</div>
<!-- /SLIDER -->
<div class="front-widgets-container">
<div class="container">
  <!-- Example row of columns -->
  <div class="row front-widgets">
    <div class="col-sm-4 col-md-4">
      <div class="activities">
        <img src="<?php bloginfo('template_directory');?>/images/activities.png">
        <?php if ( dynamic_sidebar( 'front-left' ) ); ?>
        <a href="#" class="btn btn-readmore">Read More</a>
      </div>
    </div>
    <div class="col-sm-4 col-md-4">
      <div class="map-your-hike">
        <img src="<?php bloginfo('template_directory');?>/images/map.png">
        <?php if ( dynamic_sidebar( 'front-center' ) ); ?>
        <a href="#" class="btn btn-readmore">Read More</a>
      </div>
    </div>
    <div class="col-sm-4 col-md-4">
      <div class="about-the-trail">
        <img src="<?php bloginfo('template_directory');?>/images/about.png">
        <?php if ( dynamic_sidebar( 'front-right' ) ); ?>
        <a href="#" class="btn btn-readmore">Read More</a>
      </div>
    </div>
  </div>

  <div class="row second-row">
    <div class="col-sm-6 col-md-6 history">
      <a href="#">
        <figure class="effect-sarah">
          <img src="<?php bloginfo('template_directory');?>/images/history.png" alt="History of W&OD">
          <figcaption>History of W&OD</figcaption>      
        </figure>
      </a>
    </div>

    <div class="col-sm-6 col-md-6 contact-us">
      <a href="#">
        <figure>
          <img src="<?php bloginfo('template_directory');?>/images/contact.png" alt="History of W&OD">
          <figcaption>Contact Us</figcaption>      
        </figure>
      </a>
    </div>
  </div>

  <?php get_footer(); ?>