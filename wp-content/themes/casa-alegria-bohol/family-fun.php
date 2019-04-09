<?php
/**
 * Template Name: family-fun
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
 			<li class="active">Family Fun</li>
 		</ol>
 	</div>
 </section>
<!-- Header  Slider style-->

<!-- Family Fun style-->
  <section class="container clearfix common-pad-inner about-info-box">
    
<div class="row">
    <div class="col-lg-12 col-md-12 col-xs-12">
		  <?php query_posts('p=95'); ?>
		  <?php while(have_posts()) : the_post(); ?>
		  <div class="sec-header3">
			 <h2 style="margin-top:-50px;"><?php the_title(); ?></h2>
				
		  </div>
		  <p><br><?php the_content(); ?></p>
		 <?php endwhile; wp_reset_query();?>
	 </div>
    </div>
    </section> 
    
<!-- Family Fun style-->

<!-- Family Fun style-->
 <section class="clearfix news-wrapper">
    <div class="container clearfix common-pad-room1">
     <div class="row">
         <div class="family-outer">
         <div class="col-lg-8 col-md-8 col-xs-12 pull-left family-img family-img-page">
           
             <div class="image-gallery ntracing-images">
				 <?php query_posts('category_name=family-fun');?>
				<?php while(have_posts()) : the_post(); ?>
				<?php
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );
					$url = $thumb['0'];
				?>
              	<a data-imagelightbox="a" rel="next" href="" class="single-gallery ff-270">
					<img src="<?=$url?>" alt="">				
				</a>
                  <?php endwhile; wp_reset_query(); ?>	     	
             </div>
            
            </div>
			<?php query_posts('p=97'); ?>
			<?php while(have_posts()) : the_post(); ?>
			<div class="col-lg-4 col-md-4 col-xs-12 pull-right family-content">
				<h2><?php the_title(); ?></h2>
				<p><?php the_content(); ?></p>
            </div>   
			<?php endwhile; wp_reset_query();?>
        </div>  
         
         <div class="family-outer">
         <div class="col-lg-8 col-md-8 col-xs-12 family-img family-img-page pull-left">           
			<div class="image-gallery ntracing-images">
              	 <?php query_posts('category_name=	family-fun2');?>
				<?php while(have_posts()) : the_post(); ?>
				<?php
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );
					$url = $thumb['0'];
				?>
              	<a data-imagelightbox="a" rel="next" href="" class="single-gallery ff-270">
					<img src="<?=$url?>" alt="">				
				</a>
                  <?php endwhile; wp_reset_query(); ?>	
             </div>
            
            </div>
			<?php query_posts('p=99'); ?>
			<?php while(have_posts()) : the_post(); ?>
				<div class="col-lg-4 col-md-4 col-xs-12 pull-right family-content">
					<h2><?php the_title(); ?></h2>
					<p><?php the_content(); ?></p>
				</div>   
			<?php endwhile; wp_reset_query();?>
		</div>
           
        </div>
     
     </div>
    </section>   
<!-- Family Fun style-->
    

<?php get_footer();?>