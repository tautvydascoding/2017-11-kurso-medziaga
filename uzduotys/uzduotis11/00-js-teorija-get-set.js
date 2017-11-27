

//=====================================
document.getElementsByClassName(".super");
document.getElementsByTagName("h1");
document.getElementById("wrapper");

document.querySelector("#wrapper p");
document.querySelectorAll("li");


//===============get "data-..." attribute======================
//We can set several distinct values for a single element and retrieve them later:
$( "body" ).data( "foo", 52 );
$( "body" ).data( "bar", { myType: "test", count: 40 } );
$( "body" ).data( { baz: [ 1, 2, 3 ] } );
$( "body" ).data( "foo" ); // 52
$( "body" ).data(); // { foo: 52, bar: { myType: "test", count: 40 }, baz: [ 1, 2, 3 ]

    //<article id="electriccars"  data-columns="3" data-index-number="12314"   data-parent="cars"  </article>

            //<article
            //    id="electriccars"
            //    data-columns="3"
            //    data-index-number="12314"
            //    data-parent="cars"
            //    ...
            //</article>


    var article = document.getElementById('electriccars');

    article.dataset.columns;     // "3"
    article.dataset.indexNumber; // "12314"
    article.dataset.parent;     // "cars"
    // note: Each property is a string and can be read and written. In the above case setting article.dataset.columns = 5 would change that attribute to "5".

    // or jQuery

    $("#electriccars").data("columns");     //  3
    $("#electriccars").data("indexNumber"); // "12314"
    $("#electriccars").data("parent");     // "cars"

    // change attribute--------
    $("#electriccars").attr("id", "321"); //change the attribute
    // ! not $(this).attr("data-id", "321"); //change the attribute
    //-----select by data
    $("ul[data-slide='" + kintamasis +"']");
//=====================================


//=====================================

//=====================================

//=====================================