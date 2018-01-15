<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once("admin/includes/config.php");

if(isset($_POST['submit'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$robot = $_POST['robot'];

	if($robot == ""){
		$mail = submitMessage($name, $email, $subject, $message);
}else{
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
         <h1 class="hide"> Brad Robertson </h1>

         <!-- Navigation Bar-->
             <nav id="NavBar" class="row large-12 hide-for small">
							 <h2 class="hide"> Navigation </h2>
                 <a class="NavOptions large-offset-0 large-3 columns small-10 small-offset-1" id="HomeNav" href="#HomeNav2"> Home </a>
                 <a class="NavOptions large-3 large-offset-0 columns small-10 small-offset-1" id="PreviousNav" href="#PreviousNav2"> Previous Works </a>
                 <a class="NavOptions large-offset-0 large-3 columns small-10 small-offset-1" id="AboutNav" href="#AboutNav2"> About </a>
                 <a class="NavOptions large-3 large-pull-0 columns small-10 small-pull-1" id="ContactNav" href="#ContactNav2"> Contact Me  </a>
             </nav>
         <div class="seperator" id="seperation">
         </div>
         <!-- Navigation Bar end-->

         <!--Home page content-->
         <section id="Home" class="Home">
             <h2 class="hide" id="HomeNav2"> Home </h2>
             <section id="Logo" class="row">
                 <h3 class="hide"> Logo Header </h3>
                 <img src="images/logoheadersmall.jpg" alt="logo" id="logoimage" class="large-pull-1 large-10 small-pull-1 small-10 columns">
             </section>

             <section class="Promowork row">
                 <h3 class="hide"> Home Design Features </h3>
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
         <section id="Previousworks" class="Previousworks">
             <h2 class="hide" id="PreviousNav2"> Previous works </h2>
             <h3 class="previousmainheader large-offset-2 small-8 small-offset-2 columns"> My Previous Works </h3>

             <div class="prevwork large-2 large-offset-1 small-8 small-offset-2 columns" onclick="openLightbox();currentSlide(1)">
                 <img src="images/previewimage1.png" alt="previous work 1" class="prevworkimg large-12 columns">
                 <h4 class="previousheader"> Close up photography </h4>
                 <div class="seperator2">
                 </div>
                 <p class="PreviousWorkDesc"> Close up Photography done at Fanshawe Campus </p>
             </div>

             <div class="prevwork large-2 large-offset-2 small-8 small-offset-2 columns" onclick="openLightbox();currentSlide(2)">
                 <img src="images/previewimage2.jpg" alt="previous work 2" class="prevworkimg large-12 columns">
                 <h4 class="previousheader"> First Light logo </h4>
                 <div class="seperator2">
                 </div>
                 <p class="PreviousWorkDesc"> This design was what’s known as a pathtag, a smal coin used in geocacheing </p>
             </div>

             <div class="prevwork large-2 large-offset-2 small-8 small-offset-2 columns" onclick="openLightbox();currentSlide(3)">
                 <img src="images/previewimage3.jpg" alt="previous work 3" class="prevworkimg large-12 columns">
                 <h4 class="previousheader"> Florida Photography </h4>
                 <div class="seperator2">
                 </div>
                 <p class="PreviousWorkDesc"> This scenic picture was taken on the sandy shores of Melbourne Florida </p>
             </div>

             <div class="prevwork large-2 large-offset-1 small-8 small-offset-2 columns" onclick="openLightbox();currentSlide(4)">
                 <img src="images/previewimage4.jpg" alt="previous work 4" class="prevworkimg large-12 columns">
                 <h4 class="previousheader"> Northern Canada Photography </h4>
                 <div class="seperator2">
                 </div>
                 <p class="PreviousWorkDesc"> Close up Photography Taken in Rouyn-Noranda, Canada </p>
             </div>

             <div class="prevwork large-2 large-offset-2 small-8 small-offset-2 columns" onclick="openLightbox();currentSlide(5)">
                 <img src="images/previewimage5.jpg" alt="previous work 5" class="prevworkimg large-12 columns">
                 <h4 class="previousheader"> Poji Logo </h4>
                 <div class="seperator2">
                 </div>
                 <p class="PreviousWorkDesc"> “Poji” Logo designed in Illustrator </p>
             </div>

             <div class="prevwork large-2 large-offset-0 large-push-2 small-8 small-push-2 columns" onclick="openLightbox();currentSlide(6)">
                 <img src="images/previewimage6.jpg" alt="previous work 6" class="prevworkimg large-12 columns">
                 <h4 class="previousheader"> Soccer Modeling </h4>
                 <div class="seperator2">
                 </div>
                 <p class="PreviousWorkDesc"> Soccer animation and modeling done in Cinema 4D and edited in After Effects </p>
             </div>

             <div id="lghtboxer" class="lightboximageholder">
                 <span class="close cursor" onclick="closeLightbox()">&times;</span>
                 <div class="lghtboxContents">

                     <div class="largelightboxImage">
                         <img src="images/previewimage1.jpg" style="width:100%" alt="lightboximage1">
                     </div>

                     <div class="largelightboxImage">
                         <img src="images/previewimage2.jpg" style="width:100%" alt="lightboximage2">
                     </div>

                     <div class="largelightboxImage">
                         <img src="images/previewimage3.jpg" style="width:100%" alt="lightboximage3">
                     </div>

                     <div class="largelightboxImage">
                         <img src="images/previewimage4.jpg" style="width:100%" alt="lightboximage4">
                     </div>

                     <div class="largelightboxImage">
                         <img src="images/previewimage5.jpg" style="width:100%" alt="lightboximage5">
                     </div>

                     <div class="largelightboxImage">
                         <img src="images/previewimage6.jpg" style="width:100%" alt="lightboximage6">
                     </div>

                 </div>
             </div>
         </section>
         <!--Previous Work section content end -->

         <!--About section page content-->
         <section id="About" class="AboutMe">
             <h2 class="hide"> About section </h2>
             <div class="AboutSection large-10 small-offset-1 small-10 row">
                 <img src="images/aboutmeimage.png" class="AboutMeImage large-pull-1 large-4 small-8 small-offset-2 columns">
                 <div class="large-12 small-12">
                     <h3 class="AboutHeader large-offset-0 large-4 columns"> My Name is Brad Robertson </h3>
                     <p class="Aboutparagraph large-pull-2 large-4 columns"> Hello, my name is Brad, and i enjoy long walks to the kitchen at 4AM to get more caffeine because my Professors have a disdane for sleep schedules. My main interests as shown are Photoshop, 3d Modeling and Video editing. I have 6 years
                         experience of Photoshop, 4 of Video production and editng and one year of 3d modeling. I also can code, as i know HTML5, CSS3, Java, Javascript, SQL and Basic, though i’d rather stay behind the design aspect of things. I like to
                         be very foreward and friendly with people so if you have any questions feel free to message me! </p>
                 </div>
             </div>
         </section>
         <!--About section content end-->

         <!--Contact section content -->
         <section id="Contact" class="contact large-12 small-12">
             <h2 class="hide"> Contact info </h2>
             <div class="ContactMe large-10 large-offset-1 small-10 small-offset-1 row">
                 <h3 class="contactheader large-3 large-offset-1 small-10 small-offset-1 columns"> Contact Me </h3>
                 <p class="paragraph large-3 large-offset-6 large-pull-5 columns"> If you’d like to Contact me for details about what i do or about any work related inquiries, You can contact me through the form provided and I’ll get back to you in usually 1 -2 business days </p>
                 <div class="inputs large-6 columns">
                     <input name="name" required id="Name" class="contactinput large-8 large-offset-0 small-8 small-offset-2 columns" placeholder="Name"> </input>
                     <input name="email" required id="Email" class="contactinput large-8 large-offset-0 small-8 small-offset-2 columns" placeholder="Email"></input>
                     <input name="subject" required id="Subject" class="contactinput large-8 large-offset-0 small-8 small-offset-2 columns" placeholder="Subject"></input>
                     <input name="robot" class="hide"></input>
                     <textarea name="message" required id="Message" class="contactinput large-10 large-offset-0 small-8 small-offset-2 columns" placeholder="Leave your message here"></textarea>
                     <button id="Send" class="contactinput large-2 large-offset-4 large-pull-10 small-pull-2 small-2 small-offset-5 small-pull-5 columns"> Send </button>
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
