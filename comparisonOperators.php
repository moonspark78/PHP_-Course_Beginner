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
?>