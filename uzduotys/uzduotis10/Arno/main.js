function mainFunction(){
    // Pirma uzduotis________________________
    var divGarsiai=["ty","ni","ma","ag","ne","so","ja","ra","ba","sa","lo","me",
"pa"];
    var vardai=[];

        function makeDvi() {
                var text = "";
                var text1="";
                var masZ=[];
                var possible = "abcdefghijklmnopqrstuvwxyz";
                var balsiai=["a","e","i","o","u","i","y"];
                var priebalsiai=["r","t","p","s","d","f","g","h","j","k","l","z","c","v","b","n","m"];
                var dvigarsis;
                for(var i=0; i<50;i++){
                    var numbar = Math.floor(Math.random() * balsiai.length);
                    var number1= Math.floor((Math.random() * priebalsiai.length) );
                    dvigarsis = priebalsiai[number1]+balsiai[numbar];
                    if (i%3==0){
                            dvigarsis = balsiai[numbar]+priebalsiai[number1];
                    }
                    masZ[i]=dvigarsis ;
                }
                    var k=0;
                    var random;
                    var randomA;
                    var names=[];
                    for (var m = 0; m < 10; m++) {
                        names[m]="";
                    }
                    while(k<10){
                        random = Math.floor(Math.random() * 6)+4;
                        for (var j = 0; j < Math.trunc(random/2); j++) {
                            randomA =  Math.floor(Math.random() * masZ.length);
                            names[k] +=masZ[randomA];
                        }
                        k++;
                    }
                    var matx=[];
                    for(var n=0; n<10;n++){
                        var ran = Math.floor(Math.random() * names.length);
                        matx[n]=[];
                        matx[n][0]=names[ran];
                        matx[n][1]=names[Math.floor(Math.random() * names.length)];
                        matx[n][2]= Math.floor(Math.random() *10);

                    }
                    console.log(masZ);
                    console.log(names);
                    console.log(matx);
                }

makeDvi();



//console.log(makeid());
}
mainFunction();
