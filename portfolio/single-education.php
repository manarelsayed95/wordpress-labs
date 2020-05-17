<?php get_header(); ?>
<div class="container">
<?php
	if(have_posts()){
		the_post();
	?>

		<div class="row details">
			<div class="col-md-12">
				<h4><?php  the_title();?></h4>
				<h5> <?php echo (get_field("education_details")); ?></h5>
				<p> <?php echo "Graduation Project:"."\n". (get_field("graduation_project")); ?></p>
				<p> <?php echo (get_field("project_details")); ?></p>
			</div>
		</div>
	<?php	
	 }
	?>
</div>

<?php get_footer(); ?>