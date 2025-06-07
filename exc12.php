<?php
    //ultilizando valores personalizados. para personalizar ultilize ?a="valor desejado"&b="valor desejado" ?a=20&b=30&c=10&d=40&e=11&f=60
    $peso1 = $_GET['a'];
    $peso2 = $_GET['b'];
    $peso3 = $_GET['c'];
    $peso4 = $_GET['d'];
    $peso5 = $_GET['e'];
    $peso6 = $_GET['f'];
    $resultado = (($peso1 * $peso1) + ($peso2 * $peso2) + ($peso3 * $peso3) + ($peso4 * $peso4) + ($peso5 * $peso5) + ($peso6 * $peso6)) / ($peso1 + $peso2 + $peso3 + $peso4 + $peso5 + $peso6);

    echo "o resultado da média ponderada de <br>A = $peso1, <br> B = $peso2,<br> C = $peso3,<br> D = $peso4,<br> E = $peso5<br> e F = $peso6<br> é: $resultado.";
?>
