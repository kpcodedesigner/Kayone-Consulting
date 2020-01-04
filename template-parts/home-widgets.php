<?php
/**
 * Home widgets
 *
 * @package Business_Point
 */

// Bail if not home page.
if ( ! is_page_template( 'templates/home.php' )  ) {
	return;
}
?>

<div id="home-page-widget-area" class="widget-area">
	
		 <!--==========================
    We do Section
  ============================-->
  
   <section id="we_do">
       <div class="container">
           <div class="row mb-4">
               <div class="col-lg-6 col-md-6 col-sm-6 col-12 p-0">
                   <div class="border_title">
                     <h4 class="text-left">WHAT DO WE DO</h4>
                   </div>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                   <div class="view_more">
                       <a href="http://kayoneconsulting.aliansoftware.net/service/"><h4 class="text-right">VIEW MORE <i class="fa fa-arrow-right"></i></h4></a>
                   </div>
               </div>
           </div>
	
			 <div class="do_content">
			 
			 <div class="row m-0">

				<?php	  $args=array(
				  'post_type' => 'What we do'
						);
					$pstnew = new WP_Query($args);
					
					if( $pstnew->have_posts() ) {
						$count = 1;
						$checkcount = 1;
					while ($pstnew->have_posts()) : $pstnew->the_post(); ?>
					
					<?php if($checkcount % ((3*$count)-1) == 0) : ?>					
					
							<div class="col-lg-4 col-md-4 col-sm-12 col-12 p-0">
                        <a href="<?php the_permalink(); ?>" class="topdesc">
                            <div class="do_desc">
                                <div class="text-left">
                                    <h4><?php the_title(); ?></h4>
                                    <p>
                                        <?php echo wp_trim_words( get_the_content(), 40, '...' ); ?> <a href="<?php the_permalink(); ?>" style="color:#FD9B28;"> View all</a>
                                    </p>
                                </div>
                            </div>
							
							  <div class="do_img">
							
							<?php if (has_post_thumbnail( $post->ID ) ): ?>
								<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
								   <img src="<?php echo $image[0]; ?>" width="100%;" />
							<?php endif; ?>
                            </div>
                        </a>
                    </div>
					<?php $count++; ?>
					 
					<?php else : ?>
					
						<div class="col-lg-4 col-md-4 col-sm-12 col-12 p-0">
                        <a href="<?php the_permalink(); ?>" class="topimage">
                            <div class="do_img">
							
							<?php if (has_post_thumbnail( $post->ID ) ): ?>
								<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
								   <img src="<?php echo $image[0]; ?>" width="100%;" />
							   <?php endif; ?>
                            </div>

                            <div class="do_desc">
                                <div class="text-left">
                                    <h4><?php the_title(); ?></h4>
                                    <p>
                                        <?php echo wp_trim_words( get_the_content(), 40, '...' ); ?> <a href="<?php the_permalink(); ?>" style="color:#FD9B28;"> View all</a>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
					
					<?php endif; ?>
					<?php $checkcount++; ?>
					<?php endwhile;   }		wp_reset_query();  ?>

                </div>
				
            </div>
         
          </div>
       </div>
   </section>
  
  <!--==========================
    Service Section
  ============================-->
  
  
   <section id="service">
       <div class="container">
           <div class="row">
               <div class="col-lg-6 col-md-6 col-sm-6 col-12 p-0">
                   <div class="border_title">
                       <h4 class="text-left">WHO WE SERVE</h4>
                   </div>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                   <div class="view_more">
                       <a href="http://kayoneconsulting.aliansoftware.net/insights/"><h4 class="text-right">VIEW MORE <i class="fa fa-arrow-right"></i></h4></a>
                   </div>
               </div>
           </div>
       
			<div class="service">
			
			
			
			<?php echo do_shortcode("[wcp-carousel id='6036']"); ?>
			 </div>
		<!--
			
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			   <div class="carousel-inner">
				   <div class="carousel-item active">
					   <div class="row">
						   <div class="col-lg-3 col-md-6 col-sm-6 col-12">
							   <a href="#">
								   <div class="card mb-2" id="service_box">
									   <img class="card-img-top" src="<?php bloginfo('template_url'); ?>/img/service.jpg" alt="Card image cap">
									   <div class="card-body" id="service_body">
										   <h6 class="card-title font-weight-bold">What is Lorem Ipsum?</h6>
										   <p class="card-text">
											   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...
										   </p>
									   </div>
								   </div>
							   </a>
						   </div>
						   <div class="col-lg-3 col-md-6 col-sm-6 col-12">
							   <a href="#">
								   <div class="card mb-2" id="service_box">
									   <img class="card-img-top" src="<?php bloginfo('template_url'); ?>/img/service.jpg" alt="Card image cap">
									   <div class="card-body" id="service_body">
										   <h6 class="card-title font-weight-bold">What is Lorem Ipsum?</h6>
										   <p class="card-text">
											   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...
										   </p>
									   </div>
								   </div>
							   </a>
						   </div>
						   <div class="col-lg-3 col-md-6 col-sm-6 col-12">
							   <a href="#">
								   <div class="card mb-2" id="service_box">
									   <img class="card-img-top" src="<?php bloginfo('template_url'); ?>/img/service.jpg" alt="Card image cap">
									   <div class="card-body" id="service_body">
										   <h6 class="card-title font-weight-bold">What is Lorem Ipsum?</h6>
										   <p class="card-text">
											   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...
										   </p>
									   </div>
								   </div>
							   </a>
						   </div>
						   <div class="col-lg-3 col-md-6 col-sm-6 col-12">
							   <a href="#">
								   <div class="card mb-2" id="service_box">
									   <img class="card-img-top" src="<?php bloginfo('template_url'); ?>/img/service.jpg" alt="Card image cap">
									   <div class="card-body" id="service_body">
										   <h6 class="card-title font-weight-bold">What is Lorem Ipsum?</h6>
										   <p class="card-text">
											   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...
										   </p>
									   </div>
								   </div>
							   </a>
						   </div>
					   </div>
				   </div>
				   
				   <div class="carousel-item">

					   <div class="row">
						   <div class="col-lg-3 col-md-6 col-sm-6 col-12">
							   <a href="#">
								   <div class="card mb-2" id="service_box">
									   <img class="card-img-top" src="<?php bloginfo('template_url'); ?>/img/service.jpg" alt="Card image cap">
									   <div class="card-body" id="service_body">
										   <h6 class="card-title font-weight-bold">What is Lorem Ipsum?</h6>
										   <p class="card-text">
											   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...
										   </p>
									   </div>
								   </div>
							   </a>
						   </div>
						   <div class="col-lg-3 col-md-6 col-sm-6 col-12">
							   <a href="#">
								   <div class="card mb-2" id="service_box">
									   <img class="card-img-top" src="<?php bloginfo('template_url'); ?>/img/service.jpg" alt="Card image cap">
									   <div class="card-body" id="service_body">
										   <h6 class="card-title font-weight-bold">What is Lorem Ipsum?</h6>
										   <p class="card-text">
											   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...
										   </p>
									   </div>
								   </div>
							   </a>
						   </div>
						   <div class="col-lg-3 col-md-6 col-sm-6 col-12">
							   <a href="#">
								   <div class="card mb-2" id="service_box">
									   <img class="card-img-top" src="<?php bloginfo('template_url'); ?>/img/service.jpg" alt="Card image cap">
									   <div class="card-body" id="service_body">
										   <h6 class="card-title font-weight-bold">What is Lorem Ipsum?</h6>
										   <p class="card-text">
											   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...
										   </p>
									   </div>
								   </div>
							   </a>
						   </div>
						   <div class="col-lg-3 col-md-6 col-sm-6 col-12">
							   <a href="#">
								   <div class="card mb-2" id="service_box">
									   <img class="card-img-top" src="<?php bloginfo('template_url'); ?>/img/service.jpg" alt="Card image cap">
									   <div class="card-body" id="service_body">
										   <h6 class="card-title font-weight-bold">What is Lorem Ipsum?</h6>
										   <p class="card-text">
											   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...
										   </p>
									   </div>
								   </div>
							   </a>
						   </div>
					   </div>

				   </div>
			   </div>

			   <div class="carousal_erro_service">
				   <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					   <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fa fa-arrow-left" id="erro_slider"></i></span>
					   <span class="sr-only">Previous</span>
				   </a>
				   <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					   <span class="carousel-control-next-icon" aria-hidden="true"><i class="fa fa-arrow-right" id="erro_slider"></i></span>
					   <span class="sr-only">Next</span>
				   </a>
			   </div>
		   </div>
		   
		   -->
		   
			</div>
			   
           </div>
      
    </section>
  
  <!--==========================
    News Section
  ============================-->
  
  <section class="news">
  
       <div class="container">
           <div class="row">

               <div class="col-lg-4 col-md-4 col-sm-6 col-12 news_colom">
                   <div class="col-lg-12 p-0">
                       <div class="border_title" id="news_border_title">
                           <h4 class="text-left">NEWS</h4>
                       </div>
                   </div>

                   <div class="border_bottom"> </div>

							   
				<?php $args = array(
				'posts_per_page'   => 3,
				'offset'           => 0,
				'orderby'          => 'date',
				'order'            => 'DESC',	
				'post_type'        => 'post',	
				'post_status'      => 'publish',
				'suppress_filters' => true
				);
			$myposts = get_posts( $args ); 

			foreach ( $myposts as $post ) : setup_postdata( $post ); ?>	
				
				<a href="<?php the_permalink(); ?>">
				 <div class="news_info">
								   <p><?php the_date(); ?></p>
								   <h6><?php the_title(); ?></h6>
								   <p><?php echo wp_trim_words( get_the_content(), 50, '...' ); ?></p>
				</div>
				</a>
				<div class="border_bottom"> </div>
			<?php endforeach; 
			wp_reset_postdata();?>
							   
				<div class="view_more mt-4">
                       <a href="http://kayoneconsulting.aliansoftware.net/news/"><h4 class="text-left">VIEW MORE <i class="fa fa-arrow-right"></i></h4></a>
			     </div>			
						
						
               </div>


				<div class="col-lg-8 col-md-8 col-sm-6 col-12">
                   <div class="row m-0">
                       <div class="col-lg-6 col-md-6 col-sm-6 col-12 p-0">
                           <div class="border_title" id="news_border_title">
                               <h4 class="text-left">INSIGHTS</h4>
                           </div>
                       </div>
                       <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                           <div class="view_more">
                               <a href="http://kayoneconsulting.aliansoftware.net/insights/"><h4 class="text-right">VIEW MORE <i class="fa fa-arrow-right"></i> </h4></a>
                           </div>
                       </div>
                   </div>
				<?php	  $args1=array(
				  'post_type' => 'insights',
				   'posts_per_page' => 3);
					$insnew = new WP_Query($args1);
					
					if( $insnew->have_posts() ) {
						
					while ($insnew->have_posts()) : $insnew->the_post(); ?>
					
					<?php if($insnew->current_post == 0) : ?>

					<div class="news_img_insight">
                       <div class="card">
                           <div class="card-body p-0">
                              <?php if (has_post_thumbnail( $post->ID ) ): ?>
								<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
								   <img src="<?php echo $image[0]; ?>" width="100%;" />
							   <?php endif; ?>

                               <div class="insight_content">
                                   <div class="title_insight">
								   <a href="<?php the_permalink(); ?>">
                                       <h6><?php the_title(); ?> <i class="fa fa-arrow-right"></i></h6>
                                       <p><?php the_date(); ?></p>
								   </a>
                                   </div>
                               </div>

                           </div>
                       </div>
					</div>
					<div class="row">
					<?php else : ?>
					
					<div class="col-lg-6 col-md-6 col-sm-12 col-12">
                           <div class="news_img_insight">
                               <div class="card">
                                   <div class="card-body p-0">
                                       <?php if (has_post_thumbnail( $post->ID ) ): ?>
								<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
								   <img src="<?php echo $image[0]; ?>" width="100%;" />
							   <?php endif; ?>

                                       <div class="insight_content">
                                           <div class="title_insight">
										   <a href="<?php the_permalink(); ?>">
                                               <h6><?php the_title(); ?><i class="fa fa-arrow-right"></i></h6>
                                               <p><?php echo get_the_date(); ?></p>
											   </a>
                                           </div>
                                       </div>

                                   </div>
                               </div>
                           </div>
                       </div>

					<?php endif; ?>
					<?php endwhile;   }		wp_reset_query();  ?>
  
                   </div>
               </div>
           </div>
       </div>

   </section>
  
  <!--==========================
    About Section
  ============================-->
  
   <section class="about">
       <div class="container">
         <div class="main_bg">
		 
			<?php if ( is_active_sidebar( 'sidebar-10' ) ) : ?>
			<?php dynamic_sidebar( 'sidebar-10' ); ?>
	
