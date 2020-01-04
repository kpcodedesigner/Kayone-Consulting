<?php
/**
 * Template Name: News.
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

  <section class="news_section mt-5">
	<div class="container">
		
		<?php $args = array(
				'posts_per_page'   => 6,
				'offset'           => 0,
				'orderby'          => 'date',
				'order'            => 'DESC',	
				'post_type'        => 'post',	
				'post_status'      => 'publish',
				'suppress_filters' => true
				);
		$myposts = get_posts( $args );

		
		$count1 = 0;
		$count2 = 1;
		$checkcount = 1;

		foreach ( $myposts as $post ) : setup_postdata( $post ); ?>	
			
			<?php if($checkcount == ((5*$count1)+1)) : ?>
			<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-5">
				<a href="<?php the_permalink(); ?>">
					<div class="new_box_img">
						 <?php if (has_post_thumbnail( $post->ID ) ): ?>
							<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
							<img src="<?php echo $image[0]; ?>" width="100%;" />
						 <?php endif; ?>
					</div>
					
					<div class="news_img_desc">
						<h6><?php the_title(); ?></h6>
						 <p><?php echo get_the_date(); ?></p>
					</div>
				</a>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-12">
			<div class="row">
			<?php $count1++; ?>
			
			<?php elseif($checkcount == (5*$count2)) : ?>
				<div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-5">
					<a href="<?php the_permalink(); ?>">
					<div class="new_box_img">
						 <?php if (has_post_thumbnail( $post->ID ) ): ?>
							<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
							<img src="<?php echo $image[0]; ?>" class="news_inner_img_small" width="100%;" />
						 <?php endif; ?>
					</div>
					
					<div class="news_img_desc">
						<h6><?php the_title(); ?></h6>
						 <p><?php echo get_the_date(); ?></p>
					</div>
				</a>
				</div>
			</div>			
			</div>
			</div>
			<?php $count2++; ?>
			
			<?php else : ?>
			<div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-5">
				<a href="<?php the_permalink(); ?>">
					<div class="new_box_img">
						 <?php if (has_post_thumbnail( $post->ID ) ): ?>
							<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
							<img src="<?php echo $image[0]; ?>" class="news_inner_img_small" width="100%;" />
						 <?php endif; ?>
					</div>
					
					<div class="news_img_desc">
						<h6><?php the_title(); ?></h6>
						 <p><?php echo get_the_date(); ?></p>
					</div>
				</a>
			</div>
			<?php endif; ?>
			
			<?php $checkcount++; ?>
		<?php endforeach; 	wp_reset_postdata();?>


	</div>
 </section>
 
 
 
	
	<!-- For loop Carafoery name -->
	
	<!-- 
	<section class="news_plans">
		<div class="container">

		<?php

		 query_posts( array ( 'category_name' => 'bussiness-plan', 'posts_per_page' => -1, 'posts_per_page'  => 1, ) );

		while ( have_posts() ) : the_post(); ?>

		<div class="row">
		 <div class="col-lg-3 col-md-6 col-sm-6 col-12">	
				<?php if (has_post_thumbnail( $post->ID ) ): ?>
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
					<img src="<?php echo $image[0]; ?>" width="100%;" />
				 <?php endif; ?>
				 <div class="news_plan_desc">
					<h6>Valuation</h6>
					<p>
						<?php the_title(); ?>
					</p>
				</div>
		 </div>
		</div>
		
		 <?php endwhile;

		 // Reset Query
		 wp_reset_query();

    ?>	
			
		</div>	
	</section>
	
	-->
	
	<!-- End For loop Carafoery name -->
	
	<!-- Catagories Html Start --> 
	
	<!--
        <section class="news_plans">
            <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-4">
                                <img src="http://kayoneconsulting.aliansoftware.net/wp-content/uploads/2019/04/plan_1.jpg">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-7">
                                <div class="news_plan_desc">
                                    <h6>Valuation</h6>
                                    <p>
                                        4 Things You Need to Know About 409A Valuation
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-4">
                                <img src="http://kayoneconsulting.aliansoftware.net/wp-content/uploads/2019/04/plan_1.jpg">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-7">
                                <div class="news_plan_desc">
                                    <h6>Valuation</h6>
                                    <p>
                                        4 Things You Need to Know About 409A Valuation
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-4">
                                <img src="http://kayoneconsulting.aliansoftware.net/wp-content/uploads/2019/04/plan_1.jpg">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-7">
                                <div class="news_plan_desc">
                                    <h6>Valuation</h6>
                                    <p>
                                        4 Things You Need to Know About 409A Valuation
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-4">
                                <img src="http://kayoneconsulting.aliansoftware.net/wp-content/uploads/2019/04/plan_1.jpg">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-7">
                                <div class="news_plan_desc">
                                    <h6>Valuation</h6>
                                    <p>
                                        4 Things You Need to Know About 409A Valuation
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
        </section>
	-->

	<!-- End Catagories Html Start -->

<?php

get_footer();
