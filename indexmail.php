
<!DOCTYPE HTML>
<html>
<head>
<title>Gopalakrishnan Sankararajan</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Sanchez' rel='stylesheet' type='text/css'>
<script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
    <link href="css/flipping_gallery.css" rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/jquery.flipping_gallery.js"></script>
    <script>
	  $(document).ready( function() {
	    $(".gallery").flipping_gallery({
	      enableScroll:false,
	      direction: "forward",
	      flipDirection: "bottom",
	      spacing: 50, 
	      autoplay: 3000
	    });
	  });
		
	</script>
		<script type="text/javascript" src="js/jquery.easing.min.js"></script>
		<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
		<script type="text/javascript">
			$(function() {

				var filterList = {

					init : function() {

						// MixItUp plugin
						// http://mixitup.io
						$('#portfoliolist').mixitup({
							targetSelector : '.portfolio',
							filterSelector : '.filter',
							effects : ['fade'],
							easing : 'snap',
							// call the hover effect
							onMixEnd : filterList.hoverEffect()
						});

					},

					hoverEffect : function() {

						// Simple parallax effect
						$('#portfoliolist .portfolio').hover(function() {
							$(this).find('.label').stop().animate({
								bottom : 0
							}, 200, 'easeOutQuad');
							$(this).find('img').stop().animate({
								top : -30
							}, 500, 'easeOutQuad');
						}, function() {
							$(this).find('.label').stop().animate({
								bottom : -40
							}, 200, 'easeInQuad');
							$(this).find('img').stop().animate({
								top : 0
							}, 300, 'easeOutQuad');
						});

					}
				};

				// Run the show!
				filterList.init();

			});
		</script>
		
	<link href="css/magnific-popup.css" rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
	<script>
		$(document).ready(function() {
		$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',
	
			fixedContentPos: false,
			fixedBgPos: true,
	
			overflowY: 'auto',
	
			closeBtnInside: true,
			preloader: false,
			
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});

	});
  </script>
</head>





<?php
/* Set e-mail recipient */
$myemail = "gopalakrishnan@gopalasankar.com";
$name = $_POST['name'];
$subject ='CALL BACK REQUEST';
$company = $_POST['company'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$message = $_POST['message'];



$message = "

Name: $name
Company:$company
Phone:$phone
E-mail: $email

Message: $message

";


mail($myemail, $subject, $message);

/* Redirect visitor to the thank you page */
//header('Location: index.html');
//exit();


function check_input($data, $problem='')
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
if ($problem && strlen($data) == 0)
{
show_error($problem);
}
return $data;
}


?>

<body>
   <div class="header" id="header-top">	
   	<div class="wrap"> 
       <div class="header-top">
	         <div align="center">
				<a href="index.html"><img src="images/gk-logo.png"  alt="" style="padding:0px 0px 0px 20px"/></a>
			 </div>
		

            <!---start-top-nav---->
			
			<!---End-top-nav---->
		    <div class="clear"></div>
	   </div>
	  
	
     </style>
	        <div class="header-bottom section" id="section-1">
	        	
					<div class="img-banner">
						<div class="intro-text">
			        		<p>Thankyou, will get back to you as soon as possible</p>
                            <p><a href="index.html" style="color:#000; background:#fff; padding:10px; margin:10px; border-radius:5px; position:relative; top:15px;">Go Back to Profile</a></p>
			        	</div>
						
						
						<div class="clear"> </div>
					</div>
   				</div>
   			</div>
 		  </div>
 		 <!-- End Header -->
 		  
	    		
		
	 <!-- Contact -->
    <div class="contact-section section" id="section-5">
    	<div class="map">
    	
       	</div>
       	 <div class="wrap">
       	  <div class="contact-info">
				<div class="contact-info-left">
				   <h3>Feel free to contact me. Just fill the below form.</h3>
				   <form method="post" action="indexmail.php">
				   	<span>
				   		<input type="text" class="name-textbox" name="name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
					    <input type="text" class="telephone-textbox" value="Telephone" name="phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}">
					   <div class="clear"></div>
				   	</span>
					<input type="text" class="textbox" value="Email" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
					<span>
					<textarea value="Message:" class="message-textbox" name="message"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
				     <input type="submit" value="Go" class="contact-btn">
				     <div class="clear"></div>
				   	</span>
				   </form>
 				</div>
				<div class="contact-info-right">
				   <h3>Feel free to contact me. </h3>
				   <div class="comapny-address">
				   	<ul>
                    	<li>Gopalakrishnana Sankararajan</li>
				   		<li>India</li>
						
						
				   	</ul>
				   	<ul>
				   		<li>Email : <a href="mailto:gpl.sankar@gmail.com?Subject=Inquiry:&body=Contact%20Name:%0APhone %20number:%0AEmail:%0AMessage:">gpl.sankar@gmail.com</a></li>
						
						<li>Mob : 9600778228</li>
				   	</ul>
				   	<div class="clear"></div>
				   </div>
				   <div class="social-media">
				   	<h3>Get In Touch</h3>
				   	<ul>
				   		<li class="facebook"><a href="https://www.facebook.com/gopala.krishnan.73997" target="_blank"> </a></li>
				   		<li class="linked-in"><a href="https://www.linkedin.com/profile/view?id=286148156&trk=nav_responsive_tab_profile" target="_blank"> </a></li>
				   	</ul>
				   </div>
			   </div>
     	  </div>
				
         <div class="footer">
         	 <div class="copy copy-left">
		     
        	</div>
		     
        	<div class="clear"></div>
        	<div class="scroll-top">
        		<a href="#header-top" class="scroll"> </a>
        	</div>
	    </div>
     </div>
  </div>
	<!-- End Contact -->
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.nav.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		$('#nav').onePageNav({
			begin: function() {
			console.log('start')
			},
			end: function() {
			console.log('stop')
			}
		});
	});
	</script>
	<script type="text/javascript">
	    jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>

</body>
</html>

    	
    	
            