<!-- // uzduotis 1

// A. susikurti meniu masyva -->

<?php

    $menuMas = array("Home", "Gallery", "Contacts", "About");

 ?>

    <!-- // B. atspausdinti visus meniu punktus i HTML -->

<?php

    echo "<nav><ul>";

    foreach ($menuMas as $masIndex => $elementas) {
        echo "<li> $elementas </li>";
    };

    echo "</nav></ul>";
 ?>

<!-- // uzduotis 2
// A. susirasti 6 nuotraukas
// B. susikurti nuotrauku pavadinimu masyva
// C. atspausdinti visas nuotraukas su ciklu, po 3-ris i eilute
-->

<?php

    echo "<strong>Antra uzduotis</strong> <br />";

    $nuotraukos = array('monkey.jpg', 'apple.jpg', 'bubble.jpg', 'fox.jpg', 'island.jpg', 'parrot.jpg');

    foreach ($nuotraukos as $stalcius => $value) {

        if ($stalcius == 3) {
            echo " <br />";
        }
        echo '<img src="./img/' . $value . "\"/>" ;
        $stalcius++;
    }


 ?>


<!-- // uzduotis 3
// sukurti matrica kurioje bus saugoma kiekvieno prekes info: Antraste, img pavadinimas, prekes aprasymas, kaina
// A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina
// B. i masyva visosPrekes, ideti "preke" masyva
// C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach) -->

<?php

    echo "<br /><br /><strong>Trecia uzduotis</strong> <br />";

    $visosPrekes = array();

    $preke = array("name" => 'Antraste', "img" => 'apple.jpg', "content" => 'aprasymas', 'kaina');
    $preke1 = array("name" => 'Antraste1', "img" => 'apple.jpg', "content" => 'aprasymas1', 'kaina1');
    $preke2 = array("name" => 'Antraste2', "img" => 'apple.jpg', "content" => 'aprasymas2', 'kaina2');

    $visosPrekes[0] = $preke;
    $visosPrekes[1] = $preke1;
    $visosPrekes[2] = $preke2;

    // print_r($visosPrekes);

    for ($i = 0; $i < count($visosPrekes); $i++) { ?>
        <img src="./img/<?php echo $visosPrekes[$i]['img'];?>" width="200px" height="200px">
        <h2>  <?php echo $visosPrekes[$i]['name']; ?>  </h2>
        <p>  <?php echo $visosPrekes[$i]["content"]; ?>  </p>
    <? } ?>





















<!--  -->
