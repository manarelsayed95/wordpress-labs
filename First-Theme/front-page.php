<?php get_header(); ?>
<div class="container single-post">
<?php
	
	if(have_posts()){
		while(have_posts()){
			the_post(); ?>

	<div class="row">
		<div class="col-md-12">
			<h2> <?php the_title(); ?></h2>
			<?php the_post_thumbnail("medium"); ?>
			<p> <?php the_content(); ?></p>
	</div>
	<?php	
	 }
		}
	?>
</div>
<?php get_footer(); ?>