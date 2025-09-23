<?php
    //echo $_GET['nome'];
    $valor1 = $_GET['valor1'];
    $valor2 = $_GET['valor2'];
    $sinal = $_GET['sinal'];

    $resultado = $valor1.$sinal.$valor2;
    echo $resultado;
    //o sinal de + tem o papel de preencher espaços na URL, para
    //testarmos teremos que colocar em hesadecil ex: sinal=%28
    if($sinal == "+"){
        echo $valor1 + $valor2;
      } 
    if($sinal == "*"){
        echo $valor1 * $valor2;
    }
    if ($sinal == "*"){
        echo
    }

    //teste
    // meu_site.com.br/get.php?valor1=15$valor2=33$sinal=*
