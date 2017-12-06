<?php

define('HOST', 'localhost');
define('DB_NAME', 'hospital11');
define('DB_USERNAME', 'eimantas');
define('DB_PASS', 'password');

// KANIEKSEN I DB
$connection = mysqli_connect(HOST, DB_USERNAME, DB_PASS, DB_NAME); // 80 portas

if($connection){
    echo ("connected to DB");
}else{
    die("ERROR: " . mysqli_connect_error());
}


 // FUNKCIJOS

 // uzduotis 1
 // sukurti f-ja getDoctor($id)

function getDoctor($id, $con){

    $my_sql = "SELECT * FROM doctors
                WHERE id=$id";

    $result = mysqli_query($con, $my_sql);
    if ($result) {
        $result = mysqli_fetch_assoc($result); // MYSQL duomenu obj grazina kaip array
        return $result;
    }else{
        echo("Nepavyko" . mysqli_error($con));
    }

}

$rastasGyd = getDoctor(1, $connection);
// print_r ($rastasGyd);
echo "<br />";

// uzduotis 2
// sukurti f-ja createDoctor( )

function createDoctor($docName, $docLname, $con){

    $my_sql = "INSERT INTO doctors VALUES ('', '$docName', '$docLname')"; // textui reikia 'textas' kabuciu!!!!!
    $result = mysqli_query($con, $my_sql);
    if($result){
        echo "pavyko";
    }else{
        echo "nia";
    }

}
// createDoctor("vardux", "pavardux", $connection);


 // uzduotis 3
 // sukurti f-ja deleteDoctor($id)

function deleteDoctor($id, $con){
    $my_sql = ("DELETE FROM doctors WHERE id=$id");

    $result = mysqli_query($con, $my_sql);
    if($result){
        echo "Deleted . $id";

    }else{
        echo "No delete, still here :D<br />";
    }
}

// deleteDoctor(9, $connection);

 // uzduotis 4
 // sukurti f-ja editDoctor( );

function editDoctor($id, $newName, $newLname, $con){
    $my_sql = "UPDATE doctors
        SET name = '$newName', lname = '$newLname'
        WHERE id = $id;";
    $result = mysqli_query($con, $my_sql);
    if ($result) {
        echo"Changed to . $newName . ' ' . $newLname <br />";
    }else{
        echo "no update, still same :D <br />";
    }
}

// editDoctor(8, "Haris", "Harauskas", $connection);

 // uzduotis 5
 // sukurti f-ja getDoctors();

function getDoctors($con){
    $my_sql = "SELECT * FROM doctors;";
    $result = mysqli_query($con, $my_sql);


    if ($result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>Name</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["ID"] . "</td><td>" . $row["name"]. " " . $row["lname"]. "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
}

$rodo = getDoctors($connection);
print_r($rodo);







//
