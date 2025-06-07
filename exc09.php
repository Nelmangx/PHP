<?php
    //ultilizando valores personalizados. para personalizar ultilize ?a="valor desejado"&b="valor desejado" ?a=20&b=30&c=40
    $a = 10;
    $b = 5;
    $c = 2;
    $opcao1 = ($a + $b) * $c;
    $opcao2 = $a + ($b * $c);

    echo "o resultado da equação de A = $a, B = $b e C = $c é: $opcao1 e $opcao2.";
?>