<?php
/**
 * Template Name: Contact.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Business_Point
 */

get_header(); ?>

		<div class="container">
		  <?php the_content(); ?>                        
		</div>
		
	<?php

get_footer();
