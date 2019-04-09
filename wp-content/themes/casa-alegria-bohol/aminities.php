<?php
/**
 * Template Name: aminities
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
 			<li class="active">Our Amenities</li>
 		</ol>
 	</div>
 </section>
<!-- Header  Slider style-->

<!-- Resort Amenities style-->
<section class="container clearfix common-pad-inner about-info-box">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-xs-12" style="margin-top:-30px; margin-bottom:-40px;">
			<?php query_posts('p=72'); ?>
			<?php while(have_posts()) : the_post(); ?>
			<div class="sec-header">
				<h2 style="margin-top:-40px;"><?php the_title(); ?></h2>
				 <br>
			</div>
			<p><?php the_content(); ?></p>
			<?php endwhile; wp_reset_query();?>
		</div>
	</div>
</section> 
    
<!-- Resort Amenities style-->

<!-- Room Aminities style-->
 <section class="clearfix news-wrapper">
    <div class="container clearfix common-pad-room">
     <div class="row">
     <div class="col-lg-12 col-md-12 col-xs-12 aminities-wrapper" style="margin-top:-30px;">
	<?php query_posts('p=680'); ?>
	<?php while(have_posts()) : the_post(); ?>
	 <div class="sec-header-small">
              <h2 ><?php the_title(); ?></h2>
	 </div>
	 <p><?php the_content(); ?></p>
	<?php endwhile; wp_reset_query();?>
		 
         <div class="aminities-outer">
		
		 <ul>
			<?php 
					/*query_posts( array(
					'category_name'  => 'room-aminities',
					'order' => 'ASC'
					));*/
			
			?>
			<?php //while(have_posts()) : the_post(); ?>
			
            
             <li>
             <div class="view view-aminities">
                   <img src="../wp-content/themes/casa-alegria-bohol/images/icon/screen.png" alt="">  
                    <h2 style="color:green; ">Air-conditioning units <span style="font-size:15px; color:#000;">(all rooms; electric fan on request)</span></h2>
                        <p></p>                 
                 <div class="mask">
                     <img src="../wp-content/themes/casa-alegria-bohol/images/icon/screen.png" alt="">
                        <h2></h2>
                        <p>Air-conditioning units (all rooms; electric fan on request)</p>
                        
                    </div>
                </div>
             </li>
             <li>
             <div class="view view-aminities">
                   <img src="../wp-content/themes/casa-alegria-bohol/images/icon/screen.png" alt="">  
                    <h2 style="color:green; ">multi-plugs electric outlets <span style="font-size:15px; color:#000;">(all rooms)</span></h2>
                        <p></p>                 
                 <div class="mask">
                     <img src="../wp-content/themes/casa-alegria-bohol/images/icon/screen.png" alt="">
                        <h2>multi-plugs electric outlets (all rooms)</h2>
                        <p></p>
                        
                    </div>
                </div>
             </li>
			  <li>
			
             <div class="view view-aminities">
                   <img src="../wp-content/themes/casa-alegria-bohol/images/icon/screen.png" alt="">  
                    <h2 style="color:green;">Ensuites <span style="font-size:15px; color:#000;">(Rm 1A, 2A, 2D); (Rm 2B, 2C shared)</span></h2>
                        <p></p>                 
                 <div class="mask">
                     <img src="../wp-content/themes/casa-alegria-bohol/images/icon/screen.png" alt="">
                        <h2>Ensuites (Rm 1A, 2A, 2D); (Rm 2B, 2C shared)</h2>
                        <p></p>
                        
                    </div>
                </div>
				
			</li>
			
             
            </ul>
        </div>
        <div class="aminities-outer">
         <ul>
			<li>
			
             <div class="view view-aminities">
                   <img src="../wp-content/themes/casa-alegria-bohol/images/icon/screen.png" alt="">  
                    <h2 style="color:green; ">TV sets <span style="font-size:15px; color:#000;">(Some rooms)</span></h2>
                        <p></p>                 
                 <div class="mask">
                     <img src="../wp-content/themes/casa-alegria-bohol/images/icon/screen.png" alt="">
                        <h2>TV sets(Some rooms)</h2>
                        <p></p>
                        
                    </div>
                </div>
				
			</li>
          
			 <li>
			
             <div class="view view-aminities">
                   <img src="../wp-content/themes/casa-alegria-bohol/images/icon/screen.png" alt="">  
                    <h2 style="color:green; ">Clean beddings<br><span style="font-size:15px; color:#000;">(daily upon request)</span></h2>
                        <p></p>                 
                 <div class="mask">
                     <img src="../wp-content/themes/casa-alegria-bohol/images/icon/screen.png" alt="">
                        <h2>Clean beddings daily <br>(daily upon request)</h2>
                        <p></p>
                        
                    </div>
                </div>
				
			</li>
			<li>
             <div class="view view-aminities">
                   <img src="../wp-content/themes/casa-alegria-bohol/images/icon/screen.png" alt="">  
                    <h2 style="color:green;">Luggage/clothes cabinet<br><span style="font-size:15px; color:#000;">(all rooms)</span></h2>
                        <p></p>                 
                 <div class="mask">
                     <img src="../wp-content/themes/casa-alegria-bohol/images/icon/screen.png" alt="">
                        <h2>Luggage/clothes cabinet<br>(all rooms)</h2>
                        <p></p>
                        
                    </div>
                </div>
				
			 </li>
         
        
       </div>
        </div>
     
     </div>
    </section>   
