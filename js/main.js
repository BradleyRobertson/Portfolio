

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
