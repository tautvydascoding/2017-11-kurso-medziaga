var dienos=[];

$('.dienos ul li a').click(function(index){
  var i = $('.dienos ul li a').index(this);
  var value = $('.dienos ul li a').eq(i).text();
  console.log(value);

$.ajax({
  url: 'php/AJAX_mainjs.php',
  type: 'post',
  data: {dienos: value},
  success: function(data) {
    if(data != "") {
      //$('#textHint').html('<p class="bg-info"><em>'+data+'</em></p>');
      var xx = JSON.parse(data);
      //console.log(xx);

           $(".patiekaloWraper").empty();
           $(".patiekaloWraper .patiekalas").remove();

         //console.log($(".patiekaloWraper .patiekalas").length+"ilgis naujo");
       for(var o=0; o<xx.length;o++){
         console.log(xx[o].pavadinimas);
        $(".patiekaloWraper").append('<div class="patiekalas bg-light"><img src="./img/Sriuba.jpg" alt=""><h1>'+xx[o].pavadinimas+'</h1><p>'+xx[o].aprasymas+'</p><h3>'+"kaina: "+xx[o].kaina+'Eur'+'</h3></div>');
       }
       // var ilgis=$(".patiekalas:last").index();
       // var kint=ilgis-1;
       // var paskutinis = 0;
       // var dabartinis = 0, d=0;
       console.log($(".patiekaloWraper .patiekalas").length+" ilgis naujo");

       resetas();
        startas();
    }
  },
  error: function() {
    console.log("neveikia");
  }
}); // end ajax call
});










// $(".patiekaloWraper").append('<div class="patiekalas bg-info"><img src="./img/Sriuba.jpg" alt=""><h1>4</h1><p>Dienos sriuba</p><h3>1.00e</h3></div>');
// $(".patiekaloWraper").append('<div class="patiekalas bg-info"><img src="./img/Sriuba.jpg" alt=""><h1>5</h1><p>Dienos sriuba</p><h3>1.00e</h3></div>');
// $(".patiekaloWraper").append('<div class="patiekalas bg-info"><img src="./img/Sriuba.jpg" alt=""><h1>6</h1><p>Dienos sriuba</p><h3>1.00e</h3></div>');
// $(".patiekaloWraper").append('<div class="patiekalas bg-warning"><img src="./img/Sriuba.jpg" alt=""><h1>7</h1><p>Dienos sriuba</p><h3>1.00e</h3></div>');
// $(".patiekaloWraper").append('<div class="patiekalas bg-warning"><img src="./img/Sriuba.jpg" alt=""><h1>8</h1><p>Dienos sriuba</p><h3>1.00e</h3></div>');
// $(".patiekalas").eq(3).hide(this);
// $(".patiekalas").eq(4).hide(this);
// $(".patiekalas").eq(5).hide(this);
// $(".patiekalas").eq(6).hide(this);
// $(".patiekalas").eq(7).hide(this);
function getIlgis(){
  var x=$(".patiekaloWraper .patiekalas").length;
  return x;
}
//var ilgis=$(" .patiekalas").length+1;
var ilgis2=$(".patiekalas:last").index();
var paskutinis = 0;
var dabartinis = 0, d=0;
var kint=getIlgis()-1;
//console.log(ilgis+"ilgis");
function startas(){
  var ilgis = getIlgis();
  //var kint=ilgis-1;
  if(ilgis<=2){
    $('.rodykle').hide();
  }
  else{
    $('.rodykle').show();
  }
  console.log(ilgis+"Cia yra ilgis");
    for (var i = 0; i < 3; i++) {
        $(".patiekalas").eq(i).show('slow');
        dabartinis = i;
        paskutinis ++;

        //console.log(dabartinis);
    }
    paskutinis =0;
}
//startas();
// Paslepia visus langus
function resetas(){
  var ilgis = getIlgis();
  //var kint=ilgis-1;
    for (var i = 0; i < ilgis; i++) {
        $(".patiekalas").eq(i).hide();
    }
}
function pasuktiKare(){
    resetas();
    for(var i = kint; i >=0; i--){
        $(".patiekalas").eq(kint).show('slow');
        paskutinis ++;
        kint --;
        //console.log(d+" "+kint);
        if(paskutinis == 1){
            dabartinis=i;
        }
        if(paskutinis == 3){
            break;
        }
    }
    console.log(dabartinis+" dabartinis");
    console.log(kint+" kint");
    paskutinis = 0;
}
function pasuktiDesine(){
    resetas();
    var ilgis = getIlgis();
    for(var i = dabartinis+1; i < ilgis; i++){
        $(".patiekalas").eq(i).show('slow');
        paskutinis ++;
        dabartinis = i;
        if(paskutinis == 1){
            kint=i-1;
        }
        //console.log(paskutinis);
        if(paskutinis == 3){
            break;
        }
    }
    console.log(dabartinis+" dabartinis");
    console.log(kint+" kint");
    paskutinis =0;
}
$(".rodykleL").click(function(){
  var ilgis = getIlgis();
    if(kint == -1 ){
        kint = ilgis;
        console.log(kint);
    }
        pasuktiKare();


});
$(".rodykleR").click(function(){
  var ilgis = getIlgis();
    if(dabartinis >= ilgis-1){
        dabartinis = -1;
    }

        pasuktiDesine();

});



// $(".patiekalas").css("background","red");
