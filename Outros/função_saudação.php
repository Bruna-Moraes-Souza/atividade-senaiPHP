<?php
    //Esta e uma função
    //Inicio da funçaõ saudação
    function saudacao($nome){
    return "Olá, $nome!";
    }
    //Fim da função saudação
    echo("--------------------------------");

// Definição da função
function nomedaFuncao ($parametro1, $parametro2) {
    // Codigo que sera executado
    $resultado = $parlamento1 + $parametro2;
    return $resultado; // retorna um valor
}
// Chamando a função 
$frase = saudacao("Bruna");
$soma = nomedaFuncao(5, 10);
echo "$frase,  resultado é: $soma";
?>