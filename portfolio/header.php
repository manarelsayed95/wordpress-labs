<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Hello, wordpress!</title>
    <?php wp_head();?>
  </head>
  <body>
  <header>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="#">Portfolio</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <?php
	  	wp_nav_menu(array(
	  		"theme_location"=>"main_menu",
	  		"menu_class"=>"navbar-nav mr-auto",
	  		"container_class"=>"collapse navbar-collapse",
	  		"container_id"=>"navbarSupportedContent",
	  	));
	  ?>
	</nav>
</header>