<?php
/**
 * Template Name: tracing
 *
 */
?>

<?php get_header(); ?>
	<!-- .hidden-bar -->
    <section class="side-menu" id="sidebarCollapse">

    	<button class="close-button" type="button" data-toggle="collapse" data-target="#sidebarCollapse" aria-expanded="false" aria-controls="sidebarCollapse"><i class="fa fa-times"></i></button>

        <div class="side-menu-widget about-widget">
            <a href="<?php bloginfo('url')?>" class="logo">
                <img src="wp-content/themes/casa-alegria-bohol/images/icon/lr-home.png" alt="Awesome Image"/>
            </a>
            <h3 class="title playball-font">Welcome to Resort</h3><!-- /.title playball-font -->
            <p>Edolor sit amet, consectetur, adipis civelit sed quia non qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit. </p>
        </div><!-- /.side-menu-widget -->
        <div class="side-menu-widget gallery-widget">
            <div class="title-box">
                <h4>From Our Gallery</h4>
                <span class="decor-line inline"></span>
            </div><!-- /.title-box -->
            <ul class="list-inline">
                <li>
                    <a href="#"><img src="images/gallery-thumb/1.jpg" alt="Awesome Image"/></a>
                </li>
                <li>
                    <a href="#"><img src="images/gallery-thumb/2.jpg" alt="Awesome Image"/></a>
                </li>
                <li>
                    <a href="#"><img src="images/gallery-thumb/3.jpg" alt="Awesome Image"/></a>
                </li>
                <li>
                    <a href="#"><img src="images/gallery-thumb/4.jpg" alt="Awesome Image"/></a>
                </li>
                <li>
                    <a href="#"><img src="images/gallery-thumb/5.jpg" alt="Awesome Image"/></a>
                </li>
                <li>
                    <a href="#"><img src="images/gallery-thumb/6.jpg" alt="Awesome Image"/></a>
                </li>
                <li>
                    <a href="#"><img src="images/gallery-thumb/7.jpg" alt="Awesome Image"/></a>
                </li>
                <li>
                    <a href="#"><img src="images/gallery-thumb/8.jpg" alt="Awesome Image"/></a>
                </li>
            </ul><!-- /.list-inline -->
            <ul class="contact-info">
            	<li>hello@youremail.com</li>
            	<li>+1234567890</li>
            </ul><!-- /.contact-info -->
        </div><!-- /.side-menu-widget -->
        <div class="side-menu-widget subscribe-widget">
        	<div class="title-box">
                <h4>Subscribe for our Special Offers</h4>
                <span class="decor-line inline"></span>
            </div><!-- /.title-box -->
            <form action="#" class="clearfix">
            	<input type="text" placeholder="Enter email address" />
            	<button type="submit" class="res-btn">Subscribe</button>
            </form>
        </div>
    </section><!-- /.side-menu -->
	
	 <section class="top-bar dhomev">
        <div class="container">
            <div class="pull-left left-infos contact-infos">
                <ul class="list-inline">
                    <li>
                        <a href="#"><i class="fa fa-phone"></i> (+44) 555 890767</a>
                    </li><!-- comment for inline hack
                     --><li>
                        <a href="#"><i class="fa fa-map-marker"></i> 56, Building- Avenue-96, New YOrk</a>
                    </li><!-- comment for inline hack
                     --><li>
                        <a href="#"><i class="fa fa-envelope"></i> info@saturnthemes.com</a>
                    </li>
                </ul>
            </div><!-- /.pull-left left-infos -->
          
        </div><!-- /.container -->
    </section><!-- /.top-bar -->
	
	<nav class="navbar navbar-default  _fixed-header _light-header stricky" id="main-navigation-wrapper">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.html" class="navbar-brand">
                    <img alt="Awesome Image" src="images/header/logo2.png">
                </a>
            </div>
            
            <div class="collapse navbar-collapse" id="main-navigation">
                <ul class="nav navbar-nav ">
                    <li>
                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <span class="glyphicon glyphicon-chevron-down"></span></a>
						
					</li>
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us <span class="glyphicon glyphicon-chevron-down"></span></a>
						<ul class="dropdown-submenu dropdown-menu">
                            <li><a href="<?php bloginfo('url')?>/about-us/">Introduction</a></li>
                            <li><a href="<?php bloginfo('url')?>/activities/">Our Activities</a></li>
                            <li><a href="<?php bloginfo('url')?>/aminities/">Resort Aminities</a></li>
                            <li><a href="<?php bloginfo('url')?>/family-fun/">Family Fun</a></li>
                            <li><a href="<?php bloginfo('url')?>/testimonials/">Testimonials</a></li>
                            <li><a href="<?php bloginfo('url')?>/tracing/">Tracing</a></li>
                        </ul>
                    </li>
                    <li>
                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Suits &amp; Rooms <span class="glyphicon glyphicon-chevron-down"></span></a>
						<ul class="dropdown-submenu dropdown-menu">
							<li><a href="<?php bloginfo('url')?>/room/">Room</a></li>
						</ul>
                    </li>
                    <li>
                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery <span class="glyphicon glyphicon-chevron-down"></span></a>
						<ul class="dropdown-submenu dropdown-menu">
							<li><a href="<?php bloginfo('url')?>/gallery2/">Gallery</a></li>
						</ul>
                    </li>
                    <li><a href="<?php bloginfo('url')?>/our-restaurant/">Dinning</a></li>
                     <li><a href="<?php bloginfo('url')?>/offers/">offers</a></li>
                   <li>
                    	<a href="<?php bloginfo('url')?>/news-right/" >News <span class="glyphicon glyphicon-chevron-down"></span></a>
						
                    </li>
                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact us <span class="glyphicon glyphicon-chevron-down"></span></a>
						<ul class="dropdown-submenu dropdown-menu">
							<li><a href="<?php bloginfo('url')?>/contact/">Contact us</a></li>
						</ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav right-side-nav">
                    <li class="dropdown">
                        <a href="#"><span class="phone-only">Search</span> <i class="icon icon-Search"></i></a>
                        <ul class="dropdown-submenu has-search-form align-right">
                            <li>
                                <form action="#" class="navbar-form">
                                    <input type="text" placeholder="Enter Your Keyword" />
                                    <button type="submit"><i class="icon icon-Search"></i></button>
                                </form><!-- /.navbar-form -->
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a role="button" data-toggle="collapse" href="#sidebarCollapse" aria-expanded="false" aria-controls="sidebarCollapse"><span class="phone-only">Side Menu</span><i class="fa fa-bars"></i></a>
                    </li>
                </ul><!-- /.nav navbar-right -->                
                <form action="#" class="nav-search-form row">
                	<div class="input-group">
                		<input type="search" class="form-control" placeholder="Type here for search">
                		<span class="input-group-addon">
                			<button type="submit"><i class="icon icon-Search"></i></button>
                		</span>
                	</div>
                </form>
            </div>
        </div>
    </nav>  
    
	<!-- Header  Slider style-->
  
 <!-- Header  Inner style-->
 <section class="row final-inner-header">
 	<div class="container">
 		<h2 class="this-title">Mountain Tracing</h2>
 	</div>
 </section>
 <section class="row final-breadcrumb">
 	<div class="container">
 		<ol class="breadcrumb">
 			<li><a href="index.html">Home</a></li>
 			<li class="active">Mountain Tracing</li>
 		</ol>
 	</div>
 </section>