<!-- Room Aminities style-->

<!-- Room Aminities style-->
 <section class="clearfix news-wrapper" >
    <div class="container clearfix common-pad-room">
     <div class="row">
     <div class="col-lg-12 col-md-12 col-xs-12 aminities-wrapper">
	<?php query_posts('p=690'); ?>
	<?php while(have_posts()) : the_post(); ?>
     <div class="sec-header-small">
		<h2 ><?php the_title(); ?></h2>
	 </div>
	 <p><?php the_content(); ?></p>
	 <?php endwhile; wp_reset_query(); ?>
		<?php 
					/*query_posts( array(
					'category_name'  => 'facilities'
					
				) );*/
			
			?>
      
		 <div class="aminities-outer">
		
		 <ul>
			
			
			 <li>
             <div class="view view-aminities">
                   <img src="../wp-content/themes/casa-alegria-bohol/images/icon/screen.png" alt="">  
                    <h2 style="color:green; ">Karaoke unit</h2>
                        <p>A complete set of equipments both for singers, and ‘frustrated singers’. Sing to your heart’s content at the Beach House where the Karaoke equipments are.</p>                 
                 <div class="mask">
                     <img src="../wp-content/themes/casa-alegria-bohol/images/icon/screen.png" alt="">
                        <h2>Karaoke unit</h2>
                        <p>A complete set of equipments both for singers, and ‘frustrated singers’. Sing to your heart’s content at the Beach House where the Karaoke equipments are.</p>
                        
                    </div>
                </div>
             </li>
             <li>
             <div class="view view-aminities">
                   <img src="../wp-content/themes/casa-alegria-bohol/images/icon/screen.png" alt="">  
                    <h2 style="color:green;">Reception venue (for hire) and Open Multi-purpose area</h2>
                        <p>These areas are free to use for in-house guests during their stay at Casa Alegria-Bohol. Otherwise, these two areas are for open for hire to the public or  non-guests.</p>                 
                 <div class="mask">
                     <img src="../wp-content/themes/casa-alegria-bohol/images/icon/screen.png" alt="">
                        <h2>Reception venue (for hire) and Open Multi-purpose area</h2>
                        <p>These areas are free to use for in-house guests during their stay at Casa Alegria-Bohol. Otherwise, these two areas are for open for hire to the public or  non-guests.</p>
                        
                    </div>
                </div>
             </li>
             <li>
             <div class="view view-aminities">
                   <img src="../wp-content/themes/casa-alegria-bohol/images/icon/screen.png" alt="">  
                    <h2 style="color:green; ">Boardwalk cottage</h2>
                        <p>Looking for the perfect site to watch the beautiful sunset, have a restful snooze in a hammock, or have some few drinks, or a small group for barbeque. You will find it perfect here.</p>                 
                 <div class="mask">
                     <img src="../wp-content/themes/casa-alegria-bohol/images/icon/screen.png" alt="">
                        <h2>Boardwalk cottage</h2>
                        <p>Looking for the perfect site to watch the beautiful sunset, have a restful snooze in a hammock, or have some few drinks, or a small group for barbeque. You will find it perfect here.</p>
                        
                    </div>
                </div>
             </li>
             <li>
             <div class="view view-aminities">
                   <img src="../wp-content/themes/casa-alegria-bohol/images/icon/screen.png" alt="">  
                    <h2 style="color:green; ">Open bar and restaurant area</h2>
                        <p>(This will be available on the stage 2 development of the area). The Seaside BISTRO where food and drinks will be served located inside the Beach House at the seafront.</p>                 
                 <div class="mask">
                     <img src="../wp-content/themes/casa-alegria-bohol/images/icon/screen.png" alt="">
                        <h2>Open bar and restaurant area</h2>
                        <p>(This will be available on the stage 2 development of the area). The Seaside BISTRO where food and drinks will be served located inside the Beach House at the seafront.</p>
                        
                    </div>
                </div>
             </li>
             
            </ul>
        </div>
         
         <div class="aminities-outer">
         <ul>
			
            <li>
			
             <div class="view view-aminities">
                   <img src="../wp-content/themes/casa-alegria-bohol/images/icon/screen.png" alt="">  
                    <h2 style="color:green; ">Lounge area</h2>
                        <p>This is an ideal place to get together after a day’s activity or after dinner to socialize with everyone (if you wish)and have a few chats with others.
