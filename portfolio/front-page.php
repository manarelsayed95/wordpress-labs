<?php get_header(); ?>
<div class="container">
<?php
	
	$args=array(
		"post_type"=>["Details"]

	);
	$query=new WP_Query($args);
	if($query->have_posts()){
		while($query->have_posts()){
			$query->the_post();
			 ?>
	<div class="container details">
		<div class="row">
			<div class="col-md-12" style="text-align: center;">
				<h2> <?php the_title(); ?></h2>
				<p style="text-align: center;" ><?php the_post_thumbnail("medium_large"); ?></p>
				<p style="font-weight: bold; "> <?php the_content(); ?></p>
			<div>
		</div>
	</div>
	<?php	
	 }	
	  }
	?>
</div>
<?php get_footer(); ?>