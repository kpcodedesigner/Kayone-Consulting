<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Business_Point
 */

get_header(); ?>

	<div class="container">
		<nav aria-label="breadcrumb">
		<ol class="breadcrumb indigo lighten-4">
			<li class="breadcrumb-item">
				<a class="black-text" href="http://kayoneconsulting.aliansoftware.net/">Home</a> 
			<span style="padding:0px 5px;">/</span>
			</li>
			<li class="breadcrumb-item">
				<a class="black-text" href="http://kayoneconsulting.aliansoftware.net/service/">Services</a> 
			<span style="padding:0px 5px;">/</span>
			</li>
			<li class="breadcrumb-item active"><?php the_title(); ?>
		</li>
		</ol>
	</nav>
	
		<div class="border_title" id="service_inner_title">
			<h4><?php the_title(); ?></h4>
	   </div>

	</div>

	<div class="container">
		<?php the_content(); ?>     
	</div>

<?php
do_action( 'business_point_action_sidebar' );
get_footer();
