//lightbox star //
$(document).foundation()
// Open the Modal
function openLightbox() {
  document.getElementById('myModal').style.display = "block";
}

// Close the Modal
function closeLightbox() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var images = document.getElementsByClassName("largelightboxImage");
  if (n > images.length) {slideIndex = 1}
  if (n < 1) {slideIndex = images.length}
  for (i = 0; i < images.length; i++) {
    images[i].style.display = "none";
  }

  images[slideIndex-1].style.display = "block";
}
//lightboxes end //
// scrollto thingo//


  var HomeSection = document.querySelector("#HomeNav"),
      PreviousSection = document.querySelector("#PreviousNav"),
      AboutSection = document.querySelector("#AboutNav"),
      ContactSection = document.querySelector("#ContactNav");

      //console.log(HomeSection);

      HomeSection.addEventListener("click", HomeSectionNav);
          PreviousSection.addEventListener("click", PreviousSectionNav);
              AboutSection.addEventListener("click", AboutSectionNav);
                  ContactSection.addEventListener("click", ContactSectionNav);
                //  console.log("this is loading fine");

function HomeSectionNav() {
  //console.log("from Home Section Nav");
  TweenMax.to(window, 2, {ScrollTo:"#HomeNav2"});
  //console.log("working1");
}

function PreviousSectionNav() {
  TweenMax.to(window, 2, {scrollTo:"#Previousworks"});
    //console.log("working2");
}

function AboutSectionNav() {
  TweenMax.to(window, 2, {scrollTo:"#AboutNav2"});
    //console.log("working3");
}

function ContactSectionNav() {
  TweenMax.to(window, 2, {scrollTo:"#ContactNav2"});
    //console.log("working4");
}
