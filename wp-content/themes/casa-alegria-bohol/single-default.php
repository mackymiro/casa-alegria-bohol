<?php get_header(); ?>

	<?php get_template_part( 'header-menu', get_post_format() );?>
	
	<?php get_template_part( 'nav-menu', get_post_format() );?>
	<?php 
		$slug = basename(get_permalink());
		
	?>
	
<!-- Header  Slider style-->
  
 <!-- Header  Inner style-->
 <section class="row final-breadcrumb">
 	<div class="container">
 		<ol class="breadcrumb">
 			<li><a href="index.html">Home</a></li>
			<?php if($slug == "room1a"): ?>
 			<li class="active"><?php the_title();?></li>
			<?php endif; ?>
			
			<?php if($slug == "room2a"): ?>
 			<li class="active"><?php the_title();?></li>
			<?php endif; ?>
			
			<?php if($slug == "room2b"): ?>
 			<li class="active"><?php the_title();?></li>
			<?php endif; ?>
			
			<?php if($slug == "room2c"): ?>
 			<li class="active"><?php the_title();?></li>
			<?php endif; ?>
			
			<?php if($slug == "room2d"): ?>
 			<li class="active"><?php the_title();?></li>
			<?php endif; ?>
 		</ol>
 	</div>
 </section>
<!-- Header  Slider style-->

