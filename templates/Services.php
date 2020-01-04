<?php
/**
 * Template Name: Services.
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

	<section id="intro_service">
		<div class="intro-content container">
			<h2 style="color:#fff;">SERVICE</h2>
		</div>
   </section>
   
	<div class="container p-0">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb indigo lighten-4">
					<li class="breadcrumb-item">
						<a class="black-text" href="http://kayoneconsulting.aliansoftware.net/">Home</a> 
					<span style="padding:0px 5px;">/</span>
					</li>
					<li class="breadcrumb-item active">Service</li>
				</ol>
			</nav>
	</div>
	
    <div class="service_design">
        <div class="service_page">
            <section class="gallery-area section-gap">
                <div class="container">
                  
					
				
					<?php	  $args=array(
					 'post_type' => 'What we do'
						);
					$pstnew = new WP_Query($args);
					
					if( $pstnew->have_posts() ) {
						$count1 = 0;
						$count2 = 0;
						$count3 = 0;
						$count5 = 0;
						$checkcount = 1;
					while ($pstnew->have_posts()) : $pstnew->the_post(); ?>
					

					<?php if($checkcount  == ((5*$count1)+1)) : ?>	
					<div class="row mb-5">
							<div class="col-lg-4">
					   		<div class="single-gallery">
								 <div class="content">
                                    <a href="<?php the_permalink(); ?>" rel="noopener noreferrer">
                                        <div class="content-overlay"></div>
                                        
										<?php if (has_post_thumbnail( $post->ID ) ): ?>
											<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
											<img src="<?php echo $image[0]; ?>" class="service_img_inner" width="100%;" />
										<?php endif; ?>
										
                                    </a>
                                    <div class="service_img_desc">
                                         <a href="<?php the_permalink(); ?>" rel="noopener noreferrer">
                                            <h6 class="content-title mx-auto"><?php the_title(); ?></h6>
                                        
                                        <p><?php echo wp_trim_words( get_the_content(), 12, '...' ); ?>
                                            <span style="float:right; vertical-align:middle;"><i class="fa fa-arrow-right"></i></span>
                                        </p>
										</a>
                                    </div>
                                </div>
							</div>
							</div>
					<?php $count1++; ?>
					
					<?php elseif($checkcount  == ((5*$count2)+2)) : ?>	
							<div class="col-lg-8">
                            <div class="single-gallery">
								 <div class="content" id="colom_eight_img">
                                    <a href="<?php the_permalink(); ?>" rel="noopener noreferrer">
                                        <div class="content-overlay"></div>
                                        
										<?php if (has_post_thumbnail( $post->ID ) ): ?>
											<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
											<img src="<?php echo $image[0]; ?>" width="100%;" />
										<?php endif; ?>
										
                                    </a>
                                    <div class="service_img_desc">
                                         <a href="<?php the_permalink(); ?>" rel="noopener noreferrer">
                                            <h6 class="content-title mx-auto"><?php the_title(); ?></h6>
                                        
                                        <p><?php echo wp_trim_words( get_the_content(), 20, '...' ); ?>
                                            <span style="float:right; vertical-align:middle;"><i class="fa fa-arrow-right"></i></span>
                                        </p>
										</a>
                                    </div>
                                </div>
	 						</div>
							</div>
						</div>
					<?php $count2++; ?>

					<?php elseif($checkcount  == ((5*$count3)+3)) : ?>
						 <div class="row mb-5">
                        	<div class="col-lg-4 col-md-4 col-sm-12 col-12">
                            <div class="single-gallery">
								 <div class="content">
                                    <a href="<?php the_permalink(); ?>" rel="noopener noreferrer">
                                        <div class="content-overlay"></div>
                                        
										<?php if (has_post_thumbnail( $post->ID ) ): ?>
											<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
											<img src="<?php echo $image[0]; ?>" width="100%;" />
										<?php endif; ?>
										
                                    </a>
                                    <div class="service_img_desc">
                                         <a href="<?php the_permalink(); ?>" rel="noopener noreferrer">
                                            <h6 class="content-title mx-auto"><?php the_title(); ?></h6>
                                        
                                        <p><?php echo wp_trim_words( get_the_content(), 12, '...' ); ?>
                                            <span style="float:right; vertical-align:middle;"><i class="fa fa-arrow-right"></i></span>
                                        </p>
										</a>
                                    </div>
                                </div>
							</div>
							</div>
					<?php $count3++; ?>

					<?php elseif($checkcount  == ((5*$count5)+5)) : ?>	
					<div class="col-lg-4 col-md-4 col-sm-12 col-12">
                            <div class="single-gallery">
								 <div class="content">
                                    <a href="<?php the_permalink(); ?>" rel="noopener noreferrer">
                                        <div class="content-overlay"></div>
                                        
										<?php if (has_post_thumbnail( $post->ID ) ): ?>
											<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
											<img src="<?php echo $image[0]; ?>" width="100%;" />
										<?php endif; ?>
										
                                    </a>
                                    <div class="service_img_desc">
                                         <a href="<?php the_permalink(); ?>" rel="noopener noreferrer">
                                            <h6 class="content-title mx-auto"><?php the_title(); ?></h6>
                                        
                                        <p><?php echo wp_trim_words( get_the_content(), 10, '...' ); ?>
                                            <span style="float:right; vertical-align:middle;"><i class="fa fa-arrow-right"></i></span>
                                        </p>
										</a>
                                    </div>
                                </div>
							</div>
							</div>

						</div>
					<?php $count5++; ?>

					<?php else : ?>
					<div class="col-lg-4 col-md-4 col-sm-12 col-12">
                            <div class="single-gallery">
								 <div class="content">
                                    <a href="<?php the_permalink(); ?>" rel="noopener noreferrer">
                                        <div class="content-overlay"></div>
                                        
										<?php if (has_post_thumbnail( $post->ID ) ): ?>
											<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
											<img src="<?php echo $image[0]; ?>" width="100%;" />
										<?php endif; ?>
										
                                    </a>
                                    <div class="service_img_desc">
                                         <a href="<?php the_permalink(); ?>" rel="noopener noreferrer">
                                            <h6 class="content-title mx-auto"><?php the_title(); ?></h6>
                                        
                                        <p><?php echo wp_trim_words( get_the_content(), 8, '...' ); ?>
                                            <span style="float:right; vertical-align:middle;"><i class="fa fa-arrow-right"></i></span>
                                        </p>
										</a>
                                    </div>
                                </div>
							</div>
							</div>
					<?php endif; ?>
					
					<?php $checkcount++; ?>
					<?php endwhile;   }		wp_reset_query();  ?>

				
					
					
				
					
                </div>
				
            </section>


		<div class="container p-0">
			<?php the_content(); ?>     
		</div>

        </div>
    </div>
<!--</div> -->
<?php


get_footer();
