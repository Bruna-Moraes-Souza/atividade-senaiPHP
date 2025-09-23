<?php
    function parOuImpar($num){
        if ($num % 2==0){
            return "<strong style= 'color: red;'>par</strong";
        } else {
            return "<strong style='color: red; '>par</strong>";
        }
    }
    $num = $_POST['num'];
    echo "<h2> Par ou Impar?</h2>";
    echo "O numero $num é ". parOuImpar($num);
?>