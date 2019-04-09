<?php
/**
 * Template Name: about-us
 *
 */
?>

<?php get_header(); ?>
	<?php get_template_part( 'header-menu', get_post_format() );?>
	
	<?php get_template_part( 'nav-menu', get_post_format() );?>
	
<!-- Header  Inner style-->

 <section class="row final-breadcrumb">
 	<div class="container">
 		<ol class="breadcrumb">
 			<li><a href="index.html">Home</a></li>
 			<li class="active">About us</li>
 		</ol>
 	</div>
 </section>
<!-- Header  Slider style-->
	
	<!-- About Resort style-->
  <section class="container clearfix common-pad about-info-box">
    
<div class="row">
	<?php query_posts('p=29'); ?>
	<?php while(have_posts()) : the_post(); ?>
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
     
      <div class="sec-header3">
         <h2><?php the_title(); ?></h2>
             <h3><i>This Holiday Home is under new management. The new owners are both from New Zealand.
			 Their concept of business is built on the philosophy of offering good  service to their customers

that would create pleasurable experience to all the guests.The five bedrooms  are preferably, ideal for a comfortable stay

                 for a group of 5 - 10 people. At some occasions a group of 20: family, relatives, and

                 close friends were happily accommodated.</i></h3>
	  </div>
		<p><?php the_content(); ?></p>
        
      
        
		
    </div>
      
      <div class="col-sm-4 hidden-xs">
      
      <div class="img-cap-effect">
          <div class="img-box">
		    <?php
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
				$url = $thumb['0'];
			?>
          <img src="<?=$url?>" alt="">
          <div class="img-caption">
              
              </div>
          </div>
          
	  </div>
      </div>
     <?php endwhile; wp_reset_query();?>
    </div>
    </section> 
    
<!-- About Resort style-->
<!-- Our Resort Values style-->
 <section class="clearfix news-wrapper">
    <div class="container clearfix common-pad">
     <div class="row">
     
     <div class="col-lg-6 col-md-6 col-xs-12 our-resort-value hidden-xs">
          <?php query_posts('p=40'); ?>
		  <?php while(have_posts()) : the_post(); ?>
		 <div class="img-l-box">
			<?php
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );
				$url = $thumb['0'];
			?>
			<img src="<?=$url?>" alt="" >
		  </div>
		  <?php endwhile; wp_reset_query();?>
		 
         <div class="img-r-box">
		  <?php query_posts('p=47'); ?>
		  <?php while(have_posts()) : the_post(); ?>
		  <div class="img-box1">
			<?php
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );
				$url = $thumb['0'];
			?>
		    <img src="<?=$url?>" alt="" width="281" height="213">
		  </div>
		   <?php endwhile; wp_reset_query();?>
		    <?php query_posts('p=51'); ?>
		  <?php while(have_posts()) : the_post(); ?>
		    <?php
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );
				$url = $thumb['0'];
			?>
			<div class="img-box2">
				<img src="<?=$url?>" alt="" width="281" height="213">
			</div>
		   <?php endwhile; wp_reset_query();?>
		 </div>
         
         
         </div>
     <div class="col-lg-6 col-md-6 col-xs-12">
         
         <div class="resort-r-value">
             <div class="sec-header sec-header-pad">
         <h2>Our Values</h2>
           
         </div>
         <div class="accordian-area">
             
             
         <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			<?php query_posts('category_name=our-resort-values');?>
            <?php while(have_posts()) : the_post(); ?>
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingOne">
					<h4 class="panel-title">
					<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne-<?php echo get_the_ID();?>" aria-expanded="false" aria-controls="collapseOne">
					<span><?php the_title(); ?></span><i class="fa fa-minus"></i><i class="fa fa-plus"></i> 
					</a>
					</h4>
				</div>
				<div id="collapseOne-<?php echo get_the_ID();?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
					<div class="panel-body faq-content">
						<p><?php the_content(); ?> </p>
						
					</div>
				</div>
			</div>
			<?php endwhile; wp_reset_query(); ?>	
                     
			</div>
		 </div>
         
         </div>
        
         </div>
     
        </div>
     
     </div>
    
    
    </section>   
<!-- Our Resort Values style-->    

 

<!-- Testimonials Resort  -->
  <section class="container clearfix common-pad testimonials-sec">
   <div class="sec-header">
         <h2>Testimonials</h2>
             <h3>Pick a room that best suits your taste and budget</h3>
         </div> 
      
      <div class="testimonials-wrapper">
      <div class="testimonial-sliders">
    
		  <?php query_posts('category_name=testimonials');?>
		  <?php while(have_posts()) : the_post(); ?>
          <div class="item">
          <div class="test-cont"><p><?php the_content(); ?></p></div>             
             <div class="test-bot">
			  <?php
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
				$url = $thumb['0'];
			 ?>
             <div class="tst-img"><img src="<?=$url?>" alt="" class="img-responsive"></div>
             <div class="client_name">
				<?php $position =  get_post_meta(get_the_ID(), 'my_meta_box_text', true);?>
               <h5><?php the_title(); ?> - <span><?php echo $position; ?></span></h5>  
                
                 </div>
             
             </div>
          </div> 
          <?php endwhile; wp_reset_query(); ?>	
                    
    </div>
          
      </div>
 </section> 
 <!-- Testimonials  Resort -->


<?php get_footer(); ?>