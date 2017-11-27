//Buvo mano main funckicja siai akimirkai
function myFun() {
    var brand = "AUDI", brand1="toyota";
    // pavercia visas raides stringe i mazases arba didziasiai
    brand = brand.toLowerCase();
    brand1 = brand1.toUpperCase();
    console.log(brand+" "+brand1);
    switch(paimtiId("tekstas")){
        case "Arnas":
            console.log("Atspejai");
            break;
        case "Paulius":
            console.log("Atspejai");
            break;
        case "Tadas":
            console.log("Atspejai");
            break;
        case "Aurimas":
            console.log("Atspejai");
            break;
    }
    matrica();

    // Paima faila pagal id funkcija
    function paimtiId(x){
        var paimtiId = document.getElementById(x).value;
        if (paimtiId ===""){
            alert("nieko neivedet!!");
        }
        else{
            return paimtiId;
        }
    }
    var sk=1;
    function matrica(){
        var data =[];
        var array1 = ["Tomas", "Tomulis","18"],
            array2 = ["Audrius", "Kisielius","40"],
            array3 = ["Olga", "Kisielius","23"],
            array4 = ["Tomas", "Mockus","17"];
            data[0]=array1;
            data[1]=array2;
            data[2]=array3;
            data[3]=array4;
            for(var j=0; j<data.length;j++){
                document.getElementById("ats").innerHTML += data[j]+"<br/>";
                for (var k = 0; k < array1.length;k++){
                    if(data[j][k]=="Olga"){
                        data[j][k+1]="Jarukotiete";
                        //console.log(data[j][k+1]);
                    }

                }
                document.getElementById("ats").innerHTML += data[j]+"<br/>";
            // uzd 4
            }
            for(var m=0;m<data.length;m++){
                var num= parseInt(data[m][2]);
                //console.log(num);
                if(num <= 2017-1980){
                    document.getElementById("ats1").innerHTML += data[m]+"<br/>";
                }
            }

        var mas1=[];
        for (var d = 0; d < 10; d++){
            // masyva priskiri masyvui, arba kuri nauja masyva ir ji
            //push komanda  dedi i teva masyva taip gauni matrica
            mas1[d]=[];
            for(var dd= 0; dd < 10; dd++){
                mas1[d][dd]=Math.floor((Math.random() * 40) + 10);

            }
        }
        console.log(mas1);

    }
        function tryCatch(){
            try{
                var i=1;
                while (i<50) {
                    //console.log("Suskaiciavau",i);
                    if(i >= 40){
                    throw "bla bla bla bla";
                    }
                    if(i >= 45){
                        throw "Atleiskite, nenumatyta klaida";
                    }
                    i++;
                    }
            }
            catch(e){
                //console.log("klaida",e);
            }

        }
        tryCatch();

        // gauname objekto viduja skaiciu eile string faile,
        // kuriame funkcija kuri ji isardytu ir apskaiciuotu vidurki
        function Objektai(){
            function lala(mas){
                var x=mas,vid;
                var sk=0,skaicius=0;
                //console.log(x.length);
                for (var i=0; i<x.length;i++){
                    //var nnn= x.split(",",i);
                    var ss= x.substr(i, 1);
                    if(ss=="," || ss=="0"){
                        continue;
                    }
                    else if(x.substr(i,1)=="1"){
                        sk = sk + parseInt(x.substr(i, 1))*10;
                        console.log( parseInt(x.substr(i, 1)));
                        skaicius= skaicius +1;
                    }
                    else{
                        sk = sk+parseInt(ss);
                        skaicius= skaicius +1;
                        //console.log(sk);
                    }
                    }
                     vid = sk/skaicius;
                     //console.log(sk+" "+vid+" "+x.length);
                     return vid;
                 }
            var obj1 = {name:"Tomas", lastname:"Valinskas", age:18, skaiciai: lala("5,10,10,10,10")};
            var obj2 = {name:"Agne", lastname:"Valinskas", age:21,skaiciai: lala("5,6,4,8,8,8")};
            if (obj1.lastname==obj2.lastname){
                console.log("O Valinskai");
            }
            console.log(obj1);
            console.log(obj2);
            //console.log("nhkjh"+eks);
            // var xx="6,5,4,8";
            //  var xe = parseInt(xx.split(0,1));
            //  console.log(xe);

        }
        Objektai();
        //----------------------Pabaiga musu funkcijos
}
function interface(){
    alert("veikia");
    var rows=4;
    var cols=[1,2,3,4,6,12];
    for (var i = 0; i < cols.length; i++) {
        for (var j = 0; j < cols[i]; j++) {
            var f=12/cols[i];
            document.getElementById("pagr").innerHTML +="<div class='brr bg-primary mt-3 col-"+f+"'>"+i+"</div>";
        }
    }






}
window.onload = interface;
