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
                    <a class="black-text" href="http://kayoneconsulting.aliansoftware.net/news/">News</a> 
                <span style="padding:0px 5px;">/</span>
                </li>
                <li class="breadcrumb-item active"><?php the_title(); ?>
			</li>
            </ol>
        </nav>
		
		<div class="row">
			
			<div class="col-lg-8 col-md-8 col-sm-8 col-12">
				
				<div class="blog_post_img">
			 <div class="nd_img">
				 <?php if (has_post_thumbnail( $post->ID ) ): ?>
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
			<img src="<?php echo $image[0]; ?>" width="100%;" />
		<?php endif; ?>
	
			 </div>
		   </div>
			
			<div class="space20"></div>
			
			<h4 class="content-title mx-auto"><?php the_title(); ?></h4>
		
			<div class="nd_posted pt-3">
				 <div class="left_post_detail">
					 <div class="blog_meta">
						 <ul>
							 <li><?php echo get_the_date(); ?></li>
							 <li><?php the_author_posts_link(); ?></li>
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
			
			<!--
			 <div class="blog_post">
				 <div class="chip pink lighten-4">
					 409a valuation
				 </div>
				 <div class="chip pink lighten-4">
					 valuation
				 </div>
			 </div>
			-->
			 <hr />
	
		 <?php
            // End of the loop.
        endwhile;
        ?>
		
    </div>
   </div>
		 <div class="releted_post">

			<div class="border_title bog_post_title mb-5">
			  <h4 class="">Releted Post</h4>
			</div>
				 
				<div class="row">
				
				 <?php

				$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 3, 'post__not_in' => array($post->ID) ) );
				if( $related ) foreach( $related as $post ) {
				setup_postdata($post); ?>
				
			
			 <div class="col-lg-4 col-md-4 col-sm-4 col-12">	
				
				<div class="related_box">
				
				  <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"></a>
					
					<?php if (has_post_thumbnail( $post->ID ) ): ?>
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
						<img src="<?php echo $image[0]; ?>"/>
					<?php endif; ?>
					
					
					 <div class="releted_box_title">
						 <h6><?php the_title(); ?></h6>
					 </div>
					 <p style="font-weight:normal;">
						<?php
						$char_limit = 119; //character limit
						$content = $post->post_content; //contents saved in a variable
						echo substr(strip_tags($content), 0, $char_limit);
						?>
					 </p>
					
					<hr>
				
				 <!-- 
					
					<div class="blog_post">
						 <div class="chip pink lighten-4">
							 <? echo mb_strimwidth(get_the_title(), 0, 15, ''); ?>
						 </div>
						 <div class="chip pink lighten-4">
							 valuation
						 </div>
					 </div>
					 
				 -->
					 
					</div>
					
				</div>
				 
				<?php }
			wp_reset_postdata(); ?>
		
	</div>
   
   </main><!-- #main -->
  </div><!-- #primary -->
  
  </div>
  </div>
  
<?php
get_footer();
