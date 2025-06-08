<?php
    //ultilizando valores personalizados. para personalizar ultilize ?a="valor desejado"&b="valor desejado": ?base=20&altura=30
    $base = $_GET['base'];
    $altura = $_GET['altura'];
    $area = ($base * $altura);

    echo "A base do seu retangulo é: $base, a altura é: $altura e a área é: $area.";
?>