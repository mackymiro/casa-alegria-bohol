<?php get_header(); ?>
<!-- .hidden-bar -->
	<?php get_template_part( 'header-menu', get_post_format() );?>
	
	<?php get_template_part( 'nav-menu', get_post_format() );?>
	
<!-- Header  Slider style-->
<div id="minimal-bootstrap-carousel" class="carousel default-home-slider slide carousel-fade shop-slider" data-ride="carousel">           
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active slide-1" style="background-image: url(wp-content/themes/casa-alegria-bohol/images/banner/received_10207855441171480.jpeg);backgroudn-position: center right;">
            
            <div class="carousel-caption nhs-caption nhs-caption6">
	      		<div class="thm-container">
	      			<div class="box valign-middle">
	      				<div class="content text-left pull-left" style="margin-left:130px; margin-top:-100px;">
							<h2 data-animation="animated fadeInUp" class="this-title">Escape to our quiet villa by the sea</h2>
							<p data-animation="animated fadeInDown">Book a room at our holiday home now and get some discounts (see offers). <br>Welcome drinks, fresh from the coco tree and a spacious cozy bed are waiting for you. <br>We will do everything to make you feel at home.</p>
							<a data-animation="animated fadeInLeft" href="<?php bloginfo('url')?>/booking/" class="nhs-btn3">Book now</a>
							<a data-animation="animated fadeInRight" href="<?php bloginfo('url')?>/offers/" class="nhs-btn">offers</a><br>
							
	      				</div>
	      			</div>
	      		</div>
	    	</div>                
        </div>
        <div class="item  slide-2" style="background-image: url(wp-content/themes/casa-alegria-bohol/images/banner/received_10207855441451487.jpeg);backgroudn-position: center right;">
            
            <div class="carousel-caption nhs-caption nhs-caption7">
	      		<div class="thm-container">
	      			<div class="box valign-middle">
	      				<div class="content text-left pull-left">
							<h2 data-animation="animated fadeInUp" class="this-title">A	Best Place to Relax</h2>
							<p data-animation="animated fadeInDown">Book your group now at Casa Alegria-Bohol, and enjoy the serenity around our holiday home. Get discounts up to 35%(conditions apply).
							This is truly your home away from home.</p>
							<a data-animation="animated fadeInLeft" href="<?php bloginfo('url')?>/booking/" class="nhs-btn3">Book now</a>
							<a data-animation="animated fadeInRight" href="<?php bloginfo('url')?>/offers/" class="nhs-btn">offers</a><br>
							
	      				</div>
	      			</div>
	      		</div>
	    	</div>                
        </div>
        <div class="item  slide-2" style="background-image: url(wp-content/themes/casa-alegria-bohol/images/banner/18789921_1316226231829602_1887706438_o.jpg);backgroudn-position: center right;">
            
            <div class="carousel-caption nhs-caption nhs-caption7">
	      		<div class="thm-container">
	      			<div class="box valign-middle">
	      				<div class="content text-left pull-left" >
							
							<h2 style="color:#faebd7; margin-left:-140px; margin-top:-240px;" data-animation="animated fadeInUp" class="this-title">An Affordable Base</h2>
							<h2 style="color:#faebd7; margin-left:-140px; margin-top:-20px; " data-animation="animated fadeInUp" class="this-title">for Exploring Bohol's Delight</h2>
							
							
						</div>
						<div class="content text-right pull-right">
						<p style="color:#faebd7; margin-top:-250px; margin-right:-160px;" data-animation="animated fadeInDown">
							    Relax to the quiteness of the place. <br>
								Take a walk along this 100-meter board walk; <br>
								inhale the crispness of the sea breeze.<br>
								If you get lucky... <br>
								Throw a fishing line to catch some fish. <br>
								Or, if you are daring enough to jump over <br>
								To freshen up after a long sight-seeing tour.
						</div>
	      			</div>
	      		</div>
	    	</div>            
        </div>
    </div>
    <!-- Controls -->
    <a class="left carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="prev">
        <i class="fa fa-angle-left"></i>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="next">
        <i class="fa fa-angle-right"></i>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- Header  Slider style-->  

