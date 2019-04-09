<?php
/**
 * Template Name: activities
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
 			<li class="active">Our Activities</li>
 		</ol>
 	</div>
 </section>
<!-- Header  Slider style-->

<!-- Resort Activities style-->
  <section class="container clearfix common-pad activities-main">
    <div class="sec-header3" style="margin-top:-50px;">
		<?php query_posts('p=59'); ?>
		<?php while(have_posts()) : the_post(); ?>
		<h2><?php the_title(); ?></h2>
             <!--<h3>Pick a room that best suits your taste and budget</h3>-->
         </div> 
		<p style="margin-top:-50px;"><?php the_content(); ?></p>
		<?php endwhile; wp_reset_query();?>
     <div class="row">
     
        <div class="activities-wrapper">
            <!-- One  -->
			<?php query_posts('p=61'); ?>
			<?php while(have_posts()) : the_post(); ?>
            <div class="activities-outer">
				 <?php
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
					$url = $thumb['0'];
				?>
				<div class="col-md-8 col-md-push-4"><img src="<?=$url;?>" alt="" class="img-responsive"></div>
				<div class="col-md-4 col-md-pull-8">
				 <div class="activities-content">
					<h2><?php the_title();?></h2>
					<p><?php the_content(); ?></p>
					<a href="<?php bloginfo('url')?>/bohol-attractions/" class="res-btn">See some places <i class="fa fa-arrow-right"></i></a></div>
				</div>
			</div>
			<?php endwhile; wp_reset_query();?>
            <!-- One  -->
            <!-- Two  -->
			<?php query_posts('p=64'); ?>
			<?php while(have_posts()) : the_post(); ?>
            <div class="activities-outer">
				<?php
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
					$url = $thumb['0'];
				?>
                <div class="col-md-8"><img src="<?=$url;?>" alt="" class="img-responsive"></div>
                <div class="col-md-4">
                     <div class="activities-content">
                         <h2><?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>
                     <a href="<?php bloginfo('url')?>/family-fun/" class="res-btn">See some places <i class="fa fa-arrow-right"></i></a></div>
                    </div>
			</div>
			<?php endwhile; wp_reset_query();?>
            <!-- Two  -->
           <!-- Three  -->
			<?php query_posts('p=66'); ?>
			<?php while(have_posts()) : the_post(); ?>
            <div class="activities-outer">
				<?php
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
					$url = $thumb['0'];
				?>
				<div class="col-md-8 col-md-push-4"><img src="<?=$url; ?>" alt="" class="img-responsive"></div>
				<div class="col-md-4 col-md-pull-8">
					 <div class="activities-content">
						 <h2><?php the_title(); ?></h2>
						<p><?php the_content(); ?></p>
						<!--<a href="tracing.html" class="res-btn">See some places <i class="fa fa-arrow-right"></i></a>-->
					 </div>
				</div>
			</div>
			<?php endwhile; wp_reset_query();?>
            <!-- Three  --> 
            
            <!-- Five  -->
			<?php query_posts('p=68'); ?>
			<?php while(have_posts()) : the_post(); ?>
            <div class="activities-outer">
			 <?php
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
					$url = $thumb['0'];
				?>
			 <div class="col-md-8 col-md-push-4"><img src="<?=$url?>" alt="" class="img-responsive"></div>
			   <div class="col-md-4 col-md-pull-8">
				 <div class="activities-content">
				 <h2><?php the_title(); ?></h2>
				 <p><?php the_content(); ?></p>
				 <!--<a href="suite-room.html" class="res-btn">See some places <i class="fa fa-arrow-right"></i></a></div>-->
				</div>
			  </div>
			<?php endwhile; wp_reset_query();?>
            <!-- Five  -->
            
         </div> 
         
         
      
      </div>
    
    </section> 
    
<!-- Resort Activities style-->

<?php get_footer();?>