var vardas="Saulius", pavarde="Babrauskas";
var x=150;
var y=100;
var spalva;
var z;
var tekstas=vardas +" " + pavarde + " ananasas";
z= x + y ;
console.log("tavo vardas:", vardas);
console.log("x + y =", z);
console.log(tekstas);

//funkcijos aprasymas
function spausdintiPas(x){
        var i = x;
        for (j = 1; j<=i; j++) {
            console.log("Suskaiciuoju", j);
        }
}
//funkcijos iskvietimas
function myFunction(){
    var i = document.getElementById("aaaa").value;
    document.getElementById("demo").innerHTML= i;
    return i;
}
function myFun(){
    var i = myFunction();
    if(i == 0){
        spausdintiPas(1);
    } else if (i != 'undefined'){
        spausdintiPas(i);
    }
}
function test1(){
    var i = document.getElementById("With").value;
    var j=i+"px";
    if (i > 901) {
        i= 900;
        document.getElementById("sirdis").style.width = i+"px";
    } else{
        document.getElementById("sirdis").style.width = i+"px";
        console.log(j);
    }

}
function test2(){
    var i =  document.getElementById("Opa").value;
    if (i > 1){
        document.getElementById("sirdis").style.opacity = 1;
    }
    else if(i < 1)
    {document.getElementById("sirdis").style.opacity = i;
    console.log(i);
    }

}



//console.log(najas());
//spausdintiPas(najas());
