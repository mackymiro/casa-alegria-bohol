<?php
/**
 * Template Name: bohol-attractions
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
 			<li class="active">Bohol Attractions</li>
 		</ol>
 	</div>
 </section>
<!-- Header  Slider style-->

<!-- Our Restaurant style-->
  <section class="container clearfix common-pad-inner about-info-box">
    
<div class="row">
    <div class="col-lg-12 col-md-12 col-xs-12">
      
      <div class="sec-header3" style="margin-top:-30px;">
         <h2>Bohol Attractions</h2>
		</div>
		<br>
		<br>
		<br>
		
		<?php query_posts('p=896'); ?>
		<?php while(have_posts()) : the_post(); ?>
	    <div class="row rest-pad">
        <div class="col-lg-5 col-md-6 col-xs-12">
        <div class="rest-content">
            <h2><?php the_title(); ?></h2>
            <p style="margin-top:30px;"><?php the_content(); ?></p>
            
            </div>
        </div>
		<?php
			$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
			$url = $thumb['0'];
		?>
        <div class="col-lg-7 col-md-6 col-xs-12"><img src="<?=$url; ?>" alt="" class="img-responsive"></div>
		
		</div>
	   <?php endwhile; wp_reset_query();?>
	   
	   <?php query_posts('p=899'); ?>
		<?php while(have_posts()) : the_post(); ?>
	    <div class="row rest-pad">
        <div class="col-lg-5 col-md-6 col-xs-12">
        <div class="rest-content">
            <h2><?php the_title(); ?></h2>
            <p style="margin-top:30px;"><?php the_content(); ?></p>
            
            </div>
        </div>
		<?php
			$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
			$url = $thumb['0'];
		?>
        <div class="col-lg-7 col-md-6 col-xs-12"><img src="<?=$url; ?>" alt="" class="img-responsive"></div>
		
		</div>
	   <?php endwhile; wp_reset_query();?>
	   
	    <?php query_posts('p=904'); ?>
		<?php while(have_posts()) : the_post(); ?>
	    <div class="row rest-pad">
        <div class="col-lg-5 col-md-6 col-xs-12">
        <div class="rest-content">
            <h2><?php the_title(); ?></h2>
            <p style="margin-top:30px;"><?php the_content(); ?></p>
            
            </div>
        </div>
		<?php
			$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
			$url = $thumb['0'];
		?>
        <div class="col-lg-7 col-md-6 col-xs-12"><img src="<?=$url; ?>" alt="" class="img-responsive"></div>
		
		</div>
	   <?php endwhile; wp_reset_query();?>
		
		
        </div>
	</div>
	  </div>
    </div>
      
  
    </section> 
    
<!-- Our Restaurant style-->
	
<?php get_footer(); ?>