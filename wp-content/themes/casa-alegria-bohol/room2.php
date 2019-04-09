<?php
/**
 * Template Name: room2
 *
 */
?>

<?php get_header(); ?>
	<?php get_template_part( 'header-menu', get_post_format() );?>
    
	<?php get_template_part( 'nav-menu', get_post_format() );?>
    
<!-- Header  Slider style-->

<!-- Header  Slider style-->
  
 <!-- Header  Inner style-->
<section class="row final-inner-header">
 	<div class="container">
 		<h2 class="this-title">Rooms &amp; Suits</h2>
 	</div>
 </section>
 <section class="row final-breadcrumb">
 	<div class="container">
 		<ol class="breadcrumb">
 			<li><a href="index.html">Home</a></li>
 			<li class="active">Rooms &amp; Suits</li>
 		</ol>
 	</div>
 </section>
 
 <!-- About Resort style-->
<section class="container clearfix common-pad-inner about-info-box nasir-room-grid-header">

	<div class="row">
		<div class="col-lg-12 col-md-12 col-xs-12">
			<div class="sec-header3">
				<h2>Our Rooms and Suits</h2>
				<h3>Pick a room that best suits your taste and budget</h3>
			</div>
		</div>
	</div>
</section>     
<!-- About Resort style-->

<section class="row nasir-room-grid">
	<div class="container">
		<div class="row">
			<?php query_posts('category_name=rooms-and-suits');?>
			<?php while(have_posts()) : the_post(); ?>
			<div class="col-sm-4 nroom-grid">
				<?php
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );
					$url = $thumb['0'];
				?>	
				<a href="single-room.html" class="room-img"><img src="<?=$url;?>" alt=""></a>
				<div class="row this-conts">
					<div class="media">
						<div class="media-body this-title"><?php the_title(); ?></div>
						<div class="media-right">
							<?php $price =  get_post_meta(get_the_ID(), 'my_meta_box_room_price', true);?>
							$<?php echo $price; ?><small>Per Night</small>
						</div>
					</div>
					<p><?php the_content(); ?></p>
					<a href="single-room.html" class="read-more">view room<i class="fa fa-arrow-right"></i></a>
				</div>
			</div>
			<?php endwhile; wp_reset_query(); ?>	
		
		</div>
	</div>
</section>
  

<?php get_footer(); ?>