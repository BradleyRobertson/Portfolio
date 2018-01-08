// JavaScript Document
var HomeSection = document.getElementById("HomeNav"),
    PreviousSection = document.getElementById("PreviousNav"),
    AboutSection = document.getElementById("AboutNav"),
    ContactSection = document.getElementById("ContactNav");

HomeSection.onclick = function() {
  TweenLite.to(window, 1, {scrollTo:{y:"#HomeNav2", offsetY:70}});
}

PreviousSection.onclick = function() {
  TweenLite.to(window, 1, {scrollTo:{y:"#PreviousNav2", offsetY:70}});
}

AboutSection.onclick = function() {
  TweenLite.to(window, 1, {scrollTo:{y:"#AboutNav2", offsetY:70}});
}

ContactSection.onclick = function() {
  TweenLite.to(window, 1, {scrollTo:{y:"#ContactNav2", offsetY:70}});
}
