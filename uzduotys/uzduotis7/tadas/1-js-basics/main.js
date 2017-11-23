var alga = 500;
console.log("Alga yra", alga);

alga++; // alga = alga + 1;

console.log("Padidinta alga yra", alga);

alga--;

console.log("Sumazinta alga yra", alga);

// alga += 100; //
//
// console.log("Alga po metinio pakilimo", alga);

//---------------------------IF----------------------------------
// if( salyga ){
//   //jeigu salyga yra tiesa
// } else if (true) {
//
// } else {
//   //jeigu salyga yra netiesa
// }

if(alga <= 500){
  console.log("Alga yra maziau arba lygi 500!");
} else {
  console.log("Hell no! Alga yra didesne nei 500");
}

console.log("----------------------------------------");

if (alga < 380) {
  console.log("Gaunate pasalpa");
} else if (alga >= 380 && alga < 500) {
  console.log("Nereikia moketi mokesciu");
} else {
  console.log("Reikia moketi papildomus mokescius 9%");
}
