function validateForm() {
    var x = document.forms["straipsnio-siuntimas"]["autvardas"].value;
    var y = document.forms["straipsnio-siuntimas"]["title"].value;
    var z = document.forms["straipsnio-siuntimas"]["tekstas"].value;

    if(x== 0){
        alert("Name must be filled out");
        return false;
    } else if(y==0){
        alert("Title must be filled out");
        return false;
    }else if(z==0){
        alert("Content must be filled out");
        return false;
    }}
