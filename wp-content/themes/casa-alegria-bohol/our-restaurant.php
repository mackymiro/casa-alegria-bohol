<?php
/**
 * Template Name: our-restaurant
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
 			<li class="active">FOOD and DRINKS</li>
 		</ol>
 	</div>
 </section>
<!-- Header  Slider style-->

<!-- Our Restaurant style-->
  <section class="container clearfix common-pad-inner about-info-box">
    
<div class="row">
    <div class="col-lg-12 col-md-12 col-xs-12">
      
      <div class="sec-header3" style="margin-top:-30px;">
         <h2>FOOD and DRINKS</h2>
		
		 <h3>Are also serve from the Seaside Bistro at the <span style="color:blue;"><a href="<?php bloginfo('url')?>/beach-house/">beach house</a></span>(under renovation) day and night.</h3>
		</div>
		
		<div class="sec-header3" style="margin-top:-10px; margin-bottom:30px;">
			 <h2 style="font-size:25px;">Breakfast is served at the <a href="<?php bloginfo('url')?>/gallery2/">Dining Area</a></h2>
		</div>
		<?php query_posts('p=546'); ?>
		<?php while(have_posts()) : the_post(); ?>
	   <div class="row rest-pad" style="margin-top:-10px; margin-left:5px;">
	   <div class="rest-content">
	   <h2 style="color:#a7cc38;"><?php the_title();?></h2>
	    <p style="margin-top:-30px;">
		   <?php the_content(); ?>
	    </p>
	    <?php endwhile; wp_reset_query();?>
        </div>
		</div>
		
		<?php query_posts('p=552'); ?>
		<?php while(have_posts()) : the_post(); ?>
	   <div class="row rest-pad" style="margin-top:-60px; margin-left:5px; margin-bottom:-70px;">
	   <div class="rest-content">
	   <h2 style="color:#a7cc38;"><?php the_title();?></h2>
	    <p style="margin-top:-30px;">
		   <?php the_content(); ?>
	    </p>
	    <?php endwhile; wp_reset_query();?>
        </div>
		</div>
	  </div>
    </div>
      
  
    </section> 
    
<!-- Our Restaurant style-->

<!--   Our Special Dinning  -->
  <section class="our-special-wrapper" style="margin-top:-70px;">
    <section class="container clearfix common-pad">
      <div class="sec-header3">
         <h2 style="margin-top:-60px;">Selection Of Filipino Breakfast</h2>
		 <h3>Pick a Filipino Breakfast that best suits your taste.</h3>
     </div>
      
       
        <div class="row">
       <div class="our-spec-outer">
		<?php 
					query_posts( array(
						'posts_per_page'  => '30',
						'cat' => '14',
						'order' => 'ASC'
					) );
				
				?>
		<?php while(have_posts()) : the_post(); ?>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
           <div class="item">
			 <?php
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );
				$url = $thumb['0'];
			 ?>
			<h2 style="font-size:15px;"><?php the_title();?></h2>
			<img src="<?=$url?>" alt="" class="img-responsive">
            
            <p><?php the_content(); ?></p>
			<?php $menuPrice =  get_post_meta(get_the_ID(), 'my_meta_box_menu_price', true);?>
			<p style="font-size:20px;"><strong>₱<?php echo $menuPrice; ?></strong></p>
            </div>
		</div>
        <?php endwhile; wp_reset_query(); ?>	
          
        </div> 
        </div>
        
      </section>
    </section>
    
    
 <!--   Our Special Dinning  -->
 
 <!--  Our Menu   -->
   <section class="our-menu-wrapper container clearfix common-pad">
       <div class="sec-header">
         <h2>Our Menu Prices</h2>
             <h3>Choose the menu number corresponding to your food choice.</h3>
     </div>
    
    <div class="our-menu-tab">
       
    <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Breakfast</a></li>
    
    </ul>
           
           <!-- Tab panes -->
  <div class="myTabContent tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
      <div class="tab-inner-cont">
        <!--<img src="../wp-conten/themes/casa-alegria-bohol/images/restaurant/6.jpg" alt="" class="img-responsive">-->
        <p style="margin-top:-40px;">Breakfast is served from 7:00 am - 10:00 am</p>
		<p>Filipino Breakfast</p>
			<?php query_posts('category_name=our-menu-prices');?>
			<?php while(have_posts()) : the_post(); ?>
			  <div class="media media-border">
			  <div class="media-left"><h2><?php the_title(); ?></h2><p><?php the_content(); ?></p></div>
			   <?php $menuPrice =  get_post_meta(get_the_ID(), 'my_meta_box_menu_price', true);?>
			  <div class="media-right"><p>₱<?php echo $menuPrice;?></p></div>
			  </div>
			<?php endwhile; wp_reset_query(); ?>
          
                 
        </div>
      </div>
   
   
  </div>
   </div>
    </section>
 <!--  Our Menu   -->
 
 

<?php get_footer(); ?>