(link to the pics of lounge/dining)</p>                 
                 <div class="mask">
                     <img src="../wp-content/themes/casa-alegria-bohol/images/icon/screen.png" alt="">
                        <h2>Lounge area</h2>
                        <p>This is an ideal place to get together after a day’s activity or after dinner to socialize with everyone (if you wish)and have a few chats with others.
(link to the pics of lounge/dining)</p>
                        
                    </div>
                </div>
				
			</li>
            <li>
			
             <div class="view view-aminities">
                   <img src="../wp-content/themes/casa-alegria-bohol/images/icon/screen.png" alt="">  
                    <h2 style="color:green; ">Mini Library</h2>
                        <p>A small collection of good books on general interests and magazines for guests to browse and read in the lounge area, or at the balcony, beach house, or in the cottage. (We suggest that guests put them back where it is taken from for other guests’ reading pleasure.</p>                 
                 <div class="mask">
                     <img src="../wp-content/themes/casa-alegria-bohol/images/icon/screen.png" alt="">
                        <h2>Mini Library</h2>
                        <p>A small collection of good books on general interests and magazines for guests to browse and read in the lounge area, or at the balcony, beach house, or in the cottage. (We suggest that guests put them back where it is taken from for other guests’ reading pleasure.</p>
                        
                    </div>
                </div>
				
			</li>
			 <li>
			
             <div class="view view-aminities">
                   <img src="../wp-content/themes/casa-alegria-bohol/images/icon/screen.png" alt="">  
                    <h2 style="color:green; ">Kitchenette</h2>
                        <p>All the basic utensils  for cooking are supplied with for guests’ use should they decide to buy their own groceries and do their own cooking for lunch and dinner. Or hire a cook on call (pay direct to cook).</p>                 
                 <div class="mask">
                     <img src="../wp-content/themes/casa-alegria-bohol/images/icon/screen.png" alt="">
                        <h2>Kitchenette</h2>
                        <p>All the basic utensils  for cooking are supplied with for guests’ use should they decide to buy their own groceries and do their own cooking for lunch and dinner. Or hire a cook on call (pay direct to cook).</p>
                        
                    </div>
                </div>
				
			</li>
			<li>
             <div class="view view-aminities">
                   <img src="../wp-content/themes/casa-alegria-bohol/images/icon/screen.png" alt="">  
                    <h2 style="color:green; ">Dining area</h2>
                        <p>Located on the ground level adjacent to the balcony on the seaward side of the house where guests  enjoy their  breakfast.  Continental Breakfast is complimentary or a choice from our selection of cooked FILIPINO BREAKFAST for a minimal amount of charge.</p>                 
                 <div class="mask">
                     <img src="../wp-content/themes/casa-alegria-bohol/images/icon/screen.png" alt="">
                        <h2>Dining area</h2>
                        <p>Located on the ground level adjacent to the balcony on the seaward side of the house where guests  enjoy their  breakfast.  Continental Breakfast is complimentary or a choice from our selection of cooked FILIPINO BREAKFAST for a minimal amount of charge.</p>
                        
                    </div>
                </div>
				
			 </li>
  </div>
  
         
        
       </div>
        </div>
     
     </div>
    </section>   
<!-- Room Aminities style-->

<!-- Additional Services style-->
<section class="add-services">
     <div class="container clearfix common-pad-room">
     <div class="row">
     <div class="col-lg-12 col-md-12 col-xs-12 aminities-wrapper">
	<?php query_posts('p=692'); ?>
	<?php while(have_posts()) : the_post(); ?>
     <div class="sec-header-small">
		<h2><?php the_title(); ?></h2>
	  </div>
       
		<p><?php the_content(); ?></p>
       <?php endwhile; wp_reset_query(); ?>
        <div class="aminities-outer">
         <ul>
           
		   	<?php 
						query_posts( array(
						'category_name'  => 'additional-services'
						
					) );
				
				?>
            <?php while(have_posts()) : the_post(); ?>
            <li>
             <div class="view view-aminities">
                   <img src="../wp-content/themes/casa-alegria-bohol/images/icon/screen.png" alt="">  
                    <h2 style="color:green;"><?php the_title(); ?></h2>
                        <p><?php the_content();?></p>                 
                 <div class="mask">
                     <img src="../wp-content/themes/casa-alegria-bohol/images/icon/screen.png" alt="">
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_content(); ?></p>
                        
                    </div>
                </div>
             </li>
            <?php endwhile; wp_reset_query(); ?>	
            
            
            
            </ul><br>
        </div>
         </div>
        </div>
     
     </div>
    </section>    
    
<!-- Additional Services style-->  

<?php get_footer(); ?>