<!-- Header  Slider style-->

<!-- Family Fun style-->
  <section class="container clearfix common-pad-inner about-info-box">
    
<div class="row">
    <div class="col-lg-12 col-md-12 col-xs-12">
      
      <div class="sec-header3">
         <h2>Mountain Tracking</h2>
             <h3>Pick a room that best suits your taste and budget</h3>
         </div>
      <p>Neque porro quisquam est, qui dolorem ipsum quia dqAolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit. Neque porro quisquam est, qui dolorem ipsum quia dqAolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
      </div>
    </div>
    </section> 
    
<!-- Family Fun style-->

<!-- Family Fun style-->
  <section class="container clearfix common-pad-inner about-info-box">
    
<div class="row">
    <div class="col-lg-12 col-md-12 col-xs-12">
      
      <div class="sec-header3">
         <h2>Mountain Tracking</h2>
             <h3>Pick a room that best suits your taste and budget</h3>
         </div>
      <p>Neque porro quisquam est, qui dolorem ipsum quia dqAolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit. Neque porro quisquam est, qui dolorem ipsum quia dqAolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
      </div>
    </div>
    </section> 
    
<!-- Family Fun style-->
    

<!-- Family Fun style-->
 <section class="clearfix news-wrapper">
    <div class="container clearfix common-pad">
     <div class="row">
       
         <div class="m-traking">
         
         
         <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 family-img pull-right">
             <div class="image-gallery ntracing-images">
             <div class="grid-sizer"></div>
             <div class="single-gallery single-r-gallery anim-5-all masonryImage  span-10">
               <div class="img-holder hover">
               <a class="fancybox" rel="tag" href="images/mountain-tracking/1.png">
						<img src="../wp-content/themes/casa-alegria-bohol/images/mountain-tracking/1.png" alt="">		
				   </a>				
					</div>
               </div>
             <div class="single-gallery anim-5-all masonryImage  span-7">
               <div class="img-holder hover">
               <a class="fancybox" rel="tag" href="images/mountain-tracking/2.png">
						<img src="../wp-content/themes/casa-alegria-bohol/images/mountain-tracking/2.png" alt="">		
				   </a>				
					</div>
               </div>
              <div class="single-gallery single-r-gallery anim-5-all masonryImage  span-11">
               <div class="img-holder hover">
               <a class="fancybox" rel="tag" href="images/mountain-tracking/3.png">
						<img src="../wp-content/themes/casa-alegria-bohol/images/mountain-tracking/3.png" alt="">		
				   </a>				
					</div>
               </div>   
                 
               <div class="single-gallery anim-5-all masonryImage  span-12">
               <div class="img-holder hover">
               <a class="fancybox" rel="tag" href="images/mountain-tracking/4.png">
						<img src="../wp-content/themes/casa-alegria-bohol/images/mountain-tracking/4.png" alt="">		
				   </a>				
					</div>
               </div> 
                 
                 <div class="single-gallery single-r-gallery anim-5-all masonryImage  span-13">
               <div class="img-holder hover">
               <a class="fancybox" rel="tag" href="images/mountain-tracking/5.png">
						<img src="../wp-content/themes/casa-alegria-bohol/images/mountain-tracking/5.png" alt="">				
				   </a>		
					</div>
               </div> 
                 <div class="single-gallery single-r-gallery anim-5-all masonryImage  span-13">
               <div class="img-holder hover">
               <a class="fancybox" rel="tag" href="images/mountain-tracking/6.png">
						<img src="../wp-content/themes/casa-alegria-bohol/images/mountain-tracking/6.png" alt="">				
				   </a>		
					</div>
               </div> 
             
             
             </div>
             </div>
             <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 pull-right">
             <div class="maount-content">
             <h2>Mountain Tracking</h2>
             <p>Neque porro quisquam est, qui dolorem ipsum quia dqAolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit. Neque porro quisquam est, qui dolorem ipsum quia dqAolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniamNeque porro quisquam est, qui dolorem ipsum quia dqAolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. </p>
             <h3>Requirement of Tracking</h3>
             <h5>qui dolorem ipsum quia dqAolor sit amet, consect etur, adipisci velit, sed quia non numquam eius modi</h5>
             <p>Tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit. Neque porro quisquam est, qui dolorem ipsum quia dqAolor sit amet, consectetur, adipisci velit, sed quia.</p>
             <h3>Points of Attraction</h3>
             <p>Tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit. Neque porro quisquam est, qui dolorem ipsum quia dqAolor sit amet, consectetur, adipisci velit, sed quia.</p>
                          
             </div>
             
             </div>
             
             
         </div>
        </div>
     
     </div>
    </section>   
<!-- Family Fun style-->

<?php get_footer(); ?>