var mas = ["vardas", "pavarde", "amdzius"];

function myFun(){
    var a = document.getElementById("Name").value;
    var b = document.getElementById("Surname").value;
    var c = document.getElementById("Age").value;
    for(var i = 0; i <= 2; i++){
        if(mas[i] == "vardas"){
            mas[i] = a;
        }
        else if(mas[i]=="pavarde"){
            mas[i] = b;
        }
        else if(mas[i]=="amdzius"){
            mas[i] = c;
        }
    }
    for(var j=0; j<=mas.length-1; j++){
        document.getElementById("enter").textContent += " "+mas[j];
        console.log(mas[j]);
    }
}


function example(){
    var array = ["laba", "vakaras", "pone", "bynai", 455,4554];
    array.splice(1,0,"diena");//pirmas trina antras ideda, kiti ka ideti i masyva
    console.log(array);

    delete array[4];//istrina duomenis bet ne vieta masyve
    console.log(array);

    var a= array.slice(0,2);//ispajuana is array slota, reika issisaugot, nes neissaugoja
    console.log(a);

    var arr1 = ["as","megstu"] , arr2= ["valgyt"];
    var arr = arr1.concat(arr2);
    console.log(arr);
    console.log(arr1.join(arr2));
}
function uzduotis(){
    var array = ["mano","masyvas"];
        console.log(array);
        //---------------------------1
        array.push("butelis vandens");
        console.log(array);
        // --------------------------2
        array.unshift("ziebtuvelis");
        console.log(array);
        // -------------------------3
        delete array[2];
        console.log(array);
        //-----------------------4
        var mas=[];
        for(var i=0; i<50; i++){
            mas[i]=0;
        }
        console.log(mas);
        // --------------------------5
        var mas1=[];
        var j=0;
        while(j < 50){
            mas1[j]=1;
            j++;
        }
        console.log(mas1);
        // -------------------------6
        var k=0;
        while(k < 50){
            if(k%2 == 1){
                mas1[k]=3;

            }
            k++;
        }
        console.log(mas1);
        // ------------------------------7
        var kk=0;
        while(kk < 50){
            if(kk==0){
                kk= kk+4;
                mas1[kk]=9;
            }
            else{
                kk=kk+5;
                mas1[kk]=9;
            }
        }
        console.log(mas1);
        //------------------------------------8

}
//uzduotis();
//xample();



function matrix(){
    var row = [];
    var col = [];
    var br = [];
    var k=6;
    for (var i = 0; i < k; i++) {
        for (var j = 0; j <= k; j++) {
            row[j]=0;
            if(j%2!=0){
                row[j]="|";
            }
        }
        for(var m=0; m <= k; m++){
                    if(m%2!=0){
                    br[m]="|";
                    }
                    else{
                    br[m]="1";
                    }
        }


    if(i%2 != 0 ){
        col.push(br.join(" "));
    }
    else{
        col.push(row.join(" "));
    }

// console.log(row.join(" "));
// console.log(br.join(" "));
document.getElementById("enter1").innerHTML += row.join(" ")+"<br/>" + br.join(" ")+"<br/>";
}
var tekstas = col.join(" ");
}
function uzd4(){
    var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];
    var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];
    var ilgisV = names.length;
    var ilgisP = lastNames.length;
    //console.log(ilgisV+" "+ilgisP);
    // -------------------------------1
    for (var i = 0; i < ilgisV; i++) {
        if(names[i]=="Rico"){
            var  kelintas= i;
            //console.log("Vardas "+names[i]+" yra " +i+" masyvo eileje");
        }
    }
    // ----------------------2 ir 3
    var inputas= document.getElementById("vardas").value;
    for(var j=0; j < ilgisV; j++){
        if(inputas == names[j]){
            document.getElementById("ats").innerHTML ="vardo vieta masyve "+ j;
            break;
        }
        else if(j+1 == ilgisV){
            document.getElementById("ats").innerHTML = "Tokio vardo nera";
            break;
        }
    }
    for(var k=0; k < ilgisV; k++){
        if(names[k]=="Freida"){
            //console.log("Freida pavarde: "+lastNames[k]);
        }
        else if(names[k]=="Rico"){
            //console.log("Rico pavarde: "+lastNames[k]);
        }
    }
    // --------------------
    var masyvas=[2,16,17,18,19,25,1,54];
    var bol=true;
    var u = masyvas.length;
        for (var o = 0; o < u; o++) {
            for (var p = 0; p < ilgisV; p++) {
                if(masyvas[o]==p){
                    console.log("Asmuo: "+lastNames[p]+" "+names[p]);
                }


    }
}}

function uzd5(){
    var sk=[];
    for(var i = 0; i < 200-50; i++){
        sk[i]=Math.floor((Math.random() * 150) + 50);
        //console.log(sk[i]);
    }
    var m=0;
    var mm=150/10;
    //console.log(mm);
while(m!==mm) {

    for(var j = 0; j < 200-50; j++){
        var masmm=[0];
        var d=0;
        var jj = Math.floor((Math.random() * 150) + 50);
        while(d<masmm.length){
            if(jj==masmm[d]){
                 jj = Math.floor((Math.random() * 150) + 50);
                 continue;
            }
            d++;
        }
        //var jj = Math.floor((Math.random() * 150) + 50);
        if(jj == sk[j]){
            sk[j]=jj*(-1);
            masmm[j]=sk[j];
            console.log(sk[j]);
            m++;
        }
    }
}
console.log();
var min=200-50,max=0;
for(var k=0; k < sk.length; k++){
    if(sk[k] < 0){
        sk[k] *=-1;
    }

    if(max < sk[k]){
        max = sk[k];
    }
    if(min > sk[k]){
        min = sk[k];
    }

    console.log(sk[k]);

}
console.log("min reiksme: "+min+ " max reiksme: " +max);
}
//uzd4();



uzd5();

var aa, bb;
//matrix();
