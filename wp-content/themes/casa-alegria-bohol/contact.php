<?php
/**
 * Template Name: contact
 *
 */
?>

<?php get_header(); ?>
	<?php get_template_part( 'header-menu', get_post_format() );?>
		
	<?php get_template_part( 'nav-menu', get_post_format() );?>

 
<!-- Booking style-->
  <section class="container clearfix common-pad booknow">
    <div class="sec-header">
         <h2>Send a message</h2>         
		<br>
	</div> 
        
     <div class="row nasir-contact">
      <div class="col-md-8">
         
         <div class="book-left-content input_form">
			<?php echo do_shortcode('[contact-form-7 id="314" title="Contact form 1"]'); ?>
          </div>
         
         
         </div>
      <div class="col-md-4">
         
          <div class="contact-info">
		  <h2 style="color:#a2d002;">Look for this signage along the highway and on the crossroad towards our place.</h2>
          <h2>It is opposite alegria elementary school</h2>
		  <span><img class="img-responsive" src="../wp-content/themes/casa-alegria-bohol/images/header/karatula.jpg" alt=""></span>
          <br>
		  <h2>Contact Info</h2>
          
           <div class="media-contact clearfix">
                            <div class="media-contact-icon">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <div class="media-contact-info">
                              <p>Purok 2, Seaside <br>Alegria Sur, Loay, Bohol <br>Philippines 6303</p>
                            </div>
              </div>   
            <div class="media-contact clearfix">
                            <div class="media-contact-icon">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            </div>
                            <div class="media-contact-info">
                              <p>
								 <a href="mailto:jesjor@outlook.co.nz">Jene S. Jorgensen <strong><span style="color:blue;">jsparilla@gmail.com</span></strong></a><br>
                                        
                               </p>
                            </div>
              </div> 
              
              <div class="media-contact clearfix">
                            <div class="media-contact-icon">
                                <i class="fa fa-home" aria-hidden="true"></i>
                            </div>
                            <div class="media-contact-info">
                              <p>Operational Hours<br>
								  Mondays-Sundays: 7AM-9PM<br>
                                  <br>
                                  </span>
                                        
                                    </p>
                            </div>
              </div> 
              
              <div class="media-contact clearfix">
                            <div class="media-contact-icon">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <div class="media-contact-info">
                              <p>
                                  <a href="tel:18005622487">Tel:<br>+64 27 351 5691
								  

                                    </p>
                            </div>
              </div> 
              
          </div>
          
          
         
         </div>  
      
      </div>
    
    </section> 
    
<!-- Booking style-->


 <!-- TT-CONTACT-MAP -->
            <div class="tt-contact-map map-block" id="map-canvas"  data-lat="51.477254" data-lng="-0.026888" data-zoom="14"></div>
            <div class="addresses-block">
                <a data-lat="51.477254" data-marker="../wp-content/themes/casa-alegria-bohol/images/marker.png" data-lng="-0.026888" data-string="1. Here is some address or email or phone or something else..."></a>                 
            </div>

    

<?php get_footer(); ?>