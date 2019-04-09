<?php
/**
 * Template Name: booking
 *
 */
?>

<?php get_header(); ?>
	<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/zebra-datepicker/default.css">
	<?php get_template_part( 'header-menu', get_post_format() );?>
	
	<?php get_template_part( 'nav-menu', get_post_format() );?>
 <!-- Header  Inner style-->
 <section class="row final-breadcrumb">
 	<div class="container">
 		<ol class="breadcrumb">
 			<li><a href="index.html">Home</a></li>
 			<li class="active">Booking</li>
 		</ol>
 	</div>
 </section>
<!-- Header  Slider style-->
<!-- Booking style-->
  <section class="container clearfix common-pad-inner booknow">
    <div class="sec-header">
         <h2>Booking</h2>
             <h3>If you require any <span style="color:blue; "><a href="<?php bloginfo('url')?>/aminities/">Additional Services</a></span> please let us know at least a week before your arrival.</h3>
			 <h3 style="margin-top:-30px;">NO PREPAYMENT NEEDED for Room Booking. Pay at the property.</h3>
		 </div> 
		
     <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 pull-left">
         <?php
			if(isset($_POST['submit'])){
				$name = $_POST['name'];
				$email = $_POST['email'];
				$arival_date = $_POST['arival_date'];
				$departure_date = $_POST['departure_date'];
				$chooseAdults = $_POST['chooseAdults'];
				$chooseChildren = $_POST['chooseChildren'];
				$message = $_POST['message'];
				
				
				if($name == ""){
					$echoName = "<p style='color:red;'>Please Input Name</p>";
				}else if($email == ""){
					$echoEmail = "<p style='color:red;'>Please Input Email</p>";
				}else if($arival_date == ""){
					$echoArrival = "<p style='color:red;'>Please Input Arrival Date</p>";
				}else if($departure_date == ""){
					$echoDept = "<p style='color:red;'>Please Input Departure Date</p>";
				}else if($chooseAdults == ""){
					$echoAdults = "<p style='color:red;'>Please Input Adults</p>";
				}else if($chooseChildren == ""){
					$echoChildren = "<p style='color:red;'>Please Input Children</p>";
				}else if($message == ""){
					$echoMessage = "<p style='color:red;'>Please Input Message</p>";
				}else{
					//send information to email;
					$name = $_POST['name'];
					$email = $_POST['email'];
					$arival_date = $_POST['arival_date'];
					$departure_date = $_POST['departure_date'];
					$chooseAdults = $_POST['chooseAdults'];
					$chooseChildren = $_POST['chooseChildren'];
					$comments = $_POST['message'];
					
					$to  = 'ask.macky.miro@gmail.com' . ', '; // note the comma
					// Always set content-type when sending HTML email
					$headers = 'MIME-Version: 1.0' . "\r\n";
					$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
					$headers .= "From: ".$name."<".$email.">\r\n"; 
					
					$message ="<!DOCTYPE html>
								<html>
								<head>
								<title>Casa-Alegria-Bohol</title>
								</head>
								<body>
								<div style='width:960px; border:1px solid #ccc;'>
									<div style='width:960px;'>
										<a href='http://www.springrainglobal.com/casa-alegria-bohol/' target='_blank' rel='nofollow' >
											<img alt='springrain logo' src='http://www.springrainglobal.com/casa-alegria-bohol/images/icon/casa-alegria-bohol.png' />
										</a>
										
									</div>
									<div style='margin-left:40px; margin-top:80px;'>
									<p style='font-family:arial; font-size:13px;'><strong>Name :</strong>".$name." </p> 
									<p style='font-family:arial; font-size:13px;'><strong>Email :</strong>".$email." </p> 
									<p style='font-family:arial; font-size:13px;'><strong>Arrival Date :</strong>".$arival_date." </p> 
									<p style='font-family:arial; font-size:13px;'><strong>Departure Date :</strong>".$departure_date." </p> 
									<p style='font-family:arial; font-size:13px;'><strong>Adults :</strong>".$chooseAdults." </p> 
									<p style='font-family:arial; font-size:13px;'><strong>Children :</strong>".$chooseChildren." </p> 
									<p style='font-family:arial; font-size:13px;'><strong>Message :</strong>".$comments." </p> 
									</div>
								</div>
								</body>
								</html>
							";
					// Send
					mail($to, 'BOOKING INFORMATION-', $message,$headers);
					
					echo "<p style='color:green; font-size:15px;'>Your inquiry has been sent!</p>";
					exit;
					
				}
				
			}
			
		 ?>
         <div class="book-left-content input_form">
		<form action="../wp-content/themes/casa-alegria-bohol/process.php" method="post" id="contactBooking">         
           <div class="row">   
           <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
		     <?php echo $bookingSend; ?>
			 <?php echo $echoName; ?>
			<input type="text" class="form-control" id="name" name="name" placeholder="Your name"></div>   
			<div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
			<?php echo $echoEmail; ?>
			<input type="email" class="form-control" id="email" name="email" placeholder="Your Email"></div>
            </div>  
              
            <div class="row">   
           <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
			<?php echo $echoArrival; ?>
			<input class="form-control datepicker-example8" placeholder="Arival Date" name="arival_date" type="text"></div>   
            <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
			<?php echo $echoDept; ?>
			<input type="text" class="form-control datepicker-example8" placeholder="Departure Date" name="departure_date"></div>
            </div> 
             
              <div class="row">   
           <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
               
               <div class="select-box">
							<?php echo $echoAdults; ?>
                            <select class="select-menu" name="chooseAdults">
                                <option value="default">Adults</option>  
                                <option value="1">1</option>	
                                <option value="2">2</option>	
                                <option value="3">3</option>	
                                <option value="4">4</option>    
                            </select>
                    </div>
                  
                  </div>   
            <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                <div class="select-box">
							<?php echo $echoChildren; ?>
                            <select class="select-menu" name="chooseChildren">
                                <option value="default">Children</option>  
                                <option value="1">1</option>	
                                <option value="2">2</option>	
                                <option value="3">3</option>	
                                <option value="4">4</option>    
                            </select>
                    </div>
                </div>
            </div> 
              
              
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<?php echo $echoMessage; ?>
                       <textarea class="form-control" rows="6" id="message" name="message" placeholder="Message"></textarea>
                    </div>
             </div>
              
              <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><button type="submit" name="submit" class="res-btn">Submit Now</button></div>
              </div>
            
          </form>
          </div>
         
         
         </div>
      <div class="col-sm-4 pull-right">
         <div class="book-right">
         <span><img src="/wp-content/themes/casa-alegria-bohol/images/icon/casa-alegria-bohol.png" alt=""></span>
         <h2>About Casa Alegria-Bohol </h2>
         <p>A waterfront accommodation. Swim and fish from our private pier.  The five bedrooms are preferably, ideal for a comfortable stay of a group of 5 - 10 people. At some occasions a group of 20: family, relatives, and close friends were happily accommodated.</p>
         </div>
         
         </div>  
      
      </div>
    
    </section> 
    


<?php get_footer(); ?>