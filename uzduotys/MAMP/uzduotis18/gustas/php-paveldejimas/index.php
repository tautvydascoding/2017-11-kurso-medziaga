<?php


//susikurti dvi klases zmogus ir moteris ir vyras
// moteris ir vyras paveldi zmogus
//zmogus turi: public ugis, protected svoris,  private pinigai
//klase moteris turi: estrogenu kiekis,
//klase vyras turi: testosterono

//uzduotis: susikuriti objekta: Monika ir Tadas
//issivesti ju ugi, svori, pinigus ir hormona

include_once("./vyras.php");
include_once("./moteris.php");


$monika = new Moteris();
    echo 'Monika ugis: ' . $monika->ugis . "<br />";
    $monika->ugis = 185;
    echo 'Monika ugis: ' . $monika->ugis . '<br />'; // tado ugis
    echo 'Monika svoris: ' . $monika->getSvoris() . '<br />'; // tado ugis

    $monika->setSvoris(55);
    echo 'Monika svoris: ' . $monika->getSvoris() . '<br />'; // tado ugis

    $monika->setPinigai(550);
    echo 'Monikos pinigai: ' . $monika->getPinigai() . '<br />'; // tado ugis

    $monika->setHormones(1550);
    echo 'Monikos hormonai: ' . $monika->getHormones() . '<br />'; // tado ugis

    $monika->print();

    echo "<br />";




    $tadas = new Vyras();
        // echo 'Tado ugis: ' . $tadas->ugis . "<br />";
        // $tadas->ugis = 185;
        // echo 'Tado ugis: ' . $tadas->ugis . '<br />'; // tado ugis
        // $tadas->print();

















//
