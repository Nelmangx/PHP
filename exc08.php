<?php
    //ultilizando valores personalizados. para personalizar ultilize ?a="valor desejado"&b="valor desejado" ?nome=Yuri&sobrenome=Santos&idade=18&cidade=Linhares
    $nome = $_GET['nome'];
    $sobrenome = $_GET['sobrenome'];
    $idade = $_GET['idade'];
    $cidade = $_GET['cidade'];

    echo " OLÁ MUNDO: <br> Seu nome: $nome; <br> Seu sobrenome: $sobrenome; <br> Sua idade:$idade; <br> Sua cidade: $cidade. ";
?>