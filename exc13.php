<?php //conversor de temperatura
    //ultilizando valores personalizados. para personalizar ultilize ?a="valor desejado"&b="valor desejado": ?celsius=20
    $temperatura_celsius = $_GET['celsius'];
    $temperatura_fahrenheit = ($temperatura_celsius * 9/5) + 32;

    echo "Sua temperatura em Celsius é: $temperatura_celsius. E sua temperatura em Fahrenheit é: $temperatura_fahrenheit";
?>