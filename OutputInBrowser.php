<?php
    echo "Output in Browser";

    $name = "Souli";
    $age = 25;
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";


    var_dump($age);
    echo "<br>";


    print_r($name);
    echo "<br>";

    echo($name);
    echo "<br>";
    echo "----------------";
    echo "Hello World!"; // Affiche "Hello World!"
    echo 42; // Affiche "42"
    echo "<br>";
    echo "----------------";
    //Utilisation : Similaire à echo, mais ne prend qu'un seul argument.
    print "Bonjour"; // Affiche "Bonjour"
    $resultat = print "Hello"; // $resultat = 1
    echo "<br>";
    echo "----------------";
    $tableau = ["a", "b", "c"];
    print_r($tableau);
    /* Sortie :
    Array ( [0] => a [1] => b [2] => c ) */

    //var_dump
    //Utilisation : Affiche type + valeur + structure détaillée (débogage avancé).
    $age = 25;
    var_dump($age); // int(25)

?>
