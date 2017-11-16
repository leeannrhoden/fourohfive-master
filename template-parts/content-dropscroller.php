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

<div >
	
	<h2 class="title">
		<?php the_field('about_title') ?>
	</h2>

	<p class="content">
		<?php the_field('purchase_drop') ?>
	</p>
</div>

<!-- Displaying Step One -->
<div class="gradient">
	<h2>
		<?php the_field('step_one_title') ?>
	</h2>
	<p>
		<?php the_field('step_one') ?>
	</p>
	<img src="<?php the_field('step_one_image') ?>" alt="">
</div>

 <!-- Displaying Step Two -->
<div class=>
		<h2>
			<?php the_field('step_two_title') ?>
		</h2>
		<p>
			<?php the_field('step_two') ?>
		</p>
		<img src="<?php the_field('step_two_image') ?>" alt="">
</div>

 <!-- Displaying Step Three -->
<div class="gradient">
		<h2>
			<?php the_field('step_three_title') ?>
		</h2>
		<p>
			<?php the_field('step_three') ?>
		</p>
		<img src="<?php the_field('step_three_image') ?>" alt="">
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

<?php the_title( '<h1>', '</h1>' ); ?>

<?php the_content(); ?>
