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
?>