<!-- News style-->
  <section class="container clearfix common-pad-inner">
   <div class="row">
      <div class="col-md-4 col-md-push-8">
       
          <div class="single-sidebar-widget sroom-sidebar">         
              
			<!-- Booking Form style-->
			<?php if($slug == "room1a"): ?>
              <div class="book-r-form">
				  <?php while(have_posts()) : the_post(); ?>
                  <div class="room-price">
                  <h6>Regular rate</h6>
				   <?php $price =  get_post_meta(get_the_ID(), 'my_meta_box_room_price', true);?>
                  <p>₱<?php echo $price; ?><span>/ night</span></p>
                  
                  </div>
                   <?php endwhile; wp_reset_query(); ?>
              
              </div>
			  <?php endif; ?>
              <!-- Booking Form style-->
			  
			  <!-- Booking Form style-->
			<?php if($slug == "room2a"): ?>
              <div class="book-r-form">
				  <?php while(have_posts()) : the_post(); ?>
                  <div class="room-price">
                  <h6>regular rate</h6>
				   <?php $price =  get_post_meta(get_the_ID(), 'my_meta_box_room_price', true);?>
                  <p>₱<?php echo $price; ?><span>/ night</span></p>
                  
                  </div>
                   <?php endwhile; wp_reset_query(); ?>
              
              </div>
			  <?php endif; ?>
              <!-- Booking Form style-->
			  
			<!-- Booking Form style-->
			<?php if($slug == "room2b"): ?>
              <div class="book-r-form">
				  <?php while(have_posts()) : the_post(); ?>
                  <div class="room-price">
                  <h6>regular rate</h6>
				   <?php $price =  get_post_meta(get_the_ID(), 'my_meta_box_room_price', true);?>
                  <p>₱<?php echo $price; ?><span>/ night</span></p>
                  
                  </div>
                   <?php endwhile; wp_reset_query(); ?>
              
              </div>
			  <?php endif; ?>
              <!-- Booking Form style-->
			  
			  <!-- Booking Form style-->
			<?php if($slug == "room2c"): ?>
              <div class="book-r-form">
				  <?php while(have_posts()) : the_post(); ?>
                  <div class="room-price">
                  <h6>regular rate</h6>
				   <?php $price =  get_post_meta(get_the_ID(), 'my_meta_box_room_price', true);?>
                  <p>₱<?php echo $price; ?><span>/ day</span></p>
                  
                  </div>
                   <?php endwhile; wp_reset_query(); ?>
              
              </div>
			  <?php endif; ?>
              <!-- Booking Form style-->
              
			  
			    <!-- Booking Form style-->
			<?php if($slug == "room2d"): ?>
              <div class="book-r-form">
				  <?php while(have_posts()) : the_post(); ?>
                  <div class="room-price">
                  <h6>starting from</h6>
				   <?php $price =  get_post_meta(get_the_ID(), 'my_meta_box_room_price', true);?>
                  <p>₱<?php echo $price; ?><span>/ day</span></p>
                  
                  </div>
                   <?php endwhile; wp_reset_query(); ?>
              
              </div>
			  <?php endif; ?>
              <!-- Booking Form style-->
              
             
              
              <!-- Budget Rooms style-->
             <div class="single-sidebar-widget-outer">
              <div class="sec-title">
					<h2>Other Rooms</h2>
				</div>
				<?php if($slug == "room1a"): ?>
                <div class="popular-post">
						<ul>
							<?php 
									query_posts( array(
										'category_name'  => 'rooms-and-suits',
										 'post__not_in' => array(209)
									));
								
								?>
							
							<?php while(have_posts()) : the_post(); ?>
							
								<li class="img-cap-effect">
									<div class="img-box">
										  <?php
											 $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
											 $url = $thumb['0'];
										  ?>
										<a href="<?php bloginfo('url')?>/single/<?php the_slug(); ?>"><img src="<?=$url; ?>" alt=""/></a>
										
									</div>
									<div class="content">
										 <?php $price =  get_post_meta(get_the_ID(), 'my_meta_box_room_price', true);?>
										<a href="<?php bloginfo('url')?>/single/<?php the_slug(); ?>"><h4 style="color:#a7cc38;"><?php the_title();?></h4></a>
										<h6>₱<?php echo $price; ?> <span>Per Night</span></h6>
									</div>
								</li>
							<?php endwhile; wp_reset_query(); ?>
						</ul>
					</div> 
					<?php endif; ?>
					
				<?php if($slug == "room2a"): ?>
                <div class="popular-post">
						<ul>
							<?php 
									query_posts( array(
										'category_name'  => 'rooms-and-suits',
										 'post__not_in' => array(207)
									));
								
								?>
								
							<?php while(have_posts()) : the_post(); ?>
							
								<li class="img-cap-effect">
									<div class="img-box">
										  <?php
											 $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
											 $url = $thumb['0'];
										  ?>
										<a href="<?php bloginfo('url')?>/single/<?php the_slug(); ?>"><img src="<?=$url; ?>" alt=""/></a>
										
									</div>
									<div class="content">
										 <?php $price =  get_post_meta(get_the_ID(), 'my_meta_box_room_price', true);?>
										<a href="<?php bloginfo('url')?>/single/<?php the_slug(); ?>"><h4 style="color:#a7cc38;"><?php the_title();?></h4></a>
										<h6>₱<?php echo $price; ?> <span>Per Night</span></h6>
									</div>
								</li>
							<?php endwhile; wp_reset_query(); ?>
						</ul>
					</div> 
					<?php endif; ?>
					
				<?php if($slug == "room2b"): ?>
                <div class="popular-post">
						<ul>
							<?php 
									query_posts( array(
										'category_name'  => 'rooms-and-suits',
										 'post__not_in' => array(109)
									));
								
								?>
							
							<?php while(have_posts()) : the_post(); ?>
							
								<li class="img-cap-effect">
									<div class="img-box">
										  <?php
											 $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
											 $url = $thumb['0'];
										  ?>
										<a href="<?php bloginfo('url')?>/single/<?php the_slug(); ?>"><img src="<?=$url; ?>" alt=""/></a>
										
									</div>
									<div class="content">
										 <?php $price =  get_post_meta(get_the_ID(), 'my_meta_box_room_price', true);?>
										<a href="<?php bloginfo('url')?>/single/<?php the_slug(); ?>"><h4 style="color:#a7cc38;"><?php the_title();?></h4></a>
										<h6>₱<?php echo $price; ?> <span>Per Night</span></h6>
									</div>
								</li>
							<?php endwhile; wp_reset_query(); ?>
						</ul>
					</div> 
					<?php endif; ?>
					
					<?php if($slug == "room2c"): ?>
                <div class="popular-post">
						<ul>
							<?php 
									query_posts( array(
										'category_name'  => 'rooms-and-suits',
										 'post__not_in' => array(107)
									));
								
								?>
								
							<?php while(have_posts()) : the_post(); ?>
							
								<li class="img-cap-effect">
									<div class="img-box">
										  <?php
											 $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
											 $url = $thumb['0'];
										  ?>
										<a href="<?php bloginfo('url')?>/single/<?php the_slug(); ?>"><img src="<?=$url; ?>" alt=""/></a>
										
									</div>
									<div class="content">
										 <?php $price =  get_post_meta(get_the_ID(), 'my_meta_box_room_price', true);?>
										<a href="<?php bloginfo('url')?>/single/<?php the_slug(); ?>"><h4 style="color:#a7cc38;"><?php the_title();?></h4></a>
										<h6>₱<?php echo $price; ?> <span>Per Night</span></h6>
									</div>
								</li>
							<?php endwhile; wp_reset_query(); ?>
						</ul>
					</div> 
					<?php endif; ?>
					
					<?php if($slug == "room2d"): ?>
                <div class="popular-post">
						<ul>
							<?php 
									query_posts( array(
										'category_name'  => 'rooms-and-suits',
										 'post__not_in' => array(469)
									));
								
								?>
								
							<?php while(have_posts()) : the_post(); ?>
							
								<li class="img-cap-effect">
									<div class="img-box">
										  <?php
											 $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
											 $url = $thumb['0'];
										  ?>
										<a href="<?php bloginfo('url')?>/single/<?php the_slug(); ?>"><img src="<?=$url; ?>" alt=""/></a>
										
									</div>
									<div class="content">
										 <?php $price =  get_post_meta(get_the_ID(), 'my_meta_box_room_price', true);?>
										<a href="<?php bloginfo('url')?>/single/<?php the_slug(); ?>"><h4 style="color:#a7cc38;"><?php the_title();?></h4></a>
										<h6>₱<?php echo $price; ?> <span>Per Night</span></h6>
									</div>
								</li>
							<?php endwhile; wp_reset_query(); ?>
						</ul>
					</div> 
					<?php endif; ?>
              </div>
              <!-- Budget Rooms style-->
			 
              
          </div>
        
       </div>
	  <?php if($slug == "room1a"): ?>
      <div class="col-md-8 col-md-pull-4">
       <?php while(have_posts()) : the_post(); ?>
       <div class="single-room-wrapper">
         <!-- Rooms Slider style-->
          <div class="room-slider-wrapper">
           <div class="single-r-wrapper">
              <div class="single-sl-room">
			   <?php
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
				$url = $thumb['0'];
			   ?>
			 
			  <?php
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
				$url1 = $thumb['0'];
			 ?>
			 
             <div class="owl-itemm" data-hash="zero"><img src="<?=$url; ?>" alt=""></div>
            
			
			 
			 <?php query_posts('p=667'); ?>
			<?php while(have_posts()) : the_post(); ?>
				<?php
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
				 $room1a = $thumb['0'];
			    ?>
   			 <div class="owl-itemm" data-hash="<?php echo $post->ID;?>"><img src="<?=$room1a; ?>" alt=""></div>
             <?php endwhile; wp_reset_query();?>
			 
			<?php query_posts('p=674'); ?>
			<?php while(have_posts()) : the_post(); ?>
				<?php
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
					$room1a = $thumb['0'];
			    ?>
			 <div class="owl-itemm" data-hash="<?php echo $post->ID;?>"><img src="<?=$room1a; ?>" alt=""></div>
               <?php endwhile; wp_reset_query();?>
			   
			   <?php query_posts('p=710'); ?>
			 <?php while(have_posts()) : the_post(); ?>
			 <?php
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
					$room1a = $thumb['0'];
			    ?>
			  <div class="owl-itemm" data-hash="<?php echo $post->ID;?>"><img src="<?=$room1a; ?>" alt=""></div>
               <?php endwhile; wp_reset_query();?>
			  
			  <?php query_posts('p=715'); ?>
			 <?php while(have_posts()) : the_post(); ?>
			 <?php
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
					$room1a = $thumb['0'];
			    ?>
			  <div class="owl-itemm" data-hash="<?php echo $post->ID;?>"><img src="<?=$room1a; ?>" alt=""></div>   
				<?php endwhile; wp_reset_query();?>
				
				 <?php query_posts('p=721'); ?>
			 <?php while(have_posts()) : the_post(); ?>
			 <?php
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
					$room1a = $thumb['0'];
			    ?>
			  <div class="owl-itemm" data-hash="<?php echo $post->ID;?>"><img src="<?=$room1a; ?>" alt=""></div>   
				<?php endwhile; wp_reset_query();?>
			</div>  
             
				  <a class="button secondary url" href="#zero"><img src="<?=$url1;?>" alt=""></a> 
				   <?php query_posts('p=667'); ?>
					<?php while(have_posts()) : the_post(); ?>
					  <?php
						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
						$room1aThumb = $thumb['0'];
					   ?>
				  <a class="button secondary url" href="#<?php echo $post->ID;?>"><img src="<?=$room1aThumb; ?>" alt=""></a> 
				   <?php endwhile; wp_reset_query();?>
				   
				   <?php query_posts('p=674'); ?>
			      <?php while(have_posts()) : the_post(); ?>
					<?php
						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
						$room1aThumb = $thumb['0'];
					   ?>
					<a class="button secondary url" href="#<?php echo $post->ID;?>"><img src="<?=$room1aThumb; ?>" alt=""></a> 
				   <?php endwhile; wp_reset_query();?>
				  
				    <?php query_posts('p=710'); ?>
					<?php while(have_posts()) : the_post(); ?>
					<?php
						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
						$room1aThumb = $thumb['0'];
					   ?>
					<a class="button secondary url" href="#<?php echo $post->ID;?>"><img src="<?=$room1aThumb; ?>" alt=""></a> 
				  <?php endwhile; wp_reset_query();?>
				  
				   <?php query_posts('p=715'); ?>
				<?php while(have_posts()) : the_post(); ?>
				  <?php
						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
						$room1aThumb = $thumb['0'];
					   ?>
				  <a class="button secondary url" href="#<?php echo $post->ID;?>"><img src="<?=$room1aThumb; ?>" alt=""></a> 
			  	<?php endwhile; wp_reset_query();?>
				
				  <?php query_posts('p=721'); ?>
				<?php while(have_posts()) : the_post(); ?>
				  <?php
						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
						$room1aThumb = $thumb['0'];
					   ?>
				  <a class="button secondary url" href="#<?php echo $post->ID;?>"><img src="<?=$room1aThumb; ?>" alt=""></a> 
			  	<?php endwhile; wp_reset_query();?>
               </div>
              
              </div>
           
          <!-- Rooms Slider style-->
           
           <!-- Description of Room style-->
           <div class="room-dec-wrapper">
		    <h1 style="color:#a7cc38;"><?php the_title();?></h1>
            <h2>Description of Room</h2>
               <p style="margin-top:-30px;"><?php the_content(); ?></p>
           </div>
           <!-- Description of Room style-->
           
           <!-- Room Facilities style-->
           <div class="room-fac-wrapper">
           <h2>Room Facilities</h2>
              <div class="row">
               <div class="ro-facilitie">
               <ul class="clearfix">
			   <li><div class="facilitie-i-box">
                           <h3>Ensuite</h3>
                           <span><img src="../wp-content/themes/casa-alegria-bohol/images/rooms/ensuite.png" alt=""></span>
                       </div>
                   </li>
               <li><div class="facilitie-i-box">
                           <h3>TV LCD</h3>
                           <span><img src="../wp-content/themes/casa-alegria-bohol/images/rooms/icon1.gif" alt=""></span>
                       </div>
                   </li>
               <li><div class="facilitie-i-box">
                           <h3>Breakfast</h3>
                           <span><img src="../wp-content/themes/casa-alegria-bohol/images/rooms/icon2.gif" alt=""></span>
                       </div>
                   </li>
				</ul>
				<br>
				<ul class="clearfix">
                   <li><div class="facilitie-i-box">
                           <h3>free parking</h3>
                           <span><img src="../wp-content/themes/casa-alegria-bohol/images/rooms/icon3.gif" alt=""></span>
                       </div>
                   </li>
                   <li><div class="facilitie-i-box">
                           <h3>wi-fi service</h3>
                           <span><img src="../wp-content/themes/casa-alegria-bohol/images/rooms/icon4.gif" alt=""></span>
                       </div>
                   </li>
                   <li><div class="facilitie-i-box">
                           <h3>AC Room</h3>
                           <span><img src="../wp-content/themes/casa-alegria-bohol/images/rooms/icon5.gif" alt=""></span>
                       </div>
                   </li>
				   
               
               </ul>
               </div>
                  </div>
               
               
           </div>
           <!-- Room Facilities style-->
           
           <!-- Room Overview style-->
           <div class="room-overview">
           <h2>Room Overview</h2>
           
               <div class="table-responsive"> <table class="table table-striped"> <colgroup> <col class="col-xs-1"> <col class="col-xs-7"> </colgroup><tbody>
                   <?php $occupancy =  get_post_meta(get_the_ID(), 'my_meta_occupancy', true);?>
				   <?php $view =  get_post_meta(get_the_ID(), 'my_meta_view', true);?>
				   <?php $roomService =  get_post_meta(get_the_ID(), 'my_meta_room_service', true);?>
				   <?php $terraces =  get_post_meta(get_the_ID(), 'my_meta_terraces', true);?>
				   <?php $freePickup =  get_post_meta(get_the_ID(), 'my_meta_free_pickup_facility', true);?>
				   <?php $internetFree =  get_post_meta(get_the_ID(), 'my_meta_internet_free', true);?>
				    <?php $amenities =  get_post_meta(get_the_ID(), 'my_meta_amenities', true);?>
				   
				   <tr> <th scope="row"> <code>Occupancy:</code> </th> <td><?php echo $occupancy; ?></td> </tr>
                   <!--<tr> <th scope="row"> <code>Size : </code> </th> <td>600 sq. feet</td> </tr>-->
                   <tr> <th scope="row"> <code>View :</code> </th> <td><?php echo $view;?></td> </tr> 
                   <tr> <th scope="row"> <code>Room Service :</code> </th> <td><?php echo $roomService; ?></td> </tr> 
                   <tr> <th scope="row"> <code>Terraces :</code> </th> <td><?php echo $terraces;?></td> </tr>
                   <tr> <th scope="row"> <code>Free Pickup Facility :</code> </th> <td><?php echo $freePickup; ?></td> </tr>
                   <tr> <th scope="row"> <code>Internet Free :</code> </th> <td><?php echo $internetFree; ?></td> </tr>
                   <tr> <th scope="row"> <code>Amenities  :</code> </th> <td><?php echo $amenities; ?></td> </tr>
                   </tbody> </table> </div>
               
               
               
         
           <a href="<?php bloginfo('url')?>/booking/" class="res-btn">Book NOw this room <i class="fa fa-arrow-right"></i></a>   
           
		   </div>
           
           <!-- Room Overview style-->
          
           <!-- Have any question style-->
           <div class="question-wrapper">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><h2>Have any question</h2></div>
               <div style="margin-left:30px;"><?php echo do_shortcode('[contact-form-7 id="314" title="Contact form 1"]'); ?> </div>
               
           </div>
           <!-- Have any question style-->
           
           
          </div>
		  <?php endwhile; wp_reset_query(); ?>
       </div>
	   <?php endif; ?>
	   
	   <?php if($slug == "room2a"): ?>
      <div class="col-md-8 col-md-pull-4">
       <?php while(have_posts()) : the_post(); ?>
       <div class="single-room-wrapper">
         <!-- Rooms Slider style-->
          <div class="room-slider-wrapper">
           <div class="single-r-wrapper">
              <div class="single-sl-room">
			   <?php
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
				$url = $thumb['0'];
			   ?>
			 
			  <?php
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
				$url1 = $thumb['0'];
			 ?>
			 
             <div class="owl-itemm" data-hash="zero"><img src="<?=$url; ?>" alt=""></div>
            
			
			 
			 <?php query_posts('p=667'); ?>
			<?php while(have_posts()) : the_post(); ?>
				<?php
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
				 $room1a = $thumb['0'];
			    ?>
   			 <div class="owl-itemm" data-hash="<?php echo $post->ID;?>"><img src="<?=$room1a; ?>" alt=""></div>
             <?php endwhile; wp_reset_query();?>
			 
			<?php query_posts('p=674'); ?>
			<?php while(have_posts()) : the_post(); ?>
				<?php
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
					$room1a = $thumb['0'];
			    ?>
			 <div class="owl-itemm" data-hash="<?php echo $post->ID;?>"><img src="<?=$room1a; ?>" alt=""></div>
               <?php endwhile; wp_reset_query();?>
			   
			   <?php query_posts('p=710'); ?>
			 <?php while(have_posts()) : the_post(); ?>
			 <?php
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
					$room1a = $thumb['0'];
			    ?>
			  <div class="owl-itemm" data-hash="<?php echo $post->ID;?>"><img src="<?=$room1a; ?>" alt=""></div>
               <?php endwhile; wp_reset_query();?>
			  
			  <?php query_posts('p=715'); ?>
			 <?php while(have_posts()) : the_post(); ?>
			 <?php
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
					$room1a = $thumb['0'];
			    ?>
			  <div class="owl-itemm" data-hash="<?php echo $post->ID;?>"><img src="<?=$room1a; ?>" alt=""></div>   
				<?php endwhile; wp_reset_query();?>
				
				 <?php query_posts('p=721'); ?>
			 <?php while(have_posts()) : the_post(); ?>
			 <?php
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
					$room1a = $thumb['0'];
			    ?>
			  <div class="owl-itemm" data-hash="<?php echo $post->ID;?>"><img src="<?=$room1a; ?>" alt=""></div>   
				<?php endwhile; wp_reset_query();?>
			</div>  
             
				  <a class="button secondary url" href="#zero"><img src="<?=$url1;?>" alt=""></a> 
				   <?php query_posts('p=667'); ?>
					<?php while(have_posts()) : the_post(); ?>
					  <?php
						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
						$room1aThumb = $thumb['0'];
					   ?>
				  <a class="button secondary url" href="#<?php echo $post->ID;?>"><img src="<?=$room1aThumb; ?>" alt=""></a> 
				   <?php endwhile; wp_reset_query();?>
				   
				   <?php query_posts('p=674'); ?>
			      <?php while(have_posts()) : the_post(); ?>
					<?php
						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
						$room1aThumb = $thumb['0'];
					   ?>
					<a class="button secondary url" href="#<?php echo $post->ID;?>"><img src="<?=$room1aThumb; ?>" alt=""></a> 
				   <?php endwhile; wp_reset_query();?>
				  
				    <?php query_posts('p=710'); ?>
					<?php while(have_posts()) : the_post(); ?>
					<?php
						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
						$room1aThumb = $thumb['0'];
					   ?>
					<a class="button secondary url" href="#<?php echo $post->ID;?>"><img src="<?=$room1aThumb; ?>" alt=""></a> 
				  <?php endwhile; wp_reset_query();?>
				  
				   <?php query_posts('p=715'); ?>
				<?php while(have_posts()) : the_post(); ?>
				  <?php
						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
						$room1aThumb = $thumb['0'];
					   ?>
				  <a class="button secondary url" href="#<?php echo $post->ID;?>"><img src="<?=$room1aThumb; ?>" alt=""></a> 
			  	<?php endwhile; wp_reset_query();?>
				
				  <?php query_posts('p=721'); ?>
				<?php while(have_posts()) : the_post(); ?>
				  <?php
						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
						$room1aThumb = $thumb['0'];
					   ?>
				  <a class="button secondary url" href="#<?php echo $post->ID;?>"><img src="<?=$room1aThumb; ?>" alt=""></a> 
			  	<?php endwhile; wp_reset_query();?>
               </div>
              
              </div>
           
          <!-- Rooms Slider style-->
           
           <!-- Description of Room style-->
           <div class="room-dec-wrapper">
		    <h1 style="color:#a7cc38;"><?php the_title();?></h1>
            <h2>Description of Room</h2>
               <p style="margin-top:-30px;"><?php the_content(); ?></p>
           </div>
           <!-- Description of Room style-->
           
           <!-- Room Facilities style-->
           <div class="room-fac-wrapper">
           <h2>Room Facilities</h2>
              <div class="row">
               <div class="ro-facilitie">
               <ul class="clearfix">
			    <li><div class="facilitie-i-box">
                           <h3>Ensuite</h3>
                           <span><img src="../wp-content/themes/casa-alegria-bohol/images/rooms/ensuite.png" alt=""></span>
                       </div>
                   </li>
               <li><div class="facilitie-i-box">
                           <h3>TV LCD</h3>
                           <span><img src="../wp-content/themes/casa-alegria-bohol/images/rooms/icon1.gif" alt=""></span>
                       </div>
                   </li>
               <li><div class="facilitie-i-box">
                           <h3>Breakfast</h3>
                           <span><img src="../wp-content/themes/casa-alegria-bohol/images/rooms/icon2.gif" alt=""></span>
                       </div>
                   </li>
			    </ul>
				<ul class="clearfix">
                   <li><div class="facilitie-i-box">
                           <h3>free parking</h3>
                           <span><img src="../wp-content/themes/casa-alegria-bohol/images/rooms/icon3.gif" alt=""></span>
                       </div>
                   </li>
                   <li><div class="facilitie-i-box">
                           <h3>wi-fi service</h3>
                           <span><img src="../wp-content/themes/casa-alegria-bohol/images/rooms/icon4.gif" alt=""></span>
                       </div>
                   </li>
                   <li><div class="facilitie-i-box">
                           <h3>AC Room</h3>
                           <span><img src="../wp-content/themes/casa-alegria-bohol/images/rooms/icon5.gif" alt=""></span>
                       </div>
                   </li>
               
               </ul>
               </div>
                  </div>
               
               
           </div>
           <!-- Room Facilities style-->
           
           <!-- Room Overview style-->
           <div class="room-overview">
           <h2>Room Overview</h2>
           
                <div class="table-responsive"> <table class="table table-striped"> <colgroup> <col class="col-xs-1"> <col class="col-xs-7"> </colgroup><tbody>
                   <?php $occupancy =  get_post_meta(get_the_ID(), 'my_meta_occupancy', true);?>
				   <?php $view =  get_post_meta(get_the_ID(), 'my_meta_view', true);?>
				   <?php $roomService =  get_post_meta(get_the_ID(), 'my_meta_room_service', true);?>
				   <?php $terraces =  get_post_meta(get_the_ID(), 'my_meta_terraces', true);?>
				   <?php $freePickup =  get_post_meta(get_the_ID(), 'my_meta_free_pickup_facility', true);?>
				   <?php $internetFree =  get_post_meta(get_the_ID(), 'my_meta_internet_free', true);?>
				    <?php $amenities =  get_post_meta(get_the_ID(), 'my_meta_amenities', true);?>
				   
				   <tr> <th scope="row"> <code>Occupancy:</code> </th> <td><?php echo $occupancy; ?></td> </tr>
                   <!--<tr> <th scope="row"> <code>Size : </code> </th> <td>600 sq. feet</td> </tr>-->
                   <tr> <th scope="row"> <code>View :</code> </th> <td><?php echo $view;?></td> </tr> 
                   <tr> <th scope="row"> <code>Room Service :</code> </th> <td><?php echo $roomService; ?></td> </tr> 
                   <tr> <th scope="row"> <code>Terraces :</code> </th> <td><?php echo $terraces;?></td> </tr>
                   <tr> <th scope="row"> <code>Free Pickup Facility :</code> </th> <td><?php echo $freePickup; ?></td> </tr>
                   <tr> <th scope="row"> <code>Internet Free :</code> </th> <td><?php echo $internetFree; ?></td> </tr>
                   <tr> <th scope="row"> <code>Amenities  :</code> </th> <td><?php echo $amenities; ?></td> </tr>
                   </tbody> </table> </div>
               
               
           
           <a href="<?php bloginfo('url')?>/booking/" class="res-btn">Book NOw this room <i class="fa fa-arrow-right"></i></a>   
           </div>
           
           <!-- Room Overview style-->
          
           <!-- Have any question style-->
           <div class="question-wrapper">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><h2>Have any question</h2></div>
				<div style="margin-left:30px;"><?php echo do_shortcode('[contact-form-7 id="314" title="Contact form 1"]'); ?></div>
           </div>
           <!-- Have any question style-->
           
           
          </div>
		  <?php endwhile; wp_reset_query(); ?>
       </div>
	   <?php endif; ?>
	   
	  <?php if($slug == "room2b"): ?>
      <div class="col-md-8 col-md-pull-4">
       <?php while(have_posts()) : the_post(); ?>
       <div class="single-room-wrapper">
         <!-- Rooms Slider style-->
           <div class="room-slider-wrapper">
           <div class="single-r-wrapper">
              <div class="single-sl-room">
			   <?php
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
				$url = $thumb['0'];
			   ?>
			 
			  <?php
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
				$url1 = $thumb['0'];
			 ?>
			 
             <div class="owl-itemm" data-hash="zero"><img src="<?=$url; ?>" alt=""></div>
            
			
			 
			 <?php query_posts('p=667'); ?>
			<?php while(have_posts()) : the_post(); ?>
				<?php
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
				 $room1a = $thumb['0'];
			    ?>
   			 <div class="owl-itemm" data-hash="<?php echo $post->ID;?>"><img src="<?=$room1a; ?>" alt=""></div>
             <?php endwhile; wp_reset_query();?>
			 
			<?php query_posts('p=674'); ?>
			<?php while(have_posts()) : the_post(); ?>
				<?php
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
					$room1a = $thumb['0'];
			    ?>
			 <div class="owl-itemm" data-hash="<?php echo $post->ID;?>"><img src="<?=$room1a; ?>" alt=""></div>
               <?php endwhile; wp_reset_query();?>
			   
			   <?php query_posts('p=710'); ?>
			 <?php while(have_posts()) : the_post(); ?>
			 <?php
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
					$room1a = $thumb['0'];
			    ?>
			  <div class="owl-itemm" data-hash="<?php echo $post->ID;?>"><img src="<?=$room1a; ?>" alt=""></div>
               <?php endwhile; wp_reset_query();?>
			  
			  <?php query_posts('p=715'); ?>
			 <?php while(have_posts()) : the_post(); ?>
			 <?php
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
					$room1a = $thumb['0'];
			    ?>
			  <div class="owl-itemm" data-hash="<?php echo $post->ID;?>"><img src="<?=$room1a; ?>" alt=""></div>   
				<?php endwhile; wp_reset_query();?>
				
				 <?php query_posts('p=721'); ?>
			 <?php while(have_posts()) : the_post(); ?>
			 <?php
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
					$room1a = $thumb['0'];
			    ?>
			  <div class="owl-itemm" data-hash="<?php echo $post->ID;?>"><img src="<?=$room1a; ?>" alt=""></div>   
				<?php endwhile; wp_reset_query();?>
			</div>  
             
				  <a class="button secondary url" href="#zero"><img src="<?=$url1;?>" alt=""></a> 
				   <?php query_posts('p=667'); ?>
					<?php while(have_posts()) : the_post(); ?>
					  <?php
						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
						$room1aThumb = $thumb['0'];
					   ?>
				  <a class="button secondary url" href="#<?php echo $post->ID;?>"><img src="<?=$room1aThumb; ?>" alt=""></a> 
				   <?php endwhile; wp_reset_query();?>
				   
				   <?php query_posts('p=674'); ?>
			      <?php while(have_posts()) : the_post(); ?>
					<?php
						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
						$room1aThumb = $thumb['0'];
					   ?>
					<a class="button secondary url" href="#<?php echo $post->ID;?>"><img src="<?=$room1aThumb; ?>" alt=""></a> 
				   <?php endwhile; wp_reset_query();?>
				  
				    <?php query_posts('p=710'); ?>
					<?php while(have_posts()) : the_post(); ?>
					<?php
						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
						$room1aThumb = $thumb['0'];
					   ?>
					<a class="button secondary url" href="#<?php echo $post->ID;?>"><img src="<?=$room1aThumb; ?>" alt=""></a> 
				  <?php endwhile; wp_reset_query();?>
				  
				   <?php query_posts('p=715'); ?>
				<?php while(have_posts()) : the_post(); ?>
				  <?php
						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
						$room1aThumb = $thumb['0'];
					   ?>
				  <a class="button secondary url" href="#<?php echo $post->ID;?>"><img src="<?=$room1aThumb; ?>" alt=""></a> 
			  	<?php endwhile; wp_reset_query();?>
				
				  <?php query_posts('p=721'); ?>
				<?php while(have_posts()) : the_post(); ?>
				  <?php
						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
						$room1aThumb = $thumb['0'];
					   ?>
				  <a class="button secondary url" href="#<?php echo $post->ID;?>"><img src="<?=$room1aThumb; ?>" alt=""></a> 
			  	<?php endwhile; wp_reset_query();?>
               </div>
              
              </div>
           
          <!-- Rooms Slider style-->
           
           <!-- Description of Room style-->
           <div class="room-dec-wrapper">
		    <h1 style="color:#a7cc38;"><?php the_title();?></h1>
            <h2>Description of Room</h2>
               <p style="margin-top:-30px;"><?php the_content(); ?></p>
           </div>
           <!-- Description of Room style-->
           
           <!-- Room Facilities style-->
           <div class="room-fac-wrapper">
           <h2>Room Facilities</h2>
              <div class="row">
               <div class="ro-facilitie">
               <ul class="clearfix">
				<li><div class="facilitie-i-box">
                           <h3>Shared</h3>
                           <span><img src="../wp-content/themes/casa-alegria-bohol/images/rooms/ensuite.png" alt=""></span>
                       </div>
                   </li>
               <li><div class="facilitie-i-box">
                           <h3>TV LCD</h3>
                           <span><img src="../wp-content/themes/casa-alegria-bohol/images/rooms/icon1.gif" alt=""></span>
                       </div>
                   </li>
               <li><div class="facilitie-i-box">
                           <h3>Breakfast</h3>
                           <span><img src="../wp-content/themes/casa-alegria-bohol/images/rooms/icon2.gif" alt=""></span>
                       </div>
                   </li>
			   </ul>
			   <br>
			   <ul class="clearfix">
                   <li><div class="facilitie-i-box">
                           <h3>free parking</h3>
                           <span><img src="../wp-content/themes/casa-alegria-bohol/images/rooms/icon3.gif" alt=""></span>
                       </div>
                   </li>
                   <li><div class="facilitie-i-box">
                           <h3>wi-fi service</h3>
                           <span><img src="../wp-content/themes/casa-alegria-bohol/images/rooms/icon4.gif" alt=""></span>
                       </div>
                   </li>
                   <li><div class="facilitie-i-box">
                           <h3>AC Room</h3>
                           <span><img src="../wp-content/themes/casa-alegria-bohol/images/rooms/icon5.gif" alt=""></span>
                       </div>
                   </li>
               
               </ul>
               </div>
                  </div>
               
               
           </div>
           <!-- Room Facilities style-->
           
           <!-- Room Overview style-->
           <div class="room-overview">
           <h2>Room Overview</h2>
           
               <div class="table-responsive"> <table class="table table-striped"> <colgroup> <col class="col-xs-1"> <col class="col-xs-7"> </colgroup><tbody>
                   <?php $occupancy =  get_post_meta(get_the_ID(), 'my_meta_occupancy', true);?>
				   <?php $view =  get_post_meta(get_the_ID(), 'my_meta_view', true);?>
				   <?php $roomService =  get_post_meta(get_the_ID(), 'my_meta_room_service', true);?>
				   <?php $terraces =  get_post_meta(get_the_ID(), 'my_meta_terraces', true);?>
				   <?php $freePickup =  get_post_meta(get_the_ID(), 'my_meta_free_pickup_facility', true);?>
				   <?php $internetFree =  get_post_meta(get_the_ID(), 'my_meta_internet_free', true);?>
				    <?php $amenities =  get_post_meta(get_the_ID(), 'my_meta_amenities', true);?>
				   
				   <tr> <th scope="row"> <code>Occupancy:</code> </th> <td><?php echo $occupancy; ?></td> </tr>
                   <!--<tr> <th scope="row"> <code>Size : </code> </th> <td>600 sq. feet</td> </tr>-->
                   <tr> <th scope="row"> <code>View :</code> </th> <td><?php echo $view;?></td> </tr> 
                   <tr> <th scope="row"> <code>Room Service :</code> </th> <td><?php echo $roomService; ?></td> </tr> 
                   <tr> <th scope="row"> <code>Terraces :</code> </th> <td><?php echo $terraces;?></td> </tr>
                   <tr> <th scope="row"> <code>Free Pickup Facility :</code> </th> <td><?php echo $freePickup; ?></td> </tr>
                   <tr> <th scope="row"> <code>Internet Free :</code> </th> <td><?php echo $internetFree; ?></td> </tr>
                   <tr> <th scope="row"> <code>Amenities  :</code> </th> <td><?php echo $amenities; ?></td> </tr>
                   </tbody> </table> </div>
               
                   
           <a href="<?php bloginfo('url')?>/booking/" class="res-btn">Book NOw this room <i class="fa fa-arrow-right"></i></a>   
           </div>
           
           <!-- Room Overview style-->
          
           <!-- Have any question style-->
           <div class="question-wrapper">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><h2>Have any question</h2></div>
				<div style="margin-left:30px;"><?php echo do_shortcode('[contact-form-7 id="314" title="Contact form 1"]'); ?></div>
			</div>
           <!-- Have any question style-->
           
           
          </div>
		  <?php endwhile; wp_reset_query(); ?>
       </div>
	   <?php endif; ?>
	   
	   <?php if($slug == "room2c"): ?>
      <div class="col-md-8 col-md-pull-4">
       <?php while(have_posts()) : the_post(); ?>
       <div class="single-room-wrapper">
         <!-- Rooms Slider style-->
           <div class="room-slider-wrapper">
           <div class="single-r-wrapper">
              <div class="single-sl-room">
			   <?php
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
				$url = $thumb['0'];
			   ?>
			 
			  <?php
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
				$url1 = $thumb['0'];
			 ?>
			 
             <div class="owl-itemm" data-hash="zero"><img src="<?=$url; ?>" alt=""></div>
            
			
			 
			 <?php query_posts('p=667'); ?>
			<?php while(have_posts()) : the_post(); ?>
				<?php
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
				 $room1a = $thumb['0'];
			    ?>
   			 <div class="owl-itemm" data-hash="<?php echo $post->ID;?>"><img src="<?=$room1a; ?>" alt=""></div>
             <?php endwhile; wp_reset_query();?>
			 
			<?php query_posts('p=674'); ?>
			<?php while(have_posts()) : the_post(); ?>
				<?php
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
					$room1a = $thumb['0'];
			    ?>
			 <div class="owl-itemm" data-hash="<?php echo $post->ID;?>"><img src="<?=$room1a; ?>" alt=""></div>
               <?php endwhile; wp_reset_query();?>
			   
			   <?php query_posts('p=710'); ?>
			 <?php while(have_posts()) : the_post(); ?>
			 <?php
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
					$room1a = $thumb['0'];
			    ?>
			  <div class="owl-itemm" data-hash="<?php echo $post->ID;?>"><img src="<?=$room1a; ?>" alt=""></div>
               <?php endwhile; wp_reset_query();?>
			  
			  <?php query_posts('p=715'); ?>
			 <?php while(have_posts()) : the_post(); ?>
			 <?php
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
					$room1a = $thumb['0'];
			    ?>
			  <div class="owl-itemm" data-hash="<?php echo $post->ID;?>"><img src="<?=$room1a; ?>" alt=""></div>   
				<?php endwhile; wp_reset_query();?>
				
				 <?php query_posts('p=721'); ?>
			 <?php while(have_posts()) : the_post(); ?>
			 <?php
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
					$room1a = $thumb['0'];
			    ?>
			  <div class="owl-itemm" data-hash="<?php echo $post->ID;?>"><img src="<?=$room1a; ?>" alt=""></div>   
				<?php endwhile; wp_reset_query();?>
			</div>  
             
				  <a class="button secondary url" href="#zero"><img src="<?=$url1;?>" alt=""></a> 
				   <?php query_posts('p=667'); ?>
					<?php while(have_posts()) : the_post(); ?>
					  <?php
						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
						$room1aThumb = $thumb['0'];
					   ?>
				  <a class="button secondary url" href="#<?php echo $post->ID;?>"><img src="<?=$room1aThumb; ?>" alt=""></a> 
				   <?php endwhile; wp_reset_query();?>
				   
				   <?php query_posts('p=674'); ?>
			      <?php while(have_posts()) : the_post(); ?>
					<?php
						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
						$room1aThumb = $thumb['0'];
					   ?>
					<a class="button secondary url" href="#<?php echo $post->ID;?>"><img src="<?=$room1aThumb; ?>" alt=""></a> 
				   <?php endwhile; wp_reset_query();?>
				  
				    <?php query_posts('p=710'); ?>
					<?php while(have_posts()) : the_post(); ?>
					<?php
						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
						$room1aThumb = $thumb['0'];
					   ?>
					<a class="button secondary url" href="#<?php echo $post->ID;?>"><img src="<?=$room1aThumb; ?>" alt=""></a> 
				  <?php endwhile; wp_reset_query();?>
				  
				   <?php query_posts('p=715'); ?>
				<?php while(have_posts()) : the_post(); ?>
				  <?php
						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
						$room1aThumb = $thumb['0'];
					   ?>
				  <a class="button secondary url" href="#<?php echo $post->ID;?>"><img src="<?=$room1aThumb; ?>" alt=""></a> 
			  	<?php endwhile; wp_reset_query();?>
				
				  <?php query_posts('p=721'); ?>
				<?php while(have_posts()) : the_post(); ?>
				  <?php
						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
						$room1aThumb = $thumb['0'];
					   ?>
				  <a class="button secondary url" href="#<?php echo $post->ID;?>"><img src="<?=$room1aThumb; ?>" alt=""></a> 
			  	<?php endwhile; wp_reset_query();?>
               </div>
              
              </div>
           
          <!-- Rooms Slider style-->
           
           <!-- Description of Room style-->
           <div class="room-dec-wrapper">
		    <h1 style="color:#a7cc38;"><?php the_title();?></h1>
            <h2>Description of Room</h2>
               <p style="margin-top:-30px;"><?php the_content(); ?></p>
           </div>
           <!-- Description of Room style-->
           
           <!-- Room Facilities style-->
           <div class="room-fac-wrapper">
           <h2>Room Facilities</h2>
              <div class="row">
               <div class="ro-facilitie">
               <ul class="clearfix">
			   <li><div class="facilitie-i-box">
                           <h3>Shared</h3>
                           <span><img src="../wp-content/themes/casa-alegria-bohol/images/rooms/ensuite.png" alt=""></span>
                       </div>
                   </li>
               <li><div class="facilitie-i-box">
                           <h3>TV LCD</h3>
                           <span><img src="../wp-content/themes/casa-alegria-bohol/images/rooms/icon1.gif" alt=""></span>
                       </div>
                   </li>
               <li><div class="facilitie-i-box">
                           <h3>Breakfast</h3>
                           <span><img src="../wp-content/themes/casa-alegria-bohol/images/rooms/icon2.gif" alt=""></span>
                       </div>
                   </li>
			    </ul>
				<br>
				<ul class="clearfix">
                   <li><div class="facilitie-i-box">
                           <h3>free parking</h3>
                           <span><img src="../wp-content/themes/casa-alegria-bohol/images/rooms/icon3.gif" alt=""></span>
                       </div>
                   </li>
                   <li><div class="facilitie-i-box">
                           <h3>wi-fi service</h3>
                           <span><img src="../wp-content/themes/casa-alegria-bohol/images/rooms/icon4.gif" alt=""></span>
                       </div>
                   </li>
                   <li><div class="facilitie-i-box">
                           <h3>AC Room</h3>
                           <span><img src="../wp-content/themes/casa-alegria-bohol/images/rooms/icon5.gif" alt=""></span>
                       </div>
                   </li>
               
               </ul>
               </div>
                  </div>
               
               
           </div>
           <!-- Room Facilities style-->
           
           <!-- Room Overview style-->
           <div class="room-overview">
           <h2>Room Overview</h2>
           
			   <div class="table-responsive"> <table class="table table-striped"> <colgroup> <col class="col-xs-1"> <col class="col-xs-7"> </colgroup><tbody>
                   <?php $occupancy =  get_post_meta(get_the_ID(), 'my_meta_occupancy', true);?>
				   <?php $view =  get_post_meta(get_the_ID(), 'my_meta_view', true);?>
				   <?php $roomService =  get_post_meta(get_the_ID(), 'my_meta_room_service', true);?>
				   <?php $terraces =  get_post_meta(get_the_ID(), 'my_meta_terraces', true);?>
				   <?php $freePickup =  get_post_meta(get_the_ID(), 'my_meta_free_pickup_facility', true);?>
				   <?php $internetFree =  get_post_meta(get_the_ID(), 'my_meta_internet_free', true);?>
				    <?php $amenities =  get_post_meta(get_the_ID(), 'my_meta_amenities', true);?>
				   
				   <tr> <th scope="row"> <code>Occupancy:</code> </th> <td><?php echo $occupancy; ?></td> </tr>
                   <!--<tr> <th scope="row"> <code>Size : </code> </th> <td>600 sq. feet</td> </tr>-->
                   <tr> <th scope="row"> <code>View :</code> </th> <td><?php echo $view;?></td> </tr> 
                   <tr> <th scope="row"> <code>Room Service :</code> </th> <td><?php echo $roomService; ?></td> </tr> 
                   <tr> <th scope="row"> <code>Terraces :</code> </th> <td><?php echo $terraces;?></td> </tr>
                   <tr> <th scope="row"> <code>Free Pickup Facility :</code> </th> <td><?php echo $freePickup; ?></td> </tr>
                   <tr> <th scope="row"> <code>Internet Free :</code> </th> <td><?php echo $internetFree; ?></td> </tr>
                   <tr> <th scope="row"> <code>Amenities  :</code> </th> <td><?php echo $amenities; ?></td> </tr>
                   </tbody> </table> </div>
               
                    
           <a href="<?php bloginfo('url')?>/booking/" class="res-btn">Book NOw this room <i class="fa fa-arrow-right"></i></a>   
           </div>
           
           <!-- Room Overview style-->
          
           <!-- Have any question style-->
           <div class="question-wrapper">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><h2>Have any question</h2></div>
				<div style="margin-left:30px;"><?php echo do_shortcode('[contact-form-7 id="314" title="Contact form 1"]'); ?></div>
           </div>
           <!-- Have any question style-->
           
           
          </div>
		  <?php endwhile; wp_reset_query(); ?>
       </div>
	   <?php endif; ?>
	   
	   
	   
      <?php if($slug == "room2d"): ?>
      <div class="col-md-8 col-md-pull-4">
       <?php while(have_posts()) : the_post(); ?>
       <div class="single-room-wrapper">
         <!-- Rooms Slider style-->
           <div class="room-slider-wrapper">
           <div class="single-r-wrapper">
              <div class="single-sl-room">
			   <?php
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
				$url = $thumb['0'];
			   ?>
			 
			  <?php
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
				$url1 = $thumb['0'];
			 ?>
			 
             <div class="owl-itemm" data-hash="zero"><img src="<?=$url; ?>" alt=""></div>
            
			
			 
			 <?php query_posts('p=667'); ?>
			<?php while(have_posts()) : the_post(); ?>
				<?php
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
				 $room1a = $thumb['0'];
			    ?>
   			 <div class="owl-itemm" data-hash="<?php echo $post->ID;?>"><img src="<?=$room1a; ?>" alt=""></div>
             <?php endwhile; wp_reset_query();?>
			 
			<?php query_posts('p=674'); ?>
			<?php while(have_posts()) : the_post(); ?>
				<?php
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
					$room1a = $thumb['0'];
			    ?>
			 <div class="owl-itemm" data-hash="<?php echo $post->ID;?>"><img src="<?=$room1a; ?>" alt=""></div>
               <?php endwhile; wp_reset_query();?>
			   
			   <?php query_posts('p=710'); ?>
			 <?php while(have_posts()) : the_post(); ?>
			 <?php
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
					$room1a = $thumb['0'];
			    ?>
			  <div class="owl-itemm" data-hash="<?php echo $post->ID;?>"><img src="<?=$room1a; ?>" alt=""></div>
               <?php endwhile; wp_reset_query();?>
			  
			  <?php query_posts('p=715'); ?>
			 <?php while(have_posts()) : the_post(); ?>
			 <?php
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
					$room1a = $thumb['0'];
			    ?>
			  <div class="owl-itemm" data-hash="<?php echo $post->ID;?>"><img src="<?=$room1a; ?>" alt=""></div>   
				<?php endwhile; wp_reset_query();?>
				
				 <?php query_posts('p=721'); ?>
			 <?php while(have_posts()) : the_post(); ?>
			 <?php
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
					$room1a = $thumb['0'];
			    ?>
			  <div class="owl-itemm" data-hash="<?php echo $post->ID;?>"><img src="<?=$room1a; ?>" alt=""></div>   
				<?php endwhile; wp_reset_query();?>
			</div>  
             
				  <a class="button secondary url" href="#zero"><img src="<?=$url1;?>" alt=""></a> 
				   <?php query_posts('p=667'); ?>
					<?php while(have_posts()) : the_post(); ?>
					  <?php
						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
						$room1aThumb = $thumb['0'];
					   ?>
				  <a class="button secondary url" href="#<?php echo $post->ID;?>"><img src="<?=$room1aThumb; ?>" alt=""></a> 
				   <?php endwhile; wp_reset_query();?>
				   
				   <?php query_posts('p=674'); ?>
			      <?php while(have_posts()) : the_post(); ?>
					<?php
						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
						$room1aThumb = $thumb['0'];
					   ?>
					<a class="button secondary url" href="#<?php echo $post->ID;?>"><img src="<?=$room1aThumb; ?>" alt=""></a> 
				   <?php endwhile; wp_reset_query();?>
				  
				    <?php query_posts('p=710'); ?>
					<?php while(have_posts()) : the_post(); ?>
					<?php
						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
						$room1aThumb = $thumb['0'];
					   ?>
					<a class="button secondary url" href="#<?php echo $post->ID;?>"><img src="<?=$room1aThumb; ?>" alt=""></a> 
				  <?php endwhile; wp_reset_query();?>
				  
				   <?php query_posts('p=715'); ?>
				<?php while(have_posts()) : the_post(); ?>
				  <?php
						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
						$room1aThumb = $thumb['0'];
					   ?>
				  <a class="button secondary url" href="#<?php echo $post->ID;?>"><img src="<?=$room1aThumb; ?>" alt=""></a> 
			  	<?php endwhile; wp_reset_query();?>
				
				  <?php query_posts('p=721'); ?>
				<?php while(have_posts()) : the_post(); ?>
				  <?php
						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
						$room1aThumb = $thumb['0'];
					   ?>
				  <a class="button secondary url" href="#<?php echo $post->ID;?>"><img src="<?=$room1aThumb; ?>" alt=""></a> 
			  	<?php endwhile; wp_reset_query();?>
               </div>
              
              </div>
           
          <!-- Rooms Slider style-->
           
           <!-- Description of Room style-->
           <div class="room-dec-wrapper">
		    <h1 style="color:#a7cc38;"><?php the_title();?></h1>
            <h2>Description of Room</h2>
               <p style="margin-top:-30px;"><?php the_content(); ?></p>
           </div>
           <!-- Description of Room style-->
           
           <!-- Room Facilities style-->
           <div class="room-fac-wrapper">
           <h2>Room Facilities</h2>
              <div class="row">
               <div class="ro-facilitie">
               <ul class="clearfix">
               <li><div class="facilitie-i-box">
                           <h3>TV LCD</h3>
                           <span><img src="../wp-content/themes/casa-alegria-bohol/images/rooms/icon1.gif" alt=""></span>
                       </div>
                   </li>
               <li><div class="facilitie-i-box">
                           <h3>Breakfast</h3>
                           <span><img src="../wp-content/themes/casa-alegria-bohol/images/rooms/icon2.gif" alt=""></span>
                       </div>
                   </li>
                   <li><div class="facilitie-i-box">
                           <h3>free parking</h3>
                           <span><img src="../wp-content/themes/casa-alegria-bohol/images/rooms/icon3.gif" alt=""></span>
                       </div>
                   </li>
                   <li><div class="facilitie-i-box">
                           <h3>wi-fi service</h3>
                           <span><img src="../wp-content/themes/casa-alegria-bohol/images/rooms/icon4.gif" alt=""></span>
                       </div>
                   </li>
                   <li><div class="facilitie-i-box">
                           <h3>AC Room</h3>
                           <span><img src="../wp-content/themes/casa-alegria-bohol/images/rooms/icon5.gif" alt=""></span>
                       </div>
                   </li>
               
               </ul>
               </div>
                  </div>
               
               
           </div>
           <!-- Room Facilities style-->
           
           <!-- Room Overview style-->
           <div class="room-overview">
           <h2>Room Overview</h2>
           
               <div class="table-responsive"> <table class="table table-striped"> <colgroup> <col class="col-xs-1"> <col class="col-xs-7"> </colgroup><tbody>
                   <?php $occupancy =  get_post_meta(get_the_ID(), 'my_meta_occupancy', true);?>
				   <?php $view =  get_post_meta(get_the_ID(), 'my_meta_view', true);?>
				   <?php $roomService =  get_post_meta(get_the_ID(), 'my_meta_room_service', true);?>
				   <?php $terraces =  get_post_meta(get_the_ID(), 'my_meta_terraces', true);?>
				   <?php $freePickup =  get_post_meta(get_the_ID(), 'my_meta_free_pickup_facility', true);?>
				   <?php $internetFree =  get_post_meta(get_the_ID(), 'my_meta_internet_free', true);?>
				    <?php $amenities =  get_post_meta(get_the_ID(), 'my_meta_amenities', true);?>
				   
				   <tr> <th scope="row"> <code>Occupancy:</code> </th> <td><?php echo $occupancy; ?></td> </tr>
                   <!--<tr> <th scope="row"> <code>Size : </code> </th> <td>600 sq. feet</td> </tr>-->
                   <tr> <th scope="row"> <code>View :</code> </th> <td><?php echo $view;?></td> </tr> 
                   <tr> <th scope="row"> <code>Room Service :</code> </th> <td><?php echo $roomService; ?></td> </tr> 
                   <tr> <th scope="row"> <code>Terraces :</code> </th> <td><?php echo $terraces;?></td> </tr>
                   <tr> <th scope="row"> <code>Free Pickup Facility :</code> </th> <td><?php echo $freePickup; ?></td> </tr>
                   <tr> <th scope="row"> <code>Internet Free :</code> </th> <td><?php echo $internetFree; ?></td> </tr>
                   <tr> <th scope="row"> <code>Amenities  :</code> </th> <td><?php echo $amenities; ?></td> </tr>
                   </tbody> </table> </div>
               
               
    
           <a href="<?php bloginfo('url')?>/booking/" class="res-btn">Book NOw this room <i class="fa fa-arrow-right"></i></a>   
           </div>
           
           <!-- Room Overview style-->
          
           <!-- Have any question style-->
           <div class="question-wrapper">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><h2>Have any question</h2></div>
               <div style="margin-left:30px;"><?php echo do_shortcode('[contact-form-7 id="314" title="Contact form 1"]'); ?></div>    
           </div>
           <!-- Have any question style-->
           
           
          </div>
		  <?php endwhile; wp_reset_query(); ?>
       </div>
	   <?php endif; ?>
	  
      </div>
   </section> 
    
<!-- News style-->
    