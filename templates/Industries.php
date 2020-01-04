<?php
/**
 * Template Name: Industries.
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

	<section id="intro_service" style="background-image:url(http://kayoneconsulting.aliansoftware.net/wp-content/uploads/2019/04/industries_bg.jpg)">
        <div class="intro-content container">
            <h2 style="color:#fff;">INDUSTRIES</h2>
        </div>
    </section>
	
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb indigo lighten-4">
                <li class="breadcrumb-item">
                    <a class="black-text" href="http://kayoneconsulting.aliansoftware.net/">Home</a> 
                <span style="padding:0px 5px;">/</span>
                </li>
                <li class="breadcrumb-item active">Industries</li>
            </ol>
        </nav>
    </div>
	
     <div class="page_design">
        <div class="industries">
            <section class="gallery-area section-gap">
                <div class="container">
                    <div class="row">
					
					
					<?php	  $args=array(
					 'post_type' => 'industries'
						);
					$pstnew = new WP_Query($args);
					
					if( $pstnew->have_posts() ) {
						$count = 2;
						$checkcount = 2;
					while ($pstnew->have_posts()) : $pstnew->the_post(); ?>
					
					<?php if($checkcount % ((3*$count)-2) == 0) : ?>	
					
					
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-5">
                            <div class="single-gallery">
                                <div class="content">
                                    <a href="<?php the_permalink(); ?>"" target="_blank" rel="noopener noreferrer">
                                        <div class="content-overlay"></div>
                                        
										<?php if (has_post_thumbnail( $post->ID ) ): ?>
											<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
											<img src="<?php echo $image[0]; ?>" width="100%;" />
										<?php endif; ?>

                                       <div class="service_img_desc">
                                          <h6 class="content-title mx-auto"><?php the_title(); ?></h6>
                                        <p>
                                          <?php
											$char_limit = 100; //character limit
											$content = $post->post_content; //contents saved in a variable
											echo substr(strip_tags($content), 0, $char_limit);
											?>
                                            <!-- <span style="float:right; vertical-align:middle;"><i class="fa fa-arrow-right"></i></span> -->
                                        </p>
                                       </div>
									
									</a>
                                </div>
                            </div>
                        </div>
						
						<?php $count++; ?>
					 
					    <?php else : ?>
						
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-5">
                            <div class="single-gallery">
                                <div class="content">
                                    <a href="<?php the_permalink(); ?>"" target="_blank" rel="noopener noreferrer">
                                        <div class="content-overlay"></div>
                                        
										<?php if (has_post_thumbnail( $post->ID ) ): ?>
											<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
											<img src="<?php echo $image[0]; ?>" width="100%;" />
										<?php endif; ?>
                                    
                                    <div class="service_img_desc">
                                          <h6 class="content-title mx-auto"><?php the_title(); ?></h6>
                                        <p>
                                           <?php
											$char_limit = 100; //character limit
											$content = $post->post_content; //contents saved in a variable
											echo substr(strip_tags($content), 0, $char_limit);
											?>
                                          <!--   <span style="float:right; vertical-align:middle;"><i class="fa fa-arrow-right"></i></span> -->
                                        </p>
                                     </div>
								  </a>
                                </div>
                            </div>
                        </div>
						
						
						<?php endif; ?>
						<?php $checkcount++; ?>
						<?php endwhile;   }		wp_reset_query();  ?>
					
                    </div>

                </div>
            </section>
        </div>
    </div>

<?php

get_footer();
