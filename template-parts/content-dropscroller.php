<!-- Displaying Banner & Banner Text -->


<div class="image_wrapper">

	<?php
	the_post_thumbnail('full', ['class' => 'img-fluid']);
	?>
	<div class="image_description">
		<img src="	<?php the_field('spacer'); ?>" alt="" class="spacer-image" >
	</div>
</div>


<!-- Displaying Spacer -->

<!-- Dsiplaying About -->
<div>
	
		
		<h2 class="title">
			<?php the_field('about_title') ?>
		</h2>

		<p class="content">
			<?php the_field('about') ?>
		</p>

</div>

<!-- Displaying Step One -->
<div class=" container gradient">
	<div class="grid">
		
		<img src="<?php the_field('step_one_image') ?>" alt="">
		<div class="align-self-center">
			<h2>
				<?php the_field('step_one_title') ?>
			</h2>
			<p class="gradient-content">
				<?php the_field('step_one') ?>
			</p>
		</div>
	</div>
</div>

 <!-- Displaying Step Two -->
<div class="container">
	<div class="grid-two">
		<div class="align-self-center text-right">		
			<h2>
				<?php the_field('step_two_title') ?>
			</h2>
			<p>
				<?php the_field('step_two') ?>
			</p>
		</div>

		<div class="align-item-right">
			<img src="<?php the_field('step_two_image') ?>" alt="">
		</div>
	</div>
</div>

 <!-- Displaying Step Three -->
<div class="container gradient">
	<div class="grid">

		<img src="<?php the_field('step_three_image') ?>" alt="">

		<div class="align-self-center">
			<h2>
				<?php the_field('step_three_title') ?>
			</h2>
			<p class="gradient-content">
				<?php the_field('step_three') ?>
			</p>
		</div>

	</div>
</div>

 <!-- Displaying Our Team Blurb -->
<div >
	
	<h2 class="title">
		<?php the_field('our_team_title') ?>
	</h2>

	<p class="content">
		<?php the_field('our_team') ?>
	</p>
</div>



<!-- SAMPLE CODE -->


<!-- END SAMPLE CODE -->


 <!-- Displaying Team Members -->
	<!-- Container -->
	<div class="container">
	<!-- Grid  -->
		<div class="grid-three">
					<?php
						// check if the repeater field has rows of data
						if( have_rows('team_members') ):
						 	// loop through the rows of data
						    while ( have_rows('team_members') ) : the_row();
					?> 
					 <div class="deets text-center "> 
							<img class= "person img-fluid" src="<?php the_sub_field ('photo');?>" alt="">
		                        <div class="words">
									<h3 class= "person_name">
		                                <?php the_sub_field ('name') ?>
		                            </h3>
		                            <h4 class= "person_title">
		                                <?php the_sub_field ('title') ?>
		                            </h4>
		                     
		                        </div>
		                </div>

		            <?php endwhile; ?>

		            <?php else : ?>

		            

		        <?php endif; ?>

		<!-- End of Grid -->
		</div>

	<!-- End of container -->
	</div>








</div>
<!-- End of Grid -->
</div>
<!-- End of Container -->


 <!-- Displaying Purchase Drop -->
<div >
	
	<h2 class="title">
		<?php the_field('purchase_drop_title'); ?>
	</h2>

	<p class="content">
		<?php the_field('purchase_drop'); ?>
	</p>

</div>


 <!-- Displaying Content Form -->
		
<div class="form">
		<div class="form-content">
		<?php the_content(); ?>
		</div>
</div>



