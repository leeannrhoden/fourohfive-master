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



<!-- Displaying Step One -->


 <!-- Displaying Step Two -->


 <!-- Displaying Step Three -->


 <!-- Displaying Our Team Blurb -->


 <!-- Displaying Team Members -->


 <!-- Displaying Purchase Drop -->


 <!-- Displaying Content Form -->

<?php the_title( '<h1>', '</h1>' ); ?>

<?php the_content(); ?>
