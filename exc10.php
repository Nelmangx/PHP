<?php
    //ultilizando valores personalizados. para personalizar ultilize ?a="valor desejado"&b="valor desejado" ?altura=180&peso=48
    $peso = $_GET['peso'];
    $altura = $_GET['altura'];
    $imc = $peso / ($altura * $altura);

    echo "O IMC É: $imc";
?>