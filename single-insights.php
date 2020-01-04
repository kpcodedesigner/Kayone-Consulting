<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Business_Point
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="container">
		
		<?php
        // Start the loop.
        while ( have_posts() ) : the_post();
        ?>
		
		<nav aria-label="breadcrumb">
            <ol class="breadcrumb indigo lighten-4">
                <li class="breadcrumb-item">
                    <a class="black-text" href="http://kayoneconsulting.aliansoftware.net/">Home</a> 
                <span style="padding:0px 5px;">/</span>
                </li>
				<li class="breadcrumb-item">
                    <a class="black-text" href="http://kayoneconsulting.aliansoftware.net/insights/">Insights</a> 
                <span style="padding:0px 5px;">/</span>
                </li>
                <li class="breadcrumb-item active"><?php the_title(); ?>
			</li>
            </ol>
        </nav>
		
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="blog_post_img">
			 <div class="nd_img">
				 <?php if (has_post_thumbnail( $post->ID ) ): ?>
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
			<img src="<?php echo $image[0]; ?>"/>
		<?php endif; ?>
	
			 </div>
	   </div>
		
		<div class="space20"></div>
		
		<h4 class="content-title mx-auto"><?php the_title(); ?></h4>
	
		<div class="nd_posted">
			 <div class="left_post_detail">
				 <div class="blog_meta">
					 <ul>
						 <li><?php echo get_the_date(); ?></li>
					 </ul>
				 </div>
			 </div>
			 <div class="blog_meta_social_icon">
					 <a href="https://facebook.com/kayoneconsulting" class="facebook"><i class="fa fa-facebook-f"></i></a>
					 <a href="https://www.linkedin.com/company/kayoneconsulting" class="linkedin"><i class="fa fa-linkedin"></i></a>
					 <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
			 </div>
	    </div>
	
		<div class="insight_inner_content">
			<?php
				the_content();
			?>
		</div>
			
			</div>
		</div>	
			
		
			

		 <?php
            // End of the loop.
        endwhile;
        ?>
		
		
   </div>
   
   
   </main><!-- #main -->
  </div><!-- #primary -->
  
<?php
get_footer();
