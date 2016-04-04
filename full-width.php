<?php
/**
 * Template Name: Full-width Page Template With OST content
 *
 * Description: Displays a full-width page, with no sidebar. This template is great for pages
 * containing large amounts of content.
 *
 * @package quark-child
 * @since Quark 1.0
 */

get_header(); ?>

<div id="primary" class="site-content row" role="main">
	<div class="col grid_12_of_12">

		<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php
		
		$fieldsfirst = get_field("custom_content_first");

		if ($fieldsfirst) {
					# code...

			get_template_part('content','imagetext');
			get_template_part( 'content', 'ostpage' ); 
		}
		else{
			get_template_part( 'content', 'ostpage' ); 
			get_template_part('content','imagetext');
		}
		?>

		<?php comments_template( '', true ); ?>
	<?php endwhile; // end of the loop. ?>

<?php endif; // end have_posts() check ?>

</div> <!-- /.col.grid_12_of_12 -->
</div><!-- /#primary.site-content.row -->

<?php get_footer(); ?>
