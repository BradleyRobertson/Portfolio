<?php

require_once("admin/includes/config.php");

if(isset($_POST['submit'])){
	$message = $_POST['message'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$robot = $_POST['robot'];
	$direct = "thankyou.php";

	if($robot == ""){
		$mail = submitMessage($name, $message, $email, $subject, $direct);
	}
	else{
	  die("Robot Detected");
	  exit();
	}
}
 ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Brad Robertson</title>
<script src="js/TweenMax.min.js"></script>
<script src="js/ScrollToPlugin.min.js"></script>
<link rel="stylesheet" href="css/foundation.css">
<link rel="stylesheet" href="css/main.css">
</head>

<body>
<div id="container">
	<h1 class="hide"> Brad robertson homepage </h1>

	<!-- Navigation Bar-->
	<header id="Navigation">
		<h2 class="hide"> Navigation </h2>
	<nav id="NavBar" class="row large-12 hide-for small">
		<a class="NavOptions large-offset-0 large-3 columns small-10 small-offset-1" id="HomeNav" href="#HomeNav2"> Home </a>
				<a class="NavOptions large-3 large-offset-0 columns small-10 small-offset-1" id="PreviousNav" href="#PreviousNav2"> Previous Works </a>
		<a class="NavOptions large-offset-0 large-3 columns small-10 small-offset-1" id="AboutNav" href="#AboutNav2"> About </a>
				<a class="NavOptions large-3 large-pull-0 columns small-10 small-pull-1" id="ContactNav" href="#ContactNav2"> Contact Me  </a>
		</nav>
	</header>
	<div class="seperator">
	</div>
	<!-- Navigation Bar end-->

	<!--Home page content-->
	<section class="Home" id="HomeNav2">
<section id="Logo" class="row">
	<h2 class="hide" id="HomeNav2"> Home </h2>
	<img src="images/logoheadersmall.jpg" alt="logo" id="logoimage" class="large-pull-1 large-10 small-pull-1 small-10 columns">
</section>

<section class="Promowork row">
	<h2 class="hide"> Home promo </h2>
	<div class="large-2 large-offset-1 small-8 small-offset-2 columns">
	<img src="images/promowork1.jpg" alt="Promo work 1" class="promoBox">
	<p class="PromoHeaders"> Logo Design </p>
</div>
<div class="large-2 large-offset-2 small-8 small-offset-2 columns">
	<img src="images/promowork2.png" alt="Promo work 2" class="promoBox">
	<p class="PromoHeaders"> Photoshop Work </p>
</div>
<div class="large-2 large-pull-1 small-8 small-pull-2 columns">
	<img src="images/promowork3.png" alt="Promo work 3" class="promoBox">
	<p class="PromoHeaders"> 3D Modeling and Design </p>
</div>
</section>
<div class="seperator2">
</div>
</section>
	<!--Home page content end -->

	<!--Previous work section content-->
<section id="Previousworks" class-"Previousworks row">
	<!-- -->
	<div class="row">
  <div class="column">
    <img src="img/lightbox_images/beer-logo.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="img/lightbox_images/crunican-logo.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="img/lightbox_images/car_logo.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow">
  </div>
</div>

<!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 3</div>
      <img src="img/lightbox_images/beer-bottles.png" style="width:100%" alt="image1">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 3</div>
      <img src="img/lightbox_images/crunican.png" style="width:100%" alt="image2">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 3</div>
      <img src="video/car_video" style="width:100%" alt="image3">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img class="demo" src="img/lightbox_images/img_lights_wide.jpg" style="width:100%" alt="This was an assignment I was given in one of my classes. We had to create a mashup of the beer bottle label and the iconic brand to create a new and unique beer product. The brand I choose was 501 Vintage by Levis Jeans. I wanted the label to represent Levis Jeans as much as possible, so I made the background a jean texture, and made the whole shape as the back of one of their jeans. The red strip symbolized the Levis strip at the back of their jeans. I then added a stitching  effect to the jean outline. The top label was to add more information on their company, and I added more stitching around that as well.">
    </div>

    <!-- Caption text -->
    <div class="caption-container">
      <p id="caption"></p>
    </div>

    <!-- Thumbnail image controls -->
    <div class="column">
      <img class="demo" src="img/lightbox_images/beer-logo.jpg" onclick="currentSlide(1)" alt="This website was a rejuvenate and reboot an apple picking farm’s website, Crunican Orchards. I decided to start with their logo, making it a simple yet effective. I styled the name, and decided to put an apple on top so people would refer to their apple-picking company. With their website, I tried my best to use the colour red as much as possible, since people refer the colour red too apples. The colour scheme I choose was red and white. Their background was a wood texture, since their wooden store is in most of their photos and popular.">
    </div>

    <div class="column">
      <img class="demo" src="img/lightbox_images/crunican-logo.jpg" onclick="currentSlide(2)" alt="Trolltunga">
    </div>

    <div class="column">
      <img class="demo" src="img/lightbox_images/car_logo.jpg" onclick="currentSlide(3)" alt="Mountains">
    </div>
  </div>
</div>
	<!-- -->
	<h2 class="hide" id="PreviousNav2"> Prevous works </h2>
	<h3 class="previousmainheader large-offset-2 small-8 small-offset-2 columns"> My Previous Works </h3>
	<div class="prevwork large-2 large-offset-1 small-8 small-offset-2 columns">
	<img src="images/previewimage1.png" alt="previous work 1" class="prevworkimg large-12">
	<h4 class="previousheader"> Piece title </h4>
	<div class="seperator2">
	</div>
	<p class="PreviousWorkDesc"> Previous work desc 1 </p>
</div>
<div class="prevwork large-2 large-offset-2 small-8 small-offset-2 columns">
	<img src="images/previewimage1.png" alt="previous work 2" class="prevworkimg">
		<h4 class="previousheader"> Piece title </h4>
		<div class="seperator2">
		</div>
	<p class="PreviousWorkDesc"> Previous work desc 2 </p>
</div>
<div class="prevwork large-2 large-offset-2 small-8 small-offset-2 columns">
	<img src="images/previewimage1.png" alt="previous work 3" class="prevworkimg">
	<h4 class="previousheader"> Piece title </h4>
	<div class="seperator2">
	</div>
	<p class="PreviousWorkDesc"> Previous work desc 3 </p>
</div>
<div class="prevwork large-2 large-offset-1 small-8 small-offset-2 columns">
	<img src="images/previewimage1.png" alt="previous work 4" class="prevworkimg">
	<h4 class="previousheader"> Piece title </h4>
	<div class="seperator2">
	</div>
	<p class="PreviousWorkDesc"> Previous work desc 4 </p>
</div>
<div class="prevwork large-2 large-offset-2 small-8 small-offset-2 columns">
	<img src="images/previewimage1.png" alt="previous work 5" class="prevworkimg">
	<h4 class="previousheader"> Piece title </h4>
	<div class="seperator2">
	</div>
	<p class="PreviousWorkDesc"> Previous work desc 5 </p>
</div>
<div class="prevwork large-2 large-offset-2 large-pull-1 small-8 small-pull-2 columns">
	<img src="images/previewimage1.png" alt="previous work 6" class="prevworkimg">
	<h4 class="previousheader"> Piece title </h4>
	<div class="seperator2">
	</div>
	<p class="PreviousWorkDesc"> Previous work desc 6 </p>
</div>
</section>
	<!--Previous Work section content end -->

	<!--About section page content-->
	<section id="AboutNav2" class="AboutMe">
	<h2 class="hide"> about section </h2>
<div class="AboutSection large-10 small-offset-1 small-10 row">
	<img src="images/aboutmeimage.png" class="AboutMeImage large-pull-1 large-4 small-8 small-offset-2 columns">
	<div class="large-12 small-12">
	<h3 class="AboutHeader large-offset-0 large-4 columns"> My Name is Brad Robertson </h3>
	<p class="Aboutparagraph large-pull-2 large-4 columns"> Hello, my name is Brad, and i enjoy long walks to the kitchen at 4AM to get more caffiene because my proffessors have a distane for sleep schedules.  My main interests as shown are photoshop, 3d modeling and video editing. I have 6 years experience of photoshop, 4 of video production and editng and one year of 3d modeling. I alo can code, as i know HTML5, CSS3, Java, Javascript, SQL and Basic, though i’d rather stay behind the design aspect of things. I like to be very foreward and friendly with people so if you have any questions feel free to message me! </p>
</div>
</div>
</section>
<!--About section content end-->

<!--Contact section content -->
<section id="ContactNav2" class="contact large-12 small-12">
<h2 class="hide"> Contact info </h2>
<div class="ContactMe large-10 large-offset-1 small-10 small-offset-1 row">
<h3 class="contactheader large-3 large-offset-1 small-10 small-offset-1 columns"> Contact me </h3>
<p class="paragraph large-3 large-offset-6 large-pull-5 columns"> If you’d like to contact me for details about what i do or business details, you can contact me through the form
provided on the left and i’ll get back to you in
usually 1 -2 business days </p>
<div class="inputs large-6 columns">
<input name="name" id="Name" class="contactinput large-8 large-offset-0 small-8 small-offset-2 columns" placeholder="Name"> </input>
<input name="email" id="Email" class="contactinput large-8 large-offset-0 small-8 small-offset-2 columns" placeholder="Email"></input>
<input name="subject" id="Subject" class="contactinput large-8 large-offset-0 small-8 small-offset-2 columns" placeholder="Subject"></input>
<input name="robot" class="hide"></input>
<textarea name="message" id="Message" class="contactinput large-10 large-offset-0 small-8 small-offset-2 columns" placeholder="Leave your message here"></textarea>
<button name ="submit" id="Send" class="contactinput large-2 large-offset-4 large-pull-10 small-pull-2 small-2 small-offset-5 small-pull-5 columns"> Send </button>
</div>
</div>
</section>
<!--Contact section end -->

<!--Footer content-->
<footer id="Footer">
	<h2 class="hide"> Footer </h2>
	<p class="FooterTexts large-3 large-offset-2 small-5 columns"> BradsDesigns 2018 </p>
	<a href="https://www.instagram.com/space0ditty/" target="_blank"><img src="images/instagram.png" alt="instagram" class="SocialLinks large-1 large-offset-3 small-offset-3 small-1 columns"></a>
	<a href="https://www.facebook.com/profile.php?id=100015551267995" target="_blank"> <img src="images/facebook.png" alt="facebook" class="SocialLinks large-1 large-pull-0 small-1 small-pull-0 columns"></a>
</footer>
	<!--Footer end-->

	<script src="js/vendor/jquery.js"></script>
		<script src="js/vendor/what-input.js"></script>
		<script src="js/vendor/foundation.js"></script>
		<script src="js/lightboxcontent.js"></script>
	<script src="js/main.js"></script>
	</div>
</body>
</html>
