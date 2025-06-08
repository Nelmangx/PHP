<?php
    //ultilizando valores personalizados. para personalizar ultilize ?a="valor desejado"&b="valor desejado": ?preco=300&taxa=10
    $preco_base = $_GET['preco'];
    $taxa_imposto  = $_GET['taxa'];
    $valor_do_imposto = ($taxa_imposto / 100) * $preco_base;
    $preco_final = $valor_do_imposto - $preco_base;

    echo "O preço sem taxa do seu produto é: $preco_base R$; <br> O valor da taxa é: $taxa_imposto %; <br> O valor do imposto: $valor_do_imposto R$; <br> E o preço final do seu produto é: $preco_final R$. "
?>