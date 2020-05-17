<?php get_header(); ?>
<div class="container">
<?php
	if(have_posts()){
		while(have_posts()){
			the_post();
		?>
			<div class="row ">
				<div class="col-md-12 details">
					<a href="<?php echo get_the_permalink( );?>"> 
						<h3><?php  the_title();?></h3>
					</a>
					<h4> <?php echo (get_field("education_details")); ?></h4>
					<h5> Graduation Project: </h5>
					<p> <?php echo (get_field("graduation_project")); ?></p>
					<p> <?php echo (get_field("project_details")); ?></p>
				</div>
			</div>
	<?php	
	 }	
	  }
	?>
</div>

<?php get_footer(); ?>