<!-- Rooms And Suits style--> 
<section class="container clearfix common-pad nasir-style">
 <div class="sec-header sec-header-pad">
 <h2>Room Descriptions</h2>
     <h3>All rooms are uniformedly-priced. Two rooms with shared bathroom/toilet. Three rooms with own private bathroom/toilets. <br>Some rooms with own seaward balcony; some rooms are roadside view <span style="color:#a7cc38;">(click details)</span></h3>
 </div>
 <div class="room-slider">
   <div class="roomsuite-slider-two">  
	<?php query_posts('category_name=rooms-and-suits');?>
	<?php while(have_posts()) : the_post(); ?>
   <div class="room-suite room-suite-htwo">
     <div class="item">
	  <?php
		 $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );
		 $url = $thumb['0'];
	  ?>	
     <div class="ro-img"><img src="<?=$url; ?>" class="img-responsive" alt=""></div>
     <div class="ro-txt">
        <h2><?php the_title(); ?></h2>
         <p><?php the_content(); ?></p>
         <div class="ro-text-two">
         <div class="left-p-two pull-left"><a href="<?php bloginfo('url')?>/single/<?php the_slug(); ?>" class="res-btn">details</a></div>
		 <?php $price =  get_post_meta(get_the_ID(), 'my_meta_box_room_price', true);?>
         <div class="right-p-two pull-right"><p>₱<?php echo $price;?><span>Per Night</span></p></div>
         </div>         
         </div>
     </div>
    </div>
	<?php endwhile; wp_reset_query(); ?>
	
          
  </div>
 </div>
</section>

 <!-- Activities of Resort style-->    
  <div class="resot-activities clearfix">
    
    <div class="container clearfix common-pad">
      <div class="row">
        
        <div class="col-lg-6 col-md-6 activities-cont">
          <?php query_posts('p=214'); ?>
		  <?php while(have_posts()) : the_post(); ?>
          <div class="sec-header3">
             <h2><?php the_title(); ?></h2>
                 <!--<h3>Pick a Filipino Breakfast that best suits your taste.</h3>-->
				
			 </div>
			<p><br><?php the_content(); ?></p>
          
            <a href="<?php bloginfo('url')?>/our-restaurant/" class="res-btn">Continental Breakfast<i class="fa fa-arrow-right"></i></a>
            <?php endwhile; wp_reset_query();?>
          </div>
          <div class="col-lg-6 col-md-6 col-xs-12">
			<div class="row nasir-welboxes">
				<?php query_posts('category_name=we-offer-this-amenities');?>
				<?php while(have_posts()) : the_post(); ?>
			  	<div class="single_wel_cont col-sm-6">  
					<a class="wel-box" href="#">
						<?php
							$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );
							$url = $thumb['0'];
						?>
						<div class="icon-box"><img src="<?=$url?>" alt="" /></div>
						
						<div class="overlay transition3s">
							<div class="icon_position_table">
								<div class="icon_container border_round">
									<h2>Complimentary Breakfast</h2>
								
								</div>
							</div>
						</div>
					</a>
				</div>
				<?php endwhile; wp_reset_query(); ?>	
				
				
			</div>
         
          </div>
        
        </div>
      </div>
    </div>
	<!-- Our Offer style-->
 <section class="our-offer-htwo clearfix">
    
    <div class="container clearfix common-pad">
     
          <div class="row">
        
        <div class="col-md-4 our-offer-left">
              <div class="sec-header3">
			    <?php query_posts('p=411'); ?>
			<?php while(have_posts()) : the_post(); ?>
             <h2><?php the_title(); ?></h2>
             <!--<h3>Pick a room that best suits</h3>-->
             </div>
             <p><br><?php the_content(); ?></p>  
				<?php endwhile; wp_reset_query();?>
              </div>
        <div class="col-md-8 offer-right">
              
             <div class="offer-img-box1">
            <div class="spa-offer">
                <div class="img_holder">
					<?php query_posts('p=413'); ?>
					<?php while(have_posts()) : the_post(); ?>
						<?php
							$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );
							$url = $thumb['0'];
						?>
					  <img src="wp-content/themes/casa-alegria-bohol/images/our-resort/1.jpg" class="img-responsive" alt="">
					  <div class="overlay">
						 <div class="room-ad-cont">
							  <h2><?php the_title();?></h2>
							  <?php $offerTxt =  get_post_meta(get_the_ID(), 'my_meta_box_price_offer', true);?>
							  <h3><?php echo $offerTxt;?></h3>
							  <p style="font-size:13px;"><?php the_content(); ?></p>
							 
						  </div>              
					  </div>
				  <?php endwhile; wp_reset_query();?>
				</div>
			 </div>
            </div>
              
            <div class="offer-img-box2">
            <div class="box1">
               <div class="img_holder">
					<?php query_posts('p=418'); ?>
					<?php while(have_posts()) : the_post(); ?>
                   <a href="booking.html">
                   	<img src="wp-content/themes/casa-alegria-bohol/images/our-resort/2.jpg" class="img-responsive" alt="">
                   <div class="overlay">
                   <div class="text1">*Conditions apply</div>
                   <div class="offertext1"> <?php $offerTxt =  get_post_meta(get_the_ID(), 'my_meta_box_price_offer', true);?>
                       <p><?php the_title();?><span class="off-txt">off</span> <span class="winter-txt"><?php echo $offerTxt;?></span></p>
						<p style="color:#000000; line-height:10px; font-size:16px;"><?php the_content(); ?></p>
                       </div>
					
                   </div>
                   </a>
					<?php endwhile; wp_reset_query();?>
                </div>
                </div>
            
            <div class="box2">
                
                <div class="img_holder">
					<?php query_posts('p=441'); ?>
					<?php while(have_posts()) : the_post(); ?>
					   <a href="#">
						<img src="wp-content/themes/casa-alegria-bohol/images/our-resort/3.jpg" class="img-responsive" alt="">
						<div class="overlay">
							<?php $offerTxt =  get_post_meta(get_the_ID(), 'my_meta_box_price_offer', true);?>
							<p><?php echo $offerTxt; ?> <span>Offer</span></p>
							<h2><?php the_title(); ?><span>off</span></h2>
							<p style="font-size:11px;"><?php the_content(); ?></p>
							
						</div>
					   </a>
				    <?php endwhile; wp_reset_query();?>
                </div>
                </div>
            </div>
              </div>
        </div>
     </div>
    </section>  
	
