<?php
add_theme_support('post-thumbnails');


add_filter( 'the_content', 'nl2br' );
add_filter( 'the_excerpt', 'nl2br' );

function register_my_menus() {
  register_nav_menus(
    array(
      'new-menu' => __( 'New Menu' ),
      'another-menu' => __( 'Another Menu' ),
      'an-extra-menu' => __( 'An Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Name of Widgetized Area") ) :
endif;


if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Name of Widgetized Area',
    'before_widget' => '<div class = "widgetizedArea">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);


function remove_empty_p( $content ) {
    $content = force_balance_tags( $content );
    $content = preg_replace( '#<p>\s*+(<br\s*/*>)?\s*</p>#i', '', $content );
    $content = preg_replace( '~\s?<p>(\s|&nbsp;)+</p>\s?~', '', $content );
    return $content;
}
add_filter('the_content', 'remove_empty_p', 20, 1); 

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );


add_action( 'add_meta_boxes', 'cd_meta_box_add' );
add_action( 'save_post', 'cd_meta_box_save' );


function cd_meta_box_add(){
    add_meta_box( 'my-meta-box-id', 'My Meta Box', 'cd_meta_box_cb' ,'post', 'normal', 'high' );
}


function cd_meta_box_cb($post){
	global $post;
    $values = get_post_custom( $post->ID );
	
	wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );
	
	$text = isset( $values['my_meta_box_text'] ) ? $values['my_meta_box_text'] : '';
	$room = isset( $values['my_meta_box_room_price'] ) ? $values['my_meta_box_room_price'] : '';
	$priceOffer = isset( $values['my_meta_box_price_offer'] ) ? $values['my_meta_box_price_offer'] : '';
	$phoneNumber = isset( $values['my_meta_box_phone_number'] ) ? $values['my_meta_box_phone_number'] : '';
	$emailNumber = isset( $values['my_meta_box_email'] ) ? $values['my_meta_box_email'] : '';
	$day = isset( $values['my_meta_day'] ) ? $values['my_meta_day'] : '';
	$month = isset( $values['my_meta_month'] ) ? $values['my_meta_month'] : '';
	$occupancy = isset( $values['my_meta_occupancy'] ) ? $values['my_meta_occupancy'] : '';
	$size = isset( $values['my_meta_size'] ) ? $values['my_meta_size'] : '';
	$view = isset( $values['my_meta_view'] ) ? $values['my_meta_view'] : '';
	$roomService = isset( $values['my_meta_room_service'] ) ? $values['my_meta_room_service'] : '';
	$terraces = isset( $values['my_meta_terraces'] ) ? $values['my_meta_terraces'] : '';
	$freePickupFacility = isset( $values['my_meta_free_pickup_facility'] ) ? $values['my_meta_free_pickup_facility'] : '';
	$internetFree = isset( $values['my_meta_internet_free'] ) ? $values['my_meta_internet_free'] : '';
	$amenities = isset( $values['my_meta_amenities'] ) ? $values['my_meta_amenities'] : '';
	$menuPrice = isset( $values['my_meta_box_menu_price'] ) ? $values['my_meta_box_menu_price'] : '';
	$name = isset( $values['my_meta_box_name'] ) ? $values['my_meta_box_name'] : '';
	$tag = isset( $values['my_meta_box_tag'] ) ? $values['my_meta_box_tag'] : '';
	
	echo "<label for='my_meta_box_text'><strong>Position:</strong> </label>";
    echo "<input type='text' name='my_meta_box_text' id='my_meta_box_text' value='$text[0]' />";
	echo "<br>";
	
	echo "<label for='my_meta_box_room_price'><strong>Room Price:</strong> </label>";
    echo "<input type='text' name='my_meta_box_room_price' id='my_meta_box_room_price' value='$room[0]' />";
	
	echo "<br>";
	echo "<label for='my_meta_box_price_offer'><strong>Offer Text:</strong> </label>";
	echo "<input type='text' name='my_meta_box_price_offer' id='my_meta_box_price_offer' value='$priceOffer[0]' />";

	echo "<br>";
	echo "<label for='my_meta_box_phone_number'><strong>Phone Number:</strong> </label>";
	echo "<input type='text' name='my_meta_box_phone_number' id='my_meta_box_phone_number' value='$phoneNumber[0]' />";

	echo "<br>";
	echo "<label for='my_meta_box_email'><strong>Email Address:</strong> </label>";
	echo "<input type='text' name='my_meta_box_email' id='my_meta_box_email' value='$emailNumber[0]' />";
	
	echo "<br>";
	echo "<br>";
	echo "<label for='my_meta_box_menu_price'><strong>Menu Price:</strong> </label>";
	echo "<input type='text' name='my_meta_box_menu_price' id='my_meta_box_menu_price' value='$menuPrice[0]' />";
	echo "<br>";
	echo "<br>";
	echo "<p>Our Events</p>";
	echo "<label for='my_meta_day'><strong>Day:</strong> </label>";
	echo "<input type='text' name='my_meta_day' id='my_meta_day' value='$day[0]' />";
	echo "<label for='my_meta_month'><strong>Month:</strong> </label>";
	echo "<input type='text' name='my_meta_month' id='my_meta_month' value='$month[0]' />";
	
	echo "<br>";
	echo "<br>";
	echo "<p>Room Overview: </p>";
	echo "<label for='my_meta_occupancy'><strong>Occupancy:</strong> </label>";
	echo "<input type='text' name='my_meta_occupancy' id='my_meta_occupancy' value='$occupancy[0]' />";
	echo "<br>";
	echo "<label for='my_meta_size'><strong>Size:</strong> </label>";
	echo "<input type='text' name='my_meta_size' id='my_meta_size' value='$size[0]' />";
	echo "<br>";
	echo "<label for='my_meta_view'><strong>View:</strong> </label>";
	echo "<input type='text' name='my_meta_view' id='my_meta_view' value='$view[0]' />";
	echo "<br>";
	echo "<label for='my_meta_room_service'><strong>Room Service:</strong> </label>";
	echo "<input type='text' name='my_meta_room_service' id='my_meta_room_service' value='$roomService[0]' />";
	echo "<br>";
	echo "<label for='my_meta_terraces'><strong>Terraces:</strong> </label>";
	echo "<input type='text' name='my_meta_terraces' id='my_meta_terraces' value='$terraces[0]' />";
	echo "<br>";
	echo "<label for='my_meta_free_pickup_facility'><strong>Free Pickup Facility:</strong> </label>";
	echo "<input type='text' name='my_meta_free_pickup_facility' id='my_meta_free_pickup_facility' value='$freePickupFacility[0]' />";
	echo "<br>";
	echo "<label for='my_meta_internet_free'><strong>Internet Free:</strong> </label>";
	echo "<input type='text' name='my_meta_internet_free' id='my_meta_internet_free' value='$internetFree[0]' />";
	echo "<br>";
	echo "<label for='my_meta_amenities'><strong>Amenities:</strong> </label>";
	echo "<input type='text' name='my_meta_amenities' id='my_meta_amenities' value='$amenities[0]' />";
	echo "<br>";
	echo "<label for='my_meta_box_name'><strong>Name:</strong> </label>";
	echo "<input type='text' name='my_meta_box_name' id='my_meta_box_name' value='$name[0]' />";
	echo "<br>";
	echo "<label for='my_meta_box_tag'><strong>Tag:</strong> </label>";
	echo "<input type='text' name='my_meta_box_tag' id='my_meta_box_tag' value='$tag[0]' />";
}	



function cd_meta_box_save( $post_id ){
	// Bail if we're doing an auto save
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
     
    // if our nonce isn't there, or we can't verify it, bail
    if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;
     
    // if our current user can't edit this post, bail
    if( !current_user_can( 'edit_post' ) ) return;
     
    // now we can actually save the data
    $allowed = array( 
        'a' => array( // on allow a tags
            'href' => array() // and those anchors can only have href attribute
        )
    );
     
    // Make sure your data is set before trying to save it
    if(isset($_POST['my_meta_box_text']))
		update_post_meta( $post_id, 'my_meta_box_text', wp_kses( $_POST['my_meta_box_text'], $allowed ) );
	
	 if(isset($_POST['my_meta_box_room_price']))
		update_post_meta( $post_id, 'my_meta_box_room_price', wp_kses( $_POST['my_meta_box_room_price'], $allowed ) );
	
	 if(isset($_POST['my_meta_box_price_offer']))
		update_post_meta( $post_id, 'my_meta_box_price_offer', wp_kses( $_POST['my_meta_box_price_offer'], $allowed ) );
	
	 if(isset($_POST['my_meta_box_phone_number']))
		update_post_meta( $post_id, 'my_meta_box_phone_number', wp_kses( $_POST['my_meta_box_phone_number'], $allowed ) );
	
	 if(isset($_POST['my_meta_box_email']))
		update_post_meta( $post_id, 'my_meta_box_email', wp_kses( $_POST['my_meta_box_email'], $allowed ) );
	
	 if(isset($_POST['my_meta_day']))
		update_post_meta( $post_id, 'my_meta_day', wp_kses( $_POST['my_meta_day'], $allowed ) );
	
	 if(isset($_POST['my_meta_month']))
		update_post_meta( $post_id, 'my_meta_month', wp_kses( $_POST['my_meta_month'], $allowed ) );
	
	if(isset($_POST['my_meta_occupancy']))
		update_post_meta( $post_id, 'my_meta_occupancy', wp_kses( $_POST['my_meta_occupancy'], $allowed ) );
	
	if(isset($_POST['my_meta_size']))
		update_post_meta( $post_id, 'my_meta_size', wp_kses( $_POST['my_meta_size'], $allowed ) );
	
	if(isset($_POST['my_meta_view']))
		update_post_meta( $post_id, 'my_meta_view', wp_kses( $_POST['my_meta_view'], $allowed ) );
	
	if(isset($_POST['my_meta_room_service']))
		update_post_meta( $post_id, 'my_meta_room_service', wp_kses( $_POST['my_meta_room_service'], $allowed ) );
	
	if(isset($_POST['my_meta_terraces']))
		update_post_meta( $post_id, 'my_meta_terraces', wp_kses( $_POST['my_meta_terraces'], $allowed ) );
	
	if(isset($_POST['my_meta_free_pickup_facility']))
		update_post_meta( $post_id, 'my_meta_free_pickup_facility', wp_kses( $_POST['my_meta_free_pickup_facility'], $allowed ) );
	
	if(isset($_POST['my_meta_internet_free']))
		update_post_meta( $post_id, 'my_meta_internet_free', wp_kses( $_POST['my_meta_internet_free'], $allowed ) );
	
	if(isset($_POST['my_meta_amenities']))
		update_post_meta( $post_id, 'my_meta_amenities', wp_kses( $_POST['my_meta_amenities'], $allowed ) );
	
	if(isset($_POST['my_meta_box_menu_price']))
		update_post_meta( $post_id, 'my_meta_box_menu_price', wp_kses( $_POST['my_meta_box_menu_price'], $allowed ) );
	
	if(isset($_POST['my_meta_box_name']))
		update_post_meta( $post_id, 'my_meta_box_name', wp_kses( $_POST['my_meta_box_name'], $allowed ) );
	
	if(isset($_POST['my_meta_box_tag']))
		update_post_meta( $post_id, 'my_meta_box_tag', wp_kses( $_POST['my_meta_box_tag'], $allowed ) );
	
}


function get_the_slug( $id=null ){
	if( empty($id) ):
	global $post;
	if( empty($post) )
	  return ''; // No global $post var available.
	$id = $post->ID;
	endif;

	$slug = basename( get_permalink($id) );
	return $slug;
}

/**
 * Display the page or post slug
 *
 * Uses get_the_slug() and applies 'the_slug' filter.
 */

function the_slug( $id=null ){
	
	echo apply_filters( 'the_slug', get_the_slug($id) );

}

function contact_send_message() {

    $contact_errors = false;

    // get the posted data
	$name = $_POST['name'];
	$email = $_POST['email'];
	$arival_date = $_POST['arival_date'];
	$departure_date = $_POST['departure_date'];
	$chooseAdults = $_POST['chooseAdults'];
	$chooseChildren = $_POST['chooseChildren'];
	$message = $_POST['message'];
    // write the email content
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

    // send the email using wp_mail()
    if( !wp_mail($to, $subject, $message, $header) ) {
        $contact_errors = true;
    }

}


