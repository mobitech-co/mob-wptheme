<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
    <!-- Bootstrap 3 CSS -->
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">     -->
    <!-- Bootstrap 4 CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-xWeRKjzyg6bep9D1AsHzUPEWHbWMzlRc84Z0aG+tyms= sha512-mGIRU0bcPaVjr7BceESkC37zD6sEccxE+RJyQABbbKNe83Y68+PyPM5nrE1zvbQZkSHDCJEtnAcodbhlq2/EkQ==" crossorigin="anonymous">
    <?php wp_head(); ?>
    <style media="screen">
    /*Primari 303f9f
    Primary-light 3f51b5
    Secundary c5cae9*/
      #navegacion{height:60px;background:#303f9f;box-shadow: 0 0 10px #888888;padding-top: 18px;}
      .main-title{width:20%; float: left;}
      .main-title span{color:#fff; margin-left: 20px; font-size: 1.05em}
      .main-nav{width:80%;float:right}
      .main-nav li{list-style: none;float:left}
      .main-nav li a{color:#fff; padding: 20px 20px}
      .main-nav li a:hover{text-decoration: none; background:#3f51b5;}
      .current_page_item a{background:#3f51b5;}
    </style>
  </head>
  <body>
<header>
  <nav id="navegacion">
    <div class="main-title">
      <!-- <span><?php bloginfo('name'); ?></span> -->
    </div>
    <?php wp_nav_menu( array( 'menu_class' => 'main-nav' ) ); ?>
  </nav>
</header>

<div class="card-columns">
  <div class="card" style="max-width:320px;">
    <img class="card-img-top" style="width:100%" src="http://alejandro.local/appmobitech/wp-content/uploads/2016/02/new-york.jpg" alt="Card image cap">
    <div class="card-block">
      <h4 class="card-title">Card title that wraps to a new line</h4>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
  </div>
  <div class="card card-block">
    <blockquote class="card-blockquote">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer>
        <small class="text-muted">
          Someone famous in <cite title="Source Title">Source Title</cite>
        </small>
      </footer>
    </blockquote>
  </div>
  <div class="card">
    <img class="card-img-top" src="http://alejandro.local/appmobitech/wp-content/uploads/2016/02/new-york.jpg"  alt="Card image cap">
    <div class="card-block">
      <h4 class="card-title">Card title</h4>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card card-block card-inverse card-primary text-xs-center">
    <blockquote class="card-blockquote">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
      <footer>
        <small>
          Someone famous in <cite title="Source Title">Source Title</cite>
        </small>
      </footer>
    </blockquote>
  </div>
  <div class="card card-block text-xs-center">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
  <div class="card">
    <img class="card-img" src="http://alejandro.local/appmobitech/wp-content/uploads/2016/02/new-york.jpg"  alt="Card image">
  </div>
  <div class="card card-block text-xs-right">
    <blockquote class="card-blockquote">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer>
        <small class="text-muted">
          Someone famous in <cite title="Source Title">Source Title</cite>
        </small>
      </footer>
    </blockquote>
  </div>
  <div class="card card-block">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>


<!-- <div class="card">
  <img class="card-img-top" src="http://alejandro.local/appmobitech/wp-content/uploads/2016/02/new-york.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Button</a>
  </div>
</div> -->
