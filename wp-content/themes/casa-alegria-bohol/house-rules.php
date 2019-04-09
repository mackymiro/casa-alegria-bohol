<?php
/**
 * Template Name: house-rules
 *
 */
?>

<?php get_header(); ?>
	<?php get_template_part( 'header-menu', get_post_format() );?>
    
	<?php get_template_part( 'nav-menu', get_post_format() );?>
    
<!-- Header  Slider style-->

<!-- Header  Slider style-->
  
 <!-- Header  Inner style-->

 <section class="row final-breadcrumb">
 	<div class="container">
 		<ol class="breadcrumb">
 			<li><a href="index.html">Home</a></li>
 			<li class="active">House Rules/Policy</li>
 		</ol>
 	</div>
 </section>
 
 <!-- About Resort style-->
<section class="container clearfix common-pad-inner about-info-box nasir-room-grid-header" >
	<div class="row">
		
		<div class="col-lg-12 col-md-12 col-xs-12" style="margin-top:-50px;">
			<div class="sec-header3">
				<h2><?php the_title(); ?></h2>
			</div>
			<p style="">
				<?php
					$id = $post->ID;
					$post = get_post($id); 
					$content = apply_filters('the_content', $post->post_content); 
					echo $content;
					
				?>
			</p>
		</div>
		
		
	</div>
</section>     
<!-- About Resort style-->

  

<?php get_footer(); ?>