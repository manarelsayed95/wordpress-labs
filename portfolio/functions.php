<?php
  //adding assets files
	function addAssets(){
		wp_enqueue_style('bootstrapCss',get_template_directory_uri().'/assets/css/bootstrap.min.css');
		wp_enqueue_style('bootstrap',get_template_directory_uri().'/assets/css/main.css');

		wp_enqueue_style('bootstrapJs',get_template_directory_uri().'/assets/js/bootstrap.min.js',["jquery"]);
	}

	//hook
	add_action("wp_enqueue_scripts","addAssets");

	//add Theme Options
	add_theme_support("post_thumbnails");

	add_theme_support("menus");

	register_nav_menus(array(
		"main_menu" =>"Main Menu",
	));

	function addDetails(){
		register_post_type("details",array(
			"label"=>"Details",
			"public"=>true,
			"menu_position"=>4,
			"supports"=>["thumbnail","title","editor"],
			"taxonomies" => ['category']
		));
	}

	add_action("init","addDetails");
?>