<?php endif; ?>
		 
           <!--<div class="about_content">
               <div class="border_title" id="news_border_title">
                   <h4 class="">ABOUT</h4>
               </div>
               <p>
                   At KayOne Consulting, we help clients on key strategic issues, leveraging our deep industry expertise. We specialize in equity valuations, business plans, due diligence, and investment banking. Using our inputs backed up by research, and analytical rigor, our clients are able to make informed decisions more quickly, and solve their toughest, and most critical business problems.
               </p>
               <p>
                   Today, we have clients in more than 23 countries spread across six continents. We advise and support clients ranging from innovative startups to global companies that are leaders in their space.
               </p>
           </div>-->
       </div>
     </div>
   </section>
  
   <!--==========================
    TESTIMONIALS Section
  ============================-->
  
   <section class="testimonials">
       <div class="container">
           <div class="border_title">
               <h4 class="">TESTIMONIALS</h4>
           </div>

			<?php echo do_shortcode('[bne_testimonials layout="slider"]'); ?>


             <!-- <div class="wrapper-carousel-fix">
                   <div id="carousel-example-1" class="carousel no-flex testimonial-carousel slide carousel-fade" data-ride="carousel"
                        data-interval="false">
                       <div class="carousel-inner" role="listbox">
                           <div class="carousel-item active">
                               <div class="testimonial">
                                   <div class="row">
                                       <div class="col-lg-2 col-md-2 col-sm-2 col-2">
                                           <div class="">
                                               <img src="<?php bloginfo('template_url'); ?>/img/testimonials.png" class="testimonial_img" />
                                           </div>
                                       </div>

                                       <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                           <h4 class="pb-2">Claudio P, Project Manager, KongoWeb</h4>
                                           <p>
                                               <i class="fas fa-quote-left"></i> One of the best that I have ever worked with. Very informative and very professional. Gave great insights and was more than happy to adjust values when additional information was presented last minute. This is an unbelievable professional and perhaps the best you will find. Don’t second guess yourself, i can’t give Kishore and his team a better review.
                                           </p>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="carousel-item">
                               <div class="testimonial">
                                   <div class="row">
                                       <div class="col-lg-2 col-md-2 col-sm-2 col-2">
                                           <div class="">
                                               <img src="<?php bloginfo('template_url'); ?>/img/testimonials.png" class="testimonial_img" />
                                           </div>
                                       </div>

                                       <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                           <h4 class="pb-2">Santiago Q , </h4>
                                           <p>
                                               <i class="fas fa-quote-left"></i> Excellent work, great turnaround. accommodated all my comments and requests, fast and efficiently. Highly recommended
                                           </p>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="carousel-item">
                               <div class="testimonial">
                                   <div class="row">
                                       <div class="col-lg-2 col-md-2 col-sm-2 col-2">
                                           <div class="">
                                               <img src="<?php bloginfo('template_url'); ?>/img/testimonials.png" class="testimonial_img" />
                                           </div>
                                       </div>

                                       <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                           <h4 class="pb-2">Gateri K, CEO</h4>
                                           <p>
                                               <i class="fas fa-quote-left"></i> Extremely professional! Very happy with the work produced. Has gone the extra mile to ensure I am 100% satisfied.
                                           </p>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   
                  <div class="carousal_erro_service">
                      <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fa fa-arrow-left" id="erro_slider"></i></span>
                          <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"><i class="fa fa-arrow-right" id="erro_slider"></i></span>
                          <span class="sr-only">Next</span>
                      </a>
                  </div>
               </div> -->

			</div>
		</section>
  
	
</div><!-- #home-page-widget-area -->

