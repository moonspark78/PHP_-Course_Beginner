<?php
    echo "Comparison Operator";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    $num1 = 10;
    $num2 = 5;
    $num3="10";

    var_dump($num1 == $num2); //bool(false)
    echo "<br>";

    var_dump($num1 === $num3); //bool(false) car le type de $num1 est int et le type de $num3 est string
    echo "<br>";

    var_dump($num1 != $num2); //bool(true) autre syntaxe: var_dump($num1 <> $num2);
    // si je fais = !== c'est la valeur et le type qui sont comparés
    echo "<br>";

    var_dump($num1 > $num2); //bool(true)   
    echo "<br>";

    var_dump($num1 >= $num2); //bool(true)   
    echo "<br>";
?>