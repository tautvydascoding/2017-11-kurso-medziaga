function makeMenu (){
  rect.style.width = " 12em";
  rect.style.height = " 12em";
  rectBack.style.opacity = " 1";
  firstMenu.style.opacity = " 1";
  secondMenu.style.opacity = " 1";
  thirdMenu.style.opacity = " 1";
  fourtMenu.style.opacity = " 1";
  fifthMenu.style.opacity = " 1";
  atag.style.display = " block";

}

function goBack () {
  rect.style.width = " 10em";
  rect.style.height = " 10em";
  rectBack.style.opacity = " 0";
  firstMenu.style.opacity = " 0";
  secondMenu.style.opacity = " 0";
  thirdMenu.style.opacity = " 0";
  fourtMenu.style.opacity = " 0";
  fifthMenu.style.opacity = " 0";
  atag.style.display = " none";


}

window.onload = function () {

var rect = document.getElementById('rect');
var rectBack = document.getElementById('rectBack');
var firstMenu = document.getElementById('firstMenu');
var secondMenu = document.getElementById('secondMenu');
var thirdMenu = document.getElementById('thirdMenu');
var fourtMenu = document.getElementById('fourtMenu');
var fifthMenu = document.getElementById('fifthMenu');
var atag = document.getElementById('atag');
rect.onclick = makeMenu;
rectBack.onclick = goBack;
};
