<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Business_Point
 */

get_header(); ?>
	
	<section id="intro_career" style="background-image: url('http://kayoneconsulting.aliansoftware.net/wp-content/uploads/2019/04/bg-3.jpg')">
        <div class="intro-content container">
            <h2 style="color:#fff;"><?php the_title(); ?></h2>
        </div>
	</section> 
	
	
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
                    <a class="black-text" href="http://kayoneconsulting.aliansoftware.net/industries/">Industries</a> 
                <span style="padding:0px 5px;">/</span>
                </li>
                <li class="breadcrumb-item active"><?php the_title(); ?>
			</li>
            </ol>
        </nav>
		
	    <div class="border_title mb-5">
		   <h4 class="text-left"><?php the_title(); ?></h4>
	    </div>
         
		<div class="entry-content">
			<?php
				the_content();
			?>
		</div>
			
		 <?php
			// End of the loop.
		endwhile;
		?>
		
  </div>
  
   
   <!-- 
   <div class="container">  
		
		<div class="key_content">
			<div class="border_title">
			   <h4 class="">KEY CONTACTS</h4>
		   </div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6 mb-sm-6 col-12 mb-5">
				<div class="avatar mx-auto">
					<img src="http://kayoneconsulting.aliansoftware.net/wp-content/uploads/2019/04/kishor.jpg" class="z-depth-1" alt="Sample avatar">
				</div>
				<h5 class="mt-4 mb-3"><strong>Kishore,</strong> Director</h5>
				<p class="grey-text">
					As the co-founder of KayOne Consulting, Kishore has been the captain of this ship from the beginning...
				</p>
				<div class="pt-3">
					<a href="http://kayoneconsulting.aliansoftware.net/kishore/"><button type="button" class="btn btn-warning">View Profile <i class="fa fa-arrow-right pl-1"></i></button></a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-sm-6 col-12 mb-5">
				<div class="avatar mx-auto">
					<img src="http://kayoneconsulting.aliansoftware.net/wp-content/uploads/2019/04/priya.jpg" class="z-depth-1" alt="Sample avatar">
				</div>
				<h5 class="mt-4 mb-3"><strong>Priya,</strong> Director</h5>
				<p class="grey-text">
					Priya is known for her strategic consulting and business planning expertise. She has helped more...
				</p>
				<div class="pt-3">
					<a href="http://kayoneconsulting.aliansoftware.net/priya-2/"><button type="button" class="btn btn-warning">View Profile <i class="fa fa-arrow-right pl-1"></i></button></a>
				</div>
			</div>
		</div>
   </div>
   
  -->
  
  </main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
