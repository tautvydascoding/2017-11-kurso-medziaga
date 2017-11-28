console.log("lasbas");
var elmAside = document.createElement("img");
$("main").append("<img src='./1.jpg'>");
var elm = document.createElement("h1");
elm.innerHTML = "tekstas";
document.getElementById("main").innerHTML +="<header class='bg-warning h-50'><h1>Labas</h1></header>"+
"<footer class='bg-danger'><h1>Viso</h1></footer>";
$("footer h1").addClass("text-primary");
$("footer").append("<img src='./1.jpg'>");
$("header").append("<img src='./1.jpg'>");
$("img").addClass('w-25 h-25');
$("header img").addClass("logo");
$("footer").before("<div class='bg-success'>laba</div>");
$("main").append("<article class='bg-secondary'><h1>Sveiki</h1><p>Stai ir as </p></article>");
$("article").appendTo("div");
//$(".logo").appendTo("");
// -----------------------------------------
document.getElementById("uzd").innerHTML +="<ul><li>Home</li> <li>Galary</li><li>About</li><li>Contacts</li></ul>";
$("section li").click(function(){
    var index = $("section li").index(this);
    var ilgis = $("section li").length ;
    for(var i = 0 ; i < ilgis; i++){
        if($("section li").eq(i).hasClass("active")){
            $("section li").eq(i).removeClass("active");
        }
    }
    console.log(ilgis);
    $("section li").eq(index).addClass("active");
});

// --------------------
var mas = ["Home","About","Meniu","Contacs","Style"];
var len = mas.length-1;
//console.log(len);
    $("#uzd2").append("<ul></ul>");
    $("#uzd2 ul").addClass("ppp");
//document.getElementById("uzd2").innerHTML +="<ul></ul>";
for(var j=0; j<len;j++){
    //$("#uzd2 ul").append("<li></li>");
    document.getElementsByClassName("ppp")[0].innerHTML +="<li>"+mas[j]+"</li>";
}


var straipsnis = ["us tekstas naudojamas spaudos ir grafinio"," Bonorum et Malorum“ (Apie gėrio ir blogio ","tock, lotynų kalbos profesorius Hampden-Sydney (JAV) koledže, išrinko vieną iš neaiškesnių "," e. Šis etikos teorijos traktatas buvo labai p","penkis amžius, bet","dusPageMaker, kurioje buvo ir Lorem Ipsum"];
$("#uzd2").append("<section class='bg-dark'></section>");
$("#uzd2 section").addClass("row");
console.log(straipsnis.length);
for(k=0; k<straipsnis.length; k++){
    console.log("veikia");
    document.getElementsByClassName("row")[0].innerHTML += "<div class='col-4'><p class='text-center'>"+straipsnis[k]+"</p></div>";
    if(k==2){break;}
}
// -------------------------------------------
var array=["bg-info","bg-warning","bg-dark","bg-light","bg-primary","bg-danger","bg-success","bg-secondary"],
    array1=["bg-warning","bg-info","bg-light","bg-dark","bg-danger","bg-primary","bg-secondary","bg-success"];

function ane(){
    $('*').hasClass("bg-info");
    var l= $('*').length;
    console.log(array.length);
    for(var hh=0;hh<l;hh++){
        for (var h=0; h<array.length;h++){
            if($('*').eq(hh).hasClass(array[h])){
                console.log("!!");
                $('*').eq(hh).removeClass(array[h]);
                $('*').eq(hh).addClass(array1[h]);
                break;
            }
        }
    }
}
ane();
//$('*').removeClass("bg-info");

//x.switchClass("bg-warning");















//    $("section li").eq(1).addClass("active");