<!-- Our Gallery style-->
 <!--<section class="our-galler-htwo clearfix common-pad">
    
    <div class="container clearfix">
      
         <div class="sec-header sec-w-header">
            <h2>Our Gallery</h2>
         	<h3>Pick a room that best suits your taste and budget</h3>
         </div>
     </div>
     
     <div class="fullwidth-silder">
        
        <div class="fullwidth-slider">
			<div class="item">
				<img src="wp-content/themes/casa-alegria-bohol/images/gallery-two/1.jpg" alt="">
				<div class="this-overlay">
					<div class="this-texts">
						<a href="images/gallery-two/1.jpg" class="fancybox" rel="help"><i class="icon icon-Search"></i></a>
						<h4 class="this-title">our staff</h4>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="wp-content/themes/casa-alegria-bohol/images/gallery-two/2.jpg" alt="">
				<div class="this-overlay">
					<div class="this-texts">
						<a href="images/gallery-two/2.jpg" class="fancybox" rel="help"><i class="icon icon-Search"></i></a>
						<h4 class="this-title">exterior view</h4>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="wp-content/themes/casa-alegria-bohol/images/gallery-two/3.jpg" alt="">
				<div class="this-overlay">
					<div class="this-texts">
						<a href="images/gallery-two/3.jpg" class="fancybox" rel="help"><i class="icon icon-Search"></i></a>
						<h4 class="this-title">bedroom</h4>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="wp-content/themes/casa-alegria-bohol/images/gallery-two/4.jpg" alt="">
				<div class="this-overlay">
					<div class="this-texts">
						<a href="images/gallery-two/4.jpg" class="fancybox" rel="help"><i class="icon icon-Search"></i></a>
						<h4 class="this-title">swiming pool</h4>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="wp-content/themes/casa-alegria-bohol/images/gallery-two/5.jpg" alt="">
				<div class="this-overlay">
					<div class="this-texts">
						<a href="images/gallery-two/5.jpg" class="fancybox" rel="help"><i class="icon icon-Search"></i></a>
						<h4 class="this-title">our restaurant</h4>
					</div>
				</div>
			</div>
         </div>
        </div>
    </section>   -->

