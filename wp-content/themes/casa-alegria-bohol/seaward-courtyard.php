<?php
/**
 * Template Name: seaward-courtyard
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
 			<li class="active">News</li>
 		</ol>
 	</div>  
 </section> 
<!-- Header  Slider style-->


<!-- News style-->
  <section class="container clearfix common-pad-inner">
   <div class="row">
      <div class="col-md-4 col-sm-12 pull-right">
            
            
            
          <div class="single-sidebar-widget">         
              
           
              <!-- Categories style-->
              <div class="single-sidebar-widget-outer">
              <div class="sec-title-cat sec-title">
						<h2>Categories</h2>
					</div>
              
              <div class="categories">
						<ul>
							<li><a href="<?php bloginfo('url')?>/beach-house/">Beach House prepared for Seaside Cafe</a></li>
							<li><a href="<?php bloginfo('url')?>/activities/">Rio Verde Floating Retaurant</a></li>
							<li><a href="<?php bloginfo('url')?>/activities/">Visit to places</a></li>
							<li><a href="#">Propose Activities In Our Place</a></li>
							<li><a href="<?php bloginfo('url')?>/alona-beach/">White Beach: Alona Beach</a></li>
							<li><a href="<?php bloginfo('url')?>/seaward-courtyard/">Seaward Courtyard prepared for Event Venue</a></li>
							<li><a href="<?php bloginfo('url')?>/multipurpose-area/">Multi PurposeArea (development in progress)</a></li>
						</ul>
					</div>
              </div>
              <!-- Categories style-->
              
              <!-- Popular Posts style-->
             <div class="single-sidebar-widget-outer">
              <div class="sec-title">
						<h2>Popular Posts</h2>
					</div>
                <div class="popular-post">
						<ul>
							<?php query_posts('category_name=popular-post');?>
							<?php while(have_posts()) : the_post(); ?>
							<li class="img-cap-effect">
								<div class="img-box">
									 <?php
										$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
										$url = $thumb['0'];
									 ?>
                                    <a href="news-details.html"><img src="<?=$url; ?>" alt=""/></a>
									
								</div>
								<div class="content">
									<a href="#"><h4>Lots of activities planned</h4></a>
									<span>Aug 12,2015</span>
								</div>
							</li>
							 <?php endwhile; wp_reset_query(); ?>	
						</ul>
					</div> 
              </div>
              <!-- Popular Posts style-->
              
            
          </div>
            
       </div>
            
      <div class="col-md-8 col-sm-12 pull-right">
            
       <div class="single-post-wrapper">
            
           <!-- News 1  -->
			
           <article class="single-blog-post img-cap-effect">
				<?php while(have_posts()) : the_post(); ?>
				<h3><a href="news-details.html"><?php the_title();?></a></h3>
				
				<p style=""><?php the_content(); ?></p>
				<?php endwhile; wp_reset_query(); ?>
				<!--<a href="news-details.html" class="read-more btn submit">Read More</a>-->
			</article>
           <!-- News 1  -->
			
            
          </div>
       </div>      
      </div>
   </section> 
            
<!-- News style-->
<?php get_footer(); ?>