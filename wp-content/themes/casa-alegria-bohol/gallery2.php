<?php
/**
 * Template Name: gallery2
 *
 */
?>
<?php get_header(); ?>
	<?php get_template_part( 'header-menu', get_post_format() );?>
	
    <?php get_template_part( 'nav-menu', get_post_format() );?>
  
<!-- Header  Slider style-->

<!-- Header  Inner style-->

 <section class="row final-breadcrumb">
 	<div class="container">
 		<ol class="breadcrumb">
 			<li><a href="index.html">Home</a></li>
 			<li class="active">Gallery</li>
 		</ol>
 	</div>
 </section>
<!-- Header  Slider style-->


<!-- About gallery style-->
<section class="container clearfix common-pad-inner about-info-box" style="margin-top:-50px;">
    <div class="row">
		<div class="col-lg-12 col-md-12 col-xs-12">
		  <?php query_posts('p=817'); ?>
		  <?php while(have_posts()) : the_post(); ?>
		  <div class="sec-header">
			 <h2><?php the_title(); ?></h2>
				 
			 </div>
		  <p style="margin-top:5px;"><?php the_content(); ?></p>
		  <?php endwhile; wp_reset_query();?>
		</div>
	</div>
</section> 
    
<!-- About gallery style-->

<!-- gallery     -->
 <section class="clearfix news-wrapper" style="margin-top:-50px;">
    <div class="container clearfix common-pad gallery-page-one" id="gallery">
     <!-- .gallery-filter -->
		<ul class="gallery-filter anim-5-all text-center" style="margin-top:-30px;">
			<li data-filter="all" class="active gallery-sorter">
				<span>All images</span>
			</li>
			<li data-filter=".balcony" class="gallery-sorter">
				<span>Lower & upper balcony</span>
			</li>
			<li data-filter=".drawing" class="gallery-sorter">
				<span>Dining & lounge</span>
			</li>
			<li data-filter=".roof" class="gallery-sorter">
				<span>Garden</span>
			</li>
			<li data-filter=".interoors" class="gallery-sorter">
				<span>Cottage & boardwalk</span>
			</li>
			<!--<li data-filter=".kitchen" class="gallery-sorter">
				<span>KItchen</span>
			</li>-->
			<li data-filter=".bedroom" class="gallery-sorter">
				<span>Bedroom</span>
			</li>
			<li data-filter=".bathroom" class="gallery-sorter">
				<span>Bathroom/toilet</span>
			</li>
			
		</ul><!-- /.gallery-filter -->
     
   <div class="row">
			<!-- .image-gallery -->
			<div class="image-gallery" data-filter-class="gallery-sorter">
				<!-- .single-gallery -->
				
				<?php 
					query_posts( array(
						'category_name'  => 'balcony',
						'order' => 'ASC'
					) );
				
				?>
				<?php while(have_posts()) : the_post(); ?>
			
				<div class="single-gallery anim-5-all balcony masonryImage mix span-4">
					<div class="img-holder">
						<?php
							$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );
							$url = $thumb['0'];
						?>
						<img src="<?=$url; ?>" alt="">
						                 
					</div>
				</div><!-- /.single-gallery -->
				<?php endwhile; wp_reset_query(); ?>
                
                <!-- .single-gallery -->
				
					<?php 
					query_posts( array(
						'category_name'  => 'lounge-dining-and-kitchen',
						'order' => 'ASC'
					) );
				
				?>
				<?php while(have_posts()) : the_post(); ?>
			
				<div class="single-gallery anim-5-all  drawing masonryImage mix span-4">
					<div class="img-holder">
						<?php
							$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );
							$url = $thumb['0'];
						?>
						<img src="<?=$url; ?>" alt="">
						                  
					</div>
				</div><!-- /.single-gallery -->
				<?php endwhile; wp_reset_query(); ?>


				
				 <!-- .single-gallery -->
				<?php query_posts('category_name=garden');?>
				<?php while(have_posts()) : the_post(); ?>
			
				<div class="single-gallery anim-5-all roof masonryImage mix span-4">
					<div class="img-holder">
						<?php
							$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );
							$url = $thumb['0'];
						?>
						<img src="<?=$url; ?>" alt="">
						                    
					</div>
				</div><!-- /.single-gallery -->
				<?php endwhile; wp_reset_query(); ?>
				
				 <!-- .single-gallery -->
				
				<?php 
						query_posts( array(
						'cat'=> '7',
						'order' => 'ASC',
						'posts_per_page'  => '30'
					) );
				
				?>
				<?php while(have_posts()) : the_post(); ?>
			
				<div class="single-gallery anim-5-all interoors masonryImage mix span-4">
					<div class="img-holder">
						<?php
							$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );
							$url = $thumb['0'];
						?>
						<img src="<?=$url; ?>" alt="">
						                   
					</div>
				</div><!-- /.single-gallery -->
				<?php endwhile; wp_reset_query(); ?>
				
				 <!-- .single-gallery -->
					<?php 
						query_posts( array(
						'category_name'  => 'bedroom'
					) );
				
				?>
				<?php while(have_posts()) : the_post(); ?>
			
				<div class="single-gallery anim-5-all bedroom masonryImage mix span-4">
					<div class="img-holder">
						<?php
							$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );
							$url = $thumb['0'];
						?>
						<img src="<?=$url; ?>" alt="">
						                    
					</div>
				</div><!-- /.single-gallery -->
				<?php endwhile; wp_reset_query(); ?>
				
				
				 <!-- .single-gallery -->
				<?php 
						query_posts( array(
						'category_name'  => 'bathroomtoilet',
						'order' => 'ASC'
					) );
				
				?>
				<?php while(have_posts()) : the_post(); ?>
			
				<div class="single-gallery anim-5-all bathroom masonryImage mix span-4">
					<div class="img-holder">
						<?php
							$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );
							$url = $thumb['0'];
						?>
						<img src="<?=$url; ?>" alt="">
						                    
					</div>
				</div><!-- /.single-gallery -->
				<?php endwhile; wp_reset_query(); ?>
				
			</div><!-- /.image-gallery -->
		</div>
     </div>
    </section>   
<!-- gallery -->   

<?php get_footer(); ?>