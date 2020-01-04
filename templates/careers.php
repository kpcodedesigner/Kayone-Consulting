<?php
/**
 * Template Name: Careers
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
	
	
	
	<div class="container"> 
			<div class="open_positon">
                <div class="border_title">
                    <h4 class="">OPEN POSITIONS</h4>
                </div>
                <div class="open_porsitin_box">
                    <div class="row">
					
					<?php	  $args=array(
					 'post_type' => 'vacancy'
						);
					$pstnew = new WP_Query($args);
					
					if( $pstnew->have_posts() ) {
						$count = 2;
						$checkcount = 2;
					while ($pstnew->have_posts()) : $pstnew->the_post(); ?>
					
					<?php if($checkcount % ((3*$count)-2) == 0) : ?>	
					
					
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="open_position_box">
                                <div>
                                    <h5><?php the_title(); ?></h5>
                                </div>
                                <div class="opan_positon_meta">
                                    <ul>
                                        <li>Location: <a href="#">Chennai</a></li>
                                        <li>Department: <a href="#">Consulting</a></li>
                                        <li><?php echo get_the_date(); ?></li>
                                    </ul>
                                </div>
                                <div class="quote_btn">
                                   <a href="<?php the_permalink(); ?>"> <button type="button" class="btn btn-warning">APPLY NOW</button></a>
                                </div>
                            </div>
                        </div>
						
						<?php $count++; ?>
					 
					<?php else : ?>
						
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="open_position_box">
                                <div>
                                   <h5><?php the_title(); ?></h5>
                                </div>
                                <div class="opan_positon_meta">
                                    <ul>
                                         <li>Location: <a href="#">Chennai</a></li>
                                        <li>Department: <a href="#">Consulting</a></li>
                                        <li><?php echo get_the_date(); ?></li>
                                    </ul>
                                </div>
                                <div class="quote_btn">
                                    <a href="<?php the_permalink(); ?>"> <button type="button" class="btn btn-warning">APPLY NOW</button></a>
                                </div>
                            </div>
                        </div>
						
						<?php endif; ?>
					<?php $checkcount++; ?>
					<?php endwhile;   }		wp_reset_query();  ?>
						
                      
                    </div>
                </div>
            </div>
		</div>
		
	<?php


get_footer();
