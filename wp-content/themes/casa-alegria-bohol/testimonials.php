<?php
/**
 * Template Name: testimonials
 *
 */
?>
<?php get_header();?>
	
	<?php get_template_part( 'header-menu', get_post_format() );?>
	
	<?php get_template_part( 'nav-menu', get_post_format() );?>
<!-- Header  Inner style-->
 <section class="row final-breadcrumb">
 	<div class="container">
 		<ol class="breadcrumb">
 			<li><a href="index.html">Home</a></li>
 			<li class="active">Testimonials</li>
 		</ol>
 	</div>
 </section>
<!-- Header  Slider style-->

<!-- About Resort style-->
  <section class="container clearfix common-pad-inner about-info-box">
    
<div class="row">
	<?php query_posts('p=101'); ?>
	<?php while(have_posts()) : the_post(); ?>
    <div class="col-lg-12 col-md-12 col-xs-12">
      
      <div class="sec-header3">
         <h2><?php the_title();?></h2>
            
         </div>
		<p><?php the_content(); ?></p>
	</div>
	<?php endwhile; wp_reset_query();?>
    </div>
    </section> 
    
<!-- About Resort style-->


<!-- Testimonials clients -->
 <section class="clearfix news-wrapper">
    <div class="container clearfix common-pad-test">
     <div class="row">
		<?php query_posts('category_name=testimonials');?>
		<?php while(have_posts()) : the_post(); ?>
        <div class="col-lg-12 col-md-12 testimonial-sec-p">
                <div class="media testimonial-p">
                    <div class="media-left">
						 <?php
							$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
							$url = $thumb['0'];
						 ?>
                        <a href="#">
                            <img src="<?=$url;?>"  alt="">
                        </a>
                    </div>
                    <div class="media-body">
                        <h3></h3>
                        <p><?php the_content(); ?></p>
						<?php $position =  get_post_meta(get_the_ID(), 'my_meta_box_text', true);?>
                        <a href="#">- <?php the_title(); ?><span> <?php echo $position; ?></span></a>
                      
                    </div>
                </div>
		</div>
	    <?php endwhile; wp_reset_query(); ?>
       
        </div>
     </div>
    
    
    </section>   
<!-- Testimonials clients -->  

<?php get_footer(); ?>