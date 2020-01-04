<?php
/**
 * Template Name: Insights.
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

	<section id="intro_service" style="background-image:url(http://kayoneconsulting.aliansoftware.net/wp-content/uploads/2019/04/bg-2.jpg)">
		<div class="intro-content container">
			<h2 style="color:#fff;">INSIGHTS</h2>
		</div>
	</section>

	<div class="container">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb indigo lighten-4">
				<li class="breadcrumb-item">
					<a class="black-text" href="http://kayoneconsulting.aliansoftware.net/">Home</a> 
				<span style="padding:0px 5px;">/</span>
				</li>
				<li class="breadcrumb-item active">Insights</li>
			</ol>
		</nav>
	</div>
	
	 <section class="insight_section">
		<div class="container">
			
			
			<?php	  $args=array(
			 'post_type' => 'insights'
				);
			$pstnew = new WP_Query($args);
			
			if( $pstnew->have_posts() ) {
						$count1 = 0;
						$count2 = 0;
						$count3 = 1;
						$count4 = 0;
						$count5 = 0;
						$checkcount = 1;

			
	
			while ($pstnew->have_posts()) : $pstnew->the_post(); ?>
			
			<?php if($checkcount == 1) : ?>
			<div class="row">
				<div class="col-lg-9 col-md-9 col-sm-12 col-12 mb-5">
						<a href="<?php the_permalink(); ?>" class="topdesc">
					<div class="new_box_img" id="insight_eight_colom_img">
						<?php if (has_post_thumbnail( $post->ID ) ): ?>
							<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
							<img src="<?php echo $image[0]; ?>" width="100%;" />
						<?php endif; ?>
					</div>
				
						
					<div class="news_img_desc">
						<h6 class="content-title mx-auto"><?php the_title(); ?></h6>
						<p><?php echo get_the_date(); ?>
							<span style="float:right; vertical-align:middle;"><i class="fa fa-arrow-right"></i></span>
						</p>
					 </div>
				 </a>
				</div>
			<?php elseif($checkcount == 2) : ?>
				<div class="col-lg-3 col-md-3 col-sm-12 col-12">
					<div class="col-lg-12 mb-2">
					<a href="<?php the_permalink(); ?>" class="topdesc">
					<div class="new_box_img">
						<?php if (has_post_thumbnail( $post->ID ) ): ?>
							<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
							<img src="<?php echo $image[0]; ?>" width="100%;" />
						<?php endif; ?>
					</div>
				
						
					<div class="news_img_desc">
						<h6 class="content-title mx-auto"><?php the_title(); ?></h6>
						<p><?php echo get_the_date(); ?>
							<span style="float:right; vertical-align:middle;"><i class="fa fa-arrow-right"></i></span>
						</p>
					 </div>
				 </a>
					</div>

			<?php elseif($checkcount ==  ((5*$count1)+3)) : ?>
					<div class="col-lg-12">
							<a href="<?php the_permalink(); ?>" class="topdesc">
					<div class="new_box_img">
						<?php if (has_post_thumbnail( $post->ID ) ): ?>
							<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
							<img src="<?php echo $image[0]; ?>" width="100%;" />
						<?php endif; ?>
					</div>
				
						
					<div class="news_img_desc">
						<h6 class="content-title mx-auto"><?php the_title(); ?></h6>
						<p><?php echo get_the_date(); ?>
							<span style="float:right; vertical-align:middle;"><i class="fa fa-arrow-right"></i></span>
						</p>
					 </div>
				 </a>
					</div>
				</div>
			</div>
			<?php $count1++; ?>

			<?php elseif($checkcount == ((5*$count2)+4)) : ?>
				<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12 col-12">
					<div class="col-lg-12">
							<a href="<?php the_permalink(); ?>" class="topdesc">
					<div class="new_box_img">
						<?php if (has_post_thumbnail( $post->ID ) ): ?>
							<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
							<img src="<?php echo $image[0]; ?>" width="100%;" />
						<?php endif; ?>
					</div>
				
						
					<div class="news_img_desc">
						<h6 class="content-title mx-auto"><?php the_title(); ?></h6>
						<p><?php echo get_the_date(); ?>
							<span style="float:right; vertical-align:middle;"><i class="fa fa-arrow-right"></i></span>
						</p>
					 </div>
				 </a>
					</div>
			<?php $count2++; ?>

			<?php elseif($checkcount == (5*$count3)) : ?>
					<div class="col-lg-12">
							<a href="<?php the_permalink(); ?>" class="topdesc">
					<div class="new_box_img">
						<?php if (has_post_thumbnail( $post->ID ) ): ?>
							<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
							<img src="<?php echo $image[0]; ?>" width="100%;" />
						<?php endif; ?>
					</div>
				
						
					<div class="news_img_desc">
						<h6 class="content-title mx-auto"><?php the_title(); ?></h6>
						<p><?php echo get_the_date(); ?>
							<span style="float:right; vertical-align:middle;"><i class="fa fa-arrow-right"></i></span>
						</p>
					 </div>
				 </a>
					</div>
				</div>
			<?php $count3++; ?>

			<?php elseif($checkcount == ((5*$count4)+6)) : ?>
				<div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-5">
						<a href="<?php the_permalink(); ?>" class="topdesc">
					<div class="new_box_img">
						<?php if (has_post_thumbnail( $post->ID ) ): ?>
							<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
							<img src="<?php echo $image[0]; ?>" width="100%;" />
						<?php endif; ?>
					</div>
				
						
					<div class="news_img_desc">
						<h6 class="content-title mx-auto"><?php the_title(); ?></h6>
						<p><?php echo get_the_date(); ?>
							<span style="float:right; vertical-align:middle;"><i class="fa fa-arrow-right"></i></span>
						</p>
					 </div>
				 </a>
				</div>
			<?php $count4++; ?>
					
			<?php elseif($checkcount == ((5*$count5)+7)) : ?>
				<div class="col-lg-3 col-md-3 col-sm-12 col-12">
					<div class="col-lg-12">
							<a href="<?php the_permalink(); ?>" class="topdesc">
					<div class="new_box_img">
						<?php if (has_post_thumbnail( $post->ID ) ): ?>
							<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
							<img src="<?php echo $image[0]; ?>" width="100%;" />
						<?php endif; ?>
					</div>
				
						
					<div class="news_img_desc">
						
						<h6 class="content-title mx-auto"><?php the_title(); ?></h6>
						</a>
						<p><?php echo get_the_date(); ?>
							<span style="float:right; vertical-align:middle;"><i class="fa fa-arrow-right"></i></span>
						</p>
					 </div>
				 </a>
					</div>
			<?php $count5++; ?>		
			 
			<?php else : ?>

			<?php endif; ?>
			<?php $checkcount++; ?>
			<?php endwhile;   }		wp_reset_query();  ?>				
				
		
				
			
				
		
		</div>
	</section>


<!-- HTML 

<section class="insight_section text-left">
<div class="container">
<div class="row" style="width: 100%;">
<div class="col-lg-9 col-md-9 col-sm-12 col-12 mb-5">
<div class="new_box_img"><img src="http://kayoneconsulting.aliansoftware.net/wp-content/uploads/2019/04/insght_one.jpg" width="100%;"></div>
<div class="news_img_desc">
<h6>409A Safe Harbor: What is Safe Harbor and Why Is Safe Harbor Important</h6>
 <p>December 29, 2017
                                <span style="float:right; vertical-align:middle;"><i class="fa fa-arrow-right"></i></span>
                            </p>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-12 col-12">

<div class="col-lg-12">
<div class="new_box_img"><img src="http://kayoneconsulting.aliansoftware.net/wp-content/uploads/2019/04/insighttwo.jpg" width="100%;"></div>
<div class="news_img_desc">
<h6>How to Write A Restaurant Business Plan: The 6 Secret Ingredients</h6>
<p>
                                        December 29, 2017
                                        <span style="float:right; vertical-align:middle;"><i class="fa fa-arrow-right"></i></span>
                                    </p>
</div>
</div>
<div class="col-lg-12">
<div class="insight_box"><img src="http://kayoneconsulting.aliansoftware.net/wp-content/uploads/2019/04/insight_three.jpg" width="100%;"></div>
<div class="news_img_desc">
<h6>How to Value Your Startup: 3 Common Approaches</h6>
<p>December 29, 2017
                                <span style="float:right; vertical-align:middle;"><i class="fa fa-arrow-right"></i></span>
                            </p>
</div>

</div>
</div>
</div>
<div class="row" style="width: 100%;">
<div class="col-lg-9 col-md-9 col-sm-12 col-12">
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-12 col-12">
<div class="new_box_img"><img src="http://kayoneconsulting.aliansoftware.net/wp-content/uploads/2019/04/insight_three.jpg" width="100%;"></div>
<div class="news_img_desc">
<h6>How to Value Your Startup: 3 Common Approaches</h6>
<p>
                                        December 29, 2017
                                        <span style="float:right; vertical-align:middle;"><i class="fa fa-arrow-right"></i></span>
                                    </p>
</div>
<div class="insight_box"><img src="http://kayoneconsulting.aliansoftware.net/wp-content/uploads/2019/04/insight_three.jpg" width="100%;"></div>
<div class="news_img_desc">
<h6>How to Value Your Startup: 3 Common Approaches</h6>
<p>
                                       December 29, 2017
                                       <span style="float:right; vertical-align:middle;"><i class="fa fa-arrow-right"></i></span>
                                   </p>
</div>
</div>
<div class="col-lg-8 col-md-8 col-sm-12 col-12">
<div class="new_box_img"><img src="http://kayoneconsulting.aliansoftware.net/wp-content/uploads/2019/04/insight_fourth.jpg" width="100%;"></div>
<div class="news_img_desc">
<h6>409A Safe Harbor: What is Safe Harbor and Why Is Safe Harbor Important</h6>
<p>
                                       December 29, 2017
                                       <span style="float:right; vertical-align:middle;"><i class="fa fa-arrow-right"></i></span>
                                   </p>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-12 col-12">
<div class="row">
<div class="col-lg-12">
<div class="new_box_img"><img src="http://kayoneconsulting.aliansoftware.net/wp-content/uploads/2019/04/insighttwo.jpg" width="100%;"></div>
<div class="news_img_desc">
<h6>How to Write A Restaurant Business Plan: The 6 Secret Ingredients</h6>
<p>
                                       December 29, 2017
                                       <span style="float:right; vertical-align:middle;"><i class="fa fa-arrow-right"></i></span>
                                   </p>
</div>
</div>
<div class="col-lg-12">
<div class="insight_box"><img src="http://kayoneconsulting.aliansoftware.net/wp-content/uploads/2019/04/insight_three.jpg" width="100%;"></div>
<div class="news_img_desc">
<h6>How to Value Your Startup: 3 Common Approaches</h6>
<p>
                                       December 29, 2017
                                       <span style="float:right; vertical-align:middle;"><i class="fa fa-arrow-right"></i></span>
                                   </p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

End of HTML-->

	<?php

	get_footer();
