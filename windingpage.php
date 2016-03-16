<?php

/**
*Template Name:winding_page.php
*
*/
get_header();
?>
<?php get_sidebar( 'front' ); ?>
<?php 
$heading= get_field('heading');
$subtext= get_field('subtext');
$offering_1_heading= get_field('offering_1_heading');
$offering_1_label= get_field('offering_1_label');
$offering_1_description= get_field('offering_1_description');
$offering_1_icon= get_field('offering_1_icon');
$offering_1_image= get_field('offering_1_image');

$offering_2_heading= get_field('offering_2_heading');
$offering_2_label= get_field('offering_2_label');
$offering_2_description= get_field('offering_2_description');
$offering_2_icon= get_field('offering_2_icon');
$offering_2_image= get_field('offering_2_image');

$offering_3_heading= get_field('offering_3_heading');
$offering_3_label= get_field('offering_3_label');
$offering_3_description= get_field('offering_3_description');
$offering_3_icon= get_field('offering_3_icon');
$offering_3_image= get_field('offering_3_image');
?>
<!-- section services -->
<div id="primary" class="site-content row" role="main">

<div class="col grid_12_of_12" style="text-align:center;">
	<h1 class="section-title"><span class="color-white"><?php echo $heading ?></span></h1>
	<p class="section-text">
		<?php echo $subtext ?>
	</p>
</div>
<div class="" style="float:right; display:inline-block;">
	<div class="services-content-inner">
		<h4><?php echo $offering_1_label ?></h4>
		<h3> <?php echo $offering_1_heading ?></h3>
		<p>
			<?php echo $offering_1_description ?>
		</p>

	</div>
</div>
<div class="" style="float:left; display:inline-block;">
	<div class="services-content-image">
		<div class="image-inner">
			<?php if(!empty($offering_1_image)) : ?>
			<a href="#"> 
				<image src=' <?php echo $offering_1_image['sizes']['medium'] ?>' />
				</a>
			<?php endif; ?>
		</div>
		
	</div>
</div>

<div class="col grid_12_of_12" style="text-align:right;">
	<div class="services-content-image-2">
		<div class="image-inner-2">
			<?php if(!empty($offering_2_image)) : ?>
			<a href="#"> 
				<image src=' <?php echo $offering_2_image['sizes']['medium'] ?>' />
				</a>
			<?php endif; ?>
		</div>
		<div class="add-image-inner-2">
			<?php if(!empty($offering_2_icon)) : ?>
			<a href="#"> 
				<image src=' <?php echo $offering_2_icon['url'] ?>' />
				</a>
			<?php endif; ?>
		</div>
	</div>
</div>
<div class="col grid_12_of_12" style="text-align:left;">
	<div class="services-content-inner">
		<h4><?php echo $offering_2_label ?></h4>
		<h3> <?php echo $offering_2_heading ?></h3>
		<p>
			<?php echo $offering_2_description ?>
		</p>

	</div>
</div>

<div class="col grid_12_of_12" style="text-align:right;">
	<div class="services-content-inner">
		<h4><?php echo $offering_3_label ?></h4>
		<h3> <?php echo $offering_3_heading ?></h3>
		<p>
			<?php echo $offering_3_description ?>
		</p>

	</div>
</div>
<div class="col grid_12_of_12" style="text-align:right;">
	<div class="services-content-image">
		<div class="image-inner">
			<?php if(!empty($offering_3_image)) : ?>
			<a href="#"> 
				<image src=' <?php echo $offering_3_image['url'] ?>' />
				</a>
			<?php endif; ?>
		</div>
		<div class="add-image-inner">
			<?php if(!empty($offering_3_icon)) : ?>
			<a href="#"> 
				<image src=' <?php echo $offering_3_icon['url'] ?>' />
				</a>
			<?php endif; ?>
		</div>
	</div>
</div>
<div class="col grid_12_of_12">

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'page' ); ?>
					<?php comments_template( '', true ); ?>
				<?php endwhile; // end of the loop. ?>

			<?php endif; // end have_posts() check ?>

		</div> <!-- /.col.grid_12_of_12 -->
</div>
<?php get_sidebar( 'front' ); ?>
<?php 
get_footer();
?>