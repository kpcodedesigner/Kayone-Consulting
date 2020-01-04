<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Business_Point
 */

get_header(); ?>

	<section id="primary" class="content-area my-5">
	  <main id="main" class="site-main" role="main">
		<div class="container">
		
		<?php
        // Start the loop.
        while ( have_posts() ) : the_post();
        ?>
		
		 <?php if (has_post_thumbnail( $post->ID ) ): ?>
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
			<img src="<?php echo $image[0]; ?>" width="100%;" />
		<?php endif; ?>
		
		<div class="space20"></div>
		
		<?php the_content();?>
		
		 <?php
            // End of the loop.
        endwhile;
        ?>
		
		</div>
		
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
