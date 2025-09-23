<?php
// Funcoes.php
function saudacao($nome) {
    return "Bem-Vindo, $nome! Sua participação for confirmada!";
}


function banco_dados($db){
    return"Seu banco, $db, foi conectado com sucesso!";
}

function fiap($aluno1, $aluno2, $aluno3, $observacao){
    echo "Lista de alunos com observações: </h3>";
    echo "<ul>";
    echo "<li> $aluno1 </li>";
    echo "<li> $aluno2 </li>";
    echo "<li> $aluno3 </li>";
    echo "</ul>";
    echo "Esses alinos tomaram FIAP por: $observacao";
}