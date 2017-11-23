
function myFun() {
    userPasirinkimas = window.getSelection();
    var tekstas = userPasirinkimas.toString();
    //console.log(tekstas);
     if (tekstas != 'undefined'){
        //Sukuriamas p tagas
        var para = document.createElement("p");
        para.setAttribute("id", "pTagas");
        // SUkuriamas tekstas
        var node = document.createTextNode(tekstas);
        // tekstas pridedamas p tagui
        para.appendChild(node);
        // pasiimamas tagas kurima norime kad butu sukurtas p
        var element = document.getElementById("op");
        // priskiriame p taga p tagui ir pakeiciama teksto kalba;
        element.appendChild(para).style.color = "red";
        element.appendChild(para).style.fontSize = "30px";

    }
}
function pietusP(){
    var x = document.getElementsByClassName("pirmas");
    x[0].style.zIndex = "3";
    var y = document.getElementsByClassName("antras");
    y[0].style.zIndex = "0";
    var z = document.getElementsByClassName("trecias");
    z[0].style.zIndex = "0";
}

function pietusA(){
    var x = document.getElementsByClassName("pirmas");
    x[0].style.zIndex = "0";
    var y = document.getElementsByClassName("antras");
    y[0].style.zIndex = "3";
    var z = document.getElementsByClassName("trecias");
    z[0].style.zIndex = "0";
}
function pietusT(){
    var x = document.getElementsByClassName("pirmas");
    x[0].style.zIndex = "0";
    var y = document.getElementsByClassName("antras");
    y[0].style.zIndex = "0";
    var z = document.getElementsByClassName("trecias");
    z[0].style.zIndex = "3";
}

function myMove() {
var elem = document.getElementById("myAnimation");
var pos = 0;
var id = setInterval(frame, 10);
function frame() {
    if (pos == 350) {
        clearInterval(id);
    } else {
        pos++;
        elem.style.top = pos + 'px';
        elem.style.left = pos + 'px';
    }
}
}
var opt = document.getElementById('pirmas');
var br;
function newF(){
    opt.style.opacity = 1;
    br = setInterval(newFF,100);
    function newFF(){
        if(opt.style.opacity == 0){
        clearInterval(br);
        var x = document.getElementsByClassName("pirmas");
        x[0].style.zIndex = "0";
        var y = document.getElementsByClassName("antras");
        y[0].style.zIndex = "2";
        var z = document.getElementsByClassName("trecias");
        z[0].style.zIndex = "0";
    } else {
      opt.style.opacity -= 0.1;
    }
    }
}
var optA = document.getElementById('antras');
var br1;

function newA(){
    optA.style.opacity = 1;
    br1 = setInterval(newFF,100);
    function newFF(){
        if (optA.style.opacity == 0){
        clearInterval(br1);
    } else {
      optA.style.opacity -= 0.1;
    }
    }

// scriptaculous-js bibliotekos funkcija
}

var xx = document.getElementById('pirmas');
var yy = document.getElementById('antras');
var zz = document.getElementById('trecias');
var zP = 3 , zA= 2, zT = 1 ;
var br;
function newS(){
    if((zP > zA) && (zP > zA)) {
        xx.style.opacity = 1;
        console.log("veikia");
        br = setInterval(newF,100);
        }

        function newF(){
            if (xx.style.opacity == 0){
            clearInterval(br);
        } else {
          xx.style.opacity -= 0.1;
        }
    }
}
function getOpacity(opt){
    var temp = window.getComputedStyle(opt).getPropertyValue("opacity");
   console.log(temp);
   return temp;

}






// Uzduotis
var j=0;
var a="-", b="|";
var c= 10;
var mas = [];
var items = [
  [1, 2],
  [3, 4],
  [5, 6]
];
for (var i = 0; i < c ; i=i+2){
    var k=i+1;
    mas[k]=[a];
    for (var j = 0; j < c;j=j+2) {
        mas[i]= [j];
        console.log();
        mas[i+1]=[b];
    }

}
