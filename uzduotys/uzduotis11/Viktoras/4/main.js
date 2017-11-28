$('<footer></footer>', {
    "class": 'bg-warning',
    "height": "200px",
    text: "click me!",
    click: function (){
        $(this).hide(1000, function(){
        alert("The paragraph is now hidden");
    });
}
}
).appendTo('body');
