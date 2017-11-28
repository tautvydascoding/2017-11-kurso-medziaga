var dvigarsiai = ["ja", "ma", "ki", "tu", "kas", "ly", "po", "ve"];
var names = [];
var rand4to10 = Math.round(Math.random()* (10 - 4) + 4);

for (var i = 0; i < 10; i++) {
    for (var j = 0; j < rand4to10; j++) {
        var kitas1 = Math.floor(Math.random()* dvigarsiai.length);
        var kitas2 = Math.floor(Math.random()* dvigarsiai.length);
        var kitas3 = Math.floor(Math.random()* dvigarsiai.length);
        var kitas4 = Math.floor(Math.random()* dvigarsiai.length);
        var kitas5 = Math.floor(Math.random()* dvigarsiai.length);


        z = dvigarsiai[kitas1] + dvigarsiai[kitas2] + dvigarsiai[kitas3] + dvigarsiai[kitas4] + dvigarsiai[kitas5];
    }
    names.push(z);
}

console.log(names);
