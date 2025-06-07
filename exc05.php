<?php
    //ultilizando valores personalizados. para personalizar ultilize ?a="valor desejado"&b="valor desejado" ?a=20&b=30&c=10&d=40&e=11&f=60
    $n1 = $_GET['a'];
    $n2 = $_GET['b'];
    $n3 = $_GET['c'];
    $n4 = $_GET['d'];
    $n5 = $_GET['e'];
    $n6 = $_GET['f'];
    $resultado = ($n1 + $n2 + $n3 + $n4 + $n5 + $n6) / 6;

    echo "o resultado da média simples de A = $n1,  B = $n2, C = $n3, D = $n4, E = $n5 e F = $n6 dividido pela quantidade de variaveis que é 6: $resultado.";
?>