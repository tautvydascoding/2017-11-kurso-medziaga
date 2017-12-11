$( document ).ready(function() {
  $.ajax({
    url: 'php/bandymas.php',
    type: 'post',
    //cache: false,
    //processData: false,
    //contentType: 'json',
    data:{grupe: "Karstieji"},
    success: function(data){
      //console.log(data);
      var xx = JSON.parse(data);
      console.log(xx);
      //JSON.parse(data);
      clear();
      var ram=0;
      for(var j=0; j<xx.length;j++){
          $('.patiekalai .row').append("<div class='col-lg-3 col-4-md patiekalas'><h4>"+xx[j].pavadinimas+"</h4> <p>"+xx[j].aprasymas+"</p> <h5>"+xx[j].kaina+" Eur"+"</h5> </div>");
          ram++;
          if(ram%3==0){
              $('.patiekalai .row').append("<div class='w-100'></div>");
          }
      }
    },
    error: function(xhl){
      console.log(xhl);
    }
});
});






$('.patiekaloTipas a h5').click(function(index){
  var i = $('.patiekaloTipas a h5').index(this);
  var value1 = $('.patiekaloTipas a h5').eq(i).text();
  console.log(value1);
  $.ajax({
    url: 'php/bandymas.php',
    type: 'post',
    //cache: false,
    //processData: false,
    //contentType: 'json',
    data:{grupe: value1},
    success: function(data){
      //console.log(data);
      var xx = JSON.parse(data);
      console.log(xx);
      //JSON.parse(data);
      clear();
      var ram=0;
      for(var j=0; j<xx.length;j++){
          $('.patiekalai .row').append("<div class='col-lg-3 col-4-md patiekalas'><h4>"+xx[j].pavadinimas+"</h4> <p>"+xx[j].aprasymas+"</p> <h5>"+xx[j].kaina+" Eur"+"</h5> </div>");
          ram++;
          if(ram%3==0){
              $('.patiekalai .row').append("<div class='w-100'></div>");
          }
      }
    },
    error: function(xhl){
      console.log(xhl);
    }
});
});
function clear(){
   $('.patiekalai .row .patiekalas').remove();
}
