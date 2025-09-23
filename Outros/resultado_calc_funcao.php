<?php
// Função para calcular a media 
function media ($n1, $n2, $n3) {
    return ($n1 + $n2 + $n3) / 3;
}
if ($_SERVER["RESQUEST_METHOD"] == "POST"){
    
}
    $n1= $_POST['n1'];
    $n2= $_POST['n2'];
    $n3= $_POST['n3'];

    function media($n1, $n2, $n3) {

        return ($n1 + $n2 + $n3) / 3;
    }
    echo "O resultado é: ". media($n1, $n2, $n3);

    ?>