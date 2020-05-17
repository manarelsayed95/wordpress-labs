<?php get_header(); ?>
<div class="container">
<?php
	if(have_posts()){
		while(have_posts()){
			the_post();
		 ?>
			 <div class="row  details">
				<div class="col-md-12">
					<a href="<?php echo get_the_permalink( );?>"> 
						<h4><?php  the_title();?></h4>
					</a>
					<p> <?php echo "Company Name: " .(get_field("company_name")); ?></p>
					<p> <?php echo "Role: ".(get_field("role")); ?></p>
					<p> <?php echo "Start_Date: ".(get_field("start_date")); ?></p>
					<p> <?php echo "End_Date: ".(get_field("end_date")); ?></p>
			    </div>
			  </div>
	<?php	
	 }	
	  }
	?>
</div>

<?php get_footer(); ?>