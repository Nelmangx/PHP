<?php
    //ultilizando valores personalizados. para personalizar ultilize ?a="valor desejado"&b="valor desejado" ?preco1=30&quantidade1=10&preco2=5&quantidade2=25
    $preco_produto1 = $_GET['preco1'];
    $quantidade_produto1 = $_GET['quantidade1'];
    $preco_produto2 = $_GET['preco2'];
    $quantidade_produto2 = $_GET['quantidade2'];
    $valor_total_carrinho = ($preco_produto1 * $quantidade_produto1) + ($preco_produto2 * $quantidade_produto2);
    echo "O valor total $valor_total_carrinho R$ no seu carrinho ";
?>