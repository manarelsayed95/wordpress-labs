<?php get_header(); ?>
<div class="container">
<?php
	
	if(have_posts()){
		while(have_posts()){
			  the_post();
			 ?>
			 <div class="row">
				<div class="col-md-12 details">
					<a href="<?php echo get_the_permalink( );?>"> 
						<h4><?php  the_title();?></h4>
					</a>
					<p> <?php echo (get_field("skill_range"))."%"; ?></p>
			    </div>
			  </div>
			
	<?php	
	 }	
	  }
	?>
</div>
<?php get_footer(); ?>