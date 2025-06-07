<?php
    //ultilizando valores personalizados. para personalizar ultilize ?valor="valor desejado"&desconto="valor desejado" ?valor=20&desconto=10?valor=20&desconto=10
    $valor_original = $_GET['valor']; //valor do produto
    $percentual_desconto = $_GET['desconto'];
    $resultado = ($percentual_desconto / 100) * $valor_original ;
    $valor_do_desconto = $resultado ;
    $valor_final = $valor_original - $resultado;

    echo " o produto de valor: $valor_original com o desconto de : $percentual_desconto tem o valor final de: $valor_final. Foi descontado: $valor_do_desconto";
?>