<!-- Testimonials & Our Events style-->    
 <div class="container clearfix common-pad">
      <div class="row">
          <div class="col-lg-6 col-md-6">
          <div class="sec-header-two">
              <h2>Testimonials</h2>
              </div>
          <div class="testimonials-wrapper">
<div class="testimonial-sliders-two">
		  <?php query_posts('category_name=testimonials');?>
		  <?php while(have_posts()) : the_post(); ?>
          <div class="item">
          <div class="test-cont"><p><?php the_content(); ?></p></div>             
             <div class="test-bot">
			  <?php
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
				$url = $thumb['0'];
			  ?>
             <div class="tst-img"><img src="<?=$url?>" alt="" class="img-responsive"></div>
             <div class="client_name">
				<?php $position =  get_post_meta(get_the_ID(), 'my_meta_box_text', true);?>
               <h5><?php the_title(); ?> - <span><?php echo $position; ?></span></h5>  
                
                 </div>
             
             </div>
          </div> 
          <?php endwhile; wp_reset_query(); ?>	

</div>

</div>
          
          
          </div>
          
          
          <div class="col-lg-6 col-md-6 event-wrapper">
          
              <div class="sec-header-two">
              <h2>Our Events</h2>
              </div>
          
              <div class="our-event-t-wrapper">
				<?php query_posts('category_name=our-events');?>
				<?php while(have_posts()) : the_post(); ?>
                <div class="media">
                  <div class="media-left">
                      <div class="date-box">
                                <div class="date-inner">
                                    <div class="date-c-inner">
								 <?php $day =  get_post_meta(get_the_ID(), 'my_meta_day', true);?>
								 <?php $month =  get_post_meta(get_the_ID(), 'my_meta_month', true);?>
                                <p><?php echo $day; ?><span><?php echo $month; ?></span></p>
                                </div>
                                </div>
                                </div></div>
                  <div class="media-body">
                      <h2><?php the_title(); ?></h2>
                      <p><?php the_content(); ?></p>
                      </div>
                  </div>
				<?php endwhile; wp_reset_query(); ?>	
                  
                  
   
              </div>
          
          
          </div>
        </div>
     </div> 
 
 <!-- Get in Touch & Drop a Message style   -->   
  <div class="resot-activities clearfix">
    
    <div class="container clearfix common-pad">
      <div class="row">
          
         <div class="col-lg-6 col-md-7 get-touch-two">
          
          <div class="get-touch-wrapper row m0">
			<?php query_posts('p=431'); ?>
			<?php while(have_posts()) : the_post(); ?>
				<?php
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
					$url = $thumb['0'];
				?>
				 <div class="touch-img"><img src="<?=$url?>" class="img-responsive" alt=""></div>
				 <div class="touch-txt">
				  <div class="sec-header-touch">
				  <h2>Get in Touch</h2>
				  </div>
					
					 <?php $phoneNumber =  get_post_meta(get_the_ID(), 'my_meta_box_phone_number', true);?>
					 <?php $email =  get_post_meta(get_the_ID(), 'my_meta_box_email', true);?>
					 <h3><?php the_title(); ?></h3>
					 <p>Phone : <?php echo $phoneNumber; ?></p>
					 <p>Email : <?php echo $email; ?></p>
				  
				  </div>
              <?php endwhile; wp_reset_query();?>
			  <br>
			  <?php query_posts('p=504'); ?>
			  <?php while(have_posts()) : the_post(); ?>
				
				 <div class="touch-txt" style="margin-left:190px;">
	
					 <?php $email =  get_post_meta(get_the_ID(), 'my_meta_box_email', true);?>
					 <h3><?php the_title(); ?></h3>
					
					 <p>Email : <?php echo $email; ?></p>
				  
				  </div>
              <?php endwhile; wp_reset_query();?>
		 </div>
          
          
          
          </div>
          
          <div class="col-lg-6 col-md-5 home-two-msgwrapper">
          
          <div class="sec-header-touch">
              <h2>Drop a Message</h2>
              </div>
          
              <div class="drop-wrapper input_form">
				<?php echo do_shortcode('[contact-form-7 id="314" title="Contact form 1"]'); ?>
              </div>
          
          </div>
          
          
        </div>
      </div>
    </div>

<?php get_footer();?>