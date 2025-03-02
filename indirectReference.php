<?php
    echo "indirect Reference";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    $user = "Souli";
    $user = "David";
    echo $user; // Affiche "David"
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    $user = "Souli";
    $$user = "David"; // Équivaut à $Souli = "David"
    echo $user; // Affiche "Souli"

    /* 
        Ainsi, $$user = "David" devient $Souli = "David" (une nouvelle variable $Souli est créée).
        $user n'est pas modifiée, donc echo $user affiche toujours "Souli".
    */

    /* 
            Différence entre $user et $$user :
                $user : Variable classique contenant une valeur directe (ex: "Souli").
                $$user : Variable variable qui utilise la valeur de $user comme nom de variable.
                Si $user = "Souli", alors $$user équivaut à $Souli.
    */
?>