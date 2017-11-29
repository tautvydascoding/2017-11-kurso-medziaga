var count = 0;
var kartai = 0;

function loopas (){
  var k = 0 ;
  for (var i = 0; i < 4; i++) {

      if (Math.random() < 0.3){
        k ++;
      }
  }
  console.log("suskaiciuojame kiek neigiamu: ", k);
  count = k;
  return k;
}


while ( count <= 3){
  loopas();
  kartai += 1;
}
console.log(kartai);
//========================================================================================













// =============================================
