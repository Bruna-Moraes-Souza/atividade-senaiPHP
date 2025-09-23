<?php

//a letra "a" faz inserir uma linha sem
// apagar a linha anterior
$arquivo = fopen("dados.txt", "w");
fwrite($arquivo, "Primeira linha de texto\n");
fclose($arquivo);
echo "Arquivo alterado com sucesso!";

//observe que é o mesmo codigo de 
//criar_arquivo.php