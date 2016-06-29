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

<?php while ( have_posts() ) : the_post(); ?>

	$services = get_field('services');
	$client = get_field('client');
	$link = get_field('site_link');
	$image_1 = get_field('image_1');
	$image_2 = get_field('image_2');
	$image_3 = get_field('image_3');

<?php endwhile; // end of the loop. ?>

<article class="case-study">
<aside class="case-study-sidebar">
	<h2>MailChimp Campaign</h2>
	<p id="gray">Content Strategy, Design & Development</p>
	<p>Client: MailChimp</p>
	<p> This is a project I  made for this company for this. Here is the early stage startup that I helped design and do front-end and back-end dev for.</p>
	<h4>Visit Live Site</h4>
	<?php the_content(); ?>
</aside>





<div class="samples">


</div>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>







