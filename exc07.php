<?php
    //ultilizando valores personalizados. para personalizar ultilize ?salario="valor desejado"&desconto="valor desejado" ?salario=20&aumento=10
    $salario_base = $_GET['salario']; //valor do salario
    $percentual_aumento = $_GET['aumento']; //valor em porcentagem do aumento
    $valor_do_aumento =  ($percentual_aumento / 100) * $salario_base ;
    $novo_salario = $salario_base + $valor_do_aumento ;

    echo "O salario inicial: $salario_base R$;<br> O percentual de aumento: $percentual_aumento %; <br> Valor de aumento: $valor_do_aumento R$; <br> Novo salario: $novo_salario R$.";
?>