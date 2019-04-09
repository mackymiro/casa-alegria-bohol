<?php
/**
 * Template Name: offers
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
 			<li class="active">Offers &amp; Deals</li>
 		</ol>
 	</div>
 </section>
<!-- Header  Slider style-->

 <!-- Offers & Deals style-->
  <section class="container clearfix common-pad offer-main">
	<?php query_posts('p=706'); ?>
	<?php while(have_posts()) : the_post(); ?>
    <div class="sec-header" style="margin-top:-50px;">
         <h2><?php the_title(); ?></h2>
             <h3>Pick a room that best suits your taste and budget</h3>
	</div> 
         <p><?php the_content(); ?></p>
     </section> 
	<?php endwhile; wp_reset_query();?>
<!-- Offers & Deals style-->

 <div class="offer-deal-dark" style="margin-top:-50px;">
    <section class="container clearfix common-pad offer-main">
    <div class="row">
        <?php query_posts('p=413'); ?>
		<?php while(have_posts()) : the_post(); ?>
        <div class="col-lg-5 col-md-6  offer-deal">
        <div class="img-holder">
			<?php
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
				$url = $thumb['0'];
			?>
            <img src="<?=$url; ?>" alt="" class="img-responsive">
            <div class="overlay">
            <p><?php the_title();?><span>off</span></p>
            </div>
            </div>
        </div>
        <div class="col-lg-7 col-md-6 ">            
        <div class="offer-content">
		<?php $offerTxt =  get_post_meta(get_the_ID(), 'my_meta_box_price_offer', true);?>
        <h2><?php echo $offerTxt; ?></h2>
        <p><?php the_content(); ?></p>
         <div class="offer-b-main">
			
            <div class="offer-b-but"><a href="<?php bloginfo('url')?>/booking/" class="res-btn">Book Now</a></div>
			<?php $price =  get_post_meta(get_the_ID(), 'my_meta_box_room_price', true);?>
            <div class="offer-b-price"><p>₱<?php echo $price;?><span>Per Night</span></p></div>
            </div>
        </div>
        </div>
		<?php endwhile; wp_reset_query();?>
        </div>
     </section>
    </div>   
	
	  <!--   Spa Offer   -->
    <section class="container clearfix common-pad offer-main">
    <div class="row">
        <?php query_posts('p=418'); ?>
		<?php while(have_posts()) : the_post(); ?>
        <div class="col-lg-5 col-md-6  offer-deal">
        <div class="img-holder">
			<?php
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
				$url = $thumb['0'];
			?>
            <img src="<?=$url; ?>" alt="" class="img-responsive">
            <div class="overlay col-pink">
            <p><?php the_title();?><span>off</span></p>
            </div>
            </div>
        </div>
        <div class="col-lg-7 col-md-6 ">            
        <div class="offer-content">
		<?php $offerTxt =  get_post_meta(get_the_ID(), 'my_meta_box_price_offer', true);?>
        <h2><?php echo $offerTxt; ?></h2>
        <p style="line-height:10px;"><?php the_content(); ?></p>
         <div class="offer-b-main">
			
            <div class="offer-b-but"><a href="<?php bloginfo('url')?>/booking/" class="res-btn">Book Now</a></div>
			<?php $price =  get_post_meta(get_the_ID(), 'my_meta_box_room_price', true);?>
            <div class="offer-b-price"><p>₱<?php echo $price; ?><span>Per Night</span></p></div>
            </div>
        </div>
        </div>
		<?php endwhile; wp_reset_query();?>
		
        </div>
     </section>
 <!--   Spa Offer   -->
 
 <!--    Honeymoon Offer  -->
<div class="offer-deal-dark">
    <section class="container clearfix common-pad offer-main">
    <div class="row">
        
		<?php query_posts('p=441'); ?>
		<?php while(have_posts()) : the_post(); ?>
        <div class="col-lg-5 col-md-6  offer-deal">
        <div class="img-holder">
            <?php
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
				$url = $thumb['0'];
			?>
			<img src="<?=$url; ?>" alt="" class="img-responsive">
            <div class="overlay col-purple">
            <p><?php the_title(); ?><span>off</span></p>
            </div>
            </div>
        </div>
        <div class="col-lg-7 col-md-6 ">            
        <div class="offer-content">
        <?php $offerTxt =  get_post_meta(get_the_ID(), 'my_meta_box_price_offer', true);?>
        <h2><?php echo $offerTxt; ?></h2>
        <p><?php the_content(); ?></p>
         <div class="offer-b-main">
			
            <div class="offer-b-but"><a href="<?php bloginfo('url')?>/booking/" class="res-btn">Book Now</a></div>
			<?php $price =  get_post_meta(get_the_ID(), 'my_meta_box_room_price', true);?>
            <div class="offer-b-price"><p>₱<?php echo $price; ?><span>Per Night</span></p></div>
		</div>
        </div>
        </div>
		 <?php endwhile; wp_reset_query();?>
		
		
        </div>
     </section>
    </div> 
  <!--    Honeymoon Offer  -->  
  
  


<?php get_footer(); ?>