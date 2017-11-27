<!-- Displaying Banner & Banner Text -->


<div class="image_wrapper">

	<?php
	the_post_thumbnail('full', ['class' => 'img-fluid']);
	?>
	<h2 class="image_description">
		<?php the_field('banner_text') ?>
	</h2>

</div>


<!-- Displaying Spacer -->
<div>

	<img src="	<?php the_field('spacer'); ?>" alt="">

</div>


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
			<p>
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
			<p>
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


 <!-- Displaying Team Members -->
<!-- Container -->
<div class="grid-three">
<!-- Grid  -->
<div class="grid-three">
	<!-- Billy Joel -->
		<div>
			 <img src="<?php the_field('step_three_image') ?>" alt="">
			 <img src="" alt="">
			<h2>
				
			</h2>
			<p>
				
			</p>
		</div>

	<!-- Sam Smith -->
		<div>
			 <img src="" alt="">
			 <img src="" alt="">
			<h2>
				
			</h2>
			<p>
				
			</p>
		</div>

	<!-- Taylor Swift -->

		<div>
			 <img src="" alt="">
			 <img src="" alt="">
			<h2>
				
			</h2>
			<p>
				
			</p>
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
		
<div>
		<div>
		<?php the_title( '<h1>', '</h1>' ); ?>
		</div>

		<div>
		<?php the_content(); ?>
		</div>
</div>




<!-- Footer -->






