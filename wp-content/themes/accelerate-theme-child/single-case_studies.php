<?php
/**
 * The template for displaying Case Studies
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

	<?php while ( have_posts() ) : the_post(); 

		$services = get_field('services');
		$client = get_field('client');
		$link = get_field('site_link');
		$image_1 = get_field('image_1');
		$image_2 = get_field('image_2');
		$image_3 = get_field('image_3'); 
		$size = "full"; ?>

	

<article class="case-study">
	<aside class="case-study-sidebar">
		<h2><?php the_title(); ?></h2>
		<p id="gray"><?php echo $services; ?></p>
		<p>Client: <?php echo $client; ?></p>

		<?php the_content(); ?>

		<p><a href="<?php echo $link; ?>">Site Link</a></p>	
	</aside>

	<div class="case-study-images">
		<?php if (image_1) { ?>
		<img src="<?php echo wp_get_attachment_image( $image_1, $size); ?> 
			<?php } ?>

		<?php if (image_2) { ?>
		<img src="<?php echo wp_get_attachment_image( $image_2, $size); ?> 
			<?php } ?>

		<?php if (image_3) { ?>
		<img src="<?php echo wp_get_attachment_image( $image_3, $size); ?> 
			<?php } ?>


	</div>
</article>

	<?php endwhile; // end of the loop. ?>